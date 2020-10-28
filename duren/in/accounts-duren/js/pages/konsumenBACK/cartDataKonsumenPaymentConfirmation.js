$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataByUserToPaymentCall",
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(selectCartDataByUserToPayment) { 
            var DataPayment = jQuery.parseJSON(selectCartDataByUserToPayment);
            var gambar_bukti_pembayaran = DataPayment[0].gambar_bukti_pembayaran;
            if( gambar_bukti_pembayaran== null ||  gambar_bukti_pembayaran== ''){
                $('#cardPaymentConfirmation').load('cartDataConfirmationView.php');
            }
            else{
                $('#cardPaymentConfirmation').load('cartDataInputPayment.php');  
            }      
        }
    });
});
