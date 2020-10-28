$('#btnUpdateFoto').on('click', function(e){
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
        /*console.log(fd);*/
        $.ajax({
          url  : '../../../conn/data2/cartProcess/cartProcess.php/?updateDataFotoPayment',
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
              /*$("#btnUpdateFoto").html('SIMPAN');
              $('#uploadModal').modal('hide');*/
              $.ajax({
                type: "GET",
                url: "../../../conn/data2/cartProcess/cartProcess.php/?selectToDataFotoPayment",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(selectToDataFotoPayment) { 
                    var DataPayment = jQuery.parseJSON(selectToDataFotoPayment);
                    var DataFoto = DataPayment[0].gambar_bukti_pembayaran;
                    var DataFotoNull = '../images/uploadImage.png';
                    if(DataFoto == '' || DataFoto == null){
                        $('#dataFotoPayment').attr('src', DataFotoNull);
                        $('#foto_check').val('0');  
                        window.location = "../../../in/accounts-duren/open-konsumen";                      
                    }
                    else{
                        $('#dataFotoPayment').attr('src', DataFoto);
                        $('#foto_check').val('1');
                        window.location = "../../../in/accounts-duren/open-konsumen";  
                    } 
                }
              });
            }     
            else if(response == "dataCheck"){
              swal({
                title:"Gagal",
                text: "Gagal Mengupload Foto, Silahkan Pastikan Foto Anda Tipe Foto",
                type: "error"
              }).then(function() {
                window.location = "../../../in/accounts-duren/open-konsumen";
              });
              $("#content-profile").load("cartData.php");
              $('#confirmationDataCard').attr('style','display:block');
              $('#confirmationDetailPayment').attr('style','display:none');
            }     

            else{
              swal({
                title:"Gagal",
                text: "Gagal Mengupload Foto, Silahkan Pastikan Foto Anda Tipe Foto",
                type: "error"
              }).then(function() {
                window.location = "../../../in/accounts-duren/open-konsumen";
              });
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
              $("#btnUpdateFoto").html('SIMPAN');
            }          
          } 
        });
      return false;
    }
});