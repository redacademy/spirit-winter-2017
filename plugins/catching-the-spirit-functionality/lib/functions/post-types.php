<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// About Pages Custom Post Type
// function spirit_cpt_about_pages() {

// 	$labels = array(
// 		'name'                  => 'About Pages',
// 		'singular_name'         => 'About Page',
// 		'menu_name'             => 'About Pages',
// 		'name_admin_bar'        => 'About Pages',
// 		'archives'              => 'About Page Archives',
// 		'attributes'            => 'About Page Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All About Pages',
// 		'add_new_item'          => 'Add New About Page',
// 		'add_new'               => 'Add New About Page',
// 		'new_item'              => 'New About Page',
// 		'edit_item'             => 'Edit About Page',
// 		'update_item'           => 'Update About Page',
// 		'view_item'             => 'View About Page',
// 		'view_items'            => 'View About Pages',
// 		'search_items'          => 'Search About Page',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'About Pages list',
// 		'items_list_navigation' => 'About Pages list navigation',
// 		'filter_items_list'     => 'Filter About Pages list',
// 	);
// 	$args = array(
// 		'label'                 => 'About Page',
// 		'description'           => 'Listing of About Pages',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-id-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,		
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'about_pages', $args );

// }
// add_action( 'init', 'spirit_cpt_about_pages', 0 );

// Programs Custom Post Type
// function spirit_cpt_programs() {

// 	$labels = array(
// 		'name'                  => 'Programs',
// 		'singular_name'         => 'Program',
// 		'menu_name'             => 'Programs',
// 		'name_admin_bar'        => 'Programs',
// 		'archives'              => 'Program Archives',
// 		'attributes'            => 'Program Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Programs',
// 		'add_new_item'          => 'Add New Program',
// 		'add_new'               => 'Add New Program',
// 		'new_item'              => 'New Program',
// 		'edit_item'             => 'Edit Program',
// 		'update_item'           => 'Update Program',
// 		'view_item'             => 'View Program',
// 		'view_items'            => 'View Programs',
// 		'search_items'          => 'Search Program',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Programs list',
// 		'items_list_navigation' => 'Programs list navigation',
// 		'filter_items_list'     => 'Filter Programs list',
// 	);
// 	$args = array(
// 		'label'                 => 'Program',
// 		'description'           => 'Listing of programs',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-location-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,		
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'programs', $args );

// }
// add_action( 'init', 'spirit_cpt_programs', 0 );


// Resource Pages Custom Post Type
function spirit_cpt_resource_pages() {

	$labels = array(
		'name'                  => 'Resource Pages',
		'singular_name'         => 'Resource Page',
		'menu_name'             => 'Resource Pages',
		'name_admin_bar'        => 'Resource Pages',
		'archives'              => 'Resource Page Archives',
		'attributes'            => 'Resource Page Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Resource Pages',
		'add_new_item'          => 'Add New Resource Page',
		'add_new'               => 'Add New Resource Page',
		'new_item'              => 'New Resource Page',
		'edit_item'             => 'Edit Resource Page',
		'update_item'           => 'Update Resource Page',
		'view_item'             => 'View Resource Page',
		'view_items'            => 'View Resource Pages',
		'search_items'          => 'Search Resource Page',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Resource Pages list',
		'items_list_navigation' => 'Resource Pages list navigation',
		'filter_items_list'     => 'Filter Resource Pages list',
	);
	$args = array(
		'label'                 => 'Resource Page',
		'description'           => 'Listing of Resource Pages',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'resource_pages', $args );

}
add_action( 'init', 'spirit_cpt_resource_pages', 0 );