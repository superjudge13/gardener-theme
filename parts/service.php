
<?php
	$page = get_page_by_title( 'Services' );
	$service_id = $page->ID;
?>

<div class="container">
	<div class="row">
    
<?php while(have_posts()) : the_post(); ?>
	<div class="col-sm-12 col-md-6">
		<h4><?php the_title(); ?></h4>
		<p><?php the_content(); ?></p>
	</div>
<?php endwhile; ?>
	<div class="col-sm-12 col-md-6">
	
	<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" />
	</div>
</div><!-- closes .row -->
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<h1 class="text-center display-1"><?php echo the_field('service_1_icon', $service_id); ?></h1>
			<h3><?php echo the_field('service_1_title', $service_id); ?></h3>
			<p><?php echo the_field('service_1_copy', $service_id); ?></p>
		</div>
		
		<div class="col-sm-12 col-md-4">
			<h1 class="text-center display-1"><?php echo the_field('service_2_icon', $service_id); ?></h1>
			<h3><?php echo the_field('service_2_title', $service_id); ?></h3>
			<p><?php echo the_field('service_2_copy', $service_id); ?></p>			
		</div>
		
		<div class="col-sm-12 col-md-4">
			<h1 class="text-center display-1"><?php echo the_field('service_3_icon', $service_id); ?></h1>
			<h3><?php echo the_field('service_3_title', $service_id); ?></h3>
			<p><?php echo the_field('service_3_copy', $service_id); ?></p>			
		</div>
		
	</div>
</div>