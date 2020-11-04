$('#cartDataPaymentDetailAdminButton').on('click',function(e){
  var a = $('#a').val();
  var email_send = $('#email_send').val();
  var kode_pemesanan_send = $('#kode_pemesanan_send').val();
  var waktu_pemesanan_send = $('#waktu_pemesanan_send').val();
  var produk_send = $('#produk_send').val();
  var jumlah_send = $('#jumlah_send').val();
  var total_harga_yang_harus_dibayar_send = $('#total_harga_yang_harus_dibayar_send').val();
  var data = $("#cartDataPaymentDetailAdminForm").serialize();
  $.ajax({

    type : 'POST',
    url  : '../../../conn/data2/cartProcess/cartProcessAdminAction.php/?updateConfirmationPayment',
    data : data,
    beforeSend: function()
    { 
      $("#error").fadeOut();
      $("#cartDataPaymentDetailAdminButton").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
    }, 
    success :  function(response)
    {
      if(response == "updateConfirmationPaymentSuccess"){
        window.location.href = '../../../conn/data2/mail/sendMail/index.php?email_send='+email_send+'&&kode_pemesanan_send='+kode_pemesanan_send+'&&produk_send='+produk_send+'&&jumlah_send='+jumlah_send+'&&waktu_pemesanan_send='+waktu_pemesanan_send+'&&total_harga_yang_harus_dibayar_send='+total_harga_yang_harus_dibayar_send;
       /* $("#cartDataPaymentDetailAdminButton").html('Konfirmasi');
        alert('Konfirmasi Berhasil');
        $("#content-profile").load("cartDataPaymentAdmin.php");
        $("#account-edit-link").attr("class","menu-waves-block");
        $("#password-link").attr("class","menu-waves-block");
        $("#product-link").attr("class","menu-waves-block");
        $("#create-user-link").attr("class","menu-waves-block");
        $("#notification-link").attr("class","menu-waves-block");
        $("#logout-link").attr("class","menu-waves-block");
        $("#account-link").attr("class","menu-waves-block");
        $("#medsos-link").attr("class","displayLink-none");
        $("#about-link").attr("class","displayLink-none");
        $("#payment-link").attr("class","active-menu-right");*/
      }
      else{
        swal({
          title:"System Error",
          text: "Konfirmasi Gagal",
          type: "error"
        });
      }
    }    
  });
  return false;
});