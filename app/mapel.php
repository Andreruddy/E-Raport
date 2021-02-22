<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = [
        'kd_mapel', 'nama_mapel', 'pengajar'
    ];

    public function siswa() {
        return $this->belongsToMany(siswa::class)->withPivot('siswa_id','mapel_id','nilai')->withTimestamps();
    }
}

