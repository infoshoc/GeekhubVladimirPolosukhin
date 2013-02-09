<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Головна</title>
<?php wp_head() ?>
</head>

<body class="<?php infoshoc_put_body_class(); ?>">
<div class="wrapper">
	<div class="header">
		<h1><a href="/"><img src="<?php echo get_header_image()?>" alt="logo" /></a></h1>
		<ul class="navigation">
			<li class="active"><a href="index.php">главная</a></li>
			<?php infoshoc_put_navigation(); ?>
			<!--
			<li><a href="about.php">о geekhub</a></li>
			<li><a href="team.php">команда</a></li>
			<li><a href="contact.php">контакты</a></li>-->
		</ul>
		<ul class="social-list">
			<li class="facebook-item"><a href="#"></a></li>
			<li class="vkontakte-item"><a href="#"></a></li>
			<li class="twitter-item"><a href="#"></a></li>
			<li class="youtube-item"><a href="#"></a></li>
			<li class="vimeo-item"><a href="#"></a></li>
		</ul>
	</div>
    <div class="content">