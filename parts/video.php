<div class="container">
	<div class="row">
<?php
$videos = array(); 

//$args = array( 'tag' => 'video', 'nopaging'=>true, 'posts_per_page'=>5 );
$video_query = new WP_Query( array( 'tag' => 'video' ) );
if ( $video_query->have_posts() ) {
    while ( $video_query->have_posts() ) {
        $video_query->the_post();
        
            $temp = array();
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_content();
            $temp['image'] = $thumb_url;
			$temp['video_url'] = get_field('youtube_url');
			$videos[] = $temp;
     
    }
} 
wp_reset_postdata();
?>

<!-- make sure there are videos -->
<?php if(count($videos) > 0) { ?>

<?php $i=0; foreach($videos as $video) { extract($video); ?>
	<div class="col-sm-12 col-md-6 col-lg-4">			
		<div class="embed-responsive embed-responsive-16by9">

			<iframe class="embed-responsive-item" src="<?php echo $video_url; ?>" allowfullscreen></iframe>
		</div>
		<h5 class="text-dark"><strong><?php echo $title; ?></strong></h5>
		<p class="text-dark"><?php echo $excerpt; ?></p>
	</div>
<?php $i++; } ?>

<?php }
else{?>

<h1>Sorry</h1>
<h4>There are no videos on here at the moment</h4>


<?php } ?>
		
	</div>
</div>