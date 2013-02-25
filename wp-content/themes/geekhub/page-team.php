<?php get_header(); ?>
<h2>Знай наших!</h2>
<ul class="worker-list">
<?php	
	$team_category = get_category_by_slug('team');
	if ( $team_category !== false ) : 
		$team_posts = get_posts(array(
			'posts_per_page' => $team_category->count,
			'category' => $team_category->term_id,
		));
	$id=0;
	foreach ( $team_posts as $current_post ) : 
		++$id;
?>
	<li <?php if($id%2): ?>class="odd-item"<?php endif; ?>>
		<div>
			<h3><?php echo $current_post->post_title; ?></h3>
			<span><?php echo get_post_meta($current_post->ID, 'job', true); ?></span>
		</div>
		<?php 
		if ( has_post_thumbnail($current_post->ID) ){
			echo get_the_post_thumbnail($current_post->ID, 'full');
		} else {
		?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/user.png" />
		<?php
		}
		?>
		<p><?php echo $current_post->post_content; ?></p>
	</li>
<?php	
	endforeach; 
?>
<?php
	endif;
?>
</ul>
<?php get_footer(); ?>
