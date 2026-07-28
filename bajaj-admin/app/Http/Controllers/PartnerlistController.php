<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ratings;
use App\Models\AvailableBed;
use App\Models\Tpamaster;
use Validator;
use  Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Models\Bookmarked;
use App\Models\Category;


class PartnerlistController extends ApiController
{
    /**
     * @OA\GET(
     *   path="/api/v1/partner/list",
     *  tags={"Partner List "},
     * security={ {"bearerAuth": {} }, },
     *   summary="Partner List",
     *   operationId="sendOtp",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="start",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="limit",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * 
     *      @OA\Parameter(
     *          name="search",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="order",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * 
     * )
     *
     */



 public function partnerList(Request $request) {
        
    $pi80 = M_PI / 180; 
    $lat1=$request->latitude;
    //echo $lat1;exit;
    $lon1=$request->longitude;
    $r = 6372.797; // mean radius of Earth in km 
    //muliply by 1.69344 to convert miles to km 
    $sqlDistance=DB::raw('(SQRT(POW(69.1 * (n.latitude - '.$lat1.'), 2)
    + POW(69.1 * ('.$lon1.' - n.longitude) * COS(n.latitude / 57.3), 2)) )*1.609344');

    //AS distance FROM partners ORDER BY distance 


  $partner = DB::table('partners as n')
   ->select( 'n.*')
    ->selectRaw("{$sqlDistance} AS distance")
   // ->where('n.type',1)
    ->orderBy('distance','ASC');

    $search=$request->input('search');
 $total = $partner->get()->count();

