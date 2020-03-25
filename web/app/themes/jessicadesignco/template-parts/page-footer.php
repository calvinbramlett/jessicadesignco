<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jessica_Design_Co
 */

?>

<?php if( !is_page_template('templates/about.php') ):?>
	<footer class="content-footer">

		<div class="columns footer-nav-container">
			<div class="column">
				
				<?php if( is_page_template('templates/service.php') ):?>
					<h6>Other Services</h6>
				<?php else: ?>
					<h6>Services</h6>
				<?php endif; ?>

				<nav class="footer-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'services-menu'
					) );
					?>
				</nav>

				<?php if( !is_page_template('templates/portfolio.php') ):?>
					<a href="<?php echo get_field('portfolio_link', 'option'); ?>" class="portfolio-link"><?php echo get_field('portfolio_link_text', 'option'); ?></a>
				<?php endif;?>

			</div>
			<div class="column footer-button">
				<?php get_template_part('template-parts/button'); ?>
			</div>
		</div>
	</footer>
<?php endif; ?>

<div class="social-footer">
	<div class="columns">
		<div class="column is-half">
			<nav class="social-nav">
				<a href="https://www.instagram.com/jessicadesignco" target="blank"><?php svg('instagram'); ?></a>
				<a href="https://www.youtube.com/coloroverboard" target="blank"><?php svg('youtube'); ?></a>
				<a href="https://www.facebook.com/jessicadesignco" target="blank"><?php svg('facebook'); ?></a>
				<a href="https://www.dribbble.com/jessicabramlett" target="blank"><?php svg('dribbble'); ?></a>
				<a href="https://www.pinterest.com/jessicadesignco" target="blank"><?php svg('pinterest'); ?></a>
				<span class="social-nav-name">Jessica <span class="moon-glyph">☾</span> Design Co.<span>
			</nav>
		</div>
		<div class="column is-half">
			<a href="mailto:jess@jessicadesign.co?subject=Jessica Design Co. | Contact" target="blank">jess@jessicadesign.co</a>
		</div>
	</div>
</div>