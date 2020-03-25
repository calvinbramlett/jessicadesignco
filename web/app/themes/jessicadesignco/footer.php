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

		var $grid = $('.masonry').isotope({
		  itemSelector: '.masonry-item',
		  percentPosition: true,
		  masonry: {
  			fitWidth: true
		  }
		});

		$grid.imagesLoaded().progress( function() {
		  $grid.isotope('layout');
		});

		$('.btn-floating').on('click', function() {
			$('.filter-button-group').toggleClass('toggle-active');
		});

		$('.filter-btn').on( 'click', function() {
			 
			$("html, body").animate({ scrollTop: 0 }, "slow");
		  $('.filter-btn').removeClass('active');
		  $(this).addClass('active');
		  var filterValue = $(this).attr('data-filter');
		  var filterText = $(this).attr('data-value');
		  $grid.isotope({ filter: filterValue });


		  $('.btn-floating span').text(filterText);
		});

		$('body').fitvids({ ignore: '.video-bg'});

	});
</script>

</body>
</html>
