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
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends ApiController
{
    public function showLoginForm()
    { 
        return view('login');
    }

}