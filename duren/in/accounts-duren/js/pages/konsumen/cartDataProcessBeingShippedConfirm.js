/**/

$('#buttonConfirm').on('click', function(){
  var data = $("#createConfirFinishDataForm").serialize();
  $.ajax({
      type : 'POST',
      url  : '../../../conn/data2/cartProcess/cartProcess.php/?createConfirFinishData',
      /*data : data,*/
      beforeSend: function()
      { 
        $("#error").fadeOut();
        $("#buttonConfirm").html('<span class="glyphicon glyphicon-transfer"></span>  Process ...');
      }, 
      success :  function(response)
      {
        if(response == "createConfirFinishDataSuccess"){
          window.location = '../open-konsumen/?textData=cart'
          /*$('#FinishingProcess').load('cartDataProcessFinishConfirmationComment.php');*/
        }
        else{
          swal({
              title:"Error",
              text: "Error",
              type: "error"
          });
          $("#buttonConfirm").html('Konfirmasi Barang Diterima');
        }
      }    
  });
  return false;
  	$('#FinishingProcess').load('cartDataProcessFinishConfirmationComment.php');
});

