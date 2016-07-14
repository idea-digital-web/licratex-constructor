<?php 

function custom_storefront_template_hook() {
	remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	remove_action( 'homepage', 'storefront_homepage_content', 10 );
	remove_action( 'homepage', 'storefront_featured_products', 40 );
	remove_action( 'homepage', 'storefront_product_categories', 20 );
	remove_action( 'homepage', 'storefront_popular_products', 80 );
	remove_action( 'storefront_footer', 'storefront_credit', 20);
	remove_action( 'storefront_header', 'storefront_header_cart', 60);
	add_action( 'storefront_header', 'storefront_secondary_navigation_wrapper', 22 );
	add_action( 'storefront_header', 'banner_header', 25 );
	add_action( 'storefront_header', 'header_cart', 35 );
	add_action( 'storefront_header', 'storefront_secondary_navigation_wrapper_close', 41 );
}
add_action( 'init', 'custom_storefront_template_hook' );