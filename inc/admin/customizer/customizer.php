<?php
/**
 * Registers Customizer controls.
 */



/**
 * Registers Customizer Contact Info controls.
 */

add_action( 'customize_register', 'rvn_child_register_customizer_contact_info_controls', 11 );

function rvn_child_register_customizer_contact_info_controls( $wp_customize ) {
	$wp_customize->add_section( 'contact_info', [
		'title' => __( 'Contact Info' ),
	] );

	$wp_customize->add_setting( 'company_name' );
	$wp_customize->add_control( 'company_name', [
		'label'   => __( 'Company Name', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_phone' );
	$wp_customize->add_control( 'company_phone', [
		'label'   => __( 'Phone', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_email' );
	$wp_customize->add_control( 'company_email', [
		'label'   => __( 'Email', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_street' );
	$wp_customize->add_control( 'company_street', [
		'label'   => __( 'Street', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_street_2' );
	$wp_customize->add_control( 'company_street_2', [
		'label'   => __( 'Street (Line 2)', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_city' );
	$wp_customize->add_control( 'company_city', [
		'label'   => __( 'City', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_state' );
	$wp_customize->add_control( 'company_state', [
		'label'   => __( 'State', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );

	$wp_customize->add_setting( 'company_zip' );
	$wp_customize->add_control( 'company_zip', [
		'label'   => __( 'Zip Code', 'rvn' ),
		'type'    => 'text',
		'section' => 'contact_info',
	] );
}