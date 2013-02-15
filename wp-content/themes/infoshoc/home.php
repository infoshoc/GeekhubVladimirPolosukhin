<?php get_header()?>

		<div class="status-block">
			Реєстрація на другий сезон відкрита!
			<a href="#" class="register-link"></a>
		</div>
		<p class="description-txt"><strong>GeekHub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з <a href="#">деталями проекту.</a></p>
		<h2>Наші Курси</h2>
		<ul class="courses-list">
		<?php 
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