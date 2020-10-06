$('#star1').on('click',function(e){
  $('#star1').attr('src','../../../images/icon/star-active.png');
  $('#star2').attr('src','../../../images/icon/star.png');
  $('#star3').attr('src','../../../images/icon/star.png');
  $('#star4').attr('src','../../../images/icon/star.png');
  $('#star5').attr('src','../../../images/icon/star.png');
  $('#star').val('1');
});

$('#star2').on('click',function(e){
  $('#star1').attr('src','../../../images/icon/star-active.png');
  $('#star2').attr('src','../../../images/icon/star-active.png');
  $('#star3').attr('src','../../../images/icon/star.png');
  $('#star4').attr('src','../../../images/icon/star.png');
  $('#star5').attr('src','../../../images/icon/star.png');
  $('#star').val('2');
});

$('#star3').on('click',function(e){
  $('#star1').attr('src','../../../images/icon/star-active.png');
  $('#star2').attr('src','../../../images/icon/star-active.png');
  $('#star3').attr('src','../../../images/icon/star-active.png');
  $('#star4').attr('src','../../../images/icon/star.png');
  $('#star5').attr('src','../../../images/icon/star.png');
  $('#star').val('3');
});

$('#star4').on('click',function(e){
  $('#star1').attr('src','../../../images/icon/star-active.png');
  $('#star2').attr('src','../../../images/icon/star-active.png');
  $('#star3').attr('src','../../../images/icon/star-active.png');
  $('#star4').attr('src','../../../images/icon/star-active.png');
  $('#star5').attr('src','../../../images/icon/star.png');
  $('#star').val('4');
});

$('#star5').on('click',function(e){
  $('#star1').attr('src','../../../images/icon/star-active.png');
  $('#star2').attr('src','../../../images/icon/star-active.png');
  $('#star3').attr('src','../../../images/icon/star-active.png');
  $('#star4').attr('src','../../../images/icon/star-active.png');
  $('#star5').attr('src','../../../images/icon/star-active.png');
  $('#star').val('5');
});
$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "../../../conn/data2/cartProcess/cartProcess.php/?selectCartDataToComment",
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectCartDataToComment) { 
        var DataUser = jQuery.parseJSON(selectCartDataToComment);
        var DataIdUser = DataUser[0].id_user;
        var DataProsesPemesanan = DataUser[0].id_proses_pemesanan;
        var DataProduk = DataUser[0].id_produk;
        var DataPemesanan = DataUser[0].id_pemesanan;
        $('#id_produk').val(DataProduk);
        $('#id_pemesanan').val(DataPemesanan);
    }
  });
});