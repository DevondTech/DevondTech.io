<?php 
  	//header('Content-Type: application/json; charset=UTF-8');



    #REQUEST QRSTRING LINKAJA
    $url 		  = 'https://mfs-dev.linkaja.com/linkaja-api/api/payment';
    //$url 		  = 'https://devond.co.id/tes-sesi/response.php';

    $item1      = $_POST['item1'];
    $harga1     = $_POST['harga1'];
    $qty1       = $_POST['qty1']; 
    $tot        = $harga1 * $qty1;


    $trxId      = $_POST['trxId'];
    $terminalId = 'testing_linkaja_wco';
    $userKey    = 'wcotest1090';
    $password   = '@wcotest12';
    $signature  = 'wcotestsign';
    $total      = (string)$tot;
    $items      = '[["'.$item1.'","'.$harga1.'","'.$qty1.'"]]';
    $msisdn     = $_POST['msisdn'];
    $successUrl = 'https://kingfruit.co.id/tes-linkaja/success.html';
    $failedUrl  = 'https://kingfruit.co.id/tes-linkaja/failed.html';

    
    $payload ='trxId='.$trxId.'&terminalId='.$terminalId.'&userKey='.$userKey.'&password='.$password.'&signature='.$signature.'&total='.$total.'&successUrl='.$successUrl.'&failedUrl='.$failedUrl.'&Items='.$items.'&msisdn='.$msisdn.'&Editable=Yes&default_language=0&default_template=0';

    #CURL : POST TO LINK AJA TO GENERATE QR STRING
    
    $curl = curl_init();
    curl_setopt_array($curl, [
    	CURLOPT_URL => $url,
    	CURLOPT_RETURNTRANSFER => true,
    	CURLOPT_ENCODING => '',
    	CURLOPT_MAXREDIRS => 10,
    	CURLOPT_TIMEOUT => 1000 * 30,
    	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	CURLOPT_CUSTOMREQUEST => 'POST',
    	CURLOPT_HTTPHEADER => [
        'Content-Type: application/x-www-form-urlencoded',
    	],
      CURLOPT_POSTFIELDS => $payload,
    ]);
	$curlResponse = json_decode(curl_exec($curl));
	$curlError = curl_error($curl);
	curl_close($curl);
  //$data = array('request' => $payload, 'response' => $curlResponse);
  $pgpToken = json_encode($curlResponse->pgpToken);
  $refNum   = json_encode($curlResponse->refNum);
  $fastTime = json_encode($curlResponse->fastTime);
?>
<html>
<html lang="en">
    <head>
        <title>Response LinkAjaWCO</title>
    </head>
    <body>
        <form action="https://mfs-dev.linkaja.com/checkout/payment" method="post">
          <p><label>pgp Token</label></p>
          <p>
            <textarea rows="10" class="form-control form-control-sm" name="Message" placeholder=""><?php echo str_replace('"','',$pgpToken); ?></textarea>
          </p>

          <p><label>ref. Number</label></p>
          <p><input type="text" value="<?php echo str_replace('"','', $refNum); ?>" name="refNum"></p>

          <p><label>Fast Time</label></p>
          <p><input type="text" value="<?php echo str_replace('"','',$fastTime); ?>" name="fastTime"></p>
          <button type="submit" class="btn btn-success btn-block" name="submit2">Checkout</button>
        </form>
    </body>
</html>