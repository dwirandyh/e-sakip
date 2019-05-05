<div class="box-body">
    <h4>I. KINERJA YANG DILAPORKAN (OUTPUT) (7,5%)</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
            <td colspan="2">Unit Kerja/SKPD</td>
            <td width="5%" rowspan="2">Kontrol Kerangka</td>
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
        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 1,
                'id' => 87,
                'judul' => 'Target dapat dicapai',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 2,
                'id' => 88,
                'judul' => 'Capaian kinerja lebih baik dari tahun sebelumnya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
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
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>No</td>
            <td>Sub Komponen</td>
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
        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 4,
                'id' => 90,
                'judul' => 'Target dapat dicapai',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 5,
                'id' => 91,
                'judul' => 'Capaian kinerja lebih baik dari tahun sebelumnya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
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