<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.github.com/mrahmadbilal
 * @since      1.0.0
 *
 * @package    Wp_Cpt_Plugin
 * @subpackage Wp_Cpt_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Cpt_Plugin
 * @subpackage Wp_Cpt_Plugin/admin
 * @author     Ahmad Bilal <atbilal@gmail.com>
 */
class Wp_Cpt_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Wp_Cpt_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Cpt_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-cpt-plugin-admin.css', array(), $this->version, 'all' );

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
		 * defined in Wp_Cpt_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Cpt_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-cpt-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

		/**
		* Creates a new custom post type()
		*
		* @since 1.0.0
		* @access public
		* @uses register_post_type()
		*/

		public static function new_cpt () {
	$labels = array(
		'name'               => _x( 'Custom Post Types', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Custom Post Type', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Custom Post Types', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Custom Post Type', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Custom Post Type', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Custom Post Type', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Custom Post Type', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Custom Post Type', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Custom Post Type', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Custom Post Types', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Custom Post Types', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Custom Post Types:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Custom Post Types found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Custom Post Types found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'               => $labels, // An array of labels for this post type. 
        'description'          => __( 'Description.', 'your-plugin-textdomain' ), // A short descriptive summary of what the post type is.
		'public'               => true,    // Whether a post type is intended for use publicly either via the admin interface or by front-end users.
		'publicly_queryable'   => true,    // Whether queries can be performed on the front end for the post type as part of parse_request().
		'show_ui'              => true,    // Whether to generate and allow a UI for managing this post type in the admin.
		'show_in_menu'         => true,    // Whether to show this post type in admin menu. 
		'show_in_admin_bar'    => true,    // Whether to make this post available via adminn bar.
		'query_var'            => true,
		'rewrite'              => array( 'slug' => 'book' ),
		'capability_type'      => 'post',  // The string to use to build the read, edit, and delete capabilities.
		'has_archive'          => true,    // Whether there should be post type archives, or if a string, the archive slug to use.
		'hierarchical'         => false,   // Whether the post type is hierarchical (e.g. page).
		'menu_position'        => null,    // The position in the menu order the post type should appear. default is null, means at the bottom.
		'exclude_from_search'  => false,   // Whether to exclude posts in this post type from fron-end search.
		'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ), // Core feature(s) the post type supports.
		'can_export'           => true,    // Whether to allow this post type to be exported. 
		'delete_with_user'     => null,    // Whether to delete posts of this type when deleting a user. If true, posts of this type belonging to the user will be moved to trash when then user is deleted. If false, posts of this type belonging to the user will *not* be trashed or deleted. 
	);

	register_post_type( 'book', $args ); // registers the post type.
}

}
