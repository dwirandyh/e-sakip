<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 12:50 PM
 */


namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Sub Judul halaman
     * @var string
     */
    protected $title = '';

    /**
     * Lokasi view yang akan digunakan
     * @var string
     */
    protected $view = '';

    /**
     * Model yang akan digunakan
     * @var BaseModel
     */
    protected $repository = '';

    /**
     * Url routing yang digunakan
     * @var string
     */
    protected $route = '';

    /**
     * Variabel yang akan di inputkan ke database serta rule, default value dan lain-lain
     * @var array
     */
    protected $input = [
        [],
    ];

    /**
     * Pesan validasi
     * @var array
     */
    public $validationMessage = [
        'required' => ':attribute harus diisi',
        'email' => ':attribute harus email yang valid',
        'same' => 'The :attribute and :other must match.',
        'size' => 'The :attribute must be exactly :size.',
        'between' => 'The :attribute must be between :min - :max.',
        'in' => 'The :attribute must be one of the following types: :values',
    ];

    /**
     * variabel yang akan passing ke view
     * @var array
     */
    public $viewData = [];

    private $countTrash = 0;
    private $countData = 0;

    function __construct()
    {
        if (!empty($this->view) && !empty($this->repository)) {
            /*
            $this->viewData['count'] = [
                'all' => 0, //$this->repository->countData(),
                'trash' => 0, //$this->repository->countTrash(),
            ];
            */

            $this->viewData['route'] = $this->route;
        }

        $this->viewData['contentTitle'] = $this->title;

        // meta tag website
        //$meta = Helper::getMetaTags();
        //$meta['title'] = $this->title . ' | Administrator | ' . $meta['title'];
        //$this->viewData['metaTag'] = Helper::getMetaTags();
        $this->viewData['title'] = $this->title;
    }

    /**
     * Check permission berdasarkan controller dan action yang sedang berjalan
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function checkPermission()
    {
        /*
        list($controllerName, $action) = explode('@', Route::getCurrentRoute()->getActionName());
        if ($action == 'getData') {
            $action = 'index';
        } else if ($action == 'store') {
            $action = 'add';
        } else if ($action == 'update') {
            $action = 'edit';
        }

        $permission = \DB::table('user_role_permission')
            ->join('user_role', 'user_role.id_user_role', '=', 'user_role_permission.id_user_role')
            ->join('user_permission', 'user_permission.id_user_permission', '=', 'user_role_permission.id_user_permission')
            ->where('user_permission.controller', '=', $controllerName)
            ->where('user_role.id_user_role', '=', Auth::guard('users')->user()->id_user_role)
            ->get();

        if (!$this->hasPermission($permission, [$action])) {
            return redirect('/administrator/error/403');
        }

        $this->viewData['permission'] = [
            'add' => $this->hasPermission($permission, ['add', 'store']),
            'edit' => $this->hasPermission($permission, ['edit', 'update']),
            'delete' => $this->hasPermission($permission, ['delete']),
            'deletePermanently' => $this->hasPermission($permission, ['deletePermanently']),
            'restore' => $this->hasPermission($permission, ['restore'])
        ];
        */

        return true;

    }

    /**
     * Pengecehakan untuk tiap - tiap action (index, add, edit, delete)
     * @param $permission
     * @param $action
     * @return bool
     */
    private function hasPermission($permission, $action)
    {
        $trash = false;
        foreach ($permission as $row) {
            if (in_array($row->action, $action)) {
                return true;
            }
            if (($action[0] == 'trash' || $action[0] == 'getTrash') && in_array($row->action, ['restore', 'deletePermanently'])) {
                $trash = true;
            }
        }
        return $trash;
    }

    /**
     * Menampilkan halaman daftar data
     * @param Request $request
     * @return bool|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }


        $this->viewData['type'] = 'all';

        /*
        if ($this->viewData['permission']['delete']) {
            $this->viewData['formAction'] = url($this->route . '/delete');
        } else {
            $this->viewData['formAction'] = '';
        }
        */

        $this->viewData['formAction'] = url($this->route . '/delete');

        if (!empty($this->view) && !empty($this->repository)) {
            $this->viewData['count'] = [
                'all' => $this->repository->count(), //$this->repository->countData(),
                'trash' => $this->repository->countTrash(), //$this->repository->countTrash(),
            ];

            $this->viewData['route'] = $this->route;
        }

        $this->viewData['title'] = $this->title;

        $this->viewData['dataType'] = ['url' => url($this->route) . '/trash', 'text' => 'Sampah', 'icon' => 'fa fa-trash-o', 'count' => $this->viewData['count']['trash']];
        return view($this->view, $this->viewData);
    }

    /**
     * Mengambil data yang aktif
     * @return bool|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getData()
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $data = $this->repository->getPaginateData();
        return response()->json($data);
    }

    /**
     * Menampilkan halaman daftar data yang tidak aktif
     * @param Request $request
     * @return bool|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function trash(Request $request)
    {
        // check permission
        /*
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }
        */
        if (!empty($this->view) && !empty($this->repository)) {
            $this->viewData['count'] = [
                'all' => $this->repository->count(), //$this->repository->countData(),
                'trash' => $this->repository->countTrash(), //$this->repository->countTrash(),
            ];

            $this->viewData['route'] = $this->route;
        }


        $this->viewData['type'] = 'trash';

        $this->viewData['formAction'] = '';
        //if ($this->viewData['permission']['deletePermanently']) {
        $this->viewData['formAction'] = url($this->route . '/deletepermanently');
        //}
        //if ($this->viewData['permission']['restore']) {
        $this->viewData['formAction'] = url($this->route . '/restore');
        //}


        $this->viewData['dataType'] = ['url' => url($this->route), 'text' => 'Semua', 'icon' => 'fa fa-th', 'count' => $this->viewData['count']['all']];
        return view($this->view, $this->viewData);
    }

    /**
     * Mengambil data yang tidak aktif
     * @return bool|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getTrash()
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $data = $this->repository->getPaginateTrash();
        return response()->json($data);
    }

    /**
     * Menampilkan halaman tambah data
     * @return bool|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function add()
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $this->viewData['act'] = 'add';


        return view($this->view, $this->viewData);
    }

    /**
     * Fungsi untuk menyimpan data ke database
     * @param Request $request
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        // check permission
        /*
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }
        */

        $rules = [];
        $data = [];
        foreach ($this->input as $key => $value) {
            if (is_array($value)) {
                if (!empty($value['rule'])) {
                    $rules[$key] = $value['rule'];
                }
                $data[$key] = $request->input($key, (isset($value['default']) ? $value['default'] : null));
            } else {
                $data[$value] = $request->input($value, (isset($value['default']) ? $value['default'] : null));
            }
        }

        $this->validate($request, $rules, $this->validationMessage);


        foreach ($this->input as $key => $value) {
            if (!empty($value['upload'])) {
                $file = $request->file($key);
                if (!empty($file)) {
                    $fileName = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                    $imageMimes = ['image/gif', 'image/png', 'image/jpeg', 'image/jpg', 'svg'];
                    /*
                    if (in_array($file->getMimeType(), $imageMimes)) {
                        if (isset($value['upload']['thumbnail'])){}
                        $thumbnailPath = (isset($value['upload']['thumbnail']) ? $value['upload']['thumbnail'] : public_path('assets/thumbnail'));
                        $img = \Image::make($file->getRealPath());
                        $img->resize(200, 200, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($thumbnailPath . '/' . $fileName);
                    }
                    */
                    $file->move($value['upload']['destination'], $fileName);
                    $data[$key] = $fileName;
                }
            }
        }

        $this->repository->insert($data, $request);

        return redirect($this->route)->with('message', ['success', 'Data berhasil disimpan']);
    }

    /**
     * Menampilkan halaman perbaiki data
     * @param $id
     * @return bool|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit($id)
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $this->viewData['act'] = 'edit';
        $this->viewData['detail'] = $this->repository->detail($id);
        return view($this->view, $this->viewData);
    }

    /**
     * Fungsi untuk mengupdate data ke database berdasarkan id
     * @param Request $request
     * @param $id
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $rules = [];
        $data = [];
        foreach ($this->input as $key => $value) {
            if (is_array($value)) {
                if (!empty($value['rule'])) {
                    $rules[$key] = $value['rule'];
                }
                $data[$key] = $request->input($key, (isset($value['default']) ? $value['default'] : null));
            } else {
                $data[$value] = $request->input($value, (isset($value['default']) ? $value['default'] : null));
            }
        }


        $this->validate($request, $rules, $this->validationMessage);

        foreach ($this->input as $key => $value) {
            if (!empty($value['upload'])) {
                $file = $request->file($key);
                if (!empty($file)) {
                    $fileName = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                    $imageMimes = ['image/gif', 'image/png', 'image/jpeg', 'image/jpg', 'svg'];
                    /*
                    if (in_array($file->getMimeType(), $imageMimes)) {
                        $thumbnailPath = (isset($value['upload']['thumbnail']) ? $value['upload']['thumbnail'] : public_path('assets/thumbnail'));
                        $img = \Image::make($file->getRealPath());
                        $img->resize(200, 200, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($thumbnailPath . '/' . $fileName);
                    }
                    */

                    $file->move($value['upload']['destination'], $fileName);
                    $data[$key] = $fileName;
                } else {
                    unset($data[$key]);
                }
            }
        }

        $this->repository->update($data, $id);

        return redirect($this->route)->with('message', ['success', 'Data berhasil perbaiki']);
    }

    /**
     * Menghapus data berdasarkan parameter $request
     * @param Request $request
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request)
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $id = $request->input('id');

        if (isset($id)) {
            $this->repository->delete($request->input('id'));
            $flash = ['success', 'Data berhasil dihapus'];
        } else {
            $flash = ['danger', 'Pilih data yang akan dihapus'];
        }
        return redirect($this->route)->with('message', $flash);
    }

    /**
     * Merestore data berdasarkan parameter $request
     * @param Request $request
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(Request $request)
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $id = $request->input('id');
        if (isset($id)) {
            $this->repository->restore($id);
            $flash = ['success', 'Data berhasil dipulihkan'];
        } else {
            $flash = ['danger', 'Pilih data yang akan dipulihkan'];
        }
        return redirect($this->route)->with('message', $flash);
    }

    /**
     * Menghapus data secara permanen berdasarkan $request
     * @param Request $request
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deletePermanently(Request $request)
    {
        // check permission
        $permission = $this->checkPermission();
        if ($permission !== true) {
            return $permission;
        }

        $id = $request->input('id');
        if (isset($id)) {
            $this->repository->deletePermanently($id);
            $flash = ['success', 'Data berhasil dihapus secara permanen'];
        } else {
            $flash = ['danger', 'Pilih data yang akan dihapus secara permanent'];
        }

        return redirect($this->route)->with('message', $flash);
    }
}
