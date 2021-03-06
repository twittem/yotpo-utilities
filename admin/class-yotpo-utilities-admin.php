<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/twittem/yotpo-utilities
 * @since      1.0.0
 *
 * @package    Yotpo_Utilities
 * @subpackage Yotpo_Utilities/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Yotpo_Utilities
 * @subpackage Yotpo_Utilities/admin
 * @author     Your Name <email@example.com>
 */
class Yotpo_Utilities_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $yotpo_utilities    The ID of this plugin.
	 */
	private $yotpo_utilities;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $yotpo_utilities       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $yotpo_utilities, $version ) {

		$this->yotpo_utilities = $yotpo_utilities;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Yotpo_Utilities_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Yotpo_Utilities_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->yotpo_utilities, plugin_dir_url( __FILE__ ) . 'css/yotpo-utilities-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Yotpo_Utilities_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Yotpo_Utilities_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->yotpo_utilities, plugin_dir_url( __FILE__ ) . 'js/yotpo-utilities-admin.js', array( 'jquery' ), $this->version, false );

	}

}
