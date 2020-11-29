<?php
    if(isset($_GET['selectData'])){
        session_start();
        $id_user = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s'); 
        $query = "SELECT id_voucher, kode_voucher, jenis_voucher, judul_voucher, waktu_berlaku, waktu_berlaku_detail, gambar_voucher, total_voucher FROM view_data_voucher_by_user where waktu_berlaku_detail >= '$now' and  id_user='$id_user'";
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


<?php
/*    if(isset($_GET['selectData'])){
    session_start();
    require '../config.php'; 
    $id_user = $_SESSION['id_user'];
    $json = json_decode(file_get_contents('php://input'), true);
    $result = mysqli_query($db, "SELECT id_user, id_voucher from tb_pemesanan where id_user='$id_user'");
        $rows = array();
        while($row = mysqli_fetch_array($result))
        {
            $data = $row['id_voucher'];
            $datax = $data.',';
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s'); 
            $queryV = "SELECT id_voucher, kode_voucher, waktu_berlaku, waktu_berlaku_detail, jenis_voucher, gambar_voucher FROM view_data_voucher where  waktu_berlaku_detail >= '$now' and id_voucher != IN ('".$data."')";
            $resultV = $db->query($queryV);      
            if($resultV){
                $selectData = mysqli_fetch_all($resultV,MYSQLI_ASSOC);
                $selectData = json_encode($selectData);
                echo json_encode($selectData);
            }else{
                $selectData ='';
                echo json_encode($selectData);
            }

        }
    }
*/
?>




