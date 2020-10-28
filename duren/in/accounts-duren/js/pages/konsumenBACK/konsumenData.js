$(window).on('load',function(e){

	var textData = $('#textData').val();
	if(textData=='home')
	{	
		$.ajax({
	     	type: "GET",
	     	url: "../../../conn/data2/user_data.php/?callUserDatas",
	     	contentType: 'application/json; charset=utf-8',
	        dataType: 'json',
	     	success: function(callUserData) { 

     			var DataUser = jQuery.parseJSON(callUserData);
     			var DataIdUser = DataUser[0].id_user;
     			var DataUserName = DataUser[0].username;
     			var DataNamaLengkap = DataUser[0].nama_lengkap;
     			var DataEmail = DataUser[0].email;
     			var DataFoto = DataUser[0].foto;

	            $('#nama_lengkap_OnLoginPageHome_Small').text(DataNamaLengkap);
	            $('#nama_lengkap_OnLoginPageHome_Large').text(DataNamaLengkap);
	            $('#email_OnLoginPageHome_Small').text(DataEmail);
	            $('#email_OnLoginPageHome_Large').text(DataEmail);
	            var DataFotoNull = '../images/user.png';
	            var DataFotoNull2 = '../images/user2.png';
	            if(DataFoto == '' || DataFoto == null){
	            	$('#foto_OnLoginPageHome_Small').attr('src', DataFotoNull);
	            	$('#foto_OnLoginPageHome_Large').attr('src', DataFotoNull2);
	            	$('#foto_OnLoginPageHome_Large_Down').attr('src', DataFotoNull2);
	            }
	            else{
	            	$('#foto_OnLoginPageHome_Small').attr('src', DataFoto);
	            	$('#foto_OnLoginPageHome_Large').attr('src', DataFoto);	
	            	$('#foto_OnLoginPageHome_Large_Down').attr('src', DataFoto);
	            }
	        }
	    });

		$("#content-profile").load("profile.php");
		$("#account-edit-link").attr("class","menu-waves-block");
		$("#password-link").attr("class","menu-waves-block");
		$("#order-link").attr("class","menu-waves-block");
		$("#notification-link").attr("class","menu-waves-block");
		$("#logout-link").attr("class","menu-waves-block");

		$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
		$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
		$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
		$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
		$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

		$("#account-link").attr("class","active-menu-right");
	}

	if(textData=='cart')
	{	
		$.ajax({
		    type : 'POST',
		    url  : '../../../conn/data2/notification/readNotifCust.php/?updateConfirmationProcess',
		    beforeSend: function()
		    { 
		     
		    }, 
		    success :  function(response)
		    {
		      $('#confirmationProcess').attr('style','display:none;');
		    }    
		});
		$.ajax({
	     	type: "GET",
	     	url: "../../../conn/data2/user_data.php/?callUserDatas",
	     	contentType: 'application/json; charset=utf-8',
	        dataType: 'json',
	     	success: function(callUserData) { 

     			var DataUser = jQuery.parseJSON(callUserData);
     			var DataIdUser = DataUser[0].id_user;
     			var DataUserName = DataUser[0].username;
     			var DataNamaLengkap = DataUser[0].nama_lengkap;
     			var DataEmail = DataUser[0].email;
     			var DataFoto = DataUser[0].foto;

	            $('#nama_lengkap_OnLoginPageHome_Small').text(DataNamaLengkap);
	            $('#nama_lengkap_OnLoginPageHome_Large').text(DataNamaLengkap);
	            $('#email_OnLoginPageHome_Small').text(DataEmail);
	            $('#email_OnLoginPageHome_Large').text(DataEmail);
	            var DataFotoNull = '../images/user.png';
	            var DataFotoNull2 = '../images/user2.png';
	            if(DataFoto == '' || DataFoto == null){
	            	$('#foto_OnLoginPageHome_Small').attr('src', DataFotoNull);
	            	$('#foto_OnLoginPageHome_Large').attr('src', DataFotoNull2);
	            	$('#foto_OnLoginPageHome_Large_Down').attr('src', DataFotoNull2);
	            }
	            else{
	            	$('#foto_OnLoginPageHome_Small').attr('src', DataFoto);
	            	$('#foto_OnLoginPageHome_Large').attr('src', DataFoto);	
	            	$('#foto_OnLoginPageHome_Large_Down').attr('src', DataFoto);
	            }
	        }
	    });

		$("#content-profile").load("cartData.php");
		$("#account-edit-link").attr("class","menu-waves-block");
		$("#account-link").attr("class","menu-waves-block");
		$("#password-link").attr("class","menu-waves-block");
		$("#notification-link").attr("class","menu-waves-block");
		$("#logout-link").attr("class","menu-waves-block");
		$("#order-link").attr("class","menu-waves-block");
		$("#orderAll-link").attr("class","displayLink-block menu-waves-block");
		$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
		$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
		$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

		$("#order-while-link").attr("class","active-menu-right");
	}

	if(textData=='')
	{	
		$.ajax({
	     	type: "GET",
	     	url: "../../../conn/data2/user_data.php/?callUserDatas",
	     	contentType: 'application/json; charset=utf-8',
	        dataType: 'json',
	     	success: function(callUserData) { 

     			var DataUser = jQuery.parseJSON(callUserData);
     			var DataIdUser = DataUser[0].id_user;
     			var DataUserName = DataUser[0].username;
     			var DataNamaLengkap = DataUser[0].nama_lengkap;
     			var DataEmail = DataUser[0].email;
     			var DataFoto = DataUser[0].foto;

	            $('#nama_lengkap_OnLoginPageHome_Small').text(DataNamaLengkap);
	            $('#nama_lengkap_OnLoginPageHome_Large').text(DataNamaLengkap);
	            $('#email_OnLoginPageHome_Small').text(DataEmail);
	            $('#email_OnLoginPageHome_Large').text(DataEmail);
	            var DataFotoNull = '../images/user.png';
	            var DataFotoNull2 = '../images/user2.png';
	            if(DataFoto == '' || DataFoto == null){
	            	$('#foto_OnLoginPageHome_Small').attr('src', DataFotoNull);
	            	$('#foto_OnLoginPageHome_Large').attr('src', DataFotoNull2);
	            	$('#foto_OnLoginPageHome_Large_Down').attr('src', DataFotoNull2);
	            }
	            else{
	            	$('#foto_OnLoginPageHome_Small').attr('src', DataFoto);
	            	$('#foto_OnLoginPageHome_Large').attr('src', DataFoto);	
	            	$('#foto_OnLoginPageHome_Large_Down').attr('src', DataFoto);
	            }
	        }
	    });
		$.ajax({
		    type : 'POST',
		    url  : '../../../conn/data2/notification/readNotifCust.php/?updateConfirmationProcess',
		    beforeSend: function()
		    { }, 
		    success :  function(response)
		    {
		      $('#confirmationProcess').attr('style','display:none;');
		    }    
		});
		$("#content-profile").load("cartData.php");
		$("#account-edit-link").attr("class","menu-waves-block");
		$("#account-link").attr("class","menu-waves-block");
		$("#password-link").attr("class","menu-waves-block");
		$("#notification-link").attr("class","menu-waves-block");
		$("#logout-link").attr("class","menu-waves-block");
		$("#order-link").attr("class","menu-waves-block");
		$("#orderAll-link").attr("class","displayLink-block menu-waves-block");
		$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
		$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
		$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

		$("#orderCart-link").attr("class","displayLink-block active-menu-right");
	}
});

