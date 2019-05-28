<?php
$slides = array(); 
$args = array( 'tag' => 'slide', 'nopaging'=>true, 'posts_per_page'=>5 );
$slider_query = new WP_Query( $args );
if ( $slider_query->have_posts() ) {
    while ( $slider_query->have_posts() ) {
        $slider_query->the_post();
        if(has_post_thumbnail()){
            $temp = array();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_excerpt();
            $temp['image'] = $thumb_url;
            $slides[] = $temp;
        }
    }
} 
wp_reset_postdata();
?>

<?php if(count($slides) > 0) { ?>

<div id="carousel-example-generic" class="carousel slide full-width slider-outer" data-ride="carousel">
    
    <ol class="carousel-indicators">
        <?php for($i=0;$i<count($slides);$i++) { ?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
        <?php } ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
			
			<div class="carousel-item-div carousel-item <?php if($i == 0) { ?>active<?php } ?>" style="background-image: url('<?php echo $image ?>')">
			
				<div class="carousel-caption"><h1 class="display-1 text-light"><strong><?php echo $title; ?></strong></h1><p class="text-light"><?php echo $excerpt; ?></p></div>
        </div>
        <?php $i++; } ?>
    </div>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 carousel-controls">
    <a class="carousel-control-prev" target="_blank" href="#carousel-example-generic" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" target="_blank" href="#carousel-example-generic" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
			</div>
			
		</div>
	</div>

</div>
	<?php } ?>