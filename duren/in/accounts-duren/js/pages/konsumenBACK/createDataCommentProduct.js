$('#buttonCommentSave').on('click',function(e){

  var DataInputComment = $('#DataInputComment').val();
  if(DataInputComment!=''){
    var data = $("#createDataCommentProductForm").serialize();
    $.ajax({

      type : 'POST',
      url  : '../../../conn/data2/cartProcess/cartProcess.php/?createDataCommentProduct',
      data : data,
      beforeSend: function()
      { 
        $("#error").fadeOut();
        $("#buttonCommentSave").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
      }, 
      success :  function(response)
      {
        if(response == "Success"){
          $("#buttonCommentSave").html('KIRIM');
          alert('Terimakasih Atas Review Anda');
          $("#content-profile").load("cartDataNull.php");
        }
        else{
          alert('Gagal Mengirim Review');
          $("#buttonCommentSave").html('KIRIM');
        }
      }    
    });
    return false;
  }
  else{
    alert('Silahkan Isi Review Anda')
  }
});