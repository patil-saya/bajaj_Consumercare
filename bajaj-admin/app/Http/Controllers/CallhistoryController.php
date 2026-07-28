<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Callhistory;
use App\Models\User;
use App\Models\Upload;
use App\Models\Ratings;
use App\Models\AvailableBed;
use App\Models\Tpamaster;
use Validator;
use App\Helpers;
use  Illuminate\Support\Facades\DB;

class CallhistoryController extends ApiController
{

         


    //insert
    public function create_call(Request $request) {

        $rules=[
            'partner_id' => 'required',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

 $user= response()->json(auth('app_api')->user());
        $array = json_decode(json_encode($user), true);
        $id=$array['original']['id'];

    $ambulance = new Callhistory;
    $ambulance->partner_id = $request->partner_id;
    $ambulance->customer_id = $id;
    $ambulance->save();

     return ApiController::apiCreated($ambulance);

  }



 public function call_history(Request $request) {
     
  $user= response()->json(auth('app_api')->user());
        $array = json_decode(json_encode($user), true);
        $id=$array['original']['id'];
     $call = DB::table('call_history')->where('customer_id',$id)->orderby('created_at','DESC');
 $total = $call->get()->count();


if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $call->offset($offset)->limit($limit);
            $temp = $call->get();
       
        } else {

            $temp = $call->get();
        }

           // $temp = $call->get();

               foreach ($temp as $value) {
            $value->title='';
            $value->address='';
            $value->mobile='';
            $value->is_verified='';
            $value->full_address='';
                $dt=$value->partner_id;
                        if (!empty($dt) && !is_null($dt)) {
                        
                        $cnt = User::select('*')->where('id',$dt)->first();
                       
                       
            $value->title=$cnt->title;
            $value->address=$cnt->address;
            $value->mobile=$cnt->mobile; 
            $value->is_verified=$cnt->is_verified;
            $value->ratings=$cnt->ratings;
             $ad1=$cnt->address;
            $ad2=$cnt->address2;
            $st_nm=DB::table('states')->select('state')->where('id',$cnt->state)->first();
             if($st_nm)
            {
            $st=$st_nm->state;
            }else {$st='';}
            $ct_nm=DB::table('cities')->select('city')->where('id',$cnt->city)->first();
            if($ct_nm)
            {
            $ct=$ct_nm->city;
            }else{$ct='';}
            $pin=$cnt->pincode;

              $value->full_address= $ad1.", ".$ad2." ".$ct.", ".$st." - ".$pin ;
            }

          }

          foreach ($temp as $value) {
            $value->total_ratings='';
                $dt=$value->partner_id;

                if (!empty($dt) && !is_null($dt)) {
                    // $average_rate= Ratings::where('partner_id',$dt)->get()->avg('rating');
                    // $average_ratings=round($average_rate,1);
                    //  $rating=sprintf("%.1f", $average_ratings);
                    // $rating.= " ";
                    // $rating .="ratings";
                    //     $value->total_ratings=$rating;   
                     $value->total_ratings=$value->ratings.' ratings'; 
                      
            }
             $lat1=$request->latitude;
          $lon1=$request->longitude;
            $value->time_to_reach=0;
             $latlong= User::select('latitude','longitude')->where('id',$dt)->first();
            $lat2=$latlong->latitude;
            $lon2=$latlong->longitude;
            $res=Helpers::distance_matrix(trim($lat1),trim($lon1),trim($lat2),trim($lon2));
            if (strpos($res, 'hour') !== false) {
                $a= str_replace("hour","hr",$res);
            }else{
                $a=$res;
            }
            $value->time_to_reach=$a;      
            



          }
       
         
          

       return ApiController::apiCollection($temp,$total);

    }

}

