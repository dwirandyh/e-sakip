<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 2:14 PM
 */

namespace App\Repositories;


use App\Models\Evaluator;
class EvaluatorRepository extends BaseRepository
{

    public function __construct()
    {
        $this->model = new Evaluator();
        $this->table = 'evaluator';
        $this->select = '*';
        $this->where = [];
        $this->join = [];
        $this->orderBy = [
            [
                'id', 'desc',
            ]
        ];
    }
}