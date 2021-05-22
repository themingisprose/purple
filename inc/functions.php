<?php
/**
 * Purple Prism Theme
 * Support for Code Syntax Block plugin
 * @link https://wordpress.org/plugins/code-syntax-block/
 *
 * @since Purple 1.0.0
 */
add_filter( 'mkaz_prism_css_path', function(){
	return '/assets/dist/css/prism.css';
} );

/**
 * Google Tag Manager head code
 *
 * @since Purple 1.0.0
 */
function purple_google_tag_manager_head(){
	theming_option( 'tag_manager_head' );
}
add_action( 'wp_head', 'purple_google_tag_manager_head' );

/**
 * Google Tag Manager body code
 *
 * @since Purple 1.0.0
 */
function purple_google_tag_manager_body(){
	theming_option( 'tag_manager_body' );
}
add_action( 'wp_body_open', 'purple_google_tag_manager_body' );

/**
 * Google Analytics code
 *
 * @since Purple 1.0.0
 */
function purple_google_analytics(){
	theming_option( 'analytics' );
}
add_action( 'wp_head', 'purple_google_analytics' );
