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
<!-- css datatables -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<link href="../css/dataUserLogin.css?v=1.1.10" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
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

    .searchDatePositionTopBottom{
        margin-top: 31px;
        padding-bottom: 20px;
    }

    .floatLeft{
        float: left;
        padding-right: 10px;
    }

    #dataSales_filter{
        float: right;
    }

    .floatLeftButton{
        float: left;
        padding-right: 10px;
    }

    .parrentDivTable {
        margin-left: 0px;
        margin-right: 0px;
        width: 100%;
        margin-top: 25px;
    }

    .m3{
        margin-top: 3px;
        font-size: 16px;
        font-weight: bold;
    }

    .txtCenter{
        text-align: center;
    }

    .buttonDateSearch{
        padding-top: 4px;
        padding-bottom: 4px;
        padding-right: 18px;
        padding-left: 18px;
        background-color: #2d472c;
        color: white;
        border: 1px solid #2d472c;
        border-radius: 5px;
    }

    .buttonDateSearch:hover{
        padding-top: 4px;
        padding-bottom: 4px;
        padding-right: 18px;
        padding-left: 18px;
        background-color: white;
        color: #2d472c;
        border: 1px solid #2d472c;
        border-radius: 5px;
    }

    .buttonDateClearSearch{
        padding-top: 4px;
        padding-bottom: 4px;
        padding-right: 18px;
        padding-left: 18px;
        background-color: #fb483a;
        color: white;
        border: 1px solid #fb483a;
        border-radius: 5px;
    }

    .buttonDateClearSearch:hover{
        padding-top: 4px;
        padding-bottom: 4px;
        padding-right: 18px;
        padding-left: 18px;
        background-color: white;
        color: #fb483a;
        border: 1px solid #fb483a;
        border-radius: 5px;
    }

    #dataSales_info{
        float: right;
        display: none;
    }

    .dataTables_paginate{
        float: right;
    }

    @media(max-width: 720px){
        .parrentDivTable {
            margin-left: 0px;
            margin-right: 0px;
            width: 100%;
            margin-top: 20px;
        }

        .m3{
            margin-top: 0px;
        }


        .floatLeft {
            float: unset;
            padding-right: 20px;
            width: 100%;
            margin-top: 10px;
        }
    }

    @media(max-width: 483px){
        .floatLeft {
            float: unset;
            padding-right: 20px;
            width: 100%;
            margin-top: 10px;
        }
    }
   
</style>
</head>
<body class="bd-w" >
<div class="divPositionContentTop">
    <div id="dataConfirmationPayment" >
        <div class="paddingtopData1">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black" >
                   Daftar Penjualan
                </div>
            </div>
            <br />
            <div class="searchDatePositionTopBottom marginLeft25">
                <form id="selectDateForm" method="POST">
                    <div>
                        <div class="floatLeft">
                            <input type="date" name="tanggalAwal" id="tanggalAwal" class="input-textDataUser">
                        </div>
                        <div class="txtCenter m3 floatLeft">
                            s/d
                        </div>
                        <div class="floatLeft">
                            <input type="date" name="tanggalAkhir" id="tanggalAkhir" class="input-textDataUser" >
                        </div>
                        <div class="floatLeft">
                            <div class="floatLeftButton">
                                <button type="button" id="selectDate" class="buttonDateSearch">Cari</button>
                            </div>
                            <div class="floatLeftButton">
                                <button type="button" id="selectClearDate" class="buttonDateClearSearch">Bersihkan</button>
                            </div>
                        </div>
                       
                    </div>
                </form>
            </div>
            <div  class="parrentDivTable" >

                <div class="scrollTableX">

                    <div class="marginLeft25">
                        
                        <br/>
                        <table style="width: 100%;" border=1px; class="table table-bordered" id="dataSales">
                            <thead>
                                <tr>
                                    <td class="table-tdYellowHeader">
                                        Kode Transakasi
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Tanggal
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Nama Pembeli
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
<script src="../js/pages/admin/cartDataSalesAdminNew.js?v=1.1.1"></script>
<script type="text/javascript" src="../js/datatables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/datatables/buttons.flash.min.js"></script>
<script type="text/javascript" src="../js/datatables/jszip.min.js"></script>
<!-- <script type="text/javascript" src="../js/datatables/pdfmake.min.js"></script> -->
<script type="text/javascript" src="../js/datatables/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/datatables/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/datatables/buttons.print.min.js"></script>








</body>
</html>

