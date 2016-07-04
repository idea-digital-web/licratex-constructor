<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->


<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendors/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider-principal').flexslider({
      animation: "slide",
      animationLoop: true,
      controlNav: false,
      directionNav: true,
    });
  });
</script>

<!-- flexslider-secondary -->
<script>
  (function() {
 
  // store the slider in a local variable
  var $window = $(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 600) ? 2 :
           (window.innerWidth < 900) ? 3 : 4;
  }
 
  $(function() {
    SyntaxHighlighter.all();
  });
 
  $window.load(function() {
    $('.flexslider-secondary').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 210,
      itemMargin: 5,
      controlNav: false,
      directionNav: true,
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize() // use function to pull in initial value
    });
  });
 
  // check grid size on resize event
  $window.resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });
}());

</script>

</body>
</html>
