<?php
/*

*/
// global $hidden_breadcrum;
// $hidden_breadcrum = true;
?>
<?php get_header() ?>



<?php
$ar_id = [];

if ( have_posts() ) :
    $i = 1;
    while (have_posts()) : the_post();

       $ar_id[] = get_the_ID();

       // the_title();
       // echo "<br/>";
        
       //  $i++;

    endwhile;

else:
      ?>




    <div class="blog">
        <section class="main-content">

            
            <div class="main-header">
                <h1><?php echo p_show_title_archive2() ?></h1>
            </div>

            <div class="p-t-c p-fs-20 p-bold p-mt-20 p-mb-50">
                
                <?php if (  is_search() ) { ?> 
                        Không tìm thấy kết quả !


                  <?php } else { ?>
                        Chưa có bài viết nào !

                  <?php } ?>

            </div>

       </section>

    </div>


    <?php 


    get_footer();  
    exit;

endif;

//print_r2( $ar_id );


  



?>



    <div class="blog">
        <section class="main-content">

            
            <div class="main-header">
                <h1><?php echo p_show_title_archive2() ?></h1>
            </div>

            <?php if ( p_show_des_archive2() ) { ?>
                <div class="p-mtb-20">
                    ssadsad
                    <?php echo p_show_des_archive2() ?>
                </div>
             <?php } ?>





            <div class="row blog-featured">



                <div class="col-sm-6 col-xs-12">

                   <?php if (  $ar_id[0] ) { ?> 

                      <div class="blog-large">
                          <a href="<?php echo get_the_permalink( $ar_id[0] ); ?>">
                             <!--  <img src="<?php echo p_link_img("","",$ar_id[0] )  ?>" class="img-responsive" alt="img" /> -->

                              <div style="background: url('<?php echo p_link_img( '', '', $id )  ?>') no-repeat center/cover;padding-top: calc(100% / ( 712 / 445 ));">
                              </div>


                          </a>
                          <div class="caption">
                              <a href="<?php echo get_the_permalink( $ar_id[0] ); ?>">
                                   <?php echo get_the_title( $ar_id[0] ) ?>
                              </a> 
                              <span><?php echo get_the_date('d.m.Y', $ar_id[0] ) ?></span>
                          </div>
                      </div>

                    <?php } ?>


                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="blog-list">

                        <?php //echo count($ar_id) ; ?>

                       <?php if ( count($ar_id) >= 2  ) { ?>

                            <?php $i = 1; foreach( $ar_id as $ar_ids ) { ?> 

                                <?php if( 1 < $i && $i <= 4 ) { ?> 

                                <div class="item">
                                    <a href="<?php echo get_the_permalink( $ar_ids ) ?>">
                                      
                                         <img src="<?php echo p_link_img("","",$ar_ids )  ?>" class="img-responsive" alt="img" />

                                    <!--   <div style="max-width:260px;width:100%;display:inline-block;background: url('<?php echo p_link_img( '', '', $ar_ids )  ?>') no-repeat center/cover;padding-top: calc(100% / ( 200 / 135 ));">
                                      </div> -->
                                    
                                  <!--     -->


                                    </a>
                                    <div class="caption">
                                        <h3><a href="<?php echo get_the_permalink( $ar_ids ) ?>">
                                            <?php echo get_the_title( $ar_ids ) ?>
                                        </a></h3>
                                        <span><?php echo get_the_date('d.m.Y', $ar_ids ) ?></span>
                                        <div class="desc">
                                           <?php echo wp_trim_words( get_the_excerpt( $ar_ids ) , 10 , '...' ); ?>
                                        </div>
                                    </div>
                                </div>  

                                <?php } ?>

                            <?php $i++; } ?>


                       <?php } ?>

        

                    </div>
                </div>


            </div>



            <div class="row blog-items">



               <?php if ( count($ar_id) >= 5  ) { ?>

                    <?php $i = 1; foreach( $ar_id as $ar_ids ) { ?> 

                        <?php if( $i >= 5  ) { ?> 

                       <div class="col-md-3 col-sm-4 col-xs-6">


                              <div class="blog-item">
                                <a href="<?php echo get_the_permalink( $ar_ids ) ?>">
                                  
                                    <!--  <img src="<?php echo p_link_img("","",$ar_ids )  ?>" class="img-responsive" alt="img" /> -->

                                   <div style="background: url('<?php echo p_link_img( '', '', $ar_ids )  ?>') no-repeat center/cover;padding-top: calc(100% / ( 340 / 235 ));">
                                  </div> 
                                
                              <!--     -->


                                </a>


                                <div class="caption">
                                    <h3><a href="<?php echo get_the_permalink( $ar_ids ) ?>">
                                        <?php echo get_the_title( $ar_ids ) ?>
                                    </a></h3>
                                    <span><?php echo get_the_date('d.m.Y', $ar_ids ) ?></span>
                                    <div class="desc">
                                       <?php echo wp_trim_words( get_the_excerpt( $ar_ids ) , 30 , '...' ); ?>
                                    </div>
                                </div>


                             </div> 


                           </div>


                        <?php } ?>

                    <?php $i++; } ?>


               <?php } ?>





         <!--    <nav class="paging-navigation">
                <a href=""><i class="fa fa-angle-double-left"></i></a>
                <a href="#"><i class="fa fa-angle-left"></i></a>
                <a href="#">1</a>
                <a href="#">2</a>
                <span>3</span>
                <a href="#">4</a>
                <a href="#"><i class="fa fa-angle-right"></i></a>                                    
                <a href="#"><i class="fa fa-angle-double-right"></i></a>
            </nav> -->

            <div class="pagination-1s p-mb-20">
            <?php if ( $wp_query->max_num_pages > 1 ) { ?>

                <div class="p-t-c p-mt-20">
                    <?php include get_template_directory() . "/pagination.php" ?>
                </div>

            <?php } ?>
            </div>



        </section>
    </div>
 



<?php get_footer() ?>