<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

require '../../config.php'; 
$json = json_decode(file_get_contents('php://input'), true); 
$emailTo = $_GET['email_send'];
$kode_pemesanan_send = $_GET['a275eeab9229cc9132954f131049342ca43ba161'];
$nama_lengkap_send = $_GET['nama_lengkap_send'];
$nama_produk_send = $_GET['nama_produk_send'];
$teks_berat_produk_send = $_GET['teks_berat_produk_send'];
$jumlah_pemesanan_send = $_GET['jumlah_pemesanan_send'];
date_default_timezone_set('Asia/Jakarta');
$waktu_pengiriman = date('d-m-Y H:i:s'); 
$start = "09";
$end = "17";
$now = date('H');
$notes = '';
if ($now > $start && $now < $end)
{
  $notes = '';
}
else
{
  $notes = 'Notes : Pengiriman Akan Dilakukan Pada Jam Operasional (Pkl. 09.00 - 17.00 WIB).';
}
$mailAdmin = 'admin@kingfruit.co.id';
$email = 'kingfruit.co.id@gmail.com';
$subjectCreate = 'Pengiriman Produk '.$nama_produk_send.' kingfruit.co.id #';
$subjectMail = $subjectCreate.$kode_pemesanan_send; 
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
    Terimakasih atas pemesanan & kepercayaan anda kepada kami. Berikut detail barang yang sedang dalam pengiriman:
  </div>
  <div style="color: #3a3a3a;margin-top: 10px;">
    <div style="width: 100px;float: left">No. Order</div>
    <div style="float: left;">: '.$kode_pemesanan_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Pengiriman</div>
    <div style="float: left;">: '.$waktu_pengiriman.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Atas Nama</div>
    <div style="float: left;">: '.$nama_lengkap_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Produk</div>
    <div style="float: left;">: '.$nama_produk_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Berat Produk</div>
    <div style="float: left;">: '.$teks_berat_produk_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Jumlah</div>
    <div style="float: left;">: '.$jumlah_pemesanan_send.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 5px;">
    <div style="width: 100px;float: left">Status</div>
    <div style="float: left;">: Pesanan Sedang Dikirim</div>
  </div>
  <br />
  <br />
  <div style="color: #3a3a3a;font-style: italic;">
    '.$notes.'
  </div>
</div>
<br />  
</body>
</html>';

  try{
    $mail->isSMTP();
    $mail->Host = 'srv103.niagahoster.com';
    $mail->SMTPAuth = true;
    $mail->Username = $mailAdmin; 
    $mail->Password = 'kingfruit'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($mailAdmin); 
    $mail->addAddress($emailTo); 
    $mail->addBcc($mailAdmin);

    $mail->isHTML(true);
    $mail->Subject = $subjectMail;
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
