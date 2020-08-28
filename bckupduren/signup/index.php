<!doctype html>
<html lang="en">
<head>
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
                <img src="../images/logo-king-fruit.png" class="logo-NavIconLink">
              </div>
              <form method="POST" id="signup-form">
                <div>
                  <div class="inputDoubleSignup">
                    Full Name
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Ex : Try Wuri Kinanti" >
                  </div>
                  <div class="inputDoubleSignup">
                    Phone Number
                    <input type="number" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Ex : 08994190773" >
                  </div>
                  <div class="inputSingleSignup">
                    Username
                    <input type="text" class="form-control" name="username" id="username" placeholder="Ex : Wuri678" >
                  </div>
                  <div class="inputSingleSignup">
                    E-mail
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ex : mail@gmail.com" >
                  </div>
                  <div class="inputDoubleSignup">
                    Password
                    <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" >
                  </div>
                  <div class="inputDoubleSignup">
                    Repeat Password
                    <input type="password" name="password_re" id="password_re" class="form-control" placeholder="Repeat Your Password">
                  </div>
                  <div style="float: left">
                  <label class="text-forgot cursorPointer container" >
                    <input type="checkbox" id="checkSignup" checked="checked">
                    I agree to the terms and conditions
                  </label>
                  </div>
                  <div class="paddingTopBottom10 paddingLeftRight10">
                    <button type="button" id="btn-signup" class="buttonYellow">Signup</button>
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
<script type="text/javascript" src="../js/durian.js"></script>
<script type="text/javascript" src="../js/login-signup.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
</body>
</html>
