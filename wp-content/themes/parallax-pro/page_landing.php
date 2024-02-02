<?php
/**
 * Parallax Pro.
 *
 * This file adds the landing page template to the Parallax Pro Theme.
 *
 * Template Name: Landing
 *
 * @package Parallax
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/parallax/
 */

// Add custom body class to the head.
add_filter( 'body_class', 'parallax_add_body_class' );
function parallax_add_body_class( $classes ) {

	$classes[] = 'parallax-landing';

	return $classes;

}

// Remove skip links from a template.
remove_action ( 'genesis_before_header', 'genesis_skip_links', 5 );

// Dequeue skip links script.
add_action( 'wp_enqueue_scripts', 'parallax_dequeue_skip_links' );
function parallax_dequeue_skip_links() {
	wp_dequeue_script( 'skip-links' );
}

// Force full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Remove site header elements.
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Remove navigation.
remove_theme_support( 'genesis-menus' );

// Remove breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove site footer widgets.
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

// Remove site footer elements.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Run the Genesis loop.
genesis();
