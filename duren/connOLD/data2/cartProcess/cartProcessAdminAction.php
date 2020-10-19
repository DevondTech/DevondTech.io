<?php    

    if(isset($_GET['updateConfirmationPayment'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $kode_pemesanan = $_POST['a']; 
        $id_proses_pemesanan = 4;
        
        if($id_user!=''){
            $query = "UPDATE tb_pemesanan SET id_proses_pemesanan='4' WHERE kode_pemesanan = '$kode_pemesanan' ";
            $db->query($query);
            echo "updateConfirmationPaymentSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['updateConfirmationShipped'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $kode_pemesanan = $_POST['a']; 
        $id_proses_pemesanan = 5;
        
        if($id_user!=''){
            $query = "UPDATE tb_pemesanan SET id_proses_pemesanan='5' WHERE kode_pemesanan = '$kode_pemesanan' ";
            $db->query($query);
            echo "updateConfirmationPaymentSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

?>