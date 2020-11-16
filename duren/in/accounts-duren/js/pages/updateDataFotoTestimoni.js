$('#btnUploadFoto').on('click', function(e){
    var foto = $('#foto').val();
    if(foto == ''){
      swal({
        title:"Gagal",
        text: "Silahkan pilih file foto",
        type: "error"
      });
    }  
    else{
        var fd = new FormData();
        var files = $('#foto')[0].files[0];
        fd.append('foto',files);
        $.ajax({
          url  : '../../../conn/data2/testimoni/testimoni.php/?uploadFotoDataTestimoni',
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
              window.location = "../../../in/accounts-duren/open-admin/?textData=c6d9567dfc1a8df8b838c43bb06646d399ca2b99";
            }     
            else if(response == "dataCheck"){
              swal({
                title:"Gagal",
                text: "Gagal Mengupload Foto, Silahkan Pastikan Foto Anda Tipe Foto",
                type: "error"
              }).then(function() {
                window.location = "../../../in/accounts-duren/open-admin/?textData=c6d9567dfc1a8df8b838c43bb06646d399ca2b99";
              });
            }     
            else{
              swal({
                title:"Gagal",
                text: "Gagal Mengupload Foto, Silahkan Pastikan Foto Anda Tipe Foto",
                type: "error"
              }).then(function() {
                window.location = "../../../in/accounts-duren/open-admin/?textData=c6d9567dfc1a8df8b838c43bb06646d399ca2b99";
              });
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
              $("#btnUpdateFoto").html('SIMPAN');
            }          
          } 
        });
      return false;
    }
});