<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\siswa;
use DB;

class crudDataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kelas::all();
        return view('admin.crudDataKelas.index',['data'=>$data]);
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
            'id_kelas'=> 'required',
            'kelas'=> 'required',
            'jurusan'=> 'required',
        ]);
        kelas::create([
            'id_kelas'=>$request->id_kelas, 
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
        ]);
        return back()->withMessage('Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        // return $this->DB::table('kelas')->where('id_kelas',$kelas)-get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kelas)
    {
        $update = \App\kelas::find($kelas);
        return view('admin.crudDataKelas.edit',['update'=>$update]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas)
    {
        $request->validate([
            'kelas'=> 'required',
            'jurusan'=> 'required',
        ]);

        $update = \App\kelas::find($kelas);
        $update->kelas = $request->get('kelas');
        $update->jurusan = $request->get('jurusan');
        $update->save();
        return redirect()->route('asClass.index')->withMessage('Data berhasil dirubah!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kelas)
    {
       $dataPar = DB::table('kelas')
       ->leftJoin('siswa','kelas.id_kelas', '=', 'siswa.id_kelas')
       ->where('kelas.id_kelas', $kelas);
       DB::table('siswa')->where('id_kelas', $kelas)->delete();
       $dataPar->delete();
        return redirect()->route('asClass.index')->with('error','Data berhasil dihapus'); 
    }
}
