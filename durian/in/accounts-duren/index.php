﻿<!DOCTYPE html>
<html>
<head>
   
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>Account</title>
    <!-- Favicon-->
    <link rel="icon" href="images/logo/accounts.png" type="image/x-icon" />

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
    <link href="plugins/bootstrap/css/bootstrap.css?v=1.6.1" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css?v=1.6.1" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css?v=1.6.1" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/style.css?v=1.6.1" rel="stylesheet" />
    <!-- Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css?v=1.6.1" rel="stylesheet" />
    <link href="css/modif-style.css?v=1.6.1" rel="stylesheet" />
    <link href="css/flexible.css?v=1.6.1" rel="stylesheet" />
    <link href="css/scroll/css/style.css?v=1.6.1" rel="stylesheet" />
</head>

<body class="bd-w">
     <?php
    session_start();
    if(!isset($_SESSION['id_user'])){
    die("
      <script language='javascript'>alert('Silahkan Login Dahulu');
      document.location='../../login'</script>");
      }
      if($_SESSION['id_status_user']!="1"){
        die("
          <script language='javascript'>alert('Anda Bukan Andmin / Manager');
          document.location='../../login'</script>");
      }
    $id_user = $_SESSION['id_user'];
    echo 'ID User : $id_user';

    ?>
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
    <div class="search-bar search-black">
        <div class="search-icon">
            <img src="images/icon svg/search2.svg" class="iconsearch">
        </div>
        <input type="text" placeholder="Search on ..." />
        <div class="close-search">
            <img src="images/icon svg/close2.svg" class="iconclose">
        </div>
    </div>
    <nav class="navbar" id="navbar" >
        <div class="navbar-header background-white-body" id="id-col-roght">
            <a href="javascript:void(0);" class="bars"  ></a>
            <a class="navbar-brand" ><font class="color-black-body">Account</font>
                <div class="search-bar2 shadow2" id="search-large">
                    <div class="search-icon" id="search-icon">
                        <img src="images/icon svg/search2.svg" class="iconsearch">
                    </div>
                    <input type="text" placeholder="Search on ..." />
                </div>
            </a>
            <ul class="ul-right-menu navbar-right" >
                <li class="li-right-menu" id="show-small-search"><a href="javascript:void(0);" class="js-search" data-close="true"><img src="images/icon svg/search.svg" class="icon1-top-right"></a>
                </li>
                <li class="li-right-menu">
                    <a data-toggle="dropdown" role="button" id="menu-icon-a" class="icon1-top-right">
                        <svg width="24" height="24" class="gb_Xe" focusable="false" viewBox="0 0 24 24">
                            <path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                            </path>
                        </svg>
                    </a>
                    <ul class="dropdown-menu" id="shadow">
                        <li class="body li-menu-a1">
                            <ul class="menu tasks menu-taks" id="menu-body-a1-a1">
                                <li>
                                    <div class="icon-menu-parrent1">
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/HIQ2.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    VMS
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/kontak.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Contact
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/drupal.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Drupal
                                                </div>
                                            </a>
                                        </div>  
                                    </div>    
                                </li>
                                <li>
                                    <div class="icon-menu-parrent1">
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/firebird.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Fire Bird
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/lion.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Lion
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/realtor.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Realtor
                                                </div>
                                            </a>
                                        </div>  
                                    </div>    
                                </li>
                                <li>
                                    <div class="icon-menu-parrent1">
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/seek.svg"  src="images/blank.jpg" class="lazy center-img-top"/>
                                                <div class="text-menu1-div" >
                                                    Seek
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/siput.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Siput
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/sun.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Sun Feast
                                                </div>
                                            </a>
                                        </div>  
                                    </div>    
                                </li>
                                <li>
                                    <div class="icon-menu-parrent1">
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/ubuntu.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Ubuntu
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/youtube.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Music
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-menu1-div">
                                            <a href="https://www.google.com/">
                                                <img width="40px" data-src="images/icon svg/menu/security-icon.svg"  src="images/blank.jpg" class="lazy center-img-top" />
                                                <div class="text-menu1-div" >
                                                    Security
                                                </div>
                                            </a>
                                        </div>  
                                    </div>    
                                </li>
                            </ul>
                            <ul class="menu-footer-a1-a1">
                                <li>
                                    <a href="javascript:void(0);"><div class="text-menu-footer-a1-a1">View All Services</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="li-right-menu">
                    <a data-toggle="dropdown" role="button" id="menu-icon-a">
                        <img src="images/user.jpg" class="user-img-top-right" />
                    </a>
                    <ul class="dropdown-menu" id="shadow2">
                        <li class="header bd-w">Account</li>
                        <li class="body bd-w h199"   >
                            <ul class="menu tasks">
                                <li class="h117">
                                    <ul class="ul-left-user">
                                        <li class="li-left-user"> 
                                            <img width="60px" data-src="images/user.jpg"  src="images/blank.jpg" class="lazy center-img-drp-dw"  />
                                        </li>
                                        <li class="li-left-user padding-top10 padding-left5" ><font class="text-bold">Mohamad Eko Prasetyo</font><br />
                                            <div>me.serj.adam.incloudya@gmail.com</div><br />
                                            <div class="li-left-user-btn">
                                                <a href="my-accounts" id="a-border-trans"> 
                                                    <button class="btn btn-primary">Akun User</button> 
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                    <div class="background-grey1">
                                        <div class="menu-link-account">
                                            <a href="login"><button class="btn btn-light">Add Another Account</button></a>
                                            <a href="../../conn/logout.php" class="menu-a-class-out" ><button class="btn btn-light" >Logout</button></a>
                                        </div>
                                    </div>
                                <li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="menu padding-menu-right" >
                <ul class="list">
                    <li class="active-menu-right" >
                        <a href="#" id="waves-effect-this" >
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/active/menu-home-icon.svg" width="20" height="20">
                            </div>
                            <span><font class="icon-menu-active">Dashboard</font></span>
                        </a>
                    </li>
                    <li class="menu-waves-block" >
                        <a href="profile" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-profile.svg" width="20" height="20">
                            </div>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="preference" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-preference-icon.svg" width="20" height="20">
                            </div>
                            <span>Preference</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="auto-token" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-auto-icon.svg" width="20" height="20">
                            </div>
                            <span>Auto Token</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="security" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-security-icon.svg" width="20" height="20">
                            </div>
                            <span>Security</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="session" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-session-icon.svg" width="20" height="20">
                            </div>
                            <span>Session</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="authentication" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-authentication-icon.svg" width="20" height="20">
                            </div>
                            <span>Authentication</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="subscriptions" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-subscriptions.svg" width="20" height="20">
                            </div>
                            <span>Subscriptions</span>
                        </a>
                    </li>
                    <li class="menu-waves-block">
                        <a href="history" id="waves-effect-this">
                            <div class="icon-menu-img-left">
                                <img src="images/icon svg/menu-history-icon.svg" width="20" height="20">
                            </div>
                            <span>History</span>
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

    <section class="content padbotom30" id="content">
        <div class="container-fluid" id="maxDataItem">
            <div class="m-c1-top clearfix pad20top">
                <div>
                    <div class="" id="delete-alert-success" >
                        <div class="rounded-lg" id="card-alert-success">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="input-text-edit"><font class="text-alert">Success delete data </font></div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div id="icon-close-alert-success">
                                    <div class="f-right">
                                        <img src="images/icon svg/close4.svg" class="iconedit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" id="delete-alert-error" >
                        <div class="rounded-lg" id="card-alert-error">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="input-text-edit"><font class="text-alert">Error delete data </font></div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div id="icon-close-alert-error">
                                    <div class="f-right">
                                        <img src="images/icon svg/close4.svg" class="iconedit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card20" >
                        <div class="link-2-profile" id="d-lk-top1"  >  
                            <div >
                                <div class="text-grey4 link-content-home" > 
                                    <div class="line-H" >
                                        <div class="text-black-title">Active Sessions </div>
                                        <div class="text-grey pad10top" >
                                            <div class="phone90">
                                                <div class="body table-responsive">
                                                    <table class="table" id="sessionTB">
                                                        <thead>
                                                            <tr>
                                                                <th>Started Time</th>
                                                                <th>Connected Form Ip Address</th>
                                                                <th>Browser</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="th-edit" class="th-edit">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-08T03:36:46Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        61.94.243.91, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#" id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-08T03:36:46Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        61.94.243.91, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#"  id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-08T03:36:46Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        61.94.243.91, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#"  id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-08T03:36:46Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        61.94.243.91, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#"  id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-08T03:36:46Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        61.94.243.91, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#"  id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-11T07:48:03Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        180.244.63.64, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#"  id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <diV class="div-td-table" >
                                                                        2019-10-11T07:48:03Z
                                                                    </diV>
                                                                </th>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        180.244.63.64, accounts.gsky.cloud
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <diV class="div-td-table" >
                                                                        Amazon CloudFront
                                                                    </diV>
                                                                </td>
                                                                <td>
                                                                    <a href="#"  id="btn-delete">
                                                                        <div class="icon-svg-active">
                                                                            <img src="images/icon svg/delete.svg" class="icondelete">
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Jquery Core Js -->
<script type="text/javascript"  src="../../js/jquery.js" ></script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>
<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js?v=1.1.1"></script>
<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>
<!-- Custom Js -->
<script src="js/admin.js"></script>
<!-- Demo Js -->
<script src="js/demo.js"></script>
<!-- Scrol -->
<script src="css/scroll/js/scroll.js"></script>

<script type="text/javascript">
    $('#sessionTB tbody').on( 'click', '#btn-delete', function(){

        var deleteDataSession = confirm("Do you want to delete this data?");
        if(deleteDataSession == true)
        {
            $('#delete-alert-success').attr('style','display:block');
            $('#delete-alert-error').attr('style','display:block');
            return true;    
        }
        else
        {   
            $('#delete-alert-success').attr('style','display:none');
            $('#delete-alert-error').attr('style','display:none');
            return false;
        }   
    });

    $('#icon-close-alert-success').click(function(){
        $('#delete-alert-success').attr('style','display:none');
    });

    $('#icon-close-alert-error').click(function(){
        $('#delete-alert-error').attr('style','display:none');
    });
</script>

</body>
</html>