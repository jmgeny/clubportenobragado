(function($) {
  "use strict"; // Start of use strict

  // Closes the sidebar menu
  $(".menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('#sidebar-wrapper .js-scroll-trigger').click(function() {
    $("#sidebar-wrapper").removeClass("active");
    $(".menu-toggle").removeClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
  });

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

})(jQuery); // End of use strict

// Disable Google Maps scrolling
// See http://stackoverflow.com/a/25904582/1607849
// Disable scroll zooming and bind back the click event
var onMapMouseleaveHandler = function(event) {
  var that = $(this);
  that.on('click', onMapClickHandler);
  that.off('mouseleave', onMapMouseleaveHandler);
  that.find('iframe').css("pointer-events", "none");
}
var onMapClickHandler = function(event) {
  var that = $(this);
  // Disable the click handler until the user leaves the map area
  that.off('click', onMapClickHandler);
  // Enable scrolling zoom
  that.find('iframe').css("pointer-events", "auto");
  // Handle the mouse leave event
  that.on('mouseleave', onMapMouseleaveHandler);
}
// Enable map zooming with mouse scroll when the user clicks the map
$('.map').on('click', onMapClickHandler);

// carousel
var timer = 4000;

var i = 0;
var max = $('#c > li').length;
 
  $("#c > li").eq(i).addClass('active').css('left','0');
  $("#c > li").eq(i + 1).addClass('active').css('left','25%');
  $("#c > li").eq(i + 2).addClass('active').css('left','50%');
  $("#c > li").eq(i + 3).addClass('active').css('left','75%');
 

  setInterval(function(){ 

    $("#c > li").removeClass('active');

    $("#c > li").eq(i).css('transition-delay','0.25s');
    $("#c > li").eq(i + 1).css('transition-delay','0.5s');
    $("#c > li").eq(i + 2).css('transition-delay','0.75s');
    $("#c > li").eq(i + 3).css('transition-delay','1s');

    if (i < max-4) {
      i = i+4; 
    }

    else { 
      i = 0; 
    }  

    $("#c > li").eq(i).css('left','0').addClass('active').css('transition-delay','1.25s');
    $("#c > li").eq(i + 1).css('left','25%').addClass('active').css('transition-delay','1.5s');
    $("#c > li").eq(i + 2).css('left','50%').addClass('active').css('transition-delay','1.75s');
    $("#c > li").eq(i + 3).css('left','75%').addClass('active').css('transition-delay','2s');
  
  }, timer);