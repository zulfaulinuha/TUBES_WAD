<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $fillable = [
        'nama', 'deatline', 'stakeholder', 'status', 'karyawan_id'
    ];

    public function histories()
    {
        return $this->hasMany(\App\History::class,'project_id');   
    }

    public function laporans()
    {
        return $this->hasMany(\App\Laporan::class,'project_id');   
    }

    public function karyawan()
    {
        return $this->belongsTo(\App\Karyawan::class,'karyawan_id');   
    }
}
