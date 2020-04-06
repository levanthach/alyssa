<?php 
// ----------------------------------------
//show total posts in page search
// -----------------------------------------

add_filter('pre_get_posts', 'p_total_post_size'); 
function p_total_post_size($query) {
    if ( $query->is_search ) {
        $query->query_vars['posts_per_page'] = 10; 
    } 

     if ( $query->is_category ) {
      // $term = get_queried_object();
      // $template_category = get_field('template_category', $term) ? get_field('template_category', $term) : "t1";


      //  if ( $template_category != "t2" ){
      //       $query->query_vars['posts_per_page'] = 10; 
      //  } else {
      //     $query->query_vars['posts_per_page'] = 20; 
      //  }


       //if ( $_GET ) {

         $query->query_vars['posts_per_page'] = 16; 

     // } else {

       //  $query->query_vars['posts_per_page'] = -1; 

      // }

      
    } 

    if( $query->is_tax == "danh_muc" ) {

        $term = get_queried_object();
        $template_category = get_field('cat_tem_t1', $term) ? get_field('cat_tem_t1', $term) : "t1";


       if ( $template_category != "t1" ){
            $query->query_vars['posts_per_page'] = 9; 
       } else {
          $query->query_vars['posts_per_page'] = 12; 
       }

       //$query->query_vars['posts_per_page'] = 12;


    }

  



    // if( $query->is_tax == "cate_nhadatban" ) {

    //   if( is_home() ){

    //      $query->query_vars['posts_per_page'] = 16;

    //   } else {

    //      $query->query_vars['posts_per_page'] = 13;

    //   }
    // }


    // if ( $query->is_author ){
    //    $query->query_vars['posts_per_page'] = 10; 
    // }



    return $query; 
}



function p_searchfilter($query) {
   if ( is_admin() || ! $query->is_main_query() )
   return;
 
   if ($query->is_search) {
      $query->set('post_type', 'post');
   }
   return $query;
}
 
add_filter('pre_get_posts','p_searchfilter');