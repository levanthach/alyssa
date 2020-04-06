<?php
/*
Footer template
*/
?>
<div class="clearfix"></div>
<?php do_action('p_before_footer') ?>
<?php
$tablink['tab-link'] = [0,
"Thiết kế logo",
"Thiết kế thương hiệu",
"Nhận diện thương hiệu",
"Chụp ảnh sự kiện",
"Viết câu chuyện thương hiệu",
"Chụp  ảnh doanh nhân",
"Quay video thương hiệu",
"Chụp ảnh sản phẩm"
];
$dv['dv'] = [0,
"Đôi nét về Châu Khổng Media",
"Các gói dịch vụ giải pháp",
"Khách hàng nói gì về chúng tôi",
"Các dự án đã tham gia",
"Tin tức & sự kiện",
"Các hông tin liên hệ"

];
?>




<div class="clearfix"></div>
<section class="main-shipper">

      <img src="<?php echo P_IMG_ALY ?>/img-shipper.jpg" class="img-responsive p-w-100pt" />





      <div class="block-shipper">
          <div class="container">
              <div class="row">

                  <?php
                if( have_rows( "op_fo_gh_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
                    $count_op_fo_gh_repeat = count( get_field('op_fo_gh_repeat', "option") );
                ?>

                <?php 
                  while( have_rows( "op_fo_gh_repeat", "option" ) ): the_row();
                  
                      $op_fo_gh_repeat_title = p_acfs_o( "op_fo_gh_repeat_title"  );
                      $op_fo_gh_repeat_con = p_acfs_o( "op_fo_gh_repeat_con"  );
                    
                ?>

                  <div class="col-sm-4 col-xs-12">
                      <div class="block-text">
                          <h3><?php echo $op_fo_gh_repeat_title ?></h3>
                          <p><?php echo $op_fo_gh_repeat_con; ?></p>
                      </div>
                  </div>
                      

                  <?php if ( $i % 3 == 0  ) {?><div class="clearfix"></div><?php } ?>

                <?php
                  $i++; endwhile;  endif;
                ?>

<!-- 
                  <div class="col-sm-4 col-xs-12">
                      <div class="block-text">
                          <h3>- Giao hàng miễn phí -</h3>
                          <p>Chúng tôi giao hàng nội thành TP.HCM miễn phí</p>
                      </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                      <div class="block-text">
                          <h3>- Hoàn lại tiền 100% -</h3>
                          <p>Nếu sản phẩm hoa bị lỗi hoặc không đúng</p>
                      </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                      <div class="block-text">
                          <h3>- Hỗ trợ 24/7 -</h3>
                          <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn</p>
                      </div>
                  </div>

 -->

              </div>
          </div>
      </div>



  </section>


<div class="clearfix"></div>


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12 footer-about">
        <div class="widget">
          <div class="footer-logo">
            <img src="<?php echo p_acf_o("logo_fo") ?>" class="img-responsive" alt="img" />
          </div>


          <div class="about-us">
            <?php echo p_acf_o("op_fo_tt_con") ?>
          </div>

          
          <ul class="widget-social">

              <?php
            if( have_rows( "op_fo_snn_repeat", "option" )  && function_exists('have_rows') ) : $i = 1;
                $count_op_fo_snn_repeat = count( get_field('op_fo_snn_repeat', "option") );
            ?>

            <?php 
              while( have_rows( "op_fo_snn_repeat", "option" ) ): the_row();
              
                  $op_fo_snn_repeat_icon = p_acfs_o( "op_fo_snn_repeat_icon"  );
                  $op_fo_snn_repeat_link = p_acfs_o( "op_fo_snn_repeat_link"  );
                  // $op_fo_snn_repeat_link = p_acfs_o( "op_fo_snn_repeat_link"  );
             
            ?>


            
                    <li>
                      <a href="<?php echo $op_fo_snn_repeat_link ?>">
                        <i class="fa <?php echo $op_fo_snn_repeat_icon ?>"></i>
                      </a>
                    </li>

               
                

            <?php
              $i++; endwhile;  endif;
            ?>

<!-- 
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
 -->


          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-4 col-xs-12 footer-menu">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="footer-widget menu-list">
                <h4><?php echo p_acf_o("op_fo_icon_titles2") ?></h4>
              <ul>


                   <?php
                    if( have_rows( "op_fo_menu_repeat2", "option" )  && function_exists('have_rows') ) : $i = 1;
                        $count_op_fo_menu_repeat2 = count( get_field('op_fo_menu_repeat2', "option") );
                    ?>

                    <?php 
                      while( have_rows( "op_fo_menu_repeat2", "option" ) ): the_row();
                      
                          $op_fo_menu_repeat2_title = p_acfs_o( "op_fo_menu_repeat2_title"  );
                          $op_fo_menu_repeat2_link = p_acfs_o( "op_fo_menu_repeat2_link"  );
                          // $op_fo_menu_repeat2_link = p_acfs_o( "op_fo_menu_repeat2_link"  );
                     
                    ?>


                    
                            <li>
                              <a href="<?php echo  $op_fo_menu_repeat2_link ?>">
                                  <?php echo $op_fo_menu_repeat2_title ?>
                              </a>
                            </li>
                       
                        

                    <?php
                      $i++; endwhile;  endif;
                    ?>


<!-- 
                <li><a href="<?php echo home_url() ?>">Trang chủ</a></li>
                <li><a href="<?php echo home_url() ?>/gioi-thieu">Giới thiệu</a></li>
                <li><a href="<?php echo home_url() ?>/san-pham">Hoa lan hồ điệp</a></li>
                <li><a href="<?php echo home_url() ?>/uu-dai">Ưu đãi</a></li>
                <li><a href="<?php echo home_url() ?>/tin-tuc">Tin tức</a></li>
                <li><a href="<?php echo home_url() ?>/lien-he">Liên hệ</a></li> -->


              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="footer-widget">
              <h4><?php echo p_acf_o("op_fo_icon_titles3") ?></h4>
              <ul>


                          <?php
            if( have_rows( "op_fo_menu_repeat3", "option" )  && function_exists('have_rows') ) : $i = 1;
                $count_op_fo_menu_repeat3 = count( get_field('op_fo_menu_repeat3', "option") );
            ?>

            <?php 
              while( have_rows( "op_fo_menu_repeat3", "option" ) ): the_row();
              
                  $op_fo_menu_repeat3_title = p_acfs_o( "op_fo_menu_repeat3_title"  );
                  $op_fo_menu_repeat3_link = p_acfs_o( "op_fo_menu_repeat3_link"  );
                  // $op_fo_menu_repeat3_link = p_acfs_o( "op_fo_menu_repeat3_link"  );
             
            ?>


            
                    <li>
                      <a href="<?php echo  $op_fo_menu_repeat3_link ?>">
                          <?php echo $op_fo_menu_repeat3_title ?>
                      </a>
                    </li>
               
                

            <?php
              $i++; endwhile;  endif;
            ?>
<!-- 


                <li><a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Hoa sinh nhật, hoa tình yêu (Giao hoa tận nơi)</a></li>
                <li><a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Hoa cưới</a></li>
                <li><a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Hoa chia buồn, hoa tang lễ</a></li>
                <li><a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Hoa khai trương, hoa chúc mừng</a></li>
                <li><a href="<?php echo home_url() ?>/san-pham/hoa-cao-cap">Thiết kế hoa sự kiện</a></li>
 -->


              </ul>
            </div>
          </div>
        </div>


        <div class="copyright hidden-xs">
          Copyright © 2018 <a href="<?php echo home_url() ?>">ALYSSA ORCHIDS</a> POWERED BY
           <a href="https://redi.vn/" rel="nofollow" class="" target="_blank" title="Thiết kế website chuẩn Marketing">Redi</a>   
        </div>
      </div>



      <div class="col-md-3 col-sm-4 col-xs-12 footer-contact">
        <div class="footer-widget">
          <h4><?php echo p_acf_o("op_fo_icon_title4") ?></h4>
          <ul>


            <?php
              if( have_rows( "op_fo_ttlh_repeat3", "option" )  && function_exists('have_rows') ) : $i = 1;
                  $count_op_fo_ttlh_repeat3 = count( get_field('op_fo_ttlh_repeat3', "option") );
              ?>

              <?php 
                while( have_rows( "op_fo_ttlh_repeat3", "option" ) ): the_row();
                
                    $op_fo_ttlh_repeat3_icon = p_acfs_o( "op_fo_ttlh_repeat3_icon"  );
                    $op_fo_ttlh_repeat_con3 = p_acfs_o( "op_fo_ttlh_repeat_con3"  );
                    // $op_fo_ttlh_repeat_con3 = p_acfs_o( "op_fo_ttlh_repeat_con3"  );
               
              ?>


                <li><i class="fa <?php echo $op_fo_ttlh_repeat3_icon ?>"></i> 
                    <?php echo $op_fo_ttlh_repeat_con3 ?>
                </li>
                 
                  

              <?php
                $i++; endwhile;  endif;
              ?>





      <!--       <li><i class="fa fa-map-marker"></i> 51 Xa Lộ Hà Nội, Phường Thảo Điền, Quận 2, TP.HCM</li>
            <li><i class="fa fa-phone"></i> <a href="tel:0908381830">090 838 18 30</a></li>
            <li><i class="fa fa-envelope"></i> <a href="mailto:dathoa@hoaalyssa.com">dathoa@hoaalyssa.com</a></li>
 -->

          </ul>
        </div>
        <div class="opening"> 
          <?php echo p_acf_o("op_fo_tgmc_con") ?>
<!-- 
          <h5>Giờ mở cửa</h5>
          <p>Thứ 2 - Chủ nhật <span>8:00 - 20:00</span></p> -->


        </div>
      </div>
    </div>
    <div class="copyright-mobile">
      Copyright © 2018 
      <a href="<?php echo home_url() ?>">ALYSSA ORCHIDS</a> POWERED BY 
       <a href="https://redi.vn/" rel="nofollow" class="" target="_blank" title="Thiết kế website chuẩn Marketing">Redi</a>   
    </div>
  </div>
</footer>
<?php wp_footer() ?>
<?php//include get_template_directory() . '/popup.php'; ?>
<?php do_action("p_add_code_end_body") ?>
<?php //include get_template_directory() . '/af_body.php'; ?>
</body>
</html>