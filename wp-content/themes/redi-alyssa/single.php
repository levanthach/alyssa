<?php



if (  in_array( get_post_type( get_the_ID()  ) , ['bai_viet_tin_tuc']  )  ){

	include get_template_directory()  . '/template-07_Alyssa_web_Chitiettintuc.php';
	exit;

}



include get_template_directory() . '/template-04_Alyssa_web_Chitietsanpham.php';
exit;

?>

