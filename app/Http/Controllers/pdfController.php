<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\siswa;
use App\pembayaran;
use DB;
use App\User;
use PDF;
use Carbon\Carbon;

class pdfController extends Controller
{
    public function index()
    {
		return view('admin/pdf/index');
    }

    public function for_pdf()
    {
        return view('admin/pdf/for_pdf');
    }

    public function getValue(Request $request)
    {
    	$data = pembayaran::join('siswa','siswa.nisn','=','pembayaran.nisn')->join('users','users.id','=','pembayaran.id_petugas')->select('pembayaran.bulan_dibayar','pembayaran.sampai_bulan','pembayaran.tgl_bayar','pembayaran.jumlah_dibayar','pembayaran.is_payed','pembayaran.created_at','siswa.nisn','siswa.nama','siswa.updated_at','users.nama_petugas')->whereBetween('pembayaran.created_at',[$request->get('from'), $request->get('to')])->get();
        $collect[] = User::all();
        $date = pembayaran::select('created_at')->first();
        $current = pembayaran::select(DB::raw('MONTH(created_at) month'))
           ->groupby('month')
           ->get();
        // dd($current);
        $carbon = Carbon::now();
        $num = pembayaran::all();
        $array = collect($data);
        // dd($array->sum());
	// dd($collect);
    	return view('admin/pdf/detail',['current'=>$current,'data'=>$data,'collect'=>$collect,'date'=>$date,'array'=>$array]);
    }
    public function cetak_pdf()
    {   
        $data = pembayaran::join('siswa','siswa.nisn','=','pembayaran.nisn')->join('users','users.id','=','pembayaran.id_petugas')->select('pembayaran.bulan_dibayar','pembayaran.sampai_bulan','pembayaran.tgl_bayar','pembayaran.jumlah_dibayar','pembayaran.is_payed','pembayaran.created_at','siswa.nisn','siswa.nama','siswa.updated_at','users.nama_petugas')->get();
         $collect[] = User::all();
        $date = pembayaran::select('created_at')->first();
        $current = pembayaran::select(DB::raw('MONTH(created_at) month'))
           ->groupby('month')
           ->get();
        // dd($current);
        $carbon = Carbon::now();
        $num = pembayaran::all();
        $array = collect($data);
          set_time_limit(300);
        $pdf = PDF::loadview('admin/pdf/for_pdf',['current'=>$current,'data'=>$data,'collect'=>$collect,'date'=>$date,'array'=>$array]);
        return $pdf->stream();
    }
    public function unduh_pdf()
    {
        $data = pembayaran::join('siswa','siswa.nisn','=','pembayaran.nisn')->join('users','users.id','=','pembayaran.id_petugas')->select('pembayaran.bulan_dibayar','pembayaran.sampai_bulan','pembayaran.tgl_bayar','pembayaran.jumlah_dibayar','pembayaran.is_payed','pembayaran.created_at','siswa.nisn','siswa.nama','siswa.updated_at','users.nama_petugas')->get();
          $collect[] = User::all();
        $date = pembayaran::select('created_at')->first();
        $current = pembayaran::select(DB::raw('MONTH(created_at) month'))
           ->groupby('month')
           ->get();
        // dd($current);
        $carbon = Carbon::now();
        $num = pembayaran::all();
        $array = collect($data);
          set_time_limit(300);
        $pdf = PDF::loadview('admin/pdf/for_pdf',['current'=>$current,'data'=>$data,'collect'=>$collect,'date'=>$date,'array'=>$array]);
        return $pdf->download('Laporan Data PDF.pdf');
    }
}
