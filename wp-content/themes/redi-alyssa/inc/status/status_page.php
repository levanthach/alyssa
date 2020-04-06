<?php
add_filter('display_post_states', 'ptheme_wpsites_custom_post_states', 10, 2);

function ptheme_wpsites_custom_post_states($states) { 
    global $post; 

  	if (  'page' == get_post_type( $post->ID ) || 'post' ==  get_post_type( $post->ID ) )  {

  		switch (get_page_template_slug( $post->ID )) {

  			case "template-02_Alyssa_web_gioithieu.php";
  			$states[] = "Trang Giới thiệu";
  			break;

        case "template-03_Alyssa_web_Lanhodiep.php";
        $states[] = "Trang Sản phẩm";
        break;

        case "template-04_Alyssa_web_Chitietsanpham.php";
        $states[] = "Trang chi tiết Sản phẩm";
        break;

        case "template-05_Alyssa_web_Uudai.php";
        $states[] = "Trang Ưu đãi";
        break;

        case "template-06_Alyssa_web_Tintuc.php";
        $states[] = "Trang Tin tức";
        break;
          case "template-07_Alyssa_web_Chitiettintuc.php";
        $states[] = "Trang Ưu đãi";
        break;
      
        case "template-08_Alyssa_web_lienhe.php";
        $states[] = "Trang Liên hệ";
        break;

  		}

    } 



    if (  'phanhoi' == get_post_type( $post->ID )  )  {

      global $wp_query;

      $categories = get_the_terms( $post->ID, 'cate_phanhoi' );

      if (   $categories  ) {
      foreach ( $categories as $categorie ){
        $cat_name = $categorie->name;
        $cat_id = $categorie->term_id;
      } 

      $cat_obj = $wp_query->get_queried_object();

      $cat_id_col =  get_field( 'cat_col' , $cat_obj->taxonomy.'_'.  $cat_id  );

      $states[] = "<span style='color:".$cat_id_col."'>" . $cat_name   . "</span>" ;

      }
    } 


    return $states;
    
} 

