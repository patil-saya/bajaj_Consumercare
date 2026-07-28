<?php

namespace App\Http\Controllers\Partners;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Category;
use App\Models\User;
use App\Models\Upload;
use App\Models\Clinicdetails;
use App\Models\Speciality;
use Validator;
use  Illuminate\Support\Facades\DB;

class DoctorController extends ApiController
{

    


	//all list
    public function doctorlist(Request $request) {
   
 $ambulance = DB::table('doctors');
 $total = $ambulance->get()->count();
        
 $temp = $ambulance->get();


 $search=$request->input('search');
    $orderr=$request->input('order');
    if($orderr=='')
    {
        $order='ASC';
    }else
    {
        $order=$orderr;
    }

 $states = DB::table('doctors');
 $total = $states->get()->count();
        if($search!='')
        {

            $states->where('name','like','%'.$search.'%')
            ->orderby('id',$order);

        }
      else if($search =='')
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
     *   path="/api/v1/admin/createDoctor",
     *  tags={"Doctor"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Insert createDoctor",
     *   operationId="createDoctor",
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
     *          name="name",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

    //insert
    public function createDoctor(Request $request) {

        $rules=[
            'partner_id' => 'required',
            'speciality_id' => 'required',
            'name' => 'required',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

    $ambulance = new Doctor;
    $ambulance->partner_id = $request->partner_id;
    $ambulance->speciality_id = $request->speciality_id;
    $ambulance->name = $request->name;
    $ambulance->save();

    return ApiController::apiCreated($ambulance);
  }
 
 /**
     * @OA\PUT(
     *   path="/api/v1/admin/updateDoctor/{id}",
     *  tags={"Doctor"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Update ambulance",
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
  public function updateDoctor(Request $request, $id) {


    if (Doctor::where('id', $id)->exists()) {
        $ambulance = Doctor::find($id);
        $ambulance->name = is_null($request->name) ? $ambulance->name : $request->name;
        $ambulance->speciality_id = is_null($request->speciality_id) ? $ambulance->speciality_id : $request->speciality_id;
        $ambulance->save();

        return ApiController::apiUpdated($ambulance);

        } else {
       $message="No Data Found";
           return ApiController::apiValidate( '',$message);
    }
}

 /**
     * @OA\GET(
     *   path="/api/v1/admin/viewDoctor/{id}",
     *  tags={"Doctor"},
     * security={ {"bearerAuth": {} }, },
     *   summary="View doctor",
     *   operationId="doctor",
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
 public function viewDoctor($id) {
     
        if (doctor::where('id', $id)->exists()) {
 $ambulance = DB::table('doctors')->where('id',$id);
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

     /**
     * @OA\DELETE(
     *   path="/api/v1/admin/deleteDoctor/{id}",
     *  tags={"Doctor"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Delete Doctor record",
     *   operationId="ambulance",
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
//delete
  public function deleteDoctor($id) {
  
      if(Doctor::where('id', $id)->exists()) {
        $ambulance = Doctor::find($id);
        $ambulance->delete();

         return ApiController::apiDeleted($ambulance);
      } else {
      $message="No Data Found";
           return ApiController::apiValidate( '',$message);
      }
    }



}

