<?php
// code

function p_content_html1( $id = "" ) { ?>

<!-- <div class="col-xs-12 col-sm-6 col-md-6"> -->
	<div class="box-item v-box text-center">
		<a href="<?php echo get_the_permalink(  $id ); ?>">
			<div class="photo-item" style="background: url('<?php echo p_link_img('','', $id ) ?>') no-repeat center/cover;padding-top: calc(100% / (387 / 262));">
			</div>
		</a>
		
		<div class="content">
			<!-- <div class="cate-type f-bold p-up p-fs-14 c2 p-mt-10">tin tức và sự kiện</div> -->
			<h4 class="p-fs-20 p767-fs-16 p-mt-10">
				<a href="<?php echo get_the_permalink(  $id ); ?>">
					<?php echo get_the_title( $id ) ?>
				</a>
			</h4>
			
		</div>
		<div class="line-heading-sect-center p-mtb-20 bg1"></div>
	</div>
<!-- </div>
 -->


<?php }


function p_content_html2( $id = "" , $i ) {  ?>

<div class="row">
				
	<div class="col-xs-12 col-sm-6 <?php echo $i % 2 == 1 ? "col-sm-push-6" : "" ?>">
		<a href="<?php echo get_the_permalink(  $id ); ?>">
			<img src="<?php echo p_link_img('','', $id ) ?>" alt="img" class="img-responsive" style="max-height: 415px;object-fit: cover;">
		</a>
	</div>

	<div class="col-xs-12 col-sm-6 <?php echo $i % 2 == 1 ? "col-sm-pull-6" : "" ?> p-mt-50 p991-mt-0 p767-mt-10">
		
		<div class="content">
			<h4 class="p-fs-25 f-bold c2 p-up">
				<a href="<?php echo get_the_permalink(  $id ); ?>" style="color:#fcb614 ">
					<?php echo get_the_title( $id ) ?>
				</a>
			</h4>
			<div class="short-des f-df p-mb-20 hidden-xs p-mt-20 c1">
				<?php echo get_the_excerpt( $id ); ?>
			</div>
			
			<!-- 	<a href="#" class="v-btn p-up">Xem chi tiết</a> -->
			
		</div>
		
	</div>
	
</div>

<?php }

function p_content_html3( $id = "" , $i ) {  ?>

<div class="row">
				
	<div class="col-xs-12 col-sm-6 <?php echo $i % 2 == 1 ? "col-sm-push-6" : "" ?>">
		<a href="<?php echo get_the_permalink(  $id ); ?>">
			<img src="<?php echo p_link_img('','', $id ) ?>" alt="img" class="img-responsive" style="max-height: 415px;object-fit: cover;">
		</a>
	</div>

	<div class="col-xs-12 col-sm-6 <?php echo $i % 2 == 1 ? "col-sm-pull-6" : "" ?> p-mt-50 p991-mt-0 p767-mt-10">
		
		<div class="content p-t-c p-plr-150 p991-plr-50 p767-plr-20">
			<h4 class="p-fs-25 f-bold c2 p-up">
				<a href="<?php echo get_the_permalink(  $id ); ?>" style="color:#fcb614 ">
					<?php echo get_the_title( $id ) ?>
				</a>
			</h4>
			<div class="short-des f-df p-mb-20 hidden-xs p-mt-20 c1 text-justify">
				<?php echo wp_trim_words( get_the_excerpt( $id ) , 20 , '...' ); ?>
			</div>
			
				<a href="<?php echo get_the_permalink(  $id ); ?>" class="v-btn p-up" style="background:#fcb614;border-color:#fcb614; ">Xem thêm</a>
			
		</div>
		
	</div>
	
</div>

<?php }



