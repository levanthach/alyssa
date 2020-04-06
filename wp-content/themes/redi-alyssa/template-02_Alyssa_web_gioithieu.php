<?php
/*
Template name: Template Giới thiệu
Template Post Type: page
*/
// global $hidden_breadcrum;
// $hidden_breadcrum = true;
?>
<?php get_header() ?>




<div class="page-about-us">
	
	<section class="main-content">


		<div class="main-header">
			<h1 style="color:#e50015"><?php the_title() ?></h1>
		</div>


		<div class="row">
			
			<div class="col-md-4 col-xs-12 block-image col-md-push-8">
				<img src="<?php echo p_link_img() ?>" class="img-responsive" />
			</div>

			<div class="col-md-8 col-xs-12 col-md-pull-4">
				<div class="block-text p-con-h-auto">
					<!-- <p><span class="img-title"></span> là website trực tuyến hỗ trợ khách hàng gửi tặng hoa tươi nhanh chóng với trải nghiệm chất lượng dịch vụ chuyên nghiệp nhất. Với ưu điểm là mẫu hoa đa dạng giá rẻ hợp túi tiền, chứng tôi từ lâu đã là địa điểm đặt hoa uy tín được nhiều khách hàng lựa chọn khi muốn gửi tặng hoa cho bạn bè, người thân, đối tác v.v… trong các dịp đặc biệt và sự ra đời của Website trực tuyến là một bước tiến mới giúp việc đặt hàng tại chúng tôi trở nên dễ dàng hơn bao giờ hết, hiệu quả nhất và tiết kiệm nhất.</p>
					<p>Với đội ngũ thợ hoa lành nghề cùng quy trình hoạt động chuyên nghiệp, nhanh chóng hợp tác với hàng trăm vườn hoa tươi tại Việt Nam với công nghệ tiên tiến nhất nhằm bảo đảm chất lượng dịch vụ và chất lượng sản phẩm tốt nhất đến khách hàng.</p>
					<p>Website trực tuyến hỗ trợ khách hàng gửi tặng hoa tươi nhanh chóng với trải nghiệm chất lượng dịch vụ chuyên nghiệp nhất. Với ưu điểm là mẫu hoa đa dạng giá rẻ hợp túi tiền chúng tôi từ lâu đã là địa điểm đặt hoa uy tín được nhiều khách hàng lựa chọn khi muốn gửi tặng hoa cho bạn bè, người thân, đối tác v.v… trong các dịp đặc biệt và sự ra đời của Website trực tuyến là một bước tiến mới giúp việc đặt hàng tại website chúng tôi trở nên dễ dàng hơn bao giờ hết, hiệu quả nhất và tiết kiệm nhất.</p>
					<p>Với đội ngũ thợ hoa lành nghề cùng quy trình hoạt động chuyên nghiệp, nhanh chóng hợp tác với hàng trăm vườn hoa tươi tại Việt Nam với công nghệ tiên tiến nhất nhằm bảo đảm chất lượng dịch vụ và chất lượng sản phẩm tốt nhất đến khách hàng.</p> -->
					<?php the_content() ?>
				</div>
			</div>
			
		</div>
	</section>
	<?php include get_template_directory() . "/block/block-customer.php" ?>
	<?php //include get_template_directory() . "/block/block-giaohang.php" ?>
</div>
<?php get_footer() ?>