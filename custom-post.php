<?php
/*
 * Template Name: Custom Post
 * Template Post Type: post, page, product
 */
  
 get_header(); ?>

<div class="row">
    
<?php while(have_posts()) : the_post(); ?>
	<div class="col-sm-12 col-md-6">
		<h4><?php the_title(); ?></h4>

		<small>Posted on : <?php the_time(get_option('date_format')); ?></small><br />
		<span class="badge badge-info"><?php the_category(); ?></span>
		<p><?php the_content(); ?></p>
	</div>
<?php endwhile; ?>
	<div class="col-sm-12 col-md-6">
	
	<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" />
	</div>
</div><!-- closes .row -->
<?php get_footer(); ?>