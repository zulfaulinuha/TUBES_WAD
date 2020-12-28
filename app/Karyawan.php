<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'nama', 'jk', 'ttl', 'email', 'alamat'
    ];

    public function projects()
    {
        return $this->hasMany(\App\Proyek::class,'karyawan_id');   
    }

    public function user()
    {
        return $this->hasOne(\App\User::class,'karyawan_id');   
    }
}
