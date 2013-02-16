<?php get_header() ?>

		<h2>Знай наших!</h2>
		<ul class="worker-list">
		<?php 
		 $args = array(
			'posts_per_page'  => get_category_by_slug('team')->category_count,
			'category'        => get_category_by_slug('team')->cat_ID,
		);
		$posts_array = get_posts( $args ); 
		$id = 0;
		foreach ( $posts_array as &$value ) : ?>
		<li class="<?php echo $id % 2 ? 'odd-item':''; ?>">
			<div>
				<h3><?php echo $value->post_title; ?></h3>
				<span><?php $job = get_post_meta($value->ID, 'job'); echo $job[0]; ?></span>
			</div>
			<?php 
			$thumbnail = get_the_post_thumbnail($value->ID);
			echo ($thumbnail)?$thumbnail:'<img src="/wp-content/themes/infoshoc/images/workers-portrait.jpg" />'
			?>
			<p><?php echo $value->post_content; ?></p>
		</li>		
		<?php ++$id; endforeach; unset($value); ?>
		</ul>


<?php get_footer() ?>