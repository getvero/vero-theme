<?php
/**
 * Register Settings
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
 * Get an Option
 *
 * Looks to see if the specified setting exists, returns the default if not.
 *
 * @param string $key     Key to retrieve
 * @param mixed  $default Default option
 *
 * @global       $nss_options
 *
 * @since 1.0.0
 * @return mixed
 */
function nss_get_option( $key = '', $default = false ) {
	global $nss_options;

	$value = ( is_array( $nss_options ) && array_key_exists( $key, $nss_options ) ) ? $nss_options[ $key ] : $default;
	$value = apply_filters( 'naked-social-share/options/get', $value, $key, $default );

	return apply_filters( 'naked-social-share/options/get/' . $key, $value, $key, $default );
}

/**
 * Get Settings
 *
 * Retrieves all plugin settings
 *
 * @since 1.0
 * @return array Novelist settings
 */
function nss_get_settings() {
	$settings = get_option( 'naked_social_share_settings', array() );

	return apply_filters( 'naked-social-share/get-settings', $settings );
}

/**
 * Add all settings sections and fields.
 *
 * @since 1.0.0
 * @return void
 */
function nss_register_settings() {

	if ( false == get_option( 'naked_social_share_settings' ) ) {
		add_option( 'naked_social_share_settings' );
	}

	foreach ( nss_get_registered_settings() as $tab => $sections ) {
		foreach ( $sections as $section => $settings ) {
			add_settings_section(
				'naked_social_share_settings_' . $tab . '_' . $section,
				__return_null(),
				'__return_false',
				'naked_social_share_settings_' . $tab . '_' . $section
			);

			foreach ( $settings as $option ) {
				// For backwards compatibility
				if ( empty( $option['id'] ) ) {
					continue;
				}

				$name = isset( $option['name'] ) ? $option['name'] : '';

				add_settings_field(
					'naked_social_share_settings[' . $option['id'] . ']',
					$name,
					function_exists( 'nss_' . $option['type'] . '_callback' ) ? 'nss_' . $option['type'] . '_callback' : 'nss_missing_callback',
					'naked_social_share_settings_' . $tab . '_' . $section,
					'naked_social_share_settings_' . $tab . '_' . $section,
					array(
						'section'     => $section,
						'id'          => isset( $option['id'] ) ? $option['id'] : null,
						'desc'        => ! empty( $option['desc'] ) ? $option['desc'] : '',
						'name'        => isset( $option['name'] ) ? $option['name'] : null,
						'size'        => isset( $option['size'] ) ? $option['size'] : null,
						'options'     => isset( $option['options'] ) ? $option['options'] : '',
						'std'         => isset( $option['std'] ) ? $option['std'] : '',
						'min'         => isset( $option['min'] ) ? $option['min'] : null,
						'max'         => isset( $option['max'] ) ? $option['max'] : null,
						'step'        => isset( $option['step'] ) ? $option['step'] : null,
						'chosen'      => isset( $option['chosen'] ) ? $option['chosen'] : null,
						'placeholder' => isset( $option['placeholder'] ) ? $option['placeholder'] : null
					)
				);
			}
		}
	}

	// Creates our settings in the options table
	register_setting( 'naked_social_share_settings', 'naked_social_share_settings', 'naked_social_share_settings_sanitize' );

}

add_action( 'admin_init', 'nss_register_settings' );

/**
 * Registered Settings
 *
 * Sets and returns the array of all plugin settings.
 * Developers can use the following filters to add their own settings or
 * modify existing ones:
 *
 *  + naked-social-share/settings/{key} - Where {key} is a specific tab. Used to modify a single tab/section.
 *  + naked-social-share/settings/registered-settings - Includes the entire array of all settings.
 *
 * @since 1.0.0
 * @return array
 */
