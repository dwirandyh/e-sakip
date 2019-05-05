<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SatuanKerja extends Model
{
    use SoftDeletes;

    protected $table = 'satuan_kerja';
    protected $fillable = ['nama'];

    public function penilaian()
    {
        return $this->hasMany('App\Models\Penilaian');
    }
}
