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
        $("#checkOutActionButton").html('Check Out');
        alert('Pemesanan Berhasil');
        $("#content-profile").load("cartDataConfirmation.php");
      }
      else if(response == "checkVerificationUser"){
        alert('Silahkan Konfirmasi Email Anda');
        window.location.href = "../../../verifikasiByUser";
      }
      else{
        alert('Pemesanan Gagal, Silahkan Lengkapi Data Anda');
        $("#checkOutActionButton").html('Check Out');
      }
    }    
  });
  return false;

});
