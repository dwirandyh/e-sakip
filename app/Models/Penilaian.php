<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penilaian extends Model
{
    use SoftDeletes;

    protected $table = 'penilaian';

    protected $fillable = ['id_satuan_kerja', 'tahun', 'renstra', 'perjanjian_kinerja', 'rencana_aksi', 'akuntabilitas', 'dokumen_pendukung', 'nilai_akhir'];

    public function satuanKerja(){
        return $this->belongsTo('App\Models\SatuanKerja', 'id_satuan_kerja');
    }
}
