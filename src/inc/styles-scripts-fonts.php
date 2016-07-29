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
add_action('wp_enqueue_scripts', 'my_scripts', 11);

// function my_stylesheet() {
//     wp_enqueue_style( 'myStyle', get_stylesheet_directory_uri().'/style.css', array('theme'), '1.0', 'screen, projection'); 
// }
// add_action( 'wp_enqueue_scripts', 'my_stylesheet' );

// Agregar Fonts 
function add_fonts() {
	wp_enqueue_style( 'asap', '//fonts.googleapis.com/css?family=Asap:400,400i,700,700i&subset=latin-ext', array( 'storefront-style' ) );
}
add_action( 'wp_enqueue_scripts', 'add_fonts' );

// Agregar Vendors CSS 
function vendors_css() {
	wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array('storefront-style'));
}
add_action( 'wp_enqueue_scripts', 'vendors_css' );