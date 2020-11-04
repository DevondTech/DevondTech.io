/*on load*/

var renderPage = true;
$(window).on("load", function(){
  if(renderPage) {
    	$('body').addClass('loaded');
      $('#product').load("product.html");  
      /*$('#next').load("next-button.html");*/   
  }         
  window.scrollTo(0, 0); 
}); 

/*loading system*/
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
/*      $('#navbar-page').attr('style','-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3)');
        $('#navbar-page').attr('style','box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3)');
        $('#navbar-page').attr('style','width: 100%');*/
        $('#navbar-page').attr('class','nav-scroll nav-fixed navbar navbar-expand-lg navbar-light ');
        $('#next').attr('class','li-next-page-scroll');
    } else {
/*      $('#navbar-page').attr('style','-webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0) ');
        $('#navbar-page').attr('style','box-shadow: 0 0 0 rgba(0, 0, 0, 0) ');
        $('#navbar-page').attr('style','width: 100%');*/
        $('#navbar-page').attr('class','nav-outscroll2 nav-fixed navbar navbar-expand-lg navbar-light ');
        $('#next').attr('class','li-next-page-scroll');
    }
}

/*loading system*/
// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
/*      $('#navbar-page').attr('style','-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3)');
        $('#navbar-page').attr('style','box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3)');
        $('#navbar-page').attr('style','width: 100%');*/
//         $('#navbar-page').attr('class','nav-scroll nav-fixed navbar navbar-expand-lg navbar-light ');
//         $('#next').attr('class','li-next-page-scroll');
//     } else {
/*      $('#navbar-page').attr('style','-webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0) ');
        $('#navbar-page').attr('style','box-shadow: 0 0 0 rgba(0, 0, 0, 0) ');
        $('#navbar-page').attr('style','width: 100%');*/
//         $('#navbar-page').attr('class','nav-outscroll nav-fixed navbar navbar-expand-lg navbar-light ');
//         $('#next').attr('class','li-next-page-outscroll');
//     }
// }

/*action click*/

$('#openForm').on('click',function(e){
  $('#myForm').attr('style','display:block'); 
  $('#open-chat-modal').attr('style','display:none'); 
});

$('#closeForm').on('click',function(e){
  $('#myForm').attr('style','display:none'); 
  $('#open-chat-modal').attr('style','display:block'); 
});

$('#next-page').on('click',function(e){
  $('#product').load("next-page.html");   
  $('#next').attr('style','display:none');  
  $('#back').attr('style','display:block');   
})

$('#back-page').on('click',function(e){
  $('#product').load("product.html");   
  $('#next').attr('style','display:block');  
  $('#back').attr('style','display:none');  
})

$('#next').mouseover(function(){
  $('#imgNext1').css('display','none');
   $('#imgNext2').css('display','none');
   $('#imgNext1Hover').css('display','block');
   $('#imgNext2Hover').css('display','block');
});

$('#next').mouseout(function(){
  $('#imgNext1').css('display','block');
  $('#imgNext2').css('display','block');
  $('#imgNext1Hover').css('display','none');
  $('#imgNext2Hover').css('display','none');
});

$('#back').mouseover(function(){
  $('#imgBack1').css('display','none');
  $('#imgBack2').css('display','none');
  $('#imgBack1Hover').css('display','block');
  $('#imgBack2Hover').css('display','block');
});

$('#back').mouseout(function(){
  $('#imgBack1').css('display','block');
  $('#imgBack2').css('display','block');
  $('#imgBack1Hover').css('display','none');
  $('#imgBack2Hover').css('display','none');
});

$('#search-icon-large').on('click',function(e){
  $('#search-input-large').attr('class','li-icon-link-search');
  $('#search-icon-large').attr('class','li-icon-link-hidden');
});

$('#close-search-large').on('click',function(e){
  $('#search-input-large').attr('class','li-icon-link-search-hidden');
  $('#search-icon-large').attr('class','li-icon-link');
});

$('#search-icon-small').on('click',function(e){
  $('#search-input-small').attr('class','li-icon-link-search');
  $('#search-icon-small').attr('class','li-icon-link-hidden');
  $('#buy-icon-small').attr('class','li-icon-link-hidden');
  $('#nav-icon-small').attr('class','li-icon-link-hidden');
});

