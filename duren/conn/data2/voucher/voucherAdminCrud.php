<?php
session_start();
$id_user = $_SESSION['id_user'];
$id_status_user = $_SESSION['id_status_user'];
if($id_user!='' && $id_status_user=='1'){
    if(isset($_GET['selectDataJenisVoucher'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_jenis_voucher, jenis_voucher FROM rt_jenis_voucher";
        $result = $db->query($query); 
        $selectDataJenisVoucher = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectDataJenisVoucher=json_encode($selectDataJenisVoucher);
        echo json_encode($selectDataJenisVoucher);
    }
    if(isset($_GET['selectDataVoucherToTable'])){
        require( '../../ssp.class.php' );
        require( '../configTwo.php' ); 
        $table = 'view_data_voucher';
        $primaryKey = 'id_voucher';
       
        $columns = array(
            array( 'db' => 'kode_voucher',     'dt' => 0 ),
            array( 'db' => 'waktu_berlaku',   'dt' => 1 ),
            array( 'db' => 'jenis_voucher',  'dt' => 2 ),
            array( 'db' => 'id_voucher' ,  'dt' => 3 ),
        );

        echo json_encode(
            SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
        );
    }
    if(isset($_GET['createJenisVoucherToSelect'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);        
        $jenis_voucher = $_POST['jenis_voucher'];
        $query = "INSERT INTO rt_jenis_voucher(jenis_voucher)
                    VALUES('$jenis_voucher')";   
        $db->query($query); 
        $createJenisVoucherToSelect='success';
        echo json_encode($createJenisVoucherToSelect);
    }
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 

