<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 12:40 PM
 */

namespace App\Http\Controllers\Administrator\SatuanKerja;

use App\Http\Controllers\Administrator\BaseController;
use App\Repositories\PetugasSatkerRepository;
use App\Repositories\SatuanKerjaRepository;
use Illuminate\Http\Request;

class SatuanKerjaController extends BaseController
{
    function __construct(SatuanKerjaRepository $satuanKerjaRepo)
    {
        $this->title = 'Satuan Kerja';
        $this->repository = $satuanKerjaRepo;
        $this->route = '/administrator/satuan-kerja';
        $this->view = 'administrator.satuan_kerja.satuan_kerja';
        $this->input = [
            'nama' => [
                'rule' => 'required'
            ]
        ];

        parent::__construct();
    }
}