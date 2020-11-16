<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure='ssl';
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "me.serj.adam@gmail.com";
$mail->Password = "03September92";
$mail->SetFrom("kingfruit.co.id@gmail.com","King Fruit Official");
$mail->Subject = "Testing";
$mail->AddAddress("me.serj.adam@gmail.com");
$mail->MsgHTML("testing");
if($mail->Send()) echo "Pesan Terkirim";
else echo "Gagal";
?>