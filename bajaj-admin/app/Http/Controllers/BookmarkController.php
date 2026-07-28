<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Bookmarked;
use App\Models\User;
use App\Models\Upload;
use App\Models\Ratings;
use App\Models\AvailableBed;
use App\Models\Tpamaster;
use Validator;
use  Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Models\Category;

class BookmarkController extends ApiController
{

         

    /**
     * @OA\POST(
     *   path="/api/v1/user/addBookmark",
     *  tags={"Bookmark"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Insert/Update Bookmark",
     *   operationId="bookmark",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="partner_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="customer_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="is_marked",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

    //insert
    public function addBookmark(Request $request) {

        $rules=[
            'partner_id' => 'required',
            'customer_id' => 'required',
            'is_marked' => 'required',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

if (Bookmarked::where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->exists()) {
$check=Bookmarked::where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->first();

    $user = DB::table('favourite')->where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->first();
    $id=$user->id;

     $ambulance = Bookmarked::find($id);
     $ambulance->is_marked = is_null($request->is_marked) ? $ambulance->is_marked : $request->is_marked;
     $ambulance->save();
     if($request->is_marked=='1')
     {
        $msg="Added successfully";
     }else{
        $msg="Removed successfully";
     }
     return response()->json(
                        [
                            "statusCode" => 201,
                            "message" => $msg,
                            "data" => $ambulance
                        ], 200);

   } else {


    $ambulance = new Bookmarked;
    $ambulance->partner_id = $request->partner_id;
    $ambulance->customer_id = $request->customer_id;
    $ambulance->is_marked = $request->is_marked;
    $ambulance->save();

    if($request->is_marked=='1')
     {
        $msg="Added successfully";
     }else{
        $msg="Removed successfully";
     }
     return response()->json(
                        [
                            "statusCode" => 201,
                            "message" => $msg,
                            "data" => $ambulance
                        ], 200);
}
  }



/**
     * @OA\GET(
     *   path="/api/v1/user/bookmark/list",
     *  tags={"Bookmark"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Bookmark List",
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
     *          name="customer_id",
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



 public function bookmarkList1(Request $request) {
        
    $search=$request->input('search');
    $orderr=$request->input('order');
    $customer_id=$request->input('customer_id');
    if($orderr=='')
    {
        $order='ASC';
    }else
    {
        $order=$orderr;
    }



 $states = DB::table('favourite')->where('is_marked',1)->where('customer_id',$customer_id);
 $total = $states->get()->count();

        if($search =='')
        {
            $states->orderby('id',$order);
        }
     
       if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $states->offset($offset)->limit($limit);
            $temp = $states->get();
       
        } else {

            $temp = $states->get();
        }

      
foreach ($temp as $value) {
            $value->partner_name='';
                        $tImage = Bookmarked::where('partner_id', $value->partner_id)->get();

                        if (!empty($tImage) && !is_null($tImage)) {
                            foreach ($tImage as $image) {
                                if (!empty($image->partner_id) && !is_null($image->partner_id)) {
                                    $path = User::select('title')->where('id', $image->partner_id)->first();
                                   $value->partner_name =$path->title;
                                }
                            }   
            
            }
          }



       return ApiController::apiCollection($temp,$total);

    }
 

 public function bookmarkList(Request $request) {
        $customer_id=$request->input('customer_id');
       $query=DB::table('favourite')->select('partner_id')->where('customer_id',$customer_id)->where('is_marked',1)->get();
       $array = json_decode(json_encode($query), true);
       $arr=array();
       foreach($query as $val)
         {
         $new_arr=array_push($arr,$val->partner_id);
        }
  $partner = DB::table('partners as n')
   ->select( 'n.*')->wherein('id',$arr);
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

     // foreach ($temp as $value) {
     //        $value->number_of_insurance=0;
     //            $tpa=$value->tpa;
     //                    if (!empty($tpa) && !is_null($tpa)) {
     //                    $tpa_array=explode(",",$tpa);
     //                  //  print_r($tpa_array);exit; 1 ,2,4
     //                    $arr=array();
     //                    $str='';
     //                    for($i=0;$i<count($tpa_array);$i++)
     //                    {
     //                        $str.=',';
     //                        //  $partner->where('speciality','like','%'.$val.'%');
     //                        $query=Tpamaster::select('insurance_companies')->where('id',$tpa_array[$i])->first();
     //                        $qr_res=explode(",",$query['insurance_companies']);
     //                        if($query)
     //                        {
     //                            $str .= $query['insurance_companies'];
     //                        }
     //                    }
                        
     //            $st=explode(",",$str);
     //            $unique=array_unique($st);
     //            $value->number_of_insurance=count($unique)-1;
     //        }

     //      }
           foreach ($temp as $value) {
            $value->number_of_insurance='';
                $dt=$value->insurance_id;
                        if (!empty($dt) && !is_null($dt)) {
                        $strtoarray=explode(",",$dt);  
                        $value->number_of_insurance=count($strtoarray);      
            }

          }

          foreach ($temp as $value) {
            $value->total_ratings='';
            $value->full_address='';
                $dt=$value->id;
                if (!empty($dt) && !is_null($dt)) {
                    // $average_rate= Ratings::where('partner_id',$dt)->get()->avg('rating');
                    // $average_ratings=round($average_rate,1);
                    // $rating=sprintf("%.1f", $average_ratings);
                    // $rating.= " ";
                    // $rating .="ratings";
                    //     $value->total_ratings=$rating; 
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

          $lat1=$request->latitude;
          $lon1=$request->longitude;
          foreach ($temp as $value) {
            $value->time_to_reach=0;
            $lat2=$value->latitude;
            $lon2=$value->longitude;
            $res=Helpers::distance_matrix(trim($lat1),trim($lon1),trim($lat2),trim($lon2));
            if (strpos($res, 'hour') !== false) {
                $a= str_replace("hour","hr",$res);
            }
             else{
                $a=$res;
            }
            $value->time_to_reach=$a;      
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

}

