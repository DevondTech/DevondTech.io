<?php
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "niaga@kingfruit.com";    
    $to = "isna.annisa@hostinger.com";    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>