<?php

/**
 * Fired during plugin activation
 *
 * @link       https://digiwebcam.in/
 * @since      1.0.0
 *
 * @package    Woocommerce_Custom_Wishlist
 * @subpackage Woocommerce_Custom_Wishlist/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Custom_Wishlist
 * @subpackage Woocommerce_Custom_Wishlist/includes
 * @author     basanta <basanta.solivatech@gmail.com>
 */
class Woocommerce_Custom_Wishlist_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		Woocommerce_Custom_Wishlist_Activator_DB::cheate_Tables();
	}

}
