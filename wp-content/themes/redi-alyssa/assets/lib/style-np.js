// style.js
var App = {
    scrollHeader: function() {
        var width = jQuery(window).width();
        jQuery(window).on('resize', function() {
            width = jQuery(this).width();
        });
        if (width > 767) {
            jQuery(window).on('scroll', function() {
                var top = jQuery(this).scrollTop();
                if (top > 150) {
                    jQuery('.header').addClass('fixed');
                } else {
                    jQuery('.header').removeClass('fixed');
                }
            });
        }
    },
    owlCarousel: function() {
        var mainSlider = jQuery("#slider");
        mainSlider.owlCarousel({
            items: 1,
            dots: true,
            nav: true,
            navText: ['<span class="fa fa-angle-left"><span>', '<span class="fa fa-angle-right"><span>'],
            autoplay: true
        });
        jQuery('#propertyCarousel').owlCarousel({
            items: 1,
            dots: false,
            nav: true,
            navText: ['<span class="fa fa-angle-left"><span>', '<span class="fa fa-angle-right"><span>']
        });

        if (mainSlider.length) {
            var dotcount = 1;
            jQuery('.owl-dot').each(function() {
                jQuery(this).addClass('dotnumber' + dotcount);
                jQuery(this).attr('data-info', dotcount);
                dotcount = dotcount + 1;
            });
            // 2) ASSIGN EACH 'SLIDE' A NUMBER
            var slidecount = 1;

            jQuery('.owl-item').not('.cloned').each(function() {
                jQuery(this).addClass('slidenumber' + slidecount);
                slidecount = slidecount + 1;
            });

            // SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
            jQuery('.owl-dot').each(function() {
                var grab = jQuery(this).data('info');
                var slidegrab = jQuery('.slidenumber' + grab + ' img').attr('src');
                console.log(slidegrab);
                jQuery(this).css("background-image", "url(" + slidegrab + ")");

            });

            // THIS FINAL BIT CAN BE REMOVED AND OVERRIDEN WITH YOUR OWN CSS OR FUNCTION, I JUST HAVE IT
            // TO MAKE IT ALL NEAT 
            jQuery('.owl-dot').css("width", 40 + "px");
            jQuery('.owl-dot').css("height", 40 + "px");

            var dotsWidth = jQuery('.owl-dots').width() + 30;
            if (dotsWidth > 60) {
                jQuery('#slider .owl-nav').css('width', dotsWidth + 'px');
            }
        }
    },
    popupVideo: function() {
        jQuery('.icon-play').on('click', function() {
            var ytID = jQuery(this).data('yt'),
                    popup = jQuery('.popup-video');
            var iframe = '<iframe src="https://www.youtube.com/embed/' + ytID + '?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
            popup.find('.popup-body').html(iframe);
            popup.fadeIn();
        });
        jQuery('.popup-close').on('click', function() {
            jQuery('.popup-video').fadeOut();
            jQuery('.popup-video .popup-body').html('');
        });
    }
};
jQuery(function($) {
    // here
    App.owlCarousel();
    App.popupVideo();
    App.scrollHeader();
});

