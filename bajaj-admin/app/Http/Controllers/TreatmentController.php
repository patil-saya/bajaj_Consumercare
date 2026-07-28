<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use Validator;
use  Illuminate\Support\Facades\DB;

class TreatmentController extends ApiController
{

 public function treatmentList(Request $request) {
   
   $h_id=$request->partner_id;
     
     if($h_id=='')
     {
        $states = DB::table('treatment_master')->where('is_delete',0);
     

    }else {
 

         $query=DB::table('partners')
         ->select('treatment')
         ->where('id',$h_id)
         ->get()
         ->toArray();
         $arr=array();
        foreach($query as $val)
        {
            $new_arr=array_push($arr,$val->treatment);
        }
        if($arr)
        {
        $treatment=explode(",",$arr[0]);
        $states = DB::table('treatment_master')->wherein('id',$treatment);


        }else{

            return ApiController::apiNotfound();
        }

    }
        $total = $states->get()->count();
     
     
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

      

       return ApiController::apiCollection($temp,$total);

    }
   
}