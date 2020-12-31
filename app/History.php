<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'project_id', 'tanggal', 'status', 'laporan',
    ];

    public function project()
    {
        return $this->belongsTo(\App\Proyek::class,'project_id');   
    }
}
