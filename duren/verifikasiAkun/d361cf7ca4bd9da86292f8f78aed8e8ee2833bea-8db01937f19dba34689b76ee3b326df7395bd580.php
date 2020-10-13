<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: black">	
<?php include 'verifikasiData.php'; ?>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript">
	$(window).on('load',function(e){
		var email = $('#email').val();
		var kode = $('#kode').val();
		var data = $("#verifikasiDataForm").serialize();
		$.ajax({
		    type : 'POST',
		    url  : '../conn/data2/mail/dataUserVerifikasi.php/?verifikasiData',
		    data : data,
		    success :  function(response)
		    {
		      if(response == "verifikasiDataSuccess"){
		        window.location.href = "../login";
		      }
		      else{
		        alert('Pemesanan Gagal, Silahkan Lengkapi Data Anda');
		        window.location.href = "../signup";
		      }
		    }    
		});
		return false;
	});
</script>
</body>
</html>
