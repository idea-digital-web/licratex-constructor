<?php

/**
 * Customize the stock Storefront homepage template to include the sidebar 
 and the sf_child_theme_before_homepage_content hook.
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>
	<section class="rotate">
		<div class="flexslider principal">
			<ul class="slides">
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-mercadopago.jpg"></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-zoom.jpg"></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-hoffman.jpg"></li>
			</ul>
		</div>
	</section>

	<div class="sf-child-theme-featured-products site-main">
		<?php
		/**
		 * @hooked storefront_homepage_content - 10
		 * @hooked storefront_featured_products - 20
		 */
		do_action( 'sf_child_theme_before_homepage_content' ); ?>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * @hooked storefront_recent_products - 30
			 * @hooked storefront_popular_products - 50
			 * @hooked storefront_on_sale_products - 60
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
