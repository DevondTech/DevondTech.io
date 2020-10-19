<?php	
session_start();
$id_user = $_SESSION['id_user'];
if($id_user!=''){

    if(isset($_GET['updateConfirmationReturTransfer'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $admin_tanggal_transfer = $_POST['admin_tanggal_transfer'];
        $admin_nama_pemilik_rekening = $_POST['admin_nama_pemilik_rekening']; 
        $admin_nomor_rekening = $_POST['admin_nomor_rekening']; 
        $admin_bank_asal = $_POST['admin_bank_asal']; 
        $admin_total_pengembalian_dana = $_POST['admin_total_pengembalian_dana']; 
        $id_retur = $_POST['a']; 
        $id_status_retur = 2;
        if($id_user!=''){
            $query = "UPDATE tb_retur_pembelian SET  admin_nama_pemilik_rekening='$admin_nama_pemilik_rekening', admin_tanggal_transfer='$admin_tanggal_transfer', admin_nomor_rekening='$admin_nomor_rekening', admin_bank_asal='$admin_bank_asal', admin_total_pengembalian_dana='$admin_total_pengembalian_dana', id_status_retur='$id_status_retur' WHERE id_retur = '$id_retur' ";
            $db->query($query);
            echo "updateConfirmationReturTransferSuccess";   
        }
        else{
            echo "erorDATA";
        }
    }

    if(isset($_GET['confirmationFormDataRefuse'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $id_retur = $_POST['b']; 
        $id_status_retur = 3;
        $admin_total_pengembalian_dana = 0;
        if($id_user!=''){
            $query = "UPDATE tb_retur_pembelian SET admin_total_pengembalian_dana='$admin_total_pengembalian_dana', id_status_retur='$id_status_retur' WHERE id_retur = '$id_retur' ";
            $db->query($query);
            echo "confirmationFormDataRefuseSuccess";   
        }
        else{
            echo "erorDATA";
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
        $query = "SELECT kode_pemesanan, waktu_pemesanan, id_user, username, nama_lengkap, email, nomor_hp, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, pesan_pemesanan, id_proses_pemesanan, proses_pemesanan, id_produk, nama_produk, detail1_produk, jenis_produk, jumlah_pemesanan, harga, diskon, harga_setelah_diskon, total_harga_perproduk, ongkos_kirim, total_harga_yang_harus_dibayar, gambar1_produk, id_satuan_produk, satuan_produk, id_berat_produk, teks_berat_produk, konfersi_berat_produk_perkilogram, id_voucher, kode_voucher, jenis_voucher, total_voucher, waktu_berlaku,  status_voucher, metode_pembayaran, kode_link_pembayaran, pesan_bukti_pembayaran, gambar_bukti_pembayaran, nama_pemilik_rekening,
tanggal_transfer, no_rekening, bank_asal FROM view_data_semua_pesanan where id_user ='$userDataID' and id_proses_pemesanan = '2'";
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
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $query = "SELECT * FROM rt_berat_produk_pemesanan";
        $result = $db->query($query); 
        $selectDataWeightProduct = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $selectDataWeightProduct=json_encode($selectDataWeightProduct);
        echo json_encode($selectDataWeightProduct);
    }

    if(isset($_GET['updateCheckOutByUser'])){
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

        $userData =''; $query = "select * from tb_login_user where id_user='$id_user'"; 
        $result = mysqli_query($db,$query);
        $baris= mysqli_fetch_array($result);
        $cekKOde= $baris['kode'];
        if($cekKOde=='c47907abd2a80492ca9388b05c0e382518ff3960'){
            if($alamatInput!=''){
                $query = "UPDATE tb_pemesanan SET  jumlah_pemesanan='$jumlah_pemesanan', alamat='$alamatInput', negara='$negaraInput', provinsi='$provinsiInput', kabupaten='$kabupatenInput', kota='$kotaInput', kecamatan='$kecamatanInput', kelurahan='$kelurahanInput', kode_pos='$dataKodePos', id_berat_produk='$id_berat_produk', id_proses_pemesanan='$id_proses_pemesanan', ongkos_kirim='$ongkir', total_harga_perproduk='$total_harga_pemesanan', total_harga_yang_harus_dibayar='$totalBayarKeseluruhan' WHERE id_user = $id_user and id_proses_pemesanan='1'";
                $db->query($query);

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
        $resultSearchDataByUser = $db->query("select * from tb_pemesanan where id_user='$id_user' and id_proses_pemesanan!='7'");
        $rowCountByUser=$resultSearchDataByUser->num_rows;
        if($rowCountByUser==0){  
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
        $IdPemesanan = $_POST['IdPemesanan']; 
        $IdProduk = $_POST['IdProduk']; 
        date_default_timezone_set('Asia/Jakarta');
        $WaktuPemesanan = date('Y-m-d H:i:s');
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

        $id_proses_pemesanan = 3;
        if($id_user!=''){
            $queryPenjualan = "INSERT INTO tb_penjualan(kode_penjualan, waktu_penjualan, id_produk, jumlah_penjualan, id_berat_produk, total_penjualan, id_user, alamat, negara, provinsi, kabupaten, kota, kecamatan, kelurahan, kode_pos, ongkos_kirim, id_voucher, metode_pembayaran, nama_pemilik_rekening, tanggal_transfer, no_rekening, bank_asal, gambar_bukti_pembayaran, total_harga_perproduk )
                            VALUES('$IdPemesanan','$WaktuPemesanan','$IdProduk','$JumlahPemesanan','$IdBeratProduk','$TotalPenjualan','$IdKonsumen','$AlamatKonsumen','$NegaraKonsumen','$ProvinsiKonsumen','$KabupatenKonsumen','$KotaKonsumen','$KecamatanKonsumen','$KelurahanKonsumen','$KodePosKonsumen','$Ongkir','$IdVoucher','$MetodePembayaran','$nama_pemilik_rekening','$tanggal_transfer','$no_rekening','$bank_asal','$gambar_bukti_pembayaran','$total_harga_perproduk')";   
            $db->query($queryPenjualan);     
            $query = "UPDATE tb_pemesanan SET  nama_pemilik_rekening='$nama_pemilik_rekening', tanggal_transfer='$tanggal_transfer', no_rekening='$no_rekening', bank_asal='$bank_asal', id_proses_pemesanan='$id_proses_pemesanan' WHERE id_user = $id_user and id_proses_pemesanan='2'";
            $db->query($query);
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


    /*retur*/
    /*process 1 >> select data to print data shipped*/
    if(isset($_GET['selectDataForConfirmationFinishShipped'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $query = "SELECT kode_pemesanan, id_user, id_pemesanan, id_proses_pemesanan from tb_pemesanan where id_user='$id_user' and id_proses_pemesanan='5'";
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
            $queryDelete = "DELETE from tb_retur_pembelian WHERE  id_pemesanan='$id_pemesanan'";
            $db->query($queryDelete);       
            $resultLastID = $db->query("select max(id_retur) as last_data_retur FROM tb_retur_pembelian");
            $returDataLastID = $resultLastID->fetch_object();
            $returLast=$returDataLastID->last_data_retur;
            $kode_retur = $returLast + 1;
            $kode_text = 'RTDR0';
            date_default_timezone_set('Asia/Jakarta');
            $waktu_retur = date('Y-m-d H:i:s'); 
            $id_produk  = 1;
            $id_status_retur  = 1;
            $query = "INSERT INTO tb_retur_pembelian(kode_retur, id_pemesanan, waktu_retur, id_user_retur, id_status_retur)
                            VALUES('$kode_text$kode_retur','$id_pemesanan','$waktu_retur','$id_user','$id_status_retur')";   
            $db->query($query);       
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

    if(isset($_GET['createDataReturProduct'])){
        require '../config.php'; 
        $json = json_decode(file_get_contents('php://input'), true);
        $id_user = $_SESSION['id_user'];
        $pesan_retur = $_POST['dataPesanRetur']; 
        $id_pemesanan = $_POST['d']; 
        $id_proses_pemesanan = 7;
        date_default_timezone_set('Asia/Jakarta');
        $waktu_retur = date('Y-m-d H:i:s'); 
        if($id_user!=''){
            $query = "UPDATE tb_retur_pembelian SET  waktu_retur='$waktu_retur', pesan_retur='$pesan_retur' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($query);
            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($queryPemesanan);

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
        if($id_user!=0){  
            $id_produk = $_POST['id_produk']; 
            $id_pemesanan = $_POST['id_pemesanan']; 
            $komentar = $_POST['DataInputComment']; 
            $id_bintang_penilaian_produk = $_POST['star']; 
            date_default_timezone_set('Asia/Jakarta');
            $tanggal_penilaian_produk = date('Y-m-d H:i:s'); 
            $id_proses_pemesanan = 7;
            $query = "INSERT INTO tb_penilaian_produk(tanggal_penilaian_produk, id_user, id_produk, id_bintang_penilaian_produk,komentar)
                            VALUES('$tanggal_penilaian_produk','$id_user','$id_produk','$id_bintang_penilaian_produk', '$komentar')";   
            $db->query($query);    
            $queryPemesanan = "UPDATE tb_pemesanan SET  id_proses_pemesanan='$id_proses_pemesanan' WHERE id_pemesanan='$id_pemesanan'";
            $db->query($queryPemesanan);  

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