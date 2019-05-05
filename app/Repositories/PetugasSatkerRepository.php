<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 4/28/2019
 * Time: 12:06 AM
 */

namespace App\Repositories;

use App\Models\PetugasSatker;

class PetugasSatkerRepository extends BaseRepository
{

    public function __construct()
    {
        $this->model = new PetugasSatker();
        $this->table = 'petugas_satker';
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
}