<?php 
function infoshoc_theme_setup(){
	/*Nav Menu*/
	register_nav_menus( array(
		'header_menu' => 'menu on header',
	));
	add_theme_support( 'post-thumbnails' ); 
	if ( get_option( 'theme_setup_status' ) == -1 ) {
		for ( $i = 1; $i <= 4; ++$i ) {
			wp_delete_post($i);
		}
		$about_page_id = wp_insert_post(array(
			'post_name'=>'about',
			'post_title'=>'Про Geekhub',
		));
		$team_page_id = wp_insert_post(array(
			'post_name'=>'team',
			'post_title'=>'Команда',
		));
		$team_page_id = wp_insert_post(array(
			'post_name'=>'contact',
			'post_title'=>'Зв’язок',
		));
		add_post_meta($team_page_id, 'telephone', '');
		add_post_meta($team_page_id, 'email', '');
		wp_insert_post(array(
			'post_name'=>'register-status ',
			'post_title'=>'Статус регистрации',
		));
		wp_insert_post(array(
			'post_name'=>'description-geekhub ',
			'post_title'=>'Описание GeekHub',
		));
	}
	/*STYLES*/
	add_action( 'wp_enqueue_scripts', 'infoshoc_enqueue_styles' );
}
add_action( 'after_setup_theme', 'infoshoc_theme_setup' );

/*NAVIGATION*/
function infoshoc_put_navigation(){
	// wp_page_menu(array(
		// 'sort_column' => 'ID',
		// 'show_home' => 'Головна',
		// 'menu_class' => 'navigation',
	// ));
	wp_nav_menu (array( 
		'menu'=>'header_menu',
		'menu_class'=>'navigation',
		'container'=>false,
		'sort_column' => 'ID',
	));
}
function infoshoc_put_body_class(){
	if ( is_home() ) {
		return array ( 'main' );
	}
	global $post;
	return array ( $post->post_name );
}

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