<?php
/**
 * Pagination - Show numbered pagination for catalog pages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) {
	return;
}
?>
<div class="div-pagination">
	<?php

		echo paginate_links( apply_filters( 'ptheme_pagination_args', array(
			'base'         => esc_url_raw( str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false )  ) ),
			'format'       => '',
			'add_args'     => false,
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'prev_text'    => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
			'next_text'    => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
			'type'         => 'list',
			'end_size'     => 3,
			'mid_size'     => 3,

			
			
		) ) );


		//echo get_query_var( 'paged' ) ;


	?>
</div>

<?php if ( is_search() ) { ?> 
<style>
	.li-link_pageni_new_next,
	.li-link_pageni_new_prev{
			display: none !important;
	}
</style>
<?php } ?>


<script type="text/javascript">
	jQuery(function($){
		var prepend_pagi;
		var append_pagi;

		//var link_pagi = $('a.page-numbers').first().attr('href');

		var link_pageni = ptheme.current_page;

		<?php if ( get_query_var( 'paged' ) == 0 ) { ?>

			var link_pageni_new = link_pageni;

			var link_pageni_new_prev = link_pageni_new + '1';

			var link_pageni_new_next = link_pageni_new +  '<?php echo '/page/' . $wp_query->max_num_pages ?>';


		<?php } else { ?>

			var link_pageni_new = link_pageni.substr(0, link_pageni.length-1); 


			var link_pageni_new_prev = link_pageni_new + '1';

			var link_pageni_new_next = link_pageni_new + '<?php echo $wp_query->max_num_pages ?>';


		<?php } ?>
		



		<?php if ( get_query_var( 'paged' )  != 0 ) { ?> 

		prepend_pagi = '<li class="li-link_pageni_new_prev"><a class="page-numbers" href="'+link_pageni_new_prev+'"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>';

		<?php }  ?>


		<?php if ( get_query_var( 'paged' )  != $wp_query->max_num_pages ) { ?> 

		append_pagi = '<li class="li-link_pageni_new_next"><a class="page-numbers" href="'+link_pageni_new_next+'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>';

		<?php } ?>


		$('.div-pagination>ul.page-numbers').prepend(prepend_pagi);
		$('.div-pagination>ul.page-numbers').append(append_pagi);
	})

</script>


