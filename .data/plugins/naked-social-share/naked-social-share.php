<?php
/**
 * Plugin Name: Naked Social Share
 * Plugin URI: https://shop.nosegraze.com/product/naked-social-share/
 * Description: Simple, unstyled social share icons for theme designers.
 * Version: 1.5.2
 * Author: Nose Graze
 * Author URI: https://www.nosegraze.com
 * License: GPL2
 * Text Domain: naked-social-share
 * Domain Path: lang
 *
 * @package   naked-social-share
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license   GPL2+
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Naked_Social_Share' ) ) :

	class Naked_Social_Share {

		/**
		 * The single instance of the plugin.
		 * @var Naked_Social_Share
		 * @since 1.0.0
		 */
		private static $instance = null;

		/**
		 * Naked_Social_Share instance.
		 *
		 * Insures that only one instance of Naked_Social_Share exists at any one time.
		 *
		 * @uses   Naked_Social_Share::setup_constants() Set up the plugin constants.
		 * @uses   Naked_Social_Share::includes() Include any required files.
		 * @uses   Naked_Social_Share::load_textdomain() Load the language files.
		 *
		 * @access public
		 * @since  1.0.0
		 * @return Naked_Social_Share Instance of Naked_Social_Share class
		 */
		public static function instance() {

			if ( ! isset( self::$instance ) && ! self::$instance instanceof Naked_Social_Share ) {
				self::$instance = new Naked_Social_Share;
				self::$instance->setup_constants();

				add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );

				self::$instance->includes();
			}

			return self::$instance;

		}

		/**
		 * Throw error on object clone.
		 *
		 * The whole idea of the singleton design pattern is that there is a single
		 * object therefore, we don't want the object to be cloned.
		 *
		 * @access protected
		 * @since  1.0.0
		 * @return void
		 */
		public function __clone() {
			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'naked-social-share' ), '1.0.0' );
		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @access protected
		 * @since  1.0.0
		 * @return void
		 */
		public function __wakeup() {
			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'naked-social-share' ), '1.0.0' );
		}

		/**
		 * Setup plugin constants.
		 *
		 * @access private
		 * @since  1.0.0
		 * @return void
		 */
		private function setup_constants() {

			// Plugin version.
			if ( ! defined( 'NSS_VERSION' ) ) {
				define( 'NSS_VERSION', '1.5.2' );
			}

			// Plugin Folder Path.
			if ( ! defined( 'NSS_PLUGIN_DIR' ) ) {
				define( 'NSS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}

			// Plugin Folder URL.
			if ( ! defined( 'NSS_PLUGIN_URL' ) ) {
				define( 'NSS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}

			// Plugin Root File.
			if ( ! defined( 'NSS_PLUGIN_FILE' ) ) {
				define( 'NSS_PLUGIN_FILE', __FILE__ );
			}

		}

		/**
		 * Include Required Files
		 *
		 * @access private
		 * @since  1.0.0
		 * @return void
		 */
		private function includes() {

			global $nss_options;

			// Settings.
			require_once NSS_PLUGIN_DIR . 'includes/admin/settings/register-settings.php';
			if ( empty( $nss_options ) ) {
				$nss_options = nss_get_settings();
			}

			require_once NSS_PLUGIN_DIR . 'includes/class-naked-social-share-buttons.php';
			require_once NSS_PLUGIN_DIR . 'includes/functions.php';

			if ( is_admin() ) {
				require_once NSS_PLUGIN_DIR . 'includes/admin/admin-pages.php';
				require_once NSS_PLUGIN_DIR . 'includes/admin/upgrades.php';
				require_once NSS_PLUGIN_DIR . 'includes/admin/settings/display-settings.php';
			}

			require_once NSS_PLUGIN_DIR . 'includes/install.php';

		}

		/**
		 * Loads the plugin language files.
		 *
		 * @access public
		 * @since  1.0.0
		 * @return void
		 */
		public function load_textdomain() {

			$lang_dir = dirname( plugin_basename( NSS_PLUGIN_FILE ) ) . '/lang/';
			$lang_dir = apply_filters( 'naked-social-share/languages-directory', $lang_dir );
			load_plugin_textdomain( 'naked-social-share', false, $lang_dir );

		}

	}

endif;

/**
 * Loads the whole plugin.
 *
 * @since 1.0.0
 * @return Naked_Social_Share
 */
function Naked_Social_Share() {
	$instance = Naked_Social_Share::instance();

	return $instance;
}

Naked_Social_Share();