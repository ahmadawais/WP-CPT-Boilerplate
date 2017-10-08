<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.github.com/mrahmadbilal
 * @since             1.0.0
 * @package           Wp_Cpt_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WP CPT Plugin
 * Plugin URI:        www.github.com/mrahmadbilal
 * Description:       This is a WordPress Cutom Post Type Plugin boilerplate. It makes creating custom post types very easy and saves a lot of time. It is also properly documented to make it easier for you to customize it as per your needs.
 * Version:           1.0.0
 * Author:            Ahmad Bilal
 * Author URI:        www.github.com/mrahmadbilal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-cpt-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-cpt-plugin-activator.php
 */
function activate_wp_cpt_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cpt-plugin-activator.php';
	Wp_Cpt_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-cpt-plugin-deactivator.php
 */
function deactivate_wp_cpt_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cpt-plugin-deactivator.php';
	Wp_Cpt_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_cpt_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wp_cpt_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-cpt-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_cpt_plugin() {

	$plugin = new Wp_Cpt_Plugin();
	$plugin->run();

}
run_wp_cpt_plugin();
