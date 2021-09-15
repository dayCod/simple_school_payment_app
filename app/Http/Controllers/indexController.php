<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\adminModel;
use Auth;
use DB;
use Session;
class indexController extends Controller
{
   
    public function logout_admin()
    {
    	session::flush();
    	return redirect('login_user')->withMessage('Anda Berhasil Logout!');
    }
    public function logout_petugas()
    {
        session::flush();
        return redirect('login_user')->withMessage('Anda Berhasil Logout!');
    }
    public function register()
    {
    	return view('cvghequiyd1cv');
    }
}

