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
<link href="../css/dataUserLogin.css?v=1.1.2" rel="stylesheet" />

</head>
<style type="text/css">

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

    .widthBorder{
        width: 80%;
    }

    .widthBorder2{
        width: 50%;
    }

    .w150{
        width: 150px;
    }

    .card-textDataUser {
        width: 20%;
        float: left;
    }

    /*.textDataUser {
        text-align: left;
        padding-right: 20px;
        padding-top: 5px;
    }*/

    .cardBorderBottomGrey{
        border-bottom: 1px solid #887777;
    }

    .floatLeftItemData{
        float: left;
    }

    .floatLeftCartData{
        float: left;
    }

    .floatRightbutton {
        float: right;
        padding-left: 20px;
    }

    .textIconLargeCartData{
        margin-top: 0px;
        font-size: 20px;
        margin-left: 4px;
    }

    .fontBoldCartData{
        font-weight: bold;
    }

    .p5pxCartData{
        padding-top: 5px;
        padding-bottom: 5px;
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

    .padLeft20CartData{
        padding-left: 20px;
    }

    .witdh100CartData{
        width:100%;
    }

    .pad8Px{
        padding-left: 8px;
    }

    .TitleTextBarang{
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }

    .cardBarang{
        margin-top: 10px;
        border: 1px solid #a2a2a2;
        padding: 10px;
        border-radius: 4px;
    }

    .m30{
        margin: 30px;
    }

    .centerPosition1{
        margin: auto;
        width: 50%;
    }

    .positionCardDetailOrder{
        margin-top: 28px;
        line-height: 2;
        font-size: 16px;
        padding-bottom: 10px;
        /*border-bottom: 1px solid #887777;*/
        width: 90%;
    }

    .titleDetailOrder{
        font-weight: bold;
        padding-bottom: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: left;
    }

    .positionTextDetailOrder{
        width: 100%;
        display: flex;
        padding-bottom: 10px;
    }

    .positionPrintOutTextDetailOrder{
        width: 120px;
        text-align: left;
    }

    .divPrentTypeButtonPlusMinus{
        margin-top: 0px;
    }

    .divTypeButtonPlusMinus{
        width: 35px;
        height: 30px;
        background-color: #2d472c;
        float: left;border-radius: 3px;
    }

    .divTypeButtonPlusMinus:hover{
        width: 35px;
        height: 30px;
        background-color: #111710;
        float: left;border-radius: 3px;
    }

    .positionIconDivTypeButtonPlusMinus{
        margin: auto;width: 70%;
    }

    .iconDivTypeButtonPlusMinus{
        height: 20px;
        margin: auto;
        margin-top: -5px;
        margin-left: 2px;
    }

    .input-textDataUser-false {
        width: width: 317px;
        height: 30px;
        color: #000;
        padding-left: 5px;
        padding-right: 5px;
        border: 0px solid #969191;
        background-color: white;
        border-radius: 3px;
        width: 320px;
    }

    .inputTextPlusMinus{
        color: #737373;
        width: 50px;
        text-align: center;
    }

    .inputTextPlusMinus:hover{
        color: #737373;
        width: 50px;
        text-align: center;
    }

    .cursorPointer{
        cursor: pointer;
    }

    .cardAction{
        border: 1px solid #a2a2a2;
        border-radius: 5px;
        margin-top: 30px;
    }

    .textTotalHarga{
        float: left;
        font-size: 16px;
    }

    .inputTotalHarga{
        margin-top: -3px;
    }

    .voucherCard{
        width: 300px;
        float:right;
        padding-bottom: 15px;
        margin-bottom: 15px;
        font-size: 16px;
        font-weight: bold;
    }

    .aCol{
        color: #2d472c;
        cursor: pointer;
        text-decoration: none;
    }

    .aCol:hover{
        color: #dcb704;
        cursor: pointer;
        text-decoration: none;
    }

    .btnSelectVoucher{
        color: white;
        background-color: #2d472c;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #2d472c;
        padding-right: 10px;
        padding-left: 10px;
        font-size: 18px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .btnSelectVoucher:hover{
        color: #2d472c;
        background-color: white;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #2d472c;
        padding-right: 10px;
        padding-left: 10px;
        font-size: 18px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .btnCancelSelectVoucher{
        color: white;
        background-color: #fb483a;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #fb483a;
        padding-right: 10px;
        padding-left: 10px;
        font-size: 18px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .btnCancelSelectVoucher:hover{
        color: #fb483a;
        background-color: white;
        border-style: none;
        border-radius: 5px;
        border: 1px solid #fb483a;
        padding-right: 10px;
        padding-left: 10px;
        font-size: 18px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    
    .leftVoucher{
        height: 160px;
        background-color: transparent;
    }

    .rightVoucherTitle{
        font-size: 16px;
        font-weight: bold;
        color: #333;
        padding-top: 10px;
    }

    .rightVoucherDetail{
        font-size: 16px;
        color: #333;
        padding-top: 5px;
    }

    .rightVoucherDate{
        font-size: 16px;
        color: #8a8a8a;
        padding-top: 5px;
        font-style: italic;
    }

    .imgVoucher{
        height: 140px;
        width: 140px;
    }

    .buttonSelectVoucherByCode{
        background-color: white;
        color: #2d472c;
        font-weight: bold;
        font-style: normal;
        border-radius: 4px;
        border: 1px solid #2d472c;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .buttonSelectVoucherByCode:hover{
        background-color: #2d472c;
        color: white;
        font-weight: bold;
        font-style: normal;
        border-radius: 4px;
        border: 1px solid #2d472c;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
    }

    @media(max-width: 991px){

        .centerPosition1{
            margin: auto;
            width: 100%;
        }

        .positionCardDetailOrder {
            margin-top: 25px;
            line-height: 2;
            font-size: 16px;
            padding-bottom: 10px;
            width: 80%;
            margin-left: 34px;
            margin-bottom: 40px;
        }

        .TitleTextBarang{
            text-align: left;
        }

        .titleDetailOrder{
            font-weight: bold;
            padding-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
        }

        .buttonCheckoutPosition{
            margin-top: 20px;
        }

    }

    @media(max-width: 767px){

        .rightVoucherTitle{
            font-size: 13px;
            font-weight: bold;
            color: #333;
            padding-top: 10px;
        }

        .rightVoucherDetail{
            font-size: 13px;
            color: #333;
            padding-top: 5px;
        }

        .rightVoucherDate{
            font-size: 13px;
            color: #8a8a8a;
            padding-top: 5px;
            font-style: italic;
        }

        .btnSelectVoucher{
            color: white;
            background-color: #2d472c;
            border-style: none;
            border-radius: 5px;
            border: 1px solid #2d472c;
            padding-right: 10px;
            padding-left: 10px;
            font-size: 16px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .btnSelectVoucher:hover{
            color: #2d472c;
            background-color: white;
            border-style: none;
            border-radius: 5px;
            border: 1px solid #2d472c;
            padding-right: 10px;
            padding-left: 10px;
            font-size: 16px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .btnCancelSelectVoucher{
            color: white;
            background-color: #fb483a;
            border-style: none;
            border-radius: 5px;
            border: 1px solid #fb483a;
            padding-right: 10px;
            padding-left: 10px;
            font-size: 16px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .btnCancelSelectVoucher:hover{
            color: #fb483a;
            background-color: white;
            border-style: none;
            border-radius: 5px;
            border: 1px solid #fb483a;
            padding-right: 10px;
            padding-left: 10px;
            font-size: 16px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .voucherCard{
            width: 232px;
            float: right;
            font-size: 13px;
            padding-bottom: 15px;
            margin-bottom: 0px;
            margin-top: -24px;
            font-weight: 100px;
        }

        .w150{
            width: 130px;
        }

        .positionTextDetailOrder{
            width: 100%;
            display: flex;
            padding-bottom: 0px;
        }

        .divPrentTypeButtonPlusMinus {
            margin-top: 7px;
            padding-bottom: 7px;
        }

        .padLeft20CartData{
            padding-left: 0px;
        }

        .positionPrintOutTextDetailOrder {
            width: 85px;
            text-align: left;
            font-size: 12px;
        }

        .textMid {
            text-align: left;
            font-size: 12px;
        }

        .positionCardDetailOrder {
            margin-top: 25px;
            line-height: 2;
            font-size: 16px;
            padding-bottom: 10px;
           /* border-bottom: 1px solid #887777;*/
            width: 80%;
            margin-left: 34px;
            margin-bottom: 40px;
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
            font-size: 12px;
        }

        .textValuePrintOutTextDetailOrder{
            margin-top: -6px;
        }

        .textSpanValuePrintOutTextDetailOrder{
            font-size: 12px;
            margin-top: 6px;
        }

        .divPrentTypeButtonPlusMinus{
            margin-top: 7px;
        }

        .iconDivTypeButtonPlusMinus {
            height: 18px;
            margin: auto;
                margin-top: auto;
            margin-top: auto;
            margin-top: -7px;
        }

        .divTypeButtonPlusMinus {
            width: 27px;
            height: 27px;
            background-color: #2d472c;
            float: left;
            border-radius: 3px;
            margin-top: 4px;
        }

        .divTypeButtonPlusMinus:hover {
            width: 27px;
            height: 27px;
            background-color: #111710;
            float: left;
            border-radius: 3px;
            margin-top: 4px;
        }

        .inputTextPlusMinus{
            color: #737373;
            width: 30px;
            text-align: center;
        }

        .inputTextPlusMinus:hover{
            color: #737373;
            width: 30px;
            text-align: center;
        }

        .inputTotalHarga{
            margin-top: -6px;
        }

        .textTotalHarga{
            float: left;
            font-size: 12px;
        }

        .widthBorder{
            width: 70%;
        }

        .widthBorder2{
            width: 70%;
        }
        
    }

    .marginLeft10{
        margin-left: 10px;
    }

    .hiddenAlamatUpdate{
        display: none;
    }

    .showAlamatUpdate{
        display: none;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    @media(max-width: 505px){
        .rightVoucherTitle{
            font-size: 13px;
            font-weight: bold;
            color: #333;
            padding-top: 0px;
        }

        .imgVoucher{
            height: 100px;
            width: 100px;
        }
    }
    @media(max-width: 421px){
        .imgVoucher{
            height: 80px;
            width: 80px;
        }
        .rightVoucherTitle {
            font-size: 13px;
            font-weight: bold;
            color: #333;
            padding-top: 0px; 
        }
    }
    @media(max-width: 448px){
        .widthBorder{
            width: 100%;
            margin-top: 5px;
        }

        .widthBorder2{
            width: 100%;
        }
    }

</style>

<body class="bd-w">
<div id="cardDataUser" style="display: none;">
    <div class="divPositionContentTop">
        <div class="hiddenAlamatUpdate" id="ubahAlamat">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black">
                    Ubah Alamat
                </div>
            </div>
            <div class="padLeft20CartData">
                <div class="col-divCartData">
                    <form method="POST" id="updateDataAlamatUser">
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Alamat
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="alamatUpdate" id="alamatUpdate" class="input-textDataUser">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px" style="display: none;">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Negara
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="hidden" name="negaraUpdate" id="negaraUpdate" class="input-textDataUser" value="Indonesia">
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Provinsi
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="provinsiUpdate" id="provinsiUpdate" class="input-textDataUser" >
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kota
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <select name="id_kota" class="input-textDataUser" id="id_kota" style="padding-left: inherit;">
                                </select>
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kecamatan
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="kecamatanUpdate" id="kecamatanUpdate" class="input-textDataUser" >
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kelurahan
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="text" name="kelurahanUpdate"  id="kelurahanUpdate" class="input-textDataUser" >
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                    Kode Pos
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <input type="number" name="kode_posUpdate" id="kode_posUpdate" class="input-textDataUser" >
                            </div>
                        </div>
                        <div class="Card-inputDataUser-paddingTopBottom20px">
                            <div class="card-textDataUser">
                                <div class="textDataUser">
                                  
                                </div>
                            </div>
                            <div class="card-inputDataUser">
                                <div class="floatRightbutton">
                                    <button class="buttonLarge-green" type="button" id="btnUpdateDataAlamatUser">SIMPAN</button>
                                </div>
                                <div class="floatRightbutton">
                                    <button class="buttonLarge-red" type="button" id="btnCancelUpdateDataAlamatUser">BATAL</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black">
                Data Pesanan
            </div>
        </div>
        <div class="padLeft20CartData">
            <div class="col-divCartData">
                <div id="alamatUser">
                    <div class="CartAlamatCartData">
                        <div id="rowAlamatTop" class="rowAlamatTop">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div>
                                        <div class="floatLeftCartData"><i class="material-icons">location_on</i></div>
                                        <div class="floatLeftCartData textIconLargeCartData"> Alamat Pengiriman</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="rowAlamatMiddle" class="rowAlamatMiddle">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="p5pxCartData">
                                        <div class="fontBoldCartData inputTypeTransparent" id="namaLengkapPrint">  
                                        </div> 
                                        <input type="hidden" name="nama_lengkap" id="nama_lengkap" >
                                        <div class="inputTypeTransparent" id="nomorHpPrint">
                                        </div>
                                        <input type="hidden" name="nomor_hp" id="nomor_hp" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="p5pxCartData">
                                        <div id="alamatPrint" class="inputTypeTransparent ">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="centerPosition1 p5pxCartData">
                                        <div class="pad8Px">
                                            <button class="inputTypeTransparent buttonOrderAlamatCartData" id="buttonUbahAlamat">Ubah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form method="POST" id="checkOutActionForm">
                    <div class="CartBarangCartData">
                        <div id="cartBarangData">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="m30">
                                        <div class="">
                                            <div class="TitleTextBarang" id="nama_produk">

                                            </div>
                                        </div>
                                        <div class="cardBarang">
                                            <img  width="100%" id="gambarProductView">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="positionCardDetailOrder">
                                        <div class="">
                                            <div class="titleDetailOrder TitleTextBarang">
                                            Detail Pemesanan
                                            </div>
                                            <div class="positionTextDetailOrder">
                                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                    Jenis Produk  
                                                </div>
                                                <div class="textMid floatLeftCartData">
                                                    :  
                                                </div>
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                        <input type="text" name="" value="Durian" style="color: #737373;" id="jenis_produk" class="input-textDataUser-false" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="positionTextDetailOrder">
                                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                    Berat Produk  
                                                </div>
                                                <div class="textMid floatLeftCartData">
                                                    :  
                                                </div>
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                        <select style="width: 120px;" name="id_berat_produk" class="input-textDataUser-false" id="id_berat_produk">
                                                        </select>
                                                        <!-- <input type="text" name="" value="Durian" style="color: #737373;" id="jenis_produk" class="input-textDataUser-false" disabled> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divPrentTypeButtonPlusMinus positionTextDetailOrder">
                                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                    Jumlah 
                                                </div>
                                                <div class="textMid floatLeftCartData">
                                                    :  
                                                </div>
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                        <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnMinus">
                                                            <div class="divTypeButtonPlusMinus" id="divTypeButtonMinusClick">
                                                                <div class="positionIconDivTypeButtonPlusMinus">
                                                                    <img src="../images/icon png/minus.png" class="iconDivTypeButtonPlusMinus">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="floatLeftItemData">
                                                            <input type="number" name="" value="1" id="jumlah_pemesanan" class="inputTextPlusMinus input-textDataUser-false" disabled>
                                                        </div>
                                                        <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnPlus">
                                                            <div class="divTypeButtonPlusMinus" id="divTypeButtonPlusClick">
                                                                <div class="positionIconDivTypeButtonPlusMinus">
                                                                    <img src="../images/icon png/plus.png" class="iconDivTypeButtonPlusMinus">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="positionTextDetailOrder">
                                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                    Harga Satuan 
                                                </div>
                                                <div class="textMid floatLeftCartData">
                                                    :  
                                                </div>
                                                <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                    <div class="marginLeft10 floatLeftCartData">
                                                        <input type="text" name="harga_sebelum_diskon" value="1230000" style="color: #737373;" id="harga_sebelum_diskon" class="input-textDataUser-false" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- ----------------THIS UPDATE--------------- -->
                                            <div class="positionTextDetailOrder" style="display: none;">
                                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                    Harga Setelah Diskon 
                                                </div>
                                                <div class="textMid floatLeftCartData">
                                                    :  
                                                </div>
                                                <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                    <div class="marginLeft10 floatLeftCartData">
                                                        <input type="hidden" name="harga"  style="color: #737373;" id="harga" class="input-textDataUser-false" disabled>
                                                        <input type="hidden" name="harga_tampil"  style="color: #737373;" id="harga_tampil" class="input-textDataUser-false" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ------------------------------------------------------------ -->

                                            <div class="widthBorder cardBorderBottomGrey" ></div>
                                            <div style="margin-top: 10px;">
                                                <div class="positionTextDetailOrder">
                                                    <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                        Total Harga 
                                                    </div>
                                                    <div class="textMid floatLeftCartData">
                                                        :  
                                                    </div>
                                                    <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                        <div class="marginLeft10 floatLeftCartData">
                                                            <input type="text" name="total_harga_pemesanan_tampil" value="" style="color: #737373;" id="total_harga_pemesanan_tampil" class="input-textDataUser-false" disabled>
                                                            <input type="hidden" name="total_harga_pemesanan"  style="color: #737373;" id="total_harga_pemesanan" class="input-textDataUser-false" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardAction">
                        <div class="m30">
                            <!-- <div class="titleDetailOrder TitleTextBarang">
                            Aksi
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="border-bottom: 1px solid grey;margin-bottom: 35px;">
                                    <div class="voucherCard">
                                       <!--  <div style="float: left;padding-right: 10px;">
                                            VOUCHER 
                                        </div> -->
                                        <div>
                                            <a  data-toggle="modal" data-target="#voucherMdl" class="aCol" id="buttonShowVoucher" style="float: right;">PILIH VOUCHER</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div style="margin-left: 4px;"> 
                                        <div class="positionTextDetailOrder">
                                            <div class="w150 textTotalHarga floatLeftCartData" >
                                                Jenis Voucher
                                            </div>
                                            <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                                :  
                                            </div>
                                            <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <input type="hidden" name="jenis_voucher"  style="color: #737373;" id="jenis_voucher" class="input-textDataUser-false" >
                                                    <input type="text" name="jenis_voucher_tampil"  style="color: #737373;background-color: transparent; text-overflow: ellipsis;" id="jenis_voucher_tampil" class="input-textDataUser-false" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: 4px;"> 
                                        <div class="positionTextDetailOrder">
                                            <div class="w150 textTotalHarga floatLeftCartData" >
                                                Potongan Voucher
                                            </div>
                                            <div class="textTotalHarga floatLeftCartData" style="margin-left: 6px;">
                                                :  
                                            </div>
                                            <div class="inputTotalHarga textTotalHarga floatLeftCartData" >
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <input type="hidden" name="voucher"  style="color: #737373;" id="voucher" class="input-textDataUser-false" >
                                                    <input type="text" name="voucher_tampil"  style="color: #737373;background-color: transparent;" id="voucher_tampil" class="input-textDataUser-false" disabled>
                                                </div>
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
                                                    <input type="hidden" name="total_harga_pemesanan2"  style="color: #737373;" id="total_harga_pemesanan2" class="input-textDataUser-false" disabled>
                                                    <input type="text" name="total_harga_pemesanan_tampil2"  style="color: #737373;" id="total_harga_pemesanan_tampil2" class="input-textDataUser-false" disabled>
                                                    <input type="hidden" name="id_produk_send" id="id_produk_send" >
                                                    <input type="hidden" name="alamatInput" id="alamatInput" >
                                                    <input type="hidden" name="negaraInput" id="negaraInput" >
                                                    <input type="hidden" name="provinsiInput" id="provinsiInput" >
                                                    <input type="hidden" name="kabupatenInput" id="kabupatenInput" >
                                                    <input type="hidden" name="kecamatanInput" id="kecamatanInput" >
                                                    <input type="hidden" name="kelurahanInput" id="kelurahanInput" >
                                                    <input type="hidden" name="kotaInput" id="kotaInput" >  
                                                    <input type="hidden" name="id_pemesanan" id="id_pemesanan" >  
                                                    <input type="hidden" name="dataKodePos" id="dataKodePos" >
                                                    <input type="hidden" name="jumlahPemesanan" value="1" id="jumlahPemesanan">

                                                    <input type="hidden" name="email_send" style="color: #737373;" id="email_send" >
                                                    <input type="hidden" name="kode_pemesanan_send" style="color: #737373;" id="kode_pemesanan_send"  >
                                                    <input type="hidden" name="produk_send" style="color: #737373;" id="produk_send" >
                                                    <input type="hidden" name="jumlah_send_data" style="color: #737373;" id="jumlah_send_data"  >
                                                    <input type="hidden" name="waktu_pemesanan_send" style="color: #737373;" id="waktu_pemesanan_send"  >   
                                                    <input type="hidden" name="total_harga_yang_harus_dibayar_send" style="color: #737373;" id="total_harga_yang_harus_dibayar_send" >
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
                                                    <input type="text" name="ongkir_tampil"  style="color: #737373;background-color: transparent;" id="ongkir_tampil" class="input-textDataUser-false" disabled>
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
                                                    <input type="hidden" name="kodeUnikPlus"  style="color: #737373;" id="kodeUnikPlus" class="input-textDataUser-false" >
                                                    <input type="text" name="kodeUnik_tampil"  style="color: #737373;background-color: transparent;" id="kodeUnik_tampil" class="input-textDataUser-false" disabled>
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
                                                    <input type="text" name="totalBayarKeseluruhan_tampil"  style="color: #737373;background-color: transparent;" id="totalBayarKeseluruhan_tampil" class="input-textDataUser-false" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="buttonCheckoutPosition">
                                        <button type="button" class="inputTypeTransparent buttonOrderAlamatCartData" id="checkOutActionButton">Check Out</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    

<script src="../js/action.js"></script>
<script src="../js/pages/konsumen/cartDataKonsumenCartV3.js?v=1.2.1"></script>
<script src="../js/pages/konsumen/cartDataKonsumenActionCheckOutV3.js?v=1.2.2"></script>

<div id="voucherMdl" class="modal fade" >
    <div class="modal-dialog modal-md">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">VOUCHER KING FRUIT</h4>
                <input type="hidden" name="id_voucher_by_user" id="id_voucher_by_user">
            </div>
            <div class="modal-body" id="modal-body-pad" style="height: 500px;" >
                <div style="width: 100%;height: 400px;overflow: scroll;">
                    <div id="data" class="row" style="margin-left: 0px;margin-right: 0px;" >
                    <!-- <div id="" class="row" style="margin-left: 0px;margin-right: 0px;" >
                        
                        <div class="paddingBottomCardMinTablet col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="leftVoucher">
                                <img  class="imgVoucher" src="../images/voucher/gratis.png">
                            </div>
                        </div>
                        <div class="paddingBottomCardMinTablet col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height: 300px;">
                            <div class="rightVoucherTitle">
                                this Header
                            </div>
                            <div class="rightVoucherDetail">
                                this Detail
                            </div>
                            <div class="rightVoucherDate">
                                this Date
                            </div>
                        </div>
                    </div> -->
                </div>
                
            </div>
            <div style="float: right;margin-top: 20px;">
                <div style="float: left;padding-right: 10px;">
                    <button id="cancelSelectVoucher" class="btnCancelSelectVoucher" type="button" data-dismiss="modal">Keluar</button>
                </div>
                <!-- <div style="float: left">
                    <button id="selectVoucher" class="btnSelectVoucher" type="button">Pilih</button>
                </div> -->
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">

</script>
</html>
