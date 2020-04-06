// style.js
var App = {
    scrollHeader: function() {
        var width = jQuery(window).width();
        jQuery(window).on('resize', function() {
            width = jQuery(this).width();
        });
        if (width < 767) {
            jQuery(window).on('scroll', function() {
                var top = jQuery(this).scrollTop();
                if (top > 100) {
                    jQuery('.header').addClass('fixed');
                } else {
                    jQuery('.header').removeClass('fixed');
                }
            });
        }
    },
    owlCarousel: function() {
        jQuery("#slider").owlCarousel({
            items: 1,
            dots: true,
            nav: false,
            autoplay: true
        });
        jQuery("#testimonial").owlCarousel({
            items: 1,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                600: {
                    items: 1
                },
                768: {
                    items: 2
                }
            }
        });
        jQuery(".widget .lst-tes").owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            autoplay: true
        });
        jQuery('#products').owlCarousel({
            dots: false,
            nav: true,
            margin: 20,
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1024: {
                    items: 4
                }
            }
        });

        var sync1 = jQuery("#sync1");
        var sync2 = jQuery("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);

        sync2.on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        }).owlCarousel({
            dots: false,
            nav: true,
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            smartSpeed: 200,
            slideSpeed: 500,
            margin: 10,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: slidesPerPage
                },
                768: {
                    items: 3
                },
                1100: {
                    items: slidesPerPage
                }
            }
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;
            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);
            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block
            sync2.find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = jQuery(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    },
    rangeSlider: function() {
        
        // var range = jQuery("#slider-range");
        // if (range.length) {
        //     range.slider({
        //         range: true,
        //         min: 1000,
        //         max: 50000,
        //         values: [75, 500],
        //         step:1000,
        //         slide: function(event, ui) {
        //             jQuery("#minPrice").val(ui.values[0]);
        //             jQuery("#maxPrice").val(ui.values[1]);
        //         }
        //     });
        //     jQuery("#minPrice").val(jQuery("#slider-range").slider("values", 0));
        //     jQuery("#maxPrice").val(jQuery("#slider-range").slider("values", 1));
        // }
    }
};
jQuery(function($) {
    // here
    App.scrollHeader();
    App.owlCarousel();
    App.rangeSlider();
});