       if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $partner->offset($offset)->limit($limit);
            $temp = $partner->get();
       
        } else {

            $temp = $partner->get();
        }

      foreach ($temp as $value) {
           // $value->is_verified='1';
            $value->time_to_reach='15 min';
            $value->number_of_doctors='';
                $dt=$value->doctors;
                        if (!empty($dt) && !is_null($dt)) {
                        $strtoarray=explode(" ",$dt);  
                        $value->number_of_doctors=count($strtoarray);      
            }

          }


    foreach ($temp as $value) {
            $value->number_of_specialities='';
                $dt=$value->speciality;
                        if (!empty($dt) && !is_null($dt)) {
                        $strtoarray=explode(" ",$dt);  
                        $value->number_of_specialities=count($strtoarray);      
            }

          }

    foreach ($temp as $value) {
            $value->number_of_beds='';
                $dt=$value->id;
                        if (!empty($dt) && !is_null($dt)) {
                        
                        $cnt = AvailableBed::where('partner_id',$dt)->get()->sum('total_beds');

                        $value->number_of_beds=$cnt;      
            }

          }

     foreach ($temp as $value) {
            $value->number_of_insurance='';
                $tpa=$value->tpa;
                        if (!empty($tpa) && !is_null($tpa)) {
                        $tpa_array=explode(",",$tpa);
                      //  print_r($tpa_array);exit; 1 ,2,4
                        $arr=array();
                        $str='';
                        for($i=0;$i<count($tpa_array);$i++)
                        {
                            $str.=',';
                            //  $partner->where('speciality','like','%'.$val.'%');
                            $query=Tpamaster::select('insurance_companies')->where('id',$tpa_array[$i])->first();
                            $qr_res=explode(",",$query['insurance_companies']);
                            if($query)
                            {
                                $str .= $query['insurance_companies'];
                            }
                        }
                        
                $st=explode(",",$str);
                $unique=array_unique($st);
                $value->number_of_insurance=count($unique)-1;
            }

          }

          // foreach ($temp as $value) {
          //   $value->total_ratings='';
          //       $dt=$value->ratings;
          //       if (!empty($dt) && !is_null($dt)) {
          //           // $average_rate= Ratings::where('partner_id',$dt)->get()->avg('rating');
          //           // $average_ratings=round($average_rate,1);
          //               $value->total_ratings=$dt.'ratings'.;      
          //   }

          // }


       return ApiController::apiCollection($temp,$total);

    }




  public function get_filtered_list(Request $request) {
        $pi80 = M_PI / 180; 
        $lat1=$request->latitude;
        $lon1=$request->longitude;
        $r = 6372.797; // mean radius of Earth in km 

        $sqlDistance=DB::raw('(SQRT(POW(69.1 * (n.latitude - '.$lat1.'), 2)
        + POW(69.1 * ('.$lon1.' - n.longitude) * COS(n.latitude / 57.3), 2)) )*1.609344 ');


        $category_id=$request->category_id;
        $partner = DB::table('partners as n')
        ->select( 'n.*')
            ->selectRaw("{$sqlDistance} AS distance")
            ->where('is_delete',0);
        //   ->orderBy('distance','ASC');
        $search=$request->input('search');
   

     if ($request->input('sort_by_discount') && !empty($request->input('sort_by_discount'))) {
            $order = $request->input('sort_by_discount');
            $partner->orderBy('max_disc',$order);
        }
       else if ($request->input('sort_by_price') && !empty($request->input('sort_by_price'))) {
            $order = $request->input('sort_by_price');
            if($order=='ASC')
            {
            $partner->orderBy('min_deposite','ASC');
            }else{
                $partner->orderBy('max_deposite','DESC');
            }
        }
        else  
        {
             $partner->orderBy('max_disc','DESC')->orderBy('distance','ASC');
        }

    if ($request->input('partner_type') && !empty($request->input('partner_type'))) {
            $partner_type = implode(",",$request->input('partner_type'));
            $pt=explode(",",$partner_type);
            $partner->whereIn('n.partner_type', $pt);
        }

    if ($request->input('hospital_type') && !empty($request->input('hospital_type'))) {
            $hospital_type = implode(",",$request->input('hospital_type'));
            $pt=explode(",",$hospital_type);
            $partner->whereIn('n.hospital_type', $pt);
        }

     if ($request->input('range') && !empty($request->input('range'))) {
            $range=$request->input('range');
            $partner->having('distance' ,'<=',$range);
        }
        else{
            $partner->having('distance','<=',10);
        }
        

         if ($request->input('doctor_id') && !empty($request->input('doctor_id'))) {
            $doctor_id = $request->input('doctor_id');
             $partner->where('doctors','like','%'.$doctor_id.'%');
        }

        if ($request->input('ratings') && !empty($request->input('ratings'))) {

            $ratings = json_decode($request->input('ratings'));
            // $average_rate= Ratings::select('partner_id')
            // ->groupby('partner_id')
            // ->havingRaw('AVG(rating) >= '.$ratings)
            // ->get();
                
            // $array = json_decode(json_encode($average_rate), true);
            // $cnt=sizeof($array)-1;
            // $arr=array();
            // $x=0;
            // while($x <= $cnt) 
            // {
            // $s=$array[$x]['partner_id'];
            // $new_arr=array_push($arr,$s);       
            // $x++;       
            // }
             
            //  $na=implode(",",$arr);;
             $partner->where('ratings', '>=',$ratings);
      }

       if ($request->input('treatment') && !empty($request->input('treatment'))) {
       $treatment =$request->input('treatment');
                        $arr1=array();
                        for($i=0;$i<count($treatment);$i++)
                        {
                            $query=DB::table('partners')->select('id')->where('treatment','like','%'.$treatment[$i].'%')->get()->toArray();
                            foreach($query as $val)
                            {
                            $new_arr=array_push($arr1,$val->id);
                            }
                        }
                     
                $unique=array_unique($arr1);
                //print_r($arr1);exit;
                $st=implode(",",$unique);
                $partner->whereIn('id', $arr1);            

        }
      

        if ($request->input('insurance_id') && !empty($request->input('insurance_id'))) {
            $insurance_id =$request->input('insurance_id');
          foreach($insurance_id as $val)
            {
            
            $int = (int)$val;
            $partner->where('insurance_id',$int);
            
            };
        }

         $total = $partner->get()->count();
       if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $partner->offset($offset)->limit($limit);
            $temp = $partner->get();
            //$total = $partner->get()->count();
        } else {

            $temp = $partner->get();
            
        }

       

           $user= response()->json(auth('app_api')->user());
        $array = json_decode(json_encode($user), true);
        if(!empty($array['original']))
        {
         $user_id=$array['original']['id'];
         foreach ($temp as $value) {
            $value->is_favourite='';
                $dt=$value->id;
                if (!empty($dt) && !is_null($dt)) {
                    $favourite= Bookmarked::where('partner_id',$dt)->where('customer_id',$user_id)->first();
                    if($favourite)
                        {
                        $value->is_favourite=$favourite->is_marked;
                        }else{
                            $value->is_favourite=0;
                        }

                    }

             }
        }
        else{
            foreach ($temp as $value) {
             $value->is_favourite=0;
         }
         }
           
         

         foreach ($temp as $value) {
            $value->number_of_doctors=0;

                $dt=$value->doctors;
                        if (!empty($dt) && !is_null($dt)) {
                        $strtoarray=explode(",",$dt);  

                        $value->number_of_doctors=count($strtoarray);      
            }

          }

    


    foreach ($temp as $value) {
            $value->number_of_specialities=0;
                $dt=$value->speciality;
                        if (!empty($dt) && !is_null($dt)) {
                        $strtoarray=explode(",",$dt);  
                        $value->number_of_specialities=count($strtoarray); 
            }

          }

    foreach ($temp as $value) {
            $value->number_of_beds=0;
                $dt=$value->id;
                        if (!empty($dt) && !is_null($dt)) {
                        
                        $cnt = AvailableBed::where('partner_id',$dt)->get()->sum('total_beds');

                        $value->number_of_beds=$cnt;      
            }

          }

