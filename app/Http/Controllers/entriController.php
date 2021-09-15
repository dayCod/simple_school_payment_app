<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembayaran;
use App\siswa;
use App\spp;
use App\kelas;

class entriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pembayaran::all();
        $siswa = siswa::all();
        $spp = spp::all();
        $kelas = kelas::all();
        return view('admin.entri.index',compact('data','siswa','spp','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn'=> 'required',
            'id_kelas'=> 'required',
            'tgl_bayar'=> 'required',
            'bulan_dibayar'=> 'required',
            'sampai_bulan'=> 'required',
            'tahun_dibayar'=> 'required',
            'jumlah_dibayar'=> 'required',
            'is_payed'=> 'required',
        ]);
        pembayaran::create([
            'nisn'=>$request->nisn,
            'id_kelas'=>$request->id_kelas,
            'tgl_bayar'=>$request->tgl_bayar,
            'bulan_dibayar'=>$request->bulan_dibayar,
            'sampai_bulan'=>$request->sampai_bulan,
            'tahun_dibayar'=>$request->tahun_dibayar,
            'jumlah_dibayar'=>$request->jumlah_dibayar,
            'is_payed'=>$request->is_payed,
            'id_petugas'=> Auth()->user()->id
        ]);
        return redirect()->back()->withMessage('Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($payment)
    {
        $update = \App\pembayaran::find($payment);
        return view('admin.entri.edit',compact('update','payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $payment)
    {
        $request->validate([
            'bulan_dibayar'=> 'required',
            'tgl_bayar'=> 'required',
            'jumlah_dibayar'=> 'required',
        ]);
        $update = \App\pembayaran::find($payment);
        $update->update([
            'bulan_dibayar'=>$request->bulan_dibayar,
            'tgl_bayar'=>$request->tgl_bayar,
            'jumlah_dibayar'=>$request->jumlah_dibayar,
            'is_payed'=>1,
        ]);
        return redirect()->route('asEntri.index')->withMessage('Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($payment)
    {
        \App\pembayaran::find($payment)->delete();
        return redirect()->back()->with('error','Data berhasil dihapus');
    }
}
