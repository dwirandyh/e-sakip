@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Raport Sementara
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ url('/penilaian') }}">Penilaian</a></li>
                <li class="active">Raport Sementara</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Raport Sementara</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <table class="table table-bordered" id="table-A-I-a">
                                <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Sub Komponen</td>
                                    <td rowspan="2">Bobot</td>
                                    <td colspan="2">Unit Kerja/SKPD</td>
                                    <td rowspan="2">Catatan</td>
                                    <td rowspan="2">Catatan Evaluator</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td width="10%">Y/T</td>
                                    <td width="10%">Nilai</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr style="background: #FBBC05; font-weight: bold; ">
                                    <td colspan="2"><b>A. PERENCANAAN KINERJA (30%)</b></td>
                                    <td>30</td>
                                    <td>{{ $penilaian->nilai_A_persentase }}%</td>
                                    <td>{{ $penilaian->nilai_A }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>I</td>
                                    <td style="background: #FBBC05;">PERENCANAAN STRATEGIS (10%)</td>
                                    <td style="background: #FBBC05;">10</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>a.</td>
                                    <td style="background: #FBBC05;">PEMENUHAN RENSTRA (2%)</td>
                                    <td style="background: #FBBC05;">2</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_a_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_a }}</td>
                                </tr>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($detailPenilaian['A-I-a'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                    $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>b.</td>
                                    <td style="background: #FBBC05;">KUALITAS RENSTRA (5%)</td>
                                    <td style="background: #FBBC05;">5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_b_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_b }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['A-I-b'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>c.</td>
                                    <td style="background: #FBBC05;">IMPLEMENTASI RENSTRA (3%)</td>
                                    <td style="background: #FBBC05;">3</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_c_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_c }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['A-I-c'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <!-- SECTION A_II -->
                                <tr style="font-weight: bold;">
                                    <td>II</td>
                                    <td style="background: #FBBC05;">PERENCANAAN KINERJA TAHUNAN (20%)</td>
                                    <td style="background: #FBBC05;">20</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>a.</td>
                                    <td style="background: #FBBC05;">PEMENUHAN PERENCANAAN KINERJA TAHUNAN (4%)</td>
                                    <td style="background: #FBBC05;">4</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_a_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_a }}</td>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($detailPenilaian['A-II-a'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>b.</td>
                                    <td style="background: #FBBC05;">KUALITAS PERENCANAAN KINERJA TAHUNAN (10%)</td>
                                    <td style="background: #FBBC05;">10</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_b_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_b }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['A-II-b'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>c.</td>
                                    <td style="background: #FBBC05;">IMPLEMENTASI PERENCANAAN KINERJA TAHUNAN (6%)</td>
                                    <td style="background: #FBBC05;">6</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_c_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_A_II_c }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['A-II-c'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                                <!-- END SECTION A_II -->




                                <!-- SECTION B -->
                                <tr style="background: #FBBC05; font-weight: bold; ">
                                    <td colspan="2"><b>B. PENGUKURAN KINERJA (25%)</b></td>
                                    <td>30</td>
                                    <td>{{ $penilaian->nilai_A_persentase }}%</td>
                                    <td>{{ $penilaian->nilai_A }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>I</td>
                                    <td style="background: #FBBC05;">PEMENUHAN PENGUKURAN (5%)</td>
                                    <td style="background: #FBBC05;">5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_B_I_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_B_I }}</td>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($detailPenilaian['B-I'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>II</td>
                                    <td style="background: #FBBC05;">KUALITAS PENGUKURAN (12,5%)</td>
                                    <td style="background: #FBBC05;">12,5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_B_II_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_B_II }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['B-II'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>III.</td>
                                    <td style="background: #FBBC05;">IMPLEMENTASI PENGUKURAN (7,5%)</td>
                                    <td style="background: #FBBC05;">7,5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_B_III_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_B_III }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['B-III'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                                <!-- END SECTION B -->

                                <!-- SECTION C -->
                                <tr style="background: #FBBC05; font-weight: bold; ">
                                    <td colspan="2"><b>C. PELAPORAN KINERJA (15%)</b></td>
                                    <td>30</td>
                                    <td>{{ $penilaian->nilai_C_persentase }}%</td>
                                    <td>{{ $penilaian->nilai_C }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>I</td>
                                    <td style="background: #FBBC05;">PEMENUHAN PELAPORAN (3%)</td>
                                    <td style="background: #FBBC05;">3</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_C_I_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_C_I }}</td>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($detailPenilaian['C-I'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>II</td>
                                    <td style="background: #FBBC05;">PENYAJIAN INFORMASI KINERJA (7,5%)</td>
                                    <td style="background: #FBBC05;">7,5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_C_II_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_C_II }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['C-II'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>III.</td>
                                    <td style="background: #FBBC05;">PEMANFAATAN INFORMASI KINERJA (4,5%)</td>
                                    <td style="background: #FBBC05;">4,5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_C_III_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_C_III }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['C-III'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                                <!-- END SECTION C -->


                                <!-- SECTION C -->
                                <tr style="background: #FBBC05; font-weight: bold; ">
                                    <td colspan="2"><b>D. EVALUASI INTERNAL (10%)</b></td>
                                    <td>30</td>
                                    <td>{{ $penilaian->nilai_D_persentase }}%</td>
                                    <td>{{ $penilaian->nilai_D }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>I</td>
                                    <td style="background: #FBBC05;">PEMENUHAN EVALUASI (2%)</td>
                                    <td style="background: #FBBC05;">3</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_D_I_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_D_I }}</td>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($detailPenilaian['D-I'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>II</td>
                                    <td style="background: #FBBC05;">KUALITAS EVALUASI (5%)</td>
                                    <td style="background: #FBBC05;">5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_D_II_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_D_II }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['D-II'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>III.</td>
                                    <td style="background: #FBBC05;">PEMANFAATAN EVALUASI (3%)</td>
                                    <td style="background: #FBBC05;">3</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_D_III_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_D_III }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['D-III'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                                <!-- END SECTION C -->

                                <!-- SECTION E -->
                                <tr style="background: #FBBC05; font-weight: bold; ">
                                    <td colspan="2"><b>E. PENCAPAIAN SASARAN/KINERJA ORGANISASI (20%)</b></td>
                                    <td>20</td>
                                    <td>{{ $penilaian->nilai_E_persentase }}%</td>
                                    <td>{{ $penilaian->nilai_E }}</td>
                                </tr>
                                <tr style="font-weight: bold;">
                                    <td>I</td>
                                    <td style="background: #FBBC05;">KINERJA YANG DILAPORKAN (OUTPUT) (7,5%)</td>
                                    <td style="background: #FBBC05;">7,5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_E_I_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_E_I }}</td>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($detailPenilaian['E-I'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach

                                <tr style="font-weight: bold;">
                                    <td>II</td>
                                    <td style="background: #FBBC05;">KINERJA YANG DILAPORKAN (OUTCOME) (12,5%)</td>
                                    <td style="background: #FBBC05;">12.5</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_E_II_persentase }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_E_II }}%</td>
                                </tr>
                                @foreach ($detailPenilaian['E-II'] as $nilai)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nilai->kriteria->kriteria }}</td>
                                        <td></td>
                                        <td>{{ $nilai->pilihan }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->catatan }}</td>
                                        <td>{{ $nilai->catatan_evaluator }}</td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                                <!-- END SECTION -->

                                <tr style="font-weight: bold;">
                                    <td style="background: #FBBC05;" colspan="2">HASIL EVALUASI SAKIP (100%)</td>
                                    <td style="background: #FBBC05;">100</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_akhir }}%</td>
                                    <td style="background: #FBBC05;">{{ $penilaian->nilai_akhir }}%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <a href="{{ url('/penilaian') }}" class="btn btn-danger">Kembali</a>
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script src="{{ asset('js/form_penilaian.js') }}"></script>
@endsection