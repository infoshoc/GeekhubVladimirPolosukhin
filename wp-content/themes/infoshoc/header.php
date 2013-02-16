<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php 
if ( is_home() ) {
	echo "GeekHub - отримай практичні знання у сфері IT";
} else {
	wp_title( "GeekHub - " );
}
?></title>
<?php wp_head() ?>
</head>

<body <?php body_class(infoshoc_put_body_class()); ?>>
<div class="wrapper">
	<div class="header">
		<h1><a href="/"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="logo" /></a></h1>
		<?php infoshoc_put_navigation(); ?>
		<ul class="social-list">
			<li class="facebook-item"><a href="#"></a></li>
			<li class="vkontakte-item"><a href="#"></a></li>
			<li class="twitter-item"><a href="#"></a></li>
			<li class="youtube-item"><a href="#"></a></li>
			<li class="vimeo-item"><a href="#"></a></li>
		</ul>
	</div>
    <div class="content">