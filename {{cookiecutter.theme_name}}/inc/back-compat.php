<?php
/**
 * {{cookiecutter.theme_name}} back compat functionality
 *
 * Prevents {{cookiecutter.theme_name_full}} from running on WordPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 */

/**
 * Prevent switching to {{cookiecutter.theme_name_full}} on old versions of WordPress.
 *
 * Switches to the default theme.
 */
function {{cookiecutter.theme_name}}_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', '{{cookiecutter.theme_name}}_upgrade_notice' );
}
add_action( 'after_switch_theme', '{{cookiecutter.theme_name}}_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * {{cookiecutter.theme_name_full}} on WordPress versions prior to 4.4.
 *
 * @global string $wp_version WordPress version.
 */
function {{cookiecutter.theme_name}}_upgrade_notice() {
	$message = sprintf( __( '{{cookiecutter.theme_name_full}} requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', '{{cookiecutter.theme_name}}' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @global string $wp_version WordPress version.
 */
function {{cookiecutter.theme_name}}_customize() {
	wp_die( sprintf( __( '{{cookiecutter.theme_name_full}} requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', '{{cookiecutter.theme_name}}' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', '{{cookiecutter.theme_name}}_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @global string $wp_version WordPress version.
 */
function {{cookiecutter.theme_name}}_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( '{{cookiecutter.theme_name_full}} requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', '{{cookiecutter.theme_name}}' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', '{{cookiecutter.theme_name}}_preview' );
