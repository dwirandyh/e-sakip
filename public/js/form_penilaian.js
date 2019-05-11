$(document).ready(function () {
    $('[data-toggle="popover"]').popover();

    $('tr select').trigger('change');
});

$("tr select").change(function () {
    var value = $(this).val();
    var id = $(this).data('id').toString();

    var result = 0;
    if (value === 'Y') {
        result = 1.00;
    } else if (value === 'T') {
        result = 0;
    }

    if (id.toString() === '87' || id.toString() === '89') {

        if (value === 'A') {
            result = 3;
        } else if (value === 'B') {
            result = 2;
        } else if (value === 'C') {
            result = 1;
        } else if (value === 'D') {
            result = 0.5;
        } else if (value === 'E') {
            result = 0;
        }
    } else if (id.toString() === '55' || id.toString() === '56' || id.toString() === '59') {
        if (value === 'A') {
            result = 1;
        } else if (value === 'B') {
            result = 0.5;
        } else if (value === 'C') {
            result = 0;
        }
    } else if (id.toString() === '68' || id.toString() === '77' || id.toString() === '84') {
        if (value === 'A') {
            result = 1;
        } else if (value === 'B') {
            result = 0.67;
        } else if (value === 'C') {
            result = 0.33;
        } else if (value === 'D') {
            result = 0;
        }
    } else if (id.toString() === '88') {
        if (value === 'A') {
            result = 1.5;
        } else if (value === 'B') {
            result = 1;
        } else if (value === 'C') {
            result = 0.5;
        } else if (value === 'D') {
            result = 0.25;
        } else if (value === 'E') {
            result = 0;
        }
    } else {
        if (value === 'A') {
            result = 1.00;
        } else if (value === 'B') {
            result = 0.75;
        } else if (value === 'C') {
            result = 0.5;
        } else if (value === 'D') {
            result = 0.25;
        } else if (value === 'E') {
            result = 0;
        }
    }

    if (id.toString() === '90' || id.toString() === '91' || id.toString() === '92') {
        if (id.toString() === '90') {
            result = result * 5;
        } else if (id.toString() === '91') {
            result = result * 2.5;
        } else if (id.toString() === '92') {
            result = result * 5;
        }
    }


    $(this).closest('tr').find("input[type='number']").val(result);

    hitungPersentaseKriteria();

    sumTotal();
});

$(".nilaiE").change(function () {
    $('tr select').trigger('change');
});

