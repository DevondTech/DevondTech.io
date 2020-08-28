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
</head>
<body class="bd-w" >
<div id="dataProdukPage" >
    <div style="padding-top: 30px;padding-bottom: 100px">
        <div class="card-textTitleLarge-Black">
            <div class="textTitleLarge-Black" >
               Data Produk
            </div>
        </div>
        <br />
        <div style="padding-bottom: 50px;">
            <ul class="ul-buttonGreen">
                <li class="li-buttonGreen">
                    <a  data-toggle="modal" data-target="#open-dataProduct" id="createNewDataProduct" >
                    <button class="buttonMiddle-green" >Tambah Produk</button>
                    </a>
                </li>
            </ul>
        </div>
        <div id="" style="margin-left: 0px;margin-right: 0px; width: 100%;">
            <div style="overflow-x: auto;">
                <div style="margin-left: 25px;">
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
<!-- Jquery Js -->
<!-- <script type="text/javascript"  src="../js/jquery.js" ></script> -->
<!-- Jquery Ajax Js -->
<!-- <script type="text/javascript" src="../js/ajax/jquery.min.js" ></script> -->
<!-- ajax -->
<script src="../datatable/newJS/jquery.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<script src="../js/pages/productDataAdmin.js"></script>
<script src="../js/jquery.redirect.js"></script>

<!-- <div id="open-updateStokProduct" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Tambah Data Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form method="POST" id="updateStokProduct"  >
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Nama Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <select name="id_produk" class="input-textDataUser" id="id_produk">
                            </select>
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Jumlah :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input type="text" name="jumlah_stok" id="jumlah_stok" class="input-textData" >
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="button" id="btnUpdateStokProduct"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<div id="open-dataProduct" class="modal fade" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content w100">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-t20">Update Stok Produk</h4>
            </div>
            <div class="modal-body" id="modal-body-pad"  >
                <form method="POST" id="createDataProduct"  >
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Nama Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input type="text" name="nama_produk" id="nama_produk" class="input-textData" >
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Jenis Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <select name="id_jenis_produk" class="input-textDataUser" id="id_jenis_produk">
                            </select>
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Jumlah Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <input type="number" name="jumlah_stok" id="jumlah_stok" class="input-textData" >
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Satuan Produk :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <select name="id_satuan_produk" class="input-textDataUser" id="id_satuan_produk">
                            </select>
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Detail Produk 1 :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <textarea  name="detail1_produk" id="detail1_produk" class="input-textData" style=" padding-top: 3px;"></textarea>
                        </div>  
                    </div>
                    <div class="padding-card-textData">
                        <div class="card-textData">
                            <div class="textData">
                                Detail Produk 2 :
                            </div>
                        </div>
                        <div class="card-inputData">
                            <textarea  name="detail2_produk" id="detail2_produk" class="input-textData" style=" padding-top: 3px;"></textarea>
                        </div>  
                    </div>
             
                    <div class="modal-edit" >
                        <div class="button-edit">
                            <button class="button-text-grey" type="button" id="btn-batal-create"  data-dismiss="modal"> KELUAR </button> 
                            <button class="button-text-green" type="button" id="btnCreatedDataProduct"  > SIMPAN </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

