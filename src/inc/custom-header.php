<?php 

/**
 * HEADER
/**

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
				<img src="http://i0.wp.com/tiendas.ideapruebas.com/wp-content/uploads/2016/08/logo-header.png" class="logo_header">
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
			<img src="http://i0.wp.com/tiendas.ideapruebas.com/wp-content/uploads/2016/08/banner-header.png" >
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