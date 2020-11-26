<?php
    if(isset($_GET['selectData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s'); 
        $query = "SELECT id_voucher, kode_voucher, jenis_voucher, waktu_berlaku, gambar_voucher, id_status_voucher, status_voucher FROM view_data_voucher where id_status_voucher = '1' and waktu_berlaku >= '$now' ";
        $result = $db->query($query);      
        if($result){
            $selectData = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectData = json_encode($selectData);
            echo json_encode($selectData);
        }else{
            $selectData ='';
            echo json_encode($selectData);
        }
    }
?>