function hitungPersentaseKriteria() {
    var arrKriteria = [
        ['A-I-a', 2],
        ['A-I-b', 5],
        ['A-I-c', 3],
        ['A-II-a', 4],
        ['A-II-b', 10],
        ['A-II-c', 6],
        ['B-I', 5],
        ['B-II', 12.5],
        ['B-III', 7.5],
        ['C-I', 3],
        ['C-II', 7.5],
        ['C-III', 4.5],
        ['D-I', 2],
        ['D-II', 5],
        ['D-III', 3],
    ];

    arrKriteria.forEach(function (item, index, arr) {
        var nilaiA = 0;
        $("#table-" + arr[index][0] + " .nilai").each(function () {
            var nilai = $(this).val();
            if (nilai != '' && nilai != undefined) {
                nilaiA += parseFloat(nilai);
            }
        });

        var aParameterCount = $("#table-" + arr[index][0] + " .nilai").length;
        var resultA = (nilaiA / aParameterCount) * 100;
        $("#" + arr[index][0] + "-persentase").html(resultA.toFixed(2) + '%');
        $("#" + arr[index][0] + "-nilai").html(((resultA / 100) * arr[index][1]).toFixed(2));


        var idx = arr[index][0].toString().replace('-', '_').replace('-', '_');
        $("#nilai_" + idx + "_persentase").val(resultA.toFixed(2));
        $("#nilai_" + idx).val(((resultA / 100) * arr[index][1]).toFixed(2));
    });

    var nilaiAIa = parseFloat($("#A-I-a-nilai").html());
    var nilaiAIb = parseFloat($("#A-I-b-nilai").html());
    var nilaiAIc = parseFloat($("#A-I-c-nilai").html());
    var nilaiAI = nilaiAIa + nilaiAIb + nilaiAIc;
    $("#A-I-nilai").html(nilaiAI.toFixed(2));
    $("#A-I-persentase").html((nilaiAI / 10 * 100).toFixed(2));

    $("#nilai_A_I").val(nilaiAI.toFixed(2));
    $("#nilai_A_I_persentase").val((nilaiAI / 10 * 100).toFixed(2));

    var nilaiAIIa = parseFloat($("#A-II-a-nilai").html());
    var nilaiAIIb = parseFloat($("#A-II-b-nilai").html());
    var nilaiAIIc = parseFloat($("#A-II-c-nilai").html());
    var nilaiAII = nilaiAIIa + nilaiAIIb + nilaiAIIc;
    $("#A-II-nilai").html(nilaiAII.toFixed(2));
    $("#A-II-persentase").html((nilaiAII / 20 * 100).toFixed(2));

    $("#nilai_A_II").val(nilaiAI.toFixed(2));
    $("#nilai_A_II_persentase").val((nilaiAI / 10 * 100).toFixed(2));

    var nilaiA = nilaiAI + nilaiAII;
    $("#A-nilai").html(nilaiA.toFixed(2));
    $("#A-persentase").html((nilaiA / 30 * 100).toFixed(2));

    $("#nilai_A").val(nilaiAI.toFixed(2));
    $("#nilai_A_persentase").val((nilaiAI / 10 * 100).toFixed(2));

    var nilaiBI = parseFloat($("#B-I-nilai").html());
    var nilaiBII = parseFloat($("#B-II-nilai").html());
    var nilaiBIII = parseFloat($("#B-III-nilai").html());
    var nilaiB = nilaiBI + nilaiBII + nilaiBIII;
    $("#B-nilai").html(nilaiB.toFixed(2));
    $("#B-persentase").html((nilaiB / 25 * 100).toFixed(2));

    $("#nilai_B").val(nilaiAI.toFixed(2));
    $("#nilai_B_persentase").val((nilaiAI / 10 * 100).toFixed(2));

    var nilaiCI = parseFloat($("#C-I-nilai").html());
    var nilaiCII = parseFloat($("#C-II-nilai").html());
    var nilaiCIII = parseFloat($("#C-III-nilai").html());
    var nilaiC = nilaiCI + nilaiCII + nilaiCIII;
    $("#C-nilai").html(nilaiC.toFixed(2));
    $("#C-persentase").html((nilaiC / 15 * 100).toFixed(2));

    $("#nilai_C").val(nilaiAI.toFixed(2));
    $("#nilai_C_persentase").val((nilaiAI / 10 * 100).toFixed(2));

    var nilaiDI = parseFloat($("#D-I-nilai").html());
    var nilaiDII = parseFloat($("#D-II-nilai").html());
    var nilaiDIII = parseFloat($("#D-III-nilai").html());
    var nilaiD = nilaiDI + nilaiDII + nilaiDIII;
    $("#D-nilai").html(nilaiD.toFixed(2));
    $("#D-persentase").html((nilaiD / 10 * 100).toFixed(2));

    $("#nilai_D").val(nilaiAI.toFixed(2));
    $("#nilai_D_persentase").val((nilaiAI / 10 * 100).toFixed(2));


    var arrKriteria = [
        ['E-I', 7.5],
        ['E-II', 12.5],
    ];

    arrKriteria.forEach(function (item, index, arr) {
        var nilaiA = 0;
        $("#table-" + arr[index][0] + " .nilai").each(function () {
            var nilai = $(this).val();
            if (nilai != '' && nilai != undefined) {
                nilaiA += parseFloat(nilai);
            }
        });

        var resultA = nilaiA;
        $("#" + arr[index][0] + "-nilai").html(resultA.toFixed(2));
        $("#" + arr[index][0] + "-persentase").html((resultA / arr[index][1] * 100).toFixed(2));

        var idx = arr[index][0].toString().replace('-', '_').replace('-', '_');
        $("#nilai_" + idx + "_persentase").val((resultA / arr[index][1] * 100).toFixed(2));
        $("#nilai_" + idx).val(resultA.toFixed(2));
    });

    var nilaiEI = parseFloat($("#E-I-nilai").html());
    var nilaiEII = parseFloat($("#E-II-nilai").html());
    var nilaiE = nilaiEI + nilaiEII;
    $("#E-nilai").html(nilaiE.toFixed(2));
    $("#E-persentase").html((nilaiE / 20 * 100).toFixed(2));
    $("#nilai_E").val(nilaiE.toFixed(2));
    $("#nilai_E_persentase").val((nilaiE / 20 * 100).toFixed(2));
}

function sumTotal() {
    var nilaiA = parseFloat($("#A-nilai").html());
    var nilaiB = parseFloat($("#B-nilai").html());
    var nilaiC = parseFloat($("#C-nilai").html());
    var nilaiD = parseFloat($("#D-nilai").html());
    var nilaiE = parseFloat($("#E-nilai").html());
    var hasil = nilaiA + nilaiB + nilaiC + nilaiD + nilaiE;


    $("#nilai_akhir").val(100);
    $("#total-persentase").html((hasil / 100 * 100).toFixed(2));
    $("#total-nilai").html(hasil.toFixed(2));
}


