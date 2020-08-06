/*$(document).ready(function() {
  $("#dropdown-btn").click(function() {
    $('#modalNavLink').attr('class','modalNavLink-show');
    $("#modalNavLink").toggle();
  });
  $("#dropdown-btn-name").click(function() {
    $('#modalNavLink').attr('class','modalNavLink-show');
    $("#modalNavLink").toggle();
  });
  $(document).on("click", function(event) {
    var trigger = $("#dropdown-btn")[0];
    var triggerName = $("#dropdown-btn-name")[0];
    var dropdown = $("#modalNavLink");
    if (dropdown !== event.target && !dropdown.has(event.target).length && trigger !== event.target) {
      $('modalNavLink').css('class','modalNavLink-hidden');;
    }
    if (dropdown !== event.target && !dropdown.has(event.target).length && triggerName !== event.target) {
      $('modalNavLink').css('class','modalNavLink-hidden');;
    }
  });
});*/


function myFunction(x) {
  if (x.matches) { 
    $('#top1-ESikola').attr('class','padding-LeftRight40 col-lg-12 col-md-12 col-sm-12');
  } else {
    $('#top1-ESikola').attr('class','padding-LeftRight40 col-lg-5 col-md-5 col-sm-5');
  }
}

var x = window.matchMedia("(max-width: 900px)")
myFunction(x) 
x.addListener(myFunction) 


/*slide right or left*/

$('#carouselSmall').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});





  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });