<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speciality;
use Validator;
use  Illuminate\Support\Facades\DB;

class SpecialityController extends ApiController
{

 public function specialityList(Request $request) {
 $h_id=$request->partner_id;
     
     if($h_id=='')
     {
        $states = DB::table('specialities');
     

    }else {

          $query=DB::table('partners')
         ->select('speciality')
         ->where('id',$h_id)
         ->get()
         ->toArray();
         $arr=array();
        foreach($query as $val)
        {
            $new_arr=array_push($arr,$val->speciality);
        }
        if($arr)
        {
        $speciality=explode(",",$arr[0]);
        $states = DB::table('specialities')->wherein('id',$speciality);


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