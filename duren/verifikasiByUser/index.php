<?php include '../mail/sendbyuser.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <?php
   error_reporting(0);
  ?>
 
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | Verifikasi E-mail</title>
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
</head>
<style type="text/css">
@media(max-width: 992px){
  .rightLoginDiv{
    height: 100vh;
    padding-top: 60px;
  }
}
.login {
  background-color: #f9fbf0;
  height: 120vh;
  font-size: 20px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  width: 100%;
  background: url(../images/ex-bg.jpg);
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: repeat;
      background-attachment: scroll;
      background-size: auto;
  background-position-x: 0%;
  background-position-y: 0%;
  background-repeat: repeat;
  background-attachment: scroll;
  background-size: auto;
  padding-bottom: 0px;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  /*margin-top: -54px;*/
}
  </style>
<body>
  <?php echo $alert; ?>
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
            <form method="post">
          <!--   <form method="POST" action="../conn/login.php?op=in"> -->
              <div>
                <div class="titleLogin">
                  Kirim Verifikasi
                </div>
                <div class="paddingTopBottom10">
                  E-mail Anda
                  <input class="form-control" type="email" name="email" >
                </div>
                <!-- <div class="paddingTopBottom10" style="color:#CEA32B;font-size: 15px;" >
                  Silahkan Klik Untuk Melanjutkan Konfirmasi Ke E-mail Anda 
                </div> -->
                <div class="text-forgot" >
                 <!--  <a href="" style=""> Forgot Password?</a> -->
                 <br />
                </div>
                <div class="paddingTopBottom10" style="margin-top: 10px;">
                  <button type="submit" name="submit" class="buttonYellow">Kirim ke E-mail Verifikasi</button>
                </div>
              </div>
            </form>
            <!-- <div>
              <a class="a-createAccount"> Pastikan E-mail Anda Benar</a>
            </div> -->
            <div>
              <a href="../" class="a-createAccount">Klik Kembali</a>
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
<!-- <script type="text/javascript" src="../js/login-signup.js?v=1.2.1"></script> -->
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
</body>
</html>
