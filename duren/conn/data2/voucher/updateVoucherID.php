<?php
    require '../config.php'; 
    session_start();
    $id_user = $_SESSION['id_user'];
    $id_voucher_by_user = $_GET['0e2d42465dbfbf7cf71ff0d5b26eb1f8434e0bb1']; 
    $id_pemesanan = $_GET['cd775679d623fc90663c6d7688654d5ea5a7837a']; 
    $id_voucher_by_user_call_back = $_GET['0e2d42465dbfbBackf7cf71ff0d5b26eb1f8434e0bb1'];
    if($id_voucher_by_user_call_back != ''){
        $queryUpdateVoucherUserDel = "UPDATE tb_voucher_by_user SET id_status_voucher='1' WHERE id_voucher_by_user = '$id_voucher_by_user_call_back' and id_user = '$id_user'";
        $db->query($queryUpdateVoucherUserDel);   
        $query = "UPDATE tb_pemesanan SET id_voucher_by_user='$id_voucher_by_user' WHERE id_pemesanan = '$id_pemesanan' ";
        $db->query($query);   
        $queryUpdateVoucherUser = "UPDATE tb_voucher_by_user SET id_status_voucher='2' WHERE id_voucher_by_user = '$id_voucher_by_user' and id_user = '$id_user' ";
        $db->query($queryUpdateVoucherUser);   
        
    ?>
    <script type="text/javascript">
        window.location.href = '../../../in/accounts-duren/open-konsumen/';
    </script>  
    <?php
    }
    else{
        $query = "UPDATE tb_pemesanan SET id_voucher_by_user='$id_voucher_by_user' WHERE id_pemesanan = '$id_pemesanan' ";
        $db->query($query);   
        $queryUpdateVoucherUser = "UPDATE tb_voucher_by_user SET id_status_voucher='2' WHERE id_voucher_by_user = '$id_voucher_by_user' and id_user = '$id_user' ";
        $db->query($queryUpdateVoucherUser);   
    ?>
    <script type="text/javascript">
        window.location.href = '../../../in/accounts-duren/open-konsumen/';
    </script>  
    <?php
    }
?>