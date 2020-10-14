<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){

  $email = 'support@kingfruit.co.id';
  $emailTo = $_GET['mail'];
  $massages = '<!DOCTYPE html>
<html>
<head>
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
<body style="border: 1px solid #6a6767;
            margin-left: -10px;
            margin-right: -10px;
            margin-top: -1px;">
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
      King Fruit | King Of The King
    </div>
  </div>
</div>
<div style="margin-top: 25px;
    padding: 10px;
    font-family: sans-serif;
    line-height: 20px;">
  <div style="color: #3a3a3a">
    Terimakasih atas pendaftaran anda, silahkan klik untuk lanjutkan
  </div>
  <div style="margin-top: 20px;">
    <a href="https://kingfruit.co.id/a/verifikasiAkun/d361cf7ca4bd9da86292f8f78aed8e8ee2833bea-8db01937f19dba34689b76ee3b326df7395bd580.php?callM='.$emailTo.'&&callD=c47907abd2a80492ca9388b05c0e382518ff3960">
      <button style="background-color: #CEA32B;
      border: 1px solid #CEA32B;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      padding-bottom: 5px;
        padding-top: 5px;
        padding-left: 10px;
        padding-right: 10px;
        cursor: pointer;">
      Klik Disini</button>
    </a>  
  </div>
</div>
</body>
</html>';

  try{
    $mail->isSMTP();
    $mail->Host = 'kingfruit.co.id';
    $mail->SMTPAuth = true;
    $mail->Username = 'support@kingfruit.co.id'; 
    $mail->Password = 'kingfruit'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($email); 
    $mail->addAddress($emailTo); 

    $mail->isHTML(true);
    $mail->Subject = 'Verifikasi Akun kingfruit.co.id';
    $mail->Body = $massages; 
                 

    $mail->send();
    $alert = '<div class="alert-success" style="text-align:center;">
               <span>Terimakasih, Silahkan Cek E-mail Anda. </span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
