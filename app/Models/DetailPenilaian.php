<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenilaian extends Model
{
    protected $table = 'detail_penilaian';

    protected $fillable = ['id_penilaian', 'id_kriteria_penilaian', 'pilihan', 'nilai', 'catatan', 'catatan_evaluator', 'catatan_revisi', 'file_revisi'];

    public function kriteria(){
        return $this->belongsTo('App\Models\KriteriaPenilaian', 'id_kriteria_penilaian');
    }

    public function penilaian(){
        return $this->belongsTo('App\Models\Penilaian', 'id_penilaian');
    }
}
