@extends('layouts.app')


@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @if (!isset($act))
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ $title }}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">{{ $title }}</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data {{ $title }}</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{ Form::open(['url' => $formAction, 'method' => 'DELETE', 'id' => 'form-option']) }}
                        <table id="tabledb" class="table table-bordered" cellspacing="0" width="100%">
                            <tfoot>
                            <tr>
                                <th>&nbsp;</th>
                                <th colspan="4">
                                    <select class="form-control" id="option">
                                        @if($type == 'trash')
                                            <option
                                                    data-url="{{ url($route . '/restore') }}">
                                                Restore
                                            </option>

                                            <option
                                                    data-url="{{ url($route . '/deletepermanently') }}">
                                                Delete Permanently
                                            </option>
                                        @else
                                            <option
                                                    data-url="{{ url($route . '/delete') }}">
                                                Hapus Data
                                            </option>
                                        @endif
                                    </select>
                                    <a class="btn btn-primary" id="btn-submit">Submit</a>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                        {{ Form::close() }}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->

    @elseif($act == 'add')
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ $title }}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ $route }}"> {{ $title }}</a></li>
                    <li class="active">Tambah {{ $title }}</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah {{ $title }}</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <a href="<?= url($route); ?>" class="btn btn-box-tool"
                               title="Remove">
                                <i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['id' => 'formvalidate', 'url' => url($route . '/store'), 'files' => true]) !!}
                        <div class="row">
                            <div class="col-sm-6">
                                @component('components.text_input', [
                                    'title' => 'Nama Evaluator',
                                    'type' => 'text',
                                    'name' => 'nama',
                                    'placeholder' => 'Nama Evaluator',
                                    'isRequried' => true,
                                    'value' => old('nama')
                                ])
                                @endcomponent
                            </div>
                            <div class="col-sm-6">
                                @component('components.select', [
                                    'title' => 'Jabatan',
                                    'name' => 'jabatan',
                                    'options' => \Config::get('custom.jabatanEvaluator'),
                                    'value' => old('jabatan'),
                                    'isRequried' => true
                                ])
                                @endcomponent
                            </div>
                            <div class="col-sm-6">
                                @component('components.text_input', [
                                    'title' => 'Email',
                                    'type' => 'email',
                                    'name' => 'email',
                                    'placeholder' => 'Email',
                                    'isRequried' => true,
                                    'value' => old('email')
                                ])
                                @endcomponent
                            </div>
                            <div class="col-sm-6">
                                @component('components.text_input', [
                                    'title' => 'Password',
                                    'type' => 'password',
                                    'name' => 'password',
                                    'placeholder' => 'Password',
                                    'isRequried' => true
                                ])
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
    @elseif ($act == 'edit')
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ $title }}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{ $route }}"> {{ $title }}</a></li>
                    <li class="active">Tambah {{ $title }}</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Perbaiki {{ $title }}</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <a href="<?= url($route); ?>" class="btn btn-box-tool"
                               title="Remove">
                                <i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['id' => 'formvalidate', 'url' => url($route . '/update/' . $detail->id), 'method' => 'PUT', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-sm-6">
                                @component('components.text_input', [
                                    'title' => 'Nama Evaluator',
                                    'type' => 'text',
                                    'name' => 'nama',
                                    'placeholder' => 'Nama Evaluator',
                                    'isRequried' => true,
                                    'value' => old('nama', $detail->nama)
                                ])
                                @endcomponent
                            </div>
                            <div class="col-sm-6">
                                @component('components.select', [
                                    'title' => 'Jabatan',
                                    'name' => 'jabatan',
                                    'options' => \Config::get('custom.jabatanEvaluator'),
                                    'value' => old('jabatan', $detail->jabatan),
                                    'isRequried' => true
                                ])
                                @endcomponent
                            </div>
                            <div class="col-sm-6">
                                @component('components.text_input', [
                                    'title' => 'Email',
                                    'type' => 'email',
                                    'name' => 'email',
                                    'placeholder' => 'Email',
                                    'isRequried' => true,
                                    'value' => old('email', $detail->email)
                                ])
                                @endcomponent
                            </div>
                            <div class="col-sm-6">
                                @component('components.text_input', [
                                    'title' => 'Password',
                                    'type' => 'password',
                                    'name' => 'password',
                                    'placeholder' => 'Password',
                                    'isRequried' => true
                                ])
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        @endif
    </div>
@endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    @if(!isset($act))
        <script>
            var dataUrl = "{{ Request::url() }}";
            var baseRoute = "{{ $route }}";

            var columns = [
                {
                    "data": "id",
                    "name": "id",
                    'searchable': false,
                    'orderable': false,
                    "title": "<input type='checkbox' value='1' id='table-db-select-all'>",
                    'render': function (data, type, full, meta) {
                        return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                    }
                },
                {"data": "nama", "name": "nama", "title": "Nama"},
                {"data": "email", "name": "email", "title": "Email"},
                {"data": "jabatan", "name": "jabatan", "title": "Jabatan"},
                {

                    "data": "action", "name": "Action", "title": "Action", "searchable": false, "orderable": false,
                    "render": function (data, type, row) {
                        return '<a href="{{ url($route) }}/edit/' + row.id + '" class="btn btn-sm btn-warning" id="edit_' + row.id + '" onclick=""><i class="fa fa-edit"></i> Perbaiki</a>';
                    }
                }
            ];

            var dataCount = {{ $count['all'] }};
            var trashCount = {{ $count['trash'] }};
        </script>
        <script>
            $(document).ready(function () {
                $("#table-permission").on('click', 'thead th input', function () {
                    $('input[type="checkbox"]').prop('checked', this.checked);
                });
            });
        </script>
    @endif


    <script src="{{ asset('js/admin.js') }}"></script>


    <script>

    </script>
@endsection
