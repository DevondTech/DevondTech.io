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
<link href="../css/dataUserLogin.css?v=1.1.1" rel="stylesheet" />
<style type="text/css">

    .imageStar-smallLeft-detailComment {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30px;
        padding-right: 5px;
        padding-left: 5px;
    }

    .image-small-detailComment {
        float: left;
    }

    .textArea-textDataComment {
        width: 100%;
        height: 70px;
        color: #000;
        padding-left: 5px;
        padding-right: 5px;
        border: 1px solid #969191;
        border-radius: 3px;
        padding-bottom: 5px;
        resize: none;
    }

    .card-textDataComment {
        width: 20%;
        float: left;
    }

    .card-inputDataComment {
        width: 80%;
        float: left;
    }

    .textDataComment {
        text-align: start;
        padding-right: 20px;
        padding-top: 5px;
    }
    .w85{
        width: 85%;
    }

    .buttonComment-green {
        font-size: 16px;
        color: white;
        background-color: #2d472c;
        border-radius: 5px;
        border: 1px solid #2d472c;
        padding-bottom: 8px;
        padding-top: 8px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .buttonComment-red {
        font-size: 16px;
        color: white;
        background-color: #f93434;
        border-radius: 5px;
        border: 1px solid #f93434;
        padding-bottom: 8px;
        padding-top: 8px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .buttonComment-green:hover {
        font-size: 16px;
        color: #2d472c;
        background-color: white;
        border-radius: 5px;
        border: 1px solid #2d472c;
        padding-bottom: 8px;
        padding-top: 8px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .buttonComment-red:hover {
        font-size: 16px;
        color: #f93434;
        background-color: white;
        border-radius: 5px;
        border: 1px solid #f93434;
        padding-bottom: 8px;
        padding-top: 8px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .floatRightbutton{
        float: right;
    }

    .padRight15px{
        padding-right: 15px;
    }

    .imageStar-smallLeft-detailComment {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50px;
        padding-right: 5px;
        padding-left: 5px;
    }

    .w85{
        width: 85%;
        float: left;
    }

    .imageStar-smallLeft-detailComment{
        cursor: pointer;
    }

    @media(max-width: 650px){
        .imageStar-smallLeft-detailComment {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40px;
            padding-right: 5px;
            padding-left: 5px;
        }

        .cardButton{
            width: 100%;
            display: inline-block;
            margin-top: 15px;
        }

        .cardStar{
            float: left;
            padding-bottom: 15px;
        }

        .card-inputDataComment {
            width: 100%;
            float: left;
        }

        .card-textDataComment {
            width: 100%;
            float: left;
        }
    }

</style>
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

    .textArea-textDataComment {
        width: 100%;
        height: 170px;
        color: #000;
        padding-left: 5px;
        padding-right: 5px;
        border: 1px solid #969191;
        border-radius: 3px;
        padding-bottom: 5px;
        resize: none;
    }
</style>
</head>
<body class="bd-w">
<div class="divPositionContentTop">
    <div class="card-textTitleLarge-Black">
        <div class="textTitleLarge-Black" >
            Kirim Review Anda
        </div>
    </div>
</div>
<div>
    <div class="positionDataNull">
        <div class="padLeft20CartData">
            <div class="">
                <form method="POST" id="createDataCommentProductForm">
                    <div class="Card-inputDataUser-paddingTopBottom20px">
                        <div class="card-textDataComment">
                            <div class="textDataComment">
                                Review Anda
                                <input type="hidden" name="star" id="star" value="5">
                                <input type="hidden" name="id_produk" id="id_produk" >
                                <input type="hidden" name="id_pemesanan" id="id_pemesanan" >
                            </div>
                        </div>
                        <div class="card-inputDataComment" style="padding-bottom: 20px;">
                            <textarea name="DataInputComment" id="DataInputComment" style="background-color:white;color: black;padding-top: 4px;" class="textArea-textDataComment"></textarea>
                        </div>
                        <div class="card-textDataComment">
                            <div class="textDataComment">
                               
                            </div>
                        </div>
                    </div>
                    <div class="cardStar">
                       <div class="image-small-detailComment">
                          <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star1">
                        </div>
                        <div class="image-small-detailComment">
                          <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star2">
                        </div>
                        <div class="image-small-detailComment">
                          <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star3">
                        </div>
                        <div class="image-small-detailComment">
                          <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star4">
                        </div>
                        <div class="image-small-detailComment">
                          <img src="../../../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailComment" id="star5">
                        </div>
                    </div> 
                    <div class="cardButton">
                        <div class="floatRightbutton ">
                            <button class="buttonComment-green" type="button" id="buttonCommentSave">KIRIM</button>
                        </div>
                    </div>       
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../js/action.js"></script>
<script type="text/javascript" src="../js/pages/konsumen/cartDataKonsumenCartCommentProduct.js"></script>
<script type="text/javascript" src="../js/pages/konsumen/createDataCommentProduct.js"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->
</body>
</html>