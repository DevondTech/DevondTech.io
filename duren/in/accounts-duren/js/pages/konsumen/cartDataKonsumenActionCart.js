$(document).ready(function(){
  $.ajax({
    type : 'POST',
    url  : 'conn/data2/cartProcess/cartProcess.php/?autoReviewFromHome',
    success :  function(response){      
    }
  });
});

$('#updateCheckOutByUserButton').on('click', function(e){
  var data = $("#updateCheckOutByUserForm").serialize();
  /*console.log(data);*/
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
        /*alert('Harap Menunggu Sampai Transaksi Anda Selesai');*/     
        swal({
          title: "Selesaikan Pesanan",
          text: "Harap Menunggu Sampai Transaksi Anda Selesai",
          type: "error"
        }).then(function() {
          window.location = "in/accounts-duren/open-konsumen/";
        });
      }
      else{
        /*alert('Pesanan Anda Berhasil, Silahkan Klik OK Untuk Melanjutkan');*/
        swal({
          title: "Berhasil",
          text: "Pesanan Anda Berhasil, Silahkan Klik OK Untuk Melanjutkan",
          type: "success"
        }).then(function() {
          window.location = "in/accounts-duren/open-konsumen/";
        });
      }
    }
  });
});

