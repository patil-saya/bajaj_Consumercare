<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use Validator;
use  Illuminate\Support\Facades\DB;

class TpamasterController extends ApiController
{

 public function tpamasterList(Request $request) {
    	

 $states = DB::table('tpa_master');
 $total = $states->get()->count();
      //   if($search!='')
      //   {

      //       $states->where('tpa_name','like','%'.$search.'%')
      //       ->orderby('id',$order);

      //   }
      // else if($search =='')
      //   {
      //       $states->orderby('id',$order);
      //   }
     
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