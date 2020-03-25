<?php
/**
 /* Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jessica_Design_Co
 */

get_header();
?>

	<video autoplay muted loop class="video-bg">
	  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/light-leak-2.mp4" type="video/mp4">
	</video>

	<div class="video-overlay">
		<div class="columns is-multiline">
			<div class="column is-half">
				<?php if( get_field('header') ): ?>
					<h1 class="page-title"><?php the_field('header'); ?></h1>
				<?php endif; ?>

				<?php if( get_field('content') ): ?>
					<div class="content">
						<?php the_field('content'); ?>
					</div>
				<?php endif; ?>

				<?php get_template_part('template-parts/button'); ?>

			</div>
			<div class="column is-half">
				<?php if( get_field('about_image') ): ?>
					<img src="<?php echo get_field('about_image'); ?>" data-pin-nopin="true"/>
				<?php endif; ?>
				<?php if( get_field('image_overlay_graphic') ): ?>
					<img src="<?php echo get_field('image_overlay_graphic'); ?>" data-pin-nopin="true"/>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php get_template_part('template-parts/page-footer'); ?>

<?php
get_footer();
