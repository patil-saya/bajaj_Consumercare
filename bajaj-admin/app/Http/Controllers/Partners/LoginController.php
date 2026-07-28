<?php 
namespace App\Http\Controllers\Partners;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Adminlog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Helpers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends ApiController
{
    public function showLoginForm()
    { 
        return view('login');
    }

     protected function guard()
    {
        return Auth::guard('api');
    }

    function checklogin(Request $request)
    {
        //return $request;die;
        $this->validate($request, [
        'username'   => 'required|email',
        'password'  => 'required'
        ]);

        $password = md5($request->get('password'));
        $qr=User::where('password', $password)->where('email',$request->get('username'))->first();
        //echo $qr->id;exit;
        if($qr){
            $request->session()->put('user_id',$qr->id);
            $request->session()->put('user_name',$qr->title);
            $request->session()->put('password',$qr->password);
            //dd($request);

                                $log = new Adminlog();
                                $log->table_name = "spinwheel_admin";
                                $log->record_id  = $qr->id;
                                $log->admin_user_id  = $qr->id;
                                $log->action = "login";
                                $log->entity = "admin";
                                $log->description = $qr->title." logged in ";
                                $log->save();

            session(['user_id' => $qr->id, 'user_name' => $qr->title, 'user_email' => $qr->email]);
            return redirect('home');
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid Login Details!']); 
        }
    }

    function successlogin() {
        return view('home');
    }

    function logout(Request $r)
    {
        $r->session()->forget('user_id');
        $r->session()->forget('user_name');
        return view('login');
    }

   

}