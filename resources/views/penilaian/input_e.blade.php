<div class="box-body">
    <h4>I. KINERJA YANG DILAPORKAN (OUTPUT) (7,5%)</h4>
    <table class="table table-bordered" id="table-E-I">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
            <td rowspan="2">Bobot</td>
            <td colspan="2">Unit Kerja/SKPD</td>
            <td width="5%" rowspan="2">Kontrol Kerangka</td>
            <td rowspan="2">Catatan</td>
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
            <td>E.</td>
            <td>PENCAPAIAN SASARAN/KINERJA ORGANISASI (20%)</td>
            <td>20</td>
            <td><span id="E-persentase">0%</span></td>
            <td><span id="E-nilai">0</span></td>
        </tr>
        <tr>
            <td>I.</td>
            <td>KINERJA YANG DILAPORKAN (OUTPUT) (7,5%)</td>
            <td>7.5</td>
            <td><span id="E-I-persentase">0</span></td>
            <td><span id="E-I-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 1,
                'id' => 87,
                'judul' => 'Target dapat dicapai',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 2,
                'id' => 88,
                'judul' => 'Capaian kinerja lebih baik dari tahun sebelumnya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 3,
                'id' => 89,
                'judul' => 'Informasi mengenai kinerja dapat diandalkan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4>II KINERJA YANG DILAPORKAN (OUTCOME) (12,5%)</h4>
    <table class="table table-bordered" id="table-E-II">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
            <td rowspan="2">Bobot</td>
            <td colspan="2">Unit Kerja/SKPD</td>
            <td width="5%" rowspan="2">Kontrol Kerangka</td>
            <td rowspan="2">Catatan</td>
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
            <td>KINERJA YANG DILAPORKAN (OUTCOME) (12,5%)</td>
            <td>12.5</td>
            <td><span id="E-II-persentase">0</span></td>
            <td><span id="E-II-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 4,
                'id' => 90,
                'judul' => 'Target dapat dicapai',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 5,
                'id' => 91,
                'judul' => 'Capaian kinerja lebih baik dari tahun sebelumnya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilian_input',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 6,
                'id' => 92,
                'judul' => 'Informasi mengenai kinerja dapat diandalkan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>
</div>