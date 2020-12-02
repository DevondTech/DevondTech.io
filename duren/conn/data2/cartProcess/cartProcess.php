<?php	
session_start();
$id_user = $_SESSION['id_user'];
if($id_user!=''){

    if(isset($_GET['ongkirCall'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_ongkir, ongkir FROM tb_ongkir where id_ongkir ='1'";
        $result = $db->query($query);      
        if($result){
            $ongkirCall = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $ongkirCall=json_encode($ongkirCall);
            echo json_encode($ongkirCall);
        }else{
            $ongkirCall ='0';
            echo json_encode($ongkirCall);
        }
    }

    if(isset($_GET['methodPayment'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_metode_pembayaran, metode_pembayaran FROM rt_metode_pembayaran";
        $result = $db->query($query); 
        $methodPaymentCallBack = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $methodPaymentCallBack=json_encode($methodPaymentCallBack);
        echo json_encode($methodPaymentCallBack);
    }

    if(isset($_GET['updateConfirmationReturTransfer'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
       /* $admin_tanggal_transfer = $_POST['admin_tanggal_transfer'];
        $admin_nama_pemilik_rekening = $_POST['admin_nama_pemilik_rekening']; 
        $admin_nomor_rekening = $_POST['admin_nomor_rekening']; 
        $admin_bank_asal = $_POST['admin_bank_asal']; 
        $admin_total_pengembalian_dana = $_POST['admin_total_pengembalian_dana']; */
        $id_retur = $_POST['a'];
        $kode_pemesanan_call_back = $_POST['kode_pemesanan_call_back']; 
        $id_status_retur = 3;
        $callData = $db->query("select kode_retur FROM tb_retur_pembelian WHERE id_retur='$id_retur'");
        $callDataToPrint = $callData->fetch_object();
        $kode_pemesanan = $callDataToPrint->kode_retur;
        $callDataPemesanan = $db->query("select kode_pemesanan FROM tb_pemesanan WHERE id_pemesanan='$kode_pemesanan_call_back'");
        $callDataPemesananToPrint = $callDataPemesanan->fetch_object();
        $kode_pemesanan_call_back = $callDataPemesananToPrint->kode_pemesanan;
        $callDataUser = $db->query("select id_user_retur FROM tb_retur_pembelian WHERE id_retur='$id_retur'");
        $callDataUserToPrint = $callDataUser->fetch_object();
        $id_user_retur = $callDataUserToPrint->id_user_retur;
        $pesan_notifikasi ='Pengajuan Retur Anda Dikonfirmasi, Dengan Kode Retur: '.$kode_pemesanan;
        $id_status_notifikasi = 8;
        $id_status_baca = 1;
        $id_status_baca_admin = 2;
        $id_user_baca = 1;
      
        date_default_timezone_set('Asia/Jakarta');
        $tanggal_pengiriman_kembali = date('Y-m-d H:i:s'); 
        $IdProduk = $_POST['id_produk'];
        $jumlah_pengiriman_kembali = $_POST['jumlah_pemesanan_send_mail'];
        $resultData = $db->query("select jumlah_stok FROM tb_produk where id_produk='$IdProduk'");
        $productData = $resultData->fetch_object();
        $jumlah_stok=$productData->jumlah_stok;

        $put_stok_to_produk = $jumlah_stok - $jumlah_pengiriman_kembali;

        if($id_user!='' && $id_status_user=='1'){
            $query = "UPDATE tb_retur_pembelian SET  tanggal_pengiriman_kembali='$tanggal_pengiriman_kembali', id_status_retur='$id_status_retur'   WHERE id_retur = '$id_retur' ";
            $db->query($query);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, id_user)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca', '$id_user_retur')";   
            $db->query($queryNotif); 
            $queryReadNotif = "UPDATE tb_notifikasi SET  id_status_baca='$id_status_baca_admin' WHERE id_status_notifikasi = '7' and kode_pemesanan='$kode_pemesanan_call_back'";
            $db->query($queryReadNotif);
            $queryProduct = "UPDATE tb_produk SET jumlah_stok='$put_stok_to_produk' WHERE id_produk='$IdProduk'";   
            $db->query($queryProduct); 
            echo "updateConfirmationReturTransferSuccess";   
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }


    if(isset($_GET['informationNumberRek'])){
        $userDataID = $_SESSION['id_user'];
        if($id_user!=''){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT number_rekening FROM tb_about_us where id_about_us ='1' ";
        $result = $db->query($query); 
            if($result){
                $informationNumberRek = mysqli_fetch_all($result,MYSQLI_ASSOC);
                $informationNumberRek=json_encode($informationNumberRek);
                echo json_encode($informationNumberRek);
            }else{
                $informationNumberRek ='';
                echo json_encode($informationNumberRek);
            }
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }
    
    if(isset($_GET['updateInformationNumberRek'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        $number_rekening = $_POST['PrintDetail_link_number_rekening']; 
        if($id_user!='' && $id_status_user=='1'){
            $id_about_us = 1;
            $query = "UPDATE tb_about_us SET number_rekening='$number_rekening' WHERE id_about_us = '$id_about_us' ";
            $db->query($query);
            echo "updateInformationNumberRek";   
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }

    if(isset($_GET['InformationPemilikRek'])){
        $userDataID = $_SESSION['id_user'];
        if($id_user!=''){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT pemilik_rekening FROM tb_about_us where id_about_us ='1' ";
        $result = $db->query($query); 
            if($result){
                $InformationPemilikRek = mysqli_fetch_all($result,MYSQLI_ASSOC);
                $InformationPemilikRek=json_encode($InformationPemilikRek);
                echo json_encode($InformationPemilikRek);
            }else{
                $InformationPemilikRek ='';
                echo json_encode($InformationPemilikRek);
            }
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }
    
    if(isset($_GET['updateInformationPemilikRek'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        $pemilik_rekening = $_POST['PrintDetail_link_pemilik_rekening']; 
        if($id_user!='' && $id_status_user=='1'){
            $id_about_us = 1;
            $query = "UPDATE tb_about_us SET pemilik_rekening='$pemilik_rekening' WHERE id_about_us = '$id_about_us' ";
            $db->query($query);
            echo "updateInformationPemilikRek";   
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }

    if(isset($_GET['confirmationFormDataRefuse'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        $id_retur = $_POST['b']; 
        $id_status_retur = 4;
        $admin_total_pengembalian_dana = 0;
        $callData = $db->query("select kode_retur FROM tb_retur_pembelian WHERE id_retur='$id_retur'");
        $callDataToPrint = $callData->fetch_object();
        $kode_pemesanan = $callDataToPrint->kode_retur;
        $callDataUser = $db->query("select id_user_retur FROM tb_retur_pembelian WHERE id_retur='$id_retur'");
        $callDataUserToPrint = $callDataUser->fetch_object();
        $id_user_retur = $callDataUserToPrint->id_user_retur;
        $kode_pemesanan_call = $_POST['kode_pemesanan_call_back_refuse'];
        $callDataPemesanan = $db->query("select kode_pemesanan FROM tb_pemesanan WHERE id_pemesanan='$kode_pemesanan_call'");
        $callDataPemesananToPrint = $callDataPemesanan->fetch_object();
        $kode_pemesanan_call_back = $callDataPemesananToPrint->kode_pemesanan;
        $pesan_notifikasi ='Pengajuan Retur Anda Ditolak / Tidak Diterima, Dengan Kode Retur: '.$kode_pemesanan;
        $id_status_notifikasi = 8;
        $id_status_baca = 1;
        $id_status_baca_admin = 2;
        $id_user_baca = 1;
        if($id_user!='' && $id_status_user=='1'){
            $query = "UPDATE tb_retur_pembelian SET admin_total_pengembalian_dana='$admin_total_pengembalian_dana', id_status_retur='$id_status_retur' WHERE id_retur = '$id_retur' ";
            $db->query($query);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, id_user)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca','$id_user_retur')";   
            $db->query($queryNotif); 
            $queryReadNotif = "UPDATE tb_notifikasi SET id_status_baca='$id_status_baca_admin' WHERE id_status_notifikasi = '7' and kode_pemesanan='$kode_pemesanan_call_back'";
            $db->query($queryReadNotif); 
            echo "confirmationFormDataRefuseSuccess";   
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }

    if(isset($_GET['updateCancelOrder'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_pemesanan = $_GET['updateCancelOrder']; 
        $callDataUserCancelOrder = $db->query("select id_pemesanan, jumlah_pemesanan, id_produk FROM tb_pemesanan WHERE id_pemesanan='$id_pemesanan'");
        $callDataUserCancelOrderToPrint = $callDataUserCancelOrder->fetch_object();
        $jumlah_pemesanan = $callDataUserCancelOrderToPrint->jumlah_pemesanan;
        $id_produk = $callDataUserCancelOrderToPrint->id_produk;
        $callDataStokByOrder = $db->query("select id_produk, jumlah_stok FROM tb_produk WHERE id_produk='$id_produk'");
        $callDataStokByOrderToPrint = $callDataStokByOrder->fetch_object();
        $jumlah_stok = $callDataStokByOrderToPrint->jumlah_stok;
        $jumlah_stok_update =  $jumlah_stok + $jumlah_pemesanan;
        $id_status_produk_dalam_proses = 2;
        $id_proses_pemesanan = 10;
        if($id_user!=''){
            $queryPemesanan = "UPDATE tb_pemesanan SET id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan = '$id_pemesanan' ";
            $db->query($queryPemesanan);
            $queryProduk = "UPDATE tb_produk SET jumlah_stok='$jumlah_stok_update' WHERE id_produk = '$id_produk' ";
            $db->query($queryProduk);
            $queryProdukOnProgress = "UPDATE tb_produk_dalam_proses SET id_status_produk_dalam_proses='$id_status_produk_dalam_proses' WHERE id_pemesanan = '$id_pemesanan' ";
            $db->query($queryProdukOnProgress);
            echo "updateCancelOrder";   
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }

    if(isset($_GET['updateCancelOrderAdmin'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        if($id_user!='' && $id_status_user=='1'){
            $callData = $db->query("select id_pemesanan, kode_pemesanan, jumlah_pemesanan, id_produk, waktu_batas_checkout, jumlah_pemesanan FROM tb_pemesanan WHERE id_proses_pemesanan='2'");
            $rowCount = $callData->num_rows;
            if($rowCount>0){
                while($callDataToActionAuto=mysqli_fetch_array($callData)){
                    $kode_pemesanan = $callDataToActionAuto['kode_pemesanan'];
                    $id_produk = $callDataToActionAuto['id_produk'];
                    $waktu_batas_checkout = $callDataToActionAuto['waktu_batas_checkout'];
                    $id_pemesanan = $callDataToActionAuto['id_pemesanan'];
                    $jumlah_pemesanan = $callDataToActionAuto['jumlah_pemesanan'];
                    date_default_timezone_set('Asia/Jakarta');
                    $now = date('Y-m-d H:i:s'); 
                    $komentar = ''; 
                    if($now > $waktu_batas_checkout){
                        $callDataStokByOrder = $db->query("select id_produk, jumlah_stok FROM tb_produk WHERE id_produk='$id_produk'");
                        $callDataStokByOrderToPrint = $callDataStokByOrder->fetch_object();
                        $jumlah_stok = $callDataStokByOrderToPrint->jumlah_stok;
                        $jumlah_stok_update =  $jumlah_stok + $jumlah_pemesanan;
                        $id_status_produk_dalam_proses = 2;
                        $id_proses_pemesanan = 10;
                        $queryPemesanan = "UPDATE tb_pemesanan SET id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan = '$id_pemesanan' ";
                        $db->query($queryPemesanan);
                        $queryProduk = "UPDATE tb_produk SET jumlah_stok='$jumlah_stok_update' WHERE id_produk = '$id_produk' ";
                        $db->query($queryProduk);
                        $queryProdukOnProgress = "UPDATE tb_produk_dalam_proses SET id_status_produk_dalam_proses='$id_status_produk_dalam_proses' WHERE id_pemesanan = '$id_pemesanan' ";
                        $db->query($queryProdukOnProgress);
                        echo "updateCancelOrder";   
                    }
                    else{
                        echo 'notActionUpdateCancelOrder';
                    }
                }
            }
            else{
                echo 'dataNotFound';
            } 
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }
    }

    if(isset($_GET['selectToDataFotoRetur'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_user, id_proses_pemesanan, gambar_bukti_pembayaran FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan='2'";
        $result = $db->query($query);      
        if($result){
            $selectToDataFotoRetur = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectToDataFotoRetur=json_encode($selectToDataFotoRetur);
            echo json_encode($selectToDataFotoRetur);
        }else{
            $selectToDataFotoRetur ='';
            echo json_encode($selectToDataFotoRetur);
        }
    }

    if(isset($_GET['selectToDataRefuseRetur'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $selectToDataRefuseRetur = $_GET['selectToDataRefuseRetur'];
        $query = "SELECT id_pemesanan, nama_lengkap, email, nama_produk, jumlah_pemesanan, satuan_produk, teks_berat_produk FROM view_data_semua_pesanan where id_pemesanan ='$selectToDataRefuseRetur'";
        $result = $db->query($query);      
        if($result){
            $selectToDataRefuseRetur = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectToDataRefuseRetur=json_encode($selectToDataRefuseRetur);
            echo json_encode($selectToDataRefuseRetur);
        }else{
            $selectToDataRefuseRetur ='';
            echo json_encode($selectToDataRefuseRetur);
        }
    }

    if(isset($_GET['selectCartDataByUserToPayment'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan = '2'";
        $result = $db->query($query); 
        if($result){
            $selectCartDataByUserToPayment = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectCartDataByUserToPayment=json_encode($selectCartDataByUserToPayment);
            echo json_encode($selectCartDataByUserToPayment);
        }else{
            $selectCartDataByUserToPayment ='';
            echo json_encode($selectCartDataByUserToPayment);
        }
    }

    if(isset($_GET['selectCartDataByUserToPaymentCall'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_pemesanan, kode_pemesanan, waktu_pemesanan, id_user, username, nama_lengkap, email, nomor_hp, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, pesan_pemesanan, id_proses_pemesanan, proses_pemesanan, id_produk, nama_produk, detail1_produk, jenis_produk, jumlah_pemesanan, harga, diskon, harga_setelah_diskon, total_harga_perproduk, ongkos_kirim, total_harga_yang_harus_dibayar, gambar1_produk, id_satuan_produk, satuan_produk, id_berat_produk, teks_berat_produk, konfersi_berat_produk_perkilogram, id_voucher, kode_voucher, jenis_voucher, total_voucher, waktu_berlaku, metode_pembayaran, kode_link_pembayaran, pesan_bukti_pembayaran, gambar_bukti_pembayaran, nama_pemilik_rekening,
tanggal_transfer, no_rekening, bank_asal, kode_unik, waktu_batas_checkout FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan = '2'";
        $result = $db->query($query); 
        if($result){
            $selectCartDataByUserToPayment = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectCartDataByUserToPayment=json_encode($selectCartDataByUserToPayment);
            echo json_encode($selectCartDataByUserToPayment);
        }else{
            $selectCartDataByUserToPayment ='';
            echo json_encode($selectCartDataByUserToPayment);
        }
    }

    if(isset($_GET['selectCartDataByUserToPaymentLinkAja'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_pemesanan, id_user, kode_pemesanan, nomor_hp, nama_produk, harga, jumlah_pemesanan, id_proses_pemesanan, gambar_bukti_pembayaran, total_harga_yang_harus_dibayar FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan = '2'";
        $result = $db->query($query); 
        if($result){
            $selectCartDataByUserToPaymentLinkAja = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectCartDataByUserToPaymentLinkAja=json_encode($selectCartDataByUserToPaymentLinkAja);
            echo json_encode($selectCartDataByUserToPaymentLinkAja);
        }else{
            $selectCartDataByUserToPayment ='';
            echo json_encode($selectCartDataByUserToPaymentLinkAja);
        }
    }

	if(isset($_GET['selectDataUserDetailAlamat'])){
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
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
      /*  $query = "SELECT * FROM view_data_semua_pesanan where id_user ='$userDataID' order by id_proses_pemesanan ASC";*/
        $query = "SELECT * FROM view_data_semua_pesanan where id_user ='$userDataID' order by id_pemesanan DESC LIMIT 1";
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
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_berat_produk_pemesanan";
        $result = $db->query($query); 
        $selectDataWeightProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectDataWeightProduct=json_encode($selectDataWeightProduct);
        echo json_encode($selectDataWeightProduct);
    }

    if(isset($_GET['updateCheckOutByUserOLD'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $nama_lengkap = $_SESSION['nama_lengkap'];
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
        $pesan_notifikasi ='Pemesanan Barang Atas Nama '.$nama_lengkap.' Dibuat. Dengan Jumlah Pemesanan '.$jumlah_pemesanan.' Pack';
        $id_status_notifikasi = 1;
        $id_status_baca = 1;
        $id_user_baca = 2;
        $userData =''; $query = "select * from tb_login_user where id_user='$id_user'"; 
        $result = mysqli_query($db,$query);
        $baris= mysqli_fetch_array($result);
        $cekKOde= $baris['kode'];
        if($cekKOde=='c47907abd2a80492ca9388b05c0e382518ff3960'){
            if($alamatInput!=''){
                $query = "UPDATE tb_pemesanan SET  jumlah_pemesanan='$jumlah_pemesanan', alamat='$alamatInput', negara='$negaraInput', provinsi='$provinsiInput', kabupaten='$kabupatenInput', kota='$kotaInput', kecamatan='$kecamatanInput', kelurahan='$kelurahanInput', kode_pos='$dataKodePos', id_berat_produk='$id_berat_produk', id_proses_pemesanan='$id_proses_pemesanan', ongkos_kirim='$ongkir', total_harga_perproduk='$total_harga_pemesanan', total_harga_yang_harus_dibayar='$totalBayarKeseluruhan' WHERE id_user = $id_user and id_proses_pemesanan='1'";
                $db->query($query);

                $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
                $db->query($queryNotif); 

                echo "updateCheckOutByUserSuccess";   
            }
            else{
                echo "erorDATA";
            }
        }
        else{
            echo "checkVerificationUser";
        }
    }

    if(isset($_GET['updateCheckOutByUser'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $nama_lengkap = $_SESSION['nama_lengkap'];
        $jumlah_pemesanan = $_POST['jumlahPemesanan']; 
        $id_pemesanan = $_POST['id_pemesanan']; 
        $id_produk_send = $_POST['id_produk_send']; 
        $alamatInput = $_POST['alamatInput']; 
        $negaraInput = $_POST['negaraInput']; 
        $provinsiInput = $_POST['provinsiInput']; 
        $kabupatenInput = $_POST['kabupatenInput']; 
        $kecamatanInput = $_POST['kecamatanInput']; 
        $kelurahanInput = $_POST['kelurahanInput']; 
        $kotaInput = $_POST['kotaInput']; 
        $dataKodePos = $_POST['dataKodePos']; 
        $ongkir = $_POST['ongkir']; 
        $kodeUnikPlus = $_POST['kodeUnikPlus'];
        $id_berat_produk = $_POST['id_berat_produk']; 
        $total_harga_pemesanan = $_POST['total_harga_pemesanan']; 
        $totalBayarKeseluruhan = $_POST['totalBayarKeseluruhan']; 
        $id_proses_pemesanan = 2;
        $id_proses_pemesanan_from_DB = 1;
        $resultData = $db->query("select jumlah_stok FROM tb_produk where id_produk='$id_produk_send'");
        $productData = $resultData->fetch_object();
        $jumlah_stok=$productData->jumlah_stok;
        $put_stok_to_produk = $jumlah_stok - $jumlah_pemesanan;
        $pesan_notifikasi ='Pemesanan Barang Atas Nama '.$nama_lengkap.' Dibuat. Dengan Jumlah Pemesanan '.$jumlah_pemesanan.' Pack';
        $id_status_notifikasi = 1;
        $id_status_baca = 1;
        $id_user_baca = 2;
        date_default_timezone_set('Asia/Jakarta');
        $waktu_checkout = date('Y-m-d H:i:s'); 
        $userData =''; $query = "select * from tb_login_user where id_user='$id_user'"; 
        $result = mysqli_query($db,$query);
        $baris= mysqli_fetch_array($result);
        $cekKOde= $baris['kode'];
        $currentTime = time(); 
        $hoursToAddCheckoutLost = 3;
        $secondsToAddCheckoutLost = $hoursToAddCheckoutLost * (60 * 60);
        $createCheckoutLost = $currentTime + $secondsToAddCheckoutLost;
        $checkoutLost = date("Y-m-d H:i:s", $createCheckoutLost);
        $id_status_produk_dalam_proses = 1;
        if($alamatInput!=''){
            $query = "UPDATE tb_pemesanan SET waktu_pemesanan='$waktu_checkout', jumlah_pemesanan='$jumlah_pemesanan', alamat='$alamatInput', negara='$negaraInput', provinsi='$provinsiInput', kabupaten='$kabupatenInput', kota='$kotaInput', kecamatan='$kecamatanInput', kelurahan='$kelurahanInput', kode_pos='$dataKodePos', id_berat_produk='$id_berat_produk', id_proses_pemesanan='$id_proses_pemesanan', ongkos_kirim='$ongkir', total_harga_perproduk='$total_harga_pemesanan', total_harga_yang_harus_dibayar='$totalBayarKeseluruhan', kode_unik = '$kodeUnikPlus', waktu_batas_checkout='$checkoutLost' WHERE id_user = $id_user and id_proses_pemesanan='1'";
            $db->query($query);
            $queryProduct = "UPDATE tb_produk SET jumlah_stok='$put_stok_to_produk' WHERE id_produk = $id_produk_send";
            $db->query($queryProduct);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                        VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
            $db->query($queryNotif); 
            $queryProductOnProgress = "INSERT INTO tb_produk_dalam_proses(id_produk , tanggal_checkout , id_status_produk_dalam_proses , jumlah_pemesanan, id_berat_produk, id_pemesanan)
                        VALUES('$id_produk_send', '$waktu_checkout', '$id_status_produk_dalam_proses', '$jumlah_pemesanan', '$id_berat_produk', '$id_pemesanan')";   
            $db->query($queryProductOnProgress); 

            echo "updateCheckOutByUserSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['updateConfirmationPayment'])){
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
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $resultSearchDataByUser = $db->query("select * from view_data_semua_pesanan where id_user='$id_user' and (id_proses_pemesanan!='7' and id_proses_pemesanan!='8')");
        $rowCountByUser=$resultSearchDataByUser->num_rows;
        if($rowCountByUser==0){  
            $resultLastID = $db->query("select max(id_pemesanan) as last_data_pemesanan FROM tb_pemesanan");
            $pemesananDataLastID = $resultLastID->fetch_object();
            $pemesananLast=$pemesananDataLastID->last_data_pemesanan;
            $kode_pemesanan = $pemesananLast + 1;
            $kode_duren = 'TEST-DATA-23112020-DR0T';
            /*$kode_duren = 'DRN00';*/
            date_default_timezone_set('Asia/Jakarta');
            $waktu_pemesanan = date('Y-m-d H:i:s'); 
            $waktu_pengiriman = date('Y-m-d H:i:s'); 
            $id_produk  = 1; 
            $id_proses_pemesanan = 1;
            $id_metode_pembayaran = 2;
            $query = "INSERT INTO tb_pemesanan(kode_pemesanan, waktu_pemesanan, waktu_pengiriman, id_user, id_proses_pemesanan, id_produk, id_metode_pembayaran)
                            VALUES('$kode_duren$kode_pemesanan','$waktu_pemesanan', '$waktu_pengiriman', '$id_user','$id_proses_pemesanan','$id_produk', '$id_metode_pembayaran')";   
            $db->query($query);       
            echo "Success"; 
        }
        else{
            echo 'dataFound';
        }  
    }

    if(isset($_GET['updateDataFotoPayment'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/buktitransfer/';
        $fileFolderSave = '../../../in/accounts-duren/images/buktitransfer/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_pemesanan SET gambar_bukti_pembayaran='$fileFolder$datePic$id_user$foto' WHERE id_user = $id_user and id_proses_pemesanan='2'";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo "Success";   
        }
        else{
            echo "dataCheck";
        }
    }

    if(isset($_GET['selectToDataFotoPayment'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_user, id_proses_pemesanan, gambar_bukti_pembayaran FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan='2'";
        $result = $db->query($query); 
       
        if($result){
            $selectToDataFotoPayment = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectToDataFotoPayment=json_encode($selectToDataFotoPayment);
            echo json_encode($selectToDataFotoPayment);
        }else{
            $selectToDataFotoPayment ='';
            echo json_encode($selectToDataFotoPayment);
        }
    }

    if(isset($_GET['updateConfirmationPaymentTransfer'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $nama_lengkap = $_SESSION['nama_lengkap'];
        $IdPemesanan = $_POST['IdPemesanan']; 
        $id_pemesanan = $_POST['id_pemesanan']; 
        $IdProduk  = $_POST['IdProduk']; 
        date_default_timezone_set('Asia/Jakarta');
        $WaktuPemesanan = date('Y-m-d H:i:s');
        $tanggal_dibeli = date('Y-m-d H:i:s');
        $JumlahPemesanan = $_POST['JumlahPemesanan']; 
        $IdBeratProduk = $_POST['IdBeratProduk']; 
        $TotalPenjualan = $_POST['TotalPenjualan']; 
        $nama_pemilik_rekening = $_POST['nama_pemilik_rekening']; 
        $tanggal_transfer = $_POST['tanggal_transfer']; 
        $no_rekening = $_POST['no_rekening']; 
        $bank_asal = $_POST['bank_asal'];
        $IdKonsumen = $_POST['IdKonsumen']; 
        $AlamatKonsumen = $_POST['AlamatKonsumen']; 
        $NegaraKonsumen = $_POST['NegaraKonsumen']; 
        $ProvinsiKonsumen = $_POST['ProvinsiKonsumen']; 
        $KabupatenKonsumen = $_POST['KabupatenKonsumen']; 
        $KotaKonsumen = $_POST['KotaKonsumen']; 
        $KecamatanKonsumen = $_POST['KecamatanKonsumen']; 
        $KelurahanKonsumen = $_POST['KelurahanKonsumen']; 
        $KodePosKonsumen = $_POST['KodePosKonsumen']; 
        $Ongkir = $_POST['Ongkir']; 
        $IdVoucher = $_POST['IdVoucher']; 
        $MetodePembayaran = $_POST['MetodePembayaran']; 
        $gambar_bukti_pembayaran = $_POST['Gambar']; 
        $total_harga_perproduk = $_POST['TotalPerProduk']; 
        $pesan_notifikasi ='Pembayaran Barang Atas Nama '.$nama_lengkap.' Dibuat. Dengan Jumlah Pemesanan '.$JumlahPemesanan.' Pack';
        $id_status_notifikasi = 2;
        $id_status_baca = 1;
        $id_user_baca = 2;
        $id_status_produk_dalam_proses = 3;
        $id_proses_pemesanan = 3;
        if($id_user!=''){
            $queryPenjualan = "INSERT INTO tb_penjualan(kode_penjualan, waktu_penjualan, id_produk, jumlah_penjualan, id_berat_produk, total_penjualan, id_user, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, ongkos_kirim, id_voucher, id_metode_pembayaran, nama_pemilik_rekening, tanggal_transfer, no_rekening, bank_asal, gambar_bukti_pembayaran, total_harga_perproduk )
                            VALUES('$IdPemesanan','$WaktuPemesanan','$IdProduk','$JumlahPemesanan','$IdBeratProduk','$TotalPenjualan','$IdKonsumen','$AlamatKonsumen','$NegaraKonsumen','$ProvinsiKonsumen','$KabupatenKonsumen','$KotaKonsumen','$KecamatanKonsumen','$KelurahanKonsumen','$KodePosKonsumen','$Ongkir','$IdVoucher','$MetodePembayaran','$nama_pemilik_rekening','$tanggal_transfer','$no_rekening','$bank_asal','$gambar_bukti_pembayaran','$total_harga_perproduk')";   
            $db->query($queryPenjualan);     
            $query = "UPDATE tb_pemesanan SET  nama_pemilik_rekening='$nama_pemilik_rekening', tanggal_transfer='$tanggal_transfer', no_rekening='$no_rekening', bank_asal='$bank_asal', id_proses_pemesanan='$id_proses_pemesanan' WHERE id_user = $id_user and id_proses_pemesanan='2'";
            $db->query($query);
            $queryBarangOnProgress = "UPDATE tb_produk_dalam_proses SET id_status_produk_dalam_proses = '$id_status_produk_dalam_proses', tanggal_dibeli = '$tanggal_dibeli' WHERE id_pemesanan = $id_pemesanan";
            $db->query($queryBarangOnProgress);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, kode_pemesanan)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca', '$IdPemesanan')";   
            $db->query($queryNotif); 
            echo "updateConfirmationPaymentTransferSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    
    if(isset($_GET['deleteImageConfirmationPaymentTransfer'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $gambar_bukti_pembayaran = ''; 
        $id_proses_pemesanan = 2;
        if($id_user!=''){

            $query = "UPDATE tb_pemesanan SET  gambar_bukti_pembayaran='$gambar_bukti_pembayaran' WHERE id_user = $id_user and id_proses_pemesanan =$id_proses_pemesanan" ;
            $db->query($query);

            echo "deleteImageConfirmationPaymentTransferSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['confirmationFormPicHalu'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        /*$kodeUnikPlus = $_POST['kodeUnikPlus'];*/
        $gambar_bukti_pembayaran = ''; 
        $id_proses_pemesanan = 2;
        if($id_user!=''){

            $query = "UPDATE tb_pemesanan SET  gambar_bukti_pembayaran='a' WHERE id_user = $id_user and id_proses_pemesanan =$id_proses_pemesanan" ;
            $db->query($query);

            echo "confirmationFormPicHaluSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['confirmationFormPicHaluLinkAja'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        /*$kodeUnikPlus = $_POST['kodeUnikPlus'];*/
        $gambar_bukti_pembayaran = ''; 
        $id_proses_pemesanan = 2;
        if($id_user!=''){

            $query = "UPDATE tb_pemesanan SET  gambar_bukti_pembayaran='../images/link-aja.png' WHERE id_user = $id_user and id_proses_pemesanan =$id_proses_pemesanan" ;
            $db->query($query);

            echo "confirmationFormPicHaluSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }


    /*retur*/
    /*process 1 >> select data to print data shipped*/
    if(isset($_GET['selectDataForConfirmationFinishShippedCheckPhoto'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_retur = 3;
        $query = "SELECT id_user_retur, gambar_barang_retur, id_status_retur, id_pemesanan from tb_retur_pembelian where id_user_retur='$id_user' and id_status_retur= 1 OR  id_status_retur='' ";
        $result = $db->query($query); 
        if($result){
            $selectDataForConfirmationFinishShippedCheckPhoto = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectDataForConfirmationFinishShippedCheckPhoto=json_encode($selectDataForConfirmationFinishShippedCheckPhoto);
            echo json_encode($selectDataForConfirmationFinishShippedCheckPhoto);
        }else{
            $selectDataForConfirmationFinishShippedCheckPhoto ='picHaluNull';
            echo json_encode($selectDataForConfirmationFinishShippedCheckPhoto);
        }
    }

    /*process 1 >> select data to print data shipped*/
    if(isset($_GET['selectDataForConfirmationFinishShipped'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $query = "SELECT kode_pemesanan, id_user, id_pemesanan, id_proses_pemesanan, waktu_pemesanan, waktu_batas_retur, waktu_batas_review, waktu_penerimaan from view_data_semua_pesanan where id_user='$id_user' and id_proses_pemesanan='5'";
        $result = $db->query($query); 


        if($result){
            $selectDataForConfirmationFinishShipped = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectDataForConfirmationFinishShipped=json_encode($selectDataForConfirmationFinishShipped);
            echo json_encode($selectDataForConfirmationFinishShipped);
        }else{
            $selectDataForConfirmationFinishShipped ='';
            echo json_encode($selectDataForConfirmationFinishShipped);
        }
    }

    if(isset($_GET['createDataRetur'])){ 
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_pemesanan = $_POST['f']; 
        $resultSearchDataByUser = $db->query("select * from view_root1_retur_pembelian where id_user='$id_user' and id_pemesanan!='id_pemesanan'");
        $rowCountByUser=$resultSearchDataByUser->num_rows;
        if($id_user!=0){  
            $queryDelete = "DELETE from tb_retur_pembelian WHERE  id_pemesanan='$id_pemesanan' and id_status_retur='2'";
            $db->query($queryDelete);       
            $resultLastID = $db->query("select max(id_retur) as last_data_retur FROM tb_retur_pembelian");
            $returDataLastID = $resultLastID->fetch_object();
            $returLast=$returDataLastID->last_data_retur;
            $kode_retur = $returLast + 1;
            $kode_text = 'TEST-DATA-23112020-RTDRN00T';
            /*$kode_text = 'RTDRN00';*/
            date_default_timezone_set('Asia/Jakarta');
            $waktu_retur = date('Y-m-d H:i:s'); 
            $id_produk  = 1;
            $id_status_retur  = 1;
            $picHalu = 'aHalu';
            $query = "INSERT INTO tb_retur_pembelian(kode_retur, id_pemesanan, waktu_retur, id_user_retur, id_status_retur, gambar_barang_retur)
                            VALUES('$kode_text$kode_retur','$id_pemesanan','$waktu_retur','$id_user','$id_status_retur', '$picHalu')";   
            $db->query($query);       
            echo "Success"; 
        }
        else{
            echo 'dataFound';
        }  
    }

    if(isset($_GET['deleteDataRetur'])){ 
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        if($id_user!=''){  
            $queryDelete = "DELETE from tb_retur_pembelian WHERE id_user_retur='$id_user' and id_status_retur='1'";
            $db->query($queryDelete);       
            echo "Success"; 
        }
        else{
            echo 'dataFound';
        }  
    }

    if(isset($_GET['updateDataFotoRetur'])){
        require '../config.php';
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        date_default_timezone_set('Asia/Jakarta');
        $datePic = date ("Y-m-d");
        $foto = $_FILES['foto']['name'];
        $fileFolder = '../images/retur/';
        $fileFolderSave = '../../../in/accounts-duren/images/retur/';
        $ekstensiAccept = array('png','jpg','jpeg','JPG');
        $xFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($xFoto));
        $location = $fileFolderSave.$datePic.$id_user.$foto;
        if(in_array($ekstensiFoto, $ekstensiAccept) === true){
            $queryUpdateFotoUser = "UPDATE tb_retur_pembelian SET gambar_barang_retur='$fileFolder$datePic$id_user$foto' WHERE id_user_retur = '$id_user' and pesan_retur IS NULL ";
            $db->query($queryUpdateFotoUser);
            move_uploaded_file($_FILES['foto']['tmp_name'], $location);
            echo "Success";   
        }
        else{
            echo "dataCheck";
        }
    }

    if(isset($_GET['selectToDataFotoRetur'])){
        $id_user = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_user_retur, gambar_barang_retur FROM tb_retur_pembelian where id_user_retur ='$id_user' and pesan_retur IS NULL";
        $result = $db->query($query); 
        if($result){
            $selectToDataFotoRetur = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectToDataFotoRetur=json_encode($selectToDataFotoRetur);
            echo json_encode($selectToDataFotoRetur);
        }else{
            $selectToDataFotoRetur ='';
            echo json_encode($selectToDataFotoRetur);
        }
    }

    if(isset($_GET['selectToDataFotoReturToAction'])){
        $id_user = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_user_retur, gambar_barang_retur, id_status_retur FROM tb_retur_pembelian where id_user_retur ='$id_user' and id_status_retur='1'";
        $result = $db->query($query); 
        if($result){
            $selectToDataFotoRetur = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectToDataFotoRetur=json_encode($selectToDataFotoRetur);
            echo json_encode($selectToDataFotoRetur);
        }else{
            $selectToDataFotoRetur ='';
            echo json_encode($selectToDataFotoRetur);
        }
    }

    if(isset($_GET['createDataReturProduct'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $pesan_retur = $_POST['dataPesanRetur']; 
        $id_pemesanan = $_POST['this']; 
        $id_proses_pemesanan = 7;
        $id_status_retur = 2;
        date_default_timezone_set('Asia/Jakarta');
        $waktu_retur = date('Y-m-d H:i:s'); 
        $callData = $db->query("select kode_pemesanan FROM tb_pemesanan WHERE id_pemesanan='$id_pemesanan'");
        $callDataToPrint = $callData->fetch_object();
        $kode_pemesanan = $callDataToPrint->kode_pemesanan;
        $pesan_notifikasi ='Penjualan Dengan Kode Transaksi: '.$kode_pemesanan.', Diajukan Retur Dengan Alasan: '.$pesan_retur;
        $id_status_notifikasi = 7;
        $id_status_baca = 1;
        $id_user_baca = 2;

        if($id_user!=''){
            $query = "UPDATE tb_retur_pembelian SET  waktu_retur='$waktu_retur', pesan_retur='$pesan_retur', id_status_retur='$id_status_retur' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($query);
            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($queryPemesanan);
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca, kode_pemesanan)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca', '$kode_pemesanan')";   
            $db->query($queryNotif); 

            echo "createDataReturProductSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['createConfirFinishData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        if($id_user!=''){
            $id_proses_pemesanan_update = 5;
            $id_proses_pemesanan_call_back = 9;
            date_default_timezone_set('Asia/Jakarta');
            $time = '18/11/2020 10:26';
            $currentTime = time(); 
            /*last Review Create Time*/
            $hoursToAddReturReviewLost = 24;
            $secondsToAddReturReviewLost = $hoursToAddReturReviewLost * (60 * 60);
            $createReturReviewLost = $currentTime + $secondsToAddReturReviewLost;
            $reviewReturReviewLost = date("Y-m-d H:i:s", $createReturReviewLost);
            /*last Retur Create Time*/
            $hoursToAddReturLost = 3;
            $secondsToAddReturLost = $hoursToAddReturLost * (60 * 60);
            $createReturLost = $currentTime + $secondsToAddReturLost;
            $reviewReturLost = date("Y-m-d H:i:s", $createReturLost);

            date_default_timezone_set('Asia/Jakarta');
            $waktu_penerimaan = date('Y-m-d H:i:s'); 

            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan_update', waktu_batas_retur='$reviewReturLost', waktu_batas_review='$reviewReturReviewLost', waktu_penerimaan = '$waktu_penerimaan' WHERE id_proses_pemesanan='$id_proses_pemesanan_call_back' and id_user ='$id_user'";
            $db->query($queryPemesanan);

            echo "createConfirFinishDataSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['createConfirReviewCustData'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_pemesanan = $_POST['b']; 
        $id_proses_pemesanan = 6;
        if($id_user!=''){
            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($queryPemesanan);

            echo "createConfirFinishDataSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    //komentar
    if(isset($_GET['selectCartDataToComment'])){
        $userDataID = $_SESSION['id_user'];
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT id_user, id_produk, id_pemesanan, id_proses_pemesanan FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan='6'";
        $result = $db->query($query); 
        if($result){
            $selectCartDataToComment = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $selectCartDataToComment=json_encode($selectCartDataToComment);
            echo json_encode($selectCartDataToComment);
        }else{
            $selectCartDataToComment ='';
            echo json_encode($selectCartDataToComment);
        }
    }

    if(isset($_GET['createDataCommentProduct'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        if($id_user==0){  
            echo 'dataFound';
        }
        else{
            $id_produk = $_POST['id_produk']; 
            $id_pemesanan = $_POST['id_pemesanan']; 
            $komentar = $_POST['DataInputComment']; 
            $id_bintang_penilaian_produk = $_POST['star']; 
            date_default_timezone_set('Asia/Jakarta');
            $tanggal_penilaian_produk = date('Y-m-d H:i:s'); 
            $id_proses_pemesanan = 7;

            $callData = $db->query("select kode_pemesanan FROM tb_pemesanan WHERE id_pemesanan='$id_pemesanan'");
            $callDataToPrint = $callData->fetch_object();
            $kode_pemesanan = $callDataToPrint->kode_pemesanan;
            /*$nama_lengkap = $callDataToPrint->nama_lengkap;*/
            $pesan_notifikasi ='Penjualan Dengan Kode Transaksi: '.$kode_pemesanan.', Telah Dikomentari: '.$komentar;
            $id_status_notifikasi = 6;
            $id_status_baca = 1;
            $id_user_baca = 2;

            $query = "INSERT INTO tb_penilaian_produk(tanggal_penilaian_produk, id_user, id_produk, id_bintang_penilaian_produk,komentar)
                            VALUES('$tanggal_penilaian_produk','$id_user','$id_produk','$id_bintang_penilaian_produk', '$komentar')";   
            $db->query($query);    
            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($queryPemesanan);  
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
            $db->query($queryNotif); 
            echo "Success"; 
        }  
    }

    if(isset($_GET['autoReviewFromHomeAdmin'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_status_user = $_SESSION['id_status_user'];
        if($id_user!=0 && $id_status_user==1){  
            $callData = $db->query("select kode_pemesanan, id_pemesanan, id_produk, waktu_penerimaan, waktu_batas_review, waktu_batas_retur, id_user FROM tb_pemesanan WHERE id_proses_pemesanan='5'");
            $rowCount = $callData->num_rows;
            if($rowCount>0){
                while($callDataToActionAuto=mysqli_fetch_array($callData)){
                    $kode_pemesanan = $callDataToActionAuto['kode_pemesanan'];
                    $id_produk = $callDataToActionAuto['id_produk'];
                    $waktu_penerimaan = $callDataToActionAuto['waktu_penerimaan'];
                    $waktu_batas_retur = $callDataToActionAuto['waktu_batas_retur'];
                    $waktu_batas_review = $callDataToActionAuto['waktu_batas_review'];
                    $id_pemesanan = $callDataToActionAuto['id_pemesanan'];
                    date_default_timezone_set('Asia/Jakarta');
                    $now = date('Y-m-d H:i:s'); 
                    $komentar = ''; 
                    if($now >= $waktu_penerimaan && $now > $waktu_batas_review){
                        $id_bintang_penilaian_produk = '5'; 
                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal_penilaian_produk = date('Y-m-d H:i:s'); 
                        $id_proses_pemesanan = 7;
                        $pesan_notifikasi ='Penjualan Dengan Kode Transaksi: '.$kode_pemesanan.', Telah Dikomentari: '.$komentar;
                        $id_status_notifikasi = 6;
                        $id_status_baca = 1;
                        $id_user_baca = 2;
                        $query = "INSERT INTO tb_penilaian_produk(tanggal_penilaian_produk, id_user, id_produk, id_bintang_penilaian_produk,komentar)
                                        VALUES('$tanggal_penilaian_produk','$id_user','$id_produk','$id_bintang_penilaian_produk', '$komentar')";   
                        $db->query($query);    
                        $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
                        $db->query($queryPemesanan);  
                        $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                                        VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
                        $db->query($queryNotif); 
                        echo "successActionAutoReview"; 
                    }
                    else{
                        echo 'notActionAutoReview';
                    }
                }
            }
            else{
                echo 'dataNotFound';
            } 
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }  
    }

    if(isset($_GET['autoReviewFromHome'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        if($id_user!=0){  
            $callData = $db->query("select kode_pemesanan, id_pemesanan, id_produk, waktu_penerimaan, waktu_batas_review, waktu_batas_retur, id_user FROM tb_pemesanan WHERE id_proses_pemesanan='5' and id_user='$id_user'");
            $rowCount = $callData->num_rows;
            if($rowCount>0){
                while($callDataToActionAuto=mysqli_fetch_array($callData)){
                    $kode_pemesanan = $callDataToActionAuto['kode_pemesanan'];
                    $id_produk = $callDataToActionAuto['id_produk'];
                    $waktu_penerimaan = $callDataToActionAuto['waktu_penerimaan'];
                    $waktu_batas_retur = $callDataToActionAuto['waktu_batas_retur'];
                    $waktu_batas_review = $callDataToActionAuto['waktu_batas_review'];
                    $id_pemesanan = $callDataToActionAuto['id_pemesanan'];
                    date_default_timezone_set('Asia/Jakarta');
                    $now = date('Y-m-d H:i:s'); 
                    $komentar = ''; 
                    if($now >= $waktu_penerimaan && $now > $waktu_batas_review){
                        $id_bintang_penilaian_produk = '5'; 
                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal_penilaian_produk = date('Y-m-d H:i:s'); 
                        $id_proses_pemesanan = 7;
                        $pesan_notifikasi ='Penjualan Dengan Kode Transaksi: '.$kode_pemesanan.', Telah Dikomentari: '.$komentar;
                        $id_status_notifikasi = 6;
                        $id_status_baca = 1;
                        $id_user_baca = 2;
                        $query = "INSERT INTO tb_penilaian_produk(tanggal_penilaian_produk, id_user, id_produk, id_bintang_penilaian_produk,komentar)
                                        VALUES('$tanggal_penilaian_produk','$id_user','$id_produk','$id_bintang_penilaian_produk', '$komentar')";   
                        $db->query($query);    
                        $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
                        $db->query($queryPemesanan);  
                        $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                                        VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
                        $db->query($queryNotif); 
                        echo "successActionAutoReview"; 
                    }
                    else{
                        echo 'notActionAutoReview';
                    }
                }
            }
            else{
                echo 'dataNotFound';
            } 
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }  
    }

    /*if(isset($_GET['autoReviewFromHome'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        if($id_user!=0){  
            $callData = $db->query("select kode_pemesanan, id_produk, waktu_penerimaan, waktu_batas_review, waktu_batas_retur FROM tb_pemesanan WHERE id_proses_pemesanan='5' and id_user = '$id_user'");
            $callDataToActionAuto = $callData->fetch_object();
            $kode_pemesanan = $callDataToActionAuto->kode_pemesanan;
            $id_produk = $callDataToActionAuto->id_produk;
            $waktu_penerimaan = $callDataToActionAuto->waktu_penerimaan;
            $waktu_batas_retur = $callDataToActionAuto->waktu_batas_retur;
            $waktu_batas_review = $callDataToActionAuto->waktu_batas_review;
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s'); 
            $komentar = ''; 
            if($kode_pemesanan!=''){
                if($now >= $waktu_penerimaan && $now > $waktu_batas_review){
                    $id_bintang_penilaian_produk = '5'; 
                    date_default_timezone_set('Asia/Jakarta');
                    $tanggal_penilaian_produk = date('Y-m-d H:i:s'); 
                    $id_proses_pemesanan = 7;
                    $pesan_notifikasi ='Penjualan Dengan Kode Transaksi: '.$kode_pemesanan.', Telah Dikomentari: '.$komentar;
                    $id_status_notifikasi = 6;
                    $id_status_baca = 1;
                    $id_user_baca = 2;
                    $query = "INSERT INTO tb_penilaian_produk(tanggal_penilaian_produk, id_user, id_produk, id_bintang_penilaian_produk,komentar)
                                    VALUES('$tanggal_penilaian_produk','$id_user','$id_produk','$id_bintang_penilaian_produk', '$komentar')";   
                    $db->query($query);    
                    $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
                    $db->query($queryPemesanan);  
                    $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                                    VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
                    $db->query($queryNotif); 
                    echo "successActionAutoReview"; 
                }
                else{
                    echo 'notActionAutoReview';
                }
            }
            else{
                echo 'dataNotFound';
            }  
        }
        else{
            header('Location: https://kingfruit.co.id/');
        }  
    }*/

    if(isset($_GET['autoReviewFromCart'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        if($id_user!=0){  
            $id_pemesanan = $_POST['b']; 
            $callData = $db->query("select kode_pemesanan, id_produk FROM tb_pemesanan WHERE id_pemesanan='$id_pemesanan'");
            $callDataToPrint = $callData->fetch_object();
            $kode_pemesanan = $callDataToPrint->kode_pemesanan;
            $id_produk = $callDataToPrint->id_produk;
            $komentar = ''; 
            $id_bintang_penilaian_produk = '5'; 
            date_default_timezone_set('Asia/Jakarta');
            $tanggal_penilaian_produk = date('Y-m-d H:i:s'); 
            $id_proses_pemesanan = 7;
            $pesan_notifikasi ='Penjualan Dengan Kode Transaksi: '.$kode_pemesanan.', Telah Dikomentari: '.$komentar;
            $id_status_notifikasi = 6;
            $id_status_baca = 1;
            $id_user_baca = 2;
            $query = "INSERT INTO tb_penilaian_produk(tanggal_penilaian_produk, id_user, id_produk, id_bintang_penilaian_produk,komentar)
                            VALUES('$tanggal_penilaian_produk','$id_user','$id_produk','$id_bintang_penilaian_produk', '$komentar')";   
            $db->query($query);    
            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($queryPemesanan);  
            $queryNotif = "INSERT INTO tb_notifikasi(pesan_notifikasi, id_status_notifikasi, id_status_baca, id_user_baca)
                            VALUES('$pesan_notifikasi','$id_status_notifikasi','$id_status_baca','$id_user_baca')";   
            $db->query($queryNotif); 
            echo "Success"; 
        }
        else{
            echo 'dataFound';
        }  
    }
}

else{
    header('Location: https://kingfruit.co.id/');
}

?>