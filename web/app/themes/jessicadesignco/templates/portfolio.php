<?php
/**
 /* Template Name: Portfolio
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
		</div>
		<div class="column is-half">
		</div>
	</div>

	

<?php
get_footer();
