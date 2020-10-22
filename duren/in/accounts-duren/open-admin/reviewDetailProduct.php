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

    @media(min-width: 870px){
        .picProfile{
            margin-top: 28px;
        }
    }
</style>
</head>
<body>
<div class="divPositionContentTop">
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
            Detail Review Produk
            <input type="hidden" name="a" id="a" value="<?php echo $kodeCallBack;?>">
        </div>
    </div>
    <div class="col-divProfileUser">
        <div class="row">
            <form method="POST" id="cartDataPaymentDetailAdminForm">
                <div class="col-UserDataEdit-right col-lg-4 col-md-6 col-sm-6">
                    <div>
                        <div>
                            <a id="fotoDownload" alt="Download Gambar" download>
                                <img id="foto" title="Download Gambar" alt="Download Gambar" class="picProfile lazy centerImg" accept="image/x-png,image/jpeg" >
                            </a>
                        </div>
                        <div class="" style="margin-top: 15px;">  
                            <div class="margin-auto">
                                <div class="text-buttonSelectPic" style="font-weight: bold;">
                                    Foto Konsumen
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                <div>
                    <form method="POST" id="updateDataUser">
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Waktu Review
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="tanggal_penilaian_produk"  style="color: #737373" id="tanggal_penilaian_produk" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Konsumen
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="nama_lengkap" style="color: #737373" id="nama_lengkap" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Produk
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <input type="text" name="nama_produk" style="color: #737373" id="nama_produk" class="input-textDataUser-false" disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Bintang Review
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                 <input type="text" name="bintang_penilaian_produk"  style="color: #737373" id="bintang_penilaian_produk" class="input-textDataUser-false"  disabled>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Pesan Review
                                </div>
                            </div>
                            <div class="card-inputDataUser-false">
                                <div class="card-inputDataUser-false">
                                    <textarea style="color: #737373; height: auto;" name="komentar" id="komentar" class="input-textDataUser-false" disabled></textarea>
                                </div>
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
<script type="text/javascript" src="../js/pages/admin/reviewDetailProduct.js?v=1.4.1"></script>
</body>
</html>