<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include("../conn/data2/config.php");
session_start();
    if(!isset($_SESSION['id_user'])){
  /*  die("
      <script language='javascript'>alert('Silahkan Login Dahulu');
      document.location='../../login'</script>");*/
      }
      if($_SESSION['id_status_user']!="1"){
   /*     die("
          <script language='javascript'>alert('Anda Bukan Andmin / Manager');
          document.location='../../login'</script>");*/
      }
    $id_user = $_SESSION['id_user'];
    $username = $_SESSION['username'];
    echo $id_user;
    echo "<br /> up";
    echo $username;
?>
</body>
</html>