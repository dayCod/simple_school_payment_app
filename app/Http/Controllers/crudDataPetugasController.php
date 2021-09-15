<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use App\petugas;

class crudDataPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d = User::where('level','=','petugas')->get();
        return view('admin.crudDataPetugas.index',['d'=>$d]);
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
            'username'=> 'required|min:4',
            'password'=> 'required|min:4',
            'nama_petugas'=> 'required',
            'email'=> 'required',
            'level'=> 'required',
        ]);
        User::create([
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'nama_petugas'=>$request->nama_petugas,
            'email'=>'petugas@email.com',
            'level'=>$request->level,
        ]);
        return back()->withMessage('Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($petugas)
    {
        $update = User::find($petugas);
        // dd($update);
        return view('admin.crudDataPetugas.edit',compact('update','petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $petugas)
    {

        $request->validate([
            'username'=> 'required',
            'password'=> 'required|min:4',
            'nama_petugas'=> 'required',
        ]);

        $update = \App\User::find($petugas);
        $update->username = $request->get('username');
        $update->password = bcrypt($request->get('password'));
        $update->nama_petugas = $request->get('nama_petugas');
        $update->save();
        return redirect()->route('asPetugas.index')->withMessage('Deta berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($petugas)
    {
        User::find($petugas)->delete();
        return redirect()->route('asPetugas.index')->with('error','Data telah dihapus');
    }
}
