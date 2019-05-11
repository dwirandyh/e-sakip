<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaPenilaian extends Model
{
    use SoftDeletes;

    protected $table = 'kriteria_penilaian';
    protected $fillable = [];

    public function penilaian()
    {
        return $this->hasMany('App\Models\DetailPenilaian','id_kriteria_penilaian');
    }
}
