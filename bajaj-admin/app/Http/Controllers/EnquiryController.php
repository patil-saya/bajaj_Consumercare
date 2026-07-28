<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\User;
use App\Models\Upload;
use Validator;
use  Illuminate\Support\Facades\DB;

class EnquiryController extends ApiController
{

         

    /**
     * @OA\POST(
     *   path="/api/v1/user/createEnquiry",
     *  tags={"Enquiry"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Insert Enquiry",
     *   operationId="enquiry",
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
     *          name="customer_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

    //insert
    public function createEnquiry(Request $request) {

        $rules=[
            'partner_id' => 'required',
            'customer_id' => 'required',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

// if (Enquiry::where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->exists()) {
// $check=Enquiry::where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->first();

//       $message="Enquiry Already Submitted";
//  return ApiController::apiValidate($validator->errors(),$message);

//    } else {


    $ambulance = new Enquiry;
    $ambulance->partner_id = $request->partner_id;
    $ambulance->customer_id = $request->customer_id;
    $ambulance->save();

    return ApiController::apiCreated($ambulance);
//}
  }


 /**
     * @OA\GET(
     *   path="/api/v1/admin/doctorlist",
     *  tags={"Doctor"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Doctor List",
     *   operationId="doctor",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     * )
     *
     */


    //all list
    public function enquiryList(Request $request) {
   
      $rules=[
            'partner_id' => 'required',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}


$ambulance = DB::table('inquiries')
            ->join('customers', 'inquiries.customer_id', '=', 'customers.id')
            ->select('inquiries.*','customers.name','customers.user_mobile', 'customers.email');
           // ->get();


 //$ambulance = DB::table('enquiries');
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

 $states = DB::table('inquiries')
            ->join('customers', 'inquiries.customer_id', '=', 'customers.id')
            ->select('inquiries.*','customers.name','customers.user_mobile', 'customers.email');
    
 $total = $states->get()->count();
        if($search!='')
        {

            $states->where('partner_id',$search)
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




// foreach ($temp as $value) {
//             $value->partner_name='';
//                         $tImage = User::where('id', $value->partner_id)->get();

//                         if (!empty($tImage) && !is_null($tImage)) {
//                             foreach ($tImage as $image) {
//                                 if (!empty($image->id) && !is_null($image->id)) {
//                                     $path = User::select('title')->where('id', $image->id)->first();
//                                    $value->partner_name =$path->title;
//                                 }
//                             }   
            
//             }
//           }

//  foreach ($temp as $value) {
//     $value->speciality='';
//                 $tImage = Speciality::where('id', $value->speciality_id)->get();
//                 if (!empty($tImage) && !is_null($tImage)) {
//                     $ambulance_image = [];
//                     foreach ($tImage as $image) {
//                       //  print_r($image);exit;
//                         if (!empty($image->id) && !is_null($image->id)) {
//                             $path = Speciality::select('name')->where('id', $image->id)->first();
//                            $value->speciality =$path->name;
//                         }
//                     }   
    
//     }
  //}         
        


return ApiController::apiCollection($temp,$total);

    }













}