function p_content_html4( $id = ""  ) {  ?>

	<div class="box-project p-mb-40 p991-mb-20">
					
	<div class="row">
		<div class="col-xs-12 col-sm-6 box-project-max-height">
			<a href="<?php echo get_the_permalink(  $id ); ?>">
				<img src="<?php echo p_link_img('','', $id ) ?>" alt="img" class="img-responsive" style="max-height: 415px;object-fit: cover;">
			</a>
		</div>
		<div class="col-xs-12 col-sm-6 p-pt-50 p991-pt-0 p767-pt-10 box-project-max-height">
			
			<div class="content">
				<h4 class="p-fs-25 c2 p-up"><a href="<?php echo get_the_permalink(  $id ); ?>"  style="color:#fcb614 "><?php echo get_the_title( $id ) ?></a></h4>
				<div class="short-des f-df p-mb-20 hidden-xs p-mt-20 c1">
				<!-- 	<p>
						Châu khổng tạo dựng trải nghiệm sống thượng lưu đáng tự hào cho mỗi cư dân với cụm tiện ích riêng đẳng cấp, cộng hưởng hài hòa với quần thể tiện ích toàn khu vực.
					</p>
					<p>
						Địa thế của Châu khổng là vô cùng đắc địa , không gian sống thuận phong thủy và sự kết nối linh hoạt đến những khu vực trọng điểm của thành phố. Châu khổng trở thành sự lựa chọn không thể bỏ lỡ của giới tinh hoa.
					</p> -->
					<?php echo wp_trim_words( get_the_excerpt( $id ) , 50 , '...' ); ?>
				</div>
			
				<a href="<?php echo get_the_permalink(  $id ); ?>" class="v-btn2 readmore">Xem thêm</a>
				
			</div>
		</div>
		
	</div>
	
</div>

<?php }


function p_content_html5( $id = ""  ) {  ?>

	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="v-box box-thuvien box-content-full">
			<div class="photo-item" style="background: url('<?php echo  p_link_img("","", $id ) ?>') no-repeat center/cover; padding-top: calc(100% / (360 / 240));">
				
			</div>
			<div class="content-full">
				<a href="<?php echo get_the_permalink(  $id ); ?>" class="viewmore" data-toggle="modal" data-target="#gallery-modal" data-tv="<?php echo $id ?>" >Xem thêm</a>
			</div>
		</div>
	</div>
<?php }



function p_menu_html1( $name = "" ){  ?>



<div class="breadcrumb-cate-list p-mt-10 p-mb-20 p-t-c">
	

    <?php
    if ( is_singular() ){
    	$link = get_the_permalink( get_the_ID() );
    }
     else if ( is_tax() ){
     	$term = get_queried_object();

     	$link = get_term_link( $term->term_id, $term->taxonomy );
    } 


	  if( have_rows(  $name . "_repeat"  , 'option')  && function_exists('have_rows') ) : $i = 1;
	    while( have_rows( $name . "_repeat", 'option') ): the_row();
	      $p_mn1_repeat_title = p_acfs_o( $name . "_repeat_title" );
	      $p_mn1_repeat_link = p_acfs_o(  $name . "_repeat_link" );	

	      $class = ( $link == $p_mn1_repeat_link ) ? "class='active'" : "";

	  ?>

			<a href="<?php echo $p_mn1_repeat_link  ?>" <?php echo $class ?> ><?php echo $p_mn1_repeat_title ?></a>


	<?php endwhile; endif; ?>

</div>




<?php }







function p_index_load_data1( $ar = "" ){ 
	$id = isset($ar['id']) ? $ar['id'] : "";

	//$p_sp1_in_star = isset($ar['p_sp1_in_star']) ? $ar['p_sp1_in_star'] : "t5";

	$p_sp1_in_star = get_post_meta( $id, 'p_sp1_in_star', true)  ? get_post_meta( $id, 'p_sp1_in_star', true)  : "t5";


	$dong = p_wc_price_format_html3();

	$price = get_post_meta( $id, 'p_sp1_in_gia', true);
	$sale = get_post_meta( $id, 'p_sp1_in_gia2', true);
	
	$contact = "Liên hệ";


	$price_html =  p_wc_price_format( $price ) . ' ' . $dong;
	$sale_html =  p_wc_price_format( $sale ) . ' ' . $dong;
	 

	//echo p_wc_pd_check_type2( $id ); 
	
?>	


<div class="prod-item">


	<div class="prod-image">
		<img src="<?php echo p_link_img("","", $id ) ?>" class="img-responsive" alt="img" />
		<a href="<?php echo get_the_permalink( $id ); ?>" class="view-detail">Chi tiết</a>

		<?php if( p_wc_pd_check_type2( $id ) == '1' ) { ?>

			<?php if (  !empty( p_wc_tyle( $price , $sale  )  )  ) { ?> 
				<span class="sale-off">
					<?php echo p_wc_tyle( $price , $sale  ); ?>
				</span>
			<?php } ?>


		<?php } ?>
	</div>


	<div class="prod-desc">
		<h4>
			<a href="<?php echo get_the_permalink( $id ); ?>">
				<?php echo get_the_title( $id ) ?>
			</a>
		</h4>

		<div class="prod-price">

			<?php if( p_wc_pd_check_type2( $id ) == '2' ) { ?>

				<span class="sale-price">
					<?php echo $price_html ?>
				</span>

			<?php } else if( p_wc_pd_check_type2( $id ) == '1' ) { ?> 



				<span class="sale-price">
					<?php echo $sale_html ?>
				</span>


				<span class="regular-price">
					<?php echo $price_html ?>
				</span>



			<?php } else { ?> 


				<span class="sale-price">
					<?php echo $contact ?>
				</span>
		

			<?php } ?>

		</div>

		<ul class="prod-rating list-unstyled">

			<?php
			$p_sp1_in_star_mod = str_replace( 't', '', $p_sp1_in_star );

				for( $i = 1; $i <= 5; $i++ ){
			 ?>

			 	<?php if( $i <= $p_sp1_in_star_mod ) { ?> 

			 		<li class="active"><i class="fa fa-star"></i></li>	

			 	<?php } else { ?> 

			 		<li><i class="fa fa-star"></i></li>


			 	<?php } ?>

			<?php } ?>


		</ul>


	</div>
</div>



<?php 

}

