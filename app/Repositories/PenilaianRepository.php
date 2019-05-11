<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 4/28/2019
 * Time: 12:06 AM
 */

namespace App\Repositories;

use App\Models\DetailPenilaian;
use App\Models\Penilaian;
use Illuminate\Support\Facades\DB;

class PenilaianRepository extends BaseRepository
{

    public function __construct()
    {
        $this->model = new Penilaian();
        $this->table = 'penilaian';
        $this->select = ['penilaian.*', 'satuan_kerja.nama as satuan_kerja'];
        $this->where = [];
        $this->join = [
            ['satuan_kerja', 'satuan_kerja.id', '=', 'penilaian.id_satuan_kerja']
        ];
        $this->orderBy = [
            [
                'penilaian.id', 'desc',
            ]
        ];
    }


    public function getDetailPenilaianById($id){
        return DetailPenilaian::where('id_penilaian', '=', $id)->get();
    }

    public function getDetailPenilaianSubCategory($idPenilaian){
        return DetailPenilaian::with(['kriteria'])
            ->where('id_penilaian', '=', $idPenilaian)
            ->get()->groupBy('kriteria.subkategori');
    }
}