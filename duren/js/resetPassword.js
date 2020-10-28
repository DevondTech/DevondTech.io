$(window).on('load',function(e){
	$('#checkCode').val();
	$('#actionSendData').on('click',function(e){
	    var email = $('#email').val();
	    var kode = $('#kode').val();
	    var password = $('#password').val();
	    var resetPassword = $('#resetPassword').val();
	    if(password == resetPassword){
	    	if(kode != ''){
		      	var data = $("#sendDataReset").serialize();
		      	$.ajax({
			        type : 'POST',
			        url  : '../conn/data2/user_login.php/?resetPassword',
			        data : data,
			        beforeSend: function()
			        { 
			          $("#error").fadeOut();
			          $("#actionSendData").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
			       	}, 
			        success :  function(response)
			         {      
		                if(response == "foundData"){
		                   window.location.href = '../login';
		                }
		                else{
		                	swal({
				                title:"Fatal",
				                text: "Silahkan Ulangin Kirim Kode Verifikasi",
				                type: "error"
				            }).then(function() {
				                window.location = "../forgotPassword";
				            });
		            	}       
		          	}
		        });
		      	return false;
		    }

		    else{
		    	swal({
	                title:"Fatal",
	                text: "Silahkan Ulangin Kirim Kode Verifikasi",
	                type: "error"
	            }).then(function() {
	                window.location = "../forgotPassword";
	            });
		    }  
	    }   
	    else{
	    	swal({
		        title:"Cek Password",
		        text: "Password Yang Anda Massukan Tidak Sama",
		        type: "error"
		    });
	    }      
	});
});

