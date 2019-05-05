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
@endphp
<tr>
    <td>{{ $no }}</td>
    <td>{{ $judul }}</td>
    <td><select class="form-control" name="kriteria[{{ (isset($id) ? $id : '') }}][pilihan]">
            @foreach ($nilaiUnitKerja as $row)
                <option value="{{ $row }}" {{ ($valuePilihan == $row) ? 'selected' : '' }}> {{ $row }}</option>
            @endforeach
        </select>
    </td>
    <td>
        <input type="number" step="any" class="nilai form-control" name="kriteria[{{ (isset($id) ? $id : '') }}][nilai]"
               value="{{ $valueNilai }}">
    </td>
    <td>
        <label>
            -
        </label>
    </td>
    <td>
        <textarea class="form-control"
                  name="kriteria[{{ (isset($id) ? $id : '') }}][catatan]">{{ $valueCatatan }}</textarea>
        @if (isset($detailPenilaian) && count($detailPenilaian) > 0)
            <input type="hidden" name="kriteria[{{ (isset($id) ? $id : '') }}][idDetail]" value="{{ $valueIDDetail }}">
        @endif
    </td>
    <td>
        <textarea class="form-control"
                  name="kriteria[{{ (isset($id) ? $id : '') }}][catatan_evaluator]">{{ $valueCatatanEvaluator }}</textarea>
        @if (isset($detailPenilaian) && count($detailPenilaian) > 0)
            <input type="hidden" name="kriteria[{{ (isset($id) ? $id : '') }}][idDetail]" value="{{ $valueIDDetail }}">
        @endif
    </td>
</tr>