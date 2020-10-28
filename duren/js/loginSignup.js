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
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Nama Lengkap",
        type: "error"
      });
    }  
    else if(nomor_hp == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Nomor Hp",
        type: "error"
      });
    }  
    else if(email == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data E-mail",
        type: "error"
      });
    }  
    else if(password == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Password",
        type: "error"
      });
    }  
    else if(password_re == ''){
      swal({
        title:"Cek Data",
        text: "Silahkan Isi Data Ulangi Password",
        type: "error"
      });
    }  
    else if(password_re != password){
      swal({
        title:"Cek Password",
        text: "Password Tidak Sama",
        type: "error"
      });
    }  
    else if(checkSignup.checked == false){
      swal({
        title:"Cek Data",
        text: "Silahkan centang checkbox",
        type: "error"
      });
    }
    else if(password != ''){
      var data = $("#signup-form").serialize();
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
            swal({
              title:"Gagal Menyimpan",
              text: "Email / Nomor HP sudah dipakai",
              type: "error"
            });
            $("#btn-signup").html('Signup');
            $("#btn-signup").attr('class','buttonYellow');
            $('#nomor_hp').val('');
            $('#email').val('');
            }
            else{
              if(response == "Kode3"){
                swal({
                  title:"Gagal Menyimpan",
                  text: "Email / nomor_hp sudah dipakai",
                  type: "error"
                });
                $("#btn-signup").html('Signup');
                $("#btn-signup").attr('class','buttonYellow');
                $('#nomor_hp').val('');
                $('#email').val('');
              }
              else{
                if(response == "emailCheck"){
                  swal({
                    title:"Gagal Menyimpan",
                    text: "Ulangi kembali email bukan tipe email",
                    type: "error"
                  });
                  $("#btn-signup").html('Signup');
                  $("#btn-signup").attr('class','buttonYellow');
                  $('#nomor_hp').val('');
                  $('#email').val('');
                }
                else{
                  if(response == "Success"){
                    $("#btn-signup").html('Signup');
                    $('#nama_lengkap').val('');
                    $('#nomor_hp').val('');
                    $('#email').val('');
                    $('#password').val('');
                    $('#password_re').val('');
                    swal({
                      title:"Sukses",
                      text: "Pendaftaran Anda Berhasil",
                      type: "success"
                    }).then(function() {
                      window.location = '../conn/data2/loginFromSignUp.php/?email='+email+'&&password='+password;
                    });
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
      alert('Silahkan isi dulu usernamenya')
    }
    else if(password == ''){
      alert('Silahkan isi dulu passwordnya')
    }  
    else if(emailNomorHP != '' && password != ''){
       var data = $("#login-form").serialize();
      /* console.log(data);*/
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
       if(response == "KodeSign1"){
     
       $("#btn-login").html('Loading System...');
        window.location.href = "../in/accounts-duren/open-admin/";
       }
       else{
          if(response == "KodeSign2"){

          $("#btn-login").html('Loading System...');
            window.location.href = "../";
          }
          else{
            alert('Anda Belum Terdaftar') ; 
            $("#btn-login").html('Login');
          }
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
        alert('Silahkan isi dulu usernamenya')
      }
      else if(password == ''){
        alert('Silahkan isi dulu passwordnya')
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
         if(response == "KodeSign1"){
       
         $("#btn-login").html('Loading System...');
          window.location.href = "../in/accounts-duren/open-admin/";
         }
         else{
            if(response == "KodeSign2"){

            $("#btn-login").html('Loading System...');
              window.location.href = "../";
            }
            else{
              alert('Anda Belum Terdaftar') ; 
              $("#btn-login").html('Login');
            }
          }
        }
      });
      return false;
      } 
    }     
  });
});