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

	<?php
		$header_graphic = get_field('header_graphic');
		if( $header_graphic ):

		  $url = $header_graphic['url'];
		  $size = 'large';
		  $graphic = $header_graphic['sizes'][ $size ];
		  ?>
		  <img class="header-graphic" src="<?php echo esc_url($graphic); ?>" />

	<?php endif; ?>

	<div class="columns is-multiline">
		<div class="column is-half">
			<h5 class="subtitle">Recent Work</h5>
			<?php the_title( '<h1 class="page-title">', '.</h1>' );?>
		</div>
		<div class="column is-half">
		</div>
	</div>

	<div class="button-group filter-button-group">
	  <a class="btn-floating">
	    <?php svg('filter');?> <span>All</span>
	  </a>
	  <ul class="filters">
	    <li><a class="filter-btn active" data-filter="*" data-value="All">All</a></li>
	    <li><a class="filter-btn" data-filter=".cat-brand" data-value="Branding">Branding</a></li>
	    <li><a class="filter-btn" data-filter=".cat-graphic" data-value="Graphic Design">Graphic Design</a></li>
	    <li><a class="filter-btn" data-filter=".cat-illustration" data-value="Illustration">Illustration</a></li>
	    <li><a class="filter-btn" data-filter=".cat-testimonial" data-value="Testimonial">Testimonial</a></li>
	  </ul>
	</div>
      
	<?php if( have_rows('portfolio') ): ?>
		<div id="portfolio-list">
			<div class="masonry columns is-multiline">

		    <?php while( have_rows('portfolio') ): the_row(); ?>

		      <?php if( get_row_layout() == 'image' ): ?>

						<?php
							$image = get_sub_field('portfolio_image');
							$pin_url = get_sub_field('pinterest_url');
							$cat = get_sub_field('category');
							if( $image ):

							  // Image variables.
							  $url = $image['url'];
							  $title = $image['title'];
							  $alt = $image['alt'];
							  $caption = $image['caption'];

							  // Thumbnail size attributes.
							  $size = 'full';
							  $img_size = $image['sizes'][ $size ];

							  ?>

							  <div class="column is-half-desktop masonry-item <?php echo $cat ?>">
							  	<div class="portfolio-image">
										<img src="<?php echo esc_url($img_size); ?>" alt="<?php echo esc_attr($alt); ?>"/>
						     		<a href="https://www.pinterest.com/pin/create/button/" data-pin-media="<?php echo esc_url($url); ?>" data-pin-do="buttonPin" data-pin-url="<?php echo esc_url( home_url( '/' ) ); ?>" data-pin-description="Jessica Design Co | <?php echo esc_attr($caption); ?>" data-pin-id="<?php echo $pin_url ?>">Pin It</a>
						     	</div>
					     	</div>

							<?php endif; ?>

		      <?php elseif( get_row_layout() == 'testimonial' ): ?>

						<div class="column is-half-desktop masonry-item cat-testimonial">
		       		<?php if(get_sub_field('video')): ?>
		        		<div class="testimonial video-testimonial">
									<h6 class="testimonial-header">Video Testimonial</h6>
									<video controls poster="<?php echo get_sub_field('video_thumbnail')['sizes']['large'] ?>">
									  <source src="<?php echo get_sub_field('video')?>" type="video/mp4">
									Your browser does not support the video tag.
									</video>

							<?php else: ?>
							
		        		<div class="testimonial">
									<h6 class="testimonial-header">Testimonial</h6>
							<?php endif; ?>

			        	<h4 class="quote"><?php the_sub_field('quote'); ?></h4>

			        	<div class="columns quote-byline is-gapless is-mobile">
			        		<div class="column">
			        			<?php if(get_sub_field('image')): ?>
											<div class="testimonial-image" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>');"></div>
										<?php else: ?>
											<div class="testimonial-image"></div>
			        			<?php endif; ?>
			        		</div>
			        		<div class="column">
										<h5><?php the_sub_field('name'); ?></h5>
										<h6><?php the_sub_field('company_name'); ?></h6>
			        		</div>
			        	</div>

			        	<div class="testimonial-footer"><?php svg('moon'); ?></div>
			        </div>
			      </div>

		      <?php endif; ?>
		    <?php endwhile; ?>

	  	</div>
	  </div>
	<?php endif; ?>

	<?php get_template_part('template-parts/page-footer'); ?>

	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rainbow.png" class="rainbow-overlay"/>

<?php
get_footer();
