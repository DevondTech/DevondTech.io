$(window).on("load", function(){

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
    url: '../conn/data2/product/product_select_data.php?selectToHomePage',
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: function(selectToHomePage) { 
      var DataDetailProduk = jQuery.parseJSON(selectToHomePage);
      var PrintDetail_id_produk = DataDetailProduk[0].id_produk;
      var PrintDetail_nama_produk = DataDetailProduk[0].nama_produk;
      var PrintDetail_detail1_produk = DataDetailProduk[0].detail1_produk;
      var PrintDetail_detail2_produk = DataDetailProduk[0].detail2_produk;
      var CheckHarga = DataDetailProduk[0].harga;
      var CheckHargaAfter =  DataDetailProduk[0].harga_setelah_diskon;
      var PrintDetail_harga = DataDetailProduk[0].harga;
      var gambar1_productView = DataDetailProduk[0].gambar1_produk;
      var gambar2_productView = DataDetailProduk[0].gambar2_produk;
      var gambar3_productView = DataDetailProduk[0].gambar3_produk;
      var gambar4_productView = DataDetailProduk[0].gambar4_produk;
      var beratProduk = DataDetailProduk[0].teks_berat_produk;
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
      $('#beratProduk').text(beratProduk);
      $('#judulProduk').text(PrintDetail_nama_produk);
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
      var PrintDetail_DataFotoNull = '../in/accounts-duren/images/seimpleProduk.png';
      if(gambar1_productView == '' || gambar1_productView == null){
        $('#imgDataLarge').attr('src', PrintDetail_DataFotoNull);
        $('#imgDataSmall1').attr('src', PrintDetail_DataFotoNull);
      }
      else{
        $('#imgDataSmall1').attr('src', '../in/accounts-duren/images/produk/'+gambar1_productView);
        $('#imgDataLarge').attr('src', '../in/accounts-duren/images/produk/'+gambar1_productView);
      }
      if(gambar2_productView == '' || gambar2_productView == null){
        $('#imgDataSmall2').attr('src', PrintDetail_DataFotoNull);
      }
      else{
        $('#imgDataSmall2').attr('src', '../in/accounts-duren/images/produk/'+gambar2_productView);
      }
      if(gambar3_productView == '' || gambar3_productView == null){
        $('#imgDataSmall3').attr('src', PrintDetail_DataFotoNull);
      }
      else{
        $('#imgDataSmall3').attr('src', '../in/accounts-duren/images/produk/'+gambar3_productView);
      }
      if(gambar4_productView == '' || gambar4_productView == null){
        $('#imgDataSmall4').attr('src', PrintDetail_DataFotoNull);
      }
      else{
        $('#imgDataSmall4').attr('src', '../in/accounts-duren/images/produk/'+gambar4_productView);
      }
    }
  }); 
  
  $.ajax({
    type: 'POST',
    url: '../conn/data2/companyProfile/medsos_data.php?selectFacebook',
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
    url: '../conn/data2/companyProfile/medsos_data.php?selectInstagram',
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
    url: '../conn/data2/companyProfile/medsos_data.php?selectTwitter',
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
    url: '../conn/data2/companyProfile/medsos_data.php?selectWhatsapp',
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
    url: '../conn/data2/companyProfile/about_us_data.php?dataAboutUs',
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
