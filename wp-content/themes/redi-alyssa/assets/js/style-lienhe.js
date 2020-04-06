jQuery(function($){
  // e.preventDefault();
  // e.stopPropagation();


function be_load_tphi3($class = ''){
 // $('.woocommerce-error').hide();
  $($class).attr('disabled','disabled');
  $($class).find('i').show();
}


function be_pre_load_tphi3($class = ''){
 // $('.woocommerce-error').hide();
  $($class).attr('disabled','');
  $($class).find('i').hide();
}



$(document).on('submit','#form_lhph1',function(e){
e.preventDefault();
  

   var pttt_all = $(this).serialize();

$.ajax({
          type : "post", //Phương thức truyền post hoặc get
          dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
          url : p.admin_ajax, //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
          data : {
              //action: (pttt_cod_atm == "cod") ? "func_ajax_add_data_cpt_datmuabaohiem" : "func_ajax_add_data_cpt_datmuabaohiem2" , //Tên action

              action: "phanhoi_to_cart1" , //Tên action
              
              data: pttt_all,
           
          },
          context: this,
          beforeSend: function(){
              be_load_tphi3( '.btn-submit-ph' );
          },
          success: function(response) {
              //Làm gì đó khi dữ liệu đã được xử lý
             if( response ) {
                
                  // alert( response.data );
                   
              
                    // $('.addtocart1-click-' +  data_wc_id).addClass('hidden');

                    // $('.addtocart1-added-' +  data_wc_id ).removeClass('hidden');
                    // $('.p-mes-pop1').html('');
                   if ( response.data1 ) {


  
                     setTimeout(function($){

                        document.location.href = p.link_camon ? p.link_camon : p.home_url ;

                    },2000);



                  }

               }

              
          },
          error: function( jqXHR, textStatus, errorThrown ){
              //Làm gì đó khi có lỗi xảy ra
             

    
          }

})


})






});