function p_index_load_data2( $ar = "" ){ 
	$id = isset($ar['id']) ? $ar['id'] : "";

	//$p_sp1_in_star = isset($ar['p_sp1_in_star']) ? $ar['p_sp1_in_star'] : "t5";

	$p_sp1_in_star = get_post_meta( $id, 'p_sp1_in_star', true)  ? get_post_meta( $id, 'p_sp1_in_star', true)  : "t5";


	$dong = p_wc_price_format_html3();

	$price = get_post_meta( $id, 'p_sp1_in_gia', true);
	$sale = get_post_meta( $id, 'p_sp1_in_gia2', true);
	
	$contact = "Liên hệ";


	$price_html =  p_wc_price_format( $price ) . ' ' . $dong;
	$sale_html =  p_wc_price_format( $sale ) . ' ' . $dong;
	 

	//echo p_wc_pd_check_type2( $id ); 
	
?>	


 <div class="prod-item">

  <!--   <span class="sale-off">20%</span>
 -->
	<?php if( p_wc_pd_check_type2( $id ) == '1' ) { ?>

		<?php if (  !empty( p_wc_tyle( $price , $sale  ) ) ) { ?> 
			<span class="sale-off">
				<?php echo p_wc_tyle( $price , $sale  ); ?>
			</span>
		<?php } ?>


	<?php } ?>


    <div class="prod-image">
    	<a href="<?php echo get_the_permalink( $id ); ?>">
    	    <img src="<?php echo p_link_img( "" , "" , $id ); ?>" class="img-responsive" />
   		 </a>
    </div>


    <div class="prod-desc">
        <h4>
        	<a href="<?php echo get_the_permalink( $id ); ?>">
       			<?php echo get_the_title( $id ) ?>
   			 </a>
		</h4>
        <div class="prod-price">
          	<?php if( p_wc_pd_check_type2( $id ) == '2' ) { ?>

				<span class="sale-price">
					<?php echo $price_html ?>
				</span>

			<?php } else if( p_wc_pd_check_type2( $id ) == '1' ) { ?> 



				<span class="sale-price">
					<?php echo $sale_html ?>
				</span>


				<span class="regular-price">
					<?php echo $price_html ?>
				</span>



			<?php } else { ?> 


				<span class="sale-price">
					<?php echo $contact ?>
				</span>
		

			<?php } ?>
        </div>
    </div>
</div>





<?php }


