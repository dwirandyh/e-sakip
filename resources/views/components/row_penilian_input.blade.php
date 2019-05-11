@php
    $valuePilihan = '';
    $valueNilai = '';
    $valueCatatan = '';
    $valueIDDetail = '';

    $status = '';
    if (isset($detailPenilaian)){
        foreach ($detailPenilaian as $detail){
            if ($detail->id_kriteria_penilaian == $id){
                $valuePilihan = $detail->pilihan;
                $valueNilai = $detail->nilai;
                $valueCatatan = $detail->catatan;
                $valueCatatanEvaluator = $detail->catatan_evaluator;
                $valueCatatanRevisi = $detail->catatan_revisi;
                $valueIDDetail = $detail->id;
                $status = $detail->penilaian->status;
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
    if (isset($old['kriteria'][$id]['catatan_revisi'])){
        $valueCatatan = $old['kriteria'][$id]['catatan_revisi'];
    }



    $arrNilaiAbc = [55, 56, 59];
    $arrNilaiAbcd = [68,77,84];
    $arrNilaiAbcdeInputE = [87, 89];

    if (in_array($id, $arrNilaiAbc)){
        $nilaiUnitKerja = ['A', 'B', 'C'];
    }else if (in_array($id, $arrNilaiAbcd)){
        $nilaiUnitKerja = ['A', 'B', 'C', 'D'];
    }


    $arrKategoriESelect = [87, 88, 89];
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
            @if (!in_array($id, $arrKategoriESelect))
                <select class="form-control"
                        {{ ($status == 'sementara' ? 'disabled' : '') }} name="kriteria[{{ (isset($id) ? $id : '') }}][pilihan]"
                        data-id="{{ $id }}" {{ (!empty($catatanEvaluator)) ? 'disabled' : '' }}>
                    @foreach ($nilaiUnitKerja as $row)
                        <option value="{{ $row }}" {{ ($valuePilihan == $row) ? 'selected' : '' }}>{{ $row }}</option>
                    @endforeach
                </select>
            @else
                <select class="form-control" readonly
                        {{ ($status == 'sementara' ? 'disabled' : '') }} name="kriteria[{{ (isset($id) ? $id : '') }}][pilihan]"
                        data-id="{{ $id }}" {{ (!empty($catatanEvaluator)) ? 'disabled' : '' }}>
                    <option value="A">A</option>
                </select>
            @endif
        @endif
    </td>
    <td>
        @if (!in_array($id, $arrKategoriENilai))
            <input type="number" step="any" class="nilai form-control"
                   name="kriteria[{{ (isset($id) ? $id : '') }}][nilai]"
                   value="{{ $valueNilai }}" {{ ($status == 'sementara' ? 'disabled' : 'readonly') }}>
        @else
            <input type="number" step="any" class="nilai form-control nilaiE"
                   name="kriteria[{{ (isset($id) ? $id : '') }}][nilai]"
                   value="{{ $valueNilai }}" {{ ($status == 'sementara' ? 'disabled' : 'readonly') }}>
        @endif
    </td>
    <td>
        <label id="kontrol{{ $id }}">
            -
        </label>
    </td>
    <td>
        <textarea class="form-control"
                  name="kriteria[{{ (isset($id) ? $id : '') }}][catatan]" {{ ($status == 'sementara' ? 'disabled' : '') }}>{{ old('kriteria.' . $id . '.catatan', $valueCatatan) }}</textarea>
        @if (isset($detailPenilaian) && count($detailPenilaian) > 0)
            <input type="hidden" name="kriteria[{{ (isset($id) ? $id : '') }}][idDetail]" value="{{ $valueIDDetail }}">
        @endif
    </td>
    @if ($status == 'sementara')
        <td>
            <textarea class="form-control"
                      name="kriteria[{{ (isset($id) ? $id : '') }}][catatan_evaluator]" {{ ($status == 'sementara' ? 'disabled' : '') }}>{{ old('kriteria.' . $id . '.catatan', $valueCatatanEvaluator) }}</textarea>
        </td>
        <td>
            <textarea class="form-control"
                      name="kriteria[{{ (isset($id) ? $id : '') }}][catatan_revisi]">{{ old('kriteria.' . $id . '.catatan_revisi', $valueCatatanRevisi) }}</textarea>
        </td>
        <td>
            <input type="file" name="kriteria[{{ (isset($id) ? $id : '') }}][file_revisi]">
        </td>
    @endif
</tr>