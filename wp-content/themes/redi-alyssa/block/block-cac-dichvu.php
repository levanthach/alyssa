
<div class="redi-dichvu-lienquan p-pt-30 p-pb-60 p991-pt-20 p991-pb-30">


	<div class="container">

		<h2 class="heading-sect p-up text-center">Các dịch vụ liên quan</h2>

		<div class="line-heading-sect-center p-mtb-20"></div>


		<div class="row p-mt-45 p991-mt-30">

	<!-- 		<div class="col-xs-12 col-sm-6 col-md-3">
				<h3 class="f-bold p-fs-21 c2 p-mb-20">Chụp ảnh thương hiệu</h3>
				<ul class="group-list-have-icon">
					<?php for ($i=1; $i <=4 ; $i++) { ?>
						<li><a href="#" class="c1 f-bold">Chụp ảnh doanh nhân</a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 p767-mt-10">
				
				<h3 class="f-bold p-fs-21 c2 p-mb-20">Quay phim thương hiệu</h3>
				<ul class="group-list-have-icon">
					<?php for ($i=1; $i <=4 ; $i++) { ?>
						<li><a href="#" class="c1 f-bold">Quay phim doanh nhân</a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="clearfix hidden-md hidden-lg"></div>
			<div class="col-xs-12 col-sm-6 col-md-3 p991-mt-10">
			
				<h3 class="f-bold p-fs-21 c2 p-mb-20">Thiết kế thương hiệu</h3>
				<ul class="group-list-have-icon">
					<?php for ($i=1; $i <=4 ; $i++) { ?>
						<li><a href="#" class="c1 f-bold">Thiết kế doanh nhân</a></li>
					<?php } ?>
				</ul>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-3 p991-mt-10">
			
				<h3 class="f-bold p-fs-21 c2 p-mb-20">Câu chuyện thương hiệu</h3>
				<ul class="group-list-have-icon">
					<?php for ($i=1; $i <=4 ; $i++) { ?>
						<li><a href="#" class="c1 f-bold">Câu chuyện doanh nhân</a></li>
					<?php } ?>
				</ul>
			</div>
 -->


            <?php
              if( have_rows( "op_ddv_repeat" . $acf_pr , 'option')  && function_exists('have_rows') ) : $i = 1;
              	$count_op_ddv_repeat = count( get_field( "op_ddv_repeat" . $acf_pr , 'option'  ) );
                while( have_rows( "op_ddv_repeat" . $acf_pr , 'option') ): the_row();
                  $op_ddv_repeat_cat = p_acfs_o( "op_ddv_repeat_cat" . $acf_pr );

                 $term1 = get_term(  $op_ddv_repeat_cat , 'dich_vu' );
               	 $term_name = $term1->name;

               	 $term_link = get_term_link( $op_ddv_repeat_cat, 'dich_vu' );

               	 wp_reset_postdata();
				 wp_reset_query();  



				  $query_op_hp_tt_cat = new WP_Query( array(

				    'post_type' =>  'post_dichvu', //|page|product...

				    'orderby' => 'date',

				    'order'               => 'DESC',

				     'post_status' => "publish",

				    'ignore_sticky_posts' => false,


				    'tax_query' => array(
				        array(
				        'taxonomy' => 'dich_vu',
				        'field' => 'term_id',
				        'terms' => (int) $op_ddv_repeat_cat ,
				         )
				     ),

				      'posts_per_page' => -1,

				));

				 $op_hp_tt_cat_ar = [];

				 if ( $query_op_hp_tt_cat->have_posts() ) : $i = 1; 

				    while ($query_op_hp_tt_cat->have_posts() ) : $query_op_hp_tt_cat->the_post();

				        $op_hp_tt_cat_ar[] = get_the_ID();

				    endwhile;

				endif;


				//print_r22($op_hp_tt_cat_ar );

              ?>
                


              	<div class="col-xs-12 col-sm-6 col-md-3 p991-mt-10">
				
					<h3 class="f-bold p-fs-21 c2 p-mb-20">
						<a href="<?php echo $term_link ?>" style="color:#fcb614">
							 <?php echo $term1->name ?>
						</a>
					</h3>


					<ul class="group-list-have-icon">
						<?php foreach( $op_hp_tt_cat_ar as $op_hp_tt_cat_ars ) { ?>
							<li><a href="<?php echo get_the_permalink(  $op_hp_tt_cat_ars ); ?>" class="c1 f-bold"><?php echo get_the_title(  $op_hp_tt_cat_ars ); ?></a></li>
						<?php } ?>
					</ul>
				</div>

				<?php if ( $i % 2 == 0 ) { ?> 
					<div class="clearfix visible-sm visible-xs"></div>
				<?php } ?>

				<?php if ( $i % 2 == 0 ) { ?> 
					<div class="clearfix visible-md visible-lg"></div>
				<?php } ?>
        
              
              <?php
                $i++; endwhile; endif;  
              ?>


		

		</div>


	</div>

</div>