<?php
namespace App\Http\Controllers\Partners;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
//use App\Http\Controllers\Helpers;
use App\Helpers;
use App\Models\Upload;
class PartnerController extends ApiController
{
    public function __construct() {
      $this->middleware('auth:api', ['except' => ['login', 'verifyotp','typeList']]);
    }

    /**
     * @OA\POST(
     *   path="/api/v1/admin/login",
     *  tags={"LOGIN PARTNER"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Send OTP/Login",
     *   operationId="sendOtp",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="mobile",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */
    public function login(Request $request) {

         $mobile = $request->mobile;
             $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric|min:10',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $appuser = User::where('mobile', $mobile)->first();

        if (!$appuser) {
            $digits = 4;
            
                //$otp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                $otp=5555;
            
            $app_users = new User();
            $app_users->mobile = $mobile;
            $app_users->last_otp = $otp;
            $app_users->save();

            //Send OTP via SMS
            $numbers = $mobile;
        $message = "Your login OTP for Health Siren is  ".$otp." . HealthSiren- India's Health Alarm. rewdsa";
           // Helpers::send_sms($message, $numbers);

       
            return $this->apiSuccess("OTP is sent to your mobile number");
        } else {
           
            $digits = 4;
            
               // $otp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                $otp=4444;
            
            $app_users = User::find($appuser->id);
            $app_users->last_otp = $otp;
            $app_users->save();

            //Send OTP via SMS
            $numbers = $mobile;
            $code = 'acv';
            $message = "Your login OTP for Health Siren is  ".$otp." . HealthSiren- India's Health Alarm. rewdsa";
           // Helpers::send_sms($message, $numbers);

            return $this->apiSuccess("OTP is sent to your mobile number");
        }

    }
      /**
     * @OA\POST(
     *   path="/api/v1/admin/verifyotp",
     *  tags={"LOGIN PARTNER"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Verify OTP",
     *   operationId="verifyotp",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="mobile",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
     *          name="otp",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */

    public function verifyotp(Request $request){

      $mob=$request['mobile'];
      $otp=$request['otp'];
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'otp' => 'required|string|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

    $user = DB::table('partners')->where('mobile', $mob)->where('last_otp',$otp)->first();

    if($user=='')
    {
      return $this->apiValidate("Invalid Mobile Number or OTP");
    } else {

 $credentials = ['mobile' => $mob, 'last_otp' =>$otp];
           
 $user = $this->retrieveByCredentials($credentials);
            if ($token = $this->guard('api')->login($user)) {
              //  print_r($token);exit;
                return $this->createNewToken($token);
            }
}
   
    }

 
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
                        $user = auth('api')->user();
                        $id=$user['id'];
                        $name=$user['title'];
                        $email=$user['email'];
                        $mobile=$user['mobile'];
                        $created_at=$user['created_at'];
                        $updated_at=$user['updated_at'];
                     //   print_r($user);exit;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
           // 'expires_in' => auth()->factory()->getTTL() * 60,

            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at,

        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard() {
        return Auth::guard('api');
    }

    public function retrieveByCredentials(array $credentials) {
        if (empty($credentials) ||
                (count($credentials) === 1 &&
                Str::contains($this->firstCredentialKey($credentials), 'password'))) {
            return;
        }

        // First we will add each credential element to the query as a where clause.
        // Then we can execute the query and, if we found a user, return it in a
        // Eloquent User "model" that will be utilized by the Guard instances.
        $query = $this->newModelQuery();

        foreach ($credentials as $key => $value) {
            if (Str::contains($key, 'password')) {
                continue;
            }

            if (is_array($value) || $value instanceof Arrayable) {
                $query->whereIn($key, $value);
            } else {
                $query->where($key, $value);
            }
        }
        return $query->first();

    }
      protected function newModelQuery($model = null) {

     return is_null($model) ? $this->createModel()->newQuery() : $model->newQuery();
    }

  public function createModel() {
        $model = 'App\Models\User';
        $class = '\\' . ltrim($model, '\\');

        return new $class;
    } 
  
   /**
     * Get the authenticated User Profile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
     /**
     * @OA\Get(
     *   path="/api/v1/admin/profile",
     *   summary="Get Partner Profile",
     *   operationId="profile",
     *   tags={"PARTNER PROFILE"},
     * security={ {"bearerAuth": {} }, },
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     * )
     *
     */

      public function userProfile() {
        $user= response()->json(auth('api')->user());
        $array = json_decode(json_encode($user), true);
      //  print_r($array);exit;
         return ApiController::apiItem($array['original']);
    }
 
     /**
     * @OA\PUT(
     *   path="/api/v1/admin/update/{id}",
     *  tags={"PARTNER PROFILE"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Update Partner Profile",
     *   operationId="updateprofile",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="title",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
     *          name="partner_type",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
     *          name="mobile",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *          @OA\Parameter(
     *          name="email",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
     *          name="address",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="latitude",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="longitude",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="speciality",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="availability",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="image",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="overview",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *        @OA\Parameter(
     *          name="payment_method",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="languages_spoken",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="international_assistance",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     *        @OA\Parameter(
     *          name="tpa",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     *        @OA\Parameter(
     *          name="bed_available",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     *        @OA\Parameter(
     *          name="charges",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     *        @OA\Parameter(
     *          name="hospital_chain_id",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     *        @OA\Parameter(
     *          name="state",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     *        @OA\Parameter(
     *          name="city",
     *          in="query",
     *          required=true, 
     *          
     *      ), 
     *        @OA\Parameter(
     *          name="pincode",
     *          in="query",
     *          required=true, 
     *          
     *      ),  
     * )
     *
     */

