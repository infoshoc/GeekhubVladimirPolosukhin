<?php get_header('home') ?>
<p class="description-txt"><?php $description_geekhub_post = get_post_by_slug('description-geekhub'); echo $description_geekhub_post->post_content; ?></p>
<h2>Наші курси</h2>
<ul class="courses-list">
<?php	
	$course_category = get_category_by_slug('course');
	if ( $course_category !== false ) : 
		$course_posts = get_posts(array(
			'posts_per_page' => $course_category->count,
			'category' => $course_category->term_id,
		));
	foreach ( $course_posts as $current_post ) : 
?>
	<li>
		<?php 
		if ( has_post_thumbnail($current_post->ID) ){
			echo get_the_post_thumbnail($current_post->ID, 'full');
		} 
		?>
		<h3><?php echo $current_post->post_title; ?></h3>
		<p><?php echo $current_post->post_content; ?></p>
	</li>
<?php	
	endforeach; 
?>
<?php
	endif;
?>
</ul>
<div id="vk_groups" class="vkontakte-widget"></div>
<a class="certificates-registery-link" href="#"></a>
<h3 class="sponsors-header">наши спонсоры</h3>
<ul class="sponsors-list">
	<li class="house-of-gospel-item"><a href="#"></a></li>
	<li class="master-of-code-item"><a href="#"></a></li>
	<li class="sergium-item"><a href="#"></a></li>
	<li class="yothog-item"><a href="#"></a></li>
	<li class="_5-s-item"><a href="#"></a></li>
</ul>
<?php get_footer() ?>