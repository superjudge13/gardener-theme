<h2 class="text-light"><?php the_title(); ?></h2>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small class="text-light">Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>
<p class="text-light"><?php the_content(); ?></p>
	
<hr>