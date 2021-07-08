<?php
/**
 * Functions that run on install
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
 * Install
 *
 * @param bool $network_wide
 *
 * @uses  nss_run_install()
 *
 * @since 1.3.0
 * @return void
 */
function nss_install( $network_wide = false ) {
	global $wpdb;

	if ( is_multisite() && $network_wide ) {

		foreach ( $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs LIMIT 100" ) as $blog_id ) {
			switch_to_blog( $blog_id );
			nss_run_install();
			restore_current_blog();
		}

	} else {

		nss_run_install();

	}
}

register_activation_hook( NSS_PLUGIN_FILE, 'nss_install' );

/**
 * Run Installation
 *
 * Sets up default settings.
 *
 * @since 1.3.0
 * @return void
 */
function nss_run_install() {
	global $nss_options;

	// Set up default options.
	$options = array();

	$current_options = get_option( 'naked_social_share_settings' );

	// If we already have settings - bail.
	if ( $current_options !== false && is_array( $current_options ) ) {
		return;
	}

	// Populate default values.
	foreach ( nss_get_registered_settings() as $tab => $sections ) {
		foreach ( $sections as $section => $settings ) {
			foreach ( $settings as $option ) {
				if ( array_key_exists( 'std', $option ) ) {
					$options[ $option['id'] ] = $option['std'];
				}
			}
		}
	}

	$merged_options = is_array( $nss_options ) ? array_merge( $nss_options, $options ) : $options;
	$nss_options    = $merged_options;

	update_option( 'naked_social_share_settings', $merged_options );
}