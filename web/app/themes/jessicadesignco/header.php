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
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="moon-logo stars"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/moon.svg"/></a>
	<div class="menu-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="main-logo stars"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/jessicadesignco.svg"/></a>
</div>
<div id="navigation">
	<div class="container">
		<header class="nav-header">
			<a href="mailto:jess@jessicadesign.co">jess@jessicadesign.co</a>
		</header>
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		<footer class="nav-footer">
			© 2020 | Jessica <span class="moon-glyph">☾</span> Design Co.
		</footer>
	</div>
</div>

	<div id="main-content" class="site-content">
		<div class="container">
