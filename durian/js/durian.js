var renderPage = true;
$(window).on("load", function(){
    if(renderPage) {
      	$('body').addClass('loaded');
    }         
}); 

$(document).ready(function(){
   	$('#chatSend').on('click',function(e){
	    var chatText = $('#chat-text').val(); 
	    /*console.log(chatText);*/
	    $('#output-chat').html(chatText);
    });
});

$('#openForm').on('click',function(e){
    $('#myForm').attr('style','display:block'); 
    $('#open-chat-modal').attr('style','display:none'); 
});

$('#closeForm').on('click',function(e){
    $('#myForm').attr('style','display:none'); 
    $('#open-chat-modal').attr('style','display:block'); 
});