<?php

/**
 * The plugin bootstrap file
 *
 * @link       				https://github.com/twittem/yotpo-utilities
 * @since             1.0.0
 * @package           Yotpo_Utilities
 *
 * @wordpress-plugin
 * Plugin Name:       Yotpo Utilities
 * Plugin URI:        https://github.com/twittem/yotpo-utilities
 * Description:       Supplements the YOTPO WooCommerce plugin with useful utilities and shortcodes.
 * Version:           0.1.0
 * Author:            Edward McIntyre
 * Author URI:        https://github.com/twittem
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       yotpo-utilities
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'YOTPO_UTILITIES_VERSION', '0.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-yotpo-utilities-activator.php
 */
function activate_yotpo_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-yotpo-utilities-activator.php';
	Yotpo_Utilities_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-yotpo-utilities-deactivator.php
 */
function deactivate_yotpo_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-yotpo-utilities-deactivator.php';
	Yotpo_Utilities_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_yotpo_utilities' );
register_deactivation_hook( __FILE__, 'deactivate_yotpo_utilities' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-yotpo-utilities.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_yotpo_utilities() {

	$plugin = new Yotpo_Utilities();
	$plugin->run();

}
run_yotpo_utilities();
