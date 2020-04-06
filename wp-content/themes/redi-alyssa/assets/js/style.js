jQuery(function($){
  // e.preventDefault();
  // e.stopPropagation();

	// Show ...
	var is_IE = /(MSIE|Trident\/|Edge\/)/i.test(navigator.userAgent); // IE
	var is_FF=navigator.userAgent.toLowerCase().indexOf('firefox') > -1; // FIrefox

	// Fixed IE: 
	// if(is_IE){
	// 	alert('Bạn nên dùng trình duyệt Google Chrome để trải nghiệm tốt nhất !');

	// }

  // Is mobile
  // if ( ptheme.is_mobile ){
    
  // }

// ----------------------------
// Demo ajax
// <div class="" data-ajax-hello>click</div>
// ----------------------------
$('[data-ajax-hello]').on('click', function(e){
  e.preventDefault();
  var tag = $(this);

  $.ajax({
      type: 'POST',
      dataType: 'json',
      url: p.admin_ajax,
      data: { 
          action: 'demo1',

      },
      context: this,
      beforeSend: function(){
         
      },
      success: function(result){
          if ( result.data ){
              tag.html( result.data );
          }
      },
      error: function( jqXHR, textStatus, errorThrown ){
          alert('Error! Đã có lỗi xảy ra');
      }

  });
  
});


// ----------------------------
// menu mobile
// ----------------------------

// click icon bar - on/off
$('.fa-bars-fixed').click(function(e){
  e.preventDefault();

  if ( !$(this).hasClass('fa-close') ){

    $(this).removeClass('fa-bars').addClass('fa-close');

    $('body').css('overflow-y','hidden');

    $('.sumon-overlay').addClass('active');

    $('.sc-menu-sumon-fixed').addClass('active');

  } else {

    $(this).removeClass('fa-close').addClass('fa-bars');

    $('body').css('overflow-y','auto');

     $('.sumon-overlay').removeClass('active');

     $('.sc-menu-sumon-fixed').removeClass('active');

  }

})

// click show child menu
$('.fa-click-child-menu-mobile').click(function(e){
  e.preventDefault();

  if (  !$(this).siblings('ul').hasClass('active') ){
      $(this).siblings('ul').addClass('active');

      $(this).addClass('active');
  } else {
     $(this).siblings('ul').removeClass('active');

    $(this).removeClass('active');
  }
});

// click sumon overlay remove
$('.sumon-overlay').click(function(){
   $(this).removeClass('active'); 
  $('.fa-bars-fixed').removeClass('fa-close').addClass('fa-bars');

  
    $('body').css('overflow-y','auto');
  $('.sc-menu-sumon-fixed').removeClass('active');

})


$(window).on('resize',function() {
   if( $('body').width() > 991  ){ 
      $('.sumon-overlay').click();
   }
});



$('.sc-menu-fixed-maxheight').matchHeight(false);

$('.property-content-h4-maxheight').matchHeight(false);





// --------------------------------------------------
//
// --------------------------------------------------


// $('.btn-filter-price1').click(function(){
//   var $this = $('.btn-filter-price1');
//     $(this).find('i').show();
//     $(this).attr('disabled', 'disabled');
//     $(this).css('opacity','0.5');

//     setTimeout(function(){
//        $this.find('i').hide();
//        $('.file1').addClass('hidden');
//        $('.file2').removeClass('hidden');
//        $this.removeAttr('disabled');
        
//        $this.css('opacity','1');

//     },2000);
   
// })


// $('.se-filter1').change(function(){
//   // var $this = $('.btn-filter-price1');
//   //   $(this).find('i').show();
//   //   $(this).attr('disabled', 'disabled');
//   //   $(this).css('opacity','0.5');

//     setTimeout(function(){
//        // $this.find('i').hide();
//        $('.file1').addClass('hidden');
//        $('.file2').removeClass('hidden');
//        // $this.removeAttr('disabled');
        
//        // $this.css('opacity','1');

//     },1000);
   
// })




// $('.show-pp1').click(function(){

//     $('.sc-popup-wrap').addClass('active');

// })

  // used ".click-show-sc-popup-wrap" show popup
$('.click-show-sc-popup-wrap').click(function(e){
  e.preventDefault();

  if ( !$('.sc-popup-wrap.sc-popup-wrap-show2').hasClass('active') ){
      $('.sc-popup-wrap.sc-popup-wrap-show2').addClass('active');

      var val = $('.val-number-sl1').val();



      if (  val  <= 0 ) {
        val = 1;
      }
      


      $('.number-change-cart-item').val( val );
        

        var price = $('.number-change-cart-item-value-one').html();

        var price_all =  eval(val) * eval( price );

     // console.log("val: " +val + " " + "price: "  + price + " " + "price_all: " + price_all  );


     // $('.number-change-cart-item-value').html('');

      $('.number-change-cart-item-value').html( p_number_format_html(  price_all )  ); 

  }



})


$('.sc-popup-wrap,.sc-popup-close *').click(function(){
    $('.sc-popup-wrap').removeClass('active');
})

// $('.sc-popup-close img').click(function(){
//     $(this).trigger('.sc-popup-wrap');
//     $('.sc-popup-wrap').removeClass('active');
// })


 $('.sc-popup-wrap *').click(function(event){
   event.stopPropagation();
 })





$('.se-filter1').on('change', function(e){
  e.preventDefault();
  var value = $(this).val();

  //alert('abc:' + value );

  var link_se = $(this).find('option:selected').attr('data-link');

  var type = $(this).find('option:selected').attr('data-op_tt_kg_repeat_ss');

  var data_op_tt_kg_repeat_ss_num = $(this).find('option:selected').attr('data-op_tt_kg_repeat_ss_num');
  var data_op_tt_kg_repeat_ss_num1 = $(this).find('option:selected').attr('data-op_tt_kg_repeat_ss_num1');
  var data_op_tt_kg_repeat_ss_num2 = $(this).find('option:selected').attr('data-op_tt_kg_repeat_ss_num2');



  $.ajax({
      type: 'POST',
      dataType: 'json',
      url: p.admin_ajax,
      data: { 
          action: 'filter_home_1',
          value: value,
          type: type,
          num: data_op_tt_kg_repeat_ss_num,
          num1: data_op_tt_kg_repeat_ss_num1,
          num2: data_op_tt_kg_repeat_ss_num2,
      },
      context: this,
      beforeSend: function(){

          $('.main-header-h2').find('i').show();

      },
      success: function(result){


          if ( result.data ){
             $('.main-header-h2').find('i').hide();

              $('.lst-products-home1').html( result.data );

              $('.viewall-se').find('a').attr('href', link_se );
          }



      },
      error: function( jqXHR, textStatus, errorThrown ){
          alert('Error! Đã có lỗi xảy ra');
      }

  });
  
});







$('.btn-filter-price1').on('click', function(e){
  e.preventDefault();

   let $this = $('.btn-filter-price1');



  var min = $('#minPrice').val();
  var max = $('#maxPrice').val();  

  var link_page = $('.hidden-link-tax').html();
  var cat_id = $('.hidden-link-tax-id').html();


  $.ajax({
      type: 'POST',
      dataType: 'json',
      url: p.admin_ajax,
      data: { 
          action: 'filter_home_2',
          max: max,
          min: min,
          cat_id : cat_id,
      },
      context: this,
      beforeSend: function(){

          $this.find('i').show();
          $this.attr('disabled', 'disabled');
          $this.css('opacity','0.5');

      },
      success: function(result){


          if ( result ){

            $this.find('i').hide();
            $this.removeAttr('disabled');
            $this.css('opacity','1');

          
           // $('.lst-products-home1').remove();
            $('.lst-products-home1').html( result.html );
             $('.lst-products-home1').removeClass('hidden');

            
           // $('.pagination-1').html( result.pagination  );

           $('.pagination-1').html( ''  );


             window.history.pushState("","", link_page + '?min=' + min + '&max=' + max   );

          }



      },
      error: function( jqXHR, textStatus, errorThrown ){
          alert('Error! Đã có lỗi xảy ra');
      }

  });
  
});















 
function number_remove($number = "" ) {
 $number = $number.trim();

 $number = $number.replace(/đ|Đ|Vnd|VNĐ|VND|vnd|vnđ/gi, " ");
 $number = $number.split(".").join("");
  $number = $number.split(",").join("");

    return $number;
}



$(document).on('change','.number-change-cart-item',function(e){
    var val = $(this).val();

    if (  val  <= 0 ) {
      val = 1;
        $(this).val( val );
    }

    //alert( "val: " + val );

    $('.val-number-sl1').val( val );

    var price = $('.number-change-cart-item-value-one').html();

    var price_all =  eval(val) * eval( price );

   // console.log("val: " +val + " " + "price: "  + price + " " + "price_all: " + price_all  );


   // $('.number-change-cart-item-value').html('');

    $('.number-change-cart-item-value').html( p_number_format_html(  price_all )  ); 

})


$(document).on('change','.val-number-sl1',function(e){
    var val = $(this).val();

    //alert('val:' + val );

    if (  val  <= 0 ) {
      val = 1;
       $(this).val( val );
    }


});




function show_load_btn_sub($class = ''){
  $($class).attr('disabled','disabled');
     $($class).css('opacity','0.5');
  $($class).find('i').show();
}

function hide_load_btn_sub($class = ''){
  $($class).removeAttr('disabled');
   $($class).css('opacity','1');
  $($class).find('i').hide();
}




$(document).on('submit','#form_dktv4',function(e){
    e.preventDefault();

    let class_mess = '.p-mes';
    let class_btn = ".form-submit-button-3";

    var pttt_all = $(this).serialize();
    
    var id_img = $('.form_dktv3-img').val();

    var price = $('.number-change-cart-item-value').html();

    $.ajax({
              type : "post", 
              dataType : "json", 
              url : p.admin_ajax,
              data : {
                 
                  action: "add_ss2" , 
                  data:pttt_all,
                  id_img: id_img,
                  price:price ? price : "Liên hệ"  ,
              },
              context: this,
              beforeSend: function(){
                show_load_btn_sub( class_btn );
              },
              success: function(response) {
                  //Làm gì đó khi dữ liệu đã được xử lý
                    
                   if( response.data ) {
                      
                      if ( response.data == "error-?" ) {



                      } 
                      else  {
   
                       document.location.href = p.link_camon || p.home_url;
                                           

                      }
                    
                    

                  }

                  else {
                  
                  

                
                  }




              },
              error: function( jqXHR, textStatus, errorThrown ){
               
                 alert("Error");


              }
    })

})














});