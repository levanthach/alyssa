<?php

//if ( class_exists('Polylang') ) return;

add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 999 );
 
function add_cpt_to_pll( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // hides 'my_cpt' from the list of custom post types in Polylang settings
        unset( $post_types['duan'] );
        unset( $post_types['thuchanh'] );
        unset( $post_types['media'] );
        unset( $post_types['sukien'] );

    } else {
        // enables language and translation management for 'my_cpt'
        $post_types['duan'] = 'duan';
        $post_types['thuchanh'] = "thuchanh";
        $post_types['media'] = "media";
        $post_types['sukien'] = "sukien";
    }
    return $post_types;
}



add_filter('pll_get_taxonomies', 'add_tax_to_pll', 10, 2);
function add_tax_to_pll($taxonomies, $hide) {
	if ($hide) {

	unset($taxonomies['duan_category']);
	unset($taxonomies['thuchanh_category']);
	unset($taxonomies['media_category']);
	unset($taxonomies['sukien_category']);
	}
	else {
		$taxonomies['duan_category'] = 'duan_category';
		$taxonomies['thuchanh_category'] = 'thuchanh_category';
		$taxonomies['media_category'] = 'media_category';
		$taxonomies['sukien_category'] = 'sukien_category';
	}
	return $taxonomies;
}

