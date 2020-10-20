$(window).on('load',function(e){
    $("#content-profile").load("profile.php");

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
            var DataFotoNull = '../images/userProfile.png';
            var DataFotoNull2 = '../images/userProfile2.png';
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

            /*if data-src*/

            /*var DataFotoNull = '../images/user.png';
            var DataFotoNull2 = '../images/user2.png';
            if(DataFoto == '' || DataFoto == null){

            	var imgs = document.getElementsByTagName('img');

				for(var i = 0; i < imgs.length; i++) {
				  	var currentSrc = imgs[i].getAttribute('src');
				  	imgs[i].setAttribute('src',''); // remove old src data 
				  	imgs[i].setAttribute('data-src','currentSrc');
				  	$('#foto_OnLoginPageHome_Small').attr('data-src', DataFotoNull);
	            	$('#foto_OnLoginPageHome_Large').attr('data-src', DataFotoNull2);
	            	$('#foto_OnLoginPageHome_Large_Down').attr('data-src', DataFotoNull2);
	            	
				}
            }
            else{
            	var imgs = document.getElementsByTagName('img');

				for(var i = 0; i < imgs.length; i++) {
				  	var currentSrc = imgs[i].getAttribute('src');
				  	imgs[i].setAttribute('src',''); // remove old src data 
				  	imgs[i].setAttribute('data-src','currentSrc');
	            	$('#foto_OnLoginPageHome_Small').attr('data-src', DataFoto);
	            	$('#foto_OnLoginPageHome_Large').attr('data-src', DataFoto);	
	            	$('#foto_OnLoginPageHome_Large_Down').attr('data-src', DataFoto);
	            }
            } */         
        }
	});
});

//refresh page on browser resize
/*$(window).bind('resize', function(e)
{
  console.log('window resized..');
  this.location.reload(false); 
});*/

$('#finish-link').on('click',function(e){
	$("#content-profile").load("cartDataProcessTransactionFinishAdmin.php");
	
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#finish-link").attr("class","active-menu-right");
});

$('#sales-link').on('click',function(e){
	$("#content-profile").load("historySalesAdmin.php");
	
	$("#finish-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#sales-link").attr("class","active-menu-right");
});

$('#retur-all-link').on('click',function(e){
	$("#content-profile").load("cartDataReturALLAdmin.php");
	
	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#retur-all-link").attr("class","active-menu-right");
});

$('#retur-link').on('click',function(e){
	$("#content-profile").load("cartDataReturAdmin.php");
	
	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#retur-link").attr("class","active-menu-right");
});

$('#ontheway-link').on('click',function(e){
	$("#content-profile").load("cartDataOnTheWayAndFinishShippedAdmin.php");
	
	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#ontheway-link").attr("class","active-menu-right");
});

$('#shipped-link').on('click',function(e){
	$("#content-profile").load("cartDataProcessConfirmationShippedAdmin.php");
	
	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#shipped-link").attr("class","active-menu-right");
});

$('#payment-link').on('click',function(e){
	$("#content-profile").load("cartDataPaymentAdmin.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");

	$("#payment-link").attr("class","active-menu-right");
});

$('#account-edit').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#account-edit-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
});


$('#product-link').on('click',function(e){
	$("#content-profile").load("productData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#product-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
	
});


/*if click link*/

$('#create-user-link').on('click',function(e){
	$("#content-profile").load("createDataUser.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#create-user-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
});


/*if click link*/

$('#account-edit-link').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#account-edit-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
});


/*if click link*/

$('#account-link').on('click',function(e){
	$("#content-profile").load("profile.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#account-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
});


/*if click link*/

$('#password-link').on('click',function(e){
	$("#content-profile").load("password.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#password-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
});


/*if click link*/

$('#notification-link').on('click',function(e){
	$("#content-profile").load("notificationData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#notification-link").attr("class","active-menu-right");
	$("#medsos-link").attr("class","displayLink-none");
	$("#about-link").attr("class","displayLink-none");
});

/*if click link*/

$('#company-profile').on('click',function(e){
	$("#content-profile").load("aboutusData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#about-link").attr("class","displayLink-block active-menu-right");
	$("#medsos-link").attr("class","displayLink-block menu-waves-block");
});

$('#about-link').on('click',function(e){
	$("#content-profile").load("aboutusData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#about-link").attr("class","displayLink-block active-menu-right");
	$("#medsos-link").attr("class","displayLink-block menu-waves-block");
});

$('#medsos-link').on('click',function(e){
	$("#content-profile").load("medsosData.php");

	$("#finish-link").attr("class","menu-waves-block");
	$("#sales-link").attr("class","menu-waves-block");
	$("#retur-all-link").attr("class","menu-waves-block");
	$("#retur-link").attr("class","menu-waves-block");
	$("#ontheway-link").attr("class","menu-waves-block");
	$("#shipped-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#payment-link").attr("class","menu-waves-block");

	$("#medsos-link").attr("class","displayLink-block active-menu-right");
	$("#about-link").attr("class","displayLink-block menu-waves-block");
});



