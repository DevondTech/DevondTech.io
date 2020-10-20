
<?php include 'sendCheckOut.php';?>
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
window.location.href = '../../../../in/accounts-duren/open-konsumen/?textData=cart';
</script>
</html>