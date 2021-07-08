<?php
/**
 * Admin Pages
 *
 * Creates admin pages and loads any required assets on these pages.
 *
 * @package   naked-social-share
 * @copyright Copyright (c) 2016, Nose Graze Ltd.
 * @license   GPL2+
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Creates admin submenu pages under 'Books'.
 *
 * @since 1.0.0
 * @return void
 */
function nss_add_options_link() {
	add_options_page( __( 'Naked Social Share Settings', 'naked-social-share' ), __( 'Naked Social Share', 'naked-social-share' ), 'manage_options', 'naked-social-share', 'nss_options_page' );
}

add_action( 'admin_menu', 'nss_add_options_link', 10 );

/**
 * Is Admin Page
 *
 * Checks whether or not the current page is a Novelist admin page.
 *
 * @since 1.0.0
 * @return bool
 */
function nss_is_admin_page() {
	$screen      = get_current_screen();
	$is_nss_page = false;

	if ( $screen->base == 'settings_page_naked-social-share' ) {
		$is_nss_page = true;
	}

	return apply_filters( 'naked-social-share/is-admin-page', $is_nss_page, $screen );
}

/**
 * Load Admin Scripts
 *
 * Adds all admin scripts and stylesheets to the admin panel.
 *
 * @param string $hook Currently loaded page
 *
 * @since 1.0.0
 * @return void
 */
function nss_load_admin_scripts( $hook ) {
	if ( ! apply_filters( 'naked-social-share/load-admin-scripts', nss_is_admin_page(), $hook ) ) {
		return;
	}

	$js_dir  = NSS_PLUGIN_URL . 'assets/js/';
	$css_dir = NSS_PLUGIN_URL . 'assets/css/';

	// Use minified libraries if SCRIPT_DEBUG is turned off
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	/*
	 * JavaScript
	 */

	$admin_deps = array(
		'jquery',
		'jquery-ui-core',
		'jquery-ui-sortable'
	);

	wp_register_script( 'nss-admin', $js_dir . 'admin-scripts' . $suffix . '.js', $admin_deps, NSS_VERSION, true );
	wp_enqueue_script( 'nss-admin' );

	$settings = array(
		'confirm_reset' => __( 'Are you sure you wish to revert all the settings to their default values? This cannot be undone.', 'naked-social-share' )
	);

	wp_localize_script( 'nss-admin', 'NSS', apply_filters( 'naked-social-share/admin-scripts-settings', $settings ) );

	/*
	 * Stylesheets
	 */

	wp_register_style( 'nss-admin', $css_dir . 'admin-styles' . $suffix . '.css', array(), NSS_VERSION );
	wp_enqueue_style( 'nss-admin' );
}

add_action( 'admin_enqueue_scripts', 'nss_load_admin_scripts', 100 );

/**
 * Adds a link to the plugin's settings page on the listing.
 *
 * @param $links
 *
 * @since  1.0.0
 * @return array
 */
function nss_settings_link( $links ) {
	$settings_link = sprintf( '<a href="%s">' . __( 'Settings', 'naked-social-share' ) . '</a>', admin_url( 'options-general.php?page=naked-social-share' ) );
	array_unshift( $links, $settings_link );

	return $links;
}

add_filter( 'plugin_action_links_' . plugin_basename( NSS_PLUGIN_FILE ), 'nss_settings_link' );