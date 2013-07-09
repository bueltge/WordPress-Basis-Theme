<?php
/**
 * WP Basis Theme functions and definitions
 * 
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, wp_basis_setup(), sets up the theme by registering support
 * for various features in WordPress, such as a custom background and a navigation menu.
 * 
 * When using a child theme
 * @link    http://codex.wordpress.org/Theme_Development
 * @link    http://codex.wordpress.org/Child_Themes
 * you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see 
 * @link     http://codex.wordpress.org/Plugin_API.
 * 
 * @package  WP Basis
 * @since    05/08/2012  0.0.1
 * @version  01/21/2013
 * @author   fb
 */

// check for right php version
$correct_php_version = version_compare( phpversion(), '5.3.0', '>=' );

if ( ! $correct_php_version ) {
	echo 'The WP Basis Theme requires <strong>PHP 5.3</strong> or higher.<br>';
	echo 'You are running PHP ' . phpversion();
	exit;
}

/**
 * Autoload all files from folder inc
 * Current no subdirectories
 * 
 * @since   04/15/2013
 * @return  void
 */
function wp_basis_load_files() {
	
	// load required classes
	foreach( glob( dirname( __FILE__ ) . '/inc/*.php' ) as $path ) 
		require_once $path;
}
wp_basis_load_files();

