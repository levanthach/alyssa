<?php
/*
Template names: Template Trang Sản phẩm
Template Post Type: post, page
*/
// global $hidden_breadcrum;
// $hidden_breadcrum = true;
  global $hidden_banner;
  $hidden_banner = true;


$current_term = get_queried_object();
//print_r22( $current_term  );

$current_term_id = $current_term->term_id;
$current_term_taxonomy = $current_term->taxonomy;

$link_tax = get_term_link( $current_term_id ,$current_term_taxonomy  );



?>

<?php get_header('page') ?>


<div>
    <?php
    // echo "Abc";
    // echo "<br/>";
      // $a = p_data_query2( array( 'min' => 0 , "max" => 500000), "1" )  ;


      // print_r2(  $a  );


    ?>


</div>



        <div class="woocommerce-products">
            <section class="main-content">
                <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <span>
                        <a href="/">Trang chủ</a> >
                        <a href="#">Sản phẩm</a> >
                        <span class="breadcrumb_last">Hoa lan hồ điệp</span>
                    </span>
                </div> -->
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="page-header">
                            <h1>
                                <?php echo p_show_title_archive2() ?>
                            </h1>
                        </div>

                        <?php if (  p_show_des_archive2() ) { ?>

                            <div class="p-con-h-auto p-mb-10">
                                <?php echo p_show_des_archive2() ?>

                            </div>

                        <?php } ?>


                        <div class="file1 file1-cat">

                   		   <?php //include get_template_directory() . "/block/block-product-list.php" ?>


                              <?php if ( have_posts() ) :
                                $i = 1;

                                ?>
                                <div class="lst-products lst-products-home1 <?php if ( !empty($_GET['min']) || !empty( $_GET['max'] )  ) { ?>hidden<?php } ?> row">

                                <?php 
                                while (have_posts()) : the_post();

                                   ?>
                                     
                                       <div class="col-md-3 col-sm-4 col-xs-6 item">
                                           <?php 
                                            echo p_index_load_data1(array(
                                                    'id' => get_the_ID(),

                                                 ));
                                            ?>
                                      </div>


                                    <?php 
                                 
                                
                                    $i++;



                                endwhile;
                                ?>

                              </div>

                            <?php 

                                else:

                                    $is_kq = false;
                                    echo t_pll("Hiện tại chưa có sản phẩm", TDM );
                                    

                                endif;
                            ?>
                                

                                <div class="lst-products-home2 hidden">
                                    
                                </div>


                        </div>



                        <div class="file2 hidden">
                           <?php include get_template_directory() . "/block/block-product-list2.php" ?>
                        </div>


                        <div class="pagination-1">
                        <?php if ( $wp_query->max_num_pages > 1 && ( !$_GET['min'] || !$_GET['max'] ) ) { ?>

                            <div class="p-t-c p-mt-20">
                                <?php include get_template_directory() . "/pagination.php" ?>
                            </div>

                        <?php } ?>
                        </div>


                         <div class="pagination-2 hidden">


                         </div>



                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                        <div class="widget product-categories">
                            <h2 class="widget-title">Danh mục sản phẩm</h2>
                            <div class="widget-body">



                                <ul>
                                <?php
                                if( have_rows( "p_sb_cmsp_mn_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
                                    $count_p_sb_cmsp_mn_repeat = count( get_field('p_sb_cmsp_mn_repeat', "option") );
                                ?>

                                <?php 
                                  while( have_rows( "p_sb_cmsp_mn_repeat", "option" ) ): the_row();
                                  
                                    
                                      $p_sb_cmsp_mn_repeat_title = p_acfs_o( "p_sb_cmsp_mn_repeat_title"  );
                                      $p_sb_cmsp_mn_repeat_link = p_acfs_o( "p_sb_cmsp_mn_repeat_link"  );
                                 
                                ?>


                                        <li>
                                          
                                            <a href="<?php echo  $p_sb_cmsp_mn_repeat_link ?>">
                                               <?php echo $p_sb_cmsp_mn_repeat_title ?>
                                             
                                            </a>


                                            <?php
                                            if( have_rows( "p_sb_cmsp_mn_repeat2", "option" )  && function_exists('have_rows') ) : $i = 1;
                                                $count_p_sb_cmsp_mn_repeat2 = count( get_field('p_sb_cmsp_mn_repeat2', "option") );
                                            ?>
                                              <ul>
                                            <?php 
                                              while( have_rows( "p_sb_cmsp_mn_repeat2", "option" ) ): the_row();
                                              
                                                
                                                  $p_sb_cmsp_mn_repeat2_title = p_acfs_o( "p_sb_cmsp_mn_repeat2_title"  );
                                                  $p_sb_cmsp_mn_repeat2_link = p_acfs_o( "p_sb_cmsp_mn_repeat2_link"  );
                                             
                                            ?>


                                                   <li>
                                            <a href="<?php echo  $p_sb_cmsp_mn_repeat_link ?>">
                                               <?php echo $p_sb_cmsp_mn_repeat2_title ?>
                                             
                                            </a>


                                             </li>


                                            <?php
                                              $i++; endwhile;
                                            ?>

                                          </ul>

                                            <?php   endif; ?>


                                         


                                        </li>



                                        

                                <?php
                                  $i++; endwhile;  endif;
                                ?>

                            </ul>


        
                            </div>
                        </div>


                        

                        <?php 
                            $p_data_query1 = p_data_query1(  $current_term_id  ); 
                            //print_r22(  $p_data_query1 )

                            $get_min = isset( $_GET['min'] ) ? $_GET['min'] : "";
                            $get_max = isset( $_GET['max'] ) ? $_GET['max'] : "";

                            //print_r2(  $p_data_query1 );

                            $range_min = $p_data_query1['min'] ? $p_data_query1['min'] : "0";

                            $range_max = $p_data_query1['max'] ? $p_data_query1['max'] : "";

                            if (  $get_min <  $range_min  ) {
                                 $get_min = $range_min;
                            }

                              if (  $get_max >  $range_max ) {
                                 $get_max =  $range_max;
                            }


                            $range_v_min = $get_min ? $get_min : $range_min;

                            $range_v_max = $get_max ? $get_max : $range_max;

                        ?>



                        <div class="widget product-filter">
                            <h2 class="widget-title">Giá</h2>
                            <div class="widget-body">
                                <div id="slider-range"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="number" id="minPrice" step="1000" value="" min="<?php echo $range_v_min ?>" >
                                    </li>
                                    <li>
                                        <input type="number" id="maxPrice" step="1000" value="" min="0" max="<?php echo $range_v_max ?>">
                                    </li>
                                </ul>
                            </div>
                            <button class="v-btn btn-filter-price btn-filter-price1">

                                <i class="fa fa-spinner fa-spin" style="display: none"></i>
                                 Lọc
                            </button>

                            <div class="hidden hidden-link-tax"><?php echo $link_tax ?></div>
                            <div class="hidden hidden-link-tax-id"><?php echo $current_term_id ?></div>
                        </div>

                        <?php if ( !empty($_GET['min']) || !empty( $_GET['max'] )  ) { ?> 

                             <script>
                                
                                jQuery(function($){

                                    $(window).on('load',function() {
                                        $('.btn-filter-price1').click();

                                    })
                                })

                            </script>

                        <?php } ?>
                     
                       
                        <script>



                            jQuery(function($){


                                var range = jQuery("#slider-range");
                                if (range.length) {
                                    range.slider({
                                        range: true,
                                        min: <?php echo $range_min ?>,
                                        max: <?php echo $range_max  ?>,
                                        values: [ <?php echo $range_v_min ?> , <?php echo $range_v_max  ?> ],
                                        step:1000,
                                        slide: function(event, ui) {
                                            jQuery("#minPrice").val(ui.values[0]);
                                            jQuery("#maxPrice").val(ui.values[1]);
                                        }
                                    });
                                    
                                    jQuery("#minPrice").val( jQuery("#slider-range").slider("values", 0) );
                                    jQuery("#maxPrice").val( jQuery("#slider-range").slider("values", 1) );

                                }



                                jQuery("#minPrice").on('change', function(){

                                var vl_min = jQuery(this).attr('value');
                                var vl_max = jQuery("#maxPrice").attr('value');

                                if ( vl_min > vl_max ){
                                    jQuery(this).val( vl_max );
                                }

                                jQuery( "#slider-range" ).slider( "option", "values", [  vl_min,  vl_max ] );


                            })

                                jQuery("#maxPrice").on('change', function(){

                                    var vl_min = jQuery("#minPrice").attr('value');
                                    var vl_max = jQuery(this).attr('value');

                                    if ( vl_min > vl_max ){
                                        jQuery(this).val( vl_min );
                                    }

                                    jQuery( "#slider-range" ).slider( "option", "values", [  vl_min,  vl_max ] );


                                })







                            })

                      

                        </script>


                        <div class="widget widget-testimonial">
                            <h2 class="widget-title">Ý kiến khách hàng</h2>
                            <div class="lst-tes owl-carousel">



                                <?php
                                if( have_rows( "p_sb_cmsp_yk_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
                                    $count_p_sb_cmsp_yk_repeat = count( get_field('p_sb_cmsp_yk_repeat', "option") );
                                ?>

                                <?php 
                                  while( have_rows( "p_sb_cmsp_yk_repeat", "option" ) ): the_row();
                                  
                                    
                                      $p_sb_cmsp_yk_repeat_img = p_acfs_o( "p_sb_cmsp_yk_repeat_img"  );
                                      $p_sb_cmsp_yk_repeat_con = p_acfs_o( "p_sb_cmsp_yk_repeat_con"  );
                                       $p_sb_cmsp_yk_repeat_name = p_acfs_o( "p_sb_cmsp_yk_repeat_name"  );
                                      $p_sb_cmsp_yk_repeat_job = p_acfs_o( "p_sb_cmsp_yk_repeat_job"  );
                                 
                                ?>




                                <div class="item">
                                    <div class="tes-image">
                                        <img src="<?php echo  $p_sb_cmsp_yk_repeat_img ?>" alt="img" />
                                    </div>
                                    <div class="tes-desc">
                                        <div class="tes-comment">
                                            <?php echo  $p_sb_cmsp_yk_repeat_con ?>
                                        </div>
                                        <div class="tes-meta">
                                            <span class="tes-name"><?php echo $p_sb_cmsp_yk_repeat_name ?></span>
                                            <span class="tes-position"><?php echo $p_sb_cmsp_yk_repeat_job ?></span>
                                        </div>
                                    </div>
                                </div>


                                        

                                <?php
                                  $i++; endwhile;  endif;
                                ?>



                            </div>
                        </div>
                        <div class="widget widget-products">
                            <h2 class="widget-title">Sản phẩm khuyến mãi</h2>

                            <ul class="list-unstyled lst-products">
                         	      <?php //include get_template_directory() . "/block/block-product-list-sidebar.php" ?>
                                  <?php echo p_index_load_data_query3() ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>
        </div>

	<?php //include get_template_directory() . "/block/block-giaohang.php" ?>
<?php get_footer() ?>