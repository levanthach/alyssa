<?php
if ( ! defined( 'ABSPATH' ) ) { 
	exit; 
}

ob_start();

// global $content_width;
if ( ! isset( $content_width ) ) {
   $content_width = 1170; // px
}

// inc core
require_once trailingslashit( get_template_directory() ) . 'inc/init.php';

// show admin bar
if ( is_localhost() ) {
	show_admin_bar( false );
}


add_action("admin_head","func_change_add_row_acf", -100 );
function func_change_add_row_acf(){
	?>	
	<script type="text/javascript">
		jQuery(document).ready(function($){

			if ( $('.acf-button.button.button-primary[data-event="add-row"]').html() == "Add Row" ){

				$('.acf-button.button.button-primary[data-event="add-row"]').html("Thêm dữ liệu");	

			} 


		})
	</script>

	<?php 
}

 
 


ob_get_clean();