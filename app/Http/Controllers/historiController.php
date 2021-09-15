<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembayaran;
use App\siswa;
use DB; 

class historiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = pembayaran::get();
        $nama = siswa::all();
        // $data = pembayaran::select('')
        // dd($pembayaran);        // dd($collect);
        return view('admin.histori.index',compact('nama','pembayaran'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pay)
    {
        $data = pembayaran::where(['nisn'=>$pay])->get();
        $update = pembayaran::where(['nisn'=>$pay])->first();
        // $data = pembayaran::where('nisn'=>$pay);

        // dd($data);
      
        return view('admin.histori.detail',compact('update','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
