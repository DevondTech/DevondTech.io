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
