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
          text: "Klik Lanjutkan OK",
          type: "success"
        }).then(function() {
          window.location = '../../../conn/data2/mail/sendCheckOut/index.php?email_send='+email_send+'&&kode_pemesanan_send='+kode_pemesanan_send+'&&produk_send='+produk_send+'&&jumlah_send='+jumlah_send+'&&waktu_pemesanan_send='+waktu_pemesanan_send+'&&total_harga_yang_harus_dibayar_send='+total_harga_yang_harus_dibayar_send+'&&kode_unix='+kode_unix;
        });
      }
      else if(response == "checkVerificationUser"){
        swal({
          title:"Pemesanan Gagal",
          text: "Silahkan Konfirmasi Email Anda",
          type: "error"
        }).then(function() {
          window.location = "../../../verifikasiByUser";
        });
      }
      else{
        swal({
          title:"Pemesanan Gagal",
          text: "Silahkan Lengkapi Data Anda",
          type: "error"
        });
        $("#checkOutActionButton").html('Check Out');
      }
    }    
  });
  return false;

});
