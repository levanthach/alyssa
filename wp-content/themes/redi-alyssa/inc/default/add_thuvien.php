<?php 

// --------------------------------------
// thu vien
// -------------------------------------
add_action('wp_ajax_thuvien_to_cart1', 'func_a_thuvien_to_cart1');
add_action('wp_ajax_nopriv_thuvien_to_cart1', 'func_a_thuvien_to_cart1');


function func_a_thuvien_to_cart1() {
    
    if ( !$_POST ) return;

    $id = trim( $_POST['id'] );


    ob_start();
    p_block_ga1( $id ) ; 

    $d = Minify_Html ( ob_get_clean() );



     $r = array(

        'data1' => $d ,
    
    );


    wp_send_json(  $r );


    
    die();


}


