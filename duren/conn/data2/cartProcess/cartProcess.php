<?php	
	if(isset($_GET['selectDataUserDetailAlamat'])){
        session_start();
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_user, nama_lengkap, nomor_hp, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos FROM view_data_konsumen where id_user ='$userDataID'";
        $result = $db->query($query); 
        $select = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $select=json_encode($select);
        echo json_encode($select);
    }
?>