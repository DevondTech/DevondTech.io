$(window).on("load", function(){
  var userHalu = $('#userHalu').val();
  if(userHalu==''){
    $('#login').attr('style','display:block');
    $('#aboutUserUmum').attr('style','display:block');
    $('#loginFooter').attr('style','display:block');
    $('#aboutUserUmumFooter').attr('style','display:block');
    $('#orderUserUmum').attr('style','display:block');

    $('#logout').attr('style','display:none');
    $('#aboutCust').attr('style','display:none'); 
    $('#logoutFooter').attr('style','display:none');
    $('#aboutCustFooter').attr('style','display:none'); 
    $('#order').attr('style','display:none');    
  }
  else{
    $('#login').attr('style','display:none');
    $('#aboutUserUmum').attr('style','display:none');
    $('#loginFooter').attr('style','display:none');
    $('#aboutUserUmumFooter').attr('style','display:none');
    $('#orderUserUmum').attr('style','display:none');

    $('#logout').attr('style','display:block');
    $('#aboutCust').attr('style','display:block');   
    $('#logoutFooter').attr('style','display:block');
    $('#aboutCustFooter').attr('style','display:block');   
    $('#order').attr('style','display:block');    
  }
});