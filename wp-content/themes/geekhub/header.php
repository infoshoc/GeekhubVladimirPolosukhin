<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title() ?></title>
<?php wp_head() ?>
</head>

<body <?php body_class( array ( $post->post_name ) ); ?>>
<div class="wrapper">
	<div class="header">
		<h1><a href="index.html"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a></h1>
		<?php 
		wp_nav_menu (array( 
			'menu'=>'header_menu',
			'menu_class'=>'navigation',
			'container'=>false,
		));
		wp_nav_menu (array( 
			'menu'=>'social_menu',
			'menu_class'=>'social-list',
			'container'=>false,
		));
		?>
	</div>
    <div class="content">
