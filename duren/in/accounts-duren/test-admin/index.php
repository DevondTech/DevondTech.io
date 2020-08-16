<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
    session_start();

    $id_user = $_SESSION['username'];
    var_dump($_SESSION['id_user']);

    ?>
</body>
</html>