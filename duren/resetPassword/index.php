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
    $email = $_GET['email'];
    $kode = $_GET['kode'];
  ?>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | Reset Password</title>
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
            <form method="POST" id="sendDataReset">
          <!--   <form method="POST" action="../conn/login.php?op=in"> -->
              <div>
                <div class="titleLogin">
                  Reset Password
                </div>
                <div class="paddingTopBottom10">
                  New Password
                  <input type="password" class="form-control" name="password" id="password"  >
                </div>
                <div class="paddingTopBottom10" style="padding-bottom: 40px;" >
                  Repeat Password
                  <input type="password" name="resetPassword" id="resetPassword" class="form-control" >
                </div>
                <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $email; ?>" >
                <input type="hidden" class="form-control" name="kode" id="kode"  value="<?php echo $kode; ?>">
                <div class="text-forgot" >
                 <!--  <a href="" style=""> Forgot Password?</a> -->
                 <br />
                </div>
                <div style="padding-bottom: 20px;">
                  <button type="button" id="actionSendData" class="buttonYellow">Send</button>
                </div>
              </div>
            </form>
            <div style="text-align: center;">
              <a href="../signup" > Create Account</a>
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
<script type="text/javascript" src="../js/resetPassword.js?v=1.4.1"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
</body>
</html>
