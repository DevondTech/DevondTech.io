<?php include '../mail/sendemail.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <!-- <script type="text/javascript" src="../js/pageLoadISP.js"></script> -->
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
  <link rel="stylesheet" href="../js/sweetAlert/sweetalert2.min.css">
  <style type="text/css">
    .cardTextAbout{
      background-color: #cda32b;
      margin-right: 60px;
    }
    @media(max-width: 920px){
      .cardTextAbout{
        background-color: #cda32b;
        margin-right: 20px;
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
      
    </nav>
    <div class="row-top-displayBlock row" style="">
     
    </div>
    
  </div>


  <!-- <div class="top-page" id="">
    
  </div> -->

<script type="text/javascript"  src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<script type="text/javascript" src="../js/bootstrap.js" ></script>
<script type="text/javascript" src="../js/slideSmall.js"></script>
<script type="text/javascript" src="../js/durianRoot.js?v=2.1.1"></script>
<script type="text/javascript" src="../js/sweetAlert/sweetalert2.all.min.js"></script>
<script type="text/javascript">
  $('#div-content-page').on('scroll',function(e){
    $('#next').css('display','block');
  });
  $(window).on("load", function(){
    swal({
      title:"Gagal",
      text: "Pembayaran Gagal, Silahkan Ulangi",
      type: "error"
    }).then(function() {
      window.location = '../in/accounts-duren/open-konsumen/';
    });
  }); 

</script>

</body>
</html>