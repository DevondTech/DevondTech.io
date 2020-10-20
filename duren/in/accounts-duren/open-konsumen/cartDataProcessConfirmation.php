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
</style>
</head>
<body class="bd-w">
<div class="divPositionContentTop">
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
            Status Pemesanan
        </div>
    </div>
</div>
<div>
    <div class="positionDataNull">
        <a  style="color:#2d472c;">
            <img src="../images/icon png/pembayaran-diperiksa.png" class="imgDataNull">
            <div class="textClickToProduct">Pesanan Sedang di Proses</div>
        </a>
    </div>
</div>
<script src="../js/action.js?v=1.3.1"></script>

<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>

