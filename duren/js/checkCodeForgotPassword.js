$(window).on('load',function(e){
	$('#checkCode').val();
	$('#actionCheckCodeButton').on('click',function(e){
	    var kode = $('#kode').val();
	    var email = $('#email').val();
	    if(kode != ''){
	      	var data = $("#actionCheckCodeForm").serialize();
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
	                	swal({
					        title:"Fatal",
					        text: "Kode Yang Anda Masukkan Salah",
					        type: "error"
					    });
	                    $("#actionCheckCodeButton").html('Send To E-mail');
	            	}       
	          	}
	        });
	      return false;
	    }
	    else{
	    	swal({
		        title:"Lengkapi Data",
		        text: "Silahkan Isi Kode Verifikasi",
		        type: "error"
		    });
	    }      
	});
});