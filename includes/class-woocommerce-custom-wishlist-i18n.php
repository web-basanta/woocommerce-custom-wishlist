<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://digiwebcam.in/
 * @since      1.0.0
 *
 * @package    Woocommerce_Custom_Wishlist
 * @subpackage Woocommerce_Custom_Wishlist/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Custom_Wishlist
 * @subpackage Woocommerce_Custom_Wishlist/includes
 * @author     basanta <basanta.solivatech@gmail.com>
 */
class Woocommerce_Custom_Wishlist_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-custom-wishlist',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
