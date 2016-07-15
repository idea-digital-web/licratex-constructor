<?php 

/** Add Stylesheet - Scripts - Fonts */
require 'inc/styles-scripts-fonts.php';

/** Custom Storefront Template Hook */
require 'inc/custom-template-hook.php';

/** Custom Header */
require 'inc/custom-header.php';

/** Custom Content */
require 'inc/custom-content.php';

/** Custom Currency */
require 'inc/custom-currency.php';

/** Add Pretty Photo */
require 'inc/prettyphoto.php';


// add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
// function woo_archive_custom_cart_button_text() {
 
//         return __( 'My Button Text', 'woocommerce' );
 
// }












 ?>