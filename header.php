<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php echo( get_bloginfo('name')); ?></title>
		<?php wp_head(); ?>
	</head>
<?php
//adds custom classes to homepage
	if( is_front_page() ){
		$custom_classes = array( 'bt-home' );
		}
		else
		{
		$custom_classes = array( 'bt-site' );
		}
?>

<body <?php body_class( $custom_classes ); ?> >
	<div class="container-fluid">
	<div class="container">
		<div class="row pt-3 pb-3">
			
				<div class="header-logo col-md-5 col-sm-12 d-flex align-items-center">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo custom_logo(); ?>" alt="<?php echo(get_bloginfo('name')); ?>" height="100px" width="auto" />
					</a>
				</div>
			
			<?php
			$page = get_page_by_title( 'Header Info' );
			$header_id = $page->ID;
			$hexcolor = get_field('cta_colour', $header_id);
			?>
			
				<div class="header-phone col-md-4 col-sm-12 d-flex justify-content-end align-items-center h5 pl-6 pt-2">
					<div class="container">
						<div class="row">
							<div class="col-xs-2 text-right pr-3">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-xs-10 text-nowrap pl-0">
								<p class="mb-2"><?php the_field('business_phone_number', $header_id); ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2 text-right">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-xs-10 text-nowrap pl-2">
								<a href="mailto:test@test.com"><?php the_field('business_email', $header_id); ?></a>
							</div>
						</div>
					</div>
				</div>
			
			
				<div class="header-cta col d-none d-md-block justify-content-end align-items-center">
		
                <div class="bg-cta w-100 p-3 text-light rounded text-right" style="background-color:<?php the_field('cta_colour', $header_id); ?>"> 
                    	<h4><?php the_field('cta_title', $header_id); ?><br>
                        <h6><?php the_field('cta_copy', $header_id); ?></h6>
                        </h4>
                        <hr>
                        <button class="btn btn-primary"><?php the_field('cta_button', $header_id); ?></button>
                    </div>
				</div>
			
			
		</div>
		<div class="row menu-row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark navbar-bg full-width">
					<div class="container">
						
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
								<span class="navbar-toggler-icon"></span>
							</button>
								<div class="collapse navbar-collapse" id="navbar-content">
									<div class="col-md-8">
									<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'container'      => false,
										'depth'          => 2,
										'menu_class'     => 'navbar-nav ml-auto bt-top-menu',
										'walker'         => new Bootstrap_NavWalker(),
										'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
									) );
									?>
									</div>
									<div class="col-md-4">
                                    <form action="https://gardens.barrywebber.co.uk/" method="get" class="form-inline my-2 my-lg-0 ml-0">
                                        <!-- <label for="search">Search in </label> -->
										<div class="col align-self-end text-right">
											<input class="form-control mr-sm-2 search-nav-in" type="text" name="s" id="search-input" value="" aria-label="Search">
											<button type="submit" class="btn bg-transparent text-light" id="search-button" type="submit"><i class="fas fa-search"></i></button>
										</div>
                                    </form>
									</div>
                                    
								</div>
					</div><!-- closes .container -->
				</nav>
			</div><!-- closes .col -->
		</div><!-- closes .row -->
			