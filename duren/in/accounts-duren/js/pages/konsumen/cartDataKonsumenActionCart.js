$('#updateCheckOutByUserButton').on('click', function(e){
  var data = $("#updateCheckOutByUserForm").serialize();
  console.log(data);
  $.ajax({

   type : 'POST',
   url  : 'conn/data2/cartProcess/cartProcess.php/?cartActionByUser',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#updateCheckOutByUserButton").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
   }, 
    success :  function(response)
    {      
      if(response == "dataFound"){
        alert('Harap Menunggu Sampai Transaksi Pesanan Anda Selesai');
        window.location.href = "in/accounts-duren/open-konsumen/";
      }
      else{
        alert('Pemesanan Anda Berhasil, Silahkan Klik Untuk Lanjutkan');
        window.location.href = "in/accounts-duren/open-konsumen/";
      }
    }
  });
});

