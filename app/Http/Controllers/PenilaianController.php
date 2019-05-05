<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 12:40 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Administrator\BaseController;
use App\Repositories\DetailPenilaianRepository;
use App\Repositories\PenilaianRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenilaianController extends BaseController
{
    private $penilaianRepo, $detailPenilaianRepo;

    function __construct(PenilaianRepository $penilaianRepository, DetailPenilaianRepository $detailPenilaianRepository)
    {
        $this->title = 'Penilaian LKE';
        $this->repository = $penilaianRepository;
        $this->route = '/penilaian';
        $this->view = 'penilaian.data';
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

        $this->penilaianRepo = $penilaianRepository;
        $this->detailPenilaianRepo = $detailPenilaianRepository;

        parent::__construct();
    }

    public function index(Request $request)
    {
        $this->viewData['jabatan'] = Auth::guard('petugas')->user()->jabatan;
        return parent::index($request); // TODO: Change the autogenerated stub
    }

    public function add()
    {
        $this->viewData['nilaiYT'] = \Config::get('custom.nilaiYT');
        $this->viewData['nilaiAbjad'] = \Config::get('custom.nilaiAbjad');

        $this->view = 'penilaian.tambah';
        return parent::add(); // TODO: Change the autogenerated stub
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'renstra' => 'mimes:doc,pdf,docx|required',
            'perjanjian_kinerja' => 'mimes:doc,pdf,docx,zip|required',
            'rencana_aksi' => 'mimes:doc,pdf,docx,zip|required',
            'akuntabilitas' => 'mimes:doc,pdf,docx,zip|required',
        ]);

        if ($validator->fails()){
            return redirect('/penilaian/add')
                ->withErrors($validator)
                ->withInput();
        }else{
            $renstra = $request->file('renstra');
            $renstraFileName = md5(time() . $renstra->getClientOriginalName()) . '.' . $renstra->getClientOriginalExtension();
            $renstra->move(public_path('files/penilaian'), $renstraFileName);

            $perjanjianKinerja = $request->file('perjanjian_kinerja');
            $perjanjianKinerjaFileName = md5(time() . $perjanjianKinerja->getClientOriginalName()) . '.' . $perjanjianKinerja->getClientOriginalExtension();
            $perjanjianKinerja->move(public_path('files/penilaian'), $perjanjianKinerjaFileName);

            $rencanaAksi = $request->file('rencana_aksi');
            $rencanaAksiFileName = md5(time() . $rencanaAksi->getClientOriginalName()) . '.' . $rencanaAksi->getClientOriginalExtension();
            $rencanaAksi->move(public_path('files/penilaian'), $rencanaAksiFileName);

            $akuntabilitas = $request->file('akuntabilitas');
            $akuntabilitasFileName = md5(time() . $akuntabilitas->getClientOriginalName()) . '.' . $akuntabilitas->getClientOriginalExtension();
            $akuntabilitas->move(public_path('files/penilaian'), $akuntabilitasFileName);

            if ($request->file('dokumen_pendukung')){
                $dokumenPendukung = $request->file('dokumen_pendukung');
                $dokumenPendukungFileName = md5(time() . $dokumenPendukung->getClientOriginalName()) . '.' . $dokumenPendukung->getClientOriginalExtension();
                $dokumenPendukung->move(public_path('files/penilaian'), $dokumenPendukungFileName);
            }


            $data['id_satuan_kerja'] = Auth::guard('petugas')->user()->id_satuan_kerja;
            $data['tahun'] = $request->post('tahun');
            $data['renstra'] = $renstraFileName;
            $data['perjanjian_kinerja'] = $perjanjianKinerjaFileName;
            $data['rencana_aksi'] = $rencanaAksiFileName;
            $data['akuntabilitas'] = $akuntabilitasFileName;
            $data['dokumenPendukung'] = ((isset($dokumenPendukungFileName) ? $dokumenPendukungFileName : ''));
            $data['nilai_akhir'] = $request->post('nilai_akhir');

            $penilaian = $this->penilaianRepo->insert($data);

            // form kriteria penilaian
            $kriteria = $request->post('kriteria');
            foreach ($kriteria as $key => $row){
                $row['id_penilaian'] = $penilaian->id;
                $row['id_kriteria_penilaian'] = $key;
                $this->detailPenilaianRepo->create($row);
            }


            return redirect('/penilaian');
        }
    }

    public function submitForm(Request $request, $id){
        $this->viewData['nilaiYT'] = \Config::get('custom.nilaiYT');
        $this->viewData['nilaiAbjad'] = \Config::get('custom.nilaiAbjad');

        $this->view = 'penilaian.tambah';

        $this->viewData['penilaian'] = $this->penilaianRepo->detail($id);

        $this->viewData['detailPenilaian'] = $this->penilaianRepo->getDetailPenilaianById($id);

        return view('penilaian.submit', $this->viewData);
    }

    public function submit(Request $request, $id){
        if (!empty($request->file('renstra'))){
            $renstra = $request->file('renstra');
            $renstraFileName = md5(time() . $renstra->getClientOriginalName()) . '.' . $renstra->getClientOriginalExtension();
            $renstra->move(public_path('files/penilaian'), $renstraFileName);

            $data['renstra'] = $renstraFileName;
        }

        if (!empty($request->file('perjanjian_kinerja'))) {
            $perjanjianKinerja = $request->file('perjanjian_kinerja');
            $perjanjianKinerjaFileName = md5(time() . $perjanjianKinerja->getClientOriginalName()) . '.' . $perjanjianKinerja->getClientOriginalExtension();
            $perjanjianKinerja->move(public_path('files/penilaian'), $perjanjianKinerjaFileName);

            $data['perjanjian_kinerja'] = $perjanjianKinerjaFileName;
        }

        if (!empty($request->file('rencana_aksi'))) {
            $rencanaAksi = $request->file('rencana_aksi');
            $rencanaAksiFileName = md5(time() . $rencanaAksi->getClientOriginalName()) . '.' . $rencanaAksi->getClientOriginalExtension();
            $rencanaAksi->move(public_path('files/penilaian'), $rencanaAksiFileName);

            $data['rencana_aksi'] = $rencanaAksiFileName;
        }

        if (!empty($request->file('akuntabilitas'))) {
            $akuntabilitas = $request->file('akuntabilitas');
            $akuntabilitasFileName = md5(time() . $akuntabilitas->getClientOriginalName()) . '.' . $akuntabilitas->getClientOriginalExtension();
            $akuntabilitas->move(public_path('files/penilaian'), $akuntabilitasFileName);

            $data['akuntabilitas'] = $akuntabilitasFileName;
        }

        if (!empty($request->file('dokumen_pendukung'))){
            $dokumenPendukung = $request->file('dokumen_pendukung');
            $dokumenPendukungFileName = md5(time() . $dokumenPendukung->getClientOriginalName()) . '.' . $dokumenPendukung->getClientOriginalExtension();
            $dokumenPendukung->move(public_path('files/penilaian'), $dokumenPendukungFileName);

            $data['dokumenPendukung'] = ((isset($dokumenPendukungFileName) ? $dokumenPendukungFileName : ''));
        }


        $data['id_satuan_kerja'] = Auth::guard('petugas')->user()->id_satuan_kerja;
        $data['tahun'] = $request->post('tahun');
        $data['nilai_akhir'] = $request->post('nilai_akhir');
        $data['status'] = 'submit';
        $this->penilaianRepo->update($data, $id);



        // form kriteria penilaian
        $kriteria = $request->post('kriteria');
        foreach ($kriteria as $key => $row){
            if (isset($row['idDetail'])){
                $detail['pilihan'] = $row['pilihan'];
                $detail['nilai'] = $row['nilai'];
                $detail['catatan'] = $row['catatan'];
                $this->detailPenilaianRepo->update($detail, $row['idDetail']);
            }
        }


        return redirect('/penilaian');
    }
}