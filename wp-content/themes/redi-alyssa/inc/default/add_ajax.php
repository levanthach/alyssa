<?php
add_action( 'wp_ajax_demo1', 'p_func_ajax_demo1' );
add_action( 'wp_ajax_nopriv_demo1', 'p_func_ajax_demo1' );

function p_func_ajax_demo1() {
 	ob_start();

 	// if ( !$_POST ) return;

 	// $id = $_POST['id'];

 	echo "Hello World";

 	wp_send_json_success(ob_get_clean());
    die();
}








add_action( 'wp_ajax_filter_home_1', 'p_func_ajax_filter_home_1' );
add_action( 'wp_ajax_nopriv_filter_home_1', 'p_func_ajax_filter_home_1' );

function p_func_ajax_filter_home_1() {
 	ob_start();

 	if ( !$_POST ) return;

 	$value = $_POST['value'];

  $type = $_POST['type'];

  $type = str_replace( 't', '', $type );

  $num = $_POST['num'];

  $num1 = $_POST['num1'];

  $num2 = $_POST['num2'];

 	p_index_load_data_query1(  $type , $num , $num1, $num2   );	


 	wp_send_json_success(ob_get_clean());
    die();
}


add_action( 'wp_ajax_filter_home_2', 'p_func_ajax_filter_home_2' );
add_action( 'wp_ajax_nopriv_filter_home_2', 'p_func_ajax_filter_home_2' );

function p_func_ajax_filter_home_2() {
 	//ob_start();

 	if ( !$_POST ) return;

 	$max = trim($_POST['max']);
 	$min = trim($_POST['min']);

  $cat_id = trim($_POST['cat_id']);
 	
  
 	$ar_id_filters = p_data_query2( array(
		'min' => $min,
    'max' => $max,
 	),  $cat_id   );

 	//print_r22(  $ar_id_filters );
 	//exit;

 	ob_start();


 	?>

 	<?php if ( 	$ar_id_filters ) : 
   // echo "count: " . count($ar_id_filters);
    ?>

 		<?php foreach( $ar_id_filters as $ar_id_filter  ) {
 				// echo "<br/>";
     //    echo $ar_id_filter;
     //    echo "<Br/>";


 		
 		?> 

	 	    <div class="col-md-3 col-sm-4 col-xs-6 item">

	           <?php 
	            echo p_index_load_data1(array(
	                    'id' => $ar_id_filter,

	                 ));
	            ?>

	        </div>

      <?php } ?>

    <?php endif; ?>
 

 	<?php 

 	//$html = ob_get_clean() ;

 	$html = p_Minify_Html( ob_get_clean() );

	 

 	$pagination = "a";

 	$return = array(

        'html'  => $html,
        'pagination' => $pagination,

     );

    wp_send_json( $return );

 	// wp_send_json_success(ob_get_clean());
    die();
}










add_action( 'wp_ajax_add_ss2', 'func_ajax_add_ss2' );

add_action( 'wp_ajax_nopriv_add_ss2', 'func_ajax_add_ss2' );



function func_ajax_add_ss2() {


  if ( !$_POST ) return;


  $data = trim( $_POST['data'] );

  $id_img = trim( $_POST['id_img'] );

  $price = trim( $_POST['price'] );


  $pttt = array();

  parse_str($data, $pttt);




  $p_dmbh_nh_repeat2  = array(

    "Họ tên",

    "Số điện thoại",

    "Email",

    "Địa chỉ nhận hàng",

    "Ghi chú",

    "Tên sản phẩm",
    
    "Số lượng",

    "Tổng tiền",

   );


  $pttt['price'] = $price;


   $p_dmbh_nh_repeat = [];



   $key_speed = 0;

    foreach( $pttt as $pttts ){



         $p_dmbh_nh_repeat[] = [    



            "p_datmua1_repeat_title"  => $p_dmbh_nh_repeat2[$key_speed] ,



            "p_datmua1_repeat_des"  => $pttts ,



         ];



         $key_speed++;



    } 





   $name = !empty( $pttt['form_dktv3-your-name'] ) ? $pttt['form_dktv3-your-name'] : "";  
   $phone = !empty( $pttt['form_dktv3-your-phone'] ) ? $pttt['form_dktv3-your-phone'] : "";  



   $post_title = "Khách hàng: " . $name . ' - Phone: ' . $phone .  ' - Tổng tiền:  ' .  $price . ' - Date:  ' . date('H:i:s d/m/Y');





   $post_name = p_clear_slug( $post_title );



    $appointment_insert = array(

    'post_type' => 'datmua',

    'post_title' => $post_title ,

    'post_name' =>  $post_name  ,

    'post_status' => 'publish',

    'post_author' => 1,

      

     'post_content' => '',

     // 'post_category' => array( is_localhost() ? 79 : 79  )  ,

    );




    $appointment_id = wp_insert_post($appointment_insert);



     if(  $appointment_id){



        update_field( 'p_datmua1_repeat' ,  $p_dmbh_nh_repeat , $appointment_id  );

            update_field( 'p_datmua1_img' ,  $id_img , $appointment_id  );

     }





    ob_start();



    echo '1';





    wp_send_json_success(ob_get_clean());

    

    die();//bắt buộc phải có khi kết thúc/



}



