<?php include '../mail/sendemail.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <script type="text/javascript" src="../js/pageLoadISP.js"></script>
  <?php
   error_reporting(0);
  ?>
  <?php
    session_start();
    if($_SESSION['id_status_user']=="5"){
        die("<script language='javascript'> document.location='../in/accounts-duren/open-konsumen/'</script>");
    }
    else if($_SESSION['id_status_user']=="1"){
        die("<script language='javascript'> document.location='../in/accounts-duren/open-admin/'</script>");
    }
    else{

    }
    $userHalu = $_SESSION['nama_lengkap'];
  ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | KING OF THE KING</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="../font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="KING FRUIT | KING OF THE KING. Durian LOKAL yang FENOMENAL ! King Fruit menghadirkan buah durian dengan rasa berkualitas dari masa panen pilihan dan Super Montong sebagai produk pertama yang dihadirkan untuk para durian lovers. Premium Quality Super Montong tergambar dari ketebalan daging, konsistensi rasa yang legit, manis dan creamy. Dan yang pasti rasa yang tidak akan terlupakan.">
  <meta name="keywords" content="kingfruit.co.id , king fruit , durian king fruit, durian montong , buah durian , durian jakarta , durian jabodetabek , durian manis" />
  <link rel="icon"  href="../images/1.jpg" type="image/x-icon">
  <meta name="rating" content="general">
  <meta name="robots" content="index, follow">
  <meta name="distribution" content="world" />
  <meta name="author" content="devond" />
  <meta name="generator" content="devond" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css?v=1.3.1">
  <link rel="stylesheet" type="text/css" href="../css/chat.css?v=1.0.1">
  <link href="../scroll/css/style.css?v=1.0.1" rel="stylesheet" />
  <link rel="stylesheet" href="../js/sweetAlert/sweetalert2.min.css">
  <style type="text/css"> 

    .fontData{
      font-family: 'Open Sans', sans-serif
    }

    .div-buttonTextBuy-detailProduct{
      margin-top: -3px;
    }

    .swal2-popup #swal2-content {
      text-align: center;
      font-size: 14px;
    }
    
    .li-medsos-hr-top {
      float: left;
      padding-left: 5px;
      padding-right: 10px;
    }

    @media(min-width: 992px){
      .padF20px{
        padding-right: 30px;
      }
    }

    .textMailSend{
      font-size: 16px;
      padding-bottom: 4px;
      padding-top: 4px;
    }

    .positionButtonYellowSend{
      padding-top: 20px;
      padding-bottom: 60px;
      float: right;
    }

    .buttonYellowSend{
      background-color: #cda32b;
      font-size: 25px;
      padding: 5px;
      padding-left: 15px;
      padding-right: 15px;
      min-width: 150px;
      color: white;
      border: 1px solid #cda32b;
      border-radius: 5px;
      cursor: pointer;
    }

    .buttonYellowSend:hover{
      background-color: #906c05;
      font-size: 25px;
      padding: 5px;
      padding-left: 15px;
      padding-right: 15px;
      min-width: 150px;
      color: white;
      border: 1px solid #cda32b;
      border-radius: 5px;
      cursor: pointer;
    }

    @media(max-width: 767px){
      .buttonYellowSend{ 
        background-color: #cda32b;
        font-size: 21px;
        padding: 3px;
        padding-left: 15px;
        padding-right: 15px;
        min-width: 100px;
        color: white;
        border: 1px solid #cda32b;
        border-radius: 5px;
        cursor: pointer;
      }

      .buttonYellowSend:hover{
        background-color: #906c05;
        font-size: 21px;
        padding: 3px;
        padding-left: 15px;
        padding-right: 15px;
        min-width: 100px;
        color: white;
        border: 1px solid #cda32b;
        border-radius: 5px;
        cursor: pointer;
      }
    }

    .fotterCol{
      padding-right: 0px;
      padding-left: 30px;
    }

    .advantages-text-bold {
      font-weight: bolder;
      font-size: 14px;
      padding-bottom: 15px;
    }

    .col20-card-top {
      min-height: 160px;
    }
    .aLink{
      color: white;
    }

    .alink:hover {
      color: #fbc893;
    }

    .alink:active {
      color: #fbc893;
    }

    .cardAdvantagesColor{
      height: 100%;
      /* background-color: #ddf7df; */
      margin: 5px;
      border-radius: 8px;
      border: 1px solid #fff;
    }

    .paddingBottomCardMinTablet{
      padding-bottom: 0px;
    }

    .detail-product {
      /* height: 100vh; */
      font-size: 20px;
      /* box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); */
      width: 100%;
      /* background: url(../images/detail-bg.png); */
      padding-bottom: 60px;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-size: cover;
      padding-top: 80px;
    }

    .advantages-content {
      background-color: #f5f5f5;
      color: #333232;
      padding-bottom: 50px;
      padding-top: 25px;
      padding-top: 40px;
    }

    #medsosTopPhone{
      display: none;
    }

    .div-footer-content {
      background-color: #2d472c;
      color: #fff;
      font-size: 13px;
    }

    .advantages-content {
      background-color: #2d472c;
      color: #ffffff;
      padding-bottom: 50px;
      padding-top: 25px;
      padding-top: 40px;
    }

    @media(max-width: 991px){
      .paddingBottomCardMinTablet{
        padding-bottom: 15px;
      }
    }

    @media(max-width: 575px){
      .cardAdvantagesColor {
        height: 100%;
        /* background-color: #ddf7df; */
        margin: 5px;
        border-radius: 8px;
        border: 1px solid #fff;
        margin-left: 15px;
      }

      #medsosTopPhone{
        display: block;
      }
    }
  </style>
