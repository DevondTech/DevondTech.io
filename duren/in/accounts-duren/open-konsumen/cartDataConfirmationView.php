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
    .selectMethodPayment{
        width: 200px;
        background-color: transparent;
        margin-top: -1px;
    }

    .selectMethodPayment:hover{
        width: 200px;
        background-color: transparent;
        margin-top: -1px;
    }

    .paymentMethodCard{
        margin-top: 12px;
        border: 1px solid grey;
        padding-top: 15px;
        width: 70%;
        padding-left: 15px;
        border-radius: 4px;
    }

    /*.textDataUser {
        text-align: end;
        padding-right: 20px;
        padding-top: 5px;
        float: left;
    }*/
    .divPositionTextRekAdmin{
        float: left;
        padding-right: 4px;
        width: 136px;
    }

    .divTextRekAdminTitleRead{
        float: left;
        text-align: right;
        width: 10%;
    }

    .divTextRekAdminTitle{
        float: left;
        width: 90%;
    }

    .fontS14{
        font-size: 14px;
    }

    .marginPRek{
        margin-left:2px; 
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

        .selectMethodPayment{
            width: 120px;
            background-color: transparent;
            margin-top: 0px;
        }

        .selectMethodPayment:hover{
            width: 120px;
            background-color: transparent;
            margin-top: 0px;
        }
        
        .paymentMethodCard{
            margin-top: 12px;
            border: 1px solid grey;
            padding-top: 7px;
            width: 70%;
            padding-left: 15px;
        }

        .divPositionTextRekAdmin{
            float: left;
            padding-right: 4px;
            width: 85px;
        }

        .m30 {
            margin: 25px;
        }

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

        .marginPRek{
            margin-left:0px; 
        }

    }

    
    @media(max-width: 448px){

        .paymentMethodCard{
            margin-top: 12px;
            border: 1px solid grey;
            padding-top: 7px;
            width: 100%;
            padding-left: 10px;
        }

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
                                            Berikut Pembayaran Yang Harus Anda Transfer:
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;">
                                    <div class="positionTextDetailOrder"> 
                                        <div class="w150 textTotalHarga floatLeftCartData" id="detailPembayaranInfo">
                                            <!-- Harga Keseluruhan -->
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData">
                                                <div id="detailPembayaranInfoTotal"></div>
                                                <input type="hidden" name="total_harga_pemesanan"  style="color: #737373;" id="total_harga_pemesanan" class="input-textDataUser-false" disabled>
                                                <input type="text" name="total_harga_pemesanan_tampil"  style="color: #3c3838;background-color: transparent;" id="total_harga_pemesanan_tampil" class="input-textDataUser-false" disabled>
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
                                                <input type="text" name="ongkir_tampil"  style="color: #3c3838;    background-color: transparent;" id="ongkir_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;"> 
                                    <div class="positionTextDetailOrder">
                                        <div class="w150 textTotalHarga floatLeftCartData" >
                                            Kode Unik
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="text" name="kodeUnik_tampil"  style="color: #3c3838;    background-color: transparent;" id="kodeUnik_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="positionTextDetailOrder">
                                     <div class="widthBorder2 cardBorderBottomGrey" style="margin-bottom: 5px;margin-left: 4px;"></div>
                                </div>
                                <div style="margin-left: 4px;font-weight: bold;margin-top: 2px;" >
                                    <div class="positionTextDetailOrder">
                                        <div class="w150 textTotalHarga floatLeftCartData"  >
                                            Total
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="hidden" name="totalBayarKeseluruhan"   id="totalBayarKeseluruhan" class="input-textDataUser-false"  >
                                                <input type="text" name="totalBayarKeseluruhan_tampil"  style="color: #3c3838;" id="totalBayarKeseluruhan_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="paymentMethodCard">
                                    <div class="positionTextDetailOrder" >
                                        <div class="w150 textTotalHarga floatLeftCartData"  >
                                            Metode Pembayaran
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                            :  
                                        </div>
                                        <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                            <div class="marginLeft10 floatLeftCartData" style="margin-top: -1px;">
                                                <select name="id_metode_pembayaran" class="selectMethodPayment input-textDataUser-false" id="id_metode_pembayaran">
                                                        </select>
                                                <input type="hidden" name="id_metode_pembayaran_call_back"  style="color: #3c3838;" id="id_metode_pembayaran_call_back" class="input-textDataUser-false" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;" >
                                    <div class="positionTextDetailOrder">
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class=" marginPRek textRekning floatLeftCartData fontS14" style="font-size: 14px;width: 343px;padding-bottom: 5px;" >
                                                <div class="">
                                                    <div class="divTextRekAdminTitle" >Pembayaran Dapat Ditransfer Melalui: </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;" >
                                    <div class="positionTextDetailOrder">
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class=" marginPRek textRekning floatLeftCartData fontS14" style="margin-top:5px;font-size: 12px;" >
                                                <div class="divPositionTextRekAdmin">
                                                    <div class="divTextRekAdminTitle" >Bank </div>
                                                    <div class="divTextRekAdminTitleRead">:</div>
                                                </div>
                                                <div id='' style="float: left;font-weight: normal;">Bank Central Asia (BCA) </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;" >
                                    <div class="positionTextDetailOrder">
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class=" marginPRek textRekning floatLeftCartData fontS14" style="margin-top:5px;font-size: 12px;" >
                                                <div class="divPositionTextRekAdmin">
                                                    <div class="divTextRekAdminTitle" >Pemilik Rek. </div>
                                                    <div class="divTextRekAdminTitleRead">:</div>
                                                </div>
                                                <div id='PemilikRekening' style="float: left;font-weight: normal;"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 4px;" >
                                    <div class="positionTextDetailOrder">
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class=" marginPRek textRekning floatLeftCartData fontS14" style="margin-top:5px;font-size: 12px;" >
                                                <div class="divPositionTextRekAdmin">
                                                    <div class="divTextRekAdminTitle" >No Rek. </div>
                                                    <div class="divTextRekAdminTitleRead">:</div>
                                                </div>
                                                <div id='NumberRekening' style="float: left;font-weight: normal;"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="positionTextDetailOrder">
                                     <div class="widthBorder2 cardBorderBottomGrey" style="margin-bottom: 5px;margin-left: 4px;"></div>
                                </div>
                                <div style="margin-left: 4px;" >
                                    <div class="positionTextDetailOrder">
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class=" marginPRek textRekning floatLeftCartData fontS14" style="margin-top:10px;font-size: 18px;padding-bottom: 10px;" >
                                                <div style="float: left;" >Batas Waktu </div>
                                                <div style="float: left;margin-left: 10px;padding-right: 10px;">:</div>
                                                <div id='timeOutPayment' style="float: left;font-weight: normal;"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div style="margin-left: 4px;" style="margin-top: 1px;">
                                    <div class="positionTextDetailOrder">
                                        <div class=" textTotalHarga floatLeftCartData" >
                                           <img src="../images/bca.png" class="imgBCA" style="">
                                        </div>
                                        <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                              
                                        </div>
                                        <div class="inputTotalHarga floatLeftCartData" >
                                            <div class="textRekning marginLeft10 floatLeftCartData" >
                                                <div style="float: left;">No Rek. </div>
                                                <div id='NumberRekening' style="float: left;margin-left: 2px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="buttonCheckoutPosition">
                                <form method="post" id="confirmationFormPicHalu">
                                    <input type="hidden" name="IdPemesanan" id="IdPemesanan">
                                    <!-- <input type="hidden" name="kodeUnikPlus" id="kodeUnikPlus"> -->
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
<script src="../js/pages/konsumen/cartDataKonsumenPaymentConfirmationView.js?v=2.1.7"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>
