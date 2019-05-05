<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 4/28/2019
 * Time: 12:06 AM
 */

namespace App\Repositories;

use App\Models\DetailPenilaian;

class DetailPenilaianRepository
{
    protected $model;

    public function __construct(DetailPenilaian $model)
    {
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->get();
    }

    public function paginate($count){
        return $this->model->paginate($count);
    }

    public function create($data){
        return $this->model->create($data);
    }

    public function update($data, $id){
        return $this->model->where('id', '=', $id)->update($data);
    }
}