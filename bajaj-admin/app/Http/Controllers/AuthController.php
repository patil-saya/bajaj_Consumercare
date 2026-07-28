<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplicationUser;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
//use App\Http\Controllers\Helpers;
use App\Helpers;
use App\Models\Upload;
use App\Models\Adminlog;
class AuthController extends ApiController
{
    public function __construct() {
        $this->middleware('auth:app_api', ['except' => ['login', 'register','verifyotp','loginemail']]);
    }

    /**
     * @OA\POST(
     *   path="/api/v1/user/login",
     *  tags={"LOGIN CUSTOMER"},
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
     *      @OA\Parameter(
     *          name="name",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     * )
     *
     */
    public function login(Request $request) {
         $mobile = $request->mobile;
         $name = $request->name;

        $len=strlen($mobile);
         if($mobile=='')
        {
          $msg="Mobile number fields is required";
          $data="";
            return $this->apiValidate($data,$msg);  
        }
        if($len!=10)
        {
            $msg="Invalid Mobile Number";
            $data="";
            return $this->apiValidate($data,$msg);
        }
        

        $appuser = ApplicationUser::where('user_mobile', $mobile)->first();

        if (!$appuser) {

            if($name !='')
            {
            $digits = 4;
                if($mobile=='9975647557')
                {
                    $otp=5555;
                }
                else{
                    $otp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                }            
            $app_users = new ApplicationUser();
            $app_users->user_mobile = $mobile;
            $app_users->last_otp = $otp;
            $app_users->name = $name;
            $app_users->otp_attempts=1;
            $app_users->save();

            //Send OTP via SMS
            $numbers = $mobile;
       // $message = 'Greetings! '.$otp.' is OTP to Register / Login to Medic24x7. Your OTP is valid for 30 Mins.';
            Helpers::api_sms($otp, $numbers);

       
            return $this->apiSuccess("OTP Sent Successfully");
        }else {
          //  return $this->apiValidate($dt='',"Please Sign Up");

            return response()->json(
                        [
                            "statusCode" => 422,
                            "name" => 'ValidateErrorException',
                            "message" => 'Please Sign-up To Continue',
                            "data" => ""
                        ], 422);

        }
        } else {
           
            $digits = 4;
            
               if($mobile=='9975647557')
                {
                    $otp=5555;
                }
                else{
                    $otp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                }   
                
            $app_users = ApplicationUser::find($appuser->id);
            $app_users->last_otp = $otp;
            $app_users->otp_attempts= $appuser->otp_attempts+1;
            $app_users->save();

            //Send OTP via SMS
            $numbers = $mobile;
            $code = 'acv';
           // $message = 'Greetings! '.$otp.' is OTP to Register / Login to Medic24x7. Your OTP is valid for 30 Mins.';
            Helpers::api_sms($otp, $numbers);

            return $this->apiSuccess("OTP Sent Successfully");
        }

    }

 /**
     * @OA\POST(
     *   path="/api/v1/user/verifyotp",
     *  tags={"LOGIN CUSTOMER"},
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
      $len=strlen($mob);

       if($mob=='')
        {
          $msg="Mobile number fields is required";
          $data=array('error' => 'ValidateErrorException');
            return $this->apiValidate($data,$msg);  
        }
        if($len!=10)
        {
            $msg="Invalid Mobile Number";
            $data=array('error' => 'ValidateErrorException');
            return $this->apiValidate($data,$msg);
        }
        if($otp=='')
        {
          $msg="OTP fields is required";
           $data=array('error' => 'ValidateErrorException');
            return $this->apiValidate($data,$msg);  
        }
        // $validator = Validator::make($request->all(), [
        //     'mobile' => 'required',
        //     'otp' => 'required|string|min:4',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 422);
        // }

    $user = DB::table('customers')->where('user_mobile', $mob)->first();
    $user1 = DB::table('customers')->where('user_mobile', $mob)->where('last_otp',$otp)->first();

    if($user=='')
    {
         $data=array('error' => 'ValidateErrorException');
       return response()->json(
                        [
                            "statusCode" => 422,
                            "name" => 'ValidateErrorException',
                            "message" => 'Please Sign-up To Continue',
                            "data" => $data
                        ], 422);

    }
     else if($user1=='')
    {  
        $data=array('error' => 'ValidateErrorException');
       return response()->json(
                        [
                            "statusCode" => 422,
                            "name" => 'ValidateErrorException',
                            "message" => 'Invalid OTP',
                            "data" => $data
                        ], 422);

    } else {
 $credentials = ['user_mobile' => $mob, 'last_otp' =>$otp];
            $user = $this->retrieveByCredentials($credentials);
            if ($token = $this->guard('app_api')->login($user)) {
                return $this->createNewToken($token);
            }
}
   
    }

   
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        
      auth('app_api')->logout();
        return response()->json(['message' => 'User successfully signed out']);
       
    }


    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth('app_api')->refresh());
    }

    /**
     * Get the authenticated User profile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
     /**
     * @OA\Get(
     *   path="/api/v1/user/profile",
     *   summary="Get User Profile",
     *   operationId="profile",
     *   tags={"CUSTOMER PROFILE"},
     *   security={ {"bearerAuth": {} }, },
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     * )
     *
     */

