<?php get_header()?>
	
<?php
while ( have_posts() ) : the_post();

	include get_the_content();

endwhile; // end of the loop. 
?>
				
<?php get_footer()?>