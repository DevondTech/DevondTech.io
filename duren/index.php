<!doctype html>
<html lang="en">
<head>
  <?php
   error_reporting(0);
  ?>
  <?php
    session_start();
    if($_SESSION['id_status_user']!="5" ){
        die("<script language='javascript'> document.location='openUserRoot'</script>");
    }
    else if($_SESSION['id_status_user']=="1"){
        die("<script language='javascript'> document.location='../in/accounts-duren/open-admin/data.php'</script>");
    }
    else{

    }
  ?>


  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>King Fruit</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="durian">
  <meta name="keywords" content="durian" />
  <link rel="icon"  href="images/1.jpg" type="image/x-icon">
  <meta name="rating" content="general">
  <meta name="robots" content="index, follow">
  <meta name="distribution" content="world" />
  <meta name="author" content="devond" />
  <meta name="generator" content="devond" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css?v=1.0.1">
  <link rel="stylesheet" type="text/css" href="css/chat.css?v=1.0.1">
  <link href="scroll/css/style.css?v=1.0.1" rel="stylesheet" />
</head>
<body class="halamanUtama">
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="top-page" id="top-page">
    <nav id="navbar-page" class="nav-outscroll2 nav-fixed navbar navbar-expand-lg navbar-light " style="z-index: 1;"> 
      <div class="div-Logo-NavIconlink">
        <img src="images/logo-king-fruit.png" class="logo-NavIconLink">
      </div>
      <div  id="nav-icon-link"  class="nav-icon-link" >
        <ul class="ul-icon-link">
          <li id="search-input-small" class="li-icon-link-search-hidden" >
            <input id="input-search-small" type="" name="" class="input-search-small" placeholder="Search...">
            <img src="images/icon/close.png" id="close-search-small" class="img-close-icon-search" >
          </li>
          <li id="login-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="in/accounts-duren/open-konsumen/data.php">
              <img src="images/icon/user.png" class="img-icon-top">
            </a>
          </li>
          <li id="buy-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="in/accounts-duren/open-konsumen/data.php">
              <img src="images/icon/buy.png" class="img-icon-top">
            </a>
          </li>
          <li id="nav-icon-small" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" data-toggle="collapse" data-target="#navbarSupportedContent">
              <img src="images/icon/nav.png" class="img-icon-top" >
            </a>
          </li>
        </ul>
      </div>      
      <div class="nav-div-link navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="#">Home </a>
          </li>
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="#">Healt Facts </a>
          </li>
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="#">Distribution</a>
          </li>
          <li class="nav-li-link nav-item">
            <a class="text-nav" href="#">About US</a>
          </li>
        </ul>
      </div>
      <div class="nav-icon-link-large">
        <ul class="ul-icon-link">
          <li id="search-input-large" class="li-icon-link-search-hidden" >
            <input type="" name="" class="input-search" placeholder="Search...">
            <img src="images/icon/close.png" id="close-search-large" class="img-close-icon-search" >
          </li>
          <!-- <li id="search-icon-large" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" >
              <img src="images/icon/search.png" class="img-icon-top">
            </a>
          </li> -->
          <li id="login-icon-large" class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="in/accounts-duren/open-konsumen/data.php">
              <img src="images/icon/user.png" class="img-icon-top">
            </a>
          </li>
          <li class="li-icon-link">
            <a class="link-img-icon-top form-inline my-2 my-lg-0" href="in/accounts-duren/open-konsumen/data.php">
              <img src="images/icon/buy.png" class="img-icon-top">
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row-top-displayBlock row" style="">
      <div class="col-sm-6">
        <div style="background-color: #cda32b">
          <div class="card-textTop">
            <div>
              Lorem ipsum dolor 
            </div>
            <div style="font-size: 14px;">
              Lorem ipsum dolor sit amet consectectur elit ipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet 
            </div>
          </div>      
        </div>
      </div>
      <div class="div-img-imageTop col-sm-6" >
        <img src="images/gambar-duren.png"  class="lazy" width="80%" >
      </div>
      <div class="div-img-textTop">
        <img src="images/icon/text-top.png"   class=" text-durian-top">
      </div>
    </div>
    
    <div>
      <ul class="ul-medsos-icon-top">
        <li class="li-medsos-hr-top">
          <div class="vl"></div>
        </li>
        <li class="li-medsos-icon-top">
          <img src="images/icon/facebook.png"   class=" img-icon-top">
        </li>
        <li class="li-medsos-icon-top">
          <img src="images/icon/instagram.png" class=" img-icon-top">
        </li>
        <li class="li-medsos-icon-top">
          <img src="images/icon/whatsapp.png" class=" img-icon-top">
        </li>
      </ul>
    </div>
  </div>
 
    <section id="detail-product-content">
      <div id="detail-product" class="detail-product">
        <div class="container">
          <div  class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="divCardImage-large-detailProduct">
               <img data-src="images/detail-bawor.png" src="images/blank.png" class="lazy image-center">
              </div>
              <div class="divCardImage-small-detailProduct">
                <div class="divImage-smallCenter-detailProduct">
                  <div class="image-small-detailProduct">
                    <img data-src="images/detail-bawor.png" src="images/blank.png" class="lazy image-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/detail-bawor.png" src="images/blank.png" class="lazy image-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/detail-bawor.png" src="images/blank.png" class="lazy image-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/detail-bawor.png" src="images/blank.png" class="lazy image-smallCenter-detailProduct">
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
                <div class="textBlack25-boldLarge-detailProduct">
                  King Fruit Durian Bawor
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div class="">
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/star-active.png" src="images/blank.png" class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/star-active.png" src="images/blank.png" class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/star-active.png" src="images/blank.png" class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/star-active.png" src="images/blank.png" class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/star-active.png" src="images/blank.png" class="lazy imageStar-smallLeft-detailProduct">
                  </div>
                </div>
              </div>
              <br />
              <div class="margin-TopBottom-detailProduct">
                <div class="textBlack25-boldLarge-detailProduct">
                  Rp. 0.000.000,-
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div>
                  <a href="#">
                    <button class="buttonIconBuy-detailProduct">
                      <div class="div-buttonIconBuy-detailProduct">
                        <img data-src="images/icon/buy-2.png" src="images/blank.png" class="lazy imageBuy-smallCenter-detailProduct">
                      </div>
                      <div class="div-buttonTextBuy-detailProduct">add to chart </div>
                    </button>
                  </a>
                </div>
              </div>
              <div class="margin-TopBottom20-detailProduct">
                <div class="textGrey16-regular-detailProduct">
                  Lorem ipsum dolor sit amet consectectur elit ipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet 
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="margin-Bottom-detailProduct">
                <div class="textBlack18-boldLarge-detailProduct">
                  Costumer Reviews
                </div>
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct">5 Star</div>
                    <div class="percentageStar-detailProduct">90 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="textblack12-regular-detailProduct">
                  <div>
                    <div class="Star-detailProduct" >4 Star</div>
                    <div class="percentageStar-detailProduct">10 %</div>
                    <div class="">
                    <div class="height-progress-detailProduct progress">
                      <div class="progress-bar-detailProduct progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
              <div class="margin-TopBottom-detailProduct">
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
              </div>
              <div class="margin-TopBottom-detailProduct">
                <div class="textblack14-regular-detailProduct">
                  Share to:
                </div>
              </div>
              <div class="divCardImage-small-detailProduct">
                <div class="divImage-smallCenter-detailProduct">
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/facebook-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/whatsapp-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/twitter-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/instagram-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="advantages-content">
      <div class="advantages-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div>
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img data-src="images/icon/duren-1.png" src="images/blank.png" class="lazy " width="130px">
                  </div>
                  <div class="advantages-text-bold">KUALITAS TERBAIK</div>
                  <div class="advantages-text-regular">Premium Quality</div>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-3 col-sm-6">
              <div>
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img data-src="images/icon/duren-2.png" src="images/blank.png" class="lazy " width="130px">
                  </div>
                  <div class="advantages-text-bold">GARANSI UANG KEMBALI</div>
                  <div class="advantages-text-regular">
                    Ilam tristique. Integ
                    <br />
                    Ilam tristique. Integ
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div>
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img data-src="images/icon/duren-3.png" src="images/blank.png" class="lazy " width="130px">
                  </div>
                  <div class="advantages-text-bold">TERPERCAYA</div>
                  <div class="advantages-text-regular">
                    Ilam tristique. Integ
                    <br />
                    Ilam tristique. Integ
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div>
                <div class="content-text-advantages">
                  <div class="col20-card-top">
                    <img data-src="images/icon/duren-4.png" src="images/blank.png" class="lazy " width="130px">
                  </div>
                  <div class="advantages-text-bold">BEBAS PENGAWET</div>
                  <div class="advantages-text-regular">
                    Ilam tristique. Integ
                    <br />
                    Ilam tristique. Integ
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
<!--   </div> -->
  
  <section id="footer-content">
    <div id="footer">
      <div class="div-footer-content">
        <div class="paddingTopBootom35 container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                ABOUT US
              </div>
              <div class="paddingTopBottom10">
                <b>Address:</b>
                <br />
                Lorem ipsum dolor sit amet consectectur elit ipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum dolor sit amet consectectur elitipsum 
              </div>
              <div class="paddingTopBottom10">
                <b>Phone</b>
                <br />
                0899-7364-2358
                <br />
                0281-836473
              </div>
              <div class="paddingTopBottom10">
                <b>Any Question?</b>
                <br />
                Support@gmail.com
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                INFORMATION
              </div>
              <div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">About Us</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">More Search</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Blog</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Testimonial</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Event</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">
                HELPFUL LINKS
              </div>
              <div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Services</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Support</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Terms and Condition</a>
                </div>
                <div class="padding-linkFooter">
                <a href="" class="a-colorWhite">Privacy Policy</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="titleFooter paddingTopBottom10">     
                FOLLOW US
              </div>
              <div class="">
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/facebook-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/whatsapp-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/twitter-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                  <div class="image-small-detailProduct">
                    <img data-src="images/icon/instagram-2.png" src="images/blank.png" class="lazy imageMedsos-smallCenter-detailProduct">
                  </div>
                </div>
              <div>
                
              </div>
            </div>
          </div>
        </div>
      
        <div class="footer-content3">
          <div>
            Deployment by: PT DEVOND TEKNOLOGI INDONESIA, Copyright 2020
          </div>
        </div>     
      </div>
    </div>
  </section>
  <div id="open-chat-modal">
    <div class="open-chat-modal" style="right: -5px">
      <div class="div-icon-chat" >
        <div class="button-icon-chat" id="openForm">
          <img class="icon-chat" src="images/icon/chat.png"> 
        </div>
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
                    <img src="images/icon/send.png" width="30px;">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript"  src="js/jquery.js" ></script>
<script type="text/javascript" src="js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.js" ></script>
<script type="text/javascript" src="scroll/js/scroll.js"></script>
<script type="text/javascript" src="js/slideSmall.js"></script>
<script type="text/javascript" src="js/durianIndexCust.js"></script>
<script type="text/javascript" src="js/durian.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
</script>
</body>
</html>
