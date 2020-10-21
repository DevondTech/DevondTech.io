<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';


  $emailTo = $_GET['email_send'];
  $kode_pemesanan_send = $_GET['kode_pemesanan_send'];
  $waktu_pemesanan_send = $_GET['waktu_pemesanan_send'];
  $produk_send = $_GET['produk_send'];
  $jumlah_send = $_GET['jumlah_send'];
  $total_harga_yang_harus_dibayar_send = $_GET['total_harga_yang_harus_dibayar_send'];

  $email = 'admin@kingfruit.co.id';
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
  <div style="color: #3a3a3a">
    Terimakasih atas pemesanan & kepercayaan anda kepada kami. Berikut detail pemesanan anda:
  </div>
  <div style="color: #3a3a3a;margin-top: 10px;">
    <div style="width: 100px;float: left">No. Order</div>
    <div style="float: left;">: '.$kode_pemesanan_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Waktu</div>
    <div style="float: left;">: '.$waktu_pemesanan_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Produk</div>
    <div style="float: left;">: '.$produk_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Jumlah</div>
    <div style="float: left;">: '.$jumlah_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Total</div>
    <div style="float: left;">: '.$total_harga_yang_harus_dibayar_send.'</div>
  </div>
  <br />
</div>
<br />

</body>
</html>';

  try{
    $mail->isSMTP();
    $mail->Host = 'kingfruit.co.id';
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@kingfruit.co.id'; 
    $mail->Password = 'kingfruit'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($email); 
    $mail->addAddress($emailTo); 
    /*$mail->addBcc('infokingfruit@gmail.com');*/

    $mail->isHTML(true);
    $mail->Subject = 'Pemesanan Produk kingfruit.co.id';
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
