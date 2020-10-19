$(document).ready(function(){   
	$.ajax({
     	type: 'POST',
     	url: '../../../conn/data2/companyProfile/medsos_data.php/?facebook',
     	contentType: 'application/json; charset=utf-8',
        dataType: 'json',
     	success: function(facebookCallBack) { 

 			var DataFacebook = jQuery.parseJSON(facebookCallBack);

 			var PrintDetail_nama_medsos_facebook = DataFacebook[0].nama_medsos;
 			var PrintDetail_link_medsos_facebook = DataFacebook[0].link_medsos;
            
            /*console.log(facebookCallBack);*/

            $('#PrintDetail_nama_medsos_facebook').val(PrintDetail_nama_medsos_facebook);
            $('#PrintDetail_link_medsos_facebook').val(PrintDetail_link_medsos_facebook);
         
        }
    });       
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/companyProfile/medsos_data.php/?instagram',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(instagramCallBack) { 

            var DataInstagram = jQuery.parseJSON(instagramCallBack);

            var PrintDetail_nama_medsos_instagram = DataInstagram[0].nama_medsos;
            var PrintDetail_link_medsos_instagram = DataInstagram[0].link_medsos;
            
            /*console.log(instagramCallBack);*/

            $('#PrintDetail_nama_medsos_instagram').val(PrintDetail_nama_medsos_instagram);
            $('#PrintDetail_link_medsos_instagram').val(PrintDetail_link_medsos_instagram);
         
        }
    });       
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/companyProfile/medsos_data.php/?twitter',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(twitterCallBack) { 

            var DataTwiter = jQuery.parseJSON(twitterCallBack);

            var PrintDetail_nama_medsos_twitter = DataTwiter[0].nama_medsos;
            var PrintDetail_link_medsos_twitter = DataTwiter[0].link_medsos;
            
            /*console.log(twitterCallBack);*/

            $('#PrintDetail_nama_medsos_twitter').val(PrintDetail_nama_medsos_twitter);
            $('#PrintDetail_link_medsos_twitter').val(PrintDetail_link_medsos_twitter);
         
        }
    }); 
    $.ajax({
        type: 'POST',
        url: '../../../conn/data2/companyProfile/medsos_data.php/?whatsapp',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(whatsappCallBack) { 

            var DataWhatsapp = jQuery.parseJSON(whatsappCallBack);

            var PrintDetail_nama_medsos_whatsapp = DataWhatsapp[0].nama_medsos;
            var PrintDetail_link_medsos_whatsapp = DataWhatsapp[0].link_medsos;
            
           /* console.log(whatsappCallBack);*/

            $('#PrintDetail_nama_medsos_whatsapp').val(PrintDetail_nama_medsos_whatsapp);
            $('#PrintDetail_link_medsos_whatsapp').val(PrintDetail_link_medsos_whatsapp);
         
        }
    });             

    /*facebook edit*/
    $("#Facebook_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_medsos_facebook").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#Facebook_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_medsos_facebook").prop('enable', true);
        $("#PrintDetail_link_medsos_facebook").prop('disabled', false);
        $("#PrintDetail_link_medsos_facebook").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#Facebook_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#Facebook_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#Facebook_ubahCancel').on('click', function(){
        $("#PrintDetail_link_medsos_facebook").prop('enable', false);
        $("#PrintDetail_link_medsos_facebook").prop('disabled', true);
        $("#PrintDetail_link_medsos_facebook").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#Facebook_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#Facebook_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#Facebook_ubahSave').on('click',function(e){
    var PrintDetail_link_medsos_facebook = $('#PrintDetail_link_medsos_facebook').val();
      if(PrintDetail_link_medsos_facebook == ''){
        alert('Silahkan Isi Data Facebook')
      }  
      else{
        var data = $("#updateFacebook").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_medsos_data.php/?updateFacebook',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_medsos_facebook").prop('enable', false);
                $("#PrintDetail_link_medsos_facebook").prop('disabled', true);
                $("#PrintDetail_link_medsos_facebook").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#Facebook_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#Facebook_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

    /*instagram edit*/
    $("#Instagram_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_medsos_instagram").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#Instagram_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_medsos_instagram").prop('enable', true);
        $("#PrintDetail_link_medsos_instagram").prop('disabled', false);
        $("#PrintDetail_link_medsos_instagram").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#Instagram_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#Instagram_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#Instagram_ubahCancel').on('click', function(){
        $("#PrintDetail_link_medsos_instagram").prop('enable', false);
        $("#PrintDetail_link_medsos_instagram").prop('disabled', true);
        $("#PrintDetail_link_medsos_instagram").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#Instagram_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#Instagram_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#Instagram_ubahSave').on('click',function(e){
    var PrintDetail_link_medsos_instagram = $('#PrintDetail_link_medsos_instagram').val();
      if(PrintDetail_link_medsos_instagram == ''){
        alert('Silahkan Isi Data Instagram')
      }  
      else{
        var data = $("#updateInstagram").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_medsos_data.php/?updateInstagram',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_medsos_instagram").prop('enable', false);
                $("#PrintDetail_link_medsos_instagram").prop('disabled', true);
                $("#PrintDetail_link_medsos_instagram").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#Instagram_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#Instagram_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

    /*Whatsapp edit*/
    $("#Whatsapp_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_medsos_whatsapp").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#Whatsapp_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_medsos_whatsapp").prop('enable', true);
        $("#PrintDetail_link_medsos_whatsapp").prop('disabled', false);
        $("#PrintDetail_link_medsos_whatsapp").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#Whatsapp_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#Whatsapp_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#Whatsapp_ubahCancel').on('click', function(){
        $("#PrintDetail_link_medsos_whatsapp").prop('enable', false);
        $("#PrintDetail_link_medsos_whatsapp").prop('disabled', true);
        $("#PrintDetail_link_medsos_whatsapp").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#Whatsapp_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#Whatsapp_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#Whatsapp_ubahSave').on('click',function(e){
    var PrintDetail_link_medsos_whatsapp = $('#PrintDetail_link_medsos_whatsapp').val();
      if(PrintDetail_link_medsos_whatsapp == ''){
        alert('Silahkan Isi Data Whatsapp')
      }  
      else{
        var data = $("#updateWhatsapp").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_medsos_data.php/?updateWhatsapp',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_medsos_whatsapp").prop('enable', false);
                $("#PrintDetail_link_medsos_whatsapp").prop('disabled', true);
                $("#PrintDetail_link_medsos_whatsapp").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#Whatsapp_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#Whatsapp_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

    /*Twitter edit*/
    $("#Twitter_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
    $("#PrintDetail_link_medsos_twitter").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');

    $('#Twitter_EditDataDetailProductAdmin').on('click', function(){
        $("#PrintDetail_link_medsos_twitter").prop('enable', true);
        $("#PrintDetail_link_medsos_twitter").prop('disabled', false);
        $("#PrintDetail_link_medsos_twitter").attr('style','background-color:white;color: black;padding-top: 4px;');
        $("#Twitter_SaveCancelDataDetailProductAdmin").attr('style','display:block;');
        $("#Twitter_EditDataDetailProductAdmin").attr('style','display:none;');
    });

    $('#Twitter_ubahCancel').on('click', function(){
        $("#PrintDetail_link_medsos_twitter").prop('enable', false);
        $("#PrintDetail_link_medsos_twitter").prop('disabled', true);
        $("#PrintDetail_link_medsos_twitter").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
        $("#Twitter_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
        $("#Twitter_EditDataDetailProductAdmin").attr('style','display:block;');
    });

    $('#Twitter_ubahSave').on('click',function(e){
    var PrintDetail_link_medsos_twitter = $('#PrintDetail_link_medsos_twitter').val();
      if(PrintDetail_link_medsos_twitter == ''){
        alert('Silahkan Isi Data Twitter')
      }  
      else{
        var data = $("#updateTwitter").serialize();

        $.ajax({
            type : 'POST',
            url  : '../../../conn/data2/companyProfile/update_medsos_data.php/?updateTwitter',
            data : data,
            beforeSend: function()
            { 
              $("#error").fadeOut();
            }, 
            success :  function(response)
            {
              if(response == "Success"){
                alert('Ubah data berhasil');
                $("#PrintDetail_link_medsos_twitter").prop('enable', false);
                $("#PrintDetail_link_medsos_twitter").prop('disabled', true);
                $("#PrintDetail_link_medsos_twitter").attr('style','background-color:#f1e8e8;color: #505050;padding-top: 4px;');
                $("#Twitter_SaveCancelDataDetailProductAdmin").attr('style','display:none;');
                $("#Twitter_EditDataDetailProductAdmin").attr('style','display:block;');
              }
              else{
                alert('Ubah data gagal');
              }
            }    
          });
          return false;
        } 
    });

});
