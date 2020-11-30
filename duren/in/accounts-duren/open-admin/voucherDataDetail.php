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
            Detail Data Voucher
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            <form >
                <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
                    <div>
                        <div>
                            <a id="a_gambar_voucher_detail" alt="Download Gambar" download>
                                <img id="gambar_voucher_detail" title="Download Gambar" alt="Download Gambar" class="lazy centerImg" accept="image/x-png,image/jpeg" >
                            </a>
                        </div>
                        <div class="" style="margin-top: 15px;">  
                            <div class="margin-auto">
                                <div class="text-buttonSelectPic" style="font-weight: bold;">
                                    Gambar Voucher
                                </div>
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
                                    Kode Voucher
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="kode_voucher_detail"  style="color: #737373" id="kode_voucher_detail" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Judul Voucher
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="judul_voucher_detail" style="color: #737373" id="judul_voucher_detail" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Jenis Voucher
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="jenis_voucher_detail" style="color: #737373" id="jenis_voucher_detail" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Waktu Berlaku
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                 <input type="text" name="waktu_berlaku_detail"  style="color: #737373" id="waktu_berlaku_detail" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Status Kirim 
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="status_kirim_konsumen_detail" style="color: #737373" id="status_kirim_konsumen_detail" class="input-textDataUser-false"  disabled>
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
<script src="../js/pages/admin/voucherDataDetail.js?v=1.1.1"></script>
</body>
</html>