/*$.ajax({
	type: "GET",
	url: "../../../conn/data2/notification/selectNotifAdmin.php/?confirmationPaymentCust",
	contentType: 'application/json; charset=utf-8',
	dataType: 'json',
	success: function(confirmationPaymentCust) { 
		var DataPayment = jQuery.parseJSON(confirmationPaymentCust);
		var confirmationPaymentCust = DataPayment[0].call_data_notifikasi_panyment;
		if(confirmationPaymentCust!=0){
			$('#confirmationPayment').text(confirmationPaymentCust);
			$('#confirmationPayment').attr('style','display:block;');
		}
		else{
			$('#confirmationPayment').text('');
			$('#confirmationPayment').attr('style','display:none;');
		}
	}
});

$.ajax({
	type: "GET",
	url: "../../../conn/data2/notification/selectNotifAdmin.php/?confirmationRequestReturCust",
	contentType: 'application/json; charset=utf-8',
	dataType: 'json',
	success: function(confirmationRequestReturCust) { 
		var DataRetur = jQuery.parseJSON(confirmationRequestReturCust);
		var confirmationRequestReturCust = DataRetur[0].call_data_notifikasi_retur;
		if(confirmationRequestReturCust!=0){
			$('#confirmationRetur').text(confirmationRequestReturCust);
			$('#confirmationRetur').attr('style','display:block;');
		}
		else{
			$('#confirmationRetur').text('');
			$('#confirmationRetur').attr('style','display:none;');
		}
	}
});*/

