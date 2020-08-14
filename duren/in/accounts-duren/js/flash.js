$(window).on('load',function(e){
    $("#content-profile").load("profile.php");
  	/*$.get( "../../../conn/data2/user_data.php/?callUserDatas", function( dataUserCallBack ) {
        var dataUserName = dataUserCallBack;
  		console.log( dataUserName ); 
    });*/
});



/*if click button*/

$('#account-edit').on('click',function(e){
	$("#content-profile").load("editData.php");

	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

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

	$("#password-link").attr("class","active-menu-right");
});




/*if click link*/

$('#order-link').on('click',function(e){
	$("#content-profile").load("cartData.php");

	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#notification-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#order-link").attr("class","active-menu-right");
});




/*if click link*/

$('#notification-link').on('click',function(e){
	$("#content-profile").load("notificationData.php");

	$("#account-edit-link").attr("class","menu-waves-block");
	$("#account-link").attr("class","menu-waves-block");
	$("#order-link").attr("class","menu-waves-block");
	$("#password-link").attr("class","menu-waves-block");
	$("#logout-link").attr("class","menu-waves-block");

	$("#notification-link").attr("class","active-menu-right");
});



