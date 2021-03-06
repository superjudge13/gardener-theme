<?php get_header(); ?>
<div class="row">
	<div class="card-columns">
<?php if( have_posts()):
	while( have_posts() ): the_post(); ?>

<div class="card text-dark  bg-light-trans mb-3">
	 <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="" />
	<div class="card-body">
    <h4 class="card-title"><?php the_title(); ?></h4>
		<h6 class="card-subtitle mb-2 text-muted">Posted on: <?php the_time('d-m-y'); ?></h6>
		<?php addCategoryBadge("tab"); ?>
		<p class="card-text"><?php the_excerpt(); ?></p>
		  
	<a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary" target="_self">Read the full post</a>
	</div><!-- closes .card-body -->
		</div><!-- closes card -->	


	<?php endwhile;
	endif;
?>
	</div><!-- closes card-columns -->
	</div><!-- closes .row -->
<?php get_footer(); ?>