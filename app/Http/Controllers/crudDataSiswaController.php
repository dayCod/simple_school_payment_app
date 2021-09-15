<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\kelas;
use DB;

class crudDataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = DB::table('siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->get();
        $data = siswa::all();
        // dd($data);
        // $spp = DB::table('siswa')->join('spp','siswa.id','=','spp.id')->get();
        return view('admin.crudDataSiswa.index',['data'=>$data,'class'=>$class,'buat'=>kelas::all()]);
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
            'nisn'=> 'required|min:10',
            'nis'=> 'required|min:8',
            'nama'=> 'required',
            'alamat'=> 'required',
            'no_telp'=> 'required|min:10',
            'id_kelas'=> 'required',
        ]);
        siswa::create([
            'nisn'=>$request->nisn,
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'id_kelas'=>$request->id_kelas,
            'password'=>bcrypt('rahasia'),
        ]);
        return back()->withMessage('Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($siswa)
    {
        $update = \App\siswa::find($siswa);
        return view('admin.crudDataSiswa.edit',compact('update','siswa'));       
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siswa)
    {
         $request->validate([
            'nisn'=> 'required|min:10',
            'nis'=> 'required|min:8',
            'nama'=> 'required',
            'alamat'=> 'required',
            'no_telp'=> 'required|min:10',
        ]);
        $update = \App\siswa::find($siswa);
        $update->nisn = $request->get('nisn');
        $update->nis = $request->get('nis');
        $update->nama = $request->get('nama');
        $update->alamat = $request->get('alamat');
        $update->no_telp = $request->get('no_telp');
        $update->save();
        return redirect()->route('asSiswa.index')->withMessage('Data berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($siswa)
    {
        $data = DB::table('siswa')->leftjoin('pembayaran','siswa.nisn','=','pembayaran.nisn')
                ->where('siswa.nisn',$siswa);
                DB::table('pembayaran')->where('nisn',$siswa)->delete();
                $data->delete();
        return redirect()->route('asSiswa.index')->with('error','Data Berhasil Dihapus');
    }
}
