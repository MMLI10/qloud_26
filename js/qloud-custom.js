
(function (jQuery) {
    "use strict";
    //WINDOW LOAD
    jQuery(window).on('load', function (e) {

        jQuery('ul.page-numbers').addClass('justify-content-center');

        //LOADER
        /*------------------------
        Page Loader
        --------------------------*/
        jQuery("#load").fadeOut();
        jQuery("#loading").delay(0).fadeOut("slow");
        // HEADER
        function headerHeight() {
            var height = jQuery(".header").height();
            jQuery('.iq-height').css('height', height + 'px');
        }

        jQuery(function () {
            var header = jQuery(".header.has-sticky"),
                yOffset = 0,
                triggerPoint = 80;
            headerHeight();

            jQuery(window).resize(headerHeight);
            jQuery(window).on('scroll', function () {

                yOffset = jQuery(window).scrollTop();

                if (yOffset >= triggerPoint) {
                    header.addClass("menu-sticky animated slideInDown");
                } else {
                    header.removeClass("menu-sticky animated slideInDown");
                }
            });
        });

        if (jQuery('header').hasClass('has-sticky')) {
            jQuery(window).on('scroll', function () {

                var height = jQuery('.navbar').outerHeight();
                if (jQuery(this).scrollTop() > height) {
                    jQuery('.has-sticky .logo').addClass('logo-display');
                } else if (jQuery(this).scrollTop() <= height) {
                    jQuery('.has-sticky .logo').removeClass('logo-display');
                }
            });
        }

        jQuery('.sub-menu').css('display', 'none');
        jQuery('.sub-menu').prev().addClass('isubmenu');
        jQuery(".sub-menu").before('<i class="fa fa-angle-down toggledrop" aria-hidden="true"></i>');


        jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function () {
            jQuery(this).next('.children, .sub-menu').slideToggle();
        });

        jQuery("#top-menu .menu-item .toggledrop").off("click");
        if (jQuery(window).width() < 992) {
            jQuery('#top-menu .menu-item .toggledrop').on('click', function (e) {
                e.preventDefault();
                jQuery(this).next('.children, .sub-menu').slideToggle();
            });
        }
        /*------------------------
            Tabs
            --------------------------*/
        jQuery(window).on('scroll', function (e) {
            var nav = jQuery('#features');
            if (nav.length) {
                var contentNav = nav.offset().top - window.outerHeight;
                if (jQuery(window).scrollTop() >= (contentNav)) {
                    e.preventDefault();
                    jQuery('#features .row li a').removeClass('active');
                    jQuery('#features .row li a[aria-selected=true]').addClass('active');
                }
            }
        });
        /*------------------------
       Back To Top
       --------------------------*/
        jQuery('#back-to-top').fadeOut();
        jQuery(window).on("scroll", function () {
            if (jQuery(this).scrollTop() > 250) {
                jQuery('#back-to-top').fadeIn(1400);
            } else {
                jQuery('#back-to-top').fadeOut(400);
            }
        });

        // scroll body to 0px on click
        jQuery('#top').on('click', function () {
            jQuery('top').tooltip('hide');
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        /*------------------------
        Wow Animation
        --------------------------*/
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();
        /*------------------------
        Magnific Popup
        --------------------------*/
        jQuery('.popup-gallery').magnificPopup({
            delegate: 'a.popup-img',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });

        jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false
        });
    });
})(jQuery);