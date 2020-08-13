<!DOCTYPE html>
<html>
<head>
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
    /*var_dump($_SESSION['id_user']);*/
    /*echo 'ID User : ';
    echo $id_user;*/
    ?>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>King Fruit | User Account</title>
    <!-- Favicon-->
    <link rel="icon" href="../../../images/1.jpg" type="image/x-icon" />

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
    <link href="../plugins/bootstrap/css/bootstrap.css?v=1.1.1" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css?v=1.1.1" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css?v=1.1.1" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="../css/style.css?v=1.1.1" rel="stylesheet" />
    <!-- Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css?v=1.1.1" rel="stylesheet" />
    <link href="../css/modif-style.css?v=1.1.1" rel="stylesheet" />
    <link href="../css/flexible.css?v=1.1.1" rel="stylesheet" />
    <link href="../css/scroll/css/style.css?v=1.1.1" rel="stylesheet" />
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
                        <img src="../images/user.jpg" class="user-img-top-right" />
                    </a>
                    <ul class="liCardMenu-UserLogin dropdown-menu" id="shadow2" style="top: 135px;">
                        <li class="liListNone">
                            <ul class="ulHeader-liMenu-UserLogin">
                                <li class="liImageHeader-liMenu-UserLogin"> 
                                    <img width="60px" data-src="../images/user.jpg"  src="../images/blank.jpg" class="lazy center-img-drp-dw"  />
                                </li>
                                <li class="TextHeader-liMenu-UserLogin" >
                                    <font class="TextHeaderName">Mohamad Eko Prasetyo</font>
                                    <br />
                                    me.serj.adam@gmail.com
                                </li>
                            </ul>
                        </li>
                        <li class="liButtonLink--UserLogin"   >
                            <div class="">
                                <a href="../../../conn/logout.php">
                                    <button class="btn button-green">Sign Out</button>
                                </a>
                            </div>
                            <div>
                                <a href="" id="account-edit" class="menu-a-class-out" >
                                    <button class="btn button-grey" >Edit Account</button>
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
                <ul class="list" style="margin-top: 20px;">
                    <li class="active-menu-right" >
                        <a href="#" id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="../images/icon svg/active/menu-home-icon.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Dashboard</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" >
                        <a href="profile" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/icon svg/menu-profile.svg" width="20" height="20">
                            </div>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="preference" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/icon svg/menu-preference-icon.svg" width="20" height="20">
                            </div>
                            <span>Preference</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="auto-token" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/icon svg/menu-auto-icon.svg" width="20" height="20">
                            </div>
                            <span>Auto Token</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="../../../conn/logout.php" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="../images/icon svg/menu-auto-icon.svg" width="20" height="20">
                            </div>
                            <span>Logout</span>
                        </a>
                    </li>
                    
                    <li class="menu-waves-block">
                        <a id="waves-effect-this">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="legal">
                <div class="copyright">
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
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
<script src="../js/flash.js"></script>
<!-- Scrol -->
<script src="../css/scroll/js/scroll.js"></script>

</body>
</html>