function nss_get_registered_settings() {

	$naked_social_share_settings = apply_filters( 'naked_social_share_settings_fields', array(
		/* General */
		'general' => array(
			'main' => array(
				'load_styles'      => array(
					'id'   => 'load_styles',
					'name' => __( 'Load Default Styles', 'naked-social-share' ),
					'desc' => __( 'If checked, a stylesheet will be loaded to give the buttons a few basic styles.', 'naked-social-shre' ),
					'type' => 'checkbox',
					'std'  => false
				),
				'load_fa'          => array(
					'id'   => 'load_fa',
					'name' => __( 'Load Font Awesome', 'naked-social-share' ),
					'desc' => __( 'Font Awesome is used for the brand icons.', 'naked-social-shre' ),
					'type' => 'checkbox',
					'std'  => true
				),
				'disable_js'       => array(
					'id'   => 'disable_js',
					'name' => __( 'Disable JavaScript', 'naked-social-share' ),
					'desc' => __( 'Some simple JavaScript is used to make the share links open in small popup windows. Disabling the JavaScript will lose that behaviour.', 'naked-social-share' ),
					'type' => 'checkbox',
					'std'  => false
				),
				'auto_add'         => array(
					'id'      => 'auto_add',
					'name'    => __( 'Automatically Add Buttons', 'naked-social-share' ),
					'desc'    => sprintf( __( 'Choose where you want the buttons to appear automatically. Alternatively, you can add the icons to your theme manually using this function: %s', 'naked-social-shre' ), '<code>naked_social_share_buttons();</code>' ),
					'type'    => 'multicheck',
					'std'     => array(),
					'options' => nss_get_display_options()
				),
				'disable_counters' => array(
					'id'   => 'disable_counters',
					'name' => __( 'Disable Share Counters', 'naked-social-share' ),
					'desc' => __( 'If checked, the number of shares for each post/site will not be displayed.', 'naked-social-share' ),
					'type' => 'checkbox',
					'std'  => false
				),
				'twitter_handle'   => array(
					'id'          => 'twitter_handle',
					'name'        => __( 'Twitter  Handle', 'naked-social-share' ),
					'desc'        => __( 'Enter your Twitter handle (WITHOUT the @ sign)', 'naked-social-shre' ),
					'type'        => 'text',
					'placeholder' => 'NoseGraze',
				),
				'social_sites'     => array(
					'id'      => 'social_sites',
					'name'    => __( 'Social Media Sites', 'naked-social-share' ),
					'desc'    => __( 'Drag the sites you want to display buttons for into the "Enabled" column.', 'naked-social-share' ),
					'type'    => 'sorter',
					'std'     => array(
						'twitter',
						'facebook',
						'pinterest',
						'stumbleupon'
					),
					'options' => apply_filters( 'naked-social-share/available-sites', array(
						'twitter'     => __( 'Twitter', 'naked-social-share' ),
						'facebook'    => __( 'Facebook', 'naked-social-share' ),
						'pinterest'   => __( 'Pinterest', 'naked-social-share' ),
						'stumbleupon' => __( 'StumbleUpon', 'naked-social-share' ),
						'google'      => __( 'Google+', 'naked-social-share' ),
						'linkedin'    => __( 'LinkedIn', 'naked-social-share' )
					) )
				)
			)
		),
	) );

	return apply_filters( 'naked-social-share/settings/registered-settings', $naked_social_share_settings );

}

/**
 * Retrieve settings tabs
 *
 * @since 1.0.0
 * @return array $tabs
 */
function nss_get_settings_tabs() {
	$tabs            = array();
	$tabs['general'] = __( 'General', 'naked-social-share' );

	return apply_filters( 'naked-social-share/settings/tabs', $tabs );
}


/**
 * Retrieve settings tabs
 *
 * @since 1.0.0
 * @return array $section
 */
function nss_get_settings_tab_sections( $tab = false ) {
	$tabs     = false;
	$sections = nss_get_registered_settings_sections();

	if ( $tab && ! empty( $sections[ $tab ] ) ) {
		$tabs = $sections[ $tab ];
	} else if ( $tab ) {
		$tabs = false;
	}

	return $tabs;
}

/**
 * Get the settings sections for each tab
 * Uses a static to avoid running the filters on every request to this function
 *
 * @since  1.0.0
 * @return array Array of tabs and sections
 */
function nss_get_registered_settings_sections() {
	static $sections = false;

	if ( false !== $sections ) {
		return $sections;
	}

	$sections = array(
		'general' => apply_filters( 'naked-social-share/settings/sections/nss_download', array(
			'main' => __( 'General Settings', 'naked-social-share' ),
		) )
	);

	$sections = apply_filters( 'naked-social-share/settings/sections', $sections );

	return $sections;
}

/**
 * Sanitizes a string key for Novelist Settings
 *
 * Keys are used as internal identifiers. Alphanumeric characters, dashes, underscores, stops, colons and slashes are
 * allowed
 *
 * @param  string $key String key
 *
 * @since 1.0.0
 * @return string Sanitized key
 */
function nss_sanitize_key( $key ) {
	$raw_key = $key;
	$key     = preg_replace( '/[^a-zA-Z0-9_\-\.\:\/]/', '', $key );

	return apply_filters( 'naked-social-share/sanitize-key', $key, $raw_key );
}

