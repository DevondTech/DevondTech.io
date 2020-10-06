<!DOCTYPE html>
<html>
<head>
     <link rel="icon" href="../../../images/1.jpg" type="image/x-icon" />
     <?php
   
    session_start();
    if(!isset($_SESSION['id_user'])){
    die("
      <script language='javascript'>alert('Silahkan Login Dahulu');
      document.location='../../../login'</script>");
      }
      if($_SESSION['id_status_user']!="5"){
        die("
          <script language='javascript'>alert('Anda Bukan Andmin / Manager');
          document.location='../../../login'</script>");
      }
    $id_user = $_SESSION['id_user'];

    echo 'ID User : ';
    echo $id_user;
    $textData = $_POST['textData'];
    ?>
   
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>King Fruit | User Account</title>
    <!-- Favicon-->
   

    <!-- description -->
    <meta name="description" content="" />
    <!-- Keywords -->
    <meta name="keywords" content="" />

    <!-- <meta name="google" content="notranslate" />
    <meta http-equiv="Content-Language" content="en_US" /> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="../css/style.css?v=1.1.1" rel="stylesheet" />
    <!-- Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
    <link href="../css/modif-style.css?v=1.1.1" rel="stylesheet" />
    <link href="../css/flexible.css?v=1.1.1" rel="stylesheet" />
<!--     <link href="../css/scroll/css/style.css?v=1.1.1" rel="stylesheet" /> -->
</head>

<body class="bd-w">
     
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Loading System...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar" id="navbar" >
        <div class="navbar-header nav-background" id="id-col-roght">
            <!-- <a href="javascript:void(0);" class="bars"  ></a> -->
            <a href="javascript:void(0);" class="bars" style="color: white"></a>
            <a class="image-logoLoginLeft navbar-brand" >
                <img src="../../../images/logo-king-fruit.png" width="70">
            </a>
            <ul class="ul-right-menu navbar-right" >
                <li class="image-logoLogin li-right-menu">
                    <img src="../../../images/logo-king-fruit.png" width="70">
                </li>
                <li class="image-userLogin li-right-menu">
                    <a data-toggle="dropdown" role="button" id="menu-icon-a">
                        <img src=""  id="foto_OnLoginPageHome_Large_Down" class="user-img-top-right" />
                    </a>
                    <ul class="liCardMenu-UserLogin dropdown-menu" id="shadow2" style="top: 135px;">
                        <li class="liListNone">
                            <ul class="ulHeader-liMenu-UserLogin">
                                <li class="liImageHeader-liMenu-UserLogin"> 
                                    <img width="60px" id="foto_OnLoginPageHome_Large" src="../images/blank.jpg" class="lazy center-img-drp-dwProfileSmall"  />
                                </li>
                                <li class="TextHeader-liMenu-UserLogin" >
                                    <font class="TextHeaderName"  id="nama_lengkap_OnLoginPageHome_Large"></font>
                                    <br />
                                    <div id="email_OnLoginPageHome_Large"></div>
                                </li>
                            </ul>
                        </li>
                        <li class="liButtonLink--UserLogin"   >
                            <div class="">
                                <a id="account-edit">
                                    <button class="btn button-green">Edit Account</button>
                                </a>
                            </div>
                            <div>
                                <a  href="../../../conn/logout.php" class="menu-a-class-out" >
                                    <button class="btn button-grey">Sign Out</button>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="menu padding-menu-right" >
                <ul class="list" style="margin-top: 20px;padding-bottom: 40px;">
                    <li class="liListNone" id="userInfoLogin">
                        <ul class="ulLeft-liMenu-UserLogin">
                            <li class="liImageHeader-liMenu-UserLogin"> 
                                <img width="60px"  src="../images/blank.jpg" id="foto_OnLoginPageHome_Small" class="lazy center-img-drp-dwProfileSmall"  />
                            </li>
                            <li class="TextLeft-liMenu-UserLogin" >
                                <font class="TextHeaderName" id="nama_lengkap_OnLoginPageHome_Small"></font>
                                <br />
                                <div id="email_OnLoginPageHome_Small"></div>
                            </li>
                        </ul>
                    </li>
                    <li class="active-menu-right" id="account-link">
                        <a id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/user.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Akun Saya</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="account-edit-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/edit-user.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Edit Akun</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="password-link" >
                        <a id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/password.svg" width="20" height="20">
                            </div>
                            <span>Ubah Password</span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="order-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/cart.svg" width="20" height="20">
                            </div>
                            <span>Pesanan Saya</span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="orderAll-link" >
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/link/all.svg" width="20" height="20">
                            </div>
                            <span>Semua Pesanan</span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="orderCart-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/link/buy.svg" width="20" height="20">
                            </div>
                            <span>Keranjang Saya</span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="orderProcess-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/link/process.svg" width="20" height="20">
                            </div>
                            <span>Dalam Proses</span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="orderFinish-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/link/finish.svg" width="20" height="20">
                            </div>
                            <span>Pesanan Selesai</span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="orderCancel-link" >
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/link/cancel.svg" width="20" height="20">
                            </div>
                            <span>Pesanan Dibatalkan</span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="notification-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/notification.svg" width="20" height="20">
                            </div>
                            <span>notifikasi</span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="logout-link">
                        <a href="../../../conn/logout.php" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/logout.svg" width="20" height="20">
                            </div>
                            <span>Logout</span>
                        </a>
                    </li>
                    <input type="hidden" name="textData" id="textData" value="<?php echo$textData; ?>">
                    
                    <!-- <li class="menu-waves-block">
                        <a id="waves-effect-this">
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- <div class="legal">
                <div class="copyright">
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div> -->
        </aside>
    </section>

<!-- CONTECT INPUT IN HERE -->

<section class="content" id="content">
    <div class="pad20top container-fluid" id="maxDasboardItem">
        <div id="content-profile">
            

        </div>
    </div>
</section>

<!-- Jquery Js -->
<script type="text/javascript"  src="../js/jquery.js" ></script>
<!-- Jquery Ajax Js -->
<script type="text/javascript" src="../js/ajax/jquery.min.js" ></script>
<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>
<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>
<!-- Slimscroll Plugin Js -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js?v=1.1.1"></script>
<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>
<!-- Custom Js -->
<script src="../js/admin.js"></script>
<!-- Demo Js -->
<script src="../js/demo.js"></script>
<!-- Flash Js -->
<script src="../js/pages/konsumen/konsumenData.js?v=1.1.1"></script>
<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->

</body>
</html>