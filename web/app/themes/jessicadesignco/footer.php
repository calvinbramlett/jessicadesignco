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

		</div>
	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	$(document).ready(function(){
		$(".menu-toggle").click(function(){
      $("#navbar").toggleClass("active");
    });

    $('.masonry').masonry({
		  fitWidth: true,
		  itemSelector: '.masonry-item'
		});

		$('body').fitvids();

	});
</script>

</body>
</html>
