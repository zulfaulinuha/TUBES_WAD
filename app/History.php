<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'project_id', 'tanggal', 'status',
    ];

    public function laporanProjects()
    {
        return $this->hasMany(\App\Laporan_Proyek::class,'history_id');   
    }

    public function project()
    {
        return $this->belongsTo(\App\Proyek::class,'project_id');   
    }
}
