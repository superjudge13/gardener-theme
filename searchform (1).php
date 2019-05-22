<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline my-2 my-lg-0">
    <!-- <label for="search">Search in <?php //echo home_url( '/' ); ?></label> -->
    <input class="form-control mr-sm-2" type="text" name="s" id="search" value="<?php the_search_query(); ?>" aria-label="Search" />
	<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    <!-- <input type="image" alt="Search" src="<?php //bloginfo( 'template_url' ); ?>/images/search.png" /> -->
</form>

