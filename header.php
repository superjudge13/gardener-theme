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
		<div class="row">
				<div class="header-logo col d-flex align-items-center">
					<a href="" alt="">
						<img src="<?php echo custom_logo(); ?>" alt="<?php echo(get_bloginfo('name')); ?>" height="100px" width="auto" />
					</a>
				</div>
				<div class="header-phone col d-flex justify-content-end align-items-center">
					<p>Tel : 01234 567890</p>
				</div>
				<div class="header-cta col d-flex justify-content-end align-items-center">
					<a href="#">CTA</a>
				</div>
		</div>
		<div class="row menu-row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark bg-transparent bt-navbar">
					<div class="container">
						
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
								<span class="navbar-toggler-icon"></span>
							</button>
								<div class="collapse navbar-collapse" id="navbar-content">
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
					</div><!-- closes .container -->
				</nav>
			</div><!-- closes .col -->
		</div><!-- closes .row -->
		<div class="row">
			<p>Something new in here</p>
			
		</div>