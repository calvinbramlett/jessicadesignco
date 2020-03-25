<?php
/**
 /* Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jessica_Design_Co
 */

get_header();
?>

	<header class="home-header">
		<?php get_template_part('template-parts/button'); ?>
	</header>
	<div class="home-content">
		<?php if( get_field('text_graphic') ): ?>
			<img src="<?php echo get_field('text_graphic'); ?>">
		<?php endif; ?>
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'services-menu'
			) );
			?>
		</nav>
		<a href="<?php echo get_field('portfolio_link', 'option'); ?>" class="portfolio-link"><?php echo get_field('portfolio_link_text', 'option'); ?></a>
	</div>
	<footer class="home-footer">
		Shop My Custom Art: <a href="https://www.thrillingunknown.com" target="blank">Thrilling Unknown</a>
	</footer>

<?php
get_footer();
