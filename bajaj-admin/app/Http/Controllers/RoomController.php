<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\AvailableBed;
use App\Models\Category;
use App\Models\User;
use Validator;
use  Illuminate\Support\Facades\DB;

class RoomController extends ApiController
{
    
    public function getbeddetails(Request $request) {
   
   $h_id=$request->partner_id;
   $type=$request->room_type;
 $areas = DB::table('available_beds')->select('price','deposite')->where('partner_id',$h_id)->where('category_id',$type);
 //$total = $areas->get()->count();
        
 $temp = $areas->get();


return ApiController::apiItem($temp);

    }

  public function get_beds_of_partner(Request $request) {
  
     $id=$request->partner_id;
 $areas = DB::table('available_beds')->select('*')->where('partner_id',$id);
 $total = $areas->get()->count();

 $total_beds = DB::table('available_beds')->select('*')->where('partner_id',$id)->sum('total_beds');
        
 $temp = $areas->get();

    foreach ($temp as $value) {
            $value->category_name='';
                $dt=$value->category_id;
                        if (!empty($dt) && !is_null($dt)) {
                        
                        $cnt = Category::where('id',$dt)->first();
                         $ac=$cnt->is_ac;

                            if($ac==1)
                            {
                                $a='Non-AC';
                            }else {
                                $a='AC';
                            }
                        $value->category_name=$cnt->category.''.'('.$a.')';      
            }

          }

 return response()->json([
                    'statusCode' => 200,
                    'message' => 'Data retrieval successfully',
                    'data' => $temp,
                    'total' => $total,
                    'total_beds '=>$total_beds ,
                        ], 200);


    }




}

