<?php 

/*
INSERTAR ARCHIVO CSS STOREFRONT, 
Y ARCHIVOS CSS Y JS COMO THEME CHILD

get_template_directory_uri will look up parent theme location
get_stylesheet_directory_uri will look up child theme location
https://ithemes.com/2015/02/17/adding-scripts-wordpress-right-way/
http://themes.simplethemes.com/skeleton/tutorials/how-to-add-custom-css-and-javascript-using-a-child-theme/
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
 * Customizamos subtítulos a las secciones de Homepage Template
 limit ~> Cantidad total de productos a mostrar
 columns ~> Cantidad de columnas de productos a mostrar
 title ~> Título de la sección
 */

if ( ! function_exists( 'storefront_recent_products' ) ) {
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

			do_action( 'storefront_homepage_after_recent_products_title' );

			echo storefront_do_shortcode( 'recent_products', array(
				'per_page' => intval( $args['limit'] ),
				'columns'  => intval( $args['columns'] ),
			) );

			do_action( 'storefront_homepage_after_recent_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'storefront_on_sale_products' ) ) {
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

			do_action( 'storefront_homepage_after_on_sale_products_title' );

			echo storefront_do_shortcode( 'sale_products', array(
				'per_page' => intval( $args['limit'] ),
				'columns'  => intval( $args['columns'] ),
			) );

			do_action( 'storefront_homepage_after_on_sale_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'storefront_best_selling_products' ) ) {
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
			do_action( 'storefront_homepage_after_best_selling_products_title' );
			echo storefront_do_shortcode( 'best_selling_products', array(
				'per_page' => intval( $args['limit'] ),
				'columns'  => intval( $args['columns'] ),
			) );
			do_action( 'storefront_homepage_after_best_selling_products' );
			echo '</section>';
		}
	}
}

if ( ! function_exists( 'storefront_popular_products' ) ) {
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

			do_action( 'storefront_homepage_after_popular_products_title' );

			echo storefront_do_shortcode( 'top_rated_products', array(
				'per_page' => intval( $args['limit'] ),
				'columns'  => intval( $args['columns'] ),
			) );

			do_action( 'storefront_homepage_after_popular_products' );

			echo '</section>';
		}
	}
}

/**
Agregar Logo en el Header
*/
if ( ! function_exists( 'storefront_site_branding' ) ) {
	/**
	 * Display Site Branding
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding() {
		if ( true ) {
			?>
			<picture>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-ferrenobrega-350x233.png" >
				</a>
			</picture>
		<?php }
	}
}














 ?>