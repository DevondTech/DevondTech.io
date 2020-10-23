
</html>

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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
<style type="text/css">
    .positionDataNull{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        padding-top: 50px;
    }

    .imgDataNull{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%;
    }

    .textClickToProduct{
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        margin-top: 20px;
    }

    @media(max-width: 796){
        .textClickToProduct{
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    }
    
    @media(max-width: 767px){
        .imgDataNull{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .textClickToProduct{
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    }
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
</style>
</head>
<body class="bd-w">

<!-- <div>
    <div class="positionDataNull">
        <a  style="color:#2d472c;">
            <img src="../images/icon png/comingsoon.png" class="imgDataNull">
            <div class="textClickToProduct">Halaman Dalam Proses Pembuatan</div>
        </a>
    </div>
</div> -->

<div class="divPositionContentTop">
    <div id="dataConfirmationShippedPage" >
        <div class="paddingtopData1">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black" >
                   Pengajuan Retur Anda
                </div>
            </div>
            <br />
            <div id="" class="parrentDivTable" >
                <div class="scrollTableX">
                    <div class="marginLeft25">
                         <table style="width: 100%;" border=1px; class="table table-bordered" id="dataRetur">
                            <thead>
                                <tr>
                                    <td class="table-tdYellowHeader">
                                        Kode Retur
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Tanggal Pengajuan
                                    </td>
                                    <td class="table-tdYellowHeader">
                                        Status Retur
                                    </td>
                                    <!-- <td class="table-tdYellowHeader">
                                        Aksi
                                    </td> -->
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
<script src="../js/action.js"></script>
<script src="../datatable/newJS/jquery.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" src="../datatable/newJS/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../datatable/newJS/dataTables.bootstrap.min.js"></script>
<script src="../js/pages/konsumen/cartDataReturKonsumenAll.js?v=1.5.1"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>

