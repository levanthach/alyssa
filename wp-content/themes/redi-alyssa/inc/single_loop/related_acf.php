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

$limit_post = 3;

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

$key_acf = "p_rp_repeat";

if ( get_post_type( get_the_ID() ) == "nhadatban" ){
	$key_acf = "p_rp_nhadatban_repeat";
}


if( have_rows( $key_acf  ) ) : $i = 1;
	$p_rp_repeat_post = [];
    while( have_rows( $key_acf  ) ): the_row();
     	$p_rp_repeat_post[] = p_acfs_pp( $key_acf .  "_post","");
	$i++;endwhile;
endif; 

 
//print_r2($p_rp_repeat_post);
  
?>

<?php if( !empty( $p_rp_repeat_post ) ) { ?>

<div class="post-related p-mt-40 p991-mt-20">
<h2 class="heading-related f2-sbold p-mb-20">Bài viết liên quan</h2>
<div class="row">

	<?php 
	$i= 1;
	    foreach ($p_rp_repeat_post as $key => $value ) :
	    	$id = $value;
	     			
	 ?>
	 
	<div class="col-sm-4 col-xs-12">                      
	        <div class="box-news-related">
	            <div class="photo-item">
	                <a href="<?php echo the_permalink( $id )  ?>">
	                    <img src="<?php echo p_link_img( '', false, $id )  ?>" alt="img" class="img-responsive" />
	                </a>
	                <div class="date"><?php echo get_the_date("d", $id) ?> <span><?php echo get_the_date("m", $id) ?></span></div>
	            </div>
	            <div class="content p-p-10">
	                <h4 class="f2-sbold p-fs-14 p-mb-10"><a href="<?php echo the_permalink($id)  ?>"><?php echo get_the_title($id) ?></a></h4>
	                <p class="p-fs-13 c-des" data-max-char="120"><?php echo get_the_excerpt($id); ?></p>
	            </div>
	        </div>                      
	       
	</div>

<?php $i++; endforeach; ?>


</div>
</div>


<?php } ?>


<?php return; ?>

<!-- Bài viết liên quan -->
<div class="post-related p-mt-40 p991-mt-20">
<h2 class="heading-related f2-sbold p-mb-20">Bài viết liên quan</h2>
<div class="row">





	<?php for ($i=1; $i <=3 ; $i++) { ?>
		<div class="col-sm-4 col-xs-12">                      
        <div class="box-news">
            <div class="photo-item">
                <a href="#">
                    <img src="<?php echo P_IMG_NP ?>/news/1.jpg" alt="" class="img-responsive" />
                </a>
                <div class="date">12 <span>09</span></div>
            </div>
            <div class="content p-p-10">
                <h4 class="f2-sbold p-fs-14 p-mb-10"><a href="#">TP.HCM: Giá căn hộ chung cư vẫn âm thầm leo thang</a></h4>
                <p class="p-fs-13 c-des">Còn tại phía Nam, gồm quận 7, Bình Chánh, Nhà Bè, giá căn hộ bình quân là 1.560,77 USD/m2, tăng gần 3% so với 3 tháng trước. Theo dự báo của JLL, giá căn hộ tại Tp.HCM sẽ vẫn tiếp tục</p>
            </div>
        </div>                      
       
    </div>
	<?php } ?>


</div>
</div>
