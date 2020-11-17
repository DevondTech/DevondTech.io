<?php
  session_start();
  require '../config.php'; 
  $id_user = $_SESSION['id_user'];
  $id_status_user = $_SESSION['id_status_user'];
  if($id_user!='' && $id_status_user=='1'){
    $tanggalAwal = $_GET['tanggalAwal'];
    $tanggalAkhir = $_GET['tanggalAkhir'];
    $tanggalAkhir = date('Y-m-d H:i:s',strtotime($tanggalAkhir . "+1 days"));
    if($tanggalAwal!=''){
      $result = mysqli_query($db, "SELECT id_retur, kode_retur, nama_lengkap, status_retur, waktu_retur FROM view_data_retur_all  where waktu_retur_detail <= '$tanggalAkhir' 
        AND waktu_retur_detail > '$tanggalAwal'
       ");
      $rows = array();
      while($row = mysqli_fetch_array($result))
      {
        $rows[] = $row;
      }
      echo json_encode($rows);
    }
    else{
      $result = mysqli_query($db, "SELECT id_retur, kode_retur, nama_lengkap, status_retur, waktu_retur FROM view_data_retur_all");
      $rows = array();
      while($row = mysqli_fetch_array($result))
      {
        $rows[] = $row;
      }
      echo json_encode($rows);
    }
  }
  else{
      header('Location: https://kingfruit.co.id/');
  }
?>