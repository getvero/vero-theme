<?php
/**
 * Functions
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
 * Load Front-End Aassets
 *
 * @since 1.0.0
 * @return void
 */
function nss_enqueue_assets() {
	// Use minified libraries if SCRIPT_DEBUG is turned off
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Load Font Awesome if it's enabled.
	if ( nss_get_option( 'load_fa' ) ) {
		wp_register_style( 'font-awesome',  'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), '5.5.0' );
		wp_enqueue_style( 'font-awesome' );
	}

	// Load the default styles if they're enabled.
	if ( nss_get_option( 'load_styles' ) ) {
		wp_register_style( 'nss-frontend', NSS_PLUGIN_URL . 'assets/css/naked-social-share.css', array(), NSS_VERSION );
		wp_enqueue_style( 'nss-frontend' );
	}

	// If disable JS is turned on AND follower numbers are turned off, bail now.
	if ( nss_get_option( 'disable_js' ) && nss_get_option( 'disable_counters' ) ) {
		return;
	}

	wp_register_script( 'nss-frontend', NSS_PLUGIN_URL . 'assets/js/naked-social-share' . $suffix . '.js', array( 'jquery' ), NSS_VERSION, true );
	wp_enqueue_script( 'nss-frontend' );

	$settings = array(
		'ajaxurl'    => admin_url( 'admin-ajax.php' ),
		'disable_js' => nss_get_option( 'disable_js' ) ? true : false,
		'nonce'      => wp_create_nonce( 'nss_update_share_numbers' )
	);

	wp_localize_script( 'nss-frontend', 'NSS', $settings );
}

add_action( 'wp_enqueue_scripts', 'nss_enqueue_assets' );

/**
 * The main function used for displaying the share markup.
 * This can be placed in your theme template file.
 *
 * @since 1.0.0
 * @return void
 */
function naked_social_share_buttons() {
	$share_obj = new Naked_Social_Share_Buttons();
	$share_obj->display_share_markup();
}

/**
 * Filters the_content
 *
 * Adds the social share buttons below blog posts if we've opted to display them automatically.
 *
 * @param string $content Unfiltered post content
 *
 * @access public
 * @since  1.0.0
 * @return string Content with buttons after it
 */
function nss_auto_add_buttons( $content ) {
	$auto_add_to = nss_get_option( 'auto_add' );

	// We do not want to automatically add buttons -- bail.
	if ( ! $auto_add_to || ! is_array( $auto_add_to ) ) {
		return $content;
	}

	// Proceed with post type checks.
	global $post;
	$post_type = get_post_type( $post );

	// Bail if this is a singular page and we haven't specified to add buttons to this CPT.
	if ( is_singular() && ! array_key_exists( $post_type, $auto_add_to ) ) {
		return $content;
	}

	// Bail if this is an archive page and we haven't specified to add buttons to this CPT.
	if ( ! is_singular() && ! array_key_exists( $post_type . '_archive', $auto_add_to ) ) {
		return $content;
	}

	// Add the social share buttons after the post content.
	ob_start();
	naked_social_share_buttons();

	return $content . ob_get_clean();
}

add_filter( 'the_content', 'nss_auto_add_buttons' );

/**
 * Button Shortcode
 *
 * @param array  $atts    Shortcode attributes.
 * @param string $content Shortcode content.
 *
 * @since 1.3.0
 * @return string
 */
function nss_buttons_shortcode( $atts, $content = '' ) {

	// @todo do something with attributes

	ob_start();
	naked_social_share_buttons();

	return apply_filters( 'naked-social-share/shortcode/output', ob_get_clean(), $atts, $content );

}

add_shortcode( 'naked-social-share', 'nss_buttons_shortcode' );

/**
 * Ajax CB: Update Share Numbers
 *
 * @since 1.3.0
 * @return void
 */
function nss_update_share_numbers() {
	check_ajax_referer( 'nss_update_share_numbers', 'nonce' );

	$post_id = $_POST['post_id'];

	if ( ! $post_id || ! is_numeric( $post_id ) ) {
		wp_send_json_error();
	}

	$buttons     = new Naked_Social_Share_Buttons( $post_id );
	$new_numbers = $buttons->update_share_numbers();

	wp_send_json_success( $new_numbers );

	exit;
}

add_action( 'wp_ajax_nss_update_share_numbers', 'nss_update_share_numbers' );
add_action( 'wp_ajax_nopriv_nss_update_share_numbers', 'nss_update_share_numbers' );

/**
 * Get Supported Custom Post Types
 *
 * @since 1.4.0
 * @return array
 */
function nss_get_supported_cpts() {
	$args       = array(
		'public' => true
	);
	$post_types = get_post_types( $args, 'objects' );

	return apply_filters( 'naked-social-share/get-supports-cpts', $post_types );
}

/**
 * Get Page Display Options
 *
 * Adds all supported custom post types and, if enabled, their archives.
 *
 * @uses  nss_get_supported_cpts()
 *
 * @since 1.4.0
 * @return array
 */
function nss_get_display_options() {
	$cpts          = nss_get_supported_cpts();
	$final_display = array();

	foreach ( $cpts as $key => $cpt ) {
		$final_display[ $key ] = sprintf( __( '%s - Single', 'naked-social-share' ), $cpt->label );

		if ( $cpt->has_archive || 'post' == $key ) {
			$final_display[ $key . '_archive' ] = sprintf( __( '%s - Archive', 'naked-social-share' ), $cpt->label );
		}
	}

	return apply_filters( 'naked-social-share/get-cpt-display-options', $final_display, $cpts );
}