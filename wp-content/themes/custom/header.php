<?
	$directory = get_bloginfo('template_directory');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Головна</title>
<link rel="stylesheet" type="text/css" href="<?echo $directory?>/styles/reset.css" />
<link rel="stylesheet" type="text/css" href="<?echo $directory?>/styles/default.css" />
<link rel="stylesheet" type="text/css" href="<?echo $directory?>/styles/wrapper.css" />
<link rel="stylesheet" type="text/css" href="<?echo $directory?>/styles/header.css" />
<link rel="stylesheet" type="text/css" href="<?echo $directory?>/styles/content.css" />
<link rel="stylesheet" type="text/css" href="<?echo $directory?>/styles/footer.css" />
</head>

<body class="main">
<div class="wrapper">
	<div class="header">
		<h1><a href="/index.php"><img src="<?echo $directory?>/images/logo.png" alt="logo" /></a></h1>
		<? echo get_navigation(); ?>
		<ul class="social-list">
			<li class="facebook-item"><a href="#"></a></li>
			<li class="vkontakte-item"><a href="#"></a></li>
			<li class="twitter-item"><a href="#"></a></li>
			<li class="youtube-item"><a href="#"></a></li>
			<li class="vimeo-item"><a href="#"></a></li>
		</ul>
	</div>
    <div class="content">