(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space
(function ($) {

    'use strict';

    var $filters = $('.filter [data-filter]'),
        $boxes = $('.boxes [data-category]');

    $filters.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);

        $filters.removeClass('selected');
        $this.addClass('selected');

        var $filterColor = $this.attr('data-filter');

        if ($filterColor == 'all') {
            $boxes.removeClass('is-animated')
                .fadeOut().promise().done(function () {
                    $boxes.addClass('is-animated').fadeIn();
                });
        } else {
            $boxes.removeClass('is-animated')
                .fadeOut().promise().done(function () {
                    $boxes.filter('[data-category = "' + $filterColor + '"]')
                        .addClass('is-animated').fadeIn();
                });
        }
    });

})(jQuery);
//Smooth scroll
$(function(){   

    var $window = $(window);
    var scrollTime = 0.6;
    var scrollDistance = 170;

    $window.on("mousewheel DOMMouseScroll", function(event){

        event.preventDefault(); 

        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,
                overwrite: 5                            
            });

    });
});

$(document).ready(function(){
    $('.carousel').carousel();
});
//Fun Stats
(function($) {
        "use strict";
        function count($this){
        var current = parseInt($this.html(), 10);
        current = current + 1; /* Where 50 is increment */  
        $this.html(++current);
            if(current > $this.data('count')){
                $this.html($this.data('count'));
            } else {    
                setTimeout(function(){count($this)}, 50);
            }
        }           
        $(".stat-count").each(function() {
          $(this).data('count', parseInt($(this).html(), 10));
          $(this).html('0');
          count($(this));
        });
   })(jQuery);

//Scroll thingy

//Code stolen from css-tricks for smooth scrolling:
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});