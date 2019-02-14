<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mavericks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php $favicon_url = get_template_directory_uri() . '/assets/img/favicon.ico'; ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_url; ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mavericks' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container fix-width">
			<div class="site-branding col-3">
				<?php
				$logo = file_get_contents( get_template_directory() . '/assets/img/logo.svg' );
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php echo $logo; ?>
							<span><?php bloginfo( 'name' ); ?></span>
						</a>
					</h1>
					<?php
				else :
					?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php echo $logo; ?>
							<span><?php bloginfo( 'name' ); ?></span>
						</a>
					</p>
					<?php
				endif;
				$mavericks_description = get_bloginfo( 'description', 'display' );
				if ( $mavericks_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $mavericks_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation col-10">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mavericks' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container fix-width">
