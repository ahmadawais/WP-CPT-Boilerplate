<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.github.com/mrahmadbilal
 * @since      1.0.0
 *
 * @package    Wp_Cpt_Plugin
 * @subpackage Wp_Cpt_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Cpt_Plugin
 * @subpackage Wp_Cpt_Plugin/includes
 * @author     Ahmad Bilal <atbilal@gmail.com>
 */
class Wp_Cpt_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-cpt-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
