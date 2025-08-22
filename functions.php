<?php

/**
 * IL Forno a Legna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IL_Forno_a_Legna
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function il_forno_a_legna_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
	load_theme_textdomain('il-forno-a-legna', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'main-menu'   => esc_html__('Main Menu', 'il-forno-a-legna'),
			'footer-menu' => esc_html__('Footer Menu', 'il-forno-a-legna'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'il_forno_a_legna_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function il_forno_a_legna_content_width()
{
	$GLOBALS['content_width'] = apply_filters('il_forno_a_legna_content_width', 640);
}
add_action('after_setup_theme', 'il_forno_a_legna_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function il_forno_a_legna_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'il-forno-a-legna'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'il-forno-a-legna'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'il_forno_a_legna_widgets_init');


/**
 * Theme custom functionality.
 * This is where we will load our custom files.
 */
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/bootstrap-navwalker.php';



/**
 * Remove the archive title prefix (e.g., "Category:", "Author:").
 */
add_filter( 'get_the_archive_title', function ( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
} );