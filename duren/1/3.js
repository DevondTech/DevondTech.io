$(document).ready(function(){
	$.ajax({
     	type: 'POST',
     	url: 'user.php?selectData',
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(selectData) { 
 			var DataUser = jQuery.parseJSON(selectData);
 			console.log(DataUser);
 			var id_user = DataUser[0].id_user; 
 			var nama_lengkap = DataUser[0].nama_lengkap; 
 		}
 	});
});