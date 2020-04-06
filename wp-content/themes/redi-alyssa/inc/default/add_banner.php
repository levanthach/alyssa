<?php 
// -------------------------------------
// Add banner
// -------------------------------------

//add_action('p_after_header','p_add_banner',1);
function p_add_banner(){
  global $hidden_banner;

  if( is_home() || $hidden_banner  ) return;


  $banner = p_acf_o("banner_post");

  if ( is_singular() ) { 
    if ( get_field("banner_post2") ) {
  	 $banner = get_field("banner_post2");
    }


  } else if ( is_category()  ||  is_tag() || is_tax() ) {	

  	 global $wp_query;
  	$term = get_queried_object();

     if ( get_field("banner_post2", $term) ) {
      	$banner = get_field("banner_post2", $term);
    }
  }


  ?>

  <div class="sc-banner-theme">

   <!--  <div style="background:url(<?php echo $banner ?>) no-repeat center/cover;padding-top:20%;">

    </div> -->
    <img src="<?php echo $banner ?>" class="p-w-100pt">

  </div>

  <?php
}


function p_add_banner2(){

 // global $hidden_banner;

  if( is_home()  ) return;


  $banner = p_acf_o("banner_post");

  if ( is_singular() ) { 
    if ( get_field("banner_post2") ) {
     $banner = get_field("banner_post2");
    }


  } else if ( is_category()  ||  is_tag() || is_tax() ) { 

     global $wp_query;
    $term = get_queried_object();

     if ( get_field("banner_post2", $term) ) {
        $banner = get_field("banner_post2", $term);
    }
  }


  ?>


  <img src="<?php echo $banner ?>" class="img-responsive" />



  <?php
}

