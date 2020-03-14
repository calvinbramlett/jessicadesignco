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

	<div class="columns is-multiline">
		<div class="column is-half">
			<?php if( get_field('header') ): ?>
				<h1><?php the_field('header'); ?></h1>
			<?php endif; ?>

			<?php if( get_field('content') ): ?>
				<?php the_field('content'); ?>
			<?php endif; ?>
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

<?php
get_footer();
