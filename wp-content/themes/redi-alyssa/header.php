<?php
// if ( !is_localhost() ) {
// // return;
// exit;
// }
?>



<!DOCTYPE html>
<html <?php language_attributes() ?> data-user-agent="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="<?php echo p_acf_o("logo_favicon") ?>" sizes="16x16" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php if ( is_singular() && pings_open( get_queried_object())) { ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php } ?>
        <!-- Yoast seo build title,description. (No code title,des,keywords)  -->
        <?php wp_head(); ?>
        <?php do_action("p_add_code_head") ?>
        
    </head>
    <body <?php body_class() ?> id="body-top">
        <?php do_action("p_add_code_start_body") ?>
        <?php //include get_template_directory() . '/pre_body.php'; ?>
        

<?php  if ( is_home() ) { ?> 


        <header class="header">
            <div class="header-homepage">
                <div class="header-top">
                    <div class="menu-left">
                        <a href="tel:<?php echo p_clear_phone( p_acf_o("sdt_1") ) ?>" class="hotline"><i class="fa fa-phone"></i><?php echo  p_acf_o("sdt_1")  ?></a>
                    </div>
                    <div class="menu-right">

                        <form class="form-search" action="<?php echo esc_url( home_url() ); ?>">
                            <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm" name="s" required="">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>


                    </div>
                </div>
                <div class="header-bottom">
                    <nav class="navbar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <i class="fa fa-bars"></i>
                            </button>
                            <a href="<?php echo home_url() ?>" class="navbar-brand">
                                <img src="<?php echo p_acf_o("logo_header") ?>" class="img-responsive" />
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar">
                         <!--    <ul class="nav navbar-nav">
                                <li class="current-menu-item"><a href="about.html">Giới thiệu</a></li>
                                <li><a href="product.html">Hoa lan hồ điệp</a></li>
                                <li><a href="product.html">Hoa cao cấp</a></li>
                                <li><a href="product.html">Hoa kiểu bonsai</a></li>
                                <li><a href="incentives.html">Ưu đãi</a></li>
                                <li><a href="blog.html">Tin tức</a></li>
                                <li><a href="contact.html">Liên hệ</a></li>
                            </ul>

 -->

                        <?php
                                // menu primary2
                                $menu_primary = wp_nav_menu( array(
                                    'theme_location'  => 'primary',
                                    'menu_class'      => 'nav navbar-nav',
                                    'container'       => '',
                                    //'walker'          => new Ptheme_Walker_Nav_Mobile(),
                                    'echo'   => false
                                ) );
                                echo $menu_primary;
                        ?>



                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>





        <?php
              if( have_rows( "op_banner_repeat" , "option" )  && function_exists('have_rows') ) : $i = 1;

        ?>

                <?php 
                    while( have_rows( "op_banner_repeat" , "option") ): the_row();
                     

                       $op_banner_repeat_img = p_acfs_o( "op_banner_repeat_img" , p_link_img_placeholder() );

                        $op_banner_repeat_img_banner = p_acfs_o( "op_banner_repeat_img_banner"  );



                   
                  ?>
                    

                     <?php if ( empty( $op_banner_repeat_img_banner ) ) { ?> 

                        <img src="<?php echo $op_banner_repeat_img ?>" alt="" class="img-responsive p-w-100pt" />

                    <?php } else { ?> 

                         <img src="<?php echo $op_banner_repeat_img ?>" alt="" class="img-responsive p-w-100pt hidden-xs" />

                         <img src="<?php echo $op_banner_repeat_img_banner ?>" alt="" class="img-responsive p-w-100pt visible-xs" />

                    <?php } ?>



            
                  <?php
                    $i++; endwhile; 
                  ?>

             
        <?php  endif; ?>


                
            </header>
            
            <?php
            /*
                @hooked p_add_breadcrum() - 10
            */
            do_action('p_after_header') ?>







<?php } else { ?> 


     <header class="header header-page">
            <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="<?php echo home_url() ?>" class="navbar-brand">
                        <img src="<?php echo p_acf_o("logo_header") ?>" class="img-responsive" />
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                    <div class="header-top hidden-xs">
                        <ul class="list-unstyled">
                            <li><a href="tel:<?php echo p_clear_phone( p_acf_o("sdt_1") ) ?>" class="hotline"><i class="fa fa-phone"></i><?php echo p_acf_o("sdt_1"); ?></a></li>
                            <li>
                                <form class="form-search" action="<?php echo esc_url( home_url() ); ?>">
                                    <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm" name="s" required="">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
              <!--       <ul class="nav navbar-nav">
                        <li><a href="about.html">Giới thiệu</a></li>
                        <li class="current-menu-item"><a href="product.html">Hoa lan hồ điệp</a></li>
                        <li><a href="product.html">Hoa cao cấp</a></li>
                        <li><a href="product.html">Hoa kiểu bonsai</a></li>
                        <li><a href="incentives.html">Ưu đãi</a></li>
                        <li><a href="blog.html">Tin tức</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
 -->

                        <?php
                                // menu primary2
                                $menu_primary = wp_nav_menu( array(
                                    'theme_location'  => 'primary',
                                    'menu_class'      => 'nav navbar-nav',
                                    'container'       => '',
                                    //'walker'          => new Ptheme_Walker_Nav_Mobile(),
                                    'echo'   => false
                                ) );
                                echo $menu_primary;
                    ?>



                </div><!-- /.navbar-collapse -->
            </nav>




            <?php p_add_banner2() ?>



        </header>
            
<?php
/*
    @hooked p_add_breadcrum() - 10
*/
do_action('p_after_header') ?>

<?php } ?>