<?php include '../mail/sendemail.php'; ?>
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
  <title>King Fruit | Testimoni</title>
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

    .top-page {
      background-color: transparent;
      height: 103px;
      font-size: 20px;
      -webkit-box-shadow: transparent;
      box-shadow: transparent;
      width: 100%;
      background: transparent;
      padding-bottom: 0px;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-size: cover;
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

      .top-page {
        background-color: transparent;
        height: 103px;
        font-size: 20px;
        -webkit-box-shadow: transparent;
        box-shadow: transparent;
        width: 100%;
        background: transparent;
        padding-bottom: 0px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
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

      .top-page {
        background-color: transparent;
        height: 103px;
        font-size: 20px;
        -webkit-box-shadow: transparent;
        box-shadow: transparent;
        width: 100%;
        background: transparent;
        padding-bottom: 0px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
      }

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
      margin-top: -30px;
      padding-bottom: 20px;
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
      background-color: #305231;
      margin: 5px;
      border-radius: 8px;
      border: 1px solid #fff;
    }

    .paddingBottomCardMinTablet{
      padding-bottom: 20px;
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
        background-color: #305231;
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
    <nav id="navbar-page" class="nav-scroll nav-fixed navbar navbar-expand-lg navbar-light " style="z-index: 1;"> 
      <div class="div-Logo-NavIconlink">
        <img src="../images/logo-king-fruit.png" class="logo-NavIconLink">
      </div>
      <div  id="nav-icon-link"  class="nav-icon-link" >
        <ul class="ul-icon-link">
          <li id="search-input-small" class="li-icon-link-search-hidden" >
            <input id="input-search-small" type="" name="" class="input-search-small" placeholder="Search...">
            <img src="../images/icon/close.png" id="close-search-small" class="img-close-icon-search" >
          </li>
         <!--  <li id="search-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" >
              <img src="images/icon/search.png" class="img-icon-top">
            </a>
          </li> -->
          <li id="login-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="../login">
              <img src="../images/icon/user.png" class="img-icon-top">
            </a>
          </li>
          <li id="buy-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="../login">
              <img src="../images/icon/buy.png" class="img-icon-top">
            </a>
          </li>
          <li id="nav-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" data-toggle="collapse" data-target="#navbarSupportedContent">
              <img src="../images/icon/nav.png" class="img-icon-top" >
            </a>
          </li>
        </ul>
      </div>      
      <div class="nav-div-link navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="../">Home </a>
          </li>
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="../home/#detail-product-content">Order </a>
          </li>
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="../about">About Us</a>
          </li>
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="../login">Login</a>
          </li>
          <!-- <li class="nav-li-link nav-item">
            <a class="text-nav" href="#">Testimoni</a>
          </li> -->
        </ul>
      </div>
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
  </div>
  
  <section id="testimoni">
    <div class="advantages-content">
      <div class="container">
        <div class="row">
          <div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12">
            <a href="../" style="color: white">
              <div class="cardAdvantagesColor">
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img src="../images/testimoni/aming.jpg"  class="lazy " width="257px">
                  </div>
                  <div class="advantages-text-bold">TESTIMONI AMING</div>
                </div>
              </div>
            </a>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12">
            <a href="../" style="color: white">
              <div class="cardAdvantagesColor">
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img src="../images/testimoni/aming.jpg"  class="lazy " width="257px">
                  </div>
                  <div class="advantages-text-bold">TESTIMONI AMING</div>
                </div>
              </div>
            </a>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12">
            <a href="../" style="color: white">
              <div class="cardAdvantagesColor">
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img src="../images/testimoni/aming.jpg"  class="lazy " width="257px">
                  </div>
                  <div class="advantages-text-bold">TESTIMONI AMING</div>
                </div>
              </div>
            </a>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12">
            <a href="../" style="color: white">
              <div class="cardAdvantagesColor">
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img src="../images/testimoni/aming.jpg"  class="lazy " width="257px">
                  </div>
                  <div class="advantages-text-bold">TESTIMONI AMING</div>
                </div>
              </div>
            </a>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12">
            <a href="../" style="color: white">
              <div class="cardAdvantagesColor">
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img src="../images/testimoni/aming.jpg"  class="lazy " width="257px">
                  </div>
                  <div class="advantages-text-bold">TESTIMONI AMING</div>
                </div>
              </div>
            </a>
          </div>
          <div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12">
            <a href="../" style="color: white">
              <div class="cardAdvantagesColor">
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img src="../images/testimoni/aming.jpg"  class="lazy " width="257px">
                  </div>
                  <div class="advantages-text-bold">TESTIMONI AMING</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div> 
    </div>
  </section>
<!--   </div> -->
<video width="320" height="240" poster="../images/testimoni/aming.jpg" controls>
   <source src="../video/InShot_20201019_170558292.mp4" type="video/mp4">
   <source src="https://drive.google.com/drive/folders/1Ax_4a35K8spazsgU4SKgjhgDFa-kclWp" type="video/ogg">
   Your browser does not support the video tag.
</video>
  <section id="footer-content">
    <div id="footer">
      <div class="div-footer-content">
        <div class="paddingTopBootom35 container">
          <div class="fotterCol row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                ABOUT US
              </div>
              <div class="paddingTopBottom10">
                <b>Address:</b>
                <div id="alamatOffice"></div>
              </div>
              <div class="paddingTopBottom10">
                <div><b>Phone</b></div>
                <a id="linkNumber1">
                  <div class="aLink" id="number1Office"></div>
                </a>
                <a id="linkNumber2">
                  <div class="aLink" id="number2Office"></div>
                </a>
              </div>
              <div class="paddingTopBottom10">
                <b>Any Question?</b>
                <a  id="linkEmail">
                  <div id="emailOffice" class="aLink"></div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                LINK
              </div>
              <div>
                <div class="padding-linkFooter">
                <a href="#" class="a-colorWhite">Home</a>
                </div>
                <div class="padding-linkFooter">
                <a href="#detail-product-content" class="a-colorWhite">Order</a>
                </div>
                <div class="padding-linkFooter">
                <a href="../aboutUserUmum" class="a-colorWhite">About Us</a>
                </div>
                <div class="padding-linkFooter">
                <a href="../login" class="a-colorWhite">Login</a>
                </div>
                <!-- <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Event</a>
                </div> -->
              </div>
            </div>
            <div class="padF20px col-lg-6 col-md-12 col-sm-12">
              <?php echo $alert; ?>
              <div class="titleFooter paddingTopBottom10">
                CONTACT US
              </div>
              <div>
                <form class="contact" onsubmit="return validateForm()" name="Form" method="post">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="textMailSend">Full Name</div>
                      <div><input type="" class="form-control" name="name" id="name"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="textMailSend">Phone Number</div>
                      <div><input type="" class="form-control" name="phone" id="phone"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="textMailSend">E-mail</div>
                      <div><input type="" class="form-control" name="email" id="email"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="textMailSend">Messages</div>
                      <div><textarea  class="form-control" name="textMail" id="textMail"></textarea></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="positionButtonYellowSend">
                        <button type="submit" name="submit" class="buttonYellowSend" value="Send">Send</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!--  <div id="open-chat-modal">
    <div class="open-chat-modal" style="right: -5px">
      <div class="div-icon-chat" >
        <div class="button-icon-chat" id="openForm">
          <img class="icon-chat" src="../images/icon/chat.png"> 
        </div>
      </div>
    </div>
  </div> -->
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
<!-- <script type="text/javascript" src="../js/durianRoot.js?v=2.2.1"></script> -->
<script type="text/javascript" src="../js/sweetAlert/sweetalert2.all.min.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
<script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }

  var renderPage = true;
  $(window).on("load", function(){
    if(renderPage) {
        $('body').addClass('loaded');
        $('#product').load("product.html");  
    }         
    window.scrollTo(0, 0); 
  }); 
</script>
</body>
</html>
