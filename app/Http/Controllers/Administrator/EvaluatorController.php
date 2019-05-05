<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 12:40 PM
 */

namespace App\Http\Controllers\Administrator;

use App\Repositories\EvaluatorRepository;
use Illuminate\Http\Request;

class EvaluatorController extends BaseController
{
    function __construct(EvaluatorRepository $evaluatorRepository)
    {
        $this->title = 'Evaluator';
        $this->repository = $evaluatorRepository;
        $this->route = '/administrator/evaluator';
        $this->view = 'administrator.evaluator';
        $this->input = [
            'nama' => [
                'rule' => 'required'
            ],
            'jabatan' => [
                'rule' => 'required',
            ],
            'email' => [
                'rule' => 'required',
            ],
            'password' => [
                'rule' => 'required',
            ],

        ];

        parent::__construct();
    }

    public function store(Request $request)
    {
        $request->merge(['password' => bcrypt($request->post('password'))]);
        return parent::store($request); // TODO: Change the autogenerated stub
    }

    public function update(Request $request, $id)
    {
        unset($this->input['password']);

        $request->merge(['password' => bcrypt($request->post('password'))]);

        return parent::update($request, $id); // TODO: Change the autogenerated stub
    }
}