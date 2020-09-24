function validateForm1() {
  var a = document.forms["gambar1"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}

function validateForm2() {
  var a = document.forms["gambar2"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}


function validateForm3() {
  var a = document.forms["gambar3"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}

function validateForm4() {
  var a = document.forms["gambar4"]["foto"].value;

  if (a == null || a == "") {
    alert("Silahkan pilih file Gambar Type .PNG .JPG");
    return false;
  }
}


$('#btnuploadGambar3ProdukCANCEL').on('click', function(e){
    var Gambar3Produk = $('#Gambar3Produk').val();
    if(Gambar3Produk == ''){
      alert('Silahkan pilih file Gambar Type .PNG .JPG')
    }  
    else{
     /* var data = $("#updateDataFoto").serialize();*/
        var fd = new FormData();
        var files = $('#Gambar3Produk')[0].files[0];
        fd.append('Gambar3Produk',files);
        
        $.ajax({
          url  : '../../../conn/data2/product/upload_gambar_produk.php/?uploadGambar3Produk',
          type : 'POST',
          data : fd,
          contentType: false,
          processData: false,
          beforeSend: function()
          { 
          $("#error").fadeOut();
          $("#btnuploadGambar3Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
          }, 
          success :  function(response)
          { 
            if(response == "Success"){
              $("#btnuploadGambar3Produk").html('SIMPAN');
               location.reload(); 
              $('#Gambar3Produk').val('');
             
            }     
            else{
              $("#error").fadeIn(1000, function(){   
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                   $("#btnuploadGambar3Produk").html('SIMPAN');
              });
            }          
          } 
        });
      return false;
    }
});
