<?php
/**
 *  Press Corps back compat functionality
 *
 * Prevents  Press Corps from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package Press_Corps
 * 
 * @since  Press Corps 1.0
 */

/**
 * Prevent switching to  Press Corps on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since  Press Corps 1.0
 */
function presscorps_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'presscorps_upgrade_notice' );
}
add_action( 'after_switch_theme', 'presscorps_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 *  Press Corps on WordPress versions prior to 4.1.
 *
 * @since  Press Corps 1.0
 */
function presscorps_upgrade_notice() {
	$message = sprintf( __( ' Press Corps requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'presscorps' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since  Press Corps 1.0
 */
function presscorps_customize() {
	wp_die( sprintf( __( ' Press Corps requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'presscorps' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'presscorps_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since  Press Corps 1.0
 */
function presscorps_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( ' Press Corps requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'presscorps' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'presscorps_preview' );
