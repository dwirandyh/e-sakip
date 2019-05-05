<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 2:14 PM
 */

namespace App\Repositories;


use App\Models\SatuanKerja;

class SatuanKerjaRepository extends BaseRepository
{

    public function __construct()
    {
        $this->model = new SatuanKerja();
        $this->table = 'satuan_kerja';
        $this->select = '*';
        $this->where = [];
        $this->join = [];
        $this->orderBy = [
            [
                'id', 'desc',
            ]
        ];
    }

    public function getAll(){
        return $this->model->get();
    }

    public function getDataDropdown(){
        return SatuanKerja::all()->pluck('nama', 'id')->toArray();
    }
}