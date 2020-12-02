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
    .buttonLarge-green{
        padding-left: 10px;
        padding-right: 10px;
    }

    .buttonLarge-green:hover{
        padding-left: 10px;
        padding-right: 10px;
    }

    .buttonLarge-red{
        padding-left: 10px;
        padding-right: 10px;
    }

    .buttonLarge-red:hover{
        padding-left: 10px;
        padding-right: 10px;
    }

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
                    Pembayaran Melalui Link Aja
                    <input type="hidden" name="IdPemesanan" id="IdPemesanan">
                    <input type="hidden" name="id_pemesanan" id="id_pemesanan">
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
                                    Pembayaran Melalui
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div class="imgBukti">
                                    <img id="dataFotoPayment"  src="../images/uploadImage.png" width="200" >
                                    <div class="textbottomImgBukti" style="color: transparent;">Klik Untuk Upload / Ganti</div>
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kode Transaksi
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="hidden" name="kode_pemesanan" id="kode_pemesanan" class="input-textDataUser"  style="border:transparent;">
                                    <input type="text" name="kode_pemesanan_tampil" id="kode_pemesanan_tampil" class="input-textDataUser"  style="border:transparent;color: grey;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nama Produk
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="hidden" name="nama_produk" id="nama_produk" class="input-textDataUser"  style="border:transparent;">
                                    <input type="text" name="nama_produk_tampil" id="nama_produk_tampil" class="input-textDataUser"  style="border:transparent;color: grey;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Jumlah
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="hidden" name="jumlah_pemesanan" id="jumlah_pemesanan" class="input-textDataUser"  style="border:transparent;">
                                    <input type="text" name="jumlah_pemesanan_tampil" id="jumlah_pemesanan_tampil" class="input-textDataUser"  style="border:transparent;color: grey;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Total Pembayaran
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="hidden" name="total_harga_yang_harus_dibayar" id="total_harga_yang_harus_dibayar" class="input-textDataUser"  style="border:transparent;">
                                    <input type="text" name="total_harga_yang_harus_dibayar_tampil" id="total_harga_yang_harus_dibayar_tampil" class="input-textDataUser"  style="border:transparent;color: grey;" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px" >
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Nomor HP
                                </div>
                            </div>
                            <div class="card-inputDataUser" style="padding-bottom: 20px;">
                                <div style="border-bottom: 1px solid #969191;">
                                    <input type="hidden" name="nomor_hp"  id="nomor_hp" class="input-textDataUser" style="border:transparent;">
                                    <input type="text" name="nomor_hp_tampil"  id="nomor_hp_tampil" class="input-textDataUser" style="border:transparent;color: grey;" disabled>
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
                                <button class="buttonLarge-green" type="button" id="btnUpdateConfirmationDetailPayment">LANJUTKAN</button>
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

<script src="../js/action.js"></script>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script src="../js/pages/konsumen/cartDataKonsumenActionConfirmationPaymentLinkAja.js?v=1.1.1"></script>
</body>
</html>
