<?php
// df
$p_rp_repeat_post = [];

// ----------------------------
// post
// ----------------------------

global $post;
$categories = get_the_category( get_the_ID() );
foreach($categories as $individual_category){
  $category_id[]= $individual_category->term_id;
};  

$limit_post = 5;

$args_related = array(
	'post_type' => get_post_type( get_the_ID() ),
	'posts_per_page' => $limit_post,
	'category__in' => $category_id,
	'post__not_in' => array( get_the_ID() ),
	'orderby' => "Date",
	'order' => 'DESC',
	'ignore_sticky_posts' => false,
	"post_status" => "publish"
);

$the_query = new WP_Query( $args_related );
$total = $the_query->found_posts;


if ( $the_query->have_posts() && $total > 0 ) :
  	 	$i = 1;
	while ( $the_query->have_posts() ) : $the_query->the_post(); 	
			if ( $i > $limit_post ) break;

			$p_rp_repeat_post[] = get_the_ID();

$i++; endwhile;
endif;
wp_reset_postdata();
wp_reset_query();  

//print_r2($p_rp_repeat_post);
  
// ----------------------------
// ACF
// ----------------------------

$key_acf = "p_rp_repeat2";



if( have_rows( $key_acf  ) ) : $i = 1;
	$p_rp_repeat_post = [];
    while( have_rows( $key_acf  ) ): the_row();
     	$p_rp_repeat_post[] = p_acfs_pp( $key_acf .  "_post","");
	$i++;endwhile;
endif; 

 
//print_r2($p_rp_repeat_post);
  
?>

<?php if( !empty( $p_rp_repeat_post ) ) { ?>


<div class="product-related">
	<h2>Các loại hoa tương tự</h2>

	<div class="lst-products row">

	<?php 
	$i= 1;
	    foreach ($p_rp_repeat_post as $key => $value ) :
	    	$id = $value;
	     			
	 ?>
	 
	<div class="col-md-3 col-sm-4 col-xs-6 item">                  
	  	
	  		 <?php 
            echo p_index_load_data1(array(
                    'id' =>$id,

                 ));
            ?>
	       
	</div>

<?php $i++; endforeach; ?>


	</div>
</div>


<?php } ?>
