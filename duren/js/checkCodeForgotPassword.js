$(window).on('load',function(e){
	$('#checkCode').val();
	$('#actionCheckCodeButton').on('click',function(e){
	    var kode = $('#kode').val();
	    var email = $('#email').val();
	    if(kode != ''){
	      	var data = $("#actionCheckCodeForm").serialize();
	      	/*console.log(data);*/
	      	$.ajax({

		        type : 'POST',
		        url  : '../conn/data2/user_login.php/?checkCode',
		        data : data,
		        beforeSend: function()
		        { 
		          $("#error").fadeOut();
		          $("#actionCheckCodeButton").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
		       	}, 
		        success :  function(response)
		         {      
		            
	                if(response == "foundData"){
	                   window.location.href = '../resetPassword/?email='+email+'&&kode='+kode;
	                }
	                else{
	                    alert('Kode Yag Anda Masukkan Salah');
	                    $("#actionCheckCodeButton").html('Send To E-mail');
	            	}       
	          	}
	        });
	      return false;
	    }
	    else{
	    	alert('Silahkan Isi Kode Verifikasi');
	    }      
	});
});