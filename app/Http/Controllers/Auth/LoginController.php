<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use App\petugas;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */ 
    protected $redirectTo = 'admin/halaman_admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web_admin',['except'=> 'logout']);
    }
    // public function postlogin(Request $request)
    // {
        
    //     if (Auth::guard('web_admin')->attempt(['username'=>$request->username, 'password'=>$request->password])) {
    //         return redirect()->intended('admin_halaman_admin');
    //     }else{
    //         return back();
    //     }
    // }
    public function guard()
    {
        return Auth::guard('web_admin');
    }
}
