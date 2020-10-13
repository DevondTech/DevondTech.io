

<?php
  session_start();
  require '../config.php'; 
  $id_user = $_SESSION['id_user'];
  $nama_lengkap = $_SESSION['nama_lengkap'];
  $result = mysqli_query($db, "SELECT * FROM view_data_retur_all where id_user ='$id_user'");

  $rows = array();
  while($row = mysqli_fetch_array($result))
  {
    $rows[] = $row;
  }
  echo json_encode($rows);
?>
