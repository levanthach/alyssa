<?php
/*

*/
global $hidden_breadcrum;
$hidden_breadcrum = true;
// global $hidden_banner;
// $hidden_banner = true;
?>
<?php get_header() ?>


<div class="sect-duan-detail p-ptb-100 p991-ptb-20 p991-ptb-10">
	<div class="container">
		<h1 class="heading-sect text-center p-up"><?php the_title(); ?></h1>
		<div class="line-heading-sect-center p-mtb-20"></div>
		<div class="full-des">
	
			<?php the_content()  ?>

	

		</div>
		


		
	</div>
</div>

<?php get_footer() ?>