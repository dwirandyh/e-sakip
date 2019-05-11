<div class="box-body">
    <h4>I. PEMENUHAN PELAPORAN (3%)</h4>
    <table class="table table-bordered" id="table-C-I">
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
            <td>C.</td>
            <td>PELAPORAN KINERJA (15%)</td>
            <td>15</td>
            <td><span id="C-persentase">0%</span></td>
            <td><span id="C-nilai">0</span></td>
        </tr>
        <tr>
            <td>I.</td>
            <td>PEMENUHAN PELAPORAN (3%)</td>
            <td>3</td>
            <td><span id="C-I-persentase">0</span></td>
            <td><span id="C-I-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 1,
                'id' => 60,
                'judul' => 'Laporan Kinerja telah disusun',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 2,
                'id' => 61,
                'judul' => 'Laporan Kinerja telah disampaikan tepat waktu ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 3,
                'id' => 62,
                'judul' => 'Laporan Kinerja telah di upload kedalam website',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 4,
                'id' => 63,
                'judul' => 'Laporan Kinerja menyajikan informasi mengenai pencapaian IKU',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4>II. PENYAJIAN INFORMASI KINERJA (7,5%)</h4>
    <table class="table table-bordered" id="table-C-II">
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
            <td>PENYAJIAN INFORMASI KINERJA (7,5%)</td>
            <td>7.5</td>
            <td><span id="C-II-persentase">0</span></td>
            <td><span id="C-II-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 5,
                'id' => 64,
                'judul' => 'Laporan Kinerja menyajikan informasi pencapaian Sasaran yang berorientasi outcome',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 6,
                'id' => 65,
                'judul' => 'Laporan Kinerja menyajikan informasi mengenai kinerja yang telah diperjanjikan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 7,
                'id' => 66,
                'judul' => 'Laporan Kinerja menyajikan evaluasi dan analisis mengenai capaian kinerja ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 8,
                'id' => 67,
                'judul' => 'Laporan Kinerja menyajikan pembandingan data kinerja yang memadai antara realisasi tahun ini dengan realisasi tahun sebelumnya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 9,
                'id' => 68,
                'judul' => 'Laporan Kinerja menyajikan informasi tentang analisis efisiensi penggunaan sumber daya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 10,
                'id' => 69,
                'judul' => 'Laporan Kinerja menyajikan informasi keuangan yang terkait dengan pencapaian sasaran kinerja instansi',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 11,
                'id' => 70,
                'judul' => 'Informasi kinerja dalam Laporan Kinerja dapat diandalkan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4>III. PEMANFAATAN INFORMASI KINERJA (4,5%)</h4>
    <table class="table table-bordered" id="table-C-III">
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
            <td>PEMANFAATAN INFORMASI KINERJA (4,5%)</td>
            <td>4.5</td>
            <td><span id="C-III-persentase">0</span></td>
            <td><span id="C-III-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 12,
                'id' => 71,
                'judul' => 'Informasi yang disajikan telah digunakan dalam perbaikan perencanaan ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 13,
                'id' => 72,
                'judul' => 'Informasi yang disajikan telah digunakan untuk menilai dan memperbaiki pelaksanaan program dan kegiatan organisasi',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 14,
                'id' => 73,
                'judul' => 'Informasi yang disajikan telah digunakan untuk peningkatan kinerja ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 15,
                'id' => 74,
                'judul' => 'Informasi yang disajikan telah digunakan untuk penilaian kinerja ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>
</div>