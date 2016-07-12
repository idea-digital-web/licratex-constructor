<?php

function custom_footer_layout() {
	remove_action( 'storefront_footer', 'storefront_credit', 20);
}
add_action( 'init', 'custom_footer_layout' );