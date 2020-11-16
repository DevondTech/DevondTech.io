<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
require 'conn/data2/config.php'; 
$json = json_decode(file_get_contents('php://input'), true); 
$userData =''; $query = "select email from tb_about_us"; 
$result = mysqli_query($db,$query);
$baris= mysqli_fetch_array($result);
$email = $baris['email'];
/*
$email = 'kingfruit.co.id@gmail.com';*/
$emailUser = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$textMail = $_POST['textMail'];
$massages = '<head>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
</head>
<style type="text/css">
  .textTittle{
    
  }

  .positionTextTittle{
    
  }

  .textData{
    
  }

  .buttonYellow{
    
  }
  @media(max-width: 767px){
    .textTittle{
      padding: 15px;
        text-align: center;
        font-size: 16px;
        font-family: sans-serif;
        font-weight: bold;
    }

    .positionTextTittle{
      padding: 0px;
        background-color: #2d472c;
        color: white;
        margin-left: -10px;
        margin-right: -10px;
        margin-top: -10px;
    }
  }
</style>
<body style="
            margin-left: -10px;
            margin-right: -10px;
            margin-top: -1px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
            padding-bottom: 22px;
            border-radius: 5px;">
<div style="padding: 0px;
    background-color: #2d472c;
    color: white;
    margin-left: -10px;
    margin-right: -10px;
    margin-top: -10px;">
  <div style="padding: 15px;
      text-align: center;
      font-size: 20px;
      font-family: sans-serif;
      font-weight: bold;">
    <div>
      Mail From Customer
    </div>
  </div>
</div>
<div style="margin-top: 25px;
    padding: 10px;
    font-family: sans-serif;
    line-height: 20px;">
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:16px;">
    <div style="width: 70px;float: left;">Name </div>
    <div style="float: left;">: '.$name.'</div>
  </div>
  <br/>
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:16px;">
    <div style="width: 70px;float: left;">Phone </div>
    <div style="float: left;">: '.$phone.'</div>
  </div>
  <br/>
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:16px;">
    <div style="width: 70px;float: left;">E-mail </div>
    <div style="float: left;">: '.$emailUser.'</div>
  </div>
  <br/>
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:16px;">
    <div style="width: 70px;float: left;">Text Mail </div>
    <div style="float: left;">: '.$textMail.'</div>
  </div>
</div>
<br />

</body>
</html>';

  try{
    $mail->isSMTP();
    $mail->Host = 'srv103.niagahoster.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@kingfruit.co.id'; 
    $mail->Password = 'kingfruit'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('admin@kingfruit.co.id'); 
    $mail->addAddress('infokingfruit@gmail.com'); 
    $mail->addBcc('admin@kingfruit.co.id');


    $mail->isHTML(true);
    $mail->Subject = 'Message Received';
    $mail->Body = $massages;

    $mail->send();
    $alert = '<div class="alert-success" style="text-align: center;">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error" style="text-align:center;background-color: #ffcbb9;">
                <span>Silahkan Isi E-mail Anda</span>
              </div>';
  }
}
?>
