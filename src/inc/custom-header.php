<?php 

/**
 * HEADER

 * Agregamos o eliminamos el hook:
/**
 * Functions hooked into storefront_header action
 *
 * @hooked storefront_skip_links                       - 0
 * @hooked storefront_social_icons                     - 10
 * @hooked storefront_site_branding                    - 20
 * @hooked storefront_product_search                   - 30
 * @hooked storefront_secondary_navigation             - 40
 * @hooked storefront_primary_navigation_wrapper       - 42
 * @hooked storefront_primary_navigation               - 50
 * @hooked storefront_header_cart                      - 60
 * @hooked storefront_primary_navigation_wrapper_close - 68
 */

function custom_header_layout() {
	add_action( 'storefront_header', 'storefront_secondary_navigation_wrapper', 22 );
	add_action( 'storefront_header', 'banner_header', 25 );
	add_action( 'storefront_header', 'header_cart', 35 );
	add_action( 'storefront_header', 'storefront_secondary_navigation_wrapper_close', 41 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60);
}
add_action( 'init', 'custom_header_layout' );

/**
 * Agregando Carrito de Compras en el Header
*/

function header_cart() {
	if ( is_woocommerce_activated() ) {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
	?>
	<ul class="site-header-cart menu">
		<li class="<?php echo esc_attr( $class ); ?>">
			<?php storefront_cart_link(); ?>
		</li>
		<li>
			<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
		</li>
	</ul>
	<?php
	}
}

/**
 * Agregar Logo en el Header
*/

function storefront_site_branding() {
	?>
		<picture class='logo_header'>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-header.png" class="logo_header">
			</a>
		</picture>
	<?php 
}

/**
Agregar Banner en el Header
*/

function banner_header() {
	?>
		<picture>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-header.png" >
		</picture>
	<?php 
}

/**
 * Header secondary navigation wrapper
 */
function storefront_secondary_navigation_wrapper() {
	echo '<section class="secondary_navigation_wrapper">';
}

/**
 * The secondary navigation wrapper close
 */
function storefront_secondary_navigation_wrapper_close() {
	echo '</section>';
}