 $(window).on('load',function(e){
    $("#body").load("data.html");
 });

 $(document).ready(function () {


	function createBackground(backgroundBody) {
	  if (backgroundBody.matches) { // If media query matches
	    $('#header').attr('class','bodyCommingSoon hero container-fluid border-bottom');
	  } else {
	   	$('#header').attr('class','bodyCommingSoonPhone hero container-fluid border-bottom');
	  }
	}

	var backgroundBody = window.matchMedia("(max-width: 700px)")
	createBackground(backgroundBody) 
	backgroundBody.addListener(createBackground) 

	
});