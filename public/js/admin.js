/* Fungsi formatRupiah */
function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}


$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table;

    if ($("#tabledb").length) {
        //datatables
        table = $('#tabledb').DataTable({

            "columns": columns,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "ajax": {
                url: dataUrl,
                type: "post"
            },
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "defaultContent": "-",
                    "targets": "_all"
                }
            ]
        });



        if (canDelete == false){

        }else{
            $("#tabledb_filter").prepend('<div class="btn-group">\n' +
                '                      <a href="' + baseRoute + '" class="btn btn-default" id="btn-all">all (' + dataCount + ')</a>\n' +
                '                      <a href="' + baseRoute + '/trash" class="btn btn-default" id="btn-trash">trash (' + trashCount + ')</a>\n' +
                '                    </div>'+
                '                       <a class="btn btn-primary" style="margin-right: 20px" href="' + baseRoute + '/add"><i class="fa fa-plus-circle"></i> Tambah Data</a>');
        }




        // email brodcast sent data
        $("#tabledb").on("click", "tbody td #send-email", function () {
            var id = $(this).data('id');
            var url = dataUrl.replace('/trash', '') + '/send';
            swal({
                    title: "Kirim sekarang?",
                    text: "Mengirim email ini ke seluruh newsletter anda",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                },
                function () {
                    $.post(url, {id: id}, function (data, status) {
                        if (data.status.code == 200) {
                            swal("Email berhasil dikirim ke " + data.status.count + " newsletter");
                        } else {
                            sweetAlert("Oops...", "Terjadi kesalahan, silahkan coba lagi", "error");
                        }
                    }).fail(function () {
                        sweetAlert("Oops...", "Terjadi kesalahan, silahkan coba lagi", "error");
                    }).error(function () {
                        sweetAlert("Oops...", "Terjadi kesalahan, silahkan coba lagi", "error");
                    });
                });
        });

        $(".tabledb-refresh").click(function () {
            table.ajax.reload();
        });

        $("#tabledb").on('click', 'thead th input', function () {
            var rows = table.rows({'search': 'applied'}).nodes();
            // Check/uncheck checkboxes for all rows in the table
            $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });

        $("#tabledb").on('change', 'tfoot th select', function () {
            optionUrl($(this));
        });

        $("#tabledb").on("click", "tfoot th a", function () {
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin melakukan aksi ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $("#form-option").submit();
                } else {

                }
            });

        });


        $("#form-option").on("submit", function (e) {
            var form = this;

            table.$("input[type='checkbox']").each(function () {
                // If checkbox is checked
                if (this.checked) {
                    // Create a hidden element
                    $(form).append(
                        $('<input>')
                            .attr('type', 'hidden')
                            .attr('name', this.name)
                            .val(this.value)
                    );
                }
            });
        });
    }

    function optionUrl(obj) {
        var url = $(obj).find(':selected').data('url');
        $("#form-option").attr('action', url);
    }


    /**
     if (("#formvalidate").length){
        $("#formvalidate").validationEngine('attach', {
            promptPosition: "bottomLeft",
            prettySelect: true,
            scroll: false
        });
    }*/

    if ($(".select2").length > 0){
        $(".select2").select2();
    }


    $("#gambar").change(function () {
        var val = $(this).val();
        switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
            case 'gif':
            case 'jpg':
            case 'png':

                var fileSize = $(this)[0].files[0].size;
                if (fileSize > 2097152) {
                    $(this).val('');
                    $("#gambar-preview").attr('src', '');
                    sweetAlert("Oops...", "Maximal ukuran file adalah 2 MB!", "error");
                } else {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#gambar-preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
                break;
            default:
                $(this).val('');
                $("#gambar-preview").attr('src', '');
                sweetAlert("Oops...", "File harus berupa gambar!", "error");
                break;
        }
    });

    $(".gambar").change(function () {
        var idPreview = $(this).data('preview');
        var val = $(this).val();
        switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase().toString()) {
            case 'gif':
            case 'jpg':
            case 'png':
                var fileSize = $(this)[0].files[0].size;
                if (fileSize > 2097152) {
                    $(this).val('');
                    $('#' + idPreview).attr('src', '');
                    sweetAlert("Oops...", "Maximal ukuran file adalah 2 MB!", "error");
                } else {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#' + idPreview).attr('src', e.target.result);
                    };
                    reader.readAsDataURL(this.files[0]);
                }
                break;
            case '':
                break;
            default:
                $(this).val('');
                $('#' + idPreview).attr('src', '');
                sweetAlert("Oops...", "File harus berupa gambar!", "error");
                break;
        }
    });


    $("#judul").on("change keyup paste", function () {
        var judul = $("#judul").val();
        var slug = "" + judul.toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-') + ".html";
        $("#judul-seo").val(slug);
    });

    $(".iframe").on("change", function () {
        var previewId = $(this).data('preview');
        var src = $(this).val();
        if (src != '') {
            $('#' + previewId).attr('src', src);
            $('#' + previewId).removeAttr('hidden');
        } else {
            $('#' + previewId).attr('hidden', true);
        }
    });
});