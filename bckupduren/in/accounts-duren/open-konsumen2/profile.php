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
/*echo 'ID User : ';
echo $id_user;*/
?>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>GSky Account</title>
</head>
<body class="bd-w">
<div class="center-img">  
    <img width="100px" data-src="../images/user.jpg"  src="../images/blank.jpg" class="lazy center-img-home"   />
</div>
<div class="block-header title-name" >
    <div>Welcome, Mohamad Eko Prasetyo</div> 
    <div class="pad10top">
        <h2 class="line-H">Manage your info, privacy and security so that GSky works better for you</h2>
    </div>
</div>
<div class="row clearfix pad20top">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card">
            <div class="header">    
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="card-title-content-home">
                        <div class="line-H">
                            <div class="text-black-title"> Profile</div>
                            <div class="text-grey pad10top"> Manage your info, privacy and security so that it functions better.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="body-title-content-home">
                        <div class="img-h-sm-ph">
                            <img width="100px" data-src="../images/icon svg/User-icon1.svg"  src="../images/blank.jpg" class="lazy center-img-home"   />
                        </div>
                    </div>
                </div>
            </div>
            <a href="profile">
                <div class="body color-hov" >
                    <div class="p-l8"><font class="link-body-content-home">Manage your data & personalization</font></div>
                </div>
             </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card">
            <div class="header">    
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="card-title-content-home">
                        <div class="line-H">
                            <div class="text-black-title">Preference</div>
                            <div class="text-grey pad10top">Manage your preferences.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="body-title-content-home">
                        <div class="img-h-sm-ph">
                            <img width="100px" data-src="../images/icon svg/preference-icon.svg"  src="../images/blank.jpg" class="lazy center-img-home"  />
                        </div>
                    </div>
                </div>
            </div>
           <a href="preference">
                <div class="body color-hov" >
                    <div class="p-l8"><font class="link-body-content-home">Start</font></div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card">
            <div class="header">    
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="card-title-content-home">
                        <div class="line-H">
                            <div class="text-black-title">Session</div>
                            <div class="text-grey pad10top">Manage your session.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="body-title-content-home">
                        <div class="img-h-sm-ph">
                            <img width="100px" data-src="../images/icon svg/session-icon.svg"  src="../images/blank.jpg" class="lazy center-img-home"   />
                        </div>
                    </div>
                </div>
            </div>
            <a href="session">
                <div class="body color-hov" >
                    <div class="p-l8"><font class="link-body-content-home">Start</font></div>
                </div>
             </a>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card">
            <div class="header">    
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="card-title-content-home">
                        <div class="line-H">
                            <div class="text-black-title">Authentication</div>
                            <div class="text-grey pad10top">Manage your Authentication.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="body-title-content-home">
                        <div class="img-h-sm-ph">
                            <img width="100px" data-src="../images/icon svg/authentication-icon.svg"  src="../images/blank.jpg" class="lazy center-img-home"  />
                        </div>
                    </div>
                </div>
            </div>
            <a href="authentication">
                <div class="body color-hov" >
                    <div class="p-l8"><font class="link-body-content-home">Start</font></div>
                </div>
             </a>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card">
            <div class="header">    
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="card-title-content-home">
                        <div class="line-H">
                            <div class="text-black-title">Subscriptions</div>
                            <div class="text-grey pad10top">Manage your subscriptions</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="body-title-content-home">
                        <div class="img-h-sm-ph">
                            <img width="100px" data-src="../images/icon svg/subscriptions.svg"  src="../images/blank.jpg" class="lazy center-img-home"  />
                        </div>
                    </div>
                </div>
            </div>
             <a href="subscriptions">
                <div class="body color-hov" >
                    <div class="p-l8"><font class="link-body-content-home">Start</font></div>
                </div>
             </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card">
            <div class="header">    
                <div class="row">                    
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="card-title-content-home">
                        <div class="line-H">
                            <div class="text-black-title">History</div>
                            <div class="text-grey pad10top">Manage your history</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="body-title-content-home">
                        <div class="img-h-sm-ph">
                            <img width="100px" data-src="../images/icon svg/history-icon.svg"  src="../images/blank.jpg" class="lazy center-img-home"   />
                        </div>
                    </div>
                </div>
            </div>
            <a href="history">
                <div class="body color-hov" >
                    <div class="p-l8"><font class="link-body-content-home">Start</font></div>
                </div>
             </a>
        </div>
    </div>
</div>
<!-- Scrol -->
<script src="../css/scroll/js/scroll.js"></script>
</body>
</html>

