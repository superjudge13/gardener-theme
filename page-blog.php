<?php
/*
	Template Name: Blog Page
*/

get_header(); ?>

<?php if( have_posts()):
	while( have_posts() ): the_post(); ?>
		
	
<small class="made-up-class">Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>
	<p><?php the_content(); ?></p>
<h2><?php the_title(); ?></h2>
	
	<hr>
	<?php endwhile;

	endif;
?>
<?php get_footer(); ?>