<?php
/**
 * Titan Event Management functions
 */

if ( ! function_exists( 'titan_event_management_setup' ) ) :
function titan_event_management_setup() {
    load_theme_textdomain( 'titan-event-management', get_template_directory() . '/languages' );

	/**
	* About Theme Function
	*/
	require get_theme_file_path( '/about-theme/about-theme.php' );

	// Load editor stylesheet
    add_editor_style( 'assets/css/editor-style.css' );
}
endif; 
add_action( 'after_setup_theme', 'titan_event_management_setup' );

if ( ! function_exists( 'titan_event_management_styles' ) ) :
	function titan_event_management_styles() {
		// Register theme stylesheet.
		wp_register_style('titan-event-management-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);
		
		wp_enqueue_style( 'fontawesome-style', 
			get_template_directory_uri() .'/assets/fontawesome/css/all.css', 
			array(), 
			wp_get_theme()->get('Version') 
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/assets/css/owl.carousel.css',
			array(),
			'2.3.4'
		);

		wp_enqueue_script(
			'owl-carousel-js',
			get_template_directory_uri() . '/assets/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			true
		);

		wp_enqueue_script('titan-event-management-js', 
			get_template_directory_uri() . '/assets/js/effects.js',
			array('jquery'), 
			wp_get_theme()->get('Version'),
			true 
		);

		wp_enqueue_style( 'scroll-to-top-style',
			get_template_directory_uri() . '/assets/css/scroll-to-top.css',
			array(),
			wp_get_theme()->get('Version')
		);

		wp_enqueue_script( 'scroll-to-top-js',
			get_template_directory_uri() . '/assets/js/scroll-to-top.js',
			array(),
			wp_get_theme()->get('Version'),
			true
		);

		wp_enqueue_style( 'dashicons' );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'titan-event-management-style' );

		wp_style_add_data( 'titan-event-management-style', 'rtl', 'replace' );

	}
endif;
add_action( 'wp_enqueue_scripts', 'titan_event_management_styles' );

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';