<div class="box-body">
    <h4>I. PEMENUHAN PENGUKURAN (5%)</h4>
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
             'nilaiUnitKerja' => $nilaiYT,
             'no' => 1,
             'id' => 40,
             'judul' => 'Telah terdapat indikator kinerja utama (IKU) sebagai ukuran kinerja secara formal',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
         ]
      )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
         [
             'nilaiUnitKerja' => $nilaiAbjad,
             'no' => 2,
             'id' => 41,
             'judul' => 'Telah terdapat ukuran kinerja tingkat eselon III dan IV sebagai turunan kinerja atasannya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
         ]
      )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
         [
             'nilaiUnitKerja' => $nilaiAbjad,
             'no' => 3,
             'id' => 42,
             'judul' => 'Terdapat mekanisme pengumpulan data kinerja',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
         ]
      )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
         [
             'nilaiUnitKerja' => $nilaiYT,
             'no' => 4,
             'id' => 43,
             'judul' => 'Indikator Kinerja Utama telah dipublikasikan',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
         ]
      )
        @endcomponent
        </tbody>
    </table>

    <h4> II. KUALITAS PENGUKURAN (12,5%)</h4>
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
             'no' => 5,
             'id' => 44,
             'judul' => 'IKU telah memenuhi kriteria indikator yang baik',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
         ]
      )
        @endcomponent


        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 6,
                'id' => 45,
                'judul' => 'IKU telah cukup untuk mengukur kinerja',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 7,
                'id' => 46,
                'judul' => 'IKU unit kerja telah selaras dengan IKU IP*',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 9,
                'id' => 47,
                'judul' => 'Ukuran (Indikator) kinerja eselon III dan IV telah memenuhi kriteria indikator kinerja yang baik',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 9,
                'id' => 48,
                'judul' => 'Indikator kinerja eselon III dan IV telah selaras dengan indikator kinerja atasannya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 10,
                'id' => 49,
                'judul' => 'Sudah terdapat ukuran (indikator) kinerja individu yang mengacu pada IKU unit kerja organisasi/atasannya'
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 11,
                'id' => 50,
                'judul' => 'Pengukuran kinerja sudah dilakukan secara berjenjang'
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 12,
                'id' => 51,
                'judul' => 'Pengumpulan data kinerja dapat diandalkan*'
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 13,
                'id' => 52,
                'judul' => 'Pengumpulan data kinerja atas Rencana Aksi dilakukan secara berkala (bulanan/triwulanan/semester)*',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiYT,
                'no' => 14,
                'id' => 53,
                'judul' => 'Pengukuran kinerja sudah dikembangkan menggunakan teknologi informasi*',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4> III. IMPLEMENTASI PENGUKURAN (7,5%)</h4>
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
                'no' => 15,
                'id' => 54,
                'judul' => 'IKU telah dimanfaatkan dalam dokumen-dokumen perencanaan dan penganggaran',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 16,
                'id' => 55,
                'judul' => 'IKU telah dimanfaatkan untuk penilaian kinerja',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 17,
                'id' => 56,
                'judul' => 'Target kinerja eselon III dan IV telah dimonitor pencapaiannya',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 18,
                'id' => 57,
                'judul' => 'Hasil pengukuran (capaian) kinerja mulai dari setingkat eselon IV keatas telah dikaitkan dengan (dimanfaatkan sebagai dasar pemberian) reward & punishment',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 19,
                'id' => 58,
                'judul' => 'IKU telah direviu secara berkala',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent

        @component('components.row_penilaian_input_evaluator',
            [
                'nilaiUnitKerja' => $nilaiAbjad,
                'no' => 20,
                'id' => 59,
                'judul' => 'Pengukuran kinerja atas Rencana Aksi digunakan untuk pengendalian dan pemantauan kinerja secara berkala ',
             'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
            ]
        )
        @endcomponent
        </tbody>
    </table>
</div>