$('#close-search-small').on('click',function(e){
  $('#search-input-small').attr('class','li-icon-link-search-hidden');
  $('#search-icon-small').attr('class','li-icon-link');
  $('#buy-icon-small').attr('class','li-icon-link');
  $('#nav-icon-small').attr('class','li-icon-link');
});


/*chat icon click*/

$(document).ready(function(){
  $('#chatSend').on('click',function(e){
    var chatText = $('#chat-text').val(); 
    /*console.log(chatText);*/
    $('#output-chat').text(chatText);
  });

  $('#chatSend').on('keypress',function(e){
    var chatText = $('#chat-text').val(); 
    /*console.log(chatText);*/
    $('#output-chat').text(chatText);
  });

  $.ajax({
    type: 'POST',
    url: 'conn/data2/product/product_select_data.php?selectToHomePage',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectToHomePage) { 

      var DataDetailProduk = jQuery.parseJSON(selectToHomePage);
      var PrintDetail_id_produk = DataDetailProduk[0].id_produk;
      var PrintDetail_nama_produk = DataDetailProduk[0].nama_produk;
      var PrintDetail_detail1_produk = DataDetailProduk[0].detail1_produk;
      var PrintDetail_detail2_produk = DataDetailProduk[0].detail2_produk;
      var PrintDetail_harga = DataDetailProduk[0].harga;
      var beratProduk = DataDetailProduk[0].teks_berat_produk;

      var gambar1_productView = DataDetailProduk[0].gambar1_produk;
      var gambar2_productView = DataDetailProduk[0].gambar2_produk;
      var gambar3_productView = DataDetailProduk[0].gambar3_produk;
      var gambar4_productView = DataDetailProduk[0].gambar4_produk;
      var CheckHarga = DataDetailProduk[0].harga;
      var CheckHargaAfter =  DataDetailProduk[0].harga_setelah_diskon;

      //console.log(gambar4_productView);
      var harga = DataDetailProduk[0].harga;
      var hargaNumberString = harga.toString(),
          hargaSisa    = hargaNumberString.length % 3,
          hargaRupiah  = hargaNumberString.substr(0, hargaSisa),
          hargaRibuan  = hargaNumberString.substr(hargaSisa).match(/\d{3}/g);         
      if (hargaRibuan) {
          hargaSeparator = hargaSisa ? '.' : '';
          hargaRupiah += hargaSeparator + hargaRibuan.join('.');
      }
      var hargaDiskon = DataDetailProduk[0].harga_setelah_diskon;
      var hargaDiskonNumberString = hargaDiskon.toString(),
          hargaDiskonSisa    = hargaDiskonNumberString.length % 3,
          hargaDiskonRupiah  = hargaDiskonNumberString.substr(0, hargaDiskonSisa),
          hargaDiskonRibuan  = hargaDiskonNumberString.substr(hargaDiskonSisa).match(/\d{3}/g);         
      if (hargaDiskonRibuan) {
          hargaDiskonSeparator = hargaDiskonSisa ? '.' : '';
          hargaDiskonRupiah += hargaDiskonSeparator + hargaDiskonRibuan.join('.');
      }
      $('#judulProduk').text(PrintDetail_nama_produk);
      $('#beratProduk').text(beratProduk);
      $('#detail1Produk').text(PrintDetail_detail1_produk+' '+PrintDetail_detail2_produk);
      $('#topText').text(PrintDetail_detail1_produk+' '+PrintDetail_detail2_produk);
      /*$('#detail2Produk').text(PrintDetail_detail2_produk);*/
      $('#hargaProduk').text('Rp '+hargaRupiah+',00');
      $('#hargaDiskon').text('Rp '+hargaDiskonRupiah+',00');

      $('#hargaReal').text('Rp '+hargaRupiah+',00');
      
      if(CheckHarga == CheckHargaAfter){
        $('#dataHarga').attr('style','display:none;');
      }
      else{
        $('#dataHargaReal').attr('style','display:none;');
      }

      var PrintDetail_DataFotoNull = 'in/accounts-duren/images/seimpleProduk.png';
      if(gambar1_productView == '' || gambar1_productView == null){
        $('#imgDataLarge').attr('src', PrintDetail_DataFotoNull);
        $('#imgDataSmall1').attr('src', PrintDetail_DataFotoNull);

      }
      else{
        $('#imgDataSmall1').attr('src', 'in/accounts-duren/images/produk/'+gambar1_productView);
        $('#imgDataLarge').attr('src', 'in/accounts-duren/images/produk/'+gambar1_productView);
      }
      if(gambar2_productView == '' || gambar2_productView == null){
        $('#imgDataSmall2').attr('src', PrintDetail_DataFotoNull);

      }
      else{
        $('#imgDataSmall2').attr('src', 'in/accounts-duren/images/produk/'+gambar2_productView);
      }
      if(gambar3_productView == '' || gambar3_productView == null){
        $('#imgDataSmall3').attr('src', PrintDetail_DataFotoNull);

      }
      else{
        $('#imgDataSmall3').attr('src', 'in/accounts-duren/images/produk/'+gambar3_productView);
      }
      if(gambar4_productView == '' || gambar4_productView == null){
        $('#imgDataSmall4').attr('src', PrintDetail_DataFotoNull);

      }
      else{
        $('#imgDataSmall4').attr('src', 'in/accounts-duren/images/produk/'+gambar4_productView);
      }
    }
  }); 

  $.ajax({
    type: 'POST',
    url: 'conn/data2/companyProfile/medsos_data.php?selectFacebook',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectFacebook) { 
      var DataFacebook = jQuery.parseJSON(selectFacebook);
      var dataFacebook = DataFacebook[0].link_medsos;
      $('#facebook1').attr('href', dataFacebook);
      $('#facebook2').attr('href', dataFacebook);
      $('#facebook3').attr('href', dataFacebook);
    }
  }); 

  $.ajax({
    type: 'POST',
    url: 'conn/data2/companyProfile/medsos_data.php?selectInstagram',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectInstagram) { 
      var DataInstagram = jQuery.parseJSON(selectInstagram);
      var dataInstagram = DataInstagram[0].link_medsos;
      $('#instagram1').attr('href', dataInstagram);
      $('#instagram2').attr('href', dataInstagram);
      $('#instagram3').attr('href', dataInstagram);
    }
  }); 

  $.ajax({
    type: 'POST',
    url: 'conn/data2/companyProfile/medsos_data.php?selectTwitter',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectTwitter) { 
      var DataTwitter = jQuery.parseJSON(selectTwitter);
      var dataTwitter = DataTwitter[0].link_medsos;
      $('#twitter2').attr('href', dataTwitter);
      $('#twitter3').attr('href', dataTwitter);
    }
  }); 

  $.ajax({
    type: 'POST',
    url: 'conn/data2/companyProfile/medsos_data.php?selectWhatsapp',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectWhatsapp) { 
      var DataWhatsapp = jQuery.parseJSON(selectWhatsapp);
      var dataWhatsapp = DataWhatsapp[0].link_medsos;
      $('#whatsapp1').attr('href', dataWhatsapp);
      $('#whatsapp2').attr('href', dataWhatsapp);
      $('#whatsapp3').attr('href', dataWhatsapp);
      $('#whatsapp4').attr('href', dataWhatsapp);
    }
  }); 

  $.ajax({
    type: 'POST',
    url: 'conn/data2/companyProfile/about_us_data.php?dataAboutUs',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(dataAboutUs) { 
      var AboutUS = jQuery.parseJSON(dataAboutUs);
      var alamatOffice = AboutUS[0].alamat;
      var number1Office = AboutUS[0].nomor_hp1;
      var number2Office = AboutUS[0].nomor_hp2;
      var emailOffice = AboutUS[0].email;
      $('#alamatOffice').text(alamatOffice);
      if(number1Office!=''){
        $('#number1Office').text('+'+number1Office);
      }
      else{
        $('#number1Office').attr('style','display:none');
      }
      if(number2Office!=''){
        $('#number2Office').text('+'+number2Office);
      }
      else{
        $('#number2Office').attr('style','display:none');
      }
     
      $('#emailOffice').text(emailOffice);
      $('#linkEmail').attr('href','mailto:'+emailOffice);
      $('#linkNumber1').attr('href','https://api.whatsapp.com/send?phone='+number1Office);
      $('#linkNumber2').attr('href','https://api.whatsapp.com/send?phone='+number2Office);
    }
  });
});
