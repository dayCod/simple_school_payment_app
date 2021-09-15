<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class petugas extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $fillable = [
    	'username',
    	'password',
    	'nama_petugas',
    	'level', 
    ];

     protected $hidden = [
        'remember_token','created_at','updated_at'
    ];

    protected $table = 'petugas';
}
