@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Form Penliaian LKE

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ url('/penilaian') }}">Penilaian</a></li>
                <li class="active">Tambah</li>
            </ol>
        </section>

        <form role="form" method="post" action="{{ url('/penilaian/store') }}" enctype="multipart/form-data">
        @csrf
        <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Form Penliaian LKE</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <legend>Informasi Penilaian</legend>
                                        <div class="form-group">
                                            <label>
                                                Tahun Penilaian
                                            </label>
                                            <select class="form-control" name="tahun">
                                                @for($i = date('Y') - 5; $i < date('Y') + 10; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>

                                        <legend>
                                            Dokumen Penting
                                        </legend>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                @component('components.text_input', [
                                                    'type' => 'file',
                                                    'name' => 'renstra',
                                                    'title' => 'File Renstra',
                                                    'placeholder' => '',
                                                    'errors' => $errors,
                                                ])
                                                @endcomponent
                                            </div>
                                            <div class="col-sm-6">
                                                @component('components.text_input', [
                                                   'type' => 'file',
                                                   'name' => 'perjanjian_kinerja',
                                                   'title' => 'File Perjanjian Kinerja',
                                                   'placeholder' => '',
                                                   'errors' => $errors,
                                               ])
                                                @endcomponent
                                            </div>
                                            <div class="col-sm-6">
                                                @component('components.text_input', [
                                                  'type' => 'file',
                                                  'name' => 'rencana_aksi',
                                                  'title' => 'File Rencana Aksi',
                                                  'placeholder' => '',
                                                  'errors' => $errors,
                                              ])
                                                @endcomponent
                                            </div>
                                            <div class="col-sm-6">
                                                @component('components.text_input', [
                                                  'type' => 'file',
                                                  'name' => 'akuntabilitas',
                                                  'title' => 'File Laporan Akuntabilitas',
                                                  'placeholder' => '',
                                                  'errors' => $errors,
                                              ])
                                                @endcomponent
                                            </div>
                                            <div class="col-sm-6">
                                                @component('components.text_input', [
                                                 'type' => 'file',
                                                 'name' => 'dokumen_pendukung',
                                                 'title' => 'Dokumen Pendukung',
                                                 'placeholder' => '',
                                                 'errors' => $errors,
                                             ])
                                                @endcomponent
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin-top: 20px;">
                                        <legend>
                                            Kertas Kerja Evaluasi
                                        </legend>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="box-group" id="accordion">
                                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                    <div class="panel box box-primary">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseA">
                                                                    A. Perencanaan Kinerja (30%)
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseA" class="panel-collapse collapse in">
                                                            @include('penilaian.input_a')
                                                        </div>
                                                    </div>
                                                    <div class="panel box box-primary">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseB">
                                                                    B. PENGUKURAN KINERJA (25%)
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseB" class="panel-collapse collapse">
                                                            @include('penilaian.input_b')
                                                        </div>
                                                    </div>
                                                    <div class="panel box box-primary">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseC">
                                                                    C. PELAPORAN KINERJA (15%)
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseC" class="panel-collapse collapse">
                                                            @include('penilaian.input_c')
                                                        </div>
                                                    </div>
                                                    <div class="panel box box-primary">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseD">
                                                                    D. EVALUASI INTERNAL (10%)
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseD" class="panel-collapse collapse">
                                                            @include('penilaian.input_d')
                                                        </div>
                                                    </div>
                                                    <div class="panel box box-primary" style="display: none`;">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseE">
                                                                    E. PENCAPAIAN SASARAN/KINERJA ORGANISASI (20%)
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseE" class="panel-collapse collapse">
                                                            @include('penilaian.input_e')
                                                        </div>
                                                    </div>
                                                </div>

                                                <legend style="margin-top: 20px;">Hasil Evaluasi</legend>
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>Bobot</td>
                                                        <td>Persentase</td>
                                                        <td>Nilai</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>HASIL EVALUASI SAKIP (100%)</td>
                                                        <td>100</td>
                                                        <td><span id="total-persentase">0</span></td>
                                                        <td>
                                                            <span id="total-nilai">0</span></td>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <input type="hidden" name="nilai_akhir" id="nilai_akhir" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                        <!-- /.box -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </form>
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script src="{{ asset('js/form_penilaian.js') }}"></script>
@endsection