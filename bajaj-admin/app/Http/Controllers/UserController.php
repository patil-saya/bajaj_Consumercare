<?php

 namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;
    use App\Models\ApplicationUser;
    use  Illuminate\Support\Facades\DB;

class UserController extends ApiController {

    public function __construct() {
        $this->middleware('jwt.auth', ['except' => ['login', 'register']]);
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password','remember_token');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return $this->createNewToken($token);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                    'mobile' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'mobile' => $request->get('mobile'),
                    'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'), 201);
    }

    public function updateAdmin(Request $request, $id) {

        if (User::where('id', $id)->exists()) {
            $user = User::find($id);
            $user->name = is_null($request->name) ? $user->name : $request->name;
            $user->mobile = is_null($request->mobile) ? $user->mobile : $request->mobile;
            $user->email = is_null($request->email) ? $user->email : $request->email;
            $user->save();

            return ApiController::apiItem($user);
        } else {
            $message="No Data Found";
           return ApiController::apiValidate( '',$message);
        }
    }

    //profile
    public function adminProfile() {
        return response()->json(auth('api')->user());
    }

    //logout
    public function adminLogout() {
        auth('api')->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function adminRefresh() {
        return $this->createNewToken(auth('api')->refresh());
    }

    public function applicationUserList(Request $request) {
    
    $search=$request->input('search');
    $orderr=$request->input('order');
    if($orderr=='')
    {
        $order='ASC';
    }else
    {
        $order=$orderr;
    }

$application_users = DB::table('application_users');

        if($search!='')
        {

            $application_users->where('name','like','%'.$search.'%')
            ->orWhere('email', 'like', '%' . $search . '%')->orWhere('mobile', 'like', '%' . $search . '%')
            ->orderby('id',$order);

        }
      else if($search =='')
        {
            $application_users->orderby('id',$order);
        }

         $total = $application_users->get()->count();
         

         if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $application_users->offset($offset)->limit($limit);
            $temp = $application_users->get();
        } else {

            $temp = $application_users->get();
        }

     
       return ApiController::apiCollection($temp,$total);

       
    }


            protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 1440,
            'user' => auth()->user('api'),

        ]);
    }

}
