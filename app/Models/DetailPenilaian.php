<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenilaian extends Model
{
    protected $table = 'detail_penilaian';

    protected $fillable = ['id_penilaian', 'id_kriteria_penilaian', 'pilihan', 'nilai', 'catatan', 'catatan_itama', 'file_revisi'];

}
