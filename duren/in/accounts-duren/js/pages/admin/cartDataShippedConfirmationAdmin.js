$('#cartDataPaymentDetailAdminButton').on('click',function(e){
  var a = $('#a').val();
  var Data0bdc9d2d256b3ee9daae347be6f4dc835a467ffe = $('#0bdc9d2d256b3ee9daae347be6f4dc835a467ffe').val();
  var nama_lengkap_send = $('#nama_lengkap_send').val(); 
  var nama_produk_send = $('#nama_produk_send').val(); 
  var jumlah_pemesanan_send = $('#jumlah_pemesanan_send').val(); 
  var teks_berat_produk_send = $('#teks_berat_produk_send').val(); 
  var email_send = $('#email_send').val(); 
  var data = $("#cartDataPaymentDetailAdminForm").serialize();
  $.ajax({

    type : 'POST',
    url  : '../../../conn/data2/cartProcess/cartProcessAdminAction.php/?updateConfirmationShipped',
    data : data,
    beforeSend: function()
    { 
      $("#error").fadeOut();
      $("#cartDataPaymentDetailAdminButton").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
    }, 
    success :  function(response)
    {
      if(response == "updateConfirmationPaymentSuccess"){
        $("#cartDataPaymentDetailAdminButton").html('Kirim Barang');
        swal({
          title:"Sukses",
          text: "Konfirmasi Pengiriman Berhasil",
          type: "success"
        }).then(function() {
          window.location.href = '../../../conn/data2/mail/sendOnTheWay/index.php?a275eeab9229cc9132954f131049342ca43ba161='+Data0bdc9d2d256b3ee9daae347be6f4dc835a467ffe+'&&nama_lengkap_send='+nama_lengkap_send+'&&nama_produk_send='+nama_produk_send+'&&teks_berat_produk_send='+teks_berat_produk_send+'&&email_send='+email_send+'&&jumlah_pemesanan_send='+jumlah_pemesanan_send;
          /*$("#content-profile").load("cartDataProcessConfirmationShippedAdmin.php");
          $("#account-edit-link").attr("class","menu-waves-block");
          $("#password-link").attr("class","menu-waves-block");
          $("#product-link").attr("class","menu-waves-block");
          $("#create-user-link").attr("class","menu-waves-block");
          $("#notification-link").attr("class","menu-waves-block");
          $("#logout-link").attr("class","menu-waves-block");
          $("#account-link").attr("class","menu-waves-block");
          $("#medsos-link").attr("class","displayLink-none");
          $("#about-link").attr("class","displayLink-none");

          $("#shipped-link").attr("class","active-menu-right");*/
        });        
      }
      else{
        swal({
          title:"Error",
          text: "Data Error",
          type: "error"
        });
        $("#cartDataPaymentDetailAdminButton").html('Kirim Barang');
      }
    }    
  });
  return false;
});