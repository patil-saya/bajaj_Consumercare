<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use Validator;
use  Illuminate\Support\Facades\DB;

class DoctormasterController extends ApiController
{

 public function doctormasterList(Request $request) {

$h_id=$request->partner_id;
    if($h_id=='')
    {
     $states = DB::table('doctor_master')->where('is_delete',0);
    } 
        else
    {
         $query=DB::table('partners')
         ->select('doctors')
         ->where('id',$h_id)
         ->get()
         ->toArray();
         $arr=array();
        foreach($query as $val)
        {
            $new_arr=array_push($arr,$val->doctors);
        }
        if($arr)
        {
        $doctors=explode(",",$arr[0]);
        $states = DB::table('doctor_master')->wherein('id',$doctors)->where('is_delete',0);
        }else{

            return ApiController::apiNotfound();
        }
    }


 $total = $states->get()->count();
 //        if($search!='')
 //        {

 //            $states->where('doctor_name','like','%'.$search.'%')
 //            ->orderby('id',$order);

 //        }
 //      else if($search =='')
 //        {
 //            $states->orderby('id',$order);
 //        }
     
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
            $value->degree_name=[];
          if (!empty($value->degree) && !is_null($value->degree)) {
            $a=explode(',',$value->degree);
             $path = DB::table('doctor_degree')->select('degree')->wherein('id', $a)->get();
            // print_r($path);exit;
             $value->degree_name = $path ;             }
           }   

       return ApiController::apiCollection($temp,$total);

    }

   
}