/// validasi kontrol kerangka
$("tr select").change(function () {
    // A-I-a
    var aIa1 = parseFloat($("input[name='kriteria[1][nilai]']").val());
    var aIa2 = parseFloat($("input[name='kriteria[2][nilai]']").val());
    var aIa3 = parseFloat($("input[name='kriteria[3][nilai]']").val());
    var aIa4 = parseFloat($("input[name='kriteria[4][nilai]']").val());
    var aIa5 = parseFloat($("input[name='kriteria[5][nilai]']").val());
    var aIa6 = parseFloat($("input[name='kriteria[6][nilai]']").val());
    var aIa7 = parseFloat($("input[name='kriteria[7][nilai]']").val());
    var aIa8 = parseFloat($("input[name='kriteria[8][nilai]']").val());
    var aIa9 = parseFloat($("input[name='kriteria[9][nilai]']").val());

    $("#kontrol2").html((aIa2 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');
    $("#kontrol3").html((aIa3 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');
    $("#kontrol4").html((aIa4 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');
    $("#kontrol5").html((aIa5 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');
    $("#kontrol6").html((aIa6 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');
    $("#kontrol7").html((aIa7 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');
    $("#kontrol8").html((aIa8 > aIa1) ? 'SALAH, RPJMD tidak ada' : 'OK');

    var BI1 = $("input[name='kriteria[40][nilai]']").val();
    if (aIa9 > aIa1) {
        $("#kontrol9").html('SALAH, RPJMD tidak ada');
    } else if (aIa9 > BI1) {
        $("#kontrol9").html('SALAH, IKU tidak ada');
    } else {
        $("#kontrol9").html('OK');
    }


    // A-I-b
    var aIa10 = parseFloat($("input[name='kriteria[10][nilai]']").val());
    var aIa11 = parseFloat($("input[name='kriteria[11][nilai]']").val());
    var aIa12 = parseFloat($("input[name='kriteria[12][nilai]']").val());
    var aIa13 = parseFloat($("input[name='kriteria[13][nilai]']").val());
    var aIa14 = parseFloat($("input[name='kriteria[14][nilai]']").val());
    var aIa15 = parseFloat($("input[name='kriteria[15][nilai]']").val());
    var aIa16 = parseFloat($("input[name='kriteria[16][nilai]']").val());
    var aIa17 = parseFloat($("input[name='kriteria[17][nilai]']").val());

    if (aIa10 > aIa1) {
        $("#kontrol10").html('SALAH, RPJMD tidak ada');
    } else if (aIa10 > aIa2) {
        $("#kontrol10").html('SALAH, Tujuan tidak ada');
    } else {
        $("#kontrol10").html('OK');
    }

    if (aIa11 > aIa1) {
        $("#kontrol11").html('SALAH, RPJMD tidak ada');
    } else if (aIa11 > aIa5) {
        $("#kontrol11").html('SALAH, Sasaran tidak ada');
    } else if (aIa11 > aIa10) {
        $("#kontrol11").html('SALAH, Lebih tinggi dari nilai Tujuan');
    } else {
        $("#kontrol11").html('OK');
    }

    if (aIa12 > aIa1) {
        $("#kontrol12").html('SALAH, RPJMD tidak ada');
    } else if (aIa12 > aIa5) {
        $("#kontrol12").html('SALAH, Sasaran tidak ada');
    } else {
        $("#kontrol12").html('OK');
    }

    if (aIa13 > aIa1) {
        $("#kontrol13").html('SALAH, RPJMD tidak ada');
    } else if (aIa13 > aIa5) {
        $("#kontrol13").html('SALAH, Sasaran tidak ada');
    } else if (aIa13 > aIa12) {
        $("#kontrol13").html('Lebih tinggi dari nilai Sasaran');
    } else {
        $("#kontrol13").html('OK');
    }

    if (aIa14 > aIa1) {
        $("#kontrol14").html('SALAH, RPJMD tidak ada');
    } else if (aIa14 > aIa6) {
        $("#kontrol14").html('SALAH, Lebih tinggi dari IK Sasaran');
    } else {
        $("#kontrol14").html('OK');
    }

    if (aIa15 > aIa1) {
        $("#kontrol15").html('SALAH, RPJMD tidak ada');
    } else if (aIa15 > aIa2 && aIa15 > aIa5) {
        $("#kontrol15").html('SALAH, Tujuan/Sasaran tidak ada');
    } else if (aIa15 > aIa3 && aIa15 > aIa6) {
        $("#kontrol15").html('SALAH, IK Tujuan/Sasaran tidak ada');
    } else if (aIa15 > ((aIa13 + aIa14) / 2)) {
        $("#kontrol15").html('SALAH, lebih tinggi dari rata2 nilai indikator');
    } else {
        $("#kontrol15").html('OK');
    }

    var avg = ((aIa10 + aIa11 + aIa12 + aIa13 + aIa14 + aIa15) / 5);
    if (aIa16 > aIa1) {
        $("#kontrol16").html('SALAH, RPJMD tidak ada');
    } else if (aIa16 > avg) {
        $("#kontrol16").html('SALAH, Lebih tinggi dari nilai rata2 kualitas tujuan/sasaran, program, indikator, dan target');
    } else {
        $("#kontrol16").html('OK');
    }

    var avg17 = ((aIa10 + aIa11 + aIa12 + aIa13 + aIa14 + aIa15) / 5);
    if (aIa17 > aIa1) {
        $("#kontrol17").html('SALAH, RPJMD tidak ada');
    } else if (aIa17 > avg17) {
        $("#kontrol17").html('SALAH, Lebih tinggi dari nilai rata2 kualitas tujuan/sasaran, program, indikator, dan target');
    } else {
        $("#kontrol17").html('OK');
    }

    // A-I-c
    var aIa18 = parseFloat($("input[name='kriteria[18][nilai]']").val());
    var aIa19 = parseFloat($("input[name='kriteria[19][nilai]']").val());
    var aIa20 = parseFloat($("input[name='kriteria[20][nilai]']").val());

    var avg18 = ((aIa10 + aIa11 + aIa12 + aIa13 + aIa14 + aIa15 + aIa16 + aIa17) / 7);
    if (aIa18 > aIa1) {
        $("#kontrol18").html('SALAH, RPJMD tidak ada');
    } else if (aIa18 > avg18) {
        $("#kontrol18").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas RPJMD');
    } else {
        $("#kontrol18").html('OK');
    }

    if (aIa19 > aIa1) {
        $("#kontrol19").html('SALAH, RPJMD tidak ada');
    } else if (aIa19 > avg18) {
        $("#kontrol19").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas RPJMD');
    } else {
        $("#kontrol19").html('OK');
    }

    if (aIa20 > aIa1) {
        $("#kontrol20").html('SALAH, RPJMD tidak ada');
    } else if (aIa20 > avg18) {
        $("#kontrol20").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas RPJMD');
    } else {
        $("#kontrol20").html('OK');
    }


    // A-II-a
    var aIIa1 = parseFloat($("input[name='kriteria[21][nilai]']").val());
    var aIIa2 = parseFloat($("input[name='kriteria[22][nilai]']").val());
    var aIIa3 = parseFloat($("input[name='kriteria[23][nilai]']").val());
    var aIIa4 = parseFloat($("input[name='kriteria[24][nilai]']").val());

    $("#kontrol22").html((aIIa2 > aIIa1) ? 'SALAH, Perencanaan kinerja tahunan tidak ada' : 'OK');

    if (aIIa3 > aIIa2) {
        $("#kontrol23").html('SALAH, PK tidak ada');
    } else if (aIIa3 > BI1) {
        $("#kontrol23").html('SALAH,IKU tidak ada');
    } else {
        $("#kontrol23").html('OK');
    }


    $("#kontrol24").html((aIIa4 > aIIa2) ? 'SALAH, PK tidak ada' : 'OK');

    // A-II-b
    var aIIa5 = parseFloat($("input[name='kriteria[25][nilai]']").val());
    var aIIa6 = parseFloat($("input[name='kriteria[26][nilai]']").val());
    var aIIa7 = parseFloat($("input[name='kriteria[27][nilai]']").val());
    var aIIa8 = parseFloat($("input[name='kriteria[28][nilai]']").val());
    var aIIa9 = parseFloat($("input[name='kriteria[29][nilai]']").val());
    var aIIa10 = parseFloat($("input[name='kriteria[30][nilai]']").val());
    var aIIa11 = parseFloat($("input[name='kriteria[31][nilai]']").val());
    var aIIa12 = parseFloat($("input[name='kriteria[32][nilai]']").val());
    var aIIa13 = parseFloat($("input[name='kriteria[33][nilai]']").val());
    var aIIa14 = parseFloat($("input[name='kriteria[34][nilai]']").val());

    $("#kontrol25").html((aIIa5 > aIIa2) ? 'SALAH, PK tidak ada' : 'OK');

    if (aIIa6 > aIIa2) {
        $("#kontrol26").html('SALAH, PK tidak ada');
    } else if (aIIa6 > aIIa5) {
        $("#kontrol26").html('SALAH, Lebih tinggi dari nilai Sasaran');
    } else {
        $("#kontrol26").html('OK');
    }

    if (aIIa7 > aIIa2) {
        $("#kontrol27").html('SALAH, PK tidak ada');
    } else if (aIIa7 > aIIa6) {
        $("#kontrol27").html('SALAH, Lebih tinggi dari IK Sasaran');
    } else {
        $("#kontrol27").html('OK');
    }

    if (aIIa8 > aIIa2) {
        $("#kontrol28").html('SALAH, PK tidak ada');
    } else if (aIIa8 > aIIa6) {
        $("#kontrol28").html('SALAH, Lebih tinggi dari IK Sasaran');
    } else {
        $("#kontrol28").html('OK');
    }

    if (aIIa9 > aIIa2) {
        $("#kontrol29").html('SALAH, PK tidak ada');
    } else if (aIIa9 > aIIa6) {
        $("#kontrol29").html('SALAH, Lebih tinggi dari IK Sasaran');
    } else {
        $("#kontrol29").html('OK');
    }

    avg = (aIIa5 + aIIa6 + aIIa7 + aIIa8 + aIIa9) / 5;
    if (aIIa10 > aIIa2) {
        $("#kontrol30").html('SALAH, PK tidak ada');
    } else if (aIIa10 > avg) {
        $("#kontrol30").html('SALAH, Lebih tinggi dari nilai rata2 kualitas sasaran, kegiatan, indikator, dan target');
    } else {
        $("#kontrol30").html('OK');
    }

    avg = (aIIa5 + aIIa6 + aIIa7 + aIIa8 + aIIa9) / 5;
    if (aIIa11 > aIIa2) {
        $("#kontrol31").html('SALAH, PK tidak ada');
    } else if (aIIa11 > avg) {
        $("#kontrol31").html('SALAH, Lebih tinggi dari nilai rata2 kualitas sasaran, kegiatan, indikator, dan target');
    } else {
        $("#kontrol31").html('OK');
    }

    if (aIIa12 > aIIa2) {
        $("#kontrol32").html('SALAH, PK tidak ada');
    } else {
        $("#kontrol32").html('OK');
    }

    if (aIIa13 > aIIa2) {
        $("#kontrol33").html('SALAH, PK tidak ada');
    } else if (aIIa13 > aIIa12) {
        $("#kontrol33").html('SALAH, Rencana Aksi tidak ada');
    } else {
        $("#kontrol33").html('OK');
    }

    if (aIIa14 > aIIa2) {
        $("#kontrol34").html('SALAH, PK tidak ada');
    } else if (aIIa14 > aIIa12) {
        $("#kontrol34").html('SALAH, Rencana Aksi tidak ada');
    } else {
        $("#kontrol34").html('OK');
    }

    // A-II-c
    var aIIa15 = parseFloat($("input[name='kriteria[35][nilai]']").val());
    var aIIa16 = parseFloat($("input[name='kriteria[36][nilai]']").val());
    var aIIa17 = parseFloat($("input[name='kriteria[37][nilai]']").val());
    var aIIa18 = parseFloat($("input[name='kriteria[38][nilai]']").val());
    var aIIa19 = parseFloat($("input[name='kriteria[39][nilai]']").val());

    avg = (aIIa5 + aIIa6 + aIIa7 + aIIa8 + aIIa9 + aIIa10 + aIIa11 + aIIa12 + aIIa13 + aIIa14) / 10;
    if (aIIa15 > aIIa2) {
        $("#kontrol35").html('SALAH, PK tidak ada');
    } else if (aIIa15 > avg) {
        $("#kontrol35").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas Perencanaan Kinerja Tahunan');
    } else {
        $("#kontrol35").html('OK');
    }

    avg = (aIIa5 + aIIa6 + aIIa7 + aIIa8 + aIIa9 + aIIa10 + aIIa11 + aIIa12 + aIIa13 + aIIa14) / 10;
    if (aIIa16 > aIIa2) {
        $("#kontrol36").html('SALAH, PK tidak ada');
    } else if (aIIa16 > avg) {
        $("#kontrol36").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas Perencanaan Kinerja Tahunan');
    } else {
        $("#kontrol36").html('OK');
    }

    if (aIIa17 > aIIa12) {
        $("#kontrol37").html('SALAH, Rencana Aksi tidak ada');
    } else if (aIIa17 > avg) {
        $("#kontrol37").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas Perencanaan Kinerja Tahunan');
    } else {
        $("#kontrol37").html('OK');
    }

    if (aIIa18 > aIIa12) {
        $("#kontrol38").html('SALAH, Rencana Aksi tidak ada');
    } else if (aIIa18 > avg) {
        $("#kontrol38").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas Perencanaan Kinerja Tahunan');
    } else {
        $("#kontrol38").html('OK');
    }

    if (aIIa19 > aIIa2) {
        $("#kontrol39").html('SALAH, PK tidak ada');
    } else if (aIIa19 > avg) {
        $("#kontrol39").html('SALAH, Lebih tinggi dari nilai rata2 Kualitas Perencanaan Kinerja Tahunan');
    } else {
        $("#kontrol39").html('OK');
    }


    // B-I
    var BI1 = parseFloat($("input[name='kriteria[40][nilai]']").val());
    var BI2 = parseFloat($("input[name='kriteria[41][nilai]']").val());
    var BI3 = parseFloat($("input[name='kriteria[42][nilai]']").val());
    var BI4 = parseFloat($("input[name='kriteria[43][nilai]']").val());

    if (BI3 > BI1) {
        $("#kontrol42").html('SALAH, Lebih tinggi dari nilai ukuran kinerja');
    } else {
        $("#kontrol42").html('OK');
    }
    if (BI4 > BI1) {
        $("#kontrol43").html('SALAH, IKU tidak ada');
    } else {
        $("#kontrol43").html('OK');
    }

    // B-II
    var BII5 = parseFloat($("input[name='kriteria[44][nilai]']").val());
    var BII6 = parseFloat($("input[name='kriteria[45][nilai]']").val());
    var BII7 = parseFloat($("input[name='kriteria[46][nilai]']").val());
    var BII8 = parseFloat($("input[name='kriteria[47][nilai]']").val());
    var BII9 = parseFloat($("input[name='kriteria[48][nilai]']").val());
    var BII10 = parseFloat($("input[name='kriteria[49][nilai]']").val());
    var BII11 = parseFloat($("input[name='kriteria[50][nilai]']").val());
    var BII12 = parseFloat($("input[name='kriteria[51][nilai]']").val());
    var BII13 = parseFloat($("input[name='kriteria[52][nilai]']").val());
    var BII14 = parseFloat($("input[name='kriteria[53][nilai]']").val());

    if (BII5 > BI1) {
        $("#kontrol44").html('SALAH, IKU tidak ada');
    } else {
        $("#kontrol44").html('OK');
    }

    if (BII6 > BI1) {
        $("#kontrol45").html('SALAH, IKU tidak ada');
    } else {
        $("#kontrol45").html('OK');
    }

    if (BII7 > BI1) {
        $("#kontrol46").html('SALAH, Nilai lebih tinggi dari turunan kinerja');
    } else {
        $("#kontrol46").html('OK');
    }

    if (BII8 > BI2) {
        $("#kontrol47").html('SALAH, Nilai lebih tinggi dari turunan kinerja');
    } else {
        $("#kontrol47").html('OK');
    }

    if (BII9 > BI2) {
        $("#kontrol48").html('SALAH, Nilai lebih tinggi dari turunan kinerja');
    } else {
        $("#kontrol48").html('OK');
    }

    avg = (BII5 + BII6 + BII7) / 3;
    if (BII10 > BI1) {
        $("#kontrol48").html('SALAH, Nilai lebih tinggi dari turunan kinerja');
    } else if (BII10 > BI1) {
        $("#kontrol49").html('SALAH, Nilai lebih tinggi dari turunan kinerja');
    } else if (BII10 > avg) {
        $("#kontrol49").html('SALAH, Lebih tinggi dari Kualitas IKU');
    } else {
        $("#kontrol49").html('OK');
    }

    avg = (BII8 + BII9 + BII10) / 3;
    if (BII11 > BI2) {
        $("#kontrol50").html('SALAH, Nilai lebih tinggi dari turunan kinerja');
    } else if (BII11 > avg) {
        $("#kontrol50").html('SSALAH, Lebih tinggi dari rata2 ukuran kinerja');
    } else {
        $("#kontrol50").html('OK');
    }

    if (BII12 > BI1) {
        $("#kontrol51").html('SALAH, Tidak ada pengumpulan data');
    } else {
        $("#kontrol51").html('OK');
    }

    if (BII13 > BI1) {
        $("#kontrol52").html('SALAH, Tidak ada pengumpulan data');
    } else if (BII13 > aIIa13) {
        $("#kontrol52").html('SALAH, Tidak ada rencana aksi');
    } else {
        $("#kontrol52").html('OK');
    }

    if (BII14 > BI1) {
        $("#kontrol53").html('SALAH, Lebih tinggi dari Turunan Kinerja');
    } else {
        $("#kontrol53").html('OK');
    }


    // B-III
    var BIII15 = parseFloat($("input[name='kriteria[54][nilai]']").val());
    var BII116 = parseFloat($("input[name='kriteria[55][nilai]']").val());
    var BII117 = parseFloat($("input[name='kriteria[56][nilai]']").val());
    var BII118 = parseFloat($("input[name='kriteria[57][nilai]']").val());
    var BII119 = parseFloat($("input[name='kriteria[58][nilai]']").val());
    var BII120 = parseFloat($("input[name='kriteria[59][nilai]']").val());

    avg = (BII5 + BII6 + BII7 + BII8 + BII9 + BII10 + BII11 + BII12 + BII13 + BII14) / 10;
    if (BIII15 > BI1) {
        $("#kontrol54").html('SALAH, IKU tidak ada');
    } else if (BIII15 > avg) {
        $("#kontrol54").html("SALAH, Lebih tinggi dari nilai rata2 Kualitas Pengukuran");
    } else {
        $("#kontrol54").html('OK');
    }

    if (BII116 > BI1) {
        $("#kontrol55").html('SALAH, IKU tidak ada');
    } else if (BII116 > avg) {
        $("#kontrol55").html("SALAH, Lebih tinggi dari nilai rata2 Kualitas Pengukuran");
    } else {
        $("#kontrol55").html('OK');
    }

    if (BII117 > BI1) {
        $("#kontrol56").html('SALAH, IKU tidak ada');
    } else if (BII117 > avg) {
        $("#kontrol56").html("SALAH, Lebih tinggi dari nilai rata2 Kualitas Pengukuran");
    } else {
        $("#kontrol56").html('OK');
    }

    if (BII118 > BI1) {
        $("#kontrol57").html('SALAH, IKU tidak ada');
    } else if (BII118 > avg) {
        $("#kontrol57").html("SALAH, Lebih tinggi dari nilai rata2 Kualitas Pengukuran");
    } else {
        $("#kontrol57").html('OK');
    }

    if (BII119 > BI1) {
        $("#kontrol58").html('SALAH, IKU tidak ada');
    } else if (BII119 > avg) {
        $("#kontrol58").html("SALAH, Lebih tinggi dari nilai rata2 Kualitas Pengukuran");
    } else {
        $("#kontrol58").html('OK');
    }

    if (BII120 > BI1) {
        $("#kontrol59").html('SALAH, IKU tidak ada');
    } else if (BII120 > avg) {
        $("#kontrol59").html("SALAH, Lebih tinggi dari nilai rata2 Kualitas Pengukuran");
    } else {
        $("#kontrol59").html('OK');
    }


    // C-I
    var CI1 = parseFloat($("input[name='kriteria[60][nilai]']").val());
    var CI2 = parseFloat($("input[name='kriteria[61][nilai]']").val());
    var CI3 = parseFloat($("input[name='kriteria[62][nilai]']").val());
    var CI4 = parseFloat($("input[name='kriteria[63][nilai]']").val());


    if (CI2 > CI1) {
        $("#kontrol61").html('SALAH, Laporan Kinerja tidak ada');
    } else {
        $("#kontrol61").html('OK');
    }

    if (CI3 > CI1) {
        $("#kontrol62").html('SALAH, Laporan Kinerja tidak ada');
    } else {
        $("#kontrol62").html('OK');
    }

    if (CI4 > CI1) {
        $("#kontrol63").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CI4 > BI1) {
        $("#kontrol63").html('SALAH, IKU tidak ada');
    } else {
        $("#kontrol63").html('OK');
    }

    // C-I
    var CI5 = parseFloat($("input[name='kriteria[64][nilai]']").val());
    var CI6 = parseFloat($("input[name='kriteria[65][nilai]']").val());
    var CI7 = parseFloat($("input[name='kriteria[66][nilai]']").val());
    var CI8 = parseFloat($("input[name='kriteria[67][nilai]']").val());
    var CI9 = parseFloat($("input[name='kriteria[68][nilai]']").val());
    var CI10 = parseFloat($("input[name='kriteria[69][nilai]']").val());
    var CI11 = parseFloat($("input[name='kriteria[70][nilai]']").val());


    if (CI5 > CI1) {
        $("#kontrol64").html('SALAH, Laporan Kinerja tidak ada');
    } else {
        $("#kontrol64").html('OK');
    }

    if (CI6 > CI1) {
        $("#kontrol65").html('SALAH, Laporan Kinerja tidak ada');
    } else {
        $("#kontrol65").html('OK');
    }

    if (CI7 > CI1) {
        $("#kontrol66").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CI7 > aIIa2) {
        $("#kontrol66").html('SALAH, PK tidak ada');
    } else {
        $("#kontrol66").html('OK');
    }

    avg = (CI5 + CI6 + CI7) / 3;
    if (CI8 > CI1) {
        $("#kontrol67").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CI8 > avg) {
        $("#kontrol67").html('SALAH, lebih tinggi dari nilai kualitas informasi outcome');
    } else {
        $("#kontrol67").html('OK');
    }

    if (CI9 > CI1) {
        $("#kontrol68").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CI9 > avg) {
        $("#kontrol68").html('SALAH, lebih tinggi dari nilai kualitas informasi outcome');
    } else {
        $("#kontrol68").html('OK');
    }

    if (CI10 > CI1) {
        $("#kontrol69").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CI10 > avg) {
        $("#kontrol69").html('SALAH, lebih tinggi dari nilai kualitas informasi outcome');
    } else {
        $("#kontrol69").html('OK');
    }

    if (CI11 > CI1) {
        $("#kontrol70").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CI9 > avg) {
        $("#kontrol70").html('SALAH, lebih tinggi dari nilai kualitas informasi outcome');
    } else {
        $("#kontrol70").html('OK');
    }

    // C-III
    var CIII12 = parseFloat($("input[name='kriteria[71][nilai]']").val());
    var CIII13 = parseFloat($("input[name='kriteria[72][nilai]']").val());
    var CIII14 = parseFloat($("input[name='kriteria[73][nilai]']").val());
    var CIII15 = parseFloat($("input[name='kriteria[74][nilai]']").val());

    if (CIII12 > CI2) {
        $("#kontrol71").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CIII12 > CI11) {
        $("#kontrol71").html('SALAH, Lebih tinggi dari nilai keandalan informasi kinerja');
    } else {
        $("#kontrol71").html('OK');
    }

    if (CIII13 > CI2) {
        $("#kontrol72").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CIII13 > CI11) {
        $("#kontrol72").html('SALAH, Lebih tinggi dari nilai keandalan informasi kinerja');
    } else {
        $("#kontrol72").html('OK');
    }

    if (CIII14 > CI2) {
        $("#kontrol73").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CIII14 > CI11) {
        $("#kontrol73").html('SALAH, Lebih tinggi dari nilai keandalan informasi kinerja');
    } else {
        $("#kontrol73").html('OK');
    }

    if (CIII15 > CI2) {
        $("#kontrol74").html('SALAH, Laporan Kinerja tidak ada');
    } else if (CIII15 > CI11) {
        $("#kontrol74").html('SALAH, Lebih tinggi dari nilai keandalan informasi kinerja');
    } else {
        $("#kontrol74").html('OK');
    }


    // D-I
    var DI1 = parseFloat($("input[name='kriteria[75][nilai]']").val());
    var DI2 = parseFloat($("input[name='kriteria[76][nilai]']").val());
    var DI3 = parseFloat($("input[name='kriteria[77][nilai]']").val());
    var DI4 = parseFloat($("input[name='kriteria[78][nilai]']").val());

    if (DI3 > aIIa15) {
        $("#kontrol77").html('SALAH, Rencana Aksi tidak ada');
    } else {
        $("#kontrol77").html('OK');
    }

    avg = (DI1 + DI2 + DI3) / 3;
    if (DI3 > avg) {
        $("#kontrol78").html('SALAH, lebih tinggi dari rata2  evaluas');
    } else {
        $("#kontrol78").html('OK');
    }

    // D-II
    var DII5 = parseFloat($("input[name='kriteria[79][nilai]']").val());
    var DII6 = parseFloat($("input[name='kriteria[80][nilai]']").val());
    var DII7 = parseFloat($("input[name='kriteria[81][nilai]']").val());
    var DII8 = parseFloat($("input[name='kriteria[82][nilai]']").val());
    var DII9 = parseFloat($("input[name='kriteria[83][nilai]']").val());
    var DII10 = parseFloat($("input[name='kriteria[84][nilai]']").val());
    var DII11 = parseFloat($("input[name='kriteria[85][nilai]']").val());
    var DII12 = parseFloat($("input[name='kriteria[86][nilai]']").val());

    if (DII5 > DI2) {
        $("#kontrol79").html('SALAH, Evaluasi program tidak ada');
    } else {
        $("#kontrol79").html('OK');
    }

    if (DII6 > DI2) {
        $("#kontrol80").html('SALAH, Evaluasi program tidak ada');
    } else {
        $("#kontrol80").html('OK');
    }

    if (DII7 > DI2) {
        $("#kontrol81").html('SALAH, Evaluasi program tidak ada');
    } else {
        $("#kontrol81").html('OK');
    }

    if (DII8 > DI3) {
        $("#kontrol82").html('SALAH, pemantauan Rencana Aksi tidak ada');
    } else {
        $("#kontrol82").html('OK');
    }

    if (DII9 > DI3) {
        $("#kontrol83").html('SALAH, pemantauan Rencana Aksi tidak ada');
    } else {
        $("#kontrol83").html('OK');
    }

    if (DII10 > DI3) {
        $("#kontrol84").html('SALAH, pemantauan Rencana Aksi tidak ada');
    } else {
        $("#kontrol84").html('OK');
    }

    avg = (DII5 + DII6 + DII7) / 3;
    if (DII11 > avg){
        $("#kontrol85").html('SALAH, Lebih tinggi dari nilai rata2 kualitas evaluasi program');
    }else{
        $("#kontrol85").html('OK');
    }

    avg = (DII8 + DII9 + DII10) / 3;
    if (DII12 > avg){
        $("#kontrol86").html('SALAH, Lebih tinggi dari nilai rata2 kualitas pemantauan rencana aksi');
    }else{
        $("#kontrol86").html('OK');
    }

});