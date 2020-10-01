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

    if(isset($_GET['selectCartDataByUser'])){
        session_start();
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_semua_pesanan where id_user ='$userDataID' order by id_proses_pemesanan ASC";
        $result = $db->query($query); 
       
        if($result){
            $selectCartDataByUser = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectCartDataByUser=json_encode($selectCartDataByUser);
            echo json_encode($selectCartDataByUser);
        }else{
            $selectCartDataByUser ='';
            echo json_encode($selectCartDataByUser);
        }
    }

    if(isset($_GET['selectDataWeightProduct'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_berat_produk_pemesanan";
        $result = $db->query($query); 
        $selectDataWeightProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectDataWeightProduct=json_encode($selectDataWeightProduct);
        echo json_encode($selectDataWeightProduct);
    }

    if(isset($_GET['updateCheckOutByUser'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $jumlah_pemesanan = $_POST['jumlahPemesanan']; 
        $alamatInput = $_POST['alamatInput']; 
        $negaraInput = $_POST['negaraInput']; 
        $provinsiInput = $_POST['provinsiInput']; 
        $kabupatenInput = $_POST['kabupatenInput']; 
        $kecamatanInput = $_POST['kecamatanInput']; 
        $kelurahanInput = $_POST['kelurahanInput']; 
        $kotaInput = $_POST['kotaInput']; 
        $dataKodePos = $_POST['dataKodePos']; 
        $ongkir = $_POST['ongkir']; 
        $id_berat_produk = $_POST['id_berat_produk']; 
        $total_harga_pemesanan = $_POST['total_harga_pemesanan']; 
        $totalBayarKeseluruhan = $_POST['totalBayarKeseluruhan']; 
        $id_proses_pemesanan = 2;
        $id_proses_pemesanan_from_DB = 1;

        if($alamatInput!=''){
            $query = "UPDATE tb_pemesanan SET  jumlah_pemesanan='$jumlah_pemesanan', alamat='$alamatInput', negara='$negaraInput', provinsi='$provinsiInput', kabupaten='$kabupatenInput', kota='$kotaInput', kecamatan='$kecamatanInput', kelurahan='$kelurahanInput', kode_pos='$dataKodePos', id_berat_produk='$id_berat_produk', id_proses_pemesanan='$id_proses_pemesanan', ongkos_kirim='$ongkir', total_harga_perproduk='$total_harga_pemesanan', total_harga_yang_harus_dibayar='$totalBayarKeseluruhan' WHERE id_user = $id_user and id_proses_pemesanan='1'";
            $db->query($query);

            echo "updateCheckOutByUserSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['updateConfirmationPayment'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $jumlah_pemesanan = $_POST['jumlahPemesanan']; 
        $alamatInput = $_POST['alamatInput']; 
        $negaraInput = $_POST['negaraInput']; 
        $provinsiInput = $_POST['provinsiInput']; 
        $kabupatenInput = $_POST['kabupatenInput']; 
        $kecamatanInput = $_POST['kecamatanInput']; 
        $kelurahanInput = $_POST['kelurahanInput']; 
        $kotaInput = $_POST['kotaInput']; 
        $dataKodePos = $_POST['dataKodePos']; 
        $ongkir = $_POST['ongkir']; 
        $id_berat_produk = $_POST['id_berat_produk']; 
        $total_harga_pemesanan = $_POST['total_harga_pemesanan']; 
        $totalBayarKeseluruhan = $_POST['totalBayarKeseluruhan']; 
        $id_proses_pemesanan = 2;
        $id_proses_pemesanan_from_DB = 1;

        if($alamatInput!=''){
            $query = "UPDATE tb_pemesanan SET  jumlah_pemesanan='$jumlah_pemesanan', alamat='$alamatInput', negara='$negaraInput', provinsi='$provinsiInput', kabupaten='$kabupatenInput', kota='$kotaInput', kecamatan='$kecamatanInput', kelurahan='$kelurahanInput', kode_pos='$dataKodePos', id_berat_produk='$id_berat_produk', id_proses_pemesanan='$id_proses_pemesanan', ongkos_kirim='$ongkir', total_harga_perproduk='$total_harga_pemesanan', total_harga_yang_harus_dibayar='$totalBayarKeseluruhan' WHERE id_user = $id_user and id_proses_pemesanan='1'";
            $db->query($query);

            echo "updateCheckOutByUserSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['cartActionByUser'])){
        session_start();
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $resultSearchData = $db->query("select * from tb_pemesanan where id_user='$id_user' and id_proses_pemesanan='6' or '' ");
        $rowCount=$resultSearchData->num_rows;
        $resultSearchDataByUser = $db->query("select * from tb_pemesanan where id_user='$id_user'");
        $rowCountByUser=$resultSearchDataByUser->num_rows;
        if($rowCount!=0 || $rowCountByUser==0){      
            $resultLastID = $db->query("select max(id_pemesanan) as last_data_pemesanan FROM tb_pemesanan");
            $pemesananDataLastID = $resultLastID->fetch_object();
            $pemesananLast=$pemesananDataLastID->last_data_pemesanan;
            $kode_pemesanan = $pemesananLast + 1;
            $kode_duren = 'DR0';
            date_default_timezone_set('Asia/Jakarta');
            $waktu_pemesanan = date('Y-m-d H:i:s'); 
            $id_produk  = 1; 
            $id_proses_pemesanan = 1;
            $id_metode_pembayaran = 2;

            $query = "INSERT INTO tb_pemesanan(kode_pemesanan, waktu_pemesanan, id_user, id_proses_pemesanan, id_produk, id_metode_pembayaran)
                            VALUES('$kode_duren$kode_pemesanan','$waktu_pemesanan','$id_user','$id_proses_pemesanan','$id_produk', '$id_metode_pembayaran')";   
            $db->query($query);       
            echo "Success"; 
        }
        else{
            echo 'dataFound';
        }
    }

?>