/**
 * Sanitize Settings
 *
 * Adds a settings error for the updated message.
 *
 * @param array  $input       The value inputted in the field
 *
 * @global array $nss_options Array of all the Novelist options
 *
 * @since 1.0.0
 * @return array New, sanitized settings.
 */
function naked_social_share_settings_sanitize( $input = array() ) {

	global $nss_options;

	if ( ! is_array( $nss_options ) ) {
		$nss_options = array();
	}

	if ( empty( $_POST['_wp_http_referer'] ) ) {
		return $input;
	}

	parse_str( $_POST['_wp_http_referer'], $referrer );

	$settings = nss_get_registered_settings();
	$tab      = ( isset( $referrer['tab'] ) && $referrer['tab'] != 'import_export' ) ? $referrer['tab'] : 'general';
	$section  = isset( $referrer['section'] ) ? $referrer['section'] : 'main';

	$input = $input ? $input : array();
	$input = apply_filters( 'naked-social-share/settings/sanitize/' . $tab . '/' . $section, $input );

	// Loop through each setting being saved and pass it through a sanitization filter
	foreach ( $input as $key => $value ) {
		// Get the setting type (checkbox, select, etc)
		$type = isset( $settings[ $tab ][ $section ][ $key ]['type'] ) ? $settings[ $tab ][ $section ][ $key ]['type'] : false;
		if ( $type ) {
			// Field type specific filter
			$input[ $key ] = apply_filters( 'naked-social-share/settings/sanitize/' . $type, $value, $key );
		}
		// General filter
		$input[ $key ] = apply_filters( 'naked-social-share/settings/sanitize', $input[ $key ], $key );
	}

	// Loop through the whitelist and unset any that are empty for the tab being saved
	$main_settings    = $section == 'main' ? $settings[ $tab ] : array();
	$section_settings = ! empty( $settings[ $tab ][ $section ] ) ? $settings[ $tab ][ $section ] : array();
	$found_settings   = array_merge( $main_settings, $section_settings );

	if ( ! empty( $found_settings ) ) {
		foreach ( $found_settings as $key => $value ) {
			if ( empty( $input[ $key ] ) || ! array_key_exists( $key, $input ) ) {
				unset( $nss_options[ $key ] );
			}
		}
	}

	// Merge our new settings with the existing
	$output = array_merge( $nss_options, $input );

	add_settings_error( 'nss-notices', '', __( 'Settings updated.', 'naked-social-share' ), 'updated' );

	return $output;

}

/**
 * Display "Default settings restored" message.
 * This gets displayed after the default settings have been restored and
 * the page has been redirected.
 *
 * @since 1.3.0
 * @return void
 */
function nss_defaults_restored_message() {
	if ( ! isset( $_GET['page'] ) || $_GET['page'] !== 'naked-social-share' ) {
		return;
	}

	if ( ! isset( $_GET['defaults-restored'] ) || $_GET['defaults-restored'] !== 'true' ) {
		return;
	}

	add_settings_error( 'nss-notices', '', __( 'Default settings restored.', 'naked-social-share' ), 'updated' );
}

add_action( 'admin_init', 'nss_defaults_restored_message' );

/**
 * Restore All Settings
 *
 * Ajax callback that restores the default values for all settings.
 *
 * @since 1.3.0
 * @return void
 */
function nss_restore_all_default_settings() {
	// Permission check.
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'Bugger off! You don\'t have permission to do this.', 'naked-social-share' ) );
	}

	$nss_options      = array();
	$tab              = strip_tags( $_POST['tab'] );
	$section          = strip_tags( $_POST['section'] );
	$default_settings = nss_get_registered_settings();

	foreach ( $default_settings as $tab_sections ) {
		foreach ( $tab_sections as $section_id => $settings ) {
			if ( ! is_array( $settings ) ) {
				continue;
			}

			foreach ( $settings as $key => $options ) {
				if ( ! array_key_exists( 'std', $options ) ) {
					continue;
				}

				$nss_options[ $key ] = apply_filters( 'naked-social-share/settings/restore-defaults/' . $key, $options['std'], $options );
			}
		}
	}

	// Update options.
	update_option( 'naked_social_share_settings', apply_filters( 'naked-social-share/settings/restore-defaults', $nss_options ) );

	// Build our URL
	$url    = admin_url( 'options-general.php' );
	$params = array(
		'page'              => 'naked-social-share',
		'tab'               => urlencode( $tab ),
		'section'           => urlencode( $section ),
		'defaults-restored' => 'true'
	);
	$url    = add_query_arg( $params, $url );

	wp_send_json_success( $url );
}

