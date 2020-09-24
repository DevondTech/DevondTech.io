$(window).on('load',function(e){
    $("#content-profile").load("productData.php");
    $("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	
	$("#notification-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");

	$("#product-link").attr("class","active-menu-right");
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

$('#account-edit').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#account-edit-link").attr("class","active-menu-right");
});


$('#product-link').on('click',function(e){
	$("#content-profile").load("productData.php");

	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	
	$("#notification-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");

	$("#product-link").attr("class","active-menu-right");
	
});


/*if click link*/

$('#create-user-link').on('click',function(e){
	$("#content-profile").load("createDataUser.php");

	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");
	$("#account-edit-link").attr("class","menu-waves-block");

	$("#create-user-link").attr("class","active-menu-right");
});


/*if click link*/

$('#account-edit-link').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#account-edit-link").attr("class","active-menu-right");
});


/*if click link*/

$('#account-link').on('click',function(e){
	$("#content-profile").load("profile.php");

	$("#account-edit-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#account-link").attr("class","active-menu-right");
});


/*if click link*/

$('#password-link').on('click',function(e){
	$("#content-profile").load("password.php");

	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#password-link").attr("class","active-menu-right");
});


/*if click link*/

$('#notification-link').on('click',function(e){
	$("#content-profile").load("notificationData.php");

	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#product-link").attr("class","menu-waves-block");
	$("#create-user-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#notification-link").attr("class","active-menu-right");
});