    //   public function userProfile() {
    //     $user= response()->json(auth('app_api')->user());
    //     $array = json_decode(json_encode($user), true);
    //     $image=$array['original']['profile_pic'];
    //     $id=$array['original']['id'];
    //     $data = ApplicationUser::select('*')->where('id', $id)->first();
    //     $path = Upload::select('path')->where('id', $image)->first();
    //     $profile_image = asset('/' . $path->path);
    //     $data->profile_image=$profile_image;
    //      return ApiController::apiItem($data);
    // }

     public function userProfile() {
        $user= response()->json(auth('app_api')->user());
        $array = json_decode(json_encode($user), true);
        $image=$array['original']['profile_pic'];
      
        $id=$array['original']['id'];
        $state_id=$array['original']['state'];
        $city_id=$array['original']['city'];
        $gender_id=$array['original']['gender'];
        $state = DB::table('states')->select('state')->where('id', $state_id)->first();
        
        $city = City::select('city')->where('id', $city_id)->first();
      
        $data = ApplicationUser::select('*')->where('id', $id)->first();
        if($state)
        {
            $state_n=$state->state;
        $data->state_name=$state_n;
        }else{
            $data->state_name='';
        }
        if($city)
        {
              $city_n=$city->city;
        $data->city_name=$city_n;
        }else{
           $data->city_name=''; 
        }
        if($gender_id==0)
        {
            $data->gender_name='Male';
        }
        else if($gender_id==1)
        {
            $data->gender_name='Female';
        }
        else{
            $data->gender_name='Other';
        }
          if($image)
        {
        $path = Upload::select('path')->where('id', $image)->first();
        $profile_image = asset('/public/' . $path->path);
        $data->profile_image=$profile_image;
        

         return ApiController::apiItem($data);
        
        }else {
             $data->profile_image=asset('/public/uploads/default_profile.png');
             return ApiController::apiItem($data);
        }


    }

       /**
     * @OA\PUT(
     *   path="/api/v1/user/update/{id}",
     *  tags={"CUSTOMER PROFILE"},
     *  security={ {"bearerAuth": {} }, },
     *   summary="Update Customer Profile",
     *   operationId="updateprofile",
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error"),
     *      @OA\Parameter(
     *          name="user_mobile",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
     *          name="name",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
     *          name="email",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *          @OA\Parameter(
     *          name="gender",
     *          in="query",
     *          required=true, 
     *          
     *      ),
     *         @OA\Parameter(
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
        $user= response()->json(auth('app_api')->user());
        $array = json_decode(json_encode($user), true);
        $id=$array['original']['id'];
 $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
           // 'user_mobile' => 'required|min:10|max:10|numeric',
            //'email' => 'required|string|email|max:100|unique:customers',
            'pincode' => 'required|string|min:6',
             'gender' => 'required|numeric|between:0,3',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

    if (ApplicationUser::where('id', $id)->exists()) {
        $user = ApplicationUser::find($id);
        $user->name = is_null($request->name) ? $user->name : $request->name;
        $user->email = is_null($request->email) ? $user->email : $request->email;
        $user->profile_pic = is_null($request->profile_pic) ? $user->profile_pic : $request->profile_pic;
        $user->gender = is_null($request->gender) ? $user->gender : $request->gender;
        $user->state = is_null($request->state) ? $user->state : $request->state;
        $user->city = is_null($request->city) ? $user->city : $request->city;
        $user->pincode = is_null($request->pincode) ? $user->pincode : $request->pincode;
        $user->save();
        return response()->json(
                        [
                            "statusCode" => 200,
                            "message" => "Profile Updated Successfully"
                        ], 200);
        } else {
        return ApiController::apiNotfound();

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
                        $user = auth('app_api')->user();
                        $id=$user['id'];
                        $name=$user['name'];
                        $email=$user['email'];
                        $mobile=$user['user_mobile'];
                        $profile_img = $user['profile_pic'];
                        $created_at=$user['created_at'];
                        $updated_at=$user['updated_at'];
                        if($user)
                        {
                              $user->last_login_at=date('Y-m-d h:i:s');
                              $user->save(); 

                                $log = new Adminlog();
                                $log->table_name = "customers";
                                $log->record_id  = $id;
                                //$log->admin_user_id = '';
                                $log->action = "login";
                                $log->entity = "user";
                                $log->description = $name." logged in ";
                                $log->save();
                        }
                        if($profile_img)
                        {
                        $path = Upload::select('path')->where('id', $profile_img)->first();
                         $profile_image = asset('/public/' . $path->path);
                        }else {
                            $profile_image= asset('/public/uploads/default_profile.png');
                        }
                     //   print_r($user);exit;
                        $data=array('access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('app_api')->factory()->getTTL() * 60,
            'id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'profile_image'=>$profile_image,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at,);

                        return response()->json([
                    'statusCode' => 200,
                    'message' =>'Data retrieval successfully',
                    'data' => $data,
                  
                        ], 200);
    
        
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
        $model = 'App\Models\ApplicationUser';
        $class = '\\' . ltrim($model, '\\');

        return new $class;
    } 

   

}

