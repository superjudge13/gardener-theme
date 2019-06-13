<?php
/*
 * Template Name: Gardens Front Page
 * Template Post Type: page, product
 */
  
get_header(); ?>

<!-- add the slider -->
<?php get_template_part('parts/slider'); ?>

<div class="container">
	
		<?php get_template_part('parts/service-front-page'); ?>	
<!-- front page content goes here -->		
		


</div><!-- close container -->

<?php get_footer(); ?>