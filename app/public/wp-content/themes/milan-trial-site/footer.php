
		<footer id="footer" class="d-flex flex-column align-items-center position-relative">
			<div class="container text-white px-0 my-4">
				<div class="d-flex text-center text-lg-start justify-content-center flex-column flex-lg-row justify-content-lg-between py-5">
					<a class="navbar-brand text-uppercase fs-4" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php
							$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

							if ( ! empty( $header_logo ) ) :
						?>
							<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<?php
							else :

								$logo_title = esc_attr( get_bloginfo( 'name', 'display' ));
								$logo_title = explode(" ",$logo_title);
								foreach($logo_title as $i=>$title){
									if($i == 0){
										echo "<span class='text-accent me-2'>".$title."</span>";
									} else {
										echo "<span class='text-primary me-2'>".$title."</span>";
									}
								}
							endif;
						?>
					</a>

					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav d-flex flex-column flex-sm-row gap-3 gap-sm-5 justify-content-center justify-content-lg-start align-items-center mt-5 mt-md-0 fs-5',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
					<div class='d-flex gap-4 align-items-center justify-content-center mt-5 mt-lg-0'>
						<a class="text-white text-decoration-none pe-2" href=''>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/facebook-icon.png' ); ?>" alt="Facebook Icon">
						</a>
						<a class="text-white text-decoration-none" href=''>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/instagram-icon.png' ); ?>" alt="Facebook Icon">
						</a>
						<a class="text-white text-decoration-none" href=''>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/twitter-icon.png' ); ?>" alt="Facebook Icon">
						</a>
					</div>
				</div>
			</div><!-- /.container -->
			<!--Line -->
			<span class="w-100 border border-white opacity-25"></span>
			<div class="container">
				<div class="py-5 text-white-50 text-center text-lg-end w-100">
					2016&copy; All Rights Reserved. Weather App Theme by SmartClick!
				</div>
			</div>
			<a id="scroll-up-btn" class="position-absolute" href="#hero-section" type="button" role="button">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-scroll-up.png' ); ?>" alt="Scroll Down Icon">
			</a>
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
