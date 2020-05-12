<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package WpKicker
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wpkicker_scripts' ) ) {

/**
 * Register - Enqueue scripts and styles.
 */
function wpkicker_scripts() {

    // Theme Main Style
	wp_enqueue_style( 'wpkicker-style', get_stylesheet_uri(), array(), _S_VERSION );
    
    // Theme RTL Style
	// wp_style_add_data( 'wpkicker-style', 'rtl', 'replace' );

	// Enqueue jQuery
	wp_enqueue_script( 'jquery' );

	//wp_enqueue_script( 'wpkicker-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// Skip Link Focus
	wp_enqueue_script( 'wpkicker-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

    # Font Awesome 5
    wp_enqueue_script( 'FontAwesome-5', get_template_directory_uri() . '/assets/fontawesome/js/custom/all.min.js', array(), '5.13.0', true );

    // Theme Scripts
	wp_enqueue_script( 'wpkicker-vendor-scripts', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), '12052020', true );
	wp_enqueue_script( 'wpkicker-custom-scripts', get_template_directory_uri() . '/assets/js/custom.min.js', array('customize-preview'), '12052020', true );

	// Load Comment scripts only on posts
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
  }
} // End of if function_exists( 'wpkicker_scriptss' ).

add_action( 'wp_enqueue_scripts', 'wpkicker_scripts' ); 
