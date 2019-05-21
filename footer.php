<footer>
	<hr class="footer-hr">
	<div class="row">
		
		<div class="col-sm-12">
			<nav class="navbar navbar-expand-lg navbar-dark bg-transparent bt-navbar">
					<div class="container">
						<a class="navbar-brand" href="<?php echo site_url(); ?>" target="_self"><?php echo( get_bloginfo('name')); ?></a>
							<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php //esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
								<span class="navbar-toggler-icon"></span>
							</button>
								<div class="collapse navbar-collapse" id="navbar-content"> -->
									<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-2',
										'menu_id'        => 'footer-menu',
										'container'      => false,
										'depth'          => 2,
										'menu_class'     => 'navbar-nav ml-auto footer-nav',
										'walker'         => new Bootstrap_NavWalker(),
										'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
									) );
									?>	
								<!-- </div> -->
					</div><!-- closes .container -->
				</nav>
		</div>
	</div>
	<?php //wp_nav_menu(array('theme_location'=>'secondary')); ?>
</footer>	
</div> <!-- close .container -->
</div> <!-- closes fluid container -->
<?php wp_footer(); ?>
</body>
</html>