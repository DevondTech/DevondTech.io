<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
        die("<script language='javascript'>alert('Silahkan Login Dahulu'); document.location='../../../login'</script>");
    }
    if($_SESSION['id_status_user']!="5"){
        die("<script language='javascript'>alert('Anda Bukan Andmin / Manager'); document.location='../../../login'</script>");
    }
    $id_user = $_SESSION['id_user'];
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<link href="../css/dataUserLogin.css?v=1.1.2" rel="stylesheet" />
</head>
<style type="text/css">

    .card-textDataUser {
        width: 20%;
        float: left;
    }

    .textDataUser {
        text-align: left;
        padding-right: 20px;
        padding-top: 5px;
    }

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
            /*border-bottom: 1px solid #887777;*/
            width: 90%;
            margin-left: 30px;
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

    }

    @media(max-width: 767px){

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
            margin-left: 30px;
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

</style>

<body class="bd-w">
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
                            <input type="text" name="alamatUpdate" id="alamatUpdate" class="input-textDataUser" placeholder="Ex : JL. Jend Sudirman Gang Mawar No 505 ">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Negara
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="text" name="negaraUpdate" id="negaraUpdate" class="input-textDataUser" placeholder="Ex : Indonesia">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Provinsi
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="text" name="provinsiUpdate" id="provinsiUpdate" class="input-textDataUser" placeholder="Ex : Jawa Barat ">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Kabupaten
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="text" name="kabupatenUpdate"  id="kabupatenUpdate" class="input-textDataUser" placeholder="Ex : Depok">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Kota
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="text" name="kotaUpdate"  id="kotaUpdate" class="input-textDataUser" placeholder="Ex : Depok">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Kecamatan
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="text" name="kecamatanUpdate" id="kecamatanUpdate" class="input-textDataUser" placeholder="Ex : Kec. Sawangan">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Kelurahan
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="text" name="kelurahanUpdate"  id="kelurahanUpdate" class="input-textDataUser" placeholder="Ex : Kedaung">
                        </div>
                    </div>
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataUser">
                            <div class="textDataUser">
                                Kode Pos
                            </div>
                        </div>
                        <div class="card-inputDataUser">
                            <input type="number" name="kode_posUpdate" id="kode_posUpdate" class="input-textDataUser" placeholder="Ex : 61523">
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
                                    <input type="hidden" name="alamatInput" id="alamatInput" >
                                    <input type="hidden" name="negaraInput" id="negaraInput" >
                                    <input type="hidden" name="provinsiInput" id="provinsiInput" >
                                    <input type="hidden" name="kabupatenInput" id="kabupatenInput" >
                                    <input type="hidden" name="kecamatanInput" id="kecamatanInput" >
                                    <input type="hidden" name="kelurahanInput" id="kelurahanInput" >
                                    <input type="hidden" name="kotaInput" id="kotaInput" >  
                                    <input type="hidden" name="kodePOSInput" id="kodePOSInput" >
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
            <div class="CartBarangCartData">
                <div id="cartBarangData">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="m30">
                                <div class="">
                                    <div class="TitleTextBarang">
                                        Nama Barang
                                    </div>
                                </div>
                                <div class="cardBarang">
                                    <img src="../../../images/detail-bawor.png" width="100%">
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
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData">
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
                                    <div class="divPrentTypeButtonPlusMinus positionTextDetailOrder">
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                            Jumlah 
                                        </div>
                                        <div class="textMid floatLeftCartData">
                                            :  
                                        </div>
                                        <div class="marginLeft10 floatLeftCartData">

                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnPlus" >
                                                    <div class="divTypeButtonPlusMinus" id="divTypeButtonPlusClick">
                                                        <div class="positionIconDivTypeButtonPlusMinus">
                                                            <img src="../images/icon png/plus.png" class="iconDivTypeButtonPlusMinus">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="floatLeftItemData">
                                                    <input type="number" name="" value="1" id="jumlah_pemesanan" class="inputTextPlusMinus input-textDataUser-false">
                                                </div>
                                                <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnMinus">
                                                    <div class="divTypeButtonPlusMinus" id="divTypeButtonMinusClick">
                                                        <div class="positionIconDivTypeButtonPlusMinus">
                                                            <img src="../images/icon png/minus.png" class="iconDivTypeButtonPlusMinus">
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
                                                <input type="hidden" name="harga" value="1230000" style="color: #737373;" id="harga" class="input-textDataUser-false" disabled>
                                                <input type="text" name="harga_tampil" value="1230000" style="color: #737373;" id="harga_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardBorderBottomGrey" style="width: 80%"></div>
                                    <div style="margin-top: 10px;">
                                        <div class="positionTextDetailOrder">
                                            <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                Total Harga 
                                            </div>
                                            <div class="textMid floatLeftCartData">
                                                :  
                                            </div>
                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <!-- <div class="textSpanValuePrintOutTextDetailOrder floatLeftCartData" style="color: #737373"> Rp</div> -->
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <input type="text" name="total_harga_pemesanan_tampil" value="" style="color: #737373;" id="total_harga_pemesanan_tampil" class="input-textDataUser-false" disabled>
                                                    <input type="hidden" name="total_harga_pemesanan" value="" style="color: #737373;" id="total_harga_pemesanan_hidden" class="input-textDataUser-false" disabled>
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
        </div>
    </div>
</div>
<script src="../js/action.js"></script>
<script src="../js/pages/konsumen/cartDataKonsumen.js"></script>

<script type="text/javascript">
    const cartBarangData = $('#cartBarangData').;
    cartBarangData.innerHTML += `
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="m30">
                                <div class="">
                                    <div class="TitleTextBarang">
                                        Nama Barang
                                    </div>
                                </div>
                                <div class="cardBarang">
                                    <img src="../../../images/detail-bawor.png" width="100%">
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
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData">
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
                                    <div class="divPrentTypeButtonPlusMinus positionTextDetailOrder">
                                        <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                            Jumlah 
                                        </div>
                                        <div class="textMid floatLeftCartData">
                                            :  
                                        </div>
                                        <div class="marginLeft10 floatLeftCartData">

                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnPlus" >
                                                    <div class="divTypeButtonPlusMinus" id="divTypeButtonPlusClick">
                                                        <div class="positionIconDivTypeButtonPlusMinus">
                                                            <img src="../images/icon png/plus.png" class="iconDivTypeButtonPlusMinus">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="floatLeftItemData">
                                                    <input type="number" name="" value="1" id="jumlah_pemesanan" class="inputTextPlusMinus input-textDataUser-false">
                                                </div>
                                                <div style="margin-left: 5px;" class="floatLeftItemData cursorPointer" id="btnMinus">
                                                    <div class="divTypeButtonPlusMinus" id="divTypeButtonMinusClick">
                                                        <div class="positionIconDivTypeButtonPlusMinus">
                                                            <img src="../images/icon png/minus.png" class="iconDivTypeButtonPlusMinus">
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
                                            <!-- <div class="textSpanValuePrintOutTextDetailOrder floatLeftCartData" style="color: #737373"> Rp</div> -->
                                            <div class="marginLeft10 floatLeftCartData">
                                                <input type="hidden" name="harga" value="1230000" style="color: #737373;" id="harga" class="input-textDataUser-false" disabled>
                                                <input type="text" name="harga_tampil" value="1230000" style="color: #737373;" id="harga_tampil" class="input-textDataUser-false" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardBorderBottomGrey" style="width: 80%"></div>
                                    <div style="margin-top: 10px;">
                                        <div class="positionTextDetailOrder">
                                            <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                                Total Harga 
                                            </div>
                                            <div class="textMid floatLeftCartData">
                                                :  
                                            </div>
                                            <div class="textValuePrintOutTextDetailOrder floatLeftCartData">
                                                <!-- <div class="textSpanValuePrintOutTextDetailOrder floatLeftCartData" style="color: #737373"> Rp</div> -->
                                                <div class="marginLeft10 floatLeftCartData">
                                                    <input type="text" name="total_harga_pemesanan_tampil" value="" style="color: #737373;" id="total_harga_pemesanan_tampil" class="input-textDataUser-false" disabled>
                                                    <input type="hidden" name="total_harga_pemesanan" value="" style="color: #737373;" id="total_harga_pemesanan_hidden" class="input-textDataUser-false" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`
</script>
</body>
</html>

