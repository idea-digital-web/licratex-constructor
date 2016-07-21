<?php 
/**
 * CONTENT
 * Customizamos subtítulos a las secciones de Homepage Template
 * limit ~> Cantidad total de productos a mostrar
 * columns ~> Cantidad de columnas de productos a mostrar
 * title ~> Título de la sección
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
				'orderby' => 'date',
				'order'   => 'desc',
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
				'orderby' => 'date',
				'order'   => 'desc',
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
				'orderby' => 'date',
				'order'   => 'desc',
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
				'orderby' => 'date',
				'order'   => 'desc',
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