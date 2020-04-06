<?php
/*

*/
// global $hidden_breadcrum;
// $hidden_breadcrum = true;
?>
<?php get_header() ?>



<div class="blog-detail">
    <section class="main-content">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">


           <!--      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <span>
                        <a href="http://demo.redi.vn/alyssa/huong-dan-ky-thuat-cham-soc-lan">Trang chủ</a> > 
                        <span class="breadcrumb_last">tin tức</span>
                    </span>
                </div>
 -->
                
                <div class="blog-header">
                    <h1><?php the_title() ?></h1>
                    <span class="blog-meta"><?php echo get_the_date('d.m.Y') ?></span>
                </div>
                <div class="blog-content">
                   <!--  <p>Thông thường khách hàng khi chọn hoa thường đến trực tiếp cửa hàng để ngắm nhìn, chạm vào từng bông hoa cũng như cân nhắc tỉ mỉ trước khi chọn mua. Đây là cả một quá trình của những cảm xúc lâng lâng khó nói thành lời. Nói như vậy không phải phủ nhận việc đặt hoa online lại không mang đến những trải nghiệm tuyệt vời đó. Tuy hiện đại hơn, tiện lợi, tiện ích hơn rất nhiều nhưng đằng sau một click ấy là cả một quá trình tìm kiếm và chọn lựa cái đẹp, trao gửi tâm tình không khác gì khi bạn mua trực tiếp. Cùng Hoa Sài Gòn tìm hiểu ngay những lý do tại sao khách hàng yêu thích đặt hoa online đến như vậy?</p>
                    <img src="<?php echo P_IMG_ALY ?>/blog/featured/1.jpg" class="img-responsive" />
                    <h3>Đặt hoa online giúp bạn gửi yêu thương bất kể mọi không gian, thời gian</h3>
                    <p>
                        Nhìn có vẻ đơn giản như vậy nhưng đặt hoa online lại chứa đựng những tình cảm sâu lắng khi mà những nụ hôn, những cái ôm siết chặt không thể gửi trao bị ngăn cách bởi khoảng cách địa lý.
                        Đặt hoa online còn giúp bạn không bỏ lỡ bất cứ khoảnh khắc tuyệt vời nào dù là ngày lễ, sinh nhật, lễ kỉ niệm, ngày khai trương, ngày cưới hay chỉ đơn giản là một cảm xúc bất chợt bạn nhớ đến ai đó và muốn gửi tặng hoa tặng họ.
                    </p>
                    <h3>Đặt hoa online giúp bạn có nhiều sự lựa chọn tinh tế nhờ những thiết kế có sẵn đặc sắc</h3>
                    <p>Điểm hạn chế lớn nhất của những shop hoa truyền thống đó là mẫu mã chưa phong phú do chúng bị giới hạn về phạm vi trưng bày và không có nhiều thông tin về các loại hoa. Chính điều đó sẽ gây bối rối cho những khách hàng nếu như không am hiểu về hoa cũng như nắm rõ ý nghĩa các loại hoa khiến món quà bạn chọn mua có thể phản tác dụng. Thế nhưng với cửa hàng hoa tươi online thì hoàn toàn khác, các mẫu hoa tươi mới, phong cách đa dạng luôn bắt kịp xu thế cho phép khách hàng lựa chọn phù hợp với nhu cầu và sở thích. Hơn nữa dưới mỗi sản phẩm sẽ có phần mô tả chi tiết về sản phẩm đó cũng như ý nghĩa của từng loại hoa, nguồn gốc, cách trồng hay chăm sóc các loại hoa.</p> -->
                    <?php the_content() ?>
                </div>
               <!--  <div class="blog-share">
                    <ul class="list-unstyled">
                        <li>
                            <div class="addthis_inline_share_toolbox"></div>
                        </li>
                        <li>
                            <div class="fb-like" data-href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                        </li>
                    </ul>
                </div> -->

                <div class="blog-comment">
                <!--     <div class="fb-comments" data-href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan" data-width="100%" data-numposts="5"></div>
 -->
                        <div id="ja-fb-comments" class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-width="100%" data-numposts="10" data-href="<?php echo get_the_permalink() ?>" fb-xfbml-state="rendered"></div>

                </div>
            </div>



            <div class="col-md-4 col-sm-12 col-xs-12 sidebar">


                <?php include get_template_directory() . '/block/block-product-list-related-tin-tuc.php';  ?>

<!-- 
                <div class="widget widget-posts">

                    <h2 class="widget-title">Các tin liên quan</h2>
                    <div class="posts-list">
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/1.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/2.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/3.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/1.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/2.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/3.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                        <div class="item">
                            <img src="<?php echo P_IMG_ALY ?>/blog/1.jpg" class="img-responsive" />
                            <h3><a href="<?php echo home_url() ?>/huong-dan-ky-thuat-cham-soc-lan">Những lý do bạn nên tặng hoa Lavender cho nàng nhân ngày 20/10?</a></h3>
                            <span>10.11.2018</span>
                        </div>
                    </div>
                </div>

 -->

            </div>




        </div>
    </section>
</div>


<?php get_footer() ?>