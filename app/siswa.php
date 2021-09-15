<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class siswa extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'siswa';
    protected $guarded = [];
    protected $primaryKey = 'nisn';

    public function detailclass()
    {
        return $this->hasOne('App\kelas','id_kelas','id_kelas','kelas');

    }
    public function pembayaran()
    {
        return $this->belongsTo('App\pembayaran','nisn','nisn','nama');
    }
    // public function spp()
    // {
    // 	return $this->hasOne('App\spp','id_spp','id_siswa');
    // }
}