// if ($request->input('latitude') && !empty($request->input('latitude')) && $request->input('longitude') && !empty($request->input('longitude'))) {
          foreach ($temp as $value) {
            $value->time_to_reach=0;
            $lat2=$value->latitude;
            $lon2=$value->longitude;
          //  $res=Helpers::distance_matrix($lat1,$lon1,$lat2,$lon2);
         $res=Helpers::distance_matrix(trim($lat1),trim($lon1),trim($lat2),trim($lon2));
            if (strpos($res, 'hour') !== false) {
                $a= str_replace("hour","hr",$res);
            }
             else{
                $a=$res;
            }

           // print_r($res);exit;
            $value->time_to_reach=$a;      
            }

    //}
      
        foreach ($temp as $value) {
            $value->number_of_insurance='';
                $dt=$value->insurance_id;
                        if (!empty($dt) && !is_null($dt)) {
                        $strtoarray=explode(",",$dt);  
                        $value->number_of_insurance=count($strtoarray);      
            }

          }

    // foreach ($temp as $value) {
    //         $value->number_of_insurance=0;
    //             $tpa=$value->tpa;
    //                     if (!empty($tpa) && !is_null($tpa)) {
    //                     $tpa_array=explode(",",$tpa);
    //                   //  print_r($tpa_array);exit; 1 ,2,4
    //                     $arr=array();
    //                     $str='';
    //                     for($i=0;$i<count($tpa_array);$i++)
    //                     {
    //                         $str.=',';
    //                         $query=Tpamaster::select('insurance_companies')->where('id',$tpa_array[$i])->first();
    //                         $qr_res=explode(",",$query['insurance_companies']);
    //                         if($query)
    //                         {
    //                             $str .= $query['insurance_companies'];
    //                         }
    //                     }
                        
    //             $st=explode(",",$str);
    //             $unique=array_unique($st);
    //             $value->number_of_insurance=count($unique)-1;
    //         }

      //    }

         // print_r($tpa);exit;

          foreach ($temp as $value) {
            $value->total_ratings='';
            $value->is_selected=0;
            $value->full_address='';
                $dt=$value->id;
                if (!empty($dt) && !is_null($dt)) {
                    // $average_rate= Ratings::where('partner_id',$dt)->get()->avg('rating');
                    // $average_ratings=round($average_rate,1);
                    // $rating=sprintf("%.1f", $average_ratings);
                    // $rating.= " ";
                        $value->total_ratings=$value->ratings.' ratings';

            }

            $ad1=$value->address;
            $ad2=$value->address2;

            $st_nm=DB::table('states')->select('state')->where('id',$value->state)->first();
            if($st_nm)
            {
            $st=$st_nm->state;
            }else {$st='';}
            $ct_nm=DB::table('cities')->select('city')->where('id',$value->city)->first();
            if($ct_nm)
            {
            $ct=$ct_nm->city;
            }else{$ct='';}
            $pin=$value->pincode;

            $value->full_address= $ad1.", ".$ad2." ".$ct.", ".$st." - ".$pin ;

          }

           foreach ($temp as $value) {
            $value->available_bed=[];
             $total_beds = DB::table('available_beds')->select('id','partner_id','category_id','price','deposite','total_beds')->where('partner_id',$value->id)->get();
             foreach($total_beds as $val)
             {
            $val->category_name='';
                $dt=$val->category_id;
                        if (!empty($dt) && !is_null($dt)) {
                        
                        $cnt = Category::where('id',$dt)->first();
                         $ac=$cnt->is_ac;

                            if($ac==1)
                            {
                                $a='Non-AC';
                            }else {
                                $a='AC';
                            }
                        $val->category_name=$cnt->category.''.'('.$a.')';   
            }
        }
            $value->available_bed=$total_beds;
          
         
     }
            return ApiController::apiCollection($temp,$total);

    }  

    public function typeList() {
        
     $type = DB::table('partners_type');
     $total = $type->get()->count();
     $temp = $type->get();
    
       return ApiController::apiCollection($temp,$total);

    }
     
}