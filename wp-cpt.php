<?php

/**
* @link              https://github.com/mrahmadbilal
* @since             1.0.0
* @package           WP_Cpt
* @wordpress-plugin
* Plugin Name:       WP CPT Plugin.
* Plugin URI:        https://github.com/mrahmadbilal/WP-CPT-Boilerplate
* Description:       This is a WordPress Custom Post Type Plugin boilerplate. It makes creating custom post types very easy and saves a lot of time. It is properly documented so it is easier for you to customize it as per your requirements.
* Version:           1.0.0
* Author:            mrahmadbilal
* Author URI:        https://github.com/mrahmadbilal
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_CPT_VERSION', '1.0.0' );

/**
* Registers the Custom Post Type hook.
* @since 1.0.0
* @uses add_action()
*/

add_action( 'init' ,'wp_new_cpt');

/**
* Includes the file containing Custom Post Type code.
* @since 1.0.0
* @uses require_once()
*/

require_once(dirname(__FILE__).'/wp-includes/cpt.php');

/**
* The code that runs during plugin activation.
* Uses activaiton hook.
*/

function wp_cpt_activation() {
 
  	// Write the activation code here.
}

register_activation_hook( __FILE__ , 'wp_cpt_activation');

/**
* The code that runs during plugin deactivation.
* Uses deactivaiton hook.
*/

function wp_cpt_deactivation() {
 
  	// Write the deactivation code here.
}

register_deactivation_hook( __FILE__ , 'wp_cpt_deactivation');