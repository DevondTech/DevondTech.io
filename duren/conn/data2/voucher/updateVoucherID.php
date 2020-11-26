<?php
        require '../config.php'; 

        $id_voucher = $_GET['0e2d42465dbfbf7cf71ff0d5b26eb1f8434e0bb1']; 
        $id_pemesanan = $_GET['cd775679d623fc90663c6d7688654d5ea5a7837a']; 
        if($id_voucher != ''){
            $query = "UPDATE tb_pemesanan SET id_voucher='$id_voucher' WHERE id_pemesanan = '$id_pemesanan' ";
            $db->query($query);   
        ?>
        <script type="text/javascript">
       window.location.href = '../../../in/accounts-duren/open-konsumen/';
        </script>  
        <?php
        }
        else{
        ?>
        <script type="text/javascript">
       window.location.href = '../../../in/accounts-duren/open-konsumen/';
        </script>  
        <?php
        }
?>