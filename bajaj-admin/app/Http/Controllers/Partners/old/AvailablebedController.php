<?php

namespace App\Http\Controllers\Partners;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\AvailableBed;
use App\Models\Category;
use App\Models\User;
use Validator;
use  Illuminate\Support\Facades\DB;

class AvailablebedController extends ApiController
{
    /**
     * @OA\GET(
     *   path="/api/v1/admin/ambulancelist",
     *  tags={"Ambulance"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Ambulance List",
     *   operationId="ambulance",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     * )
     *
     */

    //all list
    public function bedlist(Request $request) {
   
 $areas = DB::table('available_beds');
 $total = $areas->get()->count();
        
 $temp = $areas->get();



foreach ($temp as $value) {
    $value->available_beds= $value->total_beds-$value->beds_occupied;
            $value->category_name='';
                        $tImage = Category::where('id', $value->category_id)->get();

                        if (!empty($tImage) && !is_null($tImage)) {
                            foreach ($tImage as $image) {
                                if (!empty($image->id) && !is_null($image->id)) {
                                    $path = Category::select('category')->where('id', $image->id)->first();
                                   $value->category_name =$path->category;
                                }
                            }   
            
            }
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


return ApiController::apiCollection($temp,$total);

    }

     /**
     * @OA\POST(
     *   path="/api/v1/admin/createBed",
     *  tags={"Beds"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Insert Bed",
     *   operationId="sendOtp",
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
     *          name="category",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="total_bed",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="bed_occupied",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="price",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */
    //insert
    public function createBed(Request $request) {

        $rules=[
            'partner_id' => 'required',
            'category_id' => 'required',
            'total_beds' => 'required',
            'beds_occupied' => 'required',
            'price'=> 'required'
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

//$user = DB::table('available_beds')->where('partner_id',$request->partner_id)->where('category_id',$request->category_id)->first();

if (AvailableBed::where('partner_id',$request->partner_id)->where('category_id',$request->category_id)->exists()) {
    $message="Beds for this category and partnet already added";
 return ApiController::apiValidate($validator->errors(),$message);
}

        $areas = new AvailableBed;
    $areas->partner_id = $request->partner_id;
    $areas->category_id = $request->category_id;
    $areas->total_beds = $request->total_beds;
    $areas->beds_occupied = $request->beds_occupied;
     $areas->price = $request->price;
    $areas->save();

    return ApiController::apiCreated($areas);
  }
 
  /**
     * @OA\PUT(
     *   path="/api/v1/admin/updateBed/{id}",
     *  tags={"Beds"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Update bed",
     *   operationId="bed",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="total_bed",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="bed_occupied",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="price",
     *          in="query",
     *          required=true, 
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
  public function updateBed(Request $request, $id) {

 //$user = DB::table('areas')->where('id', $id)->first();

    if (AvailableBed::where('id', $id)->exists()) {
        $areas = AvailableBed::find($id);
        $areas->total_beds = is_null($request->total_beds) ? $areas->total_beds : $request->total_beds;
        $areas->beds_occupied = is_null($request->beds_occupied) ? $areas->beds_occupied : $request->beds_occupied;
        $areas->price = is_null($request->price) ? $areas->price : $request->price;
        $areas->deposite = is_null($request->deposite) ? $areas->deposite : $request->deposite;   
        $areas->save();

        return ApiController::apiUpdated($areas);

        } else {
       $message="No Data Found";
           return ApiController::apiValidate( '',$message);
    }
}

 /**
     * @OA\GET(
     *   path="/api/v1/admin/viewBed/{id}",
     *  tags={"Beds"},
     * security={ {"bearerAuth": {} }, },
     *   summary="View Bed",
     *   operationId="bed",
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

 public function viewBed($id) {
     
        if (AvailableBed::where('id', $id)->exists()) {
 $areas = DB::table('available_beds')->where('id',$id);
 $total = $areas->get()->count();
 $temp = $areas->get();

        foreach ($temp as $value) {
                $value->available_beds= $value->total_beds-$value->beds_occupied;

            $value->category_name='';
                        $tImage = Category::where('id', $value->category_id)->get();

                        if (!empty($tImage) && !is_null($tImage)) {
                            foreach ($tImage as $image) {
                                if (!empty($image->id) && !is_null($image->id)) {
                                    $path = Category::select('category')->where('id', $image->id)->first();
                                   $value->category_name =$path->category;
                                }
                            }   
            
            }
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


       return ApiController::apiItem($temp);

        } else {
       $message="No Data Found";
           return ApiController::apiValidate( '',$message);
      }
    }

     /**
     * @OA\GET(
     *   path="/api/v1/admin/deleteBed/{id}",
     *  tags={"Beds"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Delete bed record",
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
   public function deleteBed($id) {
  
      if(AvailableBed::where('id', $id)->exists()) {
        $ambulance = AvailableBed::find($id);
        $ambulance->delete();

         return ApiController::apiDeleted($ambulance);
      } else {
      $message="No Data Found";
           return ApiController::apiValidate( '',$message);
      }
    }




}

