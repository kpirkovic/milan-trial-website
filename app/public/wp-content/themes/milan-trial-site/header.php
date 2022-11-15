<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-dark' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'absolute_top' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'milan-trial-site' ); ?></a>

<div id="wrapper">
	<header>
		<nav id="header" class="navbar py-3 navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; elseif ( isset( $navbar_position ) && 'absolute_top' === $navbar_position ) : echo ' position-absolute start-0 top-0 w-100'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container d-flex justify-content-between">
				<a class="navbar-brand text-uppercase fs-4" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>
						
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'milan-trial-site' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse flex-grow-0">
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav d-flex gap-5 align-items-center mt-3 mt-md-0 fs-5',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
				</div><!-- /.navbar-collapse -->
				<div class='d-none d-lg-flex gap-4'>
					<a class="text-white text-decoration-none" href=''>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/facebook-icon.png' ); ?>" alt="Facebook Icon">
					</a>
					<a class="text-white text-decoration-none" href=''>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/instagram-icon.png' ); ?>" alt="Facebook Icon">
					</a>
					<a class="text-white text-decoration-none" href=''>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/twitter-icon.png' ); ?>" alt="Facebook Icon">
					</a>
				</div>
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

