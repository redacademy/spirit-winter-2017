<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function custom_login_title(){
    echo '<h1>Sign In</h1> <p>Hello Board Members, Peer Leaders, Mentorvisors and Administrators, please sign in below</p>';
}
add_filter('login_headertitle','custom_login_title');


// add wp-login de nav
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2); function add_login_logout_link($items, $args) {         ob_start();         wp_loginout('index.php');         $loginoutlink = ob_get_contents();         ob_end_clean();         $items .= '<li class="portal">'. $loginoutlink .'</li>';     return $items; }

