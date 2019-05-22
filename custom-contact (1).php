<?php
/*
 * Template Name: Custom Contact
 * Template Post Type: post, page, product
 */
  
 get_header(); ?>

<div class="row">
    
<?php while(have_posts()) : the_post(); ?>
	<div class="col-sm-12 col-lg-6">
		<?php
		$the_form = split_content('extended');
		echo do_shortcode($the_form);
		?>
		
	</div><!-- closes col -->
	
	<div class="col-sm-12 col-lg-6">
		<h1 class="display-3"><?php the_title(); ?></h4>
		<?php 
			$the_contact_copy = split_content('main');
		echo($the_contact_copy);
		?>
		<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="" />
		<?php endwhile; ?>
	</div><!-- closes col -->
	
</div><!-- closes .row -->
<?php get_footer(); ?>