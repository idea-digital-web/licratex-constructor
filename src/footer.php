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
		<?php get_template_part( 'templates/content', 'googlemap' ); ?>
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

			<?php get_template_part( 'templates/footer', 'content' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php get_template_part( 'templates/footer', 'credits'); ?>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php get_template_part( 'templates/footer', 'scripts' ); ?>




<?php wp_footer(); ?>
</body>
</html>
