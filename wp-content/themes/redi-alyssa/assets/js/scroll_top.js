// -------- Sroll + icon scroll top -------------

jQuery(function($){

  // Clear: class clear-> clear scroll
  // #respond: Clear click comment Reply
  // [href*=#]:not([href=#]):not([href*="#clear"]):not([href*="#respond"])


  $('.scroll:not(.clear)').on('click', function(e) {
    e.preventDefault(); 
    var time = $(this).data('p-scroll-time') ? $(this).data('p-scroll-time') : 900; // time
    var offset = $(this).data('p-scroll-offset') ? $(this).data('p-scroll-offset')  : 0; // offset
    var has_hash = $(this).data('p-scroll-hash') ? $(this).data('p-scroll-hash') : 'no';
    var hash = $(this).attr('href'); // hash

    $('html, body').animate({
      scrollTop: $(this.hash).offset().top + offset
    }, time, function(){
       if ( has_hash == "yes" || has_hash != "no" ) {
          window.location.hash = hash ;
       }
    });

  });

  // hide/apperance icon scroll
  $(window).on('scroll load resize',function() {
     $("#icon-scroll-top").each(function(){
          if( $(window).scrollTop() < 1 ){      
            $(this).removeClass('active'); 
          } else {
            $(this).addClass('active');
          }
      });
  });


   // var width = $(window).width();
   //    $(window).on('resize', function() {
   //        width = $(this).width();
   //    });
   //    if (width > 767) {
   //        $(window).on('scroll', function() {
   //            var top = $(this).scrollTop();
   //            if (top > 150) {
   //                $('.header').addClass('fixed');
   //            } else {
   //                $('.header').removeClass('fixed');
   //            }
   //        });
   //    }


})

