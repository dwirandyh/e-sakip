<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PetugasSatker extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'petugas_satker';
    protected $fillable = [
        'id_satuan_kerja',
        'nama',
        'jabatan',
        'email',
        'password'
    ];

    protected $dates = ['deleted_at'];


    public function satuanKerja(){
        return $this->belongsTo('App\Models\SatuanKerja', 'id_satuan_kerja');
    }
}
