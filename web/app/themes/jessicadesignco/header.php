<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jessica_Design_Co
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="navbar">
	<a href="/" class="moon-logo stars"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/moon.svg"/></a>
	<div class="menu-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<a href="/" class="main-logo stars"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/jessicadesignco.svg"/></a>
</div>
<div id="navigation">
	<div class="container">
		<header class="nav-header">
			<a href="mailto:jess@jessicadesign.co">jess@jessicadesign.co</a>
		</header>
		<nav>
			<a href="/branding">Branding.</a>
			<a href="/illustration">Illustration.</a>
			<a href="/graphic-design">Graphic Design.</a>
			<a href="/pinterest">Pinterest.</a>
			<a href="/portfolio">Portfolio.</a>
			<a href="/about">About.</a>
			<a href="https://www.thrillingunknown.com" target="blank">Shop art.</a>
			<a href="/">schedule a call.</a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		<footer class="nav-footer">
			© 2020 | Jessica <span class="moon-glyph">☾</span> Design Co.
		</footer>
	</div>
</div>

<div id="page" class="site">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jessicadesignco' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$jessicadesignco_description = get_bloginfo( 'description', 'display' );
			if ( $jessicadesignco_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $jessicadesignco_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jessicadesignco' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation --> -->
	</header><!-- #masthead -->
 -->
	<div id="main-content" class="site-content">
		<div class="container">
