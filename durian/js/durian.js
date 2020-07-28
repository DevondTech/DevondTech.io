

var renderPage = true;
$(window).on("load", function(){
  if(renderPage) {
    	$('body').addClass('loaded');
      $('#product').load("product.html");  
      /*$('#next').load("next-button.html");*/   
  }         
}); 

$(document).ready(function(){
 	$('#chatSend').on('click',function(e){
    var chatText = $('#chat-text').val(); 
    /*console.log(chatText);*/
    $('#output-chat').html(chatText);
  });
});


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
/*        $('#navbar-page').attr('style','-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3)');
        $('#navbar-page').attr('style','box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3)');
        $('#navbar-page').attr('style','width: 100%');*/
        $('#navbar-page').attr('class','nav-scroll nav-fixed navbar navbar-expand-lg navbar-light ');
    } else {
/*        $('#navbar-page').attr('style','-webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0) ');
        $('#navbar-page').attr('style','box-shadow: 0 0 0 rgba(0, 0, 0, 0) ');
        $('#navbar-page').attr('style','width: 100%');*/
        $('#navbar-page').attr('class','nav-outscroll nav-fixed navbar navbar-expand-lg navbar-light ');
    }
}
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


