jQuery(function($) {


function form_sub_acc_pre(){
   $('.div-input-email-submit-sendamil-submit-i').attr('disabled',true);
   $('#btn-new-user-spin').show();
   $('#btn-new-user-plane').hide();
}

function form_sub_acc_aft(){
   $('.div-input-email-submit-sendamil-submit-i').removeAttr('disabled');
   $('#btn-new-user-spin').hide();
   $('#btn-new-user-plane').show();
}



$( "#form_sub_acc" ).submit(function(e) {
  e.preventDefault();


  var email = $('#email_nhantintuc').val();


   $.ajax({
      type : "post", //Phương thức truyền post hoặc get
      dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
      url : p.admin_ajax, //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
      data : {
          action: "nhantintuc", //Tên action
          email: email,
      },
      context: this,
      beforeSend: function(){
        form_sub_acc_pre();

      },
      success: function(response) {
          var kq = response.data;

          if ( kq == "1" ){

              form_sub_acc_aft();

              $('.box-complete-overlay').addClass('active'); 
              $('.box-complete').addClass('show');

              $('.box-complete-title').html('Đăng ký email thành công');

              $('.box-complete-link').show();



          }else if( kq == "same" ) {
             form_sub_acc_aft();
            same_email_send();

          }

 
      },

  });

});


$('.box-complete-overlay-close').click(function(e){
  e.preventDefault();


  $('.box-complete-overlay').removeClass('active');

  $('.box-complete').removeClass('show');

})



function same_email_send(){

    $('.box-complete-overlay').addClass('active'); 
    $('.box-complete').addClass('show');

    $('.box-complete-icon').html('<i class="fa fa-check-circle-o p-fs-100" aria-hidden="true"></i>');
    
    $('.box-complete-title').html("Email này đã đăng ký rồi !");
    

    $('.box-complete-link').hide();

    $('.box-complete').addClass('show'); 

}


})