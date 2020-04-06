<?php 

// --------------------------------------
// pphanhoi_to_cart1
// -------------------------------------
add_action('wp_ajax_phanhoi_to_cart1', 'func_a_phanhoi_to_cart1');
add_action('wp_ajax_nopriv_phanhoi_to_cart1', 'func_a_phanhoi_to_cart1');


function func_a_phanhoi_to_cart1() {
    
    if ( !$_POST ) return;

    $data = trim( $_POST['data'] );

    $pttt = array();
    parse_str($data, $pttt);

    $name = trim($pttt['p_lhph1_name']);
    $email = trim($pttt['p_lhph1_email']);
    $phone = trim($pttt['p_lhph1_phone']);

   // $add = trim($pttt['p_dsp_add']);

    $donvi = trim($pttt['p_lhph1_donvi']);
    $yeucau = trim($pttt['p_lhph1_yc']);
    $chitiet = trim($pttt['p_lhph1_detail']);


    // wp_send_json('1');
    // die();

    $post_title = "Phản hồi: " .  $name  . ' - '  .  $email . ' - ' . $phone ;
    $post_name = p_clear_slug( $post_title );

    $appointment_insert = array(
      'post_name' =>  $post_name  ,
      'post_title' => $post_title ,
      'post_status' => 'publish',
      'post_author' => 1,
      'post_type' => 'phanhoi',
      'post_content' => '',
     // 'post_category' => array( is_localhost() ? 79 : 79  )  ,
    );

    $appointment_id = wp_insert_post($appointment_insert);



    if ( $appointment_id   ) {

        //wp_set_post_terms( $appointment_id ,  array( is_localhost() ? 234 : 274   ) , "cate_datsp" );

   

        update_post_meta( $appointment_id, 'p_lhph1_name', $name );
        update_post_meta( $appointment_id, 'p_lhph1_email', $email );
        update_post_meta( $appointment_id, 'p_lhph1_phone', $phone );

    	update_post_meta( $appointment_id, 'p_lhph1_donvi', $donvi  );
        update_post_meta( $appointment_id, 'p_lhph1_yc', $yeucau );
        update_post_meta( $appointment_id, 'p_lhph1_detail', $chitiet );    
      

      $subject = t_pll("Cảm ơn bạn đã liên hệ với chúng tôi !","You have successfully ordered !");


       

         $message = "Nội dung thông tin bạn đã liên hệ: !\n" .
            "Họ tên: " . $name .  "\n" .
          "Email: " . $email .  "\n" .
          "Phone: " . $phone .  "\n" .
          "Đơn vị: " . $donvi .  "\n" .
          "Yêu cầu: " . $yeucau .  "\n" .
          "Chi tiết: " . $chitiet .  "\n";
     
      wp_mail( $email,  $subject, $message );


    } // end $appointment_id


     $r = array(

        'data1' => '1' ,
    
    );


    wp_send_json(  $r );


    
    die();


}


