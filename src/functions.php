<?php 

/**
 * INSERTAR ARCHIVO CSS STOREFRONT, 
 * Y ARCHIVOS CSS Y JS COMO THEME CHILD

 * get_template_directory_uri will look up parent theme location
 * get_stylesheet_directory_uri will look up child theme location
 * https://ithemes.com/2015/02/17/adding-scripts-wordpress-right-way/
 * http://themes.simplethemes.com/skeleton/tutorials/
 * how-to-add-custom-css-and-javascript-using-a-child-theme/
*/
function my_scripts(){
        wp_register_script('myScript', get_stylesheet_directory_uri(). '/js/main.min.js', array('jquery'), '1', true );
        wp_enqueue_script('myScript');
}
add_action("wp_enqueue_scripts", "my_scripts", 11);

function my_stylesheet() {
    wp_enqueue_style( 'myStyle', get_stylesheet_directory_uri().'/css/style.min.css', array('theme'), '1.0', 'screen, projection'); 
}
add_action( 'wp_enqueue_scripts', 'my_stylesheet' );

/**
 * Agregar Google Fonts Asap
 */

function google_fonts() {
	wp_enqueue_style( 'asap', '//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic', array( 'storefront-style' ) );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

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
		<picture>
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

/**
 * CUSTOMIZAMOS TEMPLATE-HOMEPAGE

 * Agregamos o eliminamos el hook:
 * @hooked storefront_homepage_content      - 10
 * @hooked storefront_product_categories    - 20
 * @hooked storefront_recent_products       - 30
 * @hooked storefront_featured_products     - 40
 * @hooked storefront_popular_products      - 50
 * @hooked storefront_on_sale_products      - 60
 * @hooked storefront_best_selling_products - 70
 */

function custom_homepage_layout() {
	remove_action( 'homepage', 'storefront_homepage_content', 10 );
	remove_action( 'homepage', 'storefront_featured_products', 40 );
	remove_action( 'homepage', 'storefront_product_categories', 20 );
	remove_action( 'homepage', 'storefront_popular_products', 50 );
}
add_action( 'init', 'custom_homepage_layout' );

/**
 * CONTENT
 * Customizamos subtítulos a las secciones de Homepage Template
 * limit ~> Cantidad total de productos a mostrar
 * columns ~> Cantidad de columnas de productos a mostrar
 * title ~> Título de la sección
 */

/**
 * Display Recent Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since  1.0.0
 * @param array $args the product section args.
 * @return void
 */

function storefront_recent_products( $args ) {

	if ( is_woocommerce_activated() ) {

		$args = apply_filters( 'storefront_recent_products_args', array(
			'limit' 			=> 4,
			'columns' 			=> 4,
			'title'				=> __( 'Los más recientes', 'storefront' ),
		) );

		echo '<section class="storefront-product-section storefront-recent-products">';

		do_action( 'storefront_homepage_before_recent_products' );

		echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';
		echo '<div class="section-title__borderbottom">
		<div class="borderbottom"></div>
		<div class="borderbottom"></div>
		</div>';

		do_action( 'storefront_homepage_after_recent_products_title' );

		echo storefront_do_shortcode( 'recent_products', array(
			'per_page' => intval( $args['limit'] ),
			'columns'  => intval( $args['columns'] ),
		) );

		do_action( 'storefront_homepage_after_recent_products' );

		echo '</section>';
	}
}

/**
 * Display On Sale Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @param array $args the product section args.
 * @since  1.0.0
 * @return void
 */

function storefront_on_sale_products( $args ) {

	if ( is_woocommerce_activated() ) {

		$args = apply_filters( 'storefront_on_sale_products_args', array(
			'limit'   => 4,
			'columns' => 4,
			'title'   => __( 'Ofertas', 'storefront' ),
		) );

		echo '<section class="storefront-product-section storefront-on-sale-products">';

		do_action( 'storefront_homepage_before_on_sale_products' );

		echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';
		echo '<div class="section-title__borderbottom">
		<div class="borderbottom"></div>
		<div class="borderbottom"></div>
		</div>';

		do_action( 'storefront_homepage_after_on_sale_products_title' );

		echo storefront_do_shortcode( 'sale_products', array(
			'per_page' => intval( $args['limit'] ),
			'columns'  => intval( $args['columns'] ),
		) );

		do_action( 'storefront_homepage_after_on_sale_products' );

		echo '</section>';
	}
}

/**
 * Display Best Selling Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since 2.0.0
 * @param array $args the product section args.
 * @return void
 */

function storefront_best_selling_products( $args ) {
	if ( is_woocommerce_activated() ) {
		$args = apply_filters( 'storefront_best_selling_products_args', array(
			'limit'   => 4,
			'columns' => 4,
			'title'	  => esc_attr__( 'Los más vendidos', 'storefront' ),
		) );
		echo '<section class="storefront-product-section storefront-best-selling-products">';
		do_action( 'storefront_homepage_before_best_selling_products' );
		echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';
		echo '<div class="section-title__borderbottom">
		<div class="borderbottom"></div>
		<div class="borderbottom"></div>
		</div>';
		do_action( 'storefront_homepage_after_best_selling_products_title' );
		echo storefront_do_shortcode( 'best_selling_products', array(
			'per_page' => intval( $args['limit'] ),
			'columns'  => intval( $args['columns'] ),
		) );
		do_action( 'storefront_homepage_after_best_selling_products' );
		echo '</section>';
	}
}

/**
 * Display Popular Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since  1.0.0
 * @param array $args the product section args.
 * @return void
 */

function storefront_popular_products( $args ) {

	if ( is_woocommerce_activated() ) {

		$args = apply_filters( 'storefront_popular_products_args', array(
			'limit'   => 4,
			'columns' => 4,
			'title'   => __( 'Los más populares', 'storefront' ),
		) );

		echo '<section class="storefront-product-section storefront-popular-products">';

		do_action( 'storefront_homepage_before_popular_products' );

		echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';
		echo '<div class="section-title__borderbottom">
		<div class="borderbottom"></div>
		<div class="borderbottom"></div>
		</div>';

		do_action( 'storefront_homepage_after_popular_products_title' );

		echo storefront_do_shortcode( 'top_rated_products', array(
			'per_page' => intval( $args['limit'] ),
			'columns'  => intval( $args['columns'] ),
		) );

		do_action( 'storefront_homepage_after_popular_products' );

		echo '</section>';
	}
}

/**
 * Agregar Moneda: Bolívares Débiles (Bs.)
 */

add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Bolívares Débiles', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = 'Bs. '; break;
     }
     return $currency_symbol;
}














 ?>