<?php
$email = $_GET['callM'];
$kode = $_GET['callD'];

echo"<form method='post' id='verifikasiDataForm'>
		<div>
			<input type='hidden' name='email' id='email' value='$email'>
			<input type='hidden' name='kode' id='kode' value='$kode'>
		</div>
	</form>
";

?>