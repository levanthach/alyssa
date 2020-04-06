<?php
/*
Template name: Template liên hệ
Template Post Type: page
*/

// global $hidden_breadcrum;
// $hidden_breadcrum = true;

// global $hidden_banner;
// $hidden_banner = true;
?>
<?php get_header() ?>



<div class="contact-us">
    <section class="main-content">
        
     <!--    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <span>
                <a href="<?php echo home_url() ?>">Trang chủ</a> > 
                <span class="breadcrumb_last">liên hệ</span>
            </span>
        </div>
 -->
        <div class="main-header">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="contact-info">
                    <h3>
                        <!-- ALYSSA ORCHIDS -->
                        <?php echo p_acf_pp('p_lh1_title') ?>
                    </h3>
                    <ul class="list-unstyled">

                        <?php
                            if( have_rows( "p_lh1_repeat" )  && function_exists('have_rows') ) : $i = 1;
                                $count_p_lh1_repeat = count( get_field('p_lh1_repeat') );
                            ?>

                            <?php 
                              while( have_rows( "p_lh1_repeat") ): the_row();
                              
                                  $p_lh1_repeat_icon = p_acfs_pp( "p_lh1_repeat_icon"  );
                                  $p_lh1_repeat_con =  p_acfs_pp( "p_lh1_repeat_con"  );
                             
                            ?>

                               <li><i class="fa <?php echo $p_lh1_repeat_icon ?>"></i> <?php echo  $p_lh1_repeat_con ?></li>
                                
                            <?php
                              $i++; endwhile;  endif;
                        ?>



<!-- 
                        <li><i class="fa fa-map-marker"></i> 51 Xa Lộ Hà Nội, Phường Thảo Điền Quận 2, TP.HCM</li>
                        <li><i class="fa fa-phone"></i> <a href="tel:0908381830">090 838 18 30</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:dathoa@hoaalyssa.com">dathoa@hoaalyssa.com</a></li> -->



                    </ul>
                </div>
                <div class="maps">
                    <!-- <a href="#"> -->
                      <!--   <img src="<?php echo P_IMG_ALY ?>/maps.jpg" class="img-responsive" /> -->
              <!--       </a> -->
                        <?php echo get_field('google_map', 'option') ?>

                </div>

                <style>
                    .maps iframe{
                        width: 100%;

                    }
                </style>
            </div>


            <div class="col-sm-6 col-xs-12">
                <div class="contact-form">
                    <h3>Liên hệ với chúng tôi</h3>

                    <div role="form" class="wpcf7" id="wpcf7-f42754-o1" lang="en-US" dir="ltr">
                       <!--  <form action="/#wpcf7-f42754-o1" method="post" class="wpcf7-form" novalidate="novalidate">

                            <p><span class="wpcf7-form-control-wrap"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" aria-required="true" aria-invalid="false" placeholder="Họ và tên"></span></p>
                            <p><span class="wpcf7-form-control-wrap"><input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control" aria-required="true" aria-invalid="false" placeholder="Số điện thoại"></span></p>
                            <p><span class="wpcf7-form-control-wrap"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" aria-required="true" aria-invalid="false" placeholder="Email"></span> </p>
                            <p><span class="wpcf7-form-control-wrap"><input type="text" name="your-subject" value="" placeholder="Tiêu đề" class="wpcf7-form-control" aria-required="true" aria-invalid="false"></span></p>
                            <p><span class="wpcf7-form-control-wrap"><textarea name="your-message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nội dung liên hệ"></textarea></span></p>
                            <p><input type="submit" value="Gửi đi" class="wpcf7-form-control wpcf7-submit"></p>
                        </form> -->

                        <?php 

                            if ( is_localhost() ) {

                                echo do_shortcode('[contact-form-7 id="5" title="Form liên hệ 1"]');

                            } else {

                                 echo do_shortcode('[contact-form-7 id="5" title="Form liên hệ 1"]');

                            }


                         ?>


                    </div>


                </div>
            </div>


        </div>
    </section>
</div>




<?php get_footer() ?>