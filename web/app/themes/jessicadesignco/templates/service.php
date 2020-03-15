<?php
/**
 /* Template Name: Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jessica_Design_Co
 */

get_header();
?>

	<?php
	$header_graphic = get_field('header_graphic');
	if( $header_graphic ):

	  $url = $header_graphic['url'];
	  $size = 'medium';
	  $graphic = $header_graphic['sizes'][ $size ];
	  ?>
	  <img class="header-graphic" src="<?php echo esc_url($graphic); ?>" />

	<?php endif; ?>


	<div class="columns is-multiline">
		<div class="column is-half">
			<h5 class="subtitle">Services</h5>
			<?php the_title( '<h1 class="page-title">', '.</h1>' );?>

			<?php the_field('intro_copy'); ?>
		</div>
		<div class="column is-half">
		</div>
	</div>


	

<?php
get_footer();
