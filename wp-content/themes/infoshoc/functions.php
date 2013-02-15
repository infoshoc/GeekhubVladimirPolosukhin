<?php 
add_theme_support( 'post-thumbnails' ); 
/*NAVIGATION*/
function infoshoc_put_navigation(){
	wp_page_menu(array(
		'sort_column' => 'ID',
		'show_home' => 'Головна',
		'menu_class' => 'navigation',
	));
}
function infoshoc_put_body_class(){
	if ( is_home() ) {
		return 'main';
	}
	global $post;
	$class_name = preg_match ( "#^(\w+)\-page$#", $post->post_name, $matches );
	return $matches[1];
}

/*STYLES*/
add_action( 'wp_enqueue_scripts', 'infoshoc_enqueue_styles' );
function infoshoc_enqueue_styles(){
	wp_register_style ( 'content', get_template_directory_uri() . '/styles/content.css' );
	wp_register_style ( 'default', get_template_directory_uri() . '/styles/default.css' );
	wp_register_style ( 'footer', get_template_directory_uri() . '/styles/footer.css' );
	wp_register_style ( 'header', get_template_directory_uri() . '/styles/header.css' );
	wp_register_style ( 'reset', get_template_directory_uri() . '/styles/reset.css' );
	wp_register_style ( 'wrapper', get_template_directory_uri() . '/styles/wrapper.css' );
	wp_enqueue_style ( 'reset' );
	wp_enqueue_style ( 'default' );
	wp_enqueue_style ( 'wrapper' );
	wp_enqueue_style ( 'header' );
	wp_enqueue_style ( 'content' );
	wp_enqueue_style ( 'footer' );
}


?>