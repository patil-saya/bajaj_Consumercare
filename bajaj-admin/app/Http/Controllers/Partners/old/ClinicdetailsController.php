<?php

namespace App\Http\Controllers\Partners;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Ambulance;
use App\Models\AmbulanceType;
use App\Models\Category;
use App\Models\User;
use App\Models\Upload;
use App\Models\Clinicdetails;
use App\Models\Speciality;
use Validator;
use  Illuminate\Support\Facades\DB;

class ClinicdetailsController extends ApiController
{

     /**
     * @OA\GET(
     *   path="/api/v1/admin/cliniclist",
     *  tags={"Clinic"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Clinic List",
     *   operationId="Clinic",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     * )
     *
     */


	//all list
    public function cliniclist(Request $request) {
   
 $ambulance = DB::table('clinic_details');
 $total = $ambulance->get()->count();
        
 $temp = $ambulance->get();



foreach ($temp as $value) {
            $value->partner_name='';
                        $tImage = User::where('id', $value->partner_id)->get();

                        if (!empty($tImage) && !is_null($tImage)) {
                            foreach ($tImage as $image) {
                                if (!empty($image->id) && !is_null($image->id)) {
                                    $path = User::select('title')->where('id', $image->id)->first();
                                   $value->partner_name =$path->title;
                                }
                            }   
            
            }
          }

 foreach ($temp as $value) {
    $value->speciality='';
                $tImage = Speciality::where('id', $value->speciality_id)->get();
                if (!empty($tImage) && !is_null($tImage)) {
                    $ambulance_image = [];
                    foreach ($tImage as $image) {
                      //  print_r($image);exit;
                        if (!empty($image->id) && !is_null($image->id)) {
                            $path = Speciality::select('name')->where('id', $image->id)->first();
                           $value->speciality =$path->name;
                        }
                    }   
    
    }
  }         


return ApiController::apiCollection($temp,$total);

    }

    /**
     * @OA\POST(
     *   path="/api/v1/admin/createClinic",
     *  tags={"Clinic"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Insert clinic",
     *   operationId="clinic",
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
     *          name="speciality_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="min_charges",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

    //insert
    public function createClinic(Request $request) {

        $rules=[
            'partner_id' => 'required',
            'speciality_id' => 'required',
            'min_charges' => 'required',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

//$user = DB::table('ambulance')->where('partner_id',$request->partner_id)->where('category_id',$request->category_id)->first();

if (Clinicdetails::where('partner_id',$request->partner_id)->where('speciality_id',$request->speciality_id)->exists()) {
    $message="This Speciality already added";
 return ApiController::apiValidate($validator->errors(),$message);
}

        $ambulance = new Clinicdetails;
    $ambulance->partner_id = $request->partner_id;
    $ambulance->speciality_id = $request->speciality_id;
    $ambulance->min_charges = $request->min_charges;
    $ambulance->save();

    return ApiController::apiCreated($ambulance);
  }
 
 /**
     * @OA\PUT(
     *   path="/api/v1/admin/updateClinic/{id}",
     *  tags={"Clinic"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Update Clinic",
     *   operationId="sendOtp",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="min_charges",
     *          in="query",
     *          required=false, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

//update
  public function updateClinic(Request $request, $id) {

 //$user = DB::table('areas')->where('id', $id)->first();

    if (Clinicdetails::where('id', $id)->exists()) {
        $ambulance = Clinicdetails::find($id);
        $ambulance->min_charges = is_null($request->min_charges) ? $ambulance->min_charges : $request->min_charges;

        $ambulance->save();

        return ApiController::apiUpdated($ambulance);

        } else {
       $message="No Data Found";
           return ApiController::apiValidate( '',$message);
    }
}

 /**
     * @OA\GET(
     *   path="/api/v1/admin/viewClinic/{id}",
     *  tags={"Clinic"},
     * security={ {"bearerAuth": {} }, },
     *   summary="View clinic",
     *   operationId="Clinic",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *        @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */
 public function viewClinic($id) {
     
        if (Clinicdetails::where('id', $id)->exists()) {
 $ambulance = DB::table('clinic_details')->where('id',$id);
 $total = $ambulance->get()->count();
 $temp = $ambulance->get();



foreach ($temp as $value) {
            $value->partner_name='';
                        $tImage = User::where('id', $value->partner_id)->get();

                        if (!empty($tImage) && !is_null($tImage)) {
                            foreach ($tImage as $image) {
                                if (!empty($image->id) && !is_null($image->id)) {
                                    $path = User::select('title')->where('id', $image->id)->first();
                                   $value->partner_name =$path->title;
                                }
                            }   
            
            }
          }

 foreach ($temp as $value) {
    $value->speciality='';
                $tImage = Speciality::where('id', $value->speciality_id)->get();
                if (!empty($tImage) && !is_null($tImage)) {
                    $ambulance_image = [];
                    foreach ($tImage as $image) {
                      //  print_r($image);exit;
                        if (!empty($image->id) && !is_null($image->id)) {
                            $path = Speciality::select('name')->where('id', $image->id)->first();
                           $value->speciality =$path->name;
                        }
                    }   
    
    }
  }         


       return ApiController::apiItem($temp);

        } else {
       $message="No Data Found";
           return ApiController::apiValidate( '',$message);
      }
    }

   


}

