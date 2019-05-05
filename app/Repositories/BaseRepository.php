<?php
/**
 * Created by PhpStorm.
 * User: Dwi Randy H
 * Date: 5/2/2019
 * Time: 12:53 PM
 */

namespace App\Repositories;

use Illuminate\Support\Facades\Input;

class BaseRepository
{

    public $model;

    /**
     * Nama tabel
     * @var string
     */
    protected $table = '';

    /**
     * Join tabel
     * @var array
     */
    protected $join = [];

    /**
     * Kolom yang akan di select
     * @var array
     */
    protected $select = [];

    /**
     * Kolom yang dijadikan primary key
     * @var string
     */
    protected $primaryKey = '';

    /**
     * Where yang akan digunakan ketika select
     * @var array
     */
    protected $where = [];

    /**
     * Pengurutan data yang akan ditampilkan, baik yang aktif ataupun yang tidak aktif
     * @var array
     */
    protected $orderBy = [];


    public function count()
    {
        return $this->model::count();
    }

    public function countTrash()
    {
        return $this->model::onlyTrashed()->count();
    }

    public function delete($id){
        if (is_array($id)){
            $this->model::destroy($id);
        }else{
            $this->model::find($id)->delete();
        }
    }

    public function restore($id){
        if (is_array($id)){
            foreach ($id as $row){
                $this->model::withTrashed()
                    ->where('id', $row)
                    ->restore();
            }
        }else{
            $this->model::withTrashed()
                ->where('id', $id)
                ->restore();
        }
    }

    public function deletePermanently($id){
        if (is_array($id)){
            foreach ($id as $row){
                $this->model::withTrashed()
                    ->where('id', $row)
                    ->forceDelete();
            }
        }else{
            $this->model::withTrashed()
                ->where('id', $id)
                ->forceDelete();
        }
    }

    public function insert($data){
        $data = $this->model::create($data);
        return $data;
    }

    public function update($data, $id){
        $this->model->where('id', $id)
            ->update($data);
    }

    public function detail($id){
        return $this->model->findOrFail($id);
    }

    public function getPaginateTrash(){
        $db = \DB::table($this->table);
        $db->select($this->select);

        foreach ($this->join as $row) {
            if (count($row) > 4) {
                if ($row[0] == 'left') {
                    $db->leftJoin($row[1], $row[2], $row[3], $row[4]);
                }
            } else {
                $db->join($row[0], $row[1], $row[2], $row[3]);
            }
        }


        $db->where($this->table . '.deleted_at', '<>', null);

        $search = Input::get('search')['value'];
        if ($search != null) {
            $db->where(function ($db) use ($search) {
                foreach (Input::get('columns') as $key => $row) {
                    if ($row['searchable'] == "true") {
                        $db->orWhere($row['name'], 'like', '%' . $search . '%');
                    }
                }
            });
        }

        if (Input::get('order') != null) {
            $columns = Input::get('columns');
            $db->orderBy($columns[Input::get('order')[0]['column']]['name'], Input::get('order')[0]['dir']);
        } else {
            if (count($this->orderBy) > 0) {
                foreach ($this->orderBy as $row) {
                    if (is_array($row)) {
                        $keys = array_keys($row);
                        $db->orderBy($row[$keys[0]], $row[$keys[1]]);
                    }
                }
            }
        }

        $page = Input::get('start', 1) / Input::get('length', 10);

        $data = $db->paginate(Input::get('length', 10), ['*'], 'page', ($page + 1));
        $result = [
            'draw' => Input::get('draw'),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(),
            'data' => $data->items()
        ];
        return $result;
    }

    public function getPaginateData()
    {
        $db = \DB::table($this->table);
        $db->select($this->select);

        foreach ($this->join as $row) {
            if (count($row) > 4) {
                if ($row[0] == 'left') {
                    $db->leftJoin($row[1], $row[2], $row[3], $row[4]);
                }
            } else {
                $db->join($row[0], $row[1], $row[2], $row[3]);
            }
        }


        $db->where($this->table . '.deleted_at', '=', null);

        $search = Input::get('search')['value'];
        if ($search != null) {
            $db->where(function ($db) use ($search) {
                foreach (Input::get('columns') as $key => $row) {
                    if ($row['searchable'] == "true") {
                        $db->orWhere($row['name'], 'like', '%' . $search . '%');
                    }
                }
            });
        }

        if (Input::get('order') != null) {
            $columns = Input::get('columns');
            $db->orderBy($columns[Input::get('order')[0]['column']]['name'], Input::get('order')[0]['dir']);
        } else {
            if (count($this->orderBy) > 0) {
                foreach ($this->orderBy as $row) {
                    if (is_array($row)) {
                        $keys = array_keys($row);
                        $db->orderBy($row[$keys[0]], $row[$keys[1]]);
                    }
                }
            }
        }

        $page = Input::get('start', 1) / Input::get('length', 10);

        $data = $db->paginate(Input::get('length', 10), ['*'], 'page', ($page + 1));
        $result = [
            'draw' => Input::get('draw'),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(),
            'data' => $data->items()
        ];
        return $result;
    }
}