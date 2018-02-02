<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/twittem/yotpo-utilities
 * @since      1.0.0
 *
 * @package    Yotpo_Utilities
 * @subpackage Yotpo_Utilities/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Yotpo_Utilities
 * @subpackage Yotpo_Utilities/includes
 * @author     Your Name <email@example.com>
 */
class Yotpo_Utilities_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'yotpo-utilities',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
