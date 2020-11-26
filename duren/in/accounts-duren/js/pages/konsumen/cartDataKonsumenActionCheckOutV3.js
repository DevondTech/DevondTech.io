$('#checkOutActionButton').on('click',function(e){
  var alamatInput = $('#alamatInput').val();
  var negaraInput = $('#negaraInput').val();
  var provinsiInput = $('#provinsiInput').val();
  var kabupatenInput = $('#kabupatenInput').val();
  var kecamatanInput = $('#kecamatanInput').val();
  var kelurahanInput = $('#kelurahanInput').val();  
  var kotaInput = $('#kotaInput').val();
  var dataKodePos = $('#dataKodePos').val();
  var ongkir = $('#ongkir').val();
  var id_berat_produk = $('#id_berat_produk').val();
  var total_harga_pemesanan = $('#total_harga_pemesanan').val();
  var totalBayarKeseluruhan = $('#totalBayarKeseluruhan').val();
  var email_send = $('#email_send').val();
  var kode_pemesanan_send = $('#kode_pemesanan_send').val();
  var produk_send = $('#produk_send').val();
  var jumlah_send = $('#jumlah_send_data').val();
  var waktu_pemesanan_send = $('#waktu_pemesanan_send').val();
  var kode_unix = $('#kodeUnik_tampil').val();
  var total_harga_pemesanan2 = $('#total_harga_pemesanan2').val();
  var total_harga_yang_harus_dibayar_send = $('#total_harga_yang_harus_dibayar_send').val();
  var id_produk_send = $('#id_produk_send').val();
  var data = $("#checkOutActionForm").serialize();
  $.ajax({
    type : 'POST',
    url  : '../../../conn/data2/cartProcess/cartProcess.php/?updateCheckOutByUser',
    data : data,
    beforeSend: function()
    { 
      $("#error").fadeOut();
      $("#checkOutActionButton").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
    }, 
    success :  function(response)
    {
      if(response == "updateCheckOutByUserSuccess"){
        swal({
          title:"Pemesanan Sukses",
          text: "Klik ok untuk lanjutkan",
          type: "success"
        }).then(function() {
          window.location = '../../../conn/data2/mail/sendCheckOut/index.php?email_send='+email_send+'&&kode_pemesanan_send='+kode_pemesanan_send+'&&produk_send='+produk_send+'&&jumlah_send='+jumlah_send+'&&waktu_pemesanan_send='+waktu_pemesanan_send+'&&total_harga_yang_harus_dibayar_send='+total_harga_yang_harus_dibayar_send+'&&kode_unix='+kode_unix;
        });
      }
      else if(response == "checkVerificationUser"){
        swal({
          title:"Pemesanan Gagal",
          text: "Silahkan konfirmasi E-mail anda",
          type: "error"
        }).then(function() {
          window.location = "../../../verifikasiByUser";
        });
      }
      else{
        swal({
          title:"Pemesanan Gagal",
          text: "Silahkan lengkapi data anda",
          type: "error"
        });
        $("#checkOutActionButton").html('Check Out');
      }
    }    
  });
  return false;
});

$('#buttonShowVoucher').on('click', function(e){
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/voucher/dataVoucher.php?selectData',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectData) { 
            const DataVoucher = jQuery.parseJSON(selectData);
            var waktu_berlaku = DataVoucher[0].waktu_berlaku; 
            var gambar_voucher = DataVoucher[0].gambar_voucher; 
            var jenis_voucher = DataVoucher[0].jenis_voucher; 
            var status_voucher = DataVoucher[0].status_voucher; 
            var kode_voucher = DataVoucher[0].kode_voucher; 
            var id_voucher = DataVoucher[0].id_voucher; 
            var toDoItems = DataVoucher;
            var id_pemesanan = $('#id_pemesanan').val();
            var parsed = "";
            var nHTML = '';
            toDoItems.forEach(function(item, index, array) {
            nHTML+= '<form id="formData'+item.kode_voucher+'"  class="formDataVoucher" method="POST" action="../../../conn/data2/voucher/updateVoucherID.php?0e2d42465dbfbf7cf71ff0d5b26eb1f8434e0bb1='+item.id_voucher+'&&cd775679d623fc90663c6d7688654d5ea5a7837a='+id_pemesanan+'">'+'<div id="rowdata" class="paddingBottomCardMinTablet col-lg-4 col-md-4 col-sm-4 col-xs-4" id="'+item.kode_voucher+'"  >'+'<div class="leftVoucher">'+'<img  class="imgVoucher" src="'+item.gambar_voucher+'">'+'</div>'+'</div>'+'<div class="paddingBottomCardMinTablet col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height: 160px;">'+'<div class="rightVoucherTitle">'+item.jenis_voucher+'</div>'+'<div class="rightVoucherDetail">'+item.status_voucher+'</div>'+'<div class="rightVoucherDate">'+item.waktu_berlaku+'<input type="hidden" id="dataVoucherID'+item.kode_voucher+'" value="'+item.kode_voucher+'">'+'<div style="margin-top:10px;">'+'<button id="thisID" class="buttonSelectVoucherByCode" type="submit">'+'THIS'+'</button>'+'</div>'+'</div>'+'</div>'+'</form>';
                console.log(item.kode_voucher);
                $('#data').on('click', function(e){
                    var dataVoucherID = $('#dataVoucherID').val();
                    console.log(dataVoucherID);
                });   
            });
            if(DataVoucher!='' || DataVoucher!=null){
                document.getElementById("data").innerHTML =  nHTML;
                var idF = document.getElementById("data").innerHTML =  nHTML;
                var dataVoucherID = $('#dataVoucherID').val();
            }
            else{
                 document.getElementById("data").innerHTML =  'Belum Ada Voucher';
            }
        }
    });
});