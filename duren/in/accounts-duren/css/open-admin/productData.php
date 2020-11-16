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
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<!-- css datatables -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<link href="../css/dataUserLogin.css?v=1.1.10" rel="stylesheet" />
<style type="text/css">
    .table-tdYellowHeader {
        text-align: center;
        font-size: 18px;
        font-weight: bolder;
        background-color: rgb(176 255 181);
    }

    .pagination li.active a {
        background-color: #2d472c;
        cursor: pointer;
    }

    .pagination li a {
        background-color: white;
        cursor: pointer;
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

    .input-textData {
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
<body class="bd-w" >
<div class="divPositionContentTop">
    <div id="createDataUserSlide" >
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
                Tambah Produk
            </div>
        </div>
        <div class="col-divProfileUser">
            <div class="row">
                <div class="col-UserDataEdit-left col-lg-8 col-md-6 col-sm-6">
                    <div>
                        <form method="POST" id="createDataProduct">
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Nama Produk
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="text" name="nama_produk" id="nama_produk" class="input-textDataUser"  >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Jenis Produk
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <select name="id_jenis_produk" class="input-textDataUser" id="id_jenis_produk">
                                     </select>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Jumlah Produk
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <input type="text" name="jumlah_stok" id="jumlah_stok" class="input-textDataUser" >
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Satuan Produk 
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <select name="id_satuan_produk" class="input-textDataUser" id="id_satuan_produk">
                                    </select>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                        Berat Produk
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                     <select name="id_berat_produk" class="input-textDataUser" id="id_berat_produk">
                                    </select>
                                </div>
                            </div>
                             <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                       Detail Produk
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <textarea  name="detail1_produk" id="detail1_produk" class="input-textData" style=" padding-top: 3px;"></textarea>
                                </div>
                            </div>
                            <div class="Card-inputDataUser-paddingTopBottom20px">
                                <div class="card-textDataUser">
                                    <div class="textDataUser">
                                      
                                    </div>
                                </div>
                                <div class="card-inputDataUser">
                                    <ul class="ul-buttonGreen" style="margin: auto;float: left;padding-left: 0px;    padding-bottom: 0px;">
                                        <li class="li-buttonGreen">  
                                            <button class="buttonCancelCreate" type="button" id="btnCancelCreatedDataProduct" >BATAL</button>
                                        </li>
                                        <li class="li-buttonGreen">  
                                            <button class="buttonSaveCreate" type="button" id="btnCreatedDataProduct"  >SIMPAN</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <div id="dataProdukPage" >
        <div class="paddingtopData1">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black" >
                   Data Produk
                </div>
            </div>
            <br />
            <div class="paddingtop50px">
                <ul class="ul-buttonGreen">
                    <li class="li-buttonGreen">
                        <a  data-toggle="modal" data-target="#open-dataProduct" id="createNewDataProduct" >
                        <button class="buttonMiddle-green" >Tambah Produk</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="" class="parrentDivTable" >
                <div class="scrollTableX">
                    <div class="marginLeft25">
                        <table style="width: 100%;" border=1px; class="table table-bordered" id="dataProduk">
                            <thead>
                                <tr>
                                    <td class="table-tdYellowHeader">
                                        Nomor
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Nama Produk
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Jenis Produk
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Stok
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Satuan
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Aksi
                                    </td>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../datatable/newJS/jquery.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<script src="../js/pages/admin/productDataAdmin.js?v=1.5.4"></script>
<script src="../js/jquery.redirect.js"></script>

</body>
</html>

