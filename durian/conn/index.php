<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_durian"; 

$connection = mysqli_connect($hostname, $username, $password, $database);

	if(!$connection)
	  {
	    echo "Koneksi Gagal! : " . mysqli_connect_error();
	  }
	  else{
	  	echo "Koneksi Berhasil!";
	  }

 ?>
