<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
    }
    if($_SESSION['id_status_user']!="1"){
        die("<script language='javascript'>alert('Anda Bukan Andmin / Manager'); document.location='../../../login'</script>");
    }
    $id_user = $_SESSION['id_user'];
    $kodeCallBack = $_GET['id'];
?>
<title></title>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<!-- css datatables -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
<style type="text/css">
    .centerImg {
        display: block;
        margin: auto;
        width: 250px;
        height: auto;
    }
</style>
</head>
<body>
<div class="divPositionContentTop">
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
            Detail Konfirmasi Pembayaran
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            <form method="post" id="cartDataPaymentDetailAdminForm">
                <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
                    <div>
                        <div>
                            <a id="a_gambar_bukti_pembayaran" alt="Download Gambar" download>
                                <img id="gambar_bukti_pembayaran" title="Download Gambar" alt="Download Gambar" class="lazy centerImg" accept="image/x-png,image/jpeg" >
                            </a>
                        </div>
                        <div class="" style="margin-top: 15px;">  
                            <div class="margin-auto">
                                <div class="text-buttonSelectPic" style="font-weight: bold;">
                                    Foto Bukti Transaksi Pembayaran Konsumen
                                </div>
                            </div>
                        </div>
                        <div class="card-buttonSelectPic">
                            <div class="margin-auto">
                                <button class="buttonLarge-grey" id="cartDataPaymentDetailAdminButton" >Konfirmasi</button>
                            </div>
                        </div>  
                        <input type="hidden" name="a" id="a" value="<?= $kodeCallBack; ?>">
                    </div>
                </div>
            </form>
            <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                <div>
                    <form method="POST" id="updateDataUser">
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kode Pemesanan
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="kode_pemesanan"  style="color: #737373" id="kode_pemesanan" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Waktu Pemesanan
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="waktu_pemesanan" style="color: #737373" id="waktu_pemesanan" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Lengkap
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="nama_lengkap" style="color: #737373" id="nama_lengkap" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    E-mail
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                 <input type="text" name="email"  style="color: #737373" id="email" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. HP
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="nomor_hp" style="color: #737373" id="nomor_hp" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Alamat
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <textarea style="color: #737373; height: auto;" name="alamat" id="alamat" class="input-textDataUser-false" disabled></textarea>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Teks Berat Produk
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="teks_berat_produk" style="color: #737373" id="teks_berat_produk" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Ongkos Kirim
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="ongkos_kirim" style="color: #737373" id="ongkos_kirim" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Total Pembayaran
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="total_harga_yang_harus_dibayar" style="color: #737373" id="total_harga_yang_harus_dibayar" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Pemilik Rekening
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                 <input type="text" name="nama_pemilik_rekening"  style="color: #737373" id="nama_pemilik_rekening" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Tanggal Transfer
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="tanggal_transfer" style="color: #737373" id="tanggal_transfer" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. Rekening
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="no_rekening" style="color: #737373" id="no_rekening" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Bank Asal
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="bank_asal" style="color: #737373" id="bank_asal" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script src="../js/pages/admin/cartDataPaymentDetailAdmin.js?v=1.3.1"></script>
<script type="text/javascript" src="../js/pages/admin/cartDataPaymentConfirmationAdmin.js?v=1.3.1"></script>

</body>

</html>