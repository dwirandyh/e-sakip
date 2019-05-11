<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-SAKIP | BPK RI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="base-url" content="{{ url('/') }}"/>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>
<h4 class="text-center" style="font-weight: bold;">KERTAS KERJA EVALUASI</h4>
<h4 class="text-center" style="font-weight: bold;">AKUNTABILITAS KINERJA INSTANSI PEMERINTAH</h4>
<h4 class="text-center" style="font-weight: bold;">{{ $satuanKerja }}</h4>
<table class="table table-bordered" id="table-A-I-a">
    <thead>
    <tr>
        <td style="background: #33CBCC; font-weight: bold; text-align: center;">No</td>
        <td style="background: #33CBCC; font-weight: bold; text-align: center;">Sub Komponen</td>
        <td rowspan="2" style="background: #33CBCC; font-weight: bold; text-align: center;">Bobot</td>
        <td colspan="2" style="background: #33CBCC; font-weight: bold; text-align: center;">Unit Kerja/SKPD</td>
        <td rowspan="2" style="background: #33CBCC; font-weight: bold; text-align: center;">Catatan</td>
        <td rowspan="2" style="background: #33CBCC; font-weight: bold; text-align: center;">Catatan Evaluator</td>
    </tr>
    <tr>
        <td style="background: #33CBCC; font-weight: bold; text-align: center;"></td>
        <td style="background: #33CBCC; font-weight: bold; text-align: center;"></td>
        <td width="10%" style="background: #33CBCC; font-weight: bold; text-align: center;">Y/T</td>
        <td width="10%" style="background: #33CBCC; font-weight: bold; text-align: center;">Nilai</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="2" style="background: #FBBC05; font-weight: bold;"><b>A. PERENCANAAN KINERJA (30%)</b></td>
        <td style="background: #FBBC05; font-weight: bold;">30</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_A_persentase }}%</td>
        <td colspan="3" style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_A }}</td>
    </tr>
    <tr style="font-weight: bold;">
        <td>I</td>
        <td style="background: #FBBC05;">PERENCANAAN STRATEGIS (10%)</td>
        <td style="background: #FBBC05;">10</td>
        <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_persentase }}%</td>
        <td style="background: #FBBC05;" colspan="3">{{ $penilaian->nilai_A_I }}</td>
    </tr>
    <tr style="font-weight: bold;">
        <td>a.</td>
        <td style="background: #FBBC05;">PEMENUHAN RENSTRA (2%)</td>
        <td style="background: #FBBC05;">2</td>
        <td style="background: #FBBC05;">{{ $penilaian->nilai_A_I_a_persentase }}%</td>
        <td style="background: #FBBC05;" colspan="3">{{ $penilaian->nilai_A_I_a }}</td>
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
        <td colspan="2" style="background: #FBBC05; font-weight: bold;"><b>B. PENGUKURAN KINERJA (25%)</b></td>
        <td style="background: #FBBC05; font-weight: bold;">30</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_A_persentase }}%</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_A }}</td>
    </tr>
    <tr style="font-weight: bold;">
        <td >I</td>
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
        <td colspan="2" style="background: #FBBC05; font-weight: bold;"><b>C. PELAPORAN KINERJA (15%)</b></td>
        <td style="background: #FBBC05; font-weight: bold;">30</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_C_persentase }}%</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_C }}</td>
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
        <td colspan="2" style="background: #FBBC05; font-weight: bold;"><b>D. EVALUASI INTERNAL (10%)</b></td>
        <td style="background: #FBBC05; font-weight: bold;">30</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_D_persentase }}%</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_D }}</td>
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
        <td colspan="2" style="background: #FBBC05; font-weight: bold;"><b>E. PENCAPAIAN SASARAN/KINERJA ORGANISASI (20%)</b></td>
        <td style="background: #FBBC05; font-weight: bold;">20</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_E_persentase }}%</td>
        <td style="background: #FBBC05; font-weight: bold;">{{ $penilaian->nilai_E }}</td>
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
            <td></td>
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
        <td style="background: #FBBC05;">{{ $penilaian->nilai_akhir }}</td>
    </tr>
    </tbody>
</table>
</body>