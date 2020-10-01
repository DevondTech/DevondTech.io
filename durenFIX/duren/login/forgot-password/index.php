<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | Login User</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="../../font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="durian">
  <meta name="keywords" content="durian" />
  <link rel="icon"  href="../../images/1.jpg" type="image/x-icon">
  <meta name="rating" content="general">
  <meta name="robots" content="index, follow">
  <meta name="distribution" content="world" />
  <meta name="author" content="devond" />
  <meta name="generator" content="devond" />
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css?v=1.0.1">
  <link rel="stylesheet" type="text/css" href="../../css/durianLoginSignup.css?v=1.0.1">
  <link href="../../scroll/css/style.css?v=1.0.1" rel="stylesheet" />
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
              <img src="../../images/logo-king-fruit.png" class="logo-NavIconLink">
            </div>
            <div class="image-leftDuren-login" >
              <div>
                <img data-src="../../images/gambar-duren.png" src="../../images/blank.png" class="lazy" width="80%" >
              </div>
              <div class="image-leftText-login">
                <img src="../../images/icon/text-top.png"  width="90%">
              </div>
            </div>
          </div>
          <div class="rightLoginDiv col-lg-5 col-md-12 col-sm-12" >
            <div class="tabletPhone-logoLogin">
              <img src="../../images/logo-king-fruit.png" class="logo-NavIconLink">
            </div>
            <form method="POST" id="login-form">
              <div>
                <div class="titleLogin">
                  Forgot Password
                </div>
                <div class="paddingTopBottom10">
                  Insert Your Email
                  <input type="email" class="form-control" name="email" id="email" placeholder="Ex : devond.teknologi@gmail.com" >
                </div>
                <div class="paddingTopBottom10">
                  <button type="button" id="btn-login" class="buttonYellow">Send To Mail</button>
                </div>
              </div>
            </form>
            <div>
              <a href="../" class="a-createAccount">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

<script type="text/javascript"  src="../../js/jquery.js" ></script>
<script type="text/javascript" src="../../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../../js/bootstrap.js" ></script>
<script type="text/javascript" src="../../scroll/js/scroll.js"></script>
<script type="text/javascript" src="../../js/slideSmall.js"></script>
<script type="text/javascript" src="../../js/durian.js"></script>
<script type="text/javascript" src="../../js/login-signup.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
</body>
</html>
