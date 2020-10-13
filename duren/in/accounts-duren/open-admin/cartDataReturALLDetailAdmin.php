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
    height: 250px;
}

.hiddenReturConfir{
    display: none;
}

.floatRightbutton {
    float: right;
    padding-left: 20px;
}

.input-textDataUser-false {
    width: 100%;
    height: 30px;
    color: #000;
    padding-left: 5px;
    padding-right: 5px;
    border: 0px solid #969191;
    background-color: white;
    border-radius: 3px;
}

</style>
</head>
<body>
<div class="divPositionContentTop">
    <div id="contentRetur">
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
                Detail Data Retur
            </div>
            <input type="hidden" name="a" id="a" value="<?= $kodeCallBack; ?>">
        </div>
        <div class="col-divProfileUser">
            <div class="row">
                <div class="col-UserDataEdit-right col-lg-4 col-md-4 col-sm-4">
                    <div>
                        <div>
                            <a id="a_gambar_barang_retur" alt="Download Gambar" download>
                                <img id="gambar_barang_retur" title="Download Gambar" alt="Download Gambar" class="lazy centerImg" accept="image/x-png,image/jpeg" >
                            </a>
                        </div>
                        <div class="" style="margin-top: 15px;">  
                            <div class="margin-auto">
                                <div class="text-buttonSelectPic" style="font-weight: bold;">
                                    Foto Bukti Barang Retur
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-UserDataEdit-left col-lg-8 col-md-8 col-sm-8">
                    <div>
                        <form method="POST" id="updateDataUser">
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Kode Retur
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                    <input type="text" name="kode_retur"  style="color: #737373" id="kode_retur" class="input-textDataUser-false" disabled>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Waktu Retur
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                    <input type="text" name="waktu_retur" style="color: #737373" id="waktu_retur" class="input-textDataUser-false"  disabled>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Nama Konsumen
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
                                        Pesan Retur
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                    <textarea style="color: #737373; height: auto;" name="pesan_retur" id="pesan_retur" class="input-textDataUser-false" disabled></textarea>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Status Retur
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                     <input type="text" name="status_retur"  style="color: #737373" id="status_retur" class="input-textDataUser-false"  disabled>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Tanggal Pengembalian
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                     <input type="text" name="admin_tanggal_transfer"  style="color: #737373" id="admin_tanggal_transfer" class="input-textDataUser-false"  disabled>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Total Pengembalian
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                    <input type="text" name="admin_total_pengembalian_dana" style="color: #737373" id="admin_total_pengembalian_dana" class="input-textDataUser-false"  disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script src="../js/pages/admin/cartDataReturDetailAdminAll.js?v=1.3.1"></script>
<!-- <script type="text/javascript" src="../js/pages/uploadDataFotoTransferAdmin.js"></script> -->
<!-- <div id="openupdatefoto" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Foto</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Gambar Transfer
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input  type="file" id="foto" name="foto" class="img-inputData" style="height:45px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" accept=".jpg,.png" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="button" id="btnUpdateFoto"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
</body>

</html>