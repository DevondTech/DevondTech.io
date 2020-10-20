$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataForConfirmationFinishShipped",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectDataForConfirmationFinishShipped) { 
      var DataCall = jQuery.parseJSON(selectDataForConfirmationFinishShipped);
      if(DataCall !=''){
        $.ajax({
          type: "GET",
          url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataForConfirmationFinishShippedCheckPhoto",
          contentType: 'application/json; charset=utf-8',
          dataType: 'json',
          success: function(selectDataForConfirmationFinishShippedCheckPhoto) { 
            var DataPhoto = jQuery.parseJSON(selectDataForConfirmationFinishShippedCheckPhoto);

            if(DataPhoto!=''){
              var dataCheckGambar = DataPhoto[0].gambar_barang_retur;
              var statusRetur = DataPhoto[0].id_status_retur;
              if(dataCheckGambar !='' || statusRetur=='1'){
                $('#FinishingProcess').load('cartDataProcessFinishConfirmationRetur.php');
              }
              else{
                $('#FinishingProcess').load('cartDataProcessBeingShippedPerrent.php');
              }
            }
            else{
                $('#FinishingProcess').load('cartDataProcessBeingShippedPerrent.php');
            }
           
          }
        });
      }
      else{
        $('#FinishingProcess').load('cartDataProcessBeingShippedPerrent.php');
      }
    
  }
});
  });

/*    else if(dataCheckGambar !='' || statusRetur=='2'){
            $('#FinishingProcess').load('cartDataProcessFinishConfirmationRetur.php');
          }
*/


/*
$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/cartProcess/cartProcess.php/?selectDataForConfirmationFinishShipped",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectDataForConfirmationFinishShipped) { 
     
    
  }
});
  });

*/

