<?php
	
$current_term = get_queried_object();
//print_r22( $current_term  );

$current_term_id = $current_term->term_id;
 $current_term_taxonomy = $current_term->taxonomy;

$current_term_parent = $current_term->parent;


	// if ( $current_term_id  === 14  ) {

	// 	include get_template_directory() . '/template-05_Alyssa_web_Uudai.php';
 //    	exit;
	// }

	

if (  in_array( $current_term_taxonomy , ['danh_muc']  )  ) {

   $template_category = get_field('cat_tem_t1', $current_term ) ? get_field('cat_tem_t1', $current_term ) : "t1";

   //echo $template_category;



   if ( $template_category != "t2" ){

       include get_template_directory() . '/template-06_Alyssa_web_Tintuc.php';
		exit;

   } else {
   		include get_template_directory() . '/template-05_Alyssa_web_Uudai.php';
    	exit;

   }

	

} 
else {

	include get_template_directory() . '/template-06_Alyssa_web_Tintuc.php';
	exit;

}
 





?>