<?php 

/*
INSERTAR ARCHIVO CSS STOREFRONT, 
Y ARCHIVOS CSS Y JS COMO THEME CHILD

get_template_directory_uri will look up parent theme location
get_stylesheet_directory_uri will look up child theme location
https://ithemes.com/2015/02/17/adding-scripts-wordpress-right-way/
http://themes.simplethemes.com/skeleton/tutorials/how-to-add-custom-css-and-javascript-using-a-child-theme/
*/
function insertScript(){
        wp_register_script('myScript', get_stylesheet_directory_uri(). '/js/main.min.js', array('jquery'), '1', true );
        wp_enqueue_script('myScript');
}
add_action("wp_enqueue_scripts", "insertScript", 11);

function insertStyle() {
    wp_enqueue_style( 'myStyle', get_stylesheet_directory_uri().'/css/style.min.css', array('theme'), '1.0', 'screen, projection'); 
}
add_action( 'wp_enqueue_scripts', 'insertStyle' );

/**
 * Agregar Google Fonts Asap
 */

function google_fonts() {
	wp_enqueue_style( 'asap', '//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic', array( 'storefront-style' ) );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

/*
Agregar Moneda: Bolívares Débiles (Bs.)
*/
add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Bolívares Débiles', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = 'Bs.'; break;
     }
     return $currency_symbol;
}

/**
 * Customizamos el color color tweaks
 */

function sf_child_theme_color_cerise_red( $color ) {
	$color = '#E23D54';
	return $color;
}
add_filter( 'storefront_default_header_background_color', 'sf_child_theme_color_cerise_red' );

function sf_child_theme_color_white( $color ) {
	$color = '#ffffff';
	return $color;
}
add_filter( 'storefront_default_header_text_color', 'sf_child_theme_color_white' );

function sf_child_theme_color_mine_shaft( $color ) {
	$color = '#3F3F3F';
	return $color;
}
add_filter( 'storefront_default_button_background_color', 'sf_child_theme_color_mine_shaft' );

function sf_child_theme_color_peter_river( $color ) {
	$color = '#3498db';
	return $color;
}
add_filter( 'storefront_default_button_alt_background_color', 'sf_child_theme_color_peter_river' );
add_filter( 'storefront_default_accent_color', 'sf_child_theme_color_peter_river' );
add_filter( 'storefront_default_footer_link_color', 'sf_child_theme_color_peter_river' );


/**
 * Adjust the storefront homepage template layout
 */

function sf_child_theme_homepage_layout() {
	remove_action( 'homepage', 'storefront_homepage_content', 10 );
	remove_action( 'homepage', 'storefront_featured_products', 40 );
	remove_action( 'homepage', 'storefront_product_categories', 20 );
	remove_action( 'homepage', 'storefront_popular_products', 50 );

	// add_action( 'sf_child_theme_before_homepage_content', 'storefront_homepage_content', 10 );
	// add_action( 'sf_child_theme_before_homepage_content', 'storefront_featured_products', 20 );
}
add_action( 'init', 'sf_child_theme_homepage_layout' );

/**
 * Homepage
 */

function sf_chilld_theme_product_columns( $args ) {
	$args['limit'] = 12;
	$args['columns'] = 4;
	return $args;
}
add_filter( 'storefront_featured_products_args', 'sf_chilld_theme_product_columns' );
add_filter( 'storefront_recent_products_args', 'sf_chilld_theme_product_columns' );
add_filter( 'storefront_popular_products_args', 'sf_chilld_theme_product_columns' );
add_filter( 'storefront_on_sale_products_args', 'sf_chilld_theme_product_columns' );
 ?>