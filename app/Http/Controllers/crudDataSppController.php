<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\spp;
use App\siswa;
use App\status;
use DB;

class crudDataSppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = spp::all();
        $nisn = siswa::all();
        $spp = spp::all();
        return view('admin.crudDataSpp.index',['spp'=>$spp,'data'=>$data,'nisn'=>$nisn]);
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
            'tahun'=> 'required',
            'nominal'=> 'required',
        ]);
        spp::create([
            'tahun'=>$request->tahun,
            'nominal'=>$request->nominal
        ]);
        return back()->withMessage('Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($spp)
    {
        $update = \App\spp::find($spp);
        $siswa = \App\siswa::all();
        $spp = \App\spp::all();
        return view('admin.crudDataSpp.edit',compact('update','spp','siswa','spp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $spp)
    {
        $update = \App\spp::find($spp);
        $update->tahun = $request->get('tahun');
        $update->nominal = $request->get('nominal');
        $update->save();
        return redirect()->route('asSpp.index')->withMessage('Data berhasil Di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($spp)
    {
        \App\spp::find($spp)->delete();
        return back()->with('error','Data berhasil dihapus');
    }
}
