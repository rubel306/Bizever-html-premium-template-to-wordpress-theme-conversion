<?php 


function bizever_support(){
	load_theme_textdomain( 'bizever', get_template_directory().'/lang' );

	add_theme_support('title-tag' );
	add_theme_support('automatic-feed-link' );
	add_theme_support( 'html5', array('aside', 'gallery',' comment-list', 'comment-form', 'caption', 'search-form') );

	add_theme_support( 'post-thumbnails' );

	//image size 
	add_image_size( 'bizever-blogPage-thumb', 350, 210, true );
	add_image_size( 'bizever-blogdetails-thumb', 730, 430, true );

}
add_action('after_setup_theme', 'bizever_support');


//bizever assets
function bizever_theme_assets(){
	//theme css files 
	wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), null ,'1.0','all' );
	wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'), null ,'1.0','all' );
	wp_enqueue_style('magnific-popup', get_theme_file_uri('/assets/css/magnific-popup.css'), null ,'1.0','all' );
	wp_enqueue_style('jquery-ui', get_theme_file_uri('/assets/css/jquery-ui.css'), null ,'1.0','all' );
	wp_enqueue_style('animate', get_theme_file_uri('/assets/css/animate.css'), null ,'1.0','all' );
	wp_enqueue_style('owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'), null ,'1.0','all' );
	wp_enqueue_style('bizever-main', get_theme_file_uri('/assets/css/main.css'), null ,'1.0','all' );
	wp_enqueue_style('bizever-style', get_stylesheet_uri(), null ,'1.0','all' );


	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'popper',get_theme_file_uri( '/assets/js/popper.js'), array('jquery'), wp_get_theme()->get('Version'), true );
	wp_enqueue_script( 'bootstrap',get_theme_file_uri( '/assets/js/bootstrap.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'owl-carousel',get_theme_file_uri( '/assets/js/owl.carousel.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'magnific-popup',get_theme_file_uri( '/assets/js/magnific-popup.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'imagesloaded' );
	wp_enqueue_script( 'isotope',get_theme_file_uri( '/assets/js/isotope.pkgd.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'waypoints',get_theme_file_uri( '/assets/js/waypoints.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'counterup',get_theme_file_uri( '/assets/js/jquery.counterup.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'wow',get_theme_file_uri( '/assets/js/wow.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'scrollUp',get_theme_file_uri( '/assets/js/scrollUp.min.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'bizever-script',get_theme_file_uri( '/assets/js/script.js'), array('jquery'), '1.0', true );

}
add_action('wp_enqueue_scripts', 'bizever_theme_assets');



//inlude theme options file

require_once get_template_directory().'/inc/framework/cs-framework.php';
require_once get_template_directory().'/inc/framework/options-fields.php';

