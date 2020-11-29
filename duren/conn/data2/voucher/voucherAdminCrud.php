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
            array( 'db' => 'waktu_berlaku',         'dt' => 1 ),
            array( 'db' => 'judul_voucher',             'dt' => 2 ),
            array( 'db' => 'jenis_voucher',                 'dt' => 3 ),
            array( 'db' => 'id_voucher' ,                       'dt' => 4 ),
        );

        echo json_encode(
            SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
        );
    }
    /*if(isset($_GET['createJenisVoucherToSelect'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);        
        $jenis_voucher = $_POST['jenis_voucher'];
        $query = "INSERT INTO rt_jenis_voucher(jenis_voucher)
                    VALUES('$jenis_voucher')";   
        $db->query($query); 
        $createJenisVoucherToSelect='success';
        echo json_encode($createJenisVoucherToSelect);
    }*/
    if(isset($_GET['createVoucherNew'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);  
        $resultLastID = $db->query("select max(id_voucher) as last_data_voucher FROM tb_voucher");
        $voucherDataLastID = $resultLastID->fetch_object();
        $voucherLast=$voucherDataLastID->last_data_voucher;
        $kode_last = $voucherLast + 1;
        $kode_first = 'VDRN-';      
        $kode_kirim_konsumen = 1;
        $gambar_voucher = 'null';
        $judul_voucher = $_POST['judul_voucher'];
        $total_voucher = $_POST['total_voucher'];
        $waktu_berlaku = $_POST['waktu_berlaku'];
        $id_jenis_voucher = $_POST['id_jenis_voucher'];

        if($id_jenis_voucher == 1){
            $gambar_voucher = '../images/voucher/potonganharga.png';
        }  
        else{
            $gambar_voucher = '../images/voucher/gratisongkir.png';
        }
        $gambar_voucher = $gambar_voucher;
        $query = "INSERT INTO tb_voucher(kode_voucher, judul_voucher, id_jenis_voucher, total_voucher, waktu_berlaku, gambar_voucher, kode_kirim_konsumen)
                    VALUES('$kode_first$kode_last', '$judul_voucher', '$id_jenis_voucher', '$total_voucher', '$waktu_berlaku', '$gambar_voucher', '$kode_kirim_konsumen')";   
        $db->query($query); 
        $createVoucherNew='success';
        echo json_encode($createVoucherNew);
    }

    if(isset($_GET['sendVoucherToCust'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true); 
        $waktu_berlaku = $_POST['waktu_berlaku_sent']; 
        $resultLastID = $db->query("select id_voucher, waktu_berlaku, kode_kirim_konsumen FROM tb_voucher where kode_kirim_konsumen='1' and waktu_berlaku='$waktu_berlaku'");
        $voucherDataLastID = $resultLastID->fetch_object();
        $id_voucher=$voucherDataLastID->id_voucher;
    
        $result = mysqli_query($db, "SELECT id_user, id_status_user FROM tb_login_user where id_status_user ='5'");
        while($row = mysqli_fetch_array($result))
        {
            $id_user= $row['id_user'];
            $id_status_voucher = '1';
            $query = "INSERT INTO tb_voucher_by_user(id_voucher, id_user, id_status_voucher)
                    VALUES('$id_voucher', '$id_user', '$id_status_voucher')";   
            $db->query($query); 
            echo $id_user;
        }
        $kode_kirim_konsumen = 2;
        $queryUpVoucher = "UPDATE tb_voucher SET  kode_kirim_konsumen='$kode_kirim_konsumen' WHERE kode_kirim_konsumen='1' and waktu_berlaku='$waktu_berlaku'";
        $db->query($queryUpVoucher);
        
        $sendVoucherToCust='success';
        echo json_encode($sendVoucherToCust);
    }
    if(isset($_GET['checkVoucherKode'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_voucher, judul_voucher, total_voucher, waktu_berlaku FROM tb_voucher where kode_kirim_konsumen='1' ";
        $result = $db->query($query); 
        $checkVoucherKode = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $checkVoucherKode=json_encode($checkVoucherKode);
        echo json_encode($checkVoucherKode);
    }
    
}
else{
    header('Location: https://kingfruit.co.id/');
}    
?> 

