<?php get_header()?>

		<div class="status-block">
		<?php
		rewind_posts(); 
		while ( have_posts() ){
			the_post(); 
			if ( $post->post_title == 'register-status' ) {
				the_content();
				break;
			}
		}
		?>
		</div>
		<p class="description-txt">
		<?php
		rewind_posts(); 
		while ( have_posts() ){
			the_post(); 
			if ( $post->post_title == 'description-geekhub' ) {
				the_content();
				break;
			}
		}
		?>
		</p>
		<h2>Наші Курси</h2>
		<ul class="courses-list">
		<?php 
		rewind_posts(); 
		while ( have_posts() ) : the_post(); 
			if ( in_category( 3 ) ) : 
		?>
				<li>
					<?php
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail();
					}//if ( has_post_thumbnail() )
					?>
					<h3><?php the_title() ?></h3>
					<p><?php the_content() ?></p>
				</li>
		<?php	
			endif; //if ( in_category('3') )
		endwhile; //while ( have_posts() )
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