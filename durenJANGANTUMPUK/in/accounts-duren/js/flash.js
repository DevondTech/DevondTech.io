$(window).on('load',function(e){
    $("#content-profile").load("profile.php");
  	$.get( "../../../conn/data2/user_data.php/?callUserDatas", function( dataUserCallBack ) {
        var dataUserName = dataUserCallBack;
  		console.log( dataUserName ); 
    });
});