</head>
<body class="halamanUtama">
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="top-page" id="top-page">
    <nav id="navbar-page" class="nav-outscroll2 nav-fixed navbar navbar-expand-lg navbar-light " style="z-index: 1;"> 
      <?php include '../headerFooter/smallMenu.php'; ?>    
      <?php include '../headerFooter/header.php'; ?>
      <div class="nav-icon-link-large">
        <ul class="ul-icon-link">
          <li id="search-input-large" class="li-icon-link-search-hidden" >
            <input type="" name="" class="input-search" placeholder="Search...">
            <img src="../images/icon/close.png" id="close-search-large" class="img-close-icon-search" >
          </li>
          <li id="login-icon-large" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="../login">
              <img src="../images/icon/user.png" class="img-icon-top">
            </a>
          </li>
          <li class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="../login">
              <img src="../images/icon/buy.png" class="img-icon-top">
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row-top-displayBlock row" style="">
      <div class="col-sm-6">
        <div style="background-color: #cda32b">
          <div class="card-textTop">
            <div class="fontData" style="font-weight: bold;">
            KING FRUIT  
            </div>
            <!-- <div style="font-size: 14px;" id="topText"></div> -->
            <div class="fontData" style="font-size: 14px;" >
              Durian LOKAL yang FENOMENAL ! King Fruit menghadirkan buah durian dengan rasa berkualitas dari masa panen pilihan dan <b>Super Montong</b> sebagai produk pertama yang dihadirkan untuk para durian lovers. <b>Premium Quality Super Montong</b> tergambar dari ketebalan daging, konsistensi rasa yang legit, manis dan creamy. Dan yang pasti rasa yang tidak akan terlupakan.
            </div>
          </div>      
        </div>
      </div>
      <div class="div-img-imageTop col-sm-6" >
        <img src="../images/gambarDuren.png"  class="lazy" width="80%" >
      </div>
      <div class="div-img-textTop">
        <img src="../images/icon/text-top.png"   class=" text-durian-top">
      </div>
    </div>
    
    <div>
      <ul class="ul-medsos-icon-top" id="medsosTopPhone">
        <li class="li-medsos-hr-top">
          <div class="vl"></div>
        </li>
        <!-- <li class="li-medsos-icon-top">
          <a href="" id="facebook1"><img src="../images/icon/facebook.png"   class=" img-icon-top"></a>
        </li> -->
        <li class="li-medsos-icon-top">
          <a href="" id="instagram1"><img src="../images/icon/instagram.png" class=" img-icon-top"></a>
        </li>
        <li class="li-medsos-icon-top">
          <a href="" id="whatsapp1"><img src="../images/icon/whatsapp.png" class=" img-icon-top"></a>
        </li>
      </ul>
    </div>
  </div>
  <section id="detail-product-content" style="margin-top: -60px;">
    <form id="updateCheckOutByUserForm" action="../login">
      <input type="hidden" value="cart" id="textData">
      <div id="detail-product" class="detail-product">
        <div class="container" style="margin-top: 60px;">
          <div  class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="divCardImage-large-detailProduct">
               <img   class="lazy image-center" id="imgDataLarge">
              </div>
              <div class="divCardImage-small-detailProduct">
                <div class="divImage-smallCenter-detailProduct">
                  <div class="image-small-detailProduct">
                    <img   class="lazy image-smallCenter-detailProduct" id="imgDataSmall1">
                  </div>
                  <div class="image-small-detailProduct">
                    <img  class="lazy image-smallCenter-detailProduct" id="imgDataSmall2">
                  </div>
                  <div class="image-small-detailProduct">
                    <img   class="lazy image-smallCenter-detailProduct" id="imgDataSmall3">
                  </div>
                  <div class="image-small-detailProduct">
                    <img   class="lazy image-smallCenter-detailProduct" id="imgDataSmall4">
                  </div>
                  <!--  <div class="image-small-detailProduct">
                    <img data-src="images/detail-bawor.png" src="images/blank.png" class="lazy image-smallCenter-detailProduct">
                  </div> -->
                </div>
              </div>
              <div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="margin-Bottom-detailProduct">
                <div class="textBlack25-boldLarge-detailProduct" id="judulProduk">
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div class="">
                  <div class="image-small-detailProduct">
                    <img src="../images/icon/star-active.png"  class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img src="../images/icon/star-active.png"  class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img src="../images/icon/star-active.png"  class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img src="../images/icon/star-active.png"  class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img src="../images/icon/star-active.png" class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                </div>
              </div>
              <br />
              <div class="margin-TopBottom-detailProduct" id="dataHarga">
                <div class="textBlack25-boldLarge-detailProduct" id="hargaProduk" style="color:#c81a1a;"></div>
                <div style="border-bottom: 2px solid #c81a1a;width: 170px;margin-top: -19px;"></div>
                <div class="textBlack25-boldLarge-detailProduct" id="hargaDiskon" style="margin-top: 10px;">
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct" id="dataHargaReal">
                <div class="textBlack25-boldLarge-detailProduct" id="hargaReal" style="margin-top: 10px;">
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div>
                  <a href="#">
                    <button class="buttonIconBuy-detailProduct" id="updateCheckOutByUserButton" type="submit">
                      <div class="div-buttonIconBuy-detailProduct">
                        <img src="../images/icon/buy-2.png" class="lazy imageBuy-smallCenter-detailProduct">
                      </div>
                      <div class="div-buttonTextBuy-detailProduct">add to chart </div>
                    </button>
                  </a>
                </div>
              </div>
              <div class="margin-TopBottom20-detailProduct">
                <div class="textGrey16-regular-detailProduct" id="detail1Produk">
                </div>
                <div class="textGrey16-regular-detailProduct" id="detail2Produk">
                </div>
                <div class="textGrey16-regular-detailProduct" style="margin-top: 20px;">
                  Berat:
                </div>
                <div class="textGrey16-regular-detailProduct" id="beratProduk" >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="margin-Bottom-detailProduct" style="margin-top: 5px;">
                <div class="textBlack18-boldLarge-detailProduct">
                  Costumer Reviews
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct">5 Star</div>
                    <div class="percentageStar-detailProduct">100 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct" >4 Star</div>
                    <div class="percentageStar-detailProduct">0 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct">3 Star</div>
                    <div class="percentageStar-detailProduct">0 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct">2 Star</div>
                    <div class="percentageStar-detailProduct">0 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct">1 Star</div>
                    <div class="percentageStar-detailProduct">0 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="margin-TopBottom-detailProduct">
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <b>
                      Lorem ipsum dolor sit amet
                    </b>
                  </div>
                  <div>
                    Lorem ipsum dolor sit amet consectectur elit ipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet 
                  </div>
                </div>
              </div> -->
              <div class="margin-TopBottom-detailProduct">
                <div class="textblack14-regular-detailProduct">
                  Share to:
                </div>
              </div>
              <div class="divCardImage-small-detailProduct">
                <div class="divImage-smallCenter-detailProduct">
                  <!-- <div class="image-small-detailProduct">
                    <a href="" id="facebook2"><img src="../images/icon/facebook-2.png"  class="lazy imageMedsos-smallCenter-detailProduct"></a>
                  </div> -->
                  <div class="image-small-detailProduct">
                    <a href="" id="whatsapp2"><img src="../images/icon/whatsapp-2.png"  class="lazy imageMedsos-smallCenter-detailProduct"></a>
                  </div>
                  <!-- <div class="image-small-detailProduct">
                    <a href="" id="twitter2"><img src="../images/icon/twitter-2.png"  class="lazy imageMedsos-smallCenter-detailProduct"></a>
                  </div> -->
                  <div class="image-small-detailProduct">
                    <a href="" id="instagram2"><img src="../images/icon/instagram-2.png"  class="lazy imageMedsos-smallCenter-detailProduct"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <section id="advantages-content">
    <div class="advantages-content">
      <div class="container">
        <div class="row">
          <div class="paddingBottomCardMinTablet col-lg-3 col-md-6 col-sm-6">
            <div class="cardAdvantagesColor">
              <div class="content-text-advantages">
                <div class="col20-card-top">
                  <img src="../images/icon/premium.png"  class="lazy " width="130px">
                </div>
                <div class="advantages-text-bold">PREMIUM QUALITY</div>
              </div>
            </div>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-3 col-md-6 col-sm-6">
            <div class="cardAdvantagesColor">
              <div class="content-text-advantages">
                <div class="col20-card-top">
                  <img src="../images/icon/higenis.png"  class="lazy " width="130px">
                </div>
                <div class="advantages-text-bold">HYGINIECALLY PACKAGED</div>
              </div>
            </div>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-3 col-md-6 col-sm-6">
            <div class="cardAdvantagesColor">
              <div class="content-text-advantages">
                <div class="col20-card-top">
                  <img src="../images/icon/onestop.png"  class="lazy " width="130px">
                </div>
                <div class="advantages-text-bold">ONE STOP DESTINATION </div>
              </div>
            </div>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-3 col-md-6 col-sm-6">
            <div class="cardAdvantagesColor">
              <div class="content-text-advantages">
                <div class="col20-card-top">
                  <img src="../images/icon/taste.png" class="lazy " width="130px">
                </div>
                <div class="advantages-text-bold">UNFORGETTABLE TASTE</div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </section>
  <section id="footer-content">
    <?php include '../headerFooter/footer.php'; ?>
  </section>
  <div id="">
    <div class="open-chat-modal" style="right: -5px">
      <div class="div-icon-chat" >
        <a href="https://api.whatsapp.com/send?phone=6281311993939" id="whatsapp4">
          <div class="button-icon-chat" style="background: #253b24;padding-left: 8px;padding-right: 8px;border-radius: 10px;padding-top: 8px;padding-bottom: 8px;">
            <img class="icon-chat" src="../images/wa.png"> 
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="chat-popup" id="myForm" >
    <div class="card-chat">
      <div class="content-title-chat">
        <div class="text-title-chat">
          Live Chat
        </div>
        <div>
          <div type="button" class="button-close-chat" id="closeForm">X</div> 
        </div>
      </div>
      <div>
        <div id="chatSend" class="form-container">
          <div class="font-size14">
            <div>
            Haloo...
            </div>
            <div>
              <div>
                <div id="output-chat">
                </div>
              </div>
            </div>
          </div>
          <div class="card-text-sendChat">
            <div class="content-text-sendChat">
              <div class="div-input-sendChat">
                <input placeholder="Ketik........" name="chat" class="input-sendChat" id="chat-text">
              </div>
              <div class="div-button-sendChat">
                <a id="chatSend2" type="button" class="button-sendChat" >
                  <div class="card-button-sendChat">
                    <img src="../images/icon/send.png" width="30px;">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/bootstrap.js" ></script>
<script type="text/javascript" src="../js/slideSmall.js"></script>
<script type="text/javascript" src="../js/durianRoot.js?v=2.2.1"></script>
<script type="text/javascript" src="../js/sweetAlert/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="../js/headerFooter.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
<script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>
<script type="text/javascript">
  function validateForm() {
    var a = document.forms["Form"]["name"].value;
    var b = document.forms["Form"]["phone"].value;
    var c = document.forms["Form"]["email"].value;
    var d = document.forms["Form"]["textMail"].value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "") {
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Dengan Lengkap",
        type: "error"
      });
      return false;
    }
  }
  
    /*$('#detail-product-content').scrollTop > 20;*/
    

</script>

</body>
</html>