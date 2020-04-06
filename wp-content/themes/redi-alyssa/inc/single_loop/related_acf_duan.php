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

//print_r2( $post );

$limit_post = 2;

$args_related = array(
	'post_type' => get_post_type( $post->ID ),

	'posts_per_page' => $limit_post,
	//'category__in' => $category_id,

	'post__not_in' => array( get_the_ID() ),
	'orderby' => "Date",
	'order' => 'DESC',
	'ignore_sticky_posts' => false,
	"post_status" => "publish",

	// 'tax_query' => array(
	//     array(
	//     'taxonomy' => 'recipe_tx',
	//     'field' => 'term_id',
	//     'terms' => 37
	//      )
	//  ),


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
if( have_rows( "p_rp_repeat_da" ) ) : $i = 1;
	$p_rp_repeat_post = [];
    while( have_rows( "p_rp_repeat_da" ) ): the_row();
     	$p_rp_repeat_post[] = p_acfs_pp("p_rp_repeat_da_post","");
	$i++;endwhile;
endif; 

 
//print_r2($p_rp_repeat_post);
  
?>

<?php if( !empty( $p_rp_repeat_post ) ) { ?>


<div class="project-related p-ptb-50 p991-ptb-30">
	<div class="container">
		<h3 class="heading-post text-center p-mb-30">Các dự án khác</h3>
		<div class="row">
	<?php 
	$i= 1;
	    foreach ($p_rp_repeat_post as $key => $value ) :
	    	$id = $value;
	     			
	 ?>


	<div class="col-xs-12 col-sm-6">
	<div class="v-box-no box-project box-project-related">
		<div class="photo-item" style="background: url('<?php echo p_link_img( '', false, $id )  ?>') no-repeat center/cover;padding-top: calc(100% / (560 / 252));">
			 <a href="<?php echo the_permalink( $id ) ?>"class="full-box"></a>
		</div>
		<div class="content">
			<h4 class="p-fs-24 f2-sbold p-mb-10">
				<a href="<?php echo the_permalink( $id ) ?>">
				<?php echo get_the_title($id) ?>
			</a>
					
			</h4>
			<div class="short-des f2-df p-mb-20" data-max-char="160">
				<?php echo get_the_excerpt($id); ?>
				
			</div>
			<a href="<?php echo the_permalink( $id ) ?>" class="v-btn p-up hidden-xs">Xem chi tiết</a>
			
		</div>
	</div>
</div>



<?php $i++; endforeach; ?>


		</div>
	</div>
</div>


<?php } ?>


<?php return; ?>


<div class="project-related p-ptb-50 p991-ptb-30">
	<div class="container">
		<h3 class="heading-post text-center p-mb-30">Các dự án khác</h3>
		<div class="row">
			<?php for ($i=1; $i <=2 ; $i++) { ?>
			<div class="col-xs-12 col-sm-6">
				<div class="v-box-no box-project box-project-related">
					<div class="photo-item" style="background: url('<?php echo P_IMG_NP ?>/img-duan-khac-<?php echo $i ?>.jpg') no-repeat center/cover;padding-top: calc(100% / (560 / 252));">
						<a href="#" class="full-box"></a>
					</div>
					<div class="content">
						<h4 class="p-fs-24 f2-sbold p-mb-10">Tân Lân Riverside</h4>
						<div class="short-des f2-df p-mb-20">
							TÂN LÂN RIVERSIDE tạo dựng trải nghiệm sống thượng lưu đáng tự hào cho mỗi cư dân với cụm tiện ích riêng đẳng cấp, cộng hưởng hài hòa với quần thể tiện ích toàn khu vực.
							
						</div>
						<a href="#" class="v-btn p-up">Xem chi tiết</a>
						
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>