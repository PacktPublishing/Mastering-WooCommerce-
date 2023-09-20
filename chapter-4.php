<?php
/**
* Plugin Name: Mastering WooCommerce Chapter 4 Custom Code
* Plugin URI: https://www.packtpub.com/product/mastering-woocommerce-4/9781838822835
* Description: Chapter 4 Custom Code for Mastering WooCommerce
* Version: 0.1
* Author: Patrick Rauland
* Author URI: https://www.speakinginbytes.com/
**/


add_filter( 'woocommerce_breadcrumb_defaults', 'mastering_woo_change_breadcrumb_delimiter', 20 );

function mastering_woo_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '🍟'
	$defaults['delimiter'] = ' &#127839; ';
	return $defaults;
}
