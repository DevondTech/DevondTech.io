
<?php
  session_start();
  require '../config.php'; 
  $id_user = $_SESSION['id_user'];
  $nama_lengkap = $_SESSION['nama_lengkap'];
  if($id_user!='' ){
    $result = mysqli_query($db, "SELECT id_pemesanan, kode_pemesanan, waktu_pemesanan, nama_produk, proses_pemesanan, id_user FROM view_data_history_cart_konsumen where id_user ='$id_user'");
    $rows = array();
    while($row = mysqli_fetch_array($result))
    {
      $rows[] = $row;
    }
    echo json_encode($rows);
  }
  else{
      header('Location: https://kingfruit.co.id/');
  }
?>
