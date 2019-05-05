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
                        @if ($jabatan == 'Kepala')
                            <!--
                                <tfoot>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th colspan="2">
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
-->
                            @endif
                        </table>
                        {{ Form::close() }}
                    </div>
                    <!-- /.box-body -->
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
                {"data": "satuan_kerja", "name": "satuan_kerja", "title": "Satuan Kerja", 'searchable': false,},
                {"data": "tahun", "name": "tahun", "title": "Tahun"},
                {
                    "data": "status", "name": "status", "title": "status",
                    "render": function (data, type, row) {
                        if (row.status === 'input') {
                            return 'Menunggu Submit';
                        }else if (row.status === 'submit'){
                            return 'Menunggu Evaluasi';
                        }
                    }
                },

                    @if ($jabatan == 'Kepala')
                {

                    "data": "action", "name": "Action", "title": "Action", "searchable": false, "orderable": false,
                    "render": function (data, type, row) {
                        if (row.status === 'input') {
                            return '<a href="{{ url($route) }}/submit/' + row.id + '" class="btn btn-sm btn-warning" id="edit_' + row.id + '" onclick=""><i class="fa fa-edit"></i> Evaluasi & Submit</a>';
                        }
                    }
                }
                @endif
            ];

            var dataCount = {{ $count['all'] }};
            var trashCount = {{ $count['trash'] }};

            @if ($jabatan == 'Kepala')
                canDelete = false;
            @endif
        </script>
        <script>
            $(document).ready(function () {
                $("#table-permission").on('click', 'thead th input', function () {
                    $('input[type="checkbox"]').prop('checked', this.checked);
                });
            });
        </script>

        <script src="{{ asset('js/admin.js') }}"></script>
    @endif



@endsection
