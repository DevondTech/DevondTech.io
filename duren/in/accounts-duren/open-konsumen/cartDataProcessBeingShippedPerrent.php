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
    date_default_timezone_set('Asia/Jakarta');
    $now = date('Y-m-d H:i:s'); 
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Account</title>
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
<style type="text/css">

    .mTop60px{
        margin-top: 60px;
    }

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

    .borderImgLeft{
        border-right: 3px solid #2d472c;
        height: 230px;
    }

    .textOr{
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        font-style: italic;
        color: #434444;
        margin-top: 8px;
        padding-bottom: 2px;
    }

    .buttonGreen{
        width: 100%;
        font-size: 16px;
        color: white;
        background-color: #2d472c;
        border-radius: 5px;
        border: 1px solid #2d472c;
        padding-bottom: 8px;
        padding-top: 8px;
        margin-right: 8px;
        margin-left: 8px;
    }

    .buttonGreen:hover{
        width: 100%;
        font-size: 16px;
        color: #2d472c;
        background-color: white;
        border-radius: 5px;
        border: 1px solid #2d472c;
        padding-bottom: 8px;
        padding-top: 8px;
        margin-right: 8px;
        margin-left: 8px;
    }

    .positionDataNull {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        padding-top: 80px;
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

        .mTop60px{
            margin-top: 0px;
            padding-bottom: 100px;
        }

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

        .borderImgLeft{
            border-right: 0px solid #2d472c;
            border-bottom: 3px solid #2d472c;
            height: auto;
            padding-bottom: 40px;
            margin-left: 35px;
            margin-right: 35px;
            margin-bottom: 15px;    
        }

        .positionDataNull {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding-top: 50px;
        }
    }
</style>
</head>
<body class="bd-w">
    <div id="contentDataFinishingProcess">
        <div class="divPositionContentTop">
            <div class="card-textTitleLarge-Black">
                <div class="textTitleLarge-Black" >
                    Status Pesanan
                </div>
            </div>
        </div>
        <div>
            <div class="positionDataNull">
                <input type="hidden" name="waktu_batas_retur" id="waktu_batas_retur">
                <input type="hidden" name="waktu_batas_review" id="waktu_batas_review">
                <input type="hidden" name="waktu_penerimaan" id="waktu_penerimaan">
                <input type="hidden" name="nowDate" id="nowDate" value="<?php echo $now; ?>">
                <div class="row">
                    <div class="borderImgLeft col-lg-6 col-md-6 col-sm-6">
                        <a  style="color:#2d472c;">
                            <img src="../images/icon png/barang-diterima.png" class="imgDataNull">
                            <div class="textClickToProduct">Barang Sudah Diterima</div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card-buttonSelectPic" id="cardSendReviewAction">
                            <div class="margin-auto">
                                <form method="POST" id="createConfirFinishDataForm">
                                    <input type="hidden" name="b" id="b">
                                    <button id="buttonComment" class="buttonGreen">Kirim Komentar Anda</button>
                                </form>
                            </div>
                        </div>
                        <div id="textOr">
                            <div class="textOr">Or</div>
                        </div>
                        <div class="card-buttonSelectPic" id="cardReturAction">
                            <div class="margin-auto">
                                <form method="POST" id="createReturDataForm">
                                    <input type="hidden" name="f" id="f">
                                    <button id="buttonRetur" class="buttonGreen">Pengembalian Barang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../js/action.js"></script>
<script type="text/javascript" src="../js/pages/konsumen/actionCartDataProcessBeingShippedParrent.js?v=1.2.6"></script>
</body>
</html>