function p_index_load_data_query1( $order = -1 , $num = 0 , $num1 = 0 , $num2 = 0 ){ ?>


<?php 
wp_reset_postdata();
wp_reset_query();  

$op_hp_spbc1_cat_ar = [];

$op_hp_spbc1_cat_per_page = 20;


$query_op_hp_spbc1_cat_ar = array(

    'post_type' =>  'post', //|page|product...

    'orderby' => 'date',

    'order'               => 'DESC',

     'post_status' => "publish",

    'ignore_sticky_posts' => false,

    'posts_per_page' => (int) -1,	

    'update_post_term_cache' => false, 
    'update_post_meta_cache' => false, 
    'nopaging' => true, 


);





$query_op_hp_spbc1_cat = new WP_Query( $query_op_hp_spbc1_cat_ar );


 if ( $query_op_hp_spbc1_cat->have_posts() ) : $i = 1; 

    while ($query_op_hp_spbc1_cat->have_posts() ) : $query_op_hp_spbc1_cat->the_post();

    	if ( $order == '-1'  ) {

    		//echo "asd";

    		//echo "count: " . count( $op_hp_spbc1_cat_ar );


	        if(  count( $op_hp_spbc1_cat_ar ) >= (int) $op_hp_spbc1_cat_per_page ) break;
	       
	        $op_hp_spbc1_cat_ar[] = get_the_ID();

       } else {

        	if(  count( $op_hp_spbc1_cat_ar ) >= (int) $op_hp_spbc1_cat_per_page ) break;


        	$price = get_post_meta( get_the_ID(), 'p_sp1_in_gia', true); // df
			$sale = get_post_meta( get_the_ID() , 'p_sp1_in_gia2', true); // sale




		        if ( $order == '1'  ) {

		        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

		        		if (  $sale < $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}


		        	} 
		        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 


		        		if (  $price < $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}

		        	}


		        } 
		        else if ( $order == '2'  ) {

		        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

		        		if (  $sale < $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}


		        	} 
		        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 


		        		if (  $price < $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}

		        	}


		        }

		        else if ( $order == '3'  ) {


		        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

		        		if (  $num1 <= $sale && $sale <= $num2  ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}


		        	} 
		        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 


		        			if (  $num1 <= $price && $price <= $num2 ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}

		        	}


		        } 
		        
		        else if ( $order == '4'  ) {


		        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

		        		if (  $sale > $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}


		        	} 
		        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 


		        		if (  $price > $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}

		        	}



		        } 

		        else if ( $order == '5'  ) {


		        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

		        		if (  $sale > $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}


		        	} 
		        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 


		        		if (  $price > $num ) {

		        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

		        		}

		        	}



		        } 


		        

        
        }

        $i++;
    endwhile;

endif;

wp_reset_postdata();
wp_reset_query();  


//print_r22( $op_hp_spbc1_cat_ar );

?>


<?php unset( $id ) ?>

<?php if ( $op_hp_spbc1_cat_ar ) { $ii = 1; 
		foreach(  $op_hp_spbc1_cat_ar as  $op_hp_spbc1_cat_ars ) : 
			$id = $op_hp_spbc1_cat_ars;
			//echo $id;

?> 

	<div class="col-md-3 col-sm-4 col-xs-6 item">
  		 <?php echo p_index_load_data1(array(
  		 	'id' => $id,

  		 )) ?>
	</div>



<?php endforeach; ?>

<?php } ?>

<?php unset( $id ) ?>



<?php }





function p_index_load_data_query2( $order = '-1' , $category_id = "" ){ ?>


<?php 
wp_reset_postdata();
wp_reset_query();  

$op_hp_spbc1_cat_ar = [];

$op_hp_spbc1_cat_per_page = 15;


$query_op_hp_spbc1_cat_ar = array(

    'post_type' =>  'post', //|page|product...

    'orderby' => 'date',

    'order'               => 'DESC',

     'post_status' => "publish",

    'ignore_sticky_posts' => false,

    'posts_per_page' => (int) -1,

    'cat' =>  (array) $category_id,

);


$query_op_hp_spbc1_cat = new WP_Query( $query_op_hp_spbc1_cat_ar );




 if ( $query_op_hp_spbc1_cat->have_posts() ) : $i = 1; 

    while ($query_op_hp_spbc1_cat->have_posts() ) : $query_op_hp_spbc1_cat->the_post();


    	if(  count( $op_hp_spbc1_cat_ar ) >= (int) $op_hp_spbc1_cat_per_page ) break;


    	$price = get_post_meta( get_the_ID(), 'p_sp1_in_gia', true); // df
		$sale = get_post_meta( get_the_ID() , 'p_sp1_in_gia2', true); // sale


       
        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

        		//if (  $sale < 200000 ) {

        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

        		//}


        	} 
      


        
        $i++;
    endwhile;