    public function updateUser(Request $request) {

 // $validator = Validator::make($request->all(), [
 //            'name' => 'required|string|between:2,100',
 //           // 'mobile' => 'required|min:10|max:10|numeric',
 //            'email' => 'required|string|email|max:100|unique:customers',
 //            'pincode' => 'required|string|min:6',
 //             'gender' => 'required|numeric|between:0,3',
 //        ]);

 //        if($validator->fails()){
 //            return response()->json($validator->errors()->toJson(), 400);
 //        }
        $user= response()->json(auth('api')->user());
        $array = json_decode(json_encode($user), true);
        $id=$array['original']['id'];

    if (User::where('id', $id)->exists()) {
        $user = User::find($id);
        $user->title = is_null($request->title) ? $user->title : $request->title;
         $user->partner_type = is_null($request->partner_type) ? $user->partner_type : $request->partner_type;
       //   $user->mobile = is_null($request->mobile) ? $user->mobile : $request->mobile;
        $user->email = is_null($request->email) ? $user->email : $request->email;
        $user->address = is_null($request->address) ? $user->address : $request->address;
        $user->latitude = is_null($request->latitude) ? $user->latitude : $request->latitude;
        $user->longitude = is_null($request->longitude) ? $user->longitude : $request->longitude;
      //  $user->speciality = is_null($request->speciality) ? $user->speciality : $request->speciality;
      //  $user->availability = is_null($request->availability) ? $user->availability : $request->availability;
        $user->image = is_null($request->image) ? $user->image : $request->image;
        $user->overview = is_null($request->overview) ? $user->overview : $request->overview;
        //$user->payment_method = is_null($request->payment_method) ? $user->payment_method : $request->payment_method;
       // $user->languages_spoken = is_null($request->languages_spoken) ? $user->languages_spoken : $request->languages_spoken;
        $user->international_assistance = is_null($request->international_assistance) ? $user->international_assistance : $request->international_assistance;
       ///$user->deposite = is_null($request->deposite) ? $user->deposite : $request->deposite;
        // $user->bed_available = is_null($request->bed_available) ? $user->bed_available : $request->bed_available;
       // $user->charges = is_null($request->charges) ? $user->charges : $request->charges;
        $user->hospital_chain_id = is_null($request->hospital_chain_id) ? $user->hospital_chain_id : $request->hospital_chain_id;
         $user->state = is_null($request->state) ? $user->state : $request->state;
          $user->city = is_null($request->city) ? $user->city : $request->city;
           $user->pincode = is_null($request->pincode) ? $user->pincode : $request->pincode;
        
        $ar=$request->speciality;
        if (!empty($ar) && !is_null($ar)) {
        $commaList = implode(',', $ar);
     ////      print_r($commaList);exit;

        $user->speciality=$commaList;
    }

         $ar1=$request->payment_method;
        if (!empty($ar1) && !is_null($ar1)) {
        $commaList1 = implode(', ', $ar1);
        $user->payment_method=$commaList1;
    }

         $ar2=$request->languages_spoken;
        if (!empty($ar2) && !is_null($ar2)) {
        $commaList2 = implode(', ', $ar2);
        $user->languages_spoken=$commaList2;
        }

         $ar3=$request->tpa;
        if (!empty($ar3) && !is_null($ar3)) {
        $commaList3 = implode(', ', $ar3);
        $user->tpa=$commaList3;
        } 

        $ar4=$request->doctors;
        if (!empty($ar4) && !is_null($ar4)) {
        $commaList4 = implode(', ', $ar4);
        $user->doctors=$commaList4;
        }  

        $user->save();
        return ApiController::apiItem($user);

        } else {
        return ApiController::apiNotfound();

    }
}

/**
     * @OA\GET(
     *   path="/api/v1/admin/partner_type",
     *  tags={"PARTNER TYPE"},
     * security={ {"bearerAuth": {} }, },
     *   summary="Partner Type",
     *   operationId="type",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     * )
     *
     */

public function typeList() {
        
     $type = DB::table('partners_type');
     $total = $type->get()->count();
     $temp = $type->get();
    
       return ApiController::apiCollection($temp,$total);

    }

     public function profile_completed($id) {

 $user = DB::table('partners')->where('id',$id)->first();

 $gender=$user->gender;
 $email=$user->email;
 $name=$user->name;
 $state=$user->state;
 $city=$user->city;
 $pincode=$user->pincode;

if($gender=='' || $email=='' || $name=='' || $state=='' || $city=='' || $pincode =='')
{
    $is_completed=0;
}
else {
    $is_completed=1;
}
$user->is_completed=$is_completed;
   return response()->json(
                        [
                            "statusCode" => 200,
                            "message" => 'Data retrieval successfully',
                            "data" => $user
                        ], 200);

}
   


}
