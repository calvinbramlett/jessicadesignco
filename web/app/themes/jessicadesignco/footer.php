<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jessica_Design_Co
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jessicadesignco' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jessicadesignco' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jessicadesignco' ), 'jessicadesignco', '<a href="http://jessicadesign.co">Jessica Bramlett</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

		</div>
	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	$(document).ready(function(){
		$(".menu-toggle").click(function(){
      $("#navbar").toggleClass("active");
    });
	});
</script>


</body>
</html>
