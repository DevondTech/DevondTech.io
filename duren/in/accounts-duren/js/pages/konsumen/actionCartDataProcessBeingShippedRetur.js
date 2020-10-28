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
	        swal({
		        title:"Gagal",
		        text: "Data Error",
		        type: "error"
		    });
	        $("#buttonRetur").html('Retur Produk');
	      }
	    }    
	});
});

$('#buttonReturSave').on('click', function(){
    var dataPesanRetur = $('#dataPesanRetur').val();
    var check_foto_data = $('#foto_check').val();

    if(check_foto_data == '0' || check_foto_data == ''){
    	swal({
	        title:"Gagal Mengirim",
	        text: "Lengkapi atau upload foto produk",
	        type: "error"
	    });
    }
    else{
        if(dataPesanRetur == '' ){
        	swal({
		        title:"Gagal Mengirim",
		        text: "Isi data alasan diretur",
		        type: "error"
		    });
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
					$("#content-profile").load("cartDataAfterRetur.php");
                  }
                  else{
                  	swal({
				        title:"Gagal Mengirim",
				        text: "Isi data alasan diretur",
				        type: "error"
				    });
                    $("#buttonReturSave").html('KIRIM');
                  }
                }    
            });
        return false;
		
			swal({
		        title:"Sukses",
		        text: "Data terkirim",
		        type: "success"
		    });              
        }
    }  
});