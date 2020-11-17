<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

require '../../config.php'; 
$json = json_decode(file_get_contents('php://input'), true); 

$emailSend = $_GET['email_send_mail'];
$kodeReturSend = $_GET['kode_retur_send_mail'];
$mailContent = $_GET['mail_content'];
$namaLengkap = $_GET['nama_lengkap_send_mail'];
$namaProduk = $_GET['nama_produk_send_mail'];
$jumlahPemesanan = $_GET['jumlah_pemesanan_send_mail'];
$beratProduk = $_GET['teks_berat_produk_send_mail'];

$mailAdmin = 'admin@kingfruit.co.id';
$email = 'kingfruit.co.id@gmail.com';
$subjectCreate = 'Pengajuan Retur Disetujui, kingfruit.co.id #';
$subjectMail = $subjectCreate.$kodeReturSend; 

/*$emailTo = $_GET['email_send'];
$kode_pemesanan_send = $_GET['kode_pemesanan_send'];
$waktu_pemesanan_send = $_GET['waktu_pemesanan_send'];
$produk_send = $_GET['produk_send'];
$jumlah_send = $_GET['jumlah_send'];
$total_harga_yang_harus_dibayar_send = $_GET['total_harga_yang_harus_dibayar_send'];

$email = 'kingfruit.co.id@gmail.com';*/
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
    Terimakasih atas pemesanan & kepercayaan anda kepada kami. Mohon maaf atas ketidaknyamanan anda, berikut pengajuan retur anda <b> yang telah dikirim kembali </b>:
  </div>
  <br/>
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:14px;">
    <div style="width: 100px;float: left;">Kode Retur  </div>
    <div style="float: left;">: '.$kodeReturSend.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:14px;">
    <div style="width: 100px;float: left;">Status  </div>
    <div style="float: left;">: Disetujui</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:14px;">
    <div style="width: 100px;float: left;">Pemesan  </div>
    <div style="float: left;">: '.$namaLengkap.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:14px;">
    <div style="width: 100px;float: left;">Produk  </div>
    <div style="float: left;">: '.$namaProduk.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:14px;">
    <div style="width: 100px;float: left;">Jumlah  </div>
    <div style="float: left;">: '.$jumlahPemesanan.'</div>
  </div>
  <br />
  <div style="color: #3a3a3a;margin-top: 10px;font-weight: bold;font-size:14px;">
    <div>Alasan  Penolakan :</div>
  </div>
  <div style="color: #3a3a3a;margin-top: 5px;font-size:14px;">
    <div> '.$mailContent.'</div>
  </div>
  <br />
  <br />
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
    $mail->addAddress($emailSend); 
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
