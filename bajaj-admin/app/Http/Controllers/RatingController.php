<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Ratings;
use App\Models\User;
use App\Models\Upload;
use Validator;
use App\Models\ApplicationUser;
use  Illuminate\Support\Facades\DB;

class RatingController extends ApiController
{

         

    /**
     * @OA\POST(
     *   path="/api/v1/user/createRating",
     *  tags={"Ratings/Review"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Insert Rating/Review",
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
     *          name="customer_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="ratings",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="review",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

    //insert
    public function createRating(Request $request) {

        $rules=[
            'partner_id' => 'required',
            'customer_id' => 'required',
            'ratings' => 'required|numeric|max:5',
        ];

$validator=Validator::make($request->all(),$rules);
if($validator->fails()){
   return ApiController::apiValidate($validator->errors());
}

if (Ratings::where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->exists()) {
$check=Ratings::where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->first();

    $user = DB::table('ratings')->where('partner_id',$request->partner_id)->where('customer_id',$request->customer_id)->first();
    $id=$user->id;

     $ambulance = Ratings::find($id);
     $ambulance->rating = is_null($request->ratings) ? $ambulance->rating : $request->ratings;
     $ambulance->review = is_null($request->review) ? $ambulance->review : $request->review;
     $ambulance->save();

     return ApiController::apiUpdated($ambulance);

   } else {


    $ambulance = new Ratings;
    $ambulance->partner_id = $request->partner_id;
    $ambulance->customer_id = $request->customer_id;
    $ambulance->rating = $request->ratings;
    $ambulance->review = $request->review;
    $ambulance->save();

    return ApiController::apiCreated($ambulance);
}
  }

public function ratingList(Request $request,$partner_id) {
   
     $ratings = DB::table('ratings')->where('partner_id',$partner_id);
     $total = $ratings->get()->count();
     $temp = $ratings->get();

     $average_rate= Ratings::where('partner_id',$partner_id)->get()->avg('rating');
     $average_ratings=round($average_rate,1);
    // $avg=$avgStar->get();

      if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $ratings->offset($offset)->limit($limit);
            $temp = $ratings->get();
       
        } else {

            $temp = $ratings->get();
        }


    foreach ($temp as $value) {
            $value->customer_name='';
            $value->customer_image='';
                        $cust = ApplicationUser::where('id', $value->customer_id)->get();
                        if (!empty($cust) && !is_null($cust)) {
                            foreach ($cust as $customer) {
                                if (!empty($customer->id) && !is_null($customer->id)) {
                                    $path = ApplicationUser::select('name')->where('id', $customer->id)->first();
                                   $value->customer_name =$path->name;
                                }
                            } 

                             foreach ($cust as $customer) {
                                if (!empty($customer->profile_pic) && !is_null($customer->profile_pic)) {
                                    $path = Upload::select('path')->where('id', $customer->profile_pic)->first();
                                   $value->customer_image = asset('/' . $path->path);
                                }
                            }   
             }


     }

        return response()->json([
                    'statusCode' => 200,
                    'message' => 'Data retrieval successfully',
                    'data' => $temp,
                    'average_ratings'=>$average_ratings,
                    'total' => $total,
                        ], 200);
    
    }


}