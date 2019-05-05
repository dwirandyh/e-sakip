<div class="box-body">
    <h4>Perencanaan Strategis (10%)</h4>
    <table class="table table-bordered" id="table-A-I-a">
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
            <td>A.</td>
            <td>Perencanaan Strategis (10%)</td>
            <td>30</td>
            <td><span id="A-persentase">0%</span></td>
            <td><span id="A-nilai">0</span></td>
        </tr>
        <tr>
            <td>I.</td>
            <td>Perencanaan Strategis (10%)</td>
            <td>10</td>
            <td><span id="A-I-persentase">0</span></td>
            <td><span id="A-I-nilai">0</span></td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Pemenuhan Renstra (2%)</td>
            <td>2</td>
            <td><span id="A-I-a-persentase">0</span></td>
            <td><span id="A-I-a-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiYT,
               'no' => 1,
               'id' => 1,
               'judul' => 'Renstra telah disusun',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : []),
               'tooltip' => 'Keterangan pengisian nilai:
• nilai A jika seluruh tujuan telah dilengkapi dengan ukuran keberhasilan
• nilai B jika > 90% tujuan telah dilengkapi dengan ukuran keberhasilan
• nilai C jika 75%< tujuan yang telah dilengkapi dengan ukuran keberhasilan < 90%
• nilai D jika 20%< tujuan yang telah dilengkapi dengan ukuran keberhasilan < 75%
• nilai E jika tujuan yang telah dilengkapi dengan ukuran keberhasilan < 20%
ukuran keberhasilan tujuan adalah ukuran atau parameter terukur yang merepresentasikan
tercapai/terwujud atau tidaknya tujuan yang ditetapkan
catatan:
Dalam kondisi tertentu, ukuran keberhasilan tujuan dapat direpresentasikan oleh
indikator sasaran tahun terakhir dari periode Renstra',
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiYT,
               'no' => 2,
               'id' => 2,
               'judul' => 'Renstra telah memuat Tujuan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 3,
               'id' => 3,
               'judul' => 'Tujuan yang ditetapkan telah dilengkapi dengan ukuran keberhasilan (indikator)',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 4,
               'id' => 4,
               'judul' => 'Tujuan telah disertai target keberhasilannya',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 5,
               'id' => 5,
               'judul' => 'Dokumen Renstra telah memuat Sasaran',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 6,
               'id' => 6,
               'judul' => 'Dokumen Renstra telah memuat indikator kinerja Sasaran',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 7,
               'id' => 7,
               'judul' => 'Dokumen Renstra telah memuat target tahunan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 8,
               'id' => 8,
               'judul' => 'Renstra telah menyajikan IKU',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiYT,
               'no' => 9,
               'id' => 9,
               'judul' => 'Renstra telah dipublikasikan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4> b. Kualitas renstra (5%)</h4>
    <table class="table table-bordered" id="table-A-I-b">
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
            <td>b.</td>
            <td>KUALITAS RENSTRA (5%)</td>
            <td>5</td>
            <td><span id="A-I-b-persentase">0</span></td>
            <td><span id="A-I-b-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 10,
               'id' => 10,
               'judul' => 'Tujuan telah berorientasi hasil',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 11,
               'id' => 11,
               'judul' => 'Ukuran keberhasilan (indikator) Tujuan (outcome) telah memenuhi kriteria ukuran keberhasilan yang baik',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 12,
               'id' => 12,
               'judul' => 'Sasaran telah berorientasi hasil',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 13,
               'id' => 13,
               'judul' => 'Indikator kinerja Sasaran (outcome dan output) telah memenuhi kriteria indikator kinerja yang baik',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 14,
               'id' => 14,
               'judul' => 'Target kinerja ditetapkan dengan baik',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 15,
               'id' => 15,
               'judul' => 'Program/kegiatan merupakan cara untuk mencapai Tujuan/Sasaran/hasil program/hasil kegiatan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 16,
               'id' => 16,
               'judul' => 'Dokumen Renstra telah selaras dengan Dokumen Renstra Satker diatasnya',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 17,
               'id' => 17,
               'judul' => 'Dokumen Renstra telah menetapkan hal-hal yang seharusnya ditetapkan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        </tbody>
    </table>

    <h4> c. Implementasi renstra (3%)</h4>
    <table class="table table-bordered" id="table-A-I-c">
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
            <td>c.</td>
            <td>Implementasi renstra (3%)</td>
            <td>3</td>
            <td><span id="A-I-c-persentase">0</span></td>
            <td><span id="A-I-c-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 18,
               'id' => 18,
               'judul' => 'Dokumen Renstra digunakan sebagai acuan penyusunan Dokumen Rencana Kerja dan Anggaran',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 19,
               'id' => 19,
               'judul' => 'Target jangka menengah dalam Renstra telah dimonitor pencapaiannya sampai dengan tahun berjalan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent

        @component('components.row_penilian_input',
           [
               'nilaiUnitKerja' => $nilaiAbjad,
               'no' => 20,
               'id' => 20,
               'judul' => 'Dokumen Renstra telah direviu secara berkala',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
           ]
        )
        @endcomponent
        </tbody>
    </table>

    <hr>

    <h4>II. PERENCANAAN KINERJA TAHUNAN (20%)</h4>
    <h4> a. PEMENUHAN PERENCANAAN KINERJA TAHUNAN (4%)</h4>
    <table class="table table-bordered" id="table-A-II-a">
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
            <td>PERENCANAAN KINERJA TAHUNAN (20%)</td>
            <td>20</td>
            <td><span id="A-II-persentase">0</span></td>
            <td><span id="A-II-nilai">0</span></td>
        </tr>
        <tr>
            <td>a.</td>
            <td>PEMENUHAN PERENCANAAN KINERJA TAHUNAN (4%)</td>
            <td>4</td>
            <td><span id="A-II-a-persentase">0</span></td>
            <td><span id="A-II-a-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 1,
              'id' => 21,
              'judul' => 'Dokumen perencanaan kinerja tahunan telah disusun',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiYT,
              'no' => 2,
              'id' => 22,
              'judul' => 'Perjanjian Kinerja (PK) telah disusun',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 3,
              'id' => 23,
              'judul' => 'PK telah menyajikan IKU',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiYT,
              'no' => 4,
              'id' => 24,
              'judul' => 'PK telah dipublikasikan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent
        </tbody>
    </table>

    <h4> b. KUALITAS PERENCANAAN KINERJA TAHUNAN (10%)</h4>
    <table class="table table-bordered" id="table-A-II-b">
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
            <td>b.</td>
            <td>KUALITAS PERENCANAAN KINERJA TAHUNAN (10%)</td>
            <td>10</td>
            <td><span id="A-II-b-persentase">0</span></td>
            <td><span id="A-II-b-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 5,
              'id' => 25,
              'judul' => 'Sasaran telah berorientasi hasil',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 6,
              'id' => 26,
              'judul' => 'Indikator kinerja Sasaran dan hasil program (outcome) telah memenuhi kriteria indikator kinerja yang
                baik',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 7,
              'id' => 27,
              'judul' => 'Target kinerja ditetapkan dengan baik',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 8,
              'id' => 28,
              'judul' => 'Kegiatan merupakan cara untuk mencapai Sasaran',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 9,
              'id' => 29,
              'judul' => 'Kegiatan dalam rangka mencapai sasaran telah didukung oleh anggaran yang memadai',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 10,
              'id' => 30,
              'judul' => 'Dokumen PK telah selaras dengan Renstra Instansi/RPJMD',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 11,
              'id' => 31,
              'judul' => 'Dokumen PK telah menetapkan hal-hal yang seharusnya ditetapkan (dalam kontrak kinerja/tugas fungsi)',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiYT,
              'no' => 12,
              'id' => 32,
              'judul' => 'Rencana Aksi atas Kinerja sudah ada',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 13,
              'id' => 33,
              'judul' => 'Rencana Aksi atas Kinerja telah mencantumkan target secara periodik atas kinerja',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiYT,
              'no' => 14,
              'id' => 34,
              'judul' => 'Rencana Aksi atas Kinerja telah mencantumkan sub kegiatan/ komponen rinci setiap periode yang akan
                dilakukan dalam rangka mencapai kinerja',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent
        </tbody>
    </table>
    <h4> c. IMPLEMENTASI PERENCANAAN KINERJA TAHUNAN (6%)</h4>
    <table class="table table-bordered" id="table-A-II-c">
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
            <td>c.</td>
            <td>IMPLEMENTASI PERENCANAAN KINERJA TAHUNAN (6%)</td>
            <td>6</td>
            <td><span id="A-II-c-persentase">0</span></td>
            <td><span id="A-II-c-nilai">0</span></td>
        </tr>
        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 15,
              'id' => 35,
              'judul' => 'Rencana kinerja tahunan dimanfaatkan dalam penyusunan anggaran',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 16,
              'id' => 36,
              'judul' => 'Target kinerja yang diperjanjikan telah digunakan untuk mengukur keberhasilan',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 17,
              'id' => 37,
              'judul' => 'Rencana Aksi atas Kinerja telah dimonitor pencapaiannya secara berkala',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 18,
              'id' => 38,
              'judul' => 'Rencana Aksi atas Kinerja telah dimonitor pencapaiannya secara berkala',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent

        @component('components.row_penilian_input',
          [
              'nilaiUnitKerja' => $nilaiAbjad,
              'no' => 19,
              'id' => 39,
              'judul' => 'Perjanjian Kinerja telah dimanfaatkan untuk penyusunan (identifikasi) kinerja sampai kepada tingkat
                eselon III dan IV',
               'detailPenilaian' => (isset($detailPenilaian) ? $detailPenilaian : [])
          ]
       )
        @endcomponent
        </tbody>
    </table>
</div>