<?php

namespace App\Http\Controllers\Partners;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\ApiController;
use Validator;
use  Illuminate\Support\Facades\DB;

class LanguageController extends ApiController
{

    /**
     * @OA\GET(
     *   path="/api/v1/admin/languages",
     *  tags={"Languages"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Language List",
     *   operationId="language",
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



 public function languages(Request $request) {
    	
    $search=$request->input('search');
    $orderr=$request->input('order');
    if($orderr=='')
    {
        $order='ASC';
    }else
    {
        $order=$orderr;
    }

 $states = DB::table('languages');
 $total = $states->get()->count();
        if($search!='')
        {

            $states->where('language','like','%'.$search.'%')
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

      

       return ApiController::apiCollection($temp,$total);

    }

     
}