<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class pembayaran extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $guarded = [];

    public function student()
    {
    	return $this->hasOne('App\siswa','nisn','nisn','nis','nama','id_kelas');
    }
    public function class()
    {
    	return $this->hasOne('App\kelas','id_kelas','id_kelas','kelas','jurusan');
    }
    public function petugas()
    {
        return $this->hasOne('App\User','id','id_petugas','nama_petugas');
    }

}
