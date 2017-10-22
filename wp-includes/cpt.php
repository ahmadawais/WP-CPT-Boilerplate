<?php

/**
* Creates a new custom post type()
* @since 1.0.0
* @uses register_post_type()
*/

function wp_new_cpt() {

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
		'query_var'            => true,    // Triggers the handling of rewrites for this post type.
		'rewrite'              => true,	   // Sets the query_var key for this post type.
		'capability_type'      => 'post',  // The string to use to build the read, edit, and delete capabilities.
		'has_archive'          => true,    // Whether there should be post type archives, or if a string, the archive slug to use.
		'hierarchical'         => false,   // Whether the post type is hierarchical (e.g. page).
		'menu_position'        => null,    // The position in the menu order the post type should appear. default is null, means at the bottom.
		'exclude_from_search'  => false,   // Whether to exclude posts in this post type from fron-end search.
		'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ), // Core feature(s) the post type supports.
		'can_export'           => true,    // Whether to allow this post type to be exported. 
		'delete_with_user'     => null,    // Whether to delete posts of this type when deleting a user. If true, posts of this type belonging to the user will be moved to trash when then user is deleted. If false, posts of this type belonging to the user will *not* be trashed or deleted. 
	);

	register_post_type( 'wp_new_cpt', $args ); // registers the post type.
}