add_action( 'wp_ajax_naked_social_share_restore_default_settings', 'nss_restore_all_default_settings' );

/**
 * Sanitize Text Field
 *
 * @param string $input
 *
 * @since 1.0.0
 * @return string
 */
function nss_settings_sanitize_text_field( $input ) {
	return wp_kses_post( $input );
}

add_filter( 'naked-social-share/settings/sanitize/text', 'nss_settings_sanitize_text_field' );

/**
 * Sanitize Number Field
 *
 * @param int $input
 *
 * @since 1.0.0
 * @return int
 */
function nss_settings_sanitize_number_field( $input ) {
	return intval( $input );
}

add_filter( 'naked-social-share/settings/sanitize/number', 'nss_settings_sanitize_number_field' );

/**
 * Sanitize Color Field
 *
 * Return 3 or 6 hex digits, or an empty string.
 *
 * @param string $input
 *
 * @since 1.0.0
 * @return string
 */
function nss_settings_sanitize_color_field( $input ) {
	if ( ! empty( $input ) && preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $input ) ) {
		return $input;
	}

	return '';
}

add_filter( 'naked-social-share/settings/sanitize/color', 'nss_settings_sanitize_color_field' );

/**
 * Sanitize Checkbox Field
 *
 * Returns either true or false.
 *
 * @param bool $input
 *
 * @since 1.0.0
 * @return bool
 */
function nss_settings_sanitize_checkbox_field( $input ) {
	return ! empty( $input ) ? true : false;
}

add_filter( 'naked-social-share/settings/sanitize/checkbox', 'nss_settings_sanitize_checkbox_field' );

/**
 * Sanitize Sorter Field
 *
 * @param string $input The field value to be sanitized.
 * @param        $key
 *
 * @since  1.3.0
 * @return array
 */
function nss_settings_sanitize_sorter_field( $input ) {
	if ( ! is_array( $input ) ) {
		return array();
	}

	return array_map( 'wp_strip_all_tags', $input );
}

add_filter( 'naked-social-share/settings/sanitize/sorter', 'nss_settings_sanitize_sorter_field' );

/**
 * Missing Callback
 *
 * If a function is missing for settings callbacks alert the user.
 *
 * @param array $args Arguments passed by the setting
 *
 * @since 1.3.0
 * @return void
 */
function nss_missing_callback( $args ) {
	printf(
		__( 'The callback function used for the %s setting is missing.', 'naked-social-share' ),
		'<strong>' . $args['id'] . '</strong>'
	);
}

/**
 * Text Callback
 *
 * Renders text fields.
 *
 * @param array  $args        Arguments passed by the setting
 *
 * @global array $nss_options Array of all the Novelist settings
 *
 * @since 1.0.0
 * @return void
 */
function nss_text_callback( $args ) {
	global $nss_options;

	if ( isset( $nss_options[ $args['id'] ] ) ) {
		$value = $nss_options[ $args['id'] ];
	} else {
		$value = isset( $args['std'] ) ? $args['std'] : '';
	}

	if ( isset( $args['faux'] ) && true === $args['faux'] ) {
		$args['readonly'] = true;
		$value            = isset( $args['std'] ) ? $args['std'] : '';
		$name             = '';
	} else {
		$name = 'name="naked_social_share_settings[' . esc_attr( $args['id'] ) . ']"';
	}

	$type     = ( array_key_exists( 'options', $args ) && is_array( $args['options'] ) && array_key_exists( 'type', $args['options'] ) ) ? $args['options']['type'] : 'text';
	$readonly = ( array_key_exists( 'readonly', $args ) && $args['readonly'] === true ) ? ' readonly="readonly"' : '';
	$size     = ( isset( $args['size'] ) && ! is_null( $args['size'] ) ) ? $args['size'] : 'regular';
	?>
	<input type="<?php echo esc_attr( $type ); ?>" class="<?php echo sanitize_html_class( $size ); ?>-text" id="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" <?php echo $name; ?> value="<?php echo esc_attr( stripslashes( $value ) ); ?>"<?php echo $readonly; ?>>
	<label for="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" class="desc"><?php echo wp_kses_post( $args['desc'] ); ?></label>
	<?php
}

/**
 * Checkbox Callback
 *
 * Renders checkbox fields.
 *
 * @param array  $args        Arguments passed by the setting
 *
 * @global array $nss_options Array of all the Novelist settings
 *
 * @since 1.0.0
 * @return void
 */
