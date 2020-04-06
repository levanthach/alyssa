<?php



// global $hidden_breadcrum;
// $hidden_breadcrum = true;


?>


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


endif;

//print_r2( $ar_id );

function post_uudai1( $id = "" ){ ?>

<a href="<?php echo get_the_permalink( $id );  ?>">
    <img src="<?php echo p_link_img( "", "",  $id ) ?>" class="img-responsive" alt="img"  />
</a>
<div class="post-description">
    <h3>
        <a href="<?php echo get_the_permalink( $id );  ?>">
            <?php echo get_the_title( $id ) ?>
        </a>
    </h3>
    <div class="post-meta"><?php echo get_the_date('d.m.Y', $id ) ?></div>
    <div class="post-desc">
         <?php echo wp_trim_words( get_the_excerpt( $id ) , 20 , '...' ); ?>
    </div>
</div>


<?php }



?>






<?php get_header() ?>



        <div class="incentives">
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



                <div class="row incentives-featured row-df">


                    <div class="col-sm-6 col-xs-12">

                        <?php if ( $ar_id[0] ) { ?> 

                            <div class="post post-horizontal">
                                <?php echo post_uudai1( $ar_id[0] ) ?>
                            </div>

                        <?php } ?>


                        <?php if ( $ar_id[1] ) { ?> 
                            
                            <div class="post post-horizontal">
                                <?php echo post_uudai1( $ar_id[1] ) ?>
                            </div>

                        <?php } ?>

                    </div>


                    <div class="col-sm-3 col-xs-6">

           
                        <?php if ( $ar_id[2] ) { ?> 

                            <div class="post post-vertical">
                                <?php echo post_uudai1( $ar_id[2] ) ?>
                            </div>

                        <?php } ?>




                    </div>
                    <div class="col-sm-3 col-xs-6">

                        
                        <?php if ( $ar_id[3] ) { ?> 

                            <div class="post post-vertical">
                                <?php echo post_uudai1( $ar_id[3] ) ?>
                            </div>

                        <?php } ?>


                    </div>
                </div>  

                <?php 
                $current_term = get_queried_object();
                $cat_tem_t2_banner = get_field('cat_tem_t2_banner', $current_term );
                ?>

                <?php if (  $cat_tem_t2_banner  ) { ?> 
                <div class="incentives-image">
                   <!--  <a href="#">
                        <img src="<?php echo P_IMG_ALY ?>/incentives.jpg" class="img-responsive" alt="img" />
                        <div class="caption">
                            <h1>CHÀO THÁNG 12</h1>
                            <p>MÙA HOA LAN NỞ - KHUYẾN MÃI 30% KHI MUA HOA ONLINE</p>
                        </div>
                    </a> -->
                     <img src="<?php echo $cat_tem_t2_banner  ?>" class="img-responsive p-w-100pt" alt="img" />
                </div>
                <?php } ?>


                <div class="incentives-list row row-df">
                    <div class="col-md-12 col-lg-9 col-xs-12">
                        <div class="row">


                            <div class="col-sm-6 col-xs-12">


                                <?php if ( $ar_id[4] ) { ?> 

                                    <div class="post post-horizontal">
                                        <?php echo post_uudai1( $ar_id[4] ) ?>
                                    </div>

                                <?php } ?>


                            </div>


                            <div class="col-sm-6 col-xs-12">
                               
                                <?php if ( $ar_id[5] ) { ?> 

                                    <div class="post post-horizontal">
                                        <?php echo post_uudai1( $ar_id[5] ) ?>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="clearfix"></div>


                            <div class="col-sm-6 col-xs-12">
                               
                                <?php if ( $ar_id[6] ) { ?> 

                                    <div class="post post-horizontal">
                                        <?php echo post_uudai1( $ar_id[6] ) ?>
                                    </div>

                                <?php } ?>
                            </div>


                            <div class="col-sm-6 col-xs-12">
                               
                                <?php if ( $ar_id[7] ) { ?> 

                                    <div class="post post-horizontal">
                                        <?php echo post_uudai1( $ar_id[7] ) ?>
                                    </div>

                                <?php } ?>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-12 col-lg-3 col-xs-12">

                        <?php if ( $ar_id[8] ) { ?> 

                            <div class="post post-vertical">
                                <?php echo post_uudai1( $ar_id[8] ) ?>
                            </div>

                        <?php } ?>

                    </div>
                </div>

           <!--      
                <nav class="paging-navigation">
                    <a href="#"><i class="fa fa-angle-double-left"></i></a>
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