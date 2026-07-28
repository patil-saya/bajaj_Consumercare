<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use Validator;
use  Illuminate\Support\Facades\DB;

class StatecityController extends ApiController
{

    /**
     * @OA\GET(
     *   path="/api/v1/user/state/list",
     *  tags={"State-City List USER"},
     * security={ {"bearerAuth": {} }, },
     *   summary="State List",
     *   operationId="sendOtp",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="start",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="limit",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * 
     *      @OA\Parameter(
     *          name="search",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="order",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * 
     * )
     *
     */



 public function stateList(Request $request) {
        

 $states = DB::table('states')->orderby('state');
 $total = $states->get()->count();

    
            $temp = $states->get();
          

       return ApiController::apiCollection($temp,$total);

    }

     /**
     * @OA\GET(
     *   path="/api/v1/user/city/list",
     *  tags={"State-City List USER"},
     * security={ {"bearerAuth": {} }, },
     *   summary="City List",
     *   operationId="city",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="start",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *      @OA\Parameter(
     *          name="limit",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * 
     *      @OA\Parameter(
     *          name="search",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="order",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="state_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * 
     * )
     *
     */

     public function cityList(Request $request,$state_id) {
   
     $states = DB::table('cities')->where('state_id',$state_id)->orderby('city');
     $total = $states->get()->count();
     $temp = $states->get();  

       return ApiController::apiCollection($temp,$total);

    }
}