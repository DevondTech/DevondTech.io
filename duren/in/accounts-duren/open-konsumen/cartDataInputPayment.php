<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
    }
    if($_SESSION['id_status_user']!="5"){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
    }
    $id_user = $_SESSION['id_user'];
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
<style type="text/css">

    /*.textDataUser {
        text-align: end;
        padding-right: 20px;
        padding-top: 5px;
        float: left;
    }*/

    .card-textDataUser {
        width: 20%;
        float: left;
    }

    .floatRightbutton {
        float: right;
        padding-left: 20px;
    }

    .inputTotalHarga{
        margin-top: -3px;
    }

    .cardBorderBottomGrey{
        border-bottom: 1px solid #887777;
    }

    .cardAction{
        border: 1px solid #a2a2a2;
        border-radius: 5px;
        margin-top: 30px;
    }

    .m30{
        margin: 30px;
    }

    .positionTextDetailOrder{
        width: 100%;
        display: flex;
        padding-bottom: 10px;
    }

    .w150{
        width: 150px;
    }

    .positionTextDetailOrder{
        width: 100%;
        display: flex;
        padding-bottom: 10px;
    }

    .textTotalHarga{
        float: left;
        font-size: 16px;
    }

    .floatLeftCartData{
        float: left;
    }

    .buttonOrderAlamatCartData{
        background-color: #2d472c;
        border: 1px solid #2d472c;
        color: white;
        height: 32px;
        border-radius: 4px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
    }

    .buttonOrderAlamatCartData:hover{
        background-color: white;
        border: 1px solid #2d472c;
        color: #2d472c;
        height: 32px;
        border-radius: 4px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .widthBorder2{
        width: 70%;
    }

    .titleDataPembayaran{
        font-weight: bold;
        padding-bottom: 10px;
    }

    .textRekning{
        margin-top: 35px;
        float: left;
        font-size: 21px;
        font-weight: bold;
    }

    .imgBCA{
        width: 100px;
        margin-left: -5px;
    }

    .textbottomImgBukti{
        text-align: center;
        width: 200px;
        font-weight: bold;
        margin-top: 10px;
    }

    .m130{
        margin-bottom: 130px;
    }

    @media(max-width: 767px){

        .imgBukti{
            margin-top: 40px;
        }

        .textBukti{
            font-weight: bold;
        }

        .textDataUser {
            float: left;
            text-align: initial;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            width: 200px;
        }
        
        /*.textDataUser{
            width: 300px;
            float: left;
        }*/

        .inputTotalHarga{
            margin-top: -6px;
        }

        .imgBCA{
            width: 70px;
        }

        .textRekning{
            margin-top: 30px;
            float: left;
            font-size: 16px;
            font-weight: bold;
        }

        .textTotalHarga{
            float: left;
            font-size: 16px;
        }

        .buttonCheckoutPosition{
            margin-top: 20px;
        }

        .positionTextDetailOrder{
            width: 100%;
            display: flex;
            padding-bottom: 0px;
        }

        .w150{
            width: 130px;
        }

        .positionTextDetailOrder{
            width: 100%;
            display: flex;
            padding-bottom: 0px;
        }

        .textTotalHarga{
            float: left;
            font-size: 12px;
        }

        .widthBorder2{
            width: 70%;
        }

    }

    
    @media(max-width: 448px){

        .widthBorder2{
            width: 100%;
        }

        .m130{
            margin-bottom: 80px;
        }
    }


</style>
</head>
<body class="bd-w">
<div class="divPositionContentTop" style="padding-bottom: 100px;">
    <div class="hiddenAlamatUpdate" id="confirmationDataCard" >
        <form method="post" id="confirmationFormDataTransfer">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black">
                    Konfirmasi Pembayaran
                    <input type="hidden" name="IdPemesanan" id="IdPemesanan">
                    <input type="hidden" name="IdProduk" id="IdProduk">
                    <input type="hidden" name="WaktuPemesanan" id="WaktuPemesanan">
                    <input type="hidden" name="JumlahPemesanan" id="JumlahPemesanan">
                    <input type="hidden" name="IdBeratProduk" id="IdBeratProduk">
                    <input type="hidden" name="TotalPenjualan" id="TotalPenjualan">
                    <input type="hidden" name="IdKonsumen" id="IdKonsumen">
                    <input type="hidden" name="AlamatKonsumen" id="AlamatKonsumen">
                    <input type="hidden" name="NegaraKonsumen" id="NegaraKonsumen">
                    <input type="hidden" name="ProvinsiKonsumen" id="ProvinsiKonsumen">
                    <input type="hidden" name="KabupatenKonsumen" id="KabupatenKonsumen">
                    <input type="hidden" name="KotaKonsumen" id="KotaKonsumen">
                    <input type="hidden" name="KecamatanKonsumen" id="KecamatanKonsumen">
                    <input type="hidden" name="KelurahanKonsumen" id="KelurahanKonsumen">
                    <input type="hidden" name="KodePosKonsumen" id="KodePosKonsumen">
                    <input type="hidden" name="Ongkir" id="Ongkir">
                    <input type="hidden" name="IdVoucher" id="IdVoucher">
                    <input type="hidden" name="MetodePembayaran" id="MetodePembayaran">
                    <input type="hidden" name="Gambar" id="Gambar">
                    <input type="hidden" name="TotalPerProduk" id="TotalPerProduk">   
                </div>
            </div>
            <div class="padLeft20CartData">
                <div class="col-divCartData">
                    <div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Bukti Pembayaran
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div class="imgBukti">
                                    <img id="dataFotoPayment" data-toggle="modal" data-target="#uploadModal" src="../images/uploadImage.png" width="200" style="cursor: pointer;">
                                    <div class="textbottomImgBukti" style="color: transparent;">Klik Untuk Upload / Ganti</div>
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Pemilik Rekening
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="text" name="nama_pemilik_rekening" id="nama_pemilik_rekening" class="input-textDataUser"  style="border:transparent;">
                                    <input type="hidden" name="foto_check" id="foto_check" class="input-textDataUser" >
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Tanggal Transfer
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="date" name="tanggal_transfer" id="tanggal_transfer" class="input-textDataUser" style="border:transparent;">
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    No. Rekening
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="number" name="no_rekening" id="no_rekening" class="input-textDataUser"  style="border:transparent;">
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px" >
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Asal Bank Transfer
                                </div>
                            </div>
                            <div class="card-inputDataUser" style="padding-bottom: 20px;">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="text" name="bank_asal"  id="bank_asal" class="input-textDataUser"  style="border:transparent;">
                                </div>   
                            </div>
                        </div>
                    <div>
                    <!-- <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser textBukti">
                                Bukti Transfer
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                           
                            <div class="imgBukti">
                                <img id="dataFotoPayment" data-toggle="modal" data-target="#uploadModal" src="../images/uploadImage.png" width="200" style="cursor: pointer;">
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
                                <button class="buttonLarge-green" type="button" id="btnUpdateConfirmationDetailPayment">SIMPAN</button>
                            </div>
                            <div class="floatRightbutton">
                                <input type="hidden" name="IdPemesananDelete" id="IdPemesananDelete">
                                <button class="buttonLarge-red" type="submit" id="btnCancelConfirmationDetailPayment">BATAL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="uploadModal" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Upload Foto</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form  method="post" action="" enctype="multipart/form-data" id="myform">
                     <input type="hidden" name="textData" id="textData" value="cart">
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData" style="width: 100%">
                                Gambar Pembayaran
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
</div>
<script src="../js/action.js"></script>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script src="../js/pages/konsumen/cartDataKonsumenActionConfirmationPayment.js?v=1.4.1"></script>
<script type="text/javascript" src="../js/pages/updateDataFotoPayment.js?v=1.4.1"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>
