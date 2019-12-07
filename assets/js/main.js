 AOS.init({
     duration: 800,
     easing: 'slide'
 });

 (function($) {

     "use strict";

     var isMobile = {
         Android: function() {
             return navigator.userAgent.match(/Android/i);
         },
         BlackBerry: function() {
             return navigator.userAgent.match(/BlackBerry/i);
         },
         iOS: function() {
             return navigator.userAgent.match(/iPhone|iPad|iPod/i);
         },
         Opera: function() {
             return navigator.userAgent.match(/Opera Mini/i);
         },
         Windows: function() {
             return navigator.userAgent.match(/IEMobile/i);
         },
         any: function() {
             return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
         }
     };


     $(window).stellar({
         responsive: true,
         parallaxBackgrounds: true,
         parallaxElements: true,
         horizontalScrolling: false,
         hideDistantElements: false,
         scrollProperty: 'scroll'
     });


     var fullHeight = function() {

         $('.js-fullheight').css('height', $(window).height());
         $(window).resize(function() {
             $('.js-fullheight').css('height', $(window).height());
         });

     };
     fullHeight();

     // loader
     var loader = function() {
         setTimeout(function() {
             if ($('#loader').length > 0) {
                 $('#loader').removeClass('show');
             }
         }, 1);
     };
     loader();

     // Scrollax
     $.Scrollax();

     var carousel = function() {

         $('.product-slider').owlCarousel({
             autoplay: true,
             loop: true,
             items: 1,
             margin: 30,
             stagePadding: 0,
             nav: false,
             dots: true,
             navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 2
                 },
                 1000: {
                     items: 3
                 }
             }
         });
         $('.carousel-testimony').owlCarousel({
             autoplay: true,
             loop: true,
             items: 1,
             margin: 0,
             stagePadding: 0,
             nav: false,
             navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 1
                 },
                 1000: {
                     items: 1
                 }
             }
         });

     };
     carousel();

     // scroll
     var scrollWindow = function() {
         $(window).scroll(function() {
             var $w = $(this),
                 st = $w.scrollTop(),
                 navbar = $('.navbar'),
                 sd = $('.js-scroll-wrap');

             if (st > 150) {
                 if (!navbar.hasClass('scrolled')) {
                     navbar.addClass('scrolled');
                 }
             }
             if (st < 150) {
                 if (navbar.hasClass('scrolled')) {
                     navbar.removeClass('scrolled sleep');
                 }
             }
             if (st > 350) {
                 if (!navbar.hasClass('awake')) {
                     navbar.addClass('awake');
                 }

                 if (sd.length > 0) {
                     sd.addClass('sleep');
                 }
             }
             if (st < 350) {
                 if (navbar.hasClass('awake')) {
                     navbar.removeClass('awake');
                     navbar.addClass('sleep');
                 }
                 if (sd.length > 0) {
                     sd.removeClass('sleep');
                 }
             }
         });
     };
     scrollWindow();

     // navigation
     var OnePageNav = function() {
         $(".smoothscroll[href^='#'], #nav ul li a[href^='#']").on('click', function(e) {
             e.preventDefault();

             var hash = this.hash,
                 navToggler = $('.navbar-toggler');
             $('html, body').animate({
                 scrollTop: $(hash).offset().top
             }, 700, 'easeInOutExpo', function() {
                 window.location.hash = hash;
             });


             if (navToggler.is(':visible')) {
                 navToggler.click();
             }
         });
         $('body').on('activate.bs.scrollspy', function() {
             console.log('nice');
         })
     };
     OnePageNav();

     var goHere = function() {

         $('.mouse-icon').on('click', function(event) {

             event.preventDefault();

             $('html,body').animate({
                 scrollTop: $('.go-to-here').offset().top
             }, 1000, 'easeInOutExpo');

             return false;
         });
     };
     goHere();

 })(jQuery);