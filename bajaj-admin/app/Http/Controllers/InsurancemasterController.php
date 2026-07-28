<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Upload;
use Validator;
use  Illuminate\Support\Facades\DB;

class InsurancemasterController extends ApiController
{

   
 public function insurancemasterList(Request $request) {
$h_id=$request->partner_id;

if($h_id=='')
{
 $states = DB::table('insurance_master')->where('is_delete',0);

}
else
{
      $query=DB::table('partners')
         ->select('insurance_id')
         ->where('id',$h_id)
         ->get()
         ->toArray();
         $arr=array();
        foreach($query as $val)
        {
            $new_arr=array_push($arr,$val->insurance_id);
        }
        if($arr)
        {
        $insurance_id=explode(",",$arr[0]);
        $states = DB::table('insurance_master')->wherein('id',$insurance_id)->where('is_delete',0);


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
     

        foreach ($temp as $value) {
            $value->insruance_logo='';
          if (!empty($value->logo) && !is_null($value->logo)) {
             $path = Upload::select('path')->where('id', $value->logo)->first();
             $url=$request->getHttpHost();
            
             $value->insruance_logo = 'https://'.$url.'/medic_admin/public/' . $path->path;
             }
           }   






       return ApiController::apiCollection($temp,$total);
}

    

    public function get_tpa_list(Request $request, $id) {
        
 $states = DB::table('tpa_master')->where('insurance_companies','like','%'.$id.'%');
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