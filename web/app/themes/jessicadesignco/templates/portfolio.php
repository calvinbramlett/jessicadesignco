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
    <?php while( have_rows('portfolio') ): the_row(); ?>
      <?php if( get_row_layout() == 'image' ): ?>

     		<img src="<?php echo get_sub_field('portfolio_image');?>"/>

      <?php elseif( get_row_layout() == 'testimonial' ): ?>

        <div class="testimonial">
					<h6>Testimonial</h6>
        	<h4 class="quote"><?php the_sub_field('quote'); ?></h4>

        	<div class="testimonial-footer"><?php svg('moon'); ?></div>
        </div>

      <?php endif; ?>
    <?php endwhile; ?>
	<?php endif; ?>

<?php
get_footer();
