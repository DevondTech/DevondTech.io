<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){

  $email = 'support@kingfruit.co.id';


  try{
    $mail->isSMTP();
    $mail->Host = 'srv103.niagahoster.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'support@kingfruit.co.id'; 
    $mail->Password = 'kingfruit'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($email); // Gmail address which you used as SMTP server
    $mail->addAddress('echorockers@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "Terimakasih atas pendaftaran anda, silahkan klik untuk lanjutkan";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error" style="text-align:center;background-color: #ffcbb9;">
                <span>Silahkan Isi E-mail Anda</span>
              </div>';
  }
}
?>
