<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kelas(){
        return $this->belongsTo('App\kelas','id_kelas');
    }
    public function mapel()
    {
        return $this->belongsToMany(
            'App\Mapel',
            'Mapel_siswa',
            'id_siswa',
            'id_mapel'
        );
    }
}