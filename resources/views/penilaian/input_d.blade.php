<div class="box-body">
    <h4>I. PEMENUHAN EVALUASI (2%)</h4>
    <table class="table table-bordered" id="table-D-I">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
            <td rowspan="2">Bobot</td>
            <td colspan="2">Unit Kerja/SKPD</td>
            <td width="5%" rowspan="2">Kontrol Kerangka</td>
            <td rowspan="2">Catatan</td>
            {!! $status == 'sementara' ? '<td rowspan="2">Catatan Evaluator</td>
            <td rowspan="2">Catatan Revisi</td>
            <td rowspan="2">File Revisi</td>
            ' : '' !!}
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td width="10%">Y/T</td>
            <td width="10%">Nilai</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>D.</td>
            <td>PELAPORAN KINERJA (15%)</td>
            <td>15</td>
            <td><span id="D-persentase">0%</span></td>
            <td><span id="D-nilai">0</span></td>
        </tr>
        <tr>
            <td>I.</td>
            <td>PEMENUHAN EVALUASI (2%)</td>
            <td>2</td>
            <td><span id="D-I-persentase">0</span></td>
            <td><span id="D-I-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 1,
                'id' => 75,
                'judul' => 'Terdapat pemantauan mengenai kemajuan pencapaian kinerja beserta hambatannya ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 2,
                'id' => 76,
                'judul' => 'Evaluasi program telah dilakukan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 3,
                'id' => 77,
                'judul' => 'Evaluasi atas pelaksanaan Rencana Aksi telah dilakukan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 4,
                'id' => 78,
                'judul' => 'Hasil evaluasi telah disampaikan dan dikomunikasikan kepada pihak-pihak yang berkepentingan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4>II KUALITAS EVALUASI (5%)</h4>
    <table class="table table-bordered" id="table-D-II">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
            <td rowspan="2">Bobot</td>
            <td colspan="2">Unit Kerja/SKPD</td>
            <td width="5%" rowspan="2">Kontrol Kerangka</td>
            <td rowspan="2">Catatan</td>
            {!! $status == 'sementara' ? '<td rowspan="2">Catatan Evaluator</td>
            <td rowspan="2">Catatan Revisi</td>
            <td rowspan="2">File Revisi</td>
            ' : '' !!}
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td width="10%">Y/T</td>
            <td width="10%">Nilai</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>II.</td>
            <td>KUALITAS EVALUASI (5%)</td>
            <td>5</td>
            <td><span id="D-II-persentase">0</span></td>
            <td><span id="D-II-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 5,
                'id' => 79,
                'judul' => 'Evaluasi program/kegiatan dilaksanakan dalam rangka menilai keberhasilan program/kegiatan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 6,
                'id' => 80,
                'judul' => 'Evaluasi program/kegiatan telah memberikan rekomendasi-rekomendasi perbaikan perencanaan kinerja yang dapat dilaksanakan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 7,
                'id' => 81,
                'judul' => 'Evaluasi program/kegiatan telah memberikan rekomendasi-rekomendasi peningkatan kinerja yang dapat dilaksanakan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 8,
                'id' => 82,
                'judul' => 'Pemantauan Rencana Aksi dilaksanakan dalam rangka mengendalikan kinerja',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 9,
                'id' => 83,
                'judul' => 'Pemantauan Rencana Aksi telah memberikan alternatif perbaikan yang dapat dilaksanakan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 10,
                'id' => 84,
                'judul' => 'Hasil evaluasi Rencana Aksi telah menunjukkan perbaikan setiap periode',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4>III. PEMANFAATAN EVALUASI (3%)</h4>
    <table class="table table-bordered" id="table-D-III">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
            <td rowspan="2">Bobot</td>
            <td colspan="2">Unit Kerja/SKPD</td>
            <td width="5%" rowspan="2">Kontrol Kerangka</td>
            <td rowspan="2">Catatan</td>
            {!! $status == 'sementara' ? '<td rowspan="2">Catatan Evaluator</td>
            <td rowspan="2">Catatan Revisi</td>
            <td rowspan="2">File Revisi</td>
            ' : '' !!}
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td width="10%">Y/T</td>
            <td width="10%">Nilai</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>III.</td>
            <td>PEMANFAATAN EVALUASI (3%)</td>
            <td>3</td>
            <td><span id="D-III-persentase">0</span></td>
            <td><span id="D-III-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 11,
                'id' => 85,
                'judul' => 'Hasil evaluasi program/kegiatan telah ditindaklanjuti untuk perbaikan pelaksanaan program di masa yang akan datang',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 12,
                'id' => 86,
                'judul' => 'Hasil evaluasi Rencana Aksi telah ditindaklanjuti dalam bentuk langkah-langkah nyata',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>
</div>