<!doctype html>
<html lang="en">
<head>
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
  ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | About US</title>
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
  <link rel="stylesheet" type="text/css" href="../css/style.css?v=1.0.1">
  <link rel="stylesheet" type="text/css" href="../css/durianLoginSignup.css?v=1.0.1">
  <link href="../scroll/css/style.css?v=1.0.1" rel="stylesheet" />
  <style type="text/css">
  </style>
</head>
<style type="text/css">
  .top-page {
    height: 100vh;
  }
  @media(max-width: 992px){
    .rightLoginDiv{
      padding-top: 60px;
    }
  }
</style>
<body>

  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="top-page">
    <div class="">
      <div class="container">
        <div class=" row-login row">
          <div id="leftLoginImage" class="col-lg-7 col-md-12 col-sm-12">
            <div>
              <img src="../images/logo-king-fruit.png" class="logo-NavIconLink">
            </div>
            <div class="image-leftDuren-login" >
              <div>
                <img data-src="../images/gambarDuren.png" src="../images/blank.png" class="lazy" width="80%" >
              </div>
              <div class="image-leftText-login">
                <img src="../images/icon/text-top.png"  width="90%">
              </div>
            </div>
          </div>
          <div class="rightLoginDiv col-lg-5 col-md-12 col-sm-12" >
            <div class="tabletPhone-logoLogin">
              <img src="../images/logo-king-fruit.png" class="logo-NavIconLink">
            </div>
            <div>
              <div class="titleLogin">
                About US
              </div>
              <div class="paddingTopBottom10">
                King Fruit hadir sejak 18 September 2020 melalui e-commerce, dengan produk pertama adalah SUPER MONTONG. Kami berkomitmen untuk menghadirkan berbagai jenis durian lokal dari pelosok Nusantara. Dengan konsep cara baru makan duren, menjadi kampanye hidup bersih di kala pandemi ini.
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
<script type="text/javascript" src="../scroll/js/scroll.js"></script>
<script type="text/javascript" src="../js/slideSmall.js"></script>
<script type="text/javascript" src="../js/durian.js?v=1.1.4"></script>
<script type="text/javascript" src="../js/login-signup.js?v=1.8.1"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
</body>
</html>
