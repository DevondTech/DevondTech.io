<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

  $emailTo = $_GET['email'];
  $checkCode = $_GET['checkCode'];

  $email = 'support@kingfruit.co.id';
  $massages = '<html>
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
<body style="border: 1px solid #2d472c;
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
      King Fruit | King Of The King
    </div>
  </div>
</div>
<div style="margin-top: 25px;
    padding: 10px;
    font-family: sans-serif;
    line-height: 20px;">
  <div style="color: #3a3a3a; font-size: 16px;">
    Terimakasih atas kepercayaan anda kepada kami. Berikut kode anda, copy lalu anda dapat mereset password anda:
  </div>
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:20px;">
    <div >Kode : '.$checkCode.' </div>
  </div>
</div>
<br />

</body>
</html>';

  try{
    $mail->isSMTP();
    $mail->Host = 'srv103.niagahoster.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'support@kingfruit.co.id'; 
    $mail->Password = 'kingfruit'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($email); 
    $mail->addAddress($emailTo); 

    $mail->isHTML(true);
    $mail->Subject = 'Forgot Password kingfruit.co.id';
    $mail->Body = $massages; 
                 

    $mail->send();
    $alert = '<div class="alert-success" style="text-align:center;">
               <span>Terimakasih, Silahkan Cek E-mail Anda. </span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error" style="text-align:center;background-color: #ffcbb9;">
                <span>Silahkan Isi E-mail Anda</span>
              </div>';
  }

?>
