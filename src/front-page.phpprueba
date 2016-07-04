<?php
/**
 * The Front End Template file.
 *
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// do_action( 'storefront_sidebar' );
get_footer();
