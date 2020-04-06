<?php
/*
Home template default
*/
?>
<?php get_header() ?>


<!-- sect banner-->
<div class="headline">
	<div class="container">
		<!-- <p>thiết kế các mẫu hoa lan hồ điệp sang trọng, đẳng cấp phù hợp với mọi yêu cầu của quý khách hàng</p>
		<p>Phân phối sỉ và lẻ Lan Hồ Điệp Đài Loan chất lượng cao giá tốt nhất TP.HCM"</p> -->
		<?php echo p_acf_o("op_gtcm_con") ?>

	</div>
</div>



<section class="main-category">
	<ul class="list-unstyled">



		<?php
		if( have_rows( "op_gtcm_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
		    $count_op_gtcm_repeat = count( get_field('op_gtcm_repeat', "option") );
		?>

		<?php 
		  while( have_rows( "op_gtcm_repeat" , "option" ) ): the_row();
		  
		      $op_gtcm_repeat_img = p_acfs_o( "op_gtcm_repeat_img"  );
		      $op_gtcm_repeat_title = p_acfs_o( "op_gtcm_repeat_title"  );
		      $op_gtcm_repeat_link = p_acfs_o( "op_gtcm_repeat_link"  );
		 
		?>


				<li>
					<a href="<?php  $op_gtcm_repeat_link ?>">
						<img src="<?php echo  $op_gtcm_repeat_img ?>" class="img-responsive" alt="img" />
						<h4><?php echo $op_gtcm_repeat_title ?></h4>
					</a>
				</li>
				

		<?php
		  $i++; endwhile;  endif;
		?>


<!-- 


		<?php for ($i=1; $i <=5 ; $i++) { ?>
		<li>
			<a href="<?php echo home_url() ?>/san-pham">
				<img src="<?php echo P_IMG_ALY ?>/categories/<?php echo $i ?>.jpg" class="img-responsive" alt="img" />
				<h4>Lan hồ điệp màu trắng</h4>
			</a>
		</li>
		<?php } ?>  

 -->


		
	</ul>
</section>






<section class="main-testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="block-header">
					<h2><?php echo p_acf_o("op_yk_title") ?></h2>
				</div>
			</div>
			<div class="col-md-9 col-sm-8 col-xs-12">
				<div class="lst-tes owl-carousel" id="testimonial">
<!-- 
					<?php for ($i=1; $i <=5 ; $i++) { ?>

					<div class="item">
						<div class="tes-image">
							<img src="<?php echo P_IMG_ALY ?>/testimonial/1.jpg" />
						</div>
						<div class="tes-desc">
							<div class="tes-comment">
								Cám ơn công ty đã giúp chúng tôi chọn những giống hoa tốt,
								đặc biệt là về hoa lan không nơi đâu tuyệt vời bằng Alyssa
								Orchids. Tôi sẽ quay lại và mua thêm nhiều loại hoa
								khác vào một ngày gần nhất!
							</div>
							<div class="tes-meta">
								<span class="tes-name">Lan Hương</span>
								<span class="tes-position">Kế toán</span>
							</div>
						</div>
					</div>

					<?php } ?>   -->

					<?php
		if( have_rows( "op_yk_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
		    $count_op_yk_repeat = count( get_field('op_yk_repeat', "option") );
		?>

		<?php 
		  while( have_rows( "op_yk_repeat", "option" ) ): the_row();
		  
		      $op_yk_repeat_img = p_acfs_o( "op_yk_repeat_img"  );
		      $op_yk_repeat_con = p_acfs_o( "op_yk_repeat_con"  );
		      $op_yk_repeat_name = p_acfs_o( "op_yk_repeat_name"  );
		      $op_yk_repeat_job = p_acfs_o( "op_yk_repeat_job"  );
		 	
		?>


			<div class="item">
						<div class="tes-image">
							<img src="<?php echo $op_yk_repeat_img ?>" />
						</div>
						<div class="tes-desc">
							<div class="tes-comment">
								<?php echo $op_yk_repeat_con ?>

							</div>
							<div class="tes-meta">
								<span class="tes-name"><?php echo $op_yk_repeat_name ?></span>
								<span class="tes-position"><?php echo $op_yk_repeat_job ?></span>
							</div>
						</div>
					</div>

		<?php
		  $i++; endwhile;  endif;
		?>




					
				</div>
			</div>
		</div>
	</div>
</section>








<section class="main-products">
	<div class="container">
		<div class="main-header">
			<h2 class="main-header-h2">
				<i class="fa fa-spinner fa-spin" style="display: none"></i>
				<?php echo p_acf_o("op_tt_title") ?>
			</h2>

			<div>
			<p><?php echo p_acf_o("op_tt_con") ?></p>
			</div>

			<div class="filter">
				<select class="se-filter1">
					<option value="-1" disabled="" selected>- Chọn khoảng giá -</option>

						<?php
						if( have_rows( "op_tt_kg_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
						    $count_op_tt_kg_repeat = count( get_field('op_tt_kg_repeat', "option") );
						?>

						<?php 
						  while( have_rows( "op_tt_kg_repeat", "option" ) ): the_row();
						  
						      $op_tt_kg_repeat_title = p_acfs_o( "op_tt_kg_repeat_title"  );
						      $op_tt_kg_repeat_link = p_acfs_o( "op_tt_kg_repeat_link"  );
								
							  $op_tt_kg_repeat_ss = p_acfs_o( "op_tt_kg_repeat_ss"  );
						      $op_tt_kg_repeat_ss_num = p_acfs_o( "op_tt_kg_repeat_ss_num"  );

						      $op_tt_kg_repeat_ss_num1 = p_acfs_o( "op_tt_kg_repeat_ss_num1"  );
						      $op_tt_kg_repeat_ss_num2 = p_acfs_o( "op_tt_kg_repeat_ss_num2"  );



						?>

									<option value="<?php echo $i ?>" 
										data-link="<?php echo $op_tt_kg_repeat_link ?>"
										data-op_tt_kg_repeat_ss="<?php echo $op_tt_kg_repeat_ss ?>"
										data-op_tt_kg_repeat_ss_num="<?php echo $op_tt_kg_repeat_ss_num ?>"
										data-op_tt_kg_repeat_ss_num1="<?php echo $op_tt_kg_repeat_ss_num1 ?>"
										data-op_tt_kg_repeat_ss_num2="<?php echo $op_tt_kg_repeat_ss_num2 ?>"
									><?php echo  $op_tt_kg_repeat_title ?></option>


						<?php
						  $i++; endwhile;  endif;
						?>
						
<!-- 

					<option value="1">Dưới 200.000 đ</option>
					<option value="2">Từ 200.000 đ đến 500.000 đ</option>
					<option value="3">Trên 500.000 đ</option>
 -->



				</select> 
			</div>
		</div>


	    <div class="home-file1">

	    <!-- 	 <div class="lst-products row">
   		   		<?php //include get_template_directory() . "/block/block-product-list.php" ?>

   			</div> -->

   		   <div class="lst-products lst-products-home1 row">
   		   		<?php echo p_index_load_data_query1() ?>
   		  </div>


        </div>

		<div class="viewall viewall-se">
			<a href="<?php echo home_url() ?>/san-pham">Xem tất cả</a>
		</div>


	</div>
</section>



<?php 
$op_hp_spbc2_cat = p_acf_o("op_tt_cat");

$term_op_hp_spbc2_cat = get_term( $op_hp_spbc2_cat );

$term_link_op_hp_spbc2_cat = get_term_link( $term_op_hp_spbc2_cat );

?>



<section class="main-products products-sale">
	<div class="container">
		<div class="main-header">
			<h2><?php echo p_acf_o("op_tt_title2") ?></h2>
			<p><?php echo p_acf_o("op_tt_con2") ?></p>
		</div>
	
	   <div class="lst-products row">
	   		<?php echo p_index_load_data_query2( '' ,  p_acf_o("op_tt_cat")  ) ?>
	  </div>


		<div class="viewall">
		<a href="<?php echo $op_hp_spbc2_cat ? $term_link_op_hp_spbc2_cat : "#" ?>">Xem tất cả</a>
	</div>

	</div>
</section>








<?php get_footer() ?>