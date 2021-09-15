<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\siswa;
use App\saran;
use Session;
use App\pembayaran;
use Illuminate\Support\Facades\Auth;

class siswaController extends Controller
{

    public function index(Request $request)
    {
        $data = DB::table('pembayaran')->join('siswa','siswa.nisn','=','pembayaran.nisn')->select('pembayaran.bulan_dibayar','pembayaran.sampai_bulan','pembayaran.tgl_bayar','pembayaran.jumlah_dibayar','pembayaran.is_payed','pembayaran.created_at','siswa.nisn')->where('siswa.nisn',Auth::guard('web_siswa')->user()->nisn)->get();
        // dd($data);
    	return view('layout_siswa.index',compact('data'));
    }

    public function logout_siswa()
    {
        Session::flush();
        return redirect('login_siswa')->withMessage('Berhasil Logout!');
    }

    public function post(Request $request)
    {
        $request->validate([
            'nisn'=> 'required',
            'password'=> 'required|min:4',
        ]);
        // dd(siswa::where('nisn',Auth::guard('web_siswa')));
    	if (Auth::guard('web_siswa')->attempt([
            'nisn'=>$request->nisn,
            'password'=>$request->password
        ])) {
    		return redirect('layout_siswa.index')->withMessage('Anda berada di halaman siswa');
    	}else{
    		return redirect()->back()->with('error','Nisn/password salah');
    	}
    }

     public function loginForm()
    {
    	return view('login_siswa');
    }

    public function buatSaran(Request $request)
    {
        $request->validate([
            'judul'=> 'required',
            'deskripsi'=>'required',
        ]);
        $value = new saran;
        $value->judul = $request->judul;
        $value->deskripsi = $request->deskripsi;
        $value->nisn = Auth::guard('web_siswa')->user()->nisn;
        $value->status = 0;
        $value->save();
        return back()->withMessage('Saran berhasil di kirim');
    }

    public function updatepass(Request $request)
    {
        // dd($request);
        $user = Auth::guard('web_siswa')->user();
        $user->nisn = Auth::guard('web_siswa')->user()->nisn;
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->back()->withMessage('Data berhasil di update!');
    }
}
