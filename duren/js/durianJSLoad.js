/*on load*/

var renderPage = true;
$(window).on("load", function(){
  if(renderPage) {
    	$('body').addClass('loaded');
      $('#product').load("product.html");     
  }         
  window.scrollTo(0, 0); 
}); 

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('#navbar-page').attr('class','nav-scroll nav-fixed navbar navbar-expand-lg navbar-light ');
        $('#next').attr('class','li-next-page-scroll');
    } else {
        $('#navbar-page').attr('class','nav-outscroll2 nav-fixed navbar navbar-expand-lg navbar-light ');
        $('#next').attr('class','li-next-page-scroll');
    }
}
