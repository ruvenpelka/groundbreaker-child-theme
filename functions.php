<?php
/**
 * Functions.php
 */



/**
 * Includes
 */

require_once 'inc/admin/customizer/customizer.php';



/**
 * Enqueue scripts and styles for frontend.
 */

add_action( 'wp_enqueue_scripts', 'rvn_child_enqueue_scripts_and_styles', 11 );

function rvn_child_enqueue_scripts_and_styles() {
	// Enqueue child-global.css
//	wp_enqueue_style(
//		"rvn_child_global",
//		get_theme_file_uri( "assets/css/dist/child-global.css" ),
//		[],
//		filemtime( get_theme_file_path( "assets/css/dist/child-global.css" ) )
//	);

	// Enqueue child theme's style.css
//	wp_enqueue_style(
//		'rvn_child_style',
//		get_stylesheet_uri(),
//		[],
//		filemtime( get_stylesheet_directory() )
//	);
}



/**
 * Register company info shortcodes.
 */

add_shortcode( 'rvn_company_name', function () { return rvn_get_theme_mod( 'company_name' ); } );
add_shortcode( 'rvn_company_phone', function() { return rvn_get_theme_mod( 'company_phone' ); } );
add_shortcode( 'rvn_company_phone_uri', function() { return rvn_child_get_phone_uri( rvn_get_theme_mod( 'company_phone' ) ); } );
add_shortcode( 'rvn_company_phone_link', function() { return rvn_child_get_phone_link( rvn_get_theme_mod( 'company_phone' ) ); } );
add_shortcode( 'rvn_company_email', function() { return rvn_get_theme_mod( 'company_email' ); } );
add_shortcode( 'rvn_company_email_link', function() { return rvn_child_get_email_link( rvn_get_theme_mod( 'company_email' ) ); } );
add_shortcode( 'rvn_company_street', function() { return rvn_get_theme_mod( 'company_street' ); } );
add_shortcode( 'rvn_company_street_2', function() { return rvn_get_theme_mod( 'company_street_2' ); } );
add_shortcode( 'rvn_company_city', function() { return rvn_get_theme_mod( 'company_city' ); } );
add_shortcode( 'rvn_company_state', function() { return rvn_get_theme_mod( 'company_state' ); } );
add_shortcode( 'rvn_company_zip', function() { return rvn_get_theme_mod( 'company_zip' ); } );



/**
 * Get phone URI.
 */

function rvn_child_get_phone_uri( $phone_number ) {
	return str_replace( ['(', ')', ' ', '.', '-'], '', $phone_number );
}



/**
 * Get phone link.
 */

function rvn_child_get_phone_link( $phone_number ) {
	$phone_uri = rvn_child_get_phone_uri( $phone_number );
	return $phone_uri ? "<a href='tel:{$phone_uri}'>{$phone_number}</a>" : '';
}



/**
 * Get email link.
 */

function rvn_child_get_email_link( $email ) {
	return $email ? "<a href='mailto:{$email}'>{$email}</a>" : '';
}