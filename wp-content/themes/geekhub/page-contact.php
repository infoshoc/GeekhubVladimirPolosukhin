<?php get_header(); ?>
		<h2>Свяжитесь с нами</h2>
		<ul>
			<li class="map-item">
				<h3>Заходьте</h3>
				<iframe class="map-block" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ru&amp;q=%D1%83%D0%BB.+%D0%93%D0%BE%D1%80%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE,+60,+%D0%9F%D1%80%D0%B8%D0%B4%D0%BD%D0%B5%D0%BF%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D1%80%D0%B0%D0%B9%D0%BE%D0%BD,+%D0%A7%D0%B5%D1%80%D0%BA%D0%B0%D1%81%D1%81%D1%8B,+%D0%A7%D0%B5%D1%80%D0%BA%D0%B0%D1%81%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&amp;aq=&amp;sll=48.382803,31.17461&amp;sspn=8.332999,21.643066&amp;t=m&amp;ie=UTF8&amp;geocode=FTIc8gIdHqLpAQ&amp;split=0&amp;hq=&amp;hnear=%D1%83%D0%BB.+%D0%93%D0%BE%D1%80%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE,+60,+%D0%A7%D0%B5%D1%80%D0%BA%D0%B0%D1%81%D1%81%D1%8B,+%D0%A7%D0%B5%D1%80%D0%BA%D0%B0%D1%81%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&amp;ll=49.421359,32.088575&amp;spn=0.019541,0.036564&amp;z=14&amp;output=embed"></iframe>
			</li>
			<li>
				<h3>Звоніть</h3>
				<span><?php echo get_post_meta($post->ID, 'telephone', true); ?></span>
			</li>		
			<li>
				<h3>Пишіть</h3>
				<span><?php echo get_post_meta($post->ID, 'email', true); ?></span>
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
<?php get_footer(); ?>