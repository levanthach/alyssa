<?php
// Load css
add_action('wp_enqueue_scripts','p_load_css');
if(!function_exists('p_load_css')){
    function p_load_css(){

        //$css_ran = '1.0';
        $css_ran = rand(1000,100000);

        wp_enqueue_style('normalize',P_LIB . '/normalize/normalize-4.2.0.css');
        wp_enqueue_style('bootstrap-css',P_LIB . '/bootstrap-3.3.7/css/bootstrap.min.css');

         wp_enqueue_style('font1', "https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=vietnamese");


        //wp_enqueue_style('jquery-ui-css',P_LIB . '/jquery/jquery-ui.min.css');

        wp_enqueue_style('font-awesome',P_LIB . '/font-awesome-4.7.0/css/font-awesome.min.css');

        wp_enqueue_style('animate',P_LIB . '/animated/animate-3.5.2.css');
        // wp_enqueue_style('galleylist', P_LIB . '/gallerylist/css/lightgallery.css');
        wp_enqueue_style('lightbox-css', P_LIB . '/simpleLightbox/simplelightbox.css');
         // wp_enqueue_style('zoomple-master-css', P_LIB . '/zoomple-master/zoomple.css');
        wp_enqueue_style('modalvideo',P_LIB . '/modalvideo/css/modal-video.min.css');

        wp_enqueue_style('owl-min', P_LIB . '/owlcarousel2-2.2.1/owl.carousel.min.css');
        wp_enqueue_style('owl-themes', P_LIB . '/owlcarousel2-2.2.1/owl.theme.default.min.css');


    
        wp_enqueue_style('pcss', P_SCSS . '/pcss.css');       

        wp_enqueue_style('style-css',P_SCSS . '/style.css', '', $css_ran );

        wp_enqueue_style('style2-css',P_SCSS2 . '/style2.css', '', $css_ran );


         wp_enqueue_style('style-css-mod',P_SCSS . '/a/style-mod.css', '', $css_ran );

        // customer
       // wp_enqueue_style('style-custom',P_CSS . '/style-custom.css','',$css_ran);

        

    }
}   

// Load Js
add_action('wp_enqueue_scripts','p_load_js');
if(!function_exists('p_load_js')){
    function p_load_js(){
        global $wp_scripts,$wp;

        //$js_ran = '1.0';
        $js_ran = rand(1000,100000000);


        wp_enqueue_script('html5shiv', P_LIB . '/html5/html5shiv-printshiv.min.js');
        $wp_scripts->add_data("html5shiv", "conditional", "lt IE 9"); 

        wp_enqueue_script('respond', P_LIB . '/html5/respond.min.js');
        $wp_scripts->add_data("respond", "conditional", "lt IE 9"); 


        // js header
        
        // wp_enqueue_script('jquery-1-91', P_LIB . '/jquery/jquery-1.9.1.min.js',array('jquery'),'1.0');
        wp_enqueue_script('jquery-ui', P_LIB . '/jquery/jquery-ui.min.js',array('jquery'),'1.0');
        wp_enqueue_script('boostrap-js', P_LIB . '/bootstrap-3.3.7/js/bootstrap.min.js',array('jquery'),'1.0');
        wp_localize_script( "boostrap-js", "p", p_var_ar());

        wp_enqueue_script('js-add-functions', P_ASSETS . '/js/js-add-functions.js',array('jquery'),'1.0');

        //wp_enqueue_script('is-mobile',P_LIB . '/ismobile/is_mobile.js',array('jquery'),'1.0');




        // js footer
        wp_enqueue_script('owl-js', P_LIB . '/owlcarousel2-2.2.1/owl.carousel.min.js',array('jquery'),'1.0',true);



        wp_enqueue_script('wow.min',P_LIB . '/wow/wow.min.js',array('jquery'),'1.0', true);
        // wp_enqueue_script('galleylist',P_LIB . '/gallerylist/js/lightgallery-all.min.js',array('jquery'),'1.0', true);
        wp_enqueue_script('lightbox-js',P_LIB . '/simpleLightbox/simple-lightbox.min.js',array('jquery'),'1.0', true);
        // wp_enqueue_script('elevatezoom-master-js',P_LIB . '/elevatezoom-master/jquery.elevatezoom.js',array('jquery'),'1.0', true)
       
         wp_enqueue_script('modalvideo',P_LIB. '/modalvideo/js/jquery-modal-video.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('jquery.matchHeight-min',P_LIB . '/jquery/jquery.matchHeight-min.js',array('jquery'),'1.0', true);

        //wp_enqueue_script('jquery.ac-form-field-repeater',P_LIB . '/jquery/jquery.ac-form-field-repeater.js',array('jquery'),'1.0', true);

          wp_enqueue_script('scroll-top',P_ASSETS . '/js/scroll_top.js',array('jquery'), $js_ran , true);

          wp_enqueue_script('style-js-np', P_ASSETS . '/js/style-np.js',array('jquery'), $js_ran , true);

          wp_enqueue_script('style-js', P_ASSETS . '/js/style.js',array('jquery'),$js_ran , true);
          wp_enqueue_script('style2-js', P_ASSETS . '/js/style2.js',array('jquery'),$js_ran , true);

          wp_enqueue_script('style-sub', P_INC . '/subscription/style-sub.js' ,array('jquery'),$js_ran , true);  
           

        wp_enqueue_script('style-js-custom', P_ASSETS . '/js/style-custom.js',array('jquery'), $js_ran , true);

         wp_enqueue_script('style-js-lienhe', P_ASSETS . '/js/style-lienhe.js',array('jquery'), $js_ran , true);

           wp_enqueue_script('style-js-thuvien', P_ASSETS . '/js/style-thuvien.js',array('jquery'), $js_ran , true);

    }
}   
