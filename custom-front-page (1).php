<?php
/*
 * Template Name: Custom Front Page
 * Template Post Type: page, product
 */
  
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-7">
			<h1 class="display-2 front-page-title"><?php echo(get_bloginfo('description')); ?></h1>
		</div>
		<div class="col-sm-12 col-lg-5 front-page-image">
			<img src="<?php echo(header_image()); ?>" />
		</div>
	</div>

<div class="row">
    
<?php while(have_posts()) : the_post(); ?>
	<div class="col-sm-12">
		<p><?php //the_content(); 
			$content = get_the_content();
			echo $content; ?>
		</p>
	</div>
<?php endwhile; ?>
</div><!-- closes .row -->
	
<div class="row">
	<div class="card-columns">
<!-- Adding 4 of the latest posts to the front page -->
	<?php
		$the_query = new WP_Query('posts_per_page=10');
		while($the_query -> have_posts()) : $the_query -> the_post();
    ?>
	
<!-- <div class="col-sm-12 col-md-6 col-lg-4"> -->
	<div class="card text-dark  bg-light-trans mb-3">
		<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="" />
			<div class="card-body">
    			<h4 class="card-title"><?php the_title(); ?></h4>
				<h6 class="card-subtitle mb-2 text-muted card-date">Posted: <?php the_time('d-m-y'); ?></h6>
				<?php addCategoryBadge("tab"); ?>
				<p class="card-text"><?php the_excerpt(); ?></p>
		  		<a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary" target="_self">Read the full post</a>
			</div><!-- closes .card-body -->
	</div><!-- closes .card -->
<!-- </div> --><!-- closes cols -->
	<?php
	endwhile;
	wp_reset_postdata();
	?>
	</div><!-- closes .card-columns -->
</div><!-- closes .row -->

</div><!-- close container -->

<?php get_footer(); ?>