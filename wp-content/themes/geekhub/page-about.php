<?php get_header() ?>
		<h2><?php the_title() ?></h2>
		<?php 
		if ( has_post_thumbnail() ) {	
			the_post_thumbnail('full', array('class' => 'float-l')); 
		} 
		?>
		<div class="overflow">
			<?php echo $post->post_content; ?>
		</div>
<?php get_footer() ?>