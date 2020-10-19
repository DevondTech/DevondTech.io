$(window).on('load',function(e){
	$('#checkCode').val();
	$('#actionForgotPasswordButton').on('click',function(e){
		let getRandomNumber = function(start, range){
			let getRandom = Math.floor((Math.random() * range) + start);
			while (getRandom > range){
				getRandom = Math.floor((Math.random()*range) + start);
			} 
			return getRandom
		}
		let dataCreate = getRandomNumber(1000,9999);
	    var email = $('#email').val();
	    $('#checkCode').val(dataCreate);
	   	var checkCode = $('#checkCode').val();
	    if(email != ''){
	      	var data = $("#actionForgotPasswordForm").serialize();
	      	/*console.log(data);*/
	      	$.ajax({

		        type : 'POST',
		        url  : '../conn/data2/user_login.php/?forgotPassword',
		        data : data,
		        beforeSend: function()
		        { 
		          $("#error").fadeOut();
		          $("#actionForgotPasswordButton").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
		       	}, 
		        success :  function(response)
		         {      
		            
	                if(response == "foundData"){
	                   window.location.href = '../conn/data2/mail/sendMailForgotPassword/index.php?email='+email+'&&checkCode='+checkCode;
	                }
	                else{
	                    alert('Data Tidak Ditemukan');
	                    $("#actionForgotPasswordButton").html('Send To E-mail');
	            	}       
	          	}
	        });
	      return false;
	    }
	    else{
	    	alert('Silahkan Isi Email Anda');
	    }      
	});
});