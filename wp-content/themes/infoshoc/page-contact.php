<?php get_header() ?>
		<h2>Свяжитесь с нами</h2>
		<ul>
			<li class="map-item">
				<h3>Заходьте</h3>
				<span></span>
			</li>
			<li>
				<h3>Звоніть</h3>
				<span><?php $telephone = get_post_meta($post->ID, 'telephone'); if ( count($telephone[0]) ) echo $telephone[0]; ?></span>
			</li>		
			<li>
				<h3>Пишіть</h3>
				<span><?php $email = get_post_meta($post->ID, 'email'); if ( count($email[0]) ) echo $email[0]; ?></span>
			</li>
			<li>
				<h3>Слідкуйте</h3>
				<ul class="social-list">
					<li class="facebook-item"><a href="#"></a></li>
					<li class="vkontakte-item"><a href="#"></a></li>
					<li class="twitter-item"><a href="#"></a></li>
				</ul>
			</li>			
		</ul>		

<?php get_footer() ?>