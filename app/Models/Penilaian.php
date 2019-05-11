<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penilaian extends Model
{
    use SoftDeletes;

    protected $table = 'penilaian';

    protected $fillable = [
        'id_satuan_kerja',
        'tahun',
        'renstra',
        'perjanjian_kinerja',
        'rencana_aksi',
        'akuntabilitas',
        'dokumen_pendukung',
        'nilai_akhir',
        'nilai_A_persentase',
        'nilai_A',
        'nilai_A_I_persentase',
        'nilai_A_I',
        'nilai_A_I_a_persentase',
        'nilai_A_I_a',
        'nilai_A_I_b_persentase',
        'nilai_A_I_b',
        'nilai_A_I_c_persentase',
        'nilai_A_I_c',
        'nilai_A_II_persentase',
        'nilai_A_II',
        'nilai_A_II_a_persentase',
        'nilai_A_II_a',
        'nilai_A_II_b_persentase',
        'nilai_A_II_b',
        'nilai_A_II_c_persentase',
        'nilai_A_II_c',
        'nilai_B_persentase',
        'nilai_B',
        'nilai_B_I_persentase',
        'nilai_B_I',
        'nilai_B_II_persentase',
        'nilai_B_II',
        'nilai_B_III_persentase',
        'nilai_B_III',
        'nilai_C_persentase',
        'nilai_C',
        'nilai_C_I_persentase',
        'nilai_C_I',
        'nilai_C_II_persentase',
        'nilai_C_II',
        'nilai_C_III_persentase',
        'nilai_C_III',
        'nilai_D_persentase',
        'nilai_D',
        'nilai_D_I_persentase',
        'nilai_D_I',
        'nilai_D_II_persentase',
        'nilai_D_II',
        'nilai_D_III_persentase',
        'nilai_D_III',
        'nilai_E_persentase',
        'nilai_E',
        'nilai_E_I_persentase',
        'nilai_E_I',
        'nilai_E_II_persentase',
        'nilai_E_II',
    ];

    public function satuanKerja(){
        return $this->belongsTo('App\Models\SatuanKerja', 'id_satuan_kerja');
    }
}
