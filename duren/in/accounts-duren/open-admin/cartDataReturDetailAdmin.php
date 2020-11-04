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

.hiddenReturConfir{
    display: none;
}

.floatRightbutton {
    float: right;
    padding-left: 20px;
}

.buttonLargeGreen{
    width: 100%;
    height: 40px;
    font-size: 16px;
    color: white;
    background-color: #2d472c;
    border-style: none;
    border-radius: 5px;
    border: 1px solid #2d472c;
}

.buttonLargeGreen:hover{
    width: 100%;
    height: 40px;
    font-size: 16px;
    color: #2d472c;
    background-color: white;
    border-style: none;
    border-radius: 5px;
    border: 1px solid #2d472c;
}

.buttonLargeRed{
    width: 100%;
    height: 40px;
    font-size: 16px;
    color: white;
    background-color: #f93434;
    border-style: none;
    border-radius: 5px;
    border: 1px solid #f93434;
}

.buttonLargeRed:hover{
    width: 100%;
    height: 40px;
    font-size: 16px;
    color: #f93434;
    background-color: white;
    border-style: none;
    border-radius: 5px;
    border: 1px solid #f93434;
}

.textOrRetur{
    padding-bottom: 15px;
    text-align: center;
    font-weight: bold;
    font-style: italic;
    font-size: 18px;
}

.input-textDataUser {
    width: 100%;
    height: 30px;
    color: #000;
    border: transparent;
    padding-left: 5px;
    padding-right: 5px;
    border-bottom: 1px solid #969191;
    border-radius: 0px;
}


</style>
</head>
<body>
<div class="divPositionContentTop">
    <div class="hiddenReturConfir" id="hiddenReturConfir" style="display: none;">
        <form method="post" id="confirmationFormDataTransfer">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black">
                    Pengembalian Produk
                    <input type="hidden" name="a" id="a" value="<?= $kodeCallBack; ?>">
                    <input type="hidden" name="kode_pemesanan_call_back" id="kode_pemesanan_call_back">
                </div>
            </div>
            <div class="padLeft20CartData">
                <div class="col-divCartData">
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Nama Pemilik Rekening
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="text" name="admin_nama_pemilik_rekening" id="admin_nama_pemilik_rekening" class="input-textDataUser" >
                           <!--  <input type="hidden" name="foto_check" id="foto_check" class="input-textDataUser" > -->
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Tanggal Transfer
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="date" name="admin_tanggal_transfer" id="admin_tanggal_transfer" class="input-textDataUser">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                No. Rekening
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="number" name="admin_nomor_rekening" id="admin_nomor_rekening" class="input-textDataUser" >
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Asal Bank Transfer
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="text" name="admin_bank_asal"  id="admin_bank_asal" class="input-textDataUser" >
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="w20 textDataUser">
                                Total Pengembalian
                            </div>
                        </div>
                        <div class="w80 card-inputDataUser">
                            <input type="number" name="admin_total_pengembalian_dana"  id="admin_total_pengembalian_dana" class="input-textDataUser" >
                        </div>
                    </div>
                    <!-- <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser textBukti">
                                Bukti Transfer
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <div class="imgBukti">
                                <img id="dataFotoPayment" data-toggle="modal" data-target="#openupdatefoto" src="../images/uploadImage.png" width="200" style="cursor: pointer;">
                                <div class="textbottomImgBukti">Klik Untuk Upload / Ganti</div>
                            </div>

                        </div>
                    </div> -->
                    <div class="Card-inputDataUser-paddingTopBottom20px" style="margin-top: 10px;">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                              
                            </div>
                        </div>
                        <div class="card-inputDataUser" style="padding-bottom: 100px;">
                            <div class="floatRightbutton">
                                <button class="buttonLarge-green" type="button" id="btnSaveConfir">SIMPAN</button>
                            </div>
                            <div class="floatRightbutton">
                                <button class="buttonLarge-red" type="button" id="btnCancelConfir">BATAL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="contentRetur">
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
                Detail Pengajuan Retur
            </div>
        </div>
        <div class="col-divProfileUser">
            <div class="row">
                <div class="col-UserDataEdit-right col-lg-4 col-md-4 col-sm-4">
                    <div>
                        <div>
                            <a id="a_gambar_barang_retur" alt="Download Gambar" download>
                                <img id="gambar_barang_retur" title="Download Gambar" alt="Download Gambar" class="lazy centerImg" accept="image/x-png,image/jpeg" style="height: auto;">
                            </a>
                        </div>
                        <div class="" style="margin-top: 15px;">  
                            <div class="margin-auto">
                                <div class="text-buttonSelectPic" style="font-weight: bold;">
                                    Foto Bukti Barang
                                </div>
                            </div>
                        </div>
                        <div class="card-buttonSelectPic">
                            <div class="margin-auto">
                                <button class="buttonLargeGreen" id="btnHiddenReturConfir" type="button" >Setujui Pengajuan</button>
                            </div>
                        </div>  
                        <div class="textOrRetur">
                            Or
                        </div>
                        <form method="post" id="confirmationFormDataRefuse">
                            <div class="card-buttonSelectPic" style="padding-top: 0px;">
                                <div class="margin-auto">
                                    <input type="hidden" name="b" id="b" value="<?= $kodeCallBack; ?>">
                                    <input type="hidden" name="kode_pemesanan_call_back_refuse" id="kode_pemesanan_call_back_refuse">
                                    <button class="buttonLargeRed" type="button" id="btnRefuseRetur" type="button" >Tolak Pengajuan</button>
                                </div>
                            </div>  
                        </form>
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
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Total Pembayaran
                                    </div>
                                </div>
                                <div class="card-inputDataUser-false">
                                    <input type="text" name="total_harga_yang_harus_dibayar" style="color: #737373" id="total_harga_yang_harus_dibayar" class="input-textDataUser-false"  disabled>
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
<script src="../js/pages/admin/cartDataReturDetailAdmin.js?v=1.4.1"></script>
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