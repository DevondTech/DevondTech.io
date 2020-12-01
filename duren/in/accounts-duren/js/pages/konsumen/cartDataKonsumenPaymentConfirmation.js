$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUserToPaymentCall",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectCartDataByUserToPayment) { 
            var DataPayment = jQuery.parseJSON(selectCartDataByUserToPayment);
            var gambar_bukti_pembayaran = DataPayment[0].gambar_bukti_pembayaran;
            /*if( gambar_bukti_pembayaran== null ||  gambar_bukti_pembayaran== ''){
                $('#cardPaymentConfirmation').load('cartDataConfirmationView.php');
            }
            else{
                $('#cardPaymentConfirmation').load('cartDataInputPayment.php');  
            }     */ 
            if(gambar_bukti_pembayaran== 'a'){
                $('#cardPaymentConfirmation').load('cartDataInputPayment.php');  
            }
            else if(gambar_bukti_pembayaran== '../images/link-aja.png'){
                $('#cardPaymentConfirmation').load('cartDataInputPaymentLinkAja.php');  
            }
            else{
                $('#cardPaymentConfirmation').load('cartDataConfirmationView.php');
            }      
        }
    });
});
