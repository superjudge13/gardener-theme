<?php 
/*
	Template Name: Blog Post
*/
?>

<?php get_header(); ?>

<?php if( have_posts()):
	while( have_posts() ): the_post(); ?>
		
<div class="card madeupclass">
	 <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="" />
	<div class="card-block">
    <h4 class="card-title"><?php the_title(); ?></h4>
		<h6 class="card-subtitle mb-2 text-muted">Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></h6>
		<p class="card-text"><?php the_content(); ?></p>
		  
	<a href="#" class="btn btn-primary">Go somewhere</a>
	</div>
	
</div>
	<?php endwhile;

	endif;
?>
<?php get_footer(); ?>