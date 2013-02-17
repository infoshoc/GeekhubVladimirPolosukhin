<?php get_header()?>

		<div class="status-block">
		<?php
		$posts = get_posts(array('name'=>'register-status'));
		if ( count($posts) ) {
			echo $posts[0]->post_content;
		}
		?>
		</div>
		<p class="description-txt">
		<?php
		$posts = get_posts(array('name'=>'description-geekhub'));
		if ( count($posts) ) {
			echo $posts[0]->post_content;
		}
		?>
		</p>
		<h2>Наші Курси</h2>
		<ul class="courses-list">
		<?php 
		$category = get_category_by_slug('course');
		$posts_array = get_posts(array(
			'posts_per_page'  => $category->category_count,
			'category'        => $category->cat_ID,
		)); 
		foreach($posts_array as &$value) :
		?>
				<li>
					<?php
						$thumbnail = get_the_post_thumbnail($value->ID);
						if ( $thumbnail ) echo $thumbnail;
					?>
					<h3><?php echo $value->post_title ?></h3>
					<p><?php echo $value->post_content ?></p>
				</li>
		<?php
		endforeach;
		?>
		</ul>
		<div class="facebook-widget"></div>
		<a class="certificates-registery-link" href="#"></a>
		<h3 class="sponsors-header">наши спонсоры</h3>
		<ul class="sponsors-list">
			<li class="house-of-gospel-item"><a href="#"></a></li>
			<li class="master-of-code-item"><a href="#"></a></li>
			<li class="sergium-item"><a href="#"></a></li>
			<li class="yothog-item"><a href="#"></a></li>
			<li class="_5-s-item"><a href="#"></a></li>
		</ul>


<?php get_footer()?>