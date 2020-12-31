<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nama', 'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(\App\Proyek::class,'project_id');   
    }
}
