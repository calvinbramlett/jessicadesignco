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
			<h5 class="subtitle">Recent Work</h5>
			<?php the_title( '<h1 class="entry-title">', '.</h1>' );?>
		</div>
		<div class="column is-half">
		</div>
	</div>

	<?php if( have_rows('portfolio') ): ?>
		<div id="portfolio-list">
	    <?php while( have_rows('portfolio') ): the_row(); ?>
	      <?php if( get_row_layout() == 'image' ): ?>

					<?php
						$image = get_sub_field('portfolio_image');
						$pin_url = get_sub_field('pinterest_url');
						if( $image ):

						  // Image variables.
						  $url = $image['url'];
						  $title = $image['title'];
						  $alt = $image['alt'];
						  $caption = $image['caption'];

						  // Thumbnail size attributes.
						  $size = 'large';
						  $img_size = $image['sizes'][ $size ];

						  ?>

						  <div class="portfolio-image">
								<img src="<?php echo esc_url($img_size); ?>" alt="<?php echo esc_attr($alt); ?>"/>
				     		<a href="https://www.pinterest.com/pin/create/button/" data-pin-media="<?php echo esc_url($url); ?>" data-pin-do="buttonPin" data-pin-url="<?php echo esc_url( home_url( '/' ) ); ?>" data-pin-description="Jessica Design Co | <?php echo esc_attr($caption); ?>" data-pin-id="<?php echo $pin_url ?>">Pin It</a>
				     	</div>

						<?php endif; ?>

	      <?php elseif( get_row_layout() == 'testimonial' ): ?>

	        <div class="testimonial">
						<h6>Testimonial</h6>
	        	<h4 class="quote"><?php the_sub_field('quote'); ?></h4>

	        	<img src="<?php echo get_sub_field('image'); ?>" data-pin-nopin="true"/>

	        	<div class="testimonial-footer"><?php svg('moon'); ?></div>
	        </div>

	      <?php endif; ?>
	    <?php endwhile; ?>
	  </div>
	<?php endif; ?>

<?php
get_footer();
