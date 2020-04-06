<?php 
// -------------------------------------
// Add breadcrumbs
// -------------------------------------

add_action('p_after_header','p_add_breadcrumb',10);
function p_add_breadcrumb(){ 
  global $hidden_breadcrum;
  if( is_home() || $hidden_breadcrum ) return;
?>
  
  <?php 
   if ( function_exists('yoast_breadcrumb') ) { 
      ob_start();

      echo "<!-- Breadcrumb yoast seo -->";

      yoast_breadcrumb( '<span class="">','</span>');
      
      echo "<!-- End Breadcrumb yoast seo -->";

      $r = ob_get_clean();

  } 
  ?>

  <!-- Breadcrumb -->
  <div class="section-breadcrum p-ptb-10">
    <div class="container-fluid">
      <?php echo ($r ) ? $r :  p_breadcrumb(); ?>
    </div>
  </div>
  <!-- End Breadcrumb -->
  



<?php }


