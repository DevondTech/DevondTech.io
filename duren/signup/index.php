<!doctype html>
<html lang="en">
<head>
  <script type="text/javascript" src="../js/pageLoadISP.js"></script>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit | Create Account</title>
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
  <link rel="stylesheet" href="../js/sweetAlert/sweetalert2.min.css">
  <style type="text/css">
    .swal2-popup #swal2-content {
      text-align: center;
      font-size: 18px;
    }
    
    .rightSignupDiv {
      display: block;
      padding-left: 0px;
      padding-right: 0px;
      height: auto;
      font-size: 20px;
      width: 100%;
      /*background: -webkit-gradient(linear,left top,left bottom,from(rgb(0 0 0 / 70%)),to(rgba(19, 68, 20, 0.7))),url(../images/Webduren.jpg);*/
      background: url(../images/Webduren.jpg);
      background-position-x: 0%;
      background-position-y: 0;
      background-repeat: repeat;
      background-position: unset;
      background-attachment: scroll;
      background-size: auto;
      padding-bottom: 20px;
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-size: initial;
    }
  </style>
</head>
<body>
  
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="">
    <div>
      <div class="">
        <div class="row-signup row" >
          <div id="" class="leftSignupDiv col-lg-6 col-md-12 col-sm-12" >
            <div class="card-LeftSignupDiv">
              <div>
                <a href="../">
                  <img src="../images/logo-king-fruit.png" class="logo-NavIconLink">
                </a>
              </div>
              <form method="POST" id="signup-form">
                <div>
                  <div class="inputDoubleSignup">
                    Full Name
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"  >
                  </div>
                  <div class="inputDoubleSignup">
                    Phone Number
                    <input type="number" class="form-control" name="nomor_hp" id="nomor_hp" >
                  </div>
                  <div class="inputSingleSignup">
                    E-mail
                    <input type="email" class="form-control" name="email" id="email" >
                  </div>
                  <div class="inputDoubleSignup">
                    Password
                    <input type="password" name="password" id="password" class="form-control"  >
                  </div>
                  <div class="inputDoubleSignup">
                    Repeat Password
                    <input type="password" name="password_re" id="password_re" class="form-control" >
                  </div>
                  <div style="float: left">
                  <label class="text-forgot cursorPointer container" >
                    <input type="checkbox" id="checkSignup" checked="checked">
                    I agree to the terms and conditions
                  </label>
                  </div>
                  <div class="paddingTopBottom10 paddingLeftRight10">
                    <button type="button" id="btn-signup" class="buttonYellow">Sign Up</button>
                  </div>
                </div>
              </form>
              <div>
                <a href="../login" class="a-createAccount">Login Account</a>
              </div>
            </div>
          </div>
          <div id="rightSignupDiv" class="rightSignupDiv col-lg-6 col-md-12 col-sm-12"  style="">
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
<script type="text/javascript" src="../js/loginSignup.js?v=1.1.6"></script>
<script type="text/javascript" src="../js/sweetAlert/sweetalert2.all.min.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>

</body>
</html>
