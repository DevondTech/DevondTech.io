<?php
session_start();

require_once('koneksi.php');

 if(isset($_POST['btn-login']))
 {
    $username    = $_POST['username'];
    $password = md5($_POST['password']);
    
    $query  = "SELECT * FROM login_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection,$query)or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $row     = mysqli_fetch_array($result);

    if( $num_row >=1 ) {

      echo "ok"; 

      $_SESSION['logged_in'] = $row['id_user'];

    }else {

      echo "alamat email atau password salah!.";

    }

 }

?>