@php
    $valuePilihan = '';
    $valueNilai = '';
    $valueCatatan = '';
    $valueIDDetail = '';
    if (isset($detailPenilaian)){
        foreach ($detailPenilaian as $detail){
            if ($detail->id_kriteria_penilaian == $id){
                $valuePilihan = $detail->pilihan;
                $valueNilai = $detail->nilai;
                $valueCatatan = $detail->catatan;
                $valueIDDetail = $detail->id;
            }
        }
    }
    $arrNilaiAbc = [55, 56, 59];
    $arrNilaiAbcd = [68,77,84];
    $arrNilaiAbcdeInputE = [87, 89];

    if (in_array($id, $arrNilaiAbc)){
        $nilaiUnitKerja = ['A', 'B', 'C'];
    }else if (in_array($id, $arrNilaiAbcd)){
        $nilaiUnitKerja = ['A', 'B', 'C', 'D'];
    }

    $tooltip = (isset($tooltip) ? $tooltip : '');
@endphp
<tr>
    <td>{{ $no }}</td>
    <td>{{ $judul }} <img src="{{ asset('images/info.png') }}" align="right"
                          title="{{ $tooltip }}"
                          style="width:15px;"></td>
    <td>&nbsp;</td>
    <td style="background: #CDFFCC;"><select class="form-control" name="kriteria[{{ (isset($id) ? $id : '') }}][pilihan]" data-id="{{ $id }}">
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
                  name="kriteria[{{ (isset($id) ? $id : '') }}][catatan]">{{ $valueCatatan }}</textarea>
        @if (isset($detailPenilaian) && count($detailPenilaian) > 0)
            <input type="hidden" name="kriteria[{{ (isset($id) ? $id : '') }}][idDetail]" value="{{ $valueIDDetail }}">
        @endif
    </td>
</tr>