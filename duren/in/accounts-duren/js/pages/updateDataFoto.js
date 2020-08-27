$('#btnUpdateFoto').on('click', function(e){
    var foto = $('#foto').val();
    
    if(foto == ''){
      alert('Silahkan pilih file foto')
    }  
    else{
     /* var data = $("#updateDataFoto").serialize();*/
      
        var fd = new FormData();
        var files = $('#foto')[0].files[0];
        fd.append('foto',files);
        console.log(fd);
        $.ajax({
          url  : '../../../conn/data2/user_data.php/?updateDataFoto',
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
              $("#btnUpdateFoto").html('SIMPAN');
               location.reload(); 
              $('#foto').val('');
             
            }     
            else{
              $("#error").fadeIn(1000, function(){   
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>  Error Upload Data.</div>');
                   $("#btnUpdateFoto").html('SIMPAN');
              });
            }          
          } 
        });
      return false;
    }
});