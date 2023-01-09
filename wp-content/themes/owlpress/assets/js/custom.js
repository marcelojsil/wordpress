(function($) {
  'use strict';

    // ScrollUp
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 200) {
        $('.scrollingUp').addClass('is-active');
      } else {
        $('.scrollingUp').removeClass('is-active');
      }
    });
    // Sticky Header
    $(window).on('scroll', function() {
      if ($(window).scrollTop() >= 250) {
          $('.is-sticky-on').addClass('is-sticky-menu');
      }
      else {
          $('.is-sticky-on').removeClass('is-sticky-menu');
      }
    });
    $( document ).ready(function() {
        $('.scrollingUp').on('click', function () {
          $("html, body").animate({
            scrollTop: 0
          }, 600);
          return false;
        });
        
        
		// Home Slider
        var $owlHome = $('.home-slider');
        $owlHome.owlCarousel({
            rtl: $("html").attr("dir") == 'rtl' ? true : false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 10000,
            margin: 0,
            loop: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            singleItem: true,
            transitionStyle: "fade",
            touchDrag: true,
            mouseDrag: true,
            slideSpeed: 2000,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    nav: false
                },
                992: {
                    nav: true
                }
            }
        });
        $owlHome.owlCarousel();
        $owlHome.on('translate.owl.carousel', function (event) {
            var data_anim = $("[data-animation]");
            data_anim.each(function() {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });
        $("[data-delay]").each(function() {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });
        $("[data-duration]").each(function() {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });
        $owlHome.on('translated.owl.carousel', function() {
            var data_anim = $owlHome.find('.owl-item.active').find("[data-animation]");
            data_anim.each(function() {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });
    });
	
	$(window).on('load', function () {
      $("#item01").mCustomScrollbar({
          axis:"x",
          theme:"3d-thick",
          autoExpandScrollbar:true,
          advanced:{autoExpandHorizontalScroll:true}
      });
      $("#item02").mCustomScrollbar({
          axis:"x",
          theme:"3d-thick",
          autoExpandScrollbar:true,
          advanced:{autoExpandHorizontalScroll:true}
      });
      $("#item03").mCustomScrollbar({
          axis:"y",
          theme:"3d-thick",
          autoExpandScrollbar:true,
          advanced:{autoExpandHorizontalScroll:true}
      });
    });
}(jQuery));