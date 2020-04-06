<?php
/*
	acf create page
*/
if( ! class_exists('ACF') ) return;

//if ( p_get_current_user_role() == "subscriber" ) return;

// create page

acf_add_options_page(array(
	'page_title' 	=> 'PAGE Option',
	'menu_title'	=> 'PAGE Option',
	'menu_slug' 	=> 'p-option-page',
	'capability'	=> 'edit_posts',
	'redirect'		=> admin_url('admin.php?page=page_option') ,
));

acf_add_options_sub_page(array(
	'page_title' 	=> 'PAGE Option',
	'menu_title'	=> 'PAGE Option',
	'menu_slug' 	=> 'page_option',
	'parent_slug'	=> 'p-option-page',
));


// acf_add_options_sub_page(array(
// 	'page_title' 	=> 'Header',
// 	'menu_title'	=> 'Header',
// 	'menu_slug' 	=> 'header',
// 	'parent_slug'	=> 'p-option-page',
// ));


acf_add_options_sub_page(array(
	'page_title' 	=> 'HomePage',
	'menu_title'	=> 'HomePage',
	'menu_slug' 	=> 'homepage',
	'parent_slug'	=> 'p-option-page',
));


acf_add_options_sub_page(array(
	'page_title' 	=> 'Banner',
	'menu_title'	=> 'Banner',
	'menu_slug' 	=> 'banner',
	'parent_slug'	=> 'p-option-page',
));


acf_add_options_sub_page(array(
	'page_title' 	=> 'Chi tiết sản phẩm',
	'menu_title'	=> 'Chi tiết sản phẩm',
	'menu_slug' 	=> 'chi-tiet-san-pham',
	'parent_slug'	=> 'p-option-page',
));




acf_add_options_sub_page(array(
	'page_title' 	=> 'Sidebar Chuyên mục sản phẩm',
	'menu_title'	=> 'Sidebar Chuyên mục sản phẩm',
	'menu_slug' 	=> 'sidebar-chuyen-muc-san-pham',
	'parent_slug'	=> 'p-option-page',
));



acf_add_options_sub_page(array(
	'page_title' 	=> 'Link',
	'menu_title'	=> 'Link',
	'menu_slug' 	=> 'link',
	'parent_slug'	=> 'p-option-page',
));



acf_add_options_sub_page(array(
    'page_title'    => 'Footer',
    'menu_title'    => 'Footer',
    'menu_slug' 	=> 'footer',
    'parent_slug'   => 'p-option-page',
));



