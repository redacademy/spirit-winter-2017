<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Testimonial Custom Post Type
function spirit_cpt_testimonials() {

	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimonial',
		'menu_name'             => 'Testimonials',
		'name_admin_bar'        => 'Testimonials',
		'archives'              => 'Testimonial Archives',
		'attributes'            => 'Testimonial Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Testimonials',
		'add_new_item'          => 'Add New Testimonial',
		'add_new'               => 'Add New Testimonial',
		'new_item'              => 'New Testimonial',
		'edit_item'             => 'Edit Testimonial',
		'update_item'           => 'Update Testimonial',
		'view_item'             => 'View Testimonial',
		'view_items'            => 'View Testimonials',
		'search_items'          => 'Search Testimonials',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Testimonials list',
		'items_list_navigation' => 'Testimonials list navigation',
		'filter_items_list'     => 'Filter Testimonials list',
	);
	$args = array(
		'label'                 => 'Testimonial',
		'description'           => 'Listing of testimonials',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'spirit_cpt_testimonials', 0 );


// Resource Pages Custom Post Type
// function spirit_cpt_resource_pages() {

// 	$labels = array(
// 		'name'                  => 'Resource Pages',
// 		'singular_name'         => 'Resource Page',
// 		'menu_name'             => 'Resource Pages',
// 		'name_admin_bar'        => 'Resource Pages',
// 		'archives'              => 'Resource Page Archives',
// 		'attributes'            => 'Resource Page Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Resource Pages',
// 		'add_new_item'          => 'Add New Resource Page',
// 		'add_new'               => 'Add New Resource Page',
// 		'new_item'              => 'New Resource Page',
// 		'edit_item'             => 'Edit Resource Page',
// 		'update_item'           => 'Update Resource Page',
// 		'view_item'             => 'View Resource Page',
// 		'view_items'            => 'View Resource Pages',
// 		'search_items'          => 'Search Resource Page',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Resource Pages list',
// 		'items_list_navigation' => 'Resource Pages list navigation',
// 		'filter_items_list'     => 'Filter Resource Pages list',
// 	);
// 	$args = array(
// 		'label'                 => 'Resource Page',
// 		'description'           => 'Listing of Resource Pages',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-book-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,		
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'resource_pages', $args );

// }
// add_action( 'init', 'spirit_cpt_resource_pages', 0 );