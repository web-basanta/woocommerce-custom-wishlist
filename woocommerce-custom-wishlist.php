<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://digiwebcam.in/
 * @since             1.0.0
 * @package           Woocommerce_Custom_Wishlist
 *
 * @wordpress-plugin
 * Plugin Name:       woocommerce-custom-wishlist
 * Plugin URI:        https://digiwebcam.in/
 * Description:       woocommerce-custom-wishlist
 * Version:           1.0.0
 * Author:            basanta
 * Author URI:        https://digiwebcam.in//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-custom-wishlist
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WOOCOMMERCE_CUSTOM_WISHLIST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-custom-wishlist-activator.php
 */
function activate_woocommerce_custom_wishlist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-custom-wishlist-activator.php';
	Woocommerce_Custom_Wishlist_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-custom-wishlist-deactivator.php
 */
function deactivate_woocommerce_custom_wishlist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-custom-wishlist-deactivator.php';
	Woocommerce_Custom_Wishlist_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_custom_wishlist' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_custom_wishlist' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-custom-wishlist.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_custom_wishlist() {

	$plugin = new Woocommerce_Custom_Wishlist();
	$plugin->run();

}
run_woocommerce_custom_wishlist();