endif;

wp_reset_postdata();
wp_reset_query();  


//print_r22( $op_hp_spbc1_cat_ar );

?>


<?php unset( $id ) ?>

<?php if ( $op_hp_spbc1_cat_ar ) { $ii = 1; 
		foreach(  $op_hp_spbc1_cat_ar as  $op_hp_spbc1_cat_ars ) : 
			$id = $op_hp_spbc1_cat_ars;
			//echo $id;

?> 

	<div class="col-md-3 col-sm-4 col-xs-6 item">
  		 <?php echo p_index_load_data1(array(
  		 	'id' => $id,

  		 )) ?>
	</div>



<?php endforeach; ?>

<?php } ?>

<?php unset( $id ) ?>



<?php }


function p_index_load_data_query3( $order = '-1' ){ ?>


<?php 
wp_reset_postdata();
wp_reset_query();  

$op_hp_spbc1_cat_ar = [];

$op_hp_spbc1_cat_per_page = 5;


$query_op_hp_spbc1_cat_ar = array(

    'post_type' =>  'post', //|page|product...

    'orderby' => 'date',

    'order'               => 'DESC',

     'post_status' => "publish",

    'ignore_sticky_posts' => false,

    'posts_per_page' => (int) -1,

);


$query_op_hp_spbc1_cat = new WP_Query( $query_op_hp_spbc1_cat_ar );



 if ( $query_op_hp_spbc1_cat->have_posts() ) : $i = 1; 

    while ($query_op_hp_spbc1_cat->have_posts() ) : $query_op_hp_spbc1_cat->the_post();


    	if(  count( $op_hp_spbc1_cat_ar ) >= (int) $op_hp_spbc1_cat_per_page ) break;


    	$price = get_post_meta( get_the_ID(), 'p_sp1_in_gia', true); // df
		$sale = get_post_meta( get_the_ID() , 'p_sp1_in_gia2', true); // sale


       
        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 

        		//if (  $sale < 200000 ) {

        			  $op_hp_spbc1_cat_ar[] = get_the_ID();

        		//}


        	} 
      


        
        $i++;
    endwhile;

endif;

wp_reset_postdata();
wp_reset_query();  


//print_r22( $op_hp_spbc1_cat_ar );

?>


<?php unset( $id ) ?>

<?php if ( $op_hp_spbc1_cat_ar ) { $ii = 1; 
		foreach(  $op_hp_spbc1_cat_ar as  $op_hp_spbc1_cat_ars ) : 
			$id = $op_hp_spbc1_cat_ars;
			//echo $id;

?> 

	 <li>
  		 <?php echo p_index_load_data2(array(
  		 	'id' => $id,

  		 )) ?>
	 </li>



<?php endforeach; ?>

<?php } ?>

<?php unset( $id ) ?>



<?php }


