<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nama', 'date_from', 'date_to',
    ];

    public function laporanProjects()
    {
        return $this->hasMany(\App\Laporan_Proyek::class,'laporan_id');   
    }
}