function nss_checkbox_callback( $args ) {
	global $nss_options;

	$checked = ( isset( $nss_options[ $args['id'] ] ) && ! empty( $nss_options[ $args['id'] ] ) ) ? checked( 1, $nss_options[ $args['id'] ], false ) : '';
	?>
	<input type="checkbox" id="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" name="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" value="1" <?php echo $checked; ?>>
	<label for="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" class="desc"><?php echo wp_kses_post( $args['desc'] ); ?></label>
	<?php
}

/**
 * Multicheck Callback
 *
 * Renders multiple checkboxes.
 *
 * @param array $args The arguments passed by the setting
 *
 * @access public
 * @since  1.0.0
 * @return void
 */
function nss_multicheck_callback( $args ) {
	global $nss_options;

	// No options are filled out - bail early.
	if ( empty( $args['options'] ) ) {
		return;
	}

	if ( array_key_exists( 'desc', $args ) && $args['desc'] ) :
		?>
		<div class="desc"><?php echo wp_kses_post( $args['desc'] ); ?></div>
		<?php
	endif;

	// Loop through each option in the setting.
	foreach ( $args['options'] as $key => $option ) {
		$checked = ( isset( $nss_options[ $args['id'] ][ $key ] ) ) ? ' checked' : '';
		?>
		<input type="checkbox" id="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>][<?php echo esc_attr( $key ); ?>]" name="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>][<?php echo esc_attr( $key ); ?>]" value="1"<?php echo $checked; ?>>
		<label for="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>][<?php echo esc_attr( $key ); ?>]" class="desc"><?php echo wp_kses_post( $option ); ?></label>
		<br>
		<?php
	}
}

/**
 * Callback: Color
 *
 * @param array  $args
 *
 * @global array $nss_options
 *
 * @since 1.0.0
 * @return void
 */
function nss_color_callback( $args ) {
	global $nss_options;

	if ( isset( $nss_options[ $args['id'] ] ) ) {
		$value = $nss_options[ $args['id'] ];
	} else {
		$value = isset( $args['std'] ) ? $args['std'] : '';
	}

	$default = isset( $args['std'] ) ? $args['std'] : '';
	?>
	<input type="text" class="novelist-color-picker" id="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" name="naked_social_share_settings[<?php echo esc_attr( $args['id'] ); ?>]" value="<?php echo esc_attr( $value ); ?>" data-default-color="<?php echo esc_attr( $default ); ?>">
	<label for="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>]" class="desc"><?php echo wp_kses_post( $args['desc'] ); ?></label>
	<?php
}

/**
 * Callback: Sorter
 *
 * @param array  $args
 *
 * @global array $nss_options
 *
 * @since 1.0.0
 * @return void
 */
function nss_sorter_callback( $args ) {
	global $nss_options;

	if ( isset( $nss_options[ $args['id'] ] ) ) {
		$enabled_keys = $nss_options[ $args['id'] ];
	} else {
		$enabled_keys = isset( $args['std'] ) ? $args['std'] : array();
	}

	$all_options   = $args['options'];
	$disabled_keys = array_diff( array_keys( $all_options ), $enabled_keys );
	?>

	<div id="<?php echo nss_sanitize_key( $args['id'] ); ?>" class="sorter">
		<input type="hidden" class="nss-settings-key" value="naked_social_share_settings">

		<ul id="<?php echo nss_sanitize_key( $args['id'] ); ?>_enabled" class="sortlist_<?php echo esc_attr( $args['id'] ); ?>">
			<h3><?php _e( 'Enabled', 'naked-social-share' ); ?></h3>

			<?php foreach ( $enabled_keys as $key ) :
				if ( ! array_key_exists( $key, $all_options ) ) {
					continue;
				}
				?>
				<li id="<?php echo esc_attr( $key ); ?>">
					<input type="hidden" name="naked_social_share_settings[<?php echo nss_sanitize_key( $args['id'] ); ?>][]" value="<?php echo esc_attr( $key ); ?>" class="sorter-input sorter-input-name">
					<?php echo $all_options[ $key ]; ?>
				</li>
			<?php endforeach; ?>
		</ul>

		<ul id="<?php echo esc_attr( $args['id'] ); ?>_disabled" class="sortlist_<?php echo nss_sanitize_key( $args['id'] ); ?>">
			<h3><?php _e( 'Disabled', 'naked-social-share' ); ?></h3>

			<?php foreach ( $disabled_keys as $key ) :
				if ( ! array_key_exists( $key, $all_options ) ) {
					continue;
				}
				?>
				<li id="<?php echo esc_attr( $key ); ?>">
					<input type="hidden" name="" value="<?php echo esc_attr( $key ); ?>" class="sorter-input sorter-input-name">
					<?php echo $all_options[ $key ]; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
}