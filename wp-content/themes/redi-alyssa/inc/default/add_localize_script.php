<?php
global $p_var; $p_var = p_var_ar();

// Ex: p_var_ar('home_url');
function p_var_ar( $key = "" , $null = "" ){
    // global blabla
    $acf_pr  = is_pvi() ? "" : "_en";


    $ar = array( 
        
        // var
        "u1" => uniqid(),
        "u2" => uniqid(),
        "u3" => uniqid(),
        "u4" => uniqid(),
        "u5" => uniqid(),

        //random
        "r1" => rand(1,100),
        "r2" => rand(1000,10000),
        "r3" => rand(100000,1000000),
        "r4" => rand(10000000,100000000),
        "r5" => rand(100000000,1000000000),


        // default
        "home_url" => home_url(),
        "admin_ajax" =>  p_admin_ajax(),
        "current_page" =>  p_current_page(),
        "slug" =>  p_slug_current_page(),
        "login" => is_user_logged_in(), // 1/""
        "https" => is_ssl(),  // 1/""
        "rtl" => is_rtl(),
        "admin_bar" => is_admin_bar_showing(),
        "link_img_null" => p_img_null(),


        // is
        "is_mobile" => wp_is_mobile(),
        "is_localhost" => is_localhost(),
        "get_locale" => get_locale(),


        // plugin
        "is_polylang" => class_exists('Polylang'),
        "is_vi" => class_exists('Polylang') ? is_pvi() : "deactive",
        "is_en" => class_exists('Polylang') ? is_pen() : "deactive",

        "is_acf" =>  class_exists('ACF'),
        "is_woocom" => class_exists( 'woocommerce' ),



        // user
        // administrator   
        // editor  
        // author 
        // contributor
        // subscriber
        // "is_role" => p_get_current_user_role(),
        // "user_login" => $current_user->user_login,
        // "display_name" => $current_user->display_name, 
        // "user_email" => $current_user->user_email,
        // "user_link_img" =>  ( function_exists('get_wp_user_avatar') ) ? p_scrapeImage(get_wp_user_avatar($current_user->user_email)) : "",
        



        // session
        //"session" => $_SESSION['cart_id_related'],


        // acf
        // key : acf_{name}

        "acf_sdt" => p_acf_o("sdt_1" . $acf_pr,""),
        "acf_sdt_tel" => p_clear_phone( p_acf_o("sdt_1" . $acf_pr,"") ),


        // link
        "acf_link_trang_search" => get_permalink( p_acf_o("link_trang_search")),



         "link_camon" => p_acf("op_link_camon" . $acf_pr ,""),

        // "link_thuvien" => p_acf("op_link_thuvien" . $acf_pr ,""),

         "link_lh" => p_acf("op_link_lh" . $acf_pr ,""),



         'link_tax_thu_vien' => is_tax() ? get_term_link( get_queried_object()->term_id , 'thu_vien' ) : "",

            
        
        // params
        "pa_active" => !empty( $_GET['active'] ) ? $_GET['active'] : "",

        'link_tax' => is_tax() ? get_term_link( get_queried_object()->term_id , get_queried_object()->taxonomy  ) : "",

            
    
    );

    if ( !empty($key) ) {
        return !empty($ar[$key]) ? $ar[$key] : $null; 
    }  else {
        return $ar; 
    }
}


function p_var($key = "", $null = "" ){
    return p_var_ar( $key , $null );
}


// echo p_var_ob()->r1;
function p_var_ob($key = "", $null = "" ){
    return (object) p_var_ar( $key , $null );
}