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
      if($_SESSION['id_status_user']!="1"){
        die("
          <script language='javascript'>alert('Anda Bukan Andmin / Manager');
          document.location='../../../login'</script>");
      }
    $id_user = $_SESSION['id_user'];

    /*echo 'ID User : ';
    echo $id_user;*/
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
    <link href="../plugins/bootstrap/css/bootstrap.css?v=1.2.1" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css?v=1.2.1" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css?v=1.2.1" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="../css/style.css?v=1.2.1" rel="stylesheet" />
    <!-- Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css?v=1.2.1" rel="stylesheet" />
    <link href="../css/modif-style.css?v=1.2.1" rel="stylesheet" />
    <link href="../css/flexible.css?v=1.2.1" rel="stylesheet" />
    <!-- <link href="../css/scroll/css/style.css?v=1.1.1" rel="stylesheet" /> -->
    <style type="text/css">
        .sidebar .menu .list a span {
            width: 180px;
        }

        .positionNotif{
            font-size: 13px;
            margin-right: 0px;
            width: auto;
            text-align: center;
            margin-top: 7px;
            max-width: 40px;
        }

        .colorNotif{
            background-color: #2d472c;
            color: white;
            border-radius: 15px;
            padding-left: 6px;
            padding-right: 6px;
            max-width: 35px;
        }
    </style>
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
                        <img src="../images/blank.jpg"  id="foto_OnLoginPageHome_Large_Down" class="lazy user-img-top-right" />
                    </a>
                    <ul class="liCardMenu-UserLogin dropdown-menu" id="shadow2" style="top: 135px;">
                        <li class="liListNone">
                            <ul class="ulHeader-liMenu-UserLogin">
                                <li class="liImageHeader-liMenu-UserLogin"> 
                                    <img id="foto_OnLoginPageHome_Large" src="../images/blank.jpg" class="lazy center-img-drp-dwProfileSmall"  />
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
                                <img  src="../images/blank.jpg" id="foto_OnLoginPageHome_Small" class="center-img-drp-dwProfileSmall"  />
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
                    <li class="menu-waves-block" id="create-user-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/create-user.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Tambah User</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="password-link" >
                        <a id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/password.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Ubah Password</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="product-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/data-product.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Data Produk</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="payment-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/company-edit.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Konfirmasi Pembayaran</font></span>
                            <div class="positionNotif">
                                <div class="colorNotif" id="sendPayment" style="display: none;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="shipped-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/company-edit.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Konfirmasi Pengiriman</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="ontheway-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/data-product.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Dalam Pengiriman</font></span>
                           <!--  <div class="positionNotif">
                                <div class="colorNotif" style="display: none;"></div>
                            </div> -->
                        </a>
                    </li>
                    <li class="menu-waves-block" id="finish-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/data-product.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Pesanan Selesai</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="retur-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/company-edit.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Pengajuan Retur</font></span>
                            <div class="positionNotif">
                                <div class="colorNotif" id="requestRetur" style="display: none;"></div>
                            </div>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="retur-all-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/data-product.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Data Retur</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="sales-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/data-product.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Data Penjualan</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="review-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/data-product.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Review Produk</font></span>
                            <div class="positionNotif">
                                <div class="colorNotif" id="reviewProduct" style="display: none;"></div>
                            </div>
                        </a>
                    </li>
                  <!--   <li class="menu-waves-block" id="shipped-link">
                        <a  id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/company-edit.svg" width="20" height="20">
                            </div>
                            <span id=""><font class="icon-menu-active">Penjualan</font></span>
                        </a>
                    </li> -->
                    <li class="menu-waves-block" id="company-profile">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/company-edit.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Profil Perusahaan</font></span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="about-link" >
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/company-edit.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Tentang Kami</font></span>
                        </a>
                    </li>
                    <li class="displayLink-none menu-waves-block" id="medsos-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/link/medsos.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Media Sosial</font></span>
                        </a>
                    </li>
                    <!-- <li class="menu-waves-block" id="notification-link">
                        <a  id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/notification.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">notifikasi</font></span>
                        </a>
                    </li> -->
                    <li class="menu-waves-block" id="logout-link" >
                        <a href="../../../conn/logout.php" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/durian/logout.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Logout</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" id="logout-link" style="padding-bottom: 50px;">
                    </li>
                </ul>
            </div>
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
<script type="text/javascript" src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script type="text/javascript" src="../plugins/bootstrap/js/bootstrap.js"></script>
<!-- Select Plugin Js -->
<script type="text/javascript" src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>
<!-- Slimscroll Plugin Js -->
<script type="text/javascript" src="../plugins/jquery-slimscroll/jquery.slimscroll.js?v=1.1.1"></script>
<!-- Waves Effect Plugin Js -->
<script type="text/javascript" src="../plugins/node-waves/waves.js"></script>
<!-- Custom Js -->
<script type="text/javascript" src="../js/admin.js"></script>
<!-- Demo Js -->
<script type="text/javascript" src="../js/demo.js"></script>
<!-- Flash Js -->
<script type="text/javascript" src="../js/pages/admin/adminProfile.js?v=1.7.1"></script>

<!-- Scrol -->
<!-- <script src="../css/scroll/js/scroll.js"></script> -->

</body>
</html>