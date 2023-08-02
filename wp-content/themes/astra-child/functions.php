<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
add_filter( 'wp_nav_menu_items', 'prefix_add_menu_item', 10, 2 );

function prefix_add_menu_item ( $items, $args ) {
	
	if(is_user_logged_in()) {

		if( $args->theme_location == 'primary' ) {
        
			$items_array = array();
			while ( false !== ( $item_pos = strpos ( $items, '<li', 10 ) ) ) // Add the position where the menu item is placed
			{
				$items_array[] = substr($items, 0, $item_pos);
				$items = substr($items, $item_pos);
			}
			$items_array[] = $items;
			array_splice($items_array, 1, 0, '<li class="menu-item"><a class="menu-link admin-gras" href="'. get_admin_url() .'">Admin</a></li>'); // insert custom item after first item one
	
			$items = implode('', $items_array);
		}
	}
		   
	return $items;
}