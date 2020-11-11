<?php    

    if(isset($_GET['verifikasiData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $kode = $_POST['kode'];
        $email = $_POST['email']; 
        if($kode!=''){
            $query = "UPDATE tb_login_user SET kode='$kode' WHERE email = '$email' ";
            $db->query($query);
            echo "verifikasiDataSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

?>