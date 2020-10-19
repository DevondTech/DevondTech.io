
<?php include 'sendForgotPassword.php'; $email = $_GET['email'];?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="hidden" id="email" value="<?php echo $email;?>">
</body>
<script type="text/javascript"  src="../../../../js/jquery.js" ></script>
<script type="text/javascript" src="../../../../js/ajax/jquery.min.js" ></script>
<script type="text/javascript">
var email = $('#email').val(); 
window.location.href = '../../../../verifikasiForgotPassword/?email='+email;
</script>
</html>