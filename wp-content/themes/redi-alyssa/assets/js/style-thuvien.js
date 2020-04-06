jQuery(function($){
  // e.preventDefault();
  // e.stopPropagation();


$(document).on('click','[data-tv]',function(e){
e.preventDefault();


let id = $(this).attr('data-tv');

$.ajax({
        type : "post", //Phương thức truyền post hoặc get
        dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
        url : p.admin_ajax, //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
        data : {
            //action: (pttt_cod_atm == "cod") ? "func_ajax_add_data_cpt_datmuabaohiem" : "func_ajax_add_data_cpt_datmuabaohiem2" , //Tên action

            action: "thuvien_to_cart1" , //Tên action
            
            id:id,
        },
        context: this,
        beforeSend: function(){
            //be_load_tphi3( '.btn-submit-ph' );
        },
        success: function(response) {
            //Làm gì đó khi dữ liệu đã được xử lý
           if( response ) {
              
                // alert( response.data );
                 
            
                  // $('.addtocart1-click-' +  data_wc_id).addClass('hidden');

                  // $('.addtocart1-added-' +  data_wc_id ).removeClass('hidden');
                  // $('.p-mes-pop1').html('');
                 if ( response.data1 ) {

                    $('.thuvien-gallery').html('');

                    $('.thuvien-gallery').html( response.data1 );


                    window.history.pushState("","",  p.link_tax_thu_vien + '?id=' + id      );


                }

             }

            
        },
        error: function( jqXHR, textStatus, errorThrown ){
            //Làm gì đó khi có lỗi xảy ra
           

  
        }

})


})


$(document).on('click','.btn-close-tv',function(e){

      window.history.pushState("","",  p.link_tax_thu_vien   );

})





});