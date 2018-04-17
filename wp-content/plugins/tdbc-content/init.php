<?php
/*
	Plugin Name: TDBC Content
	Description: Meta content and post types specific to thinkdobecreate.com
	Author: 5t3ph
 */
 
/*
 * Register Custom Post Type
 *
 * Type: case_study
 */
function case_study() {

	$labels = array(
		'name'                => 'Case Studies',
		'singular_name'       => 'Case Study',
		'menu_name'           => 'Case Studies',
		'parent_item_colon'   => 'Parent Case Study:',
		'all_items'           => 'All Case Studies',
		'view_item'           => 'View Case Study',
		'add_new_item'        => 'Add New Case Study',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Case Study',
		'update_item'         => 'Update Case Study',
		'search_items'        => 'Search Case Studies',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$rewrite = array(
		'slug'                => 'work',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => false,
	);
	$args = array(
		'label'               => 'case_study',
		'description'         => 'Displays Work',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'case_study', $args );

}
add_action( 'init', 'case_study', 0 );