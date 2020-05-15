<?php
/**
 * Fucosa Altaque functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fucosa_Altaque
 */

if ( ! defined( 'FUCOSAALTAQUE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'FUCOSAALTAQUE_VERSION', wp_get_theme( 'fucosaaltaque' )['Version'] );
}

/**
 * Enqueue scripts and styles.
 */
function fucosaaltaque_scripts() {
	wp_enqueue_style( 'fucosaaltaque-style', get_stylesheet_uri(), array(), FUCOSAALTAQUE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'fucosaaltaque_scripts' );
