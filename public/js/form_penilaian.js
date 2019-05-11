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

$(".nilaiE").change(function(){
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