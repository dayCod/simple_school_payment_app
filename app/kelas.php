<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['id_kelas','kelas','jurusan'];
    protected $primaryKey = 'id_kelas';



    // public function detailsiswa()
    // {
    // 	return $this->belongsTo('App\siswa');
    // }
}
