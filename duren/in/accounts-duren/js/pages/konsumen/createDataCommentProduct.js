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
          swal({
            title:"Sukses",
            text: "Terimakasih Atas Review Anda",
            type: "success"
          });
          $("#content-profile").load("cartDataAfterReview.php");
        }
        else{
          swal({
            title:"Gagal",
            text: "Gagal Mengirim Review",
            type: "error"
          });
          $("#buttonCommentSave").html('KIRIM');
        }
      }    
    });
    return false;
  }
  else{
    swal({
      title:"Gagal",
      text: "Silahkan Isi Review Anda",
      type: "error"
    });
  }
});