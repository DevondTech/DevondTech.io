
$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataForConfirmationFinishShipped",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectDataForConfirmationFinishShipped) { 
      var DataCall = jQuery.parseJSON(selectDataForConfirmationFinishShipped);
      var dataKodePemesanan = DataCall[0].id_pemesanan;
      $('#b').val(dataKodePemesanan);
      $('#d').val(dataKodePemesanan);
      $('#e').val(dataKodePemesanan);
      $('#f').val(dataKodePemesanan);
    }
  }); 
});


$('#buttonComment').on('click', function(){
  var data = $("#createConfirFinishDataForm").serialize();
  $.ajax({
      type : 'POST',
      url  : '../../../conn/data2/cartProcess/cartProcess.php/?createConfirFinishData',
      data : data,
      beforeSend: function()
      { 
        $("#error").fadeOut();
        $("#buttonRetur").html('<span class="glyphicon glyphicon-transfer"></span>  Process ...');
      }, 
      success :  function(response)
      {
        if(response == "createConfirFinishDataSuccess"){
          $('#FinishingProcess').load('cartDataProcessFinishConfirmationComment.php');
        }
        else{
          alert('Error');
          $("#buttonRetur").html('Retur Produk');
        }
      }    
  });
  return false;
  	$('#FinishingProcess').load('cartDataProcessFinishConfirmationComment.php');
});


$('#buttonRetur').on('click', function(){
	var data = $("#createReturDataForm").serialize();
	$.ajax({
	    type : 'POST',
	    url  : '../../../conn/data2/cartProcess/cartProcess.php/?createDataRetur',
	    data : data,
	    beforeSend: function()
	    { 
	      $("#error").fadeOut();
	      $("#buttonRetur").html('<span class="glyphicon glyphicon-transfer"></span>  Process ...');
	    }, 
	    success :  function(response)
	    {
	      if(response == "Success"){
	        $("#buttonRetur").html('Retur Produk');
	        $('#FinishingProcess').load('cartDataProcessFinishConfirmationRetur.php');
	      }
	      else{
	        alert('Error');
	        $("#buttonRetur").html('Retur Produk');
	      }
	    }    
	});
	return false;
});