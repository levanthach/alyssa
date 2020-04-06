<?php
/*
Template names: Template chi tiết sản phẩm
Template Post Type: post, page
*/

// global $hidden_banner;
// $hidden_banner = true;


// global $hidden_breadcrum;
// $hidden_breadcrum = true;


?>
<?php get_header() ?>



<div class="single-product">
	<section class="main-content">


<!-- 		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<span>
				<a href="<?php echo home_url() ?>/">Trang chủ</a> >
				<a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Sản phẩm</a> >
				<span class="breadcrumb_last">Hoa lan hồ điệp</span>
			</span>
		</div>

 -->


		<div class="row prod-info">


			<div class="col-sm-4 col-xs-12">
				<div class="prod-gallery">


					<div class="owl-carousel" id="sync1">


						
						<?php
						if( have_rows( "p_sp1_gallery_repeat" )  && function_exists('have_rows') ) : $i = 1;

						?>



							<?php 
							  while( have_rows( "p_sp1_gallery_repeat") ): the_row();
							  
							      $p_sp1_gallery_repeat_img = p_acfs_pp( "p_sp1_gallery_repeat_img"  );
							 
							?>
						    

								<div class="item box-p-detail">
									<a href="<?php echo $p_sp1_gallery_repeat_img ?>" class="zoompleFixed">							
										<img src="<?php echo $p_sp1_gallery_repeat_img ?>" class="img-responsive" />
									</a>
							
								</div>

							<?php
							  $i++; endwhile;  
							?>

							<?php else : ?>

							<div class="item box-p-detail">
								<a href="<?php echo p_link_img() ?>" class="zoompleFixed">							
									<img src="<?php echo p_link_img() ?>" class="img-responsive" />
								</a>
						
							</div>


						<?php  endif; ?>



						
					</div>


					<?php
						if( have_rows( "p_sp1_gallery_repeat" )  && function_exists('have_rows') ) : $i = 1;

					?>
						<div class="owl-carousel" id="sync2">

				
						

							<?php 
							  while( have_rows( "p_sp1_gallery_repeat") ): the_row();
							  
							      $p_sp1_gallery_repeat_img = p_acfs_pp( "p_sp1_gallery_repeat_img"  );
							 
							?>
						    
									<div class="item">
										<img src="<?php echo  $p_sp1_gallery_repeat_img ?>" class="img-responsive" />
									</div>
					
						<?php
						  $i++; endwhile; 
						?>

						</div>

						<?php  else : ?>

					<!-- 	<div class="owl-carousel" id="sync2">
							<div class="item">
								<img src="<?php echo p_link_img() ?>" class="img-responsive" />
							</div>

						</div>
						
 -->
						

					<?php  endif; ?>


				</div>
			</div>



			
			<div class="col-sm-5 col-xs-12">
				<div class="prod-desc">

					<h1><?php echo the_title() ?></h1>

					<ul class="prod-meta">

						<?php if ( !empty( p_acf_pp("p_sp1_in_msp")  ) ) { ?> 

							<li>Mã sản phẩm: 
								<span><?php echo p_acf_pp("p_sp1_in_msp") ?></span>
							</li>

						<?php } ?>


						<li class="stock">
							Trạng thái : 

							<?php if ( p_acf_pp("p_sp1_in_status") == "t1" || empty( p_acf_pp("p_sp1_in_status") ) ) { ?>

								<span>Còn hàng</span>

							<?php } else { ?>

								<span>Hết hàng</span>

							<?php } ?>

						</li>

						<?php if ( !empty( p_acf_pp("p_sp1_in_color")  ) ) { ?> 

						<li>Màu: 
							<span><?php echo p_acf_pp("p_sp1_in_color") ?></span>
						</li>

						<?php } ?>


						<?php if ( !empty( p_acf_pp("p_sp1_in_gom")  ) ) { ?> 

						<li class="prod-attachment">
							Sản phẩm bao gồm: 
							<span><?php echo p_acf_pp("p_sp1_in_gom") ?></span>
						</li>

						<?php } ?>


					</ul>
					<div class="prod-price">

					<!-- 	<span class="text-price">Giá:</span>
						<span class="sale-price">190.000 đ</span>
						<span class="regular-price">210.000 đ</span> -->


					<?php 
						$dong = p_wc_price_format_html3();
						$price = get_post_meta( get_the_ID() , 'p_sp1_in_gia', true);
						$sale = get_post_meta( get_the_ID() , 'p_sp1_in_gia2', true);
						
						$price_html =  p_wc_price_format( $price ) . ' ' . $dong;
						$sale_html =  p_wc_price_format( $sale ) . ' ' . $dong;
						$contact = "Liên hệ";

						$price_app = "";


						if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 
							$price_app = $sale;
						
					?>
			        		
			        	<span class="text-price">Giá:</span>
						<span class="sale-price"><?php echo $sale_html ?></span>
						<span class="regular-price"><?php echo $price_html ?></span>


					<?php } else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 
			        	
						$price_app = $price;
			        ?>	

			        	<span class="text-price">Giá:</span>
						
						<span class="sale-price"><?php echo $price_html ?></span>

			        	

		        	<?php } else {  $price_app = "Liên hệ" ?>

		        		<span class="sale-price"><?php echo $contact ?></span>


		        	<?php 	} ?>


			       
					</div>
					<div class="prod-cart">
						<ul class="list-unstyled">

							<?php if ( p_acf_pp("p_sp1_in_status") == "t1" || empty( p_acf_pp("p_sp1_in_status") ) ) { ?>

							<?php //if( p_wc_pd_check_type2( get_the_ID() ) != "3" ) { ?>

								<li>
									Số lượng: <input type="number" value="1" min="1" class="val-number-sl1"  />
								</li>

							 <?php //} ?>



							<li>	

								<input type="submit" value="Đặt mua" class="show-pp1 click-show-sc-popup-wrap" />
	
							</li>

							<?php } else { ?> 

							<li>
								
							
								<a href="<?php echo p_var_ar("link_lh") ?>" style="background-color: #e50015;width: 150px;padding: 6px 10px;border: none;border-radius: 25px;text-transform: uppercase;font-size: 16px;color: #fff;text-align: center;margin-left: 20px;display:inline-block">
										Liên hệ

									</a>

							

							</li>


							<?php } ?>

						</ul>
					</div>


					<div class="p-mt-50">
						<?php 
							echo do_shortcode('[addtoany]');
						?>

					</div>
				</div>
			</div>


			<div class="col-sm-3 col-xs-12">
				<div class="prod-contact">
					<h2><?php echo p_acf_o("op_ctsp_ctck_title") ?></h2>
					<ul class="list-unstyled">

					<?php
					if( have_rows( "op_ctsp_ctck_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
					    $count_op_ctsp_ctck_repeat = count( get_field('op_ctsp_ctck_repeat', "option") );
					?>

					<?php 
					  while( have_rows( "op_ctsp_ctck_repeat", "option" ) ): the_row();
					  
					      
					      $op_ctsp_ctck_repeat_title = p_acfs_o( "op_ctsp_ctck_repeat_title"  );
					     
					?>


								<li><?php echo  $op_ctsp_ctck_repeat_title  ?></li>
							

					<?php
					  $i++; endwhile;  endif;
					?>


 	<!-- 
						<li>Sản phẩm hoa tươi chất lượng</li>
						<li>Giao hàng miễn phí trong phạm vi HCM</li>
 -->

					</ul>
					<div class="hotline">
						<span>Hotline:</span>
						<a href="tel:<?php echo p_clear_phone( p_acf_o("op_ctsp_ctck_phone") ) ?>"><?php echo p_acf_o("op_ctsp_ctck_phone") ?></a>
					</div>
				</div>
			</div>
		</div>


		<?php include get_template_directory() . '/block/block-product-list-related-hoa-chu-de.php';  ?>


		<?php include get_template_directory() . '/block/block-product-list-related-hoa.php';  ?>





	</section>
</div>












<!-- form mua hang -->

<div class="sc-popup-wrap sc-popup-wrap-show2">

    <div class="sc-popup-content">

        <div class="sc-popup-close" title="Đóng">
             <div class="hidden-xs hidden-sm"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_close.png" alt="img" ></div>
             <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_close_mb.png" alt="img" class="visible-xs visible-sm">
        </div>
        <div>


          <div class="box-form-dang-ky">

      
            <div class="sc-popup-detail content">

             <div class="sc-popup-img p-mt-10-i">
                <img src="<?php echo P_IMG_ALY ?>/logo.png" alt="img" style="max-width:150px" >
             </div>

             <div>
                  <div class="sc-popup-title-top p-mt-20">
                      
                      <div class="sc-popup-title-top2"> 
                        <?php echo t_pll("Đặt mua sản phẩm","Buy product"); ?>
                      </div>

                  </div>


                  <div class="sc-popup-form">

                        <form id="form_dktv4" action="." method="post" accept-charset="utf-8">

                        	<input type="hidden"  class="form_dktv3-img" value="<?php echo get_post_thumbnail_id() ?>" >


                            <div class="row">
                              <div class="p-mb-10 col-xs-12">
                                <input type="text" name="form_dktv3-your-name" value="<?php echo is_localhost() ? "ngthiab" : ""; ?>" class="wpcf7-form-control" required="" placeholder="<?php echo t_pll("Họ tên *","Name *"); ?>">
                            </div>

                       

                            <div class="p-mb-10 col-xs-12 col-md-6">
                                <input type="text" name="form_dktv3-your-phone" value="<?php echo is_localhost() ? "ngthiab" : ""; ?>" class="wpcf7-form-control" required="" placeholder="<?php echo t_pll("Số điện thoại *","Phone *"); ?>">
                            </div>

                            <div class="p-mb-10 col-xs-12 col-md-6">
                                <input type="email" name="form_dktv3-your-email" value="<?php echo is_localhost() ? "ngthiab@gmail.com" : ""; ?>" size="40" class="wpcf7-form-control" required="" placeholder="Email *">
                            </div>

                             <div class="p-mb-10 col-xs-12">
                                <input type="text" name="form_dktv3-your-address" value="<?php echo is_localhost() ? "ngthiab@gmail.com" : ""; ?>" size="40" class="wpcf7-form-control" required="" placeholder="Địa chỉ nhận hàng *">
                            </div>



                            <div class="p-mb-0 col-xs-12">
                                <textarea name="form_dktv3-your-message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" placeholder="<?php echo t_pll("Ghi chú","Message"); ?>"><?php echo is_localhost() ? "ngthiab-tuvan" : ""; ?></textarea>
                            </div>
                            

                            <div class="p-mb-10 col-xs-12">
                                <input type="text" name="form_dktv3-your-product" value="<?php the_title() ?>" class="wpcf7-form-control" readonly placeholder="<?php echo t_pll("Tên sản phẩm","Product name") ?>" style="font-weight: bold">
                            </div>
                           

                            <div class="p-mb-10 col-xs-4 col-md-3">
                               <?php echo t_pll("Số lượng: ","Number") ?>
                            </div>

                             <div class="p-mb-10 col-xs-8 col-md-9">
                                <input type="number" name="form_dktv3-your-product-number" min="1" value="<?php echo is_localhost() ? "1" : "1"; ?>" class="wpcf7-form-control number-change-cart-item" required="" placeholder="<?php echo t_pll("Số lượng","Number") ?>">
                            </div>

                            <div class="clearfix"></div>


                           
                              <!-- <input readonly type="text" name="form_dktv3-your-product-number" min="1" value="<?php echo "190.000 đ"; ?>" class="wpcf7-form-control" required="" placeholder="<?php echo t_pll("Tổng tiền","total") ?>"> -->


                              <?php if ( $price_app != "Liên hệ" ) { ?> 

                              	 <div class="p-mb-10 col-xs-4 col-md-3">
	                               <?php echo t_pll("Tổng tiền","total") ?>
	                            </div>


	                              <div class="number-change-cart-item-value-one hidden"><?php echo $price_app ?></div>
	                                                

	                             <div class="p-mb-10 col-xs-8 col-md-9 p-fs-20 number-change-cart-item-value" style="font-weight: bold;color:red">
	                              
	                                <?php echo p_wc_price_format_html2(  $price_app ) ?>
	                            </div>

                            <?php } ?>


                            </div>
                            

                           
                            <div class="clearfix"></div>

                            <div class="sc-popup-submit p-mt-10">
                                <p> 
                                    
                                    <button type="submit" class="wpcf7-form-control wpcf7-submit form-submit-button-3" style="color:white">
                                        <i class="fa fa-circle-o-notch fa-spin" id="btn-new-user-spin" style="display: none"></i>
                                        <?php echo t_pll("Đặt mua","Buy"); ?>
                                    </button>
                                </p>
                            </div>

                            <div class="p-cl-r p-t-c p-mes" style="display: none;color:red">
                               	
                            </div>


                        </form>



                  </div>

             </div>

         </div>
          </div>
          
        </div>
        

    </div>

</div>
























<?php get_footer() ?>