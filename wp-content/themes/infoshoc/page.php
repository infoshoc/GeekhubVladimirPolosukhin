<?php get_header()?>

<?php while( have_posts() ) : the_post(); ?>
<h2><?php the_title() ?></h2>
<?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
<div class="overflow">
<?php the_content() ?>
</div>
<?php endwhile; ?>

<?php get_footer()?>