$.ajax({
	type: "GET",
	url: "../../../conn/data2/notification/selectNotifCust.php/?confirmationRequestReturCust",
	contentType: 'application/json; charset=utf-8',
	dataType: 'json',
	success: function(confirmationRequestReturCust) { 
		var DataRetur = jQuery.parseJSON(confirmationRequestReturCust);
		var confirmationRequestReturCust = DataRetur[0].call_data_notifikasi_retur;
		if(confirmationRequestReturCust!=0){
			$('#confirmationRetur').text(confirmationRequestReturCust);
			$('#confirmationRetur').attr('style','display:block;');
		}
		else{
			$('#confirmationRetur').text('');
			$('#confirmationRetur').attr('style','display:none;');
		}
	}
});

$.ajax({
	type: "GET",
	url: "../../../conn/data2/notification/selectNotifCust.php/?confirmationProcess",
	contentType: 'application/json; charset=utf-8',
	dataType: 'json',
	success: function(confirmationProcess) { 
		var DataShipped = jQuery.parseJSON(confirmationProcess);
		var confirmationProcess = DataShipped[0].call_data_notifikasi_process;
		if(confirmationProcess!=0){
			$('#confirmationProcess').text(confirmationProcess);
			$('#confirmationProcess').attr('style','display:block;');
		}
		else{
			$('#confirmationProcess').text('');
			$('#confirmationProcess').attr('style','display:none;');
		}
	}
});

$('#order-while-link').on('click',function(e){
	$("#content-profile").load("cartData.php");
	$.ajax({
	    type : 'POST',
	    url  : '../../../conn/data2/notification/readNotifCust.php/?updateConfirmationProcess',
	    beforeSend: function()
	    { }, 
	    success :  function(response)
	    {
	      $('#confirmationProcess').attr('style','display:none;');
	    }    
	});
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#order-while-link").attr("class","active-menu-right");
});

$('#history-link').on('click',function(e){
	$("#content-profile").load("cartDataHistoryKonsumen.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#history-link").attr("class","active-menu-right");
});

$('#retur-link').on('click',function(e){
	$("#content-profile").load("cartDataReturKonsumen.php");
	$.ajax({
	    type : 'POST',
	    url  : '../../../conn/data2/notification/readNotifCust.php/?updateConfirmationRetur',
	    beforeSend: function()
	    { 
	     
	    }, 
	    success :  function(response)
	    {
	      $('#confirmationRetur').attr('style','display:none;');
	    }    
	});
	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#retur-link").attr("class","active-menu-right");
});

/*if click button*/

$('#account-edit').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#account-edit-link").attr("class","active-menu-right");
});

/*if click link*/

$('#account-edit-link').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#account-edit-link").attr("class","active-menu-right");
});

/*if click link*/

$('#account-link').on('click',function(e){
	$("#content-profile").load("profile.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#account-link").attr("class","active-menu-right");
});

/*if click link*/

$('#password-link').on('click',function(e){
	$("#content-profile").load("password.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#password-link").attr("class","active-menu-right");
});

/*if click link*/

$('#notification-link').on('click',function(e){
	$("#content-profile").load("notificationData.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-none menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-none menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-none menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-none menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-none menu-waves-block");

	$("#notification-link").attr("class","active-menu-right");
});

/*-----------------------------link order all---------------------*/

/*if click link*/

$('#order-link').on('click',function(e){
	$("#content-profile").load("cartData.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-block menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-block active-menu-right");
});

$('#orderAll-link').on('click',function(e){
	$("#content-profile").load("cartDataAll.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#orderCart-link").attr("class","displayLink-block menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

	$("#orderAll-link").attr("class","displayLink-block active-menu-right");
});

$('#orderCart-link').on('click',function(e){
	$("#content-profile").load("cartData.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-block menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

	$("#orderCart-link").attr("class","displayLink-block active-menu-right");
});

$('#orderProcess-link').on('click',function(e){
	$("#content-profile").load("cartDataProces.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#orderCart-link").attr("class","displayLink-block menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-block menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

	$("#orderProcess-link").attr("class","displayLink-block active-menu-right");
});

$('#orderFinish-link').on('click',function(e){
	$("#content-profile").load("cartDataFinish.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#orderCart-link").attr("class","displayLink-block menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-block menu-waves-block");
	$("#orderCancel-link").attr("class","displayLink-block menu-waves-block");

	$("#orderFinish-link").attr("class","displayLink-block active-menu-right");
});

$('#orderCancel-link').on('click',function(e){
	$("#content-profile").load("cartDataCancel.php");

	$("#order-while-link").attr("class","menu-waves-block");
	$("#history-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#orderCart-link").attr("class","displayLink-block menu-waves-block");
	$("#orderProcess-link").attr("class","displayLink-block menu-waves-block");
	$("#orderFinish-link").attr("class","displayLink-block menu-waves-block");
	$("#orderAll-link").attr("class","displayLink-block menu-waves-block");

	$("#orderCancel-link").attr("class","displayLink-block active-menu-right");	
});
