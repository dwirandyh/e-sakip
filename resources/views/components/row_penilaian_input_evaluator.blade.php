@php
    $valuePilihan = '';
    $valueNilai = '';
    $valueCatatan = '';
    $valueIDDetail = '';
    $valueCatatanEvaluator = '';
    if (isset($detailPenilaian)){
        foreach ($detailPenilaian as $detail){
            if ($detail->id_kriteria_penilaian == $id){
                $valuePilihan = $detail->pilihan;
                $valueNilai = $detail->nilai;
                $valueCatatan = $detail->catatan;
                $valueIDDetail = $detail->id;
                $valueCatatanEvaluator = $detail->catatan_evaluator;
            }
        }
    }

     $old = session()->getOldInput();
    if (isset($old['kriteria'][$id]['pilihan'])){
        $valuePilihan = $old['kriteria'][$id]['pilihan'];
    }
    if (isset($old['kriteria'][$id]['nilai'])){
        $valueNilai = $old['kriteria'][$id]['nilai'];
    }
    if (isset($old['kriteria'][$id]['catatan'])){
        $valueCatatan = $old['kriteria'][$id]['catatan'];
    }
    if (isset($old['kriteria'][$id]['catatan_evaluator'])){
        $valueCatatanEvaluator = $old['kriteria'][$id]['catatan_evaluator'];
    }

    $arrNilaiAbc = [55, 56, 59];
    $arrNilaiAbcd = [68,77,84];
    $arrNilaiAbcdeInputE = [87, 89];

    if (in_array($id, $arrNilaiAbc)){
        $nilaiUnitKerja = ['A', 'B', 'C'];
    }else if (in_array($id, $arrNilaiAbcd)){
        $nilaiUnitKerja = ['A', 'B', 'C', 'D'];
    }

    $arrKategoriENilai = [90, 91, 92];

    $tooltip = (isset($tooltip) ? $tooltip : '');
@endphp
<tr>
    <td>{{ $no }}</td>
    <td>{{ $judul }} <img src="{{ asset('images/info.png') }}" align="right"
                          title="{{ $tooltip }}"
                          style="width:15px;"></td>
    <td>&nbsp;</td>
    <td style="background: #CDFFCC;">
        @if (!in_array($id, $arrKategoriENilai))
            <select class="form-control"
                    name="kriteria[{{ (isset($id) ? $id : '') }}][pilihan]"
                    data-id="{{ $id }}">
                @foreach ($nilaiUnitKerja as $row)
                    <option value="{{ $row }}" {{ ($valuePilihan == $row) ? 'selected' : '' }}> {{ $row }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        @if (!in_array($id, $arrKategoriENilai))
            <input type="number" step="any" class="nilai form-control"
                   name="kriteria[{{ (isset($id) ? $id : '') }}][nilai]"
                   value="{{ $valueNilai }}" {{ 'readonly' }}>
        @else
            <input type="number" step="any" class="nilai form-control nilaiE"
                   name="kriteria[{{ (isset($id) ? $id : '') }}][nilai]"
                   value="{{ $valueNilai }}" >
        @endif
    </td>
    <td>
        <label id="kontrol{{ $id }}">
            -
        </label>
    </td>
    <td>
        <textarea class="form-control"
                  name="kriteria[{{ (isset($id) ? $id : '') }}][catatan]" disabled>{{ $valueCatatan }}</textarea>
        @if (isset($detailPenilaian) && count($detailPenilaian) > 0)
            <input type="hidden" name="kriteria[{{ (isset($id) ? $id : '') }}][idDetail]" value="{{ $valueIDDetail }}">
        @endif
    </td>
    <td>
        <textarea class="form-control"
                  name="kriteria[{{ (isset($id) ? $id : '') }}][catatan_evaluator]">{{ $valueCatatanEvaluator }}</textarea>
    </td>
</tr>