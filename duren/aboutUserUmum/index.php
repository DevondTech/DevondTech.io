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
    $userHalu = $_SESSION['nama_lengkap'];
  ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | KING OF THE KING</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="../font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="durian">
  <meta name="keywords" content="durian" />
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
  <style type="text/css">
    .cardTextAbout{
      background-color: #cda32b;
      margin-right: 60px;
    }

    #medsosTopPhone{
      display: none;
    }

    @media(max-width: 920px){
      .cardTextAbout{
        background-color: #cda32b;
        margin-right: 20px;
      }
    }

    @media(max-width: 720px ){
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
  <div class="phoneTop top-page" id="top-page" style="">
    <nav id="navbar-page" class="nav-outscroll2 nav-fixed navbar navbar-expand-lg navbar-light " style="z-index: 1;"> 
      <?php include '../headerFooter/smallMenu.php'; ?>    
      <?php include '../headerFooter/header.php'; ?>
      <div class="nav-icon-link-large">
        <ul class="ul-icon-link">
          <li id="search-input-large" class="li-icon-link-search-hidden" >
            <input type="" name="" class="input-search" placeholder="Search...">
            <img src="../images/icon/close.png" id="close-search-large" class="img-close-icon-search" >
          </li>
          <!-- <li id="search-icon-large" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" >
              <img src="images/icon/search.png" class="img-icon-top">
            </a>
          </li> -->
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
        <div class="cardTextAbout">
          <div class="card-textTop">
            <div style="padding-bottom: 20px;font-weight: bold;">
              About US 
            </div>
            <div style="font-size: 14px;" >
              King Fruit hadir sejak 18 September 2020 melalui e-commerce, dengan produk pertama adalah SUPER MONTONG. Kami berkomitmen untuk menghadirkan berbagai jenis durian lokal dari pelosok Nusantara. Dengan konsep cara baru makan duren, menjadi kampanye hidup bersih di kala pandemi ini.
              <br />
              <br />
              Ini #carabarumakanduren !
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


  <!-- <div class="top-page" id="">
    
  </div> -->

<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/bootstrap.js" ></script>
<script type="text/javascript" src="../js/slideSmall.js"></script>
<script type="text/javascript" src="../js/durianRoot.js?v=2.1.1"></script>
<script type="text/javascript" src="../js/headerFooter.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>

</body>
</html>