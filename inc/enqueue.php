<?php
/**
 * Enqueue scripts and styles for the theme.
 *
 * @package IL_Forno_a_Legna
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function il_forno_a_legna_scripts() {

	// Get theme version from style.css.
	$theme_version = wp_get_theme()->get( 'Version' );

	/*
	* ----------------- ENQUEUE STYLES -----------------
	*/

	// Bootstrap 5 CSS from CDN
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all' );

	// Main theme stylesheet (style.css)
	wp_enqueue_style( 'il-forno-a-legna-style', get_stylesheet_uri(), array(), $theme_version );

	// Custom main stylesheet (css/main.css) - Uses filemtime for auto-versioning
	wp_enqueue_style( 'il-forno-a-legna-main', get_template_directory_uri() . '/css/main.css', array( 'il-forno-a-legna-style' ), filemtime( get_template_directory() . '/css/main.css' ), 'all' );

	// Custom responsive stylesheet (css/responsive.css) - Uses filemtime for auto-versioning
	wp_enqueue_style( 'il-forno-a-legna-responsive', get_template_directory_uri() . '/css/responsive.css', array( 'il-forno-a-legna-main' ), filemtime( get_template_directory() . '/css/responsive.css' ), 'all' );


	/*
	* ----------------- ENQUEUE SCRIPTS -----------------
	*/

	// Bootstrap 5 JS Bundle (includes Popper.js) from CDN
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );

	// Default navigation script (js/navigation.js)
	wp_enqueue_script( 'il-forno-a-legna-navigation', get_template_directory_uri() . '/js/navigation.js', array(), filemtime( get_template_directory() . '/js/navigation.js' ), true );

	// Custom main script (js/main.js)
	wp_enqueue_script( 'il-forno-a-legna-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'bootstrap' ), filemtime( get_template_directory() . '/js/main.js' ), true );


	// Adds support for threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'il_forno_a_legna_scripts' );