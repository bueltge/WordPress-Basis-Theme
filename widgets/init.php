<?php
/**
 * Init wor Widgetized area
 * 
 * @package  WP Basis
 * @since    06/05/2012  0.0.1
 * @version  06/05/2012
 * @author   fb
 */

/**
 * Set namespace to encapsulating items
 * @link     http://www.php.net/manual/en/language.namespaces.rationale.php
 * 
 * @since    06/05/2012  0.0.1
 * @version  06/05/2012
 * @author   fb
 */
namespace Wp_Basis\Widgets;

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since    06/05/2012  0.0.1
 * @version  06/05/2012
 * @author   fb
 */
add_action( 'widgets_init', '\Wp_Basis\Widgets\widgets_init' );
function widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wp_basis' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'The primary Sidebar', 'wp_basis' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => "</aside>",
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
