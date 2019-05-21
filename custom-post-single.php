<?php
/*
 * Template Name: Custom Post Single
 * Template Post Type: post, page, product
 */
  
 get_header(); ?>

<div class="row">
    
<?php while(have_posts()) : the_post(); 
	?>
	<div class="col-sm-12">
		<div class="card text-dark  bg-light-trans mb-3">
			<!-- <img class="card-img-top" src="<?php //the_post_thumbnail_url(); ?>" alt="" />-->
		<div class="card-body">
			<div class="card text-dark  bg-transparent mb-3  border-0">
				
				<div class="row">
				<div class="col-sm-12 col-lg-6 p-3">
					<h2 class="card-title"><?php the_title(); ?></h2>
					<h6 class="card-subtitle mb-2 text-muted card-date">Posted: <?php the_time('d-m-y'); ?></h6>
					<?php addCategoryBadge("tab"); ?>
					<p class="lead mt-3"><?php $topContent = split_content('main');	echo do_shortcode($topContent);	?></p>
				</div>
				
				<div class="col-sm-12 col-lg-6 single-post-image-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
					<!-- <img class="img-fluid" src="<?php //the_post_thumbnail_url(); ?>" alt="<?php //echo( the_post_thumbnail_alt($post_id) ); ?>" />-->
					<!-- <p class="text-muted text-center"><small><?php //echo( get_the_post_thumbnail_caption() );?></small></p> -->
				</div>
				
			
				</div>
				
			</div>
			
		<p class="card-text">
			<?php
					$mainContent = split_content('extended');
					echo do_shortcode($mainContent);
					?>
			</p>
			<div class="float-right">
				<?php 
					//create sharing buttons for facebook and twitter
					addSharingButtons();
				?>
			</div>
		</div>
		</div><!-- closes card -->
<?php endwhile; ?>
	
	
	
	</div>
</div><!-- closes .row -->
<?php get_footer(); ?>