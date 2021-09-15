<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\pegawai;
use App\User;
use App\saran;
use App\siswa;
use App\kelas;
use App\pembayaran;
use Carbon\Carbon;
/**
 * 
 */
class adminController extends Controller
{
 

public function postlogin(Request $request)
{
  // dd($request->all());
  $request->validate([
    'username'=> 'required',
    'password'=> 'required|min:4',
  ]);
 if(Auth::guard('web')->attempt([
      'username'=>$request->username,
      'password'=>$request->password,
      'level'=>'admin'
  ])){
      return redirect('/redirect')->withMessage('Anda berhasil login sebagai administrator');
  }elseif(Auth::guard('web')->attempt([
      'username'=>$request->username,
      'password'=>$request->password,
      'level'=>'petugas'    
  ])){
     return redirect('/redirect')->withMessage('Anda berhasil login sebagai petugas');
  }else{
      return back()->with('error','Username/password Salah');
  }
}

public function index_admin()
  {
    // Method FOR GRAPH & TOTAL PEOPLE WHO HAVE A TAX/BILL
    $detail = pembayaran::where('is_payed','=','0')->get();
    // dd($detail);
    $count = pembayaran::where('is_payed','=','0')->count();
    $hitung = pembayaran::select('id_pembayaran', 'created_at')->where('is_payed','=','1')
    ->get()
    ->groupBy(function($date) {
        //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
        return Carbon::parse($date->created_at)->format('m'); // grouping by months
    })->toArray();

    $date = pembayaran::select('created_at',DB::raw('MONTH(created_at) month'))->where('is_payed','=','1')->groupBy('month')->get();

    // for charts
     $categories = [];
     $values = [];
     $userArr = [];

     foreach ($date as $d) {
       $categories[] = $d->created_at->format('M');
     }
     foreach ($hitung as $key => $value) {
      $values[] = count($value);
     }
     
     for($i = 1; $i <= 12; $i++){
    if(!empty($values[$i])){
        $userArr[$i] = $values[$i];    
      }else{
          $userArr[$i] = 0;    
      }
  }
     
    // dd($values);

  // OUR MENUS

  // TOTAL SISWA, KELAS, PETUGAS
  $totalSiswa = siswa::count();
  $totalKelas = kelas::count();
  $totalPetugas = User::where('level','=','petugas')->count();
  $totalSaran = saran::count();
  // SEMUA MENU PEMASUKAN
  $today = pembayaran::select(DB::raw('*'),DB::raw('sum(jumlah_dibayar) as totalAmount'))
              ->whereRaw('Date(created_at) = CURDATE()')
              ->groupby('id_pembayaran')
              ->get();
  $all = pembayaran::select(DB::raw('*'),DB::raw('sum(jumlah_dibayar) as totalAmount'))->where('is_payed','=','1')->get();
  $forToday = $today->sum('totalAmount');
  $forAll = $all->sum('totalAmount');
  // dd($all);


    return view('admin/halaman_admin',compact('detail','count','date','categories','values','userArr','totalSiswa','totalPetugas','totalKelas','today','forToday','all','forAll','totalSaran'));
  }

  // asdsa
public function index_petugas()
{
     // Method FOR GRAPH & TOTAL PEOPLE WHO HAVE A TAX/BILL
    $detail = pembayaran::where('is_payed','=','0')->get();
    // dd($detail);
    $count = pembayaran::where('is_payed','=','0')->count();
    $hitung = pembayaran::select('id_pembayaran', 'created_at')->where('is_payed','=','1')
    ->get()
    ->groupBy(function($date) {
        //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
        return Carbon::parse($date->created_at)->format('m'); // grouping by months
    })->toArray();

    $date = pembayaran::select('created_at',DB::raw('MONTH(created_at) month'))->where('is_payed','=','1')->groupBy('month')->get();

    // for charts
     $categories = [];
     $values = [];
     $userArr = [];

     foreach ($date as $d) {
       $categories[] = $d->created_at->format('M');
     }
     foreach ($hitung as $key => $value) {
      $values[] = count($value);
     }
     
     for($i = 1; $i <= 12; $i++){
    if(!empty($values[$i])){
        $userArr[$i] = $values[$i];    
      }else{
          $userArr[$i] = 0;    
      }
  }
     
    // dd($values);

  // OUR MENUS

  // TOTAL SISWA, KELAS, PETUGAS
  $totalSiswa = siswa::count();
  $totalKelas = kelas::count();
  $totalSaran = saran::count();


  // dd($amount);
  // SEMUA MENU PEMASUKAN
  $today = pembayaran::select(DB::raw('*'),DB::raw('sum(jumlah_dibayar) as totalAmount'))
              ->whereRaw('Date(created_at) = CURDATE()')
              ->groupby('id_pembayaran')
              ->get();
  $all = pembayaran::select(DB::raw('*'),DB::raw('sum(jumlah_dibayar) as totalAmount'))->where('is_payed','=','1')->get();
  $forToday = $today->sum('totalAmount');
  $forAll = $all->sum('totalAmount');
  // dd($all);
    return view('admin/halaman_petugas',compact('detail','count','date','categories','values','userArr','totalSiswa','totalSaran','totalKelas','today','forToday','all','forAll'));
}

public function showLoginForm()
{
      return view('login_user');
}

protected function guard()
{
      return Auth::guard('web_admin');
}

}