// filter ngoai trang chu
function p_data_query1( $id_cat = "" ){ ?>


<?php 
wp_reset_postdata();
wp_reset_query();  

$op_hp_spbc1_cat_ar = [];

// $op_hp_spbc1_cat_ar['min'] = '';

// $op_hp_spbc1_cat_ar['max'] = 0;

$op_hp_spbc1_cat_ar['num'];

$op_hp_spbc1_cat_per_page = 5;


$query_op_hp_spbc1_cat_ar = array(

    'post_type' =>  'post', //|page|product...

    'orderby' => 'date',

    'order'               => 'DESC',

    'post_status' => "publish",

    'ignore_sticky_posts' => false,

    'posts_per_page' => -1,


     'cat'  => (array) $id_cat,

     'update_post_term_cache' => false, 
    'update_post_meta_cache' => false, 
    'nopaging' => true, 



);


$query_op_hp_spbc1_cat = new WP_Query( $query_op_hp_spbc1_cat_ar );

 if ( $query_op_hp_spbc1_cat->have_posts() ) : $i = 1; 

    while ($query_op_hp_spbc1_cat->have_posts() ) : $query_op_hp_spbc1_cat->the_post();


    	//if(  count( $op_hp_spbc1_cat_ar ) >= (int) $op_hp_spbc1_cat_per_page ) break;


    	$price = get_post_meta( get_the_ID(), 'p_sp1_in_gia', true); // df

		$sale =  get_post_meta( get_the_ID() , 'p_sp1_in_gia2', true); // sale


		// echo 'th: ' .  p_wc_pd_check_type2( get_the_ID() ) . "<br/>";

		// echo 'sale: ' . (int) $sale . '<Br/>';

  //      	echo 'price: ' .  (int) $price . "<br/>";



        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 
        		
        		// echo "<br/>";	
        		// echo 'sale:' . get_the_ID()  . ' ' . (int) $sale;
        		// echo "<br/>";


        		// if (  $op_hp_spbc1_cat_ar['min'] > (int) $sale || !empty( $op_hp_spbc1_cat_ar['min'] )  ) {

        		// 	  $op_hp_spbc1_cat_ar['min'] = (int) $sale;

        		// }


        		// if (  $op_hp_spbc1_cat_ar['max'] < (int) $sale  ) {

        		// 	  $op_hp_spbc1_cat_ar['max'] = (int) $sale;

        		// }

				$op_hp_spbc1_cat_ar['num'][] =  (int) $sale;

        	} 

        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 

        		// echo "<br/>";
        		// echo 'price' . get_the_ID()  . ' ' .  (int) $price;
        		// echo "<br/>";

        		// if (  $op_hp_spbc1_cat_ar['min'] > (int) $price || !empty( $op_hp_spbc1_cat_ar['min'] ) ) {

        		// 	  $op_hp_spbc1_cat_ar['min'] = (int) $price;

        		// }


        		// if (  $op_hp_spbc1_cat_ar['max']  < (int) $price  ) {

        		// 	  $op_hp_spbc1_cat_ar['max'] =  (int) $price;

        		// }
        
        		$op_hp_spbc1_cat_ar['num'][] =  (int) $price;

        	}

      		

        
        $i++;
    endwhile;

endif;

wp_reset_postdata();
wp_reset_query();  


$op_hp_spbc1_cat_ar['min'] = min( $op_hp_spbc1_cat_ar['num'] );

$op_hp_spbc1_cat_ar['max'] = max (  $op_hp_spbc1_cat_ar['num']  );

return $op_hp_spbc1_cat_ar;


} 



// san-pham?min=0&max=483000
// loc san pham

function p_data_query2( $ar = '' , $id_cat = "" ){
	$min = isset( $ar['min'] ) ? $ar['min'] : "0";
	$max = isset( $ar['max'] ) ? $ar['max'] : "";

	//p_Minify_Html();
	$max = (int) $max;
	$min = (int) $min;

?>


<?php 
wp_reset_postdata();
wp_reset_query();  

$op_hp_spbc1_cat_ar = [];




$query_op_hp_spbc1_cat_ar = array(

    'post_type' =>  'post', //|page|product...

    'orderby' => 'date',

    'order'               => 'DESC',

    'post_status' => "publish",

    'ignore_sticky_posts' => false,

    'posts_per_page' => -1,


    'cat'  => (array) $id_cat,

 	
     'update_post_term_cache' => false, 
    'update_post_meta_cache' => false, 
    'nopaging' => true, 

);


$query_op_hp_spbc1_cat = new WP_Query( $query_op_hp_spbc1_cat_ar );


 if ( $query_op_hp_spbc1_cat->have_posts() ) : $i = 1; 

    while ($query_op_hp_spbc1_cat->have_posts() ) : $query_op_hp_spbc1_cat->the_post();


    	$price = get_post_meta( get_the_ID(), 'p_sp1_in_gia', true); // df

		$sale =  get_post_meta( get_the_ID() , 'p_sp1_in_gia2', true); // sale


        	if( p_wc_pd_check_type2( get_the_ID() ) == '1' ) {  // sale 
        		
        			      
        		if (  $min <= $sale && $sale <= $max  ) {

        			 $op_hp_spbc1_cat_ar[] = get_the_ID();

        		}


        	} 

        	else if( p_wc_pd_check_type2( get_the_ID() ) == '2' ) {  // regular 


        		if (  $min <= $price && $price <= $max  ) {

        			 $op_hp_spbc1_cat_ar[] = get_the_ID();

        		}


        	}

        	 //$op_hp_spbc1_cat_ar[] = get_the_ID();

      		
        
        $i++;
    endwhile;

endif;

wp_reset_postdata();
wp_reset_query();  


return $op_hp_spbc1_cat_ar;


} ?>
