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
<div class="divPositionContentTop" style="padding-bottom: 100px;" id="detailPaymentRecord">
    <div id="confirmationDetailPayment">
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
                Transaksi Pembayaran
              <!--  Data Input Bukti Pembayaran  -->
            </div>
        </div>
        <div>
            <div class="cardAction" >
                <div class="m30">
                    <!-- <div class="titleDetailOrder TitleTextBarang">
                    Aksi
                    </div> -->
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <div>
                                <div style="margin-left: 4px;">
                                    <div class="positionTextDetailOrder">
                                        <div class="textTotalHarga floatLeftCartData"  style="font-weight: bold;padding-bottom: 13px;">
                                            Berkut pembayaran yang harus anda transfer 
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;">
                                    <div class="positionTextDetailOrder">
                                        <div class="w150 textTotalHarga floatLeftCartData" >
                                            Harga Keseluruhan
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="hidden" name="total_harga_pemesanan"  style="color: #737373;" id="total_harga_pemesanan" class="input-textDataUser-false" disabled>
                                                <input type="text" name="total_harga_pemesanan_tampil"  style="color: #737373;" id="total_harga_pemesanan_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;"> 
                                    <div class="positionTextDetailOrder">
                                        <div class="w150 textTotalHarga floatLeftCartData" >
                                            Ongkos Pengiriman
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="hidden" name="ongkir"  style="color: #737373;" id="ongkir" class="input-textDataUser-false" >
                                                <input type="text" name="ongkir_tampil"  style="color: #737373;" id="ongkir_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="positionTextDetailOrder">
                                     <div class="widthBorder2 cardBorderBottomGrey" style="margin-bottom: 5px;margin-left: 4px;"></div>
                                </div>
                                <div style="margin-left: 4px;">
                                    <div class="positionTextDetailOrder">
                                        <div class="w150 textTotalHarga floatLeftCartData" >
                                            Total Keseluruhan
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="hidden" name="totalBayarKeseluruhan"  style="color: #737373;" id="totalBayarKeseluruhan" class="input-textDataUser-false"  >
                                                <input type="text" name="totalBayarKeseluruhan_tampil"  style="color: #737373;" id="totalBayarKeseluruhan_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;">
                                    <div class="positionTextDetailOrder">
                                        <div class=" textTotalHarga floatLeftCartData" >
                                           <img src="../images/bca.png" class="imgBCA" style="">
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                              
                                        </div>
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class="textRekning marginLeft10 floatLeftCartData">
                                                No Rek. 1234567890123
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="buttonCheckoutPosition">
                                <form method="post" id="confirmationFormPicHalu">
                                    <input type="hidden" name="IdPemesanan" id="IdPemesanan">
                                    <button type="button" class="inputTypeTransparent buttonOrderAlamatCartData" id="confirmationButton">Konfirmasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
<script src="../js/action.js"></script>
<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script src="../js/pages/konsumen/cartDataKonsumenPaymentConfirmationView.js?v=1.2.1"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>
