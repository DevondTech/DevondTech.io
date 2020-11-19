
$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataForConfirmationFinishShipped",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectDataForConfirmationFinishShipped) { 
      var DataCall = jQuery.parseJSON(selectDataForConfirmationFinishShipped);
      var dataKodePemesanan = DataCall[0].id_pemesanan;
      var waktu_batas_retur = DataCall[0].waktu_batas_retur;
      var waktu_batas_review = DataCall[0].waktu_batas_review;
      var waktu_penerimaan = DataCall[0].waktu_penerimaan;
      $('#b').val(dataKodePemesanan);
      $('#d').val(dataKodePemesanan);
      $('#e').val(dataKodePemesanan);
      $('#f').val(dataKodePemesanan);
      $('#waktu_batas_retur').val(waktu_batas_retur);
      $('#waktu_penerimaan').val(waktu_penerimaan);
      $('#waktu_batas_review').val(waktu_batas_review);
      var waktu_batas_retur = $('#waktu_batas_retur').val();
      var waktu_penerimaan = $('#waktu_penerimaan').val();
      var waktu_batas_review = $('#waktu_batas_review').val();
      console.log(waktu_batas_retur+' '+waktu_penerimaan+' '+waktu_batas_review)
      var nowDateTime = $('#nowDate').val();
      console.log(waktu_penerimaan);
      if(nowDateTime > waktu_batas_retur && nowDateTime >= waktu_penerimaan){
          /*alert('oke retur lost');*/
          $('#cardReturAction').attr('style','display:none;');
          $('#textOr').attr('style','display:none;');
          $('#cardSendReviewAction').attr('class','mTop60px card-buttonSelectPic');
      }
      if(nowDateTime > waktu_batas_review && nowDateTime >= waktu_penerimaan){
        /*alert('oke review & retur lost');*/
        var data = $("#createConfirFinishDataForm").serialize();
        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/cartProcess/cartProcess.php/?autoReviewFromCart',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                location.reload();
              }
              else{
                alert('Error');
                /*$("#buttonRetur").html('Retur Produk');*/
              }
            }    
        });
        return false;
         location.reload();
      }
      if(nowDateTime < waktu_batas_retur && nowDateTime > waktu_penerimaan){
        /*alert('review & retur >> action');*/
      }
    }
  }); 
});

$('#buttonComment').on('click', function(){
  var data = $("#createConfirFinishDataForm").serialize();
  $.ajax({
      type : 'POST',
      url  : '../../../conn/data2/cartProcess/cartProcess.php/?createConfirReviewCustData',
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