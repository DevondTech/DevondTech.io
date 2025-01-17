/*signup script*/
$('document').ready(function()
{ 
  $('#btn-signup').on('click',function(e){
    var nama_lengkap = $('#nama_lengkap').val();
    var nomor_hp = $('#nomor_hp').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var password_re = $('#password_re').val();
    var checkSignup = document.getElementById('checkSignup');
    if(nama_lengkap == ''){
      alert('Silahkan Isi Data Nama Lengkap')
    }  
    else if(nomor_hp == ''){
      alert('Silahkan Isi Data Nomor Hp')
    }  
    else if(email == ''){
      alert('Silahkan Isi Data E-mail')
    }  
    else if(password == ''){
      alert('Silahkan Isi Data Password')
    }  
    else if(password_re == ''){
      alert('Silahkan Isi Data Ulangi Password')
    }  
    else if(password_re != password){
      alert('Password Tidak Sama')
    }  
    else if(checkSignup.checked == false){
      alert('Silahkan centang checkbox')
    }
    else if(password != ''){
      var data = $("#signup-form").serialize();
      /*console.log(data);*/
      $.ajax({

         type : 'POST',
         url  : '../conn/data2/user_login.php/?signup',
         data : data,
         beforeSend: function()
         { 
          $("#error").fadeOut();
          $("#btn-signup").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
         }, 
          success :  function(response)
          {      
            if(response == "userCheck"){
            alert('Email / Nomor HP sudah dipakai');
            $("#btn-signup").html('Signup');
            $("#btn-signup").attr('class','buttonYellow');
            $('#nomor_hp').val('');
            $('#email').val('');
            }
            else{
              if(response == "Kode3"){
                alert('Email / nomor_hp sudah dipakai');
                $("#btn-signup").html('Signup');
                $("#btn-signup").attr('class','buttonYellow');
                $('#nomor_hp').val('');
                $('#email').val('');
              }
              else{
                if(response == "emailCheck"){
                  alert('Ulangi kembali email bukan tipe email');
                  $("#btn-signup").html('Signup');
                  $("#btn-signup").attr('class','buttonYellow');
                  $('#nomor_hp').val('');
                  $('#email').val('');
                }
                else{
                  if(response == "Success"){
                    $("#btn-signup").html('Signup');
                    alert('Pendaftaran Anda Berhasil');
                    $('#nama_lengkap').val('');
                    $('#nomor_hp').val('');
                    $('#email').val('');
                    $('#password').val('');
                    $('#password_re').val('');
                    window.location.href = "../login";
                  }
                  else{
                    $("#error").fadeIn(1000, function(){   
                    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   alamat email atau password salah!.</div>');
                         $("#btn-signup").html('<span class="glyphicon glyphicon-log-in"></span>   Sign Up');
                    });
                  }
                }
              }
            }       
          }
        });
      return false;
    }      
  });
});


/*login script*/
$('document').ready(function()
{ 
  $('#btn-login').on('click',function(e){
    var emailNomorHP = $('#emailNomorHP').val();
    var password = $('#password').val();
    if(emailNomorHP == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan isi dulu usernamenya",
        type: "error"
      });
    }
    else if(password == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan isi dulu passwordnya",
        type: "error"
      });
    }  
    else if(emailNomorHP != '' && password != ''){
       var data = $("#login-form").serialize();
       /*console.log(data);*/
    $.ajax({
      type : 'POST',
      url  : '../conn/data2/user_login.php/?login',
      data : data,
      beforeSend: function()
      { 
        $("#error").fadeOut();
        $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
      }, 
      success :  function(response)
      {      
        if(response == "checkPassword"){
          swal({
            title:"Fatal",
            text: "E-mail yang anda masukan salah atau anda belum terdaftar",
            type: "error"
          });
          $("#btn-login").html('Login');
        }
        else if(response == "KodeSign1"){
          $("#btn-login").html('Loading System...');
          window.location.href = "../in/accounts-duren/open-admin/";
        }
        else if(response == "KodeSign2"){
          $("#btn-login").html('Loading System...');
            window.location.href = "../";
        }
        else{
          swal({
            title:"Fatal",
            text: "Anda Belum Terdaftar",
            type: "error"
          });
          $("#btn-login").html('Login');
        }
      }
    });
    return false;
    }      
  });

  document.querySelector('#password').addEventListener("keyup",function(e){
    if (e.keyCode === 13) 
    {
      var emailNomorHP = $('#emailNomorHP').val();
      var password = $('#password').val();
      if(emailNomorHP == ''){
        swal({
          title:"Cek Data",
          text: "Silahkan isi dulu usernamenya",
          type: "error"
        });
      }
      else if(password == ''){
        swal({
          title:"Cek Data",
          text: "Silahkan isi dulu passwordnya",
          type: "error"
        });
      }  
      else if(emailNomorHP != '' && password != ''){
         var data = $("#login-form").serialize();
         /*console.log(data);*/
      $.ajax({
        type : 'POST',
        url  : '../conn/data2/user_login.php/?login',
        data : data,
        beforeSend: function()
        { 
          $("#error").fadeOut();
          $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
        }, 
        success :  function(response)
        {      
          if(response == "checkPassword"){
            swal({
              title:"Fatal",
              text: "E-mail yang anda masukan salah atau anda belum terdaftar",
              type: "error"
            });
            $("#btn-login").html('Login');
          }
          else if(response == "KodeSign1"){
            $("#btn-login").html('Loading System...');
            window.location.href = "../in/accounts-duren/open-admin/";
          }
          else if(response == "KodeSign2"){
            $("#btn-login").html('Loading System...');
              window.location.href = "../";
          }
          else{
            swal({
              title:"Fatal",
              text: "Anda Belum Terdaftar",
              type: "error"
            });
            $("#btn-login").html('Login');
          }
        }
      });
      return false;
      }
    }     
  });
});