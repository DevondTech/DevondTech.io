$('#btnUpdateFoto').on('click', function(e){
    var foto = $('#foto').val();
    if(foto == ''){
      alert('Silahkan pilih file foto')
    }  
    else{
        var fd = new FormData();
        var files = $('#foto')[0].files[0];
        fd.append('foto',files);
       /* console.log(fd);*/
        $.ajax({
          url  : '../../../conn/data2/cartProcess/cartProcess.php/?updateDataFotoRetur',
          type : 'POST',
          data : fd,
          contentType: false,
          processData: false,
          beforeSend: function()
          { 
          $("#error").fadeOut();
          $("#btnUpdateFoto").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
          }, 
          success :  function(response)
          { 
            if(response == "Success"){
              location.reload();
            }     
            else if(response == "dataCheck"){
              alert('Gagal Mengupload Foto, Silahkan Pastikan Foto Anda Tipe Foto');
              $("#content-profile").load("cartData.php");
              $('#confirmationDataCard').attr('style','display:block');
              $('#confirmationDetailPayment').attr('style','display:none');
              window.location = "../../../in/accounts-duren/open-konsumen";  
            }     

            else{
                $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                $("#btnUpdateFoto").html('SIMPAN');
                window.location = "../../../in/accounts-duren/open-konsumen";  
            }          
          } 
        });
      return false;
    }
});