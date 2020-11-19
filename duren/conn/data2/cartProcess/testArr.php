<?php 
require '../config.php'; 
$callData = $db->query("select kode_pemesanan, id_produk FROM tb_pemesanan WHERE id_proses_pemesanan='7'");
$rowCount=$callData->num_rows;
echo $rowCount;
while($callDataToActionAuto=mysqli_fetch_array($callData)){
	$kode_pemesanan = $callDataToActionAuto['kode_pemesanan'];
	echo $kode_pemesanan;
	echo '<br /> ';
}
?>