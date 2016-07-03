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

/*
AGREGAR MONEDA (Bs.)
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

 ?>