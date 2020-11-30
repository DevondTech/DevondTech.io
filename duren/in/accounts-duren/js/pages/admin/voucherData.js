$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/voucher/voucherAdminCrud.php?checkVoucherKode',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(checkVoucherKode) { 

            var DataVoucher = jQuery.parseJSON(checkVoucherKode);
            var judulVoucherPut = DataVoucher[0].judul_voucher;
            console.log(judulVoucherPut);
            if(judulVoucherPut == ''){
                
                
            }
            else{
                var waktuVoucherPut = DataVoucher[0].waktu_berlaku;
                var totalVoucherPut = DataVoucher[0].total_voucher;
                $('#dataVoucherPage').attr('style','display:none;');
                $("#createVoucher").attr('style', 'display:block;');
                $("#cancelLiCreateVoucher").attr('style', 'display:none;');
                $("#saveLiCreateVoucher").attr('style', 'display:none;');
                $("#btnLiSendKodeToCust").attr('style', 'display:block;margin-top: 20px;');
                $('#waktu_berlaku_sent_show').attr('type','text');
                $('#waktu_berlaku_sent_show').val(waktuVoucherPut);
                $('#waktu_berlaku_sent').val(waktuVoucherPut);
                $('#waktu_berlaku').attr('style','display:none;');
                $('#judul_voucher').val(judulVoucherPut);
                $("#judul_voucher").prop('disabled', true);
                $("#waktu_berlaku").prop('disabled', true);
                $("#jenis_voucher_div").attr('style','display:none;');
                $("#total_voucher_div").attr('style','display:none;');
                $('#btnSendKodeToCust').on('click', function(e){
                    var waktu_berlaku = $('#waktu_berlaku').val();
                    var data = $("#createDataVoucher").serialize();
                      $.ajax({
                         type : 'POST',
                         url  : '../../../conn/data2/voucher/voucherAdminCrud.php/?sendVoucherToCust',
                         data : data,
                          success :  function(data)
                          { 
                            swal({
                                title:"Berhasil",
                                text: "Kirim Voucher Ke Konsumen Berhasil",
                                type: "success"
                            });
                            $("#createVoucher").attr('style', 'display:none;');
                            $("#dataVoucherPage").attr('style', 'display:block;');
                            $("#judul_voucher").val('');
                            $("#waktu_berlaku").val('');
                            $("#total_voucher").val('');  
                            $("#jenis_voucher_div").attr('style','display:block;');
                            $("#total_voucher_div").attr('style','display:block;');
                            $('#waktu_berlaku').attr('style','display:block;');
                            $('#waktu_berlaku_sent_show').attr('type','hidden');
                            $("#judul_voucher").prop('disabled', false);
                            $("#waktu_berlaku").prop('disabled', false);
                            $("#id_jenis_voucher").prop('disabled', false);
                            $("#total_voucher").prop('disabled', false);
                            table.ajax.reload();   
                        } 
                    });
                    return false;
                });
            }
        }

    });
    var table = $('#dataVoucher').DataTable({ 
            "order": [[ 1, "desc" ]],
            "searchable": false,
            "orderable": false,
            "targets": 0,
            "ajax": "../../../conn/data2/voucher/voucherAdminCrud.php?selectDataVoucherToTable",
            "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": -1,
            "data": null,
            "defaultContent": "<center><button class='buttonDetail-Table tblDetail' style='margin-bottom: 10px;' type='submit' >Detail Data</button></center>"
        },
        {
          "targets": 0,
          "className": "text-center",
        },
        {
          "targets": 1,
          "className": "text-center",
        },
        {
          "targets": 2,
          "className": "text-center",
        },
        {
          "targets": 3,
          "className": "text-center",
        },
        ]
    });
    $('#createNewDataVoucher').on('click', function(e){
        e.preventDefault();
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        $('#dataVoucherPage').attr('style','display:none;');
        $('#createVoucher').attr('style','display:block;');
        $.ajax({
          type: "GET",
          url: "../../../conn/data2/voucher/voucherAdminCrud.php/?selectDataJenisVoucher",
          contentType: 'application/json; charset=utf-8',
          dataType: 'json',
          success: function(selectDataJenisVoucher) { 
            var DataVoucher = jQuery.parseJSON(selectDataJenisVoucher);
            var html = '';
              for(var count = 0; count < DataVoucher.length; count++)
              {
                html += '<option value="'+DataVoucher[count].id_jenis_voucher+'">'+DataVoucher[count].jenis_voucher+'</option>';
              }
            $('#id_jenis_voucher').html(html);
          }
        });
    });

    $('#cancelBtnCreateVoucher').on('click', function(e){
        $('#dataVoucherPage').attr('style','display:block;');
        $('#createVoucher').attr('style','display:none;');
        $('#waktu_berlaku').val('');
        $('#total_voucher').val('');
        $('#judul_voucher').val('');
    });




    $('#btnCreatedDataVoucher').on('click',function(e){
        var judul_voucher = $('#judul_voucher').val();
        var waktu_berlaku = $('#waktu_berlaku').val();
        var total_voucher = $('#total_voucher').val();
        var jenis_voucher = $('#jenis_voucher').val();

        if(judul_voucher == ''){
            swal({
                title:"Cek Data",
                text: "Silahkan Isi Judul Voucher",
                type: "error"
            });
        }
        else if(waktu_berlaku == ''){
            swal({
                title:"Cek Data",
                text: "Silahkan Isi Waktu Voucher",
                type: "error"
            });
        }
        else if(total_voucher == ''){
            swal({
                title:"Cek Data",
                text: "Silahkan Isi Total Voucher",
                type: "error"
            });
        }
        else if(judul_voucher != ''){
          var data = $("#createDataVoucher").serialize();
          $.ajax({
             type : 'POST',
             url  : '../../../conn/data2/voucher/voucherAdminCrud.php/?createVoucherNew',
             data : data,
              success :  function(data)
              { 
                $("#cancelLiCreateVoucher").attr('style', 'display:none;');
                $("#saveLiCreateVoucher").attr('style', 'display:none;');
                $("#btnLiSendKodeToCust").attr('style', 'display:block;margin-top: 20px;');
                $('#waktu_berlaku_sent').val(waktu_berlaku);
                $("#judul_voucher").prop('disabled', true);
                $("#waktu_berlaku").prop('disabled', true);
                $("#id_jenis_voucher").prop('disabled', true);
                $("#total_voucher").prop('disabled', true);
                table.ajax.reload();   
                swal({
                    title:"Berhasil",
                    text: "Tambah Data Voucher Berhasil",
                    type: "success"
                });
                
              } 
          });
          return false;
        }  
        else{
            swal({
                title:"Cek Data",
                text: "Silahkan Isi Judul Voucher",
                type: "error"
            });
        }    
    });
    $('#btnSendKodeToCust').on('click', function(e){
        var waktu_berlaku = $('#waktu_berlaku').val();
        var data = $("#createDataVoucher").serialize();
          $.ajax({
             type : 'POST',
             url  : '../../../conn/data2/voucher/voucherAdminCrud.php/?sendVoucherToCust',
             data : data,
              success :  function(data)
              { 
                swal({
                    title:"Berhasil",
                    text: "Kirim Voucher Ke Konsumen Berhasil",
                    type: "success"
                });
                $("#createVoucher").attr('style', 'display:none;');
                $("#dataVoucherPage").attr('style', 'display:block;');
                $("#judul_voucher").val('');
                $("#waktu_berlaku").val('');
                $("#total_voucher").val('');  
                table.ajax.reload();   
            } 
        });
        return false;
    });


    $('#dataVoucher tbody').on( 'click', '.tblDetail', function (e){
        var data = table.row( $(this).parents('tr') ).data();
        e.preventDefault();
        var id = data[4];
        $('#dataVoucherPage').load('voucherDataDetail.php?id='+id);
    });
    
});