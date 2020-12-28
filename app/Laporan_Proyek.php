<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan_Proyek extends Model
{
    protected $fillable = [
        'history_id', 'laporan_id',
    ];

    public function history()
    {
        return $this->belongsTo(\App\History::class,'history_id');   
    }

    public function laporan()
    {
        return $this->belongsTo(\App\Laporan::class,'laporan_id');   
    }
}
