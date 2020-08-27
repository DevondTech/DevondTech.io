$('#btnuploadGambar1Produk').on('click', function(e){
    var Gambar1Produk = $('#Gambar1Produk').val();
    if(Gambar1Produk == ''){
      alert('Silahkan pilih file Gambar Type .PNG .JPG')
    }  
    else{
     /* var data = $("#updateDataFoto").serialize();*/
        var fd = new FormData();
        var files = $('#Gambar1Produk')[0].files[0];
        fd.append('Gambar1Produk',files);
        $.ajax({
          url  : '../../../conn/data2/product/upload_gambar_produk.php/?uploadGambar1Produk',
          type : 'POST',
          data : fd,
          contentType: false,
          processData: false,
          beforeSend: function()
          { 
          $("#error").fadeOut();
          $("#btnuploadGambar1Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
          }, 
          success :  function(response)
          { 
            if(response == "Success"){
              $("#btnuploadGambar1Produk").html('SIMPAN');
               location.reload(); 
              $('#Gambar1Produk').val('');
            }     
            else{
              $("#error").fadeIn(1000, function(){   
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                   $("#btnuploadGambar1Produk").html('SIMPAN');
              });
            }          
          } 
        });
      return false;
    }
});

$('#btnuploadGambar2Produk').on('click', function(e){
    var Gambar2Produk = $('#Gambar2Produk').val();
    if(Gambar2Produk == ''){
      alert('Silahkan pilih file Gambar Type .PNG .JPG')
    }  
    else{
     /* var data = $("#updateDataFoto").serialize();*/
        var fd = new FormData();
        var files = $('#Gambar2Produk')[0].files[0];
        fd.append('Gambar2Produk',files);
        $.ajax({
          url  : '../../../conn/data2/product/upload_gambar_produk.php/?uploadGambar2Produk',
          type : 'POST',
          data : fd,
          contentType: false,
          processData: false,
          beforeSend: function()
          { 
          $("#error").fadeOut();
          $("#btnuploadGambar2Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
          }, 
          success :  function(response)
          { 
            if(response == "Success"){
              $("#btnuploadGambar2Produk").html('SIMPAN');
               location.reload(); 
              $('#Gambar2Produk').val('');
             
            }     
            else{
              $("#error").fadeIn(1000, function(){   
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                   $("#btnuploadGambar2Produk").html('SIMPAN');
              });
            }          
          } 
        });
      return false;
    }
});

$('#btnuploadGambar3Produk').on('click', function(e){
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

$('#btnuploadGambar4Produk').on('click', function(e){
    var Gambar4Produk = $('#Gambar4Produk').val();
    
    if(Gambar4Produk == ''){
      alert('Silahkan pilih file Gambar Type .PNG .JPG')
    }  
    else{
     /* var data = $("#updateDataFoto").serialize();*/
        var fd = new FormData();
        var files = $('#Gambar4Produk')[0].files[0];
        fd.append('Gambar4Produk',files);
        $.ajax({
          url  : '../../../conn/data2/product/upload_gambar_produk.php/?uploadGambar4Produk',
          type : 'POST',
          data : fd,
          contentType: false,
          processData: false,
          beforeSend: function()
          { 
          $("#error").fadeOut();
          $("#btnuploadGambar4Produk").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
          }, 
          success :  function(response)
          { 
            if(response == "Success"){
              $("#btnuploadGambar4Produk").html('SIMPAN');
               location.reload(); 
              $('#Gambar4Produk').val('');
             
            }     
            else{
              $("#error").fadeIn(1000, function(){   
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                   $("#btnuploadGambar4Produk").html('SIMPAN');
              });
            }          
          } 
        });
      return false;
    }
});