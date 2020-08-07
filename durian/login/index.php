<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit</title>
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
  <link rel="stylesheet" type="text/css" href="../css/chat.css?v=1.0.1">
  <link href="../scroll/css/style.css?v=1.0.1" rel="stylesheet" />
</head>
<body>
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="top-page">
    <div>
      <div class="container">
        <div class="row" style="    margin: auto;
    padding-top: 15px;
    height: 100vh;color: white;">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div>
              <img src="../images/logo-king-fruit.png" class="logo-NavIconLink">
            </div>
            <div style="padding-top: 100px">
            <div>
              <img data-src="../images/gambar-duren.png" src="../images/blank.png" class="lazy" width="80%" >
            </div>
            <div style="padding-top: 30px;">
              <img data-src="../images/icon/text-top.png"   src="images/blank.png" class="lazy" width="100%">
            </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12" style="margin: auto;">
            <form method="POST" id="login-form">
            <div>
              <div style="font-size: 40px;
font-weight: bold;">
                Silahkan Login 
              </div>
              <div style="    padding-top: 10px;
    padding-bottom: 10px;">
              Username
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
              </div>
              <div style="    padding-top: 10px;
    padding-bottom: 10px;">
              Password
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div>
              <div style="    padding-top: 10px;
    padding-bottom: 10px;">
              <button type="submit" id="btn-login">Login</button>
              </div>
            </div>
            </form>
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
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
<script>
    $('document').ready(function()
    { 

      $('#btn-login').on('click',function(e){
        var username = $('#username').val();
        var password = $('#password').val();
        if(username == ''){
          alert('isi dulu usernamenya')
        }
        if(password == ''){
          alert('isi dulu passwordnya')
        }  
        if(username != '' && password != ''){
           var data = $("#login-form").serialize();
           console.log(data);
     $.ajax({

       type : 'POST',
       url  : '../conn/cek-login.php',
       data : data,
       beforeSend: function()
       { 
        $("#error").fadeOut();
        $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
       }, 
     

        success :  function(response)
          {      
         if(response == "ok"){

          $("#btn-login").html('<img src="https://github.com/maulayyacyber/phantom0308/raw/master/btn-ajax-loader.gif" />   Signing In ...');
          setTimeout(' window.location.href = "../"; ',400);
         }
         else{

          $("#error").fadeIn(1000, function(){   

          $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   alamat email atau password salah!.</div>');
               $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span>   Sign In');

           });
          }
         }
       });
        return false;

        }      
      });
     
    });
</script>
</body>
</html>
