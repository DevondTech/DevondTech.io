$(document).ready(function(){
  	$.ajax({
	    type: "GET",
	    url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataForConfirmationFinishShippedCheckPhoto",
	    contentType: 'application/json; charset=utf-8',
	    dataType: 'json',
	    success: function(selectDataForConfirmationFinishShippedCheckPhoto) { 
		    var DataCall = jQuery.parseJSON(selectDataForConfirmationFinishShippedCheckPhoto);
		    var dataGambar = DataCall[0].gambar_barang_retur;
		    var dataKodePemesanan = DataCall[0].id_pemesanan;
		    $('#d').val(dataKodePemesanan);
		    $('#this').val(dataKodePemesanan);
	      	var DataFotoNull = '../images/uploadImage.png';
	        if(dataGambar == 'aHalu'){
	            $('#dataFotoRetur').attr('src', DataFotoNull);
	            $('#foto_check').val('0');
	        }
	        else{
	            $('#dataFotoRetur').attr('src', dataGambar);
	            $('#foto_check').val('1');
	        } 
	    }
    });
});

$('#cancelButtonRetur').on('click', function(){
  	$.ajax({
	    url  : '../../../conn/data2/cartProcess/cartProcess.php/?deleteDataRetur',
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
	        location.reload();
	      }
	      else{
	        alert('Error');
	        $("#buttonRetur").html('Retur Produk');
	      }
	    }    
	});
});

$('#buttonReturSave').on('click', function(){
    var dataPesanRetur = $('#dataPesanRetur').val();
    var check_foto_data = $('#foto_check').val();

    if(check_foto_data == '0' || check_foto_data == ''){
        alert('Lengkapi atau upload foto produk');
    }
    else{
        if(dataPesanRetur == '' ){
            alert('Isi data alasan diretur');
        }
        else{
            
            var data = $("#createDataReturForm").serialize();
            $.ajax({

                type : 'POST',
                url  : '../../../conn/data2/cartProcess/cartProcess.php/?createDataReturProduct',
                data : data,
                beforeSend: function()
                { 
                  $("#error").fadeOut();
                  $("#buttonReturSave").html('<span class="glyphicon glyphicon-transfer"></span>   Process ');
                }, 
                success :  function(response)
                {
                  if(response == "createDataReturProductSuccess"){
                    location.reload();
                  }
                  else{
                    alert('Pemesanan Gagal, Silahkan Lengkapi Data Retur');
                    $("#buttonReturSave").html('KIRIM');
                  }
                }    
            });
        return false;
			
		alert('success');                 
        }
    }  
});