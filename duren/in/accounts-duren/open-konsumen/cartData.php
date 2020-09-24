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

    .floatLeftCartData{
        float: left;
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
        height: 30px;
        border-radius: 4px;
        text-align: center;
        padding-left: 20px;
        padding-right: 20px;
    }

    .buttonOrderAlamatCartData:hover{
        background-color: white;
        border: 1px solid #2d472c;
        color: #2d472c;
        height: 30px;
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
        margin-top: 25px;
        line-height: 2;
        font-size: 16px;
        padding-bottom: 10px;
        border-bottom: 1px solid #887777;
        width: 90%;
    }

    .positionTextDetailOrder{
        width: 100%;
        display: flex;
    }

    .positionPrintOutTextDetailOrder{
        width: 120px;
        text-align: right;
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
            border-bottom: 1px solid #887777;
            width: 90%;
            margin-left: 30px;
            margin-bottom: 40px;
        }

        .TitleTextBarang{
            text-align: left;
        }

    }

    @media(max-width: 767px){

        .padLeft20CartData{
            padding-left: 0px;
        }

        .positionPrintOutTextDetailOrder {
            width: 85px;
            text-align: right;
            font-size: 12px;
        }

        .positionCardDetailOrder {
            margin-top: 25px;
            line-height: 2;
            font-size: 16px;
            padding-bottom: 10px;
            border-bottom: 1px solid #887777;
            width: 80%;
            margin-left: 30px;
            margin-bottom: 40px;
        }

    }

</style>
<body class="bd-w">
<div>
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black">
            Data Pesanan
        </div>
    </div>
    <div class="padLeft20CartData">
        <div class="col-divCartData">
            <div>
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
                                    <div class="fontBoldCartData inputTypeTransparent" id="nama_lengkap">Mohamad Eko Prasetyo, S .Kom</div> 
                                    <div class="inputTypeTransparent" id="nomor_hp">
                                        (+62)183642786236
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="p5pxCartData">
                                    <div id="alamat" class="inputTypeTransparent ">Citra Lake Sawangan Blok A02/06 Jl Raya Cinangka Km. 3 Bojongsari Baru, Kedaung, Kec. Sawangan, Kota Depok, Jawa Barat 16516</div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="centerPosition1 p5pxCartData">
                                    <div class="pad8Px">
                                        <button class="inputTypeTransparent buttonOrderAlamatCartData">Ubah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="CartBarangCartData">
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
                            <div class="positionTextDetailOrder">
                                <div class="positionPrintOutTextDetailOrder floatLeftCartData">
                                    Jenis Produk : 
                                </div>
                                <div class="floatLeftCartData">
                                    
                                </div>
                            </div>
                            <div class="positionTextDetailOrder">
                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                    Jumlah :
                                </div>
                                <div class="floatLeftCartData">
                                    
                                </div>
                            </div>
                            <div class="positionTextDetailOrder">
                                <div class="positionPrintOutTextDetailOrder floatLeftCartData" >
                                    Harga Satuan :
                                </div>
                                <div class="floatLeftCartData">
                                    <input type="" name="" placeholder="">
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
</body>
</html>

