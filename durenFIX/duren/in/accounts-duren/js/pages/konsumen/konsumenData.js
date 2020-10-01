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

		$("#orderCart-link").attr("class","displayLink-block active-menu-right");
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

/*if click button*/

$('#account-edit').on('click',function(e){
	$("#content-profile").load("editData.php");

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
