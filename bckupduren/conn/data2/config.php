<?php
/*$db = new mysqli("localhost","root","","db_durian");
if(!$db) die("database connection error");
*/

/*$db = new mysqli("194.59.165.58","devond_durian","devond@durian","db_durian");
if(!$db) die("database connection error");*/

/*$db = new mysqli("194.59.165.58","devond_durian","devond@durian","db_durian");
if(!$db) {
	die("database connection error");
}else{

	echo "success";
}*/

/*$_HOST = "194.59.165.58";
$_USER ="devond_durian";
$_PASS ="devond@durian";
$_DBNM="db_durian";
$db = mysqli_connect ($_HOST,$_USER,$_PASS,$_DBNM) or die ("Gagal Koneksi Anda MYSQL-I")*/



$_HOST = "localhost";
$_USER ="root";
$_PASS ="";
$_DBNM="db_durian";
$db =  mysqli_connect ($_HOST,$_USER,$_PASS,$_DBNM) or die ("Gagal Koneksi Anda MYSQL-I")
?>
