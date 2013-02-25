<?php
add_action( 'after_setup_theme', 'geekhub_after_setup' ); 
add_action( 'wp_enqueue_scripts', 'geekhub_enqueue_styles_and_scripts' );    
add_filter('show_admin_bar', '__return_false');
if ( !function_exists( 'geekhub_after_setup' ) ) {
	function geekhub_after_setup(){
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails', array( 'post' ) );
		add_theme_support( 'custom-header', array( 
			'width' => 167,
			'height' => 71,
			'default-image' => get_template_directory_uri() . '/images/logo.png',
			'header-text' => false,
		));
		register_nav_menus( array(
			'header_menu' => 'Menu of navigation, which displayed on the top of the every page',
			'footer_menu' => 'Menu of navigation, which displayed on the bottom of the every page',
			'social_menu' => 'List of social medias, where we can find profiles of the site'
		));
	}
}
if ( !function_exists( 'geekhub_enqueue_styles_and_scripts' ) ) {
	function geekhub_enqueue_styles_and_scripts(){
		wp_register_style ( 'stylesheet', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style ( 'stylesheet' );
		wp_dequeue_style ( 'admin-bar' );
		wp_register_script ( 'jquery_1.9.1', 'http://code.jquery.com/jquery-1.9.1.min.js' );
		wp_register_script ( 'vk-openapi', '//vk.com/js/api/openapi.js' );
		wp_register_script ( 'scripts', get_template_directory_uri() . '/script.js' );
		wp_enqueue_script ( 'jquery_1.9.1' );
		wp_enqueue_script ( 'vk-openapi' );
		wp_enqueue_script ( 'scripts' );
	}
}
if ( !function_exists( 'get_post_by_slug' ) ) {
	function get_post_by_slug( $the_slug ){
		$my_posts = get_posts(array(
		  'name' => $the_slug,
		  'post_type' => 'post',
		  'post_status' => 'publish',
		  'numberposts' => 1,
		));
		if ( $my_posts && count($my_posts) ) {
			return $my_posts[0];
		}
	}
}
?>