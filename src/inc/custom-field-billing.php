<?php 
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_postcode']);
// unset($fields['billing']['billing_company']);
// unset($fields['billing']['billing_last_name']);
// unset($fields['billing']['billing_city']);

return $fields;
}
 ?>