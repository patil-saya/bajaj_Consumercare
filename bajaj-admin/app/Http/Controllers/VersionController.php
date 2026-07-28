<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use  Illuminate\Support\Facades\DB;
use App\Helpers;

class VersionController extends ApiController
{
	//all list
    public function getAppVersion()
    {
        $app_version = DB::table('app_version')->first();
        return $this->apiItem($app_version);
    }
//update
  public function updateVersion(Request $request, $id) {

//     if (AppVersion::where('id', $id)->exists()) {
//         $areas = AppVersion::find($id);
//         $areas->android_current_version = is_null($request->android_current_version) ? $areas->android_current_version : $request->android_current_version;
//         $areas->ios_current_version = is_null($request->ios_current_version) ? $areas->ios_current_version : $request->ios_current_version;   
//         $areas->save();

//         return ApiController::apiUpdated($areas);

//         } else {
//        $message="No Data Found";
//            return ApiController::apiValidate( '',$message);
//     }
// }
// public function viewVersion($id) {
     
//     if (AppVersion::where('id', $id)->exists()) {
//     $categories = AppVersion::where('id', $id)->first()->toJson(JSON_PRETTY_PRINT);
//     $enc=json_decode($categories);
//    return ApiController::apiItem($enc);

//     } else {
//    $message="No Data Found";
//        return ApiController::apiValidate( '',$message);
//   }
// }

 

}

}