<?php

/**
 * Handles displaying the buttons and fetching the follower information.
 *
 * @package   naked-social-share
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license   GPL2+
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Naked_Social_Share_Buttons
 *
 * @since 1.0.0
 */
class Naked_Social_Share_Buttons {

	/**
	 * The object of the current post.
	 *
	 * @var WP_Post
	 * @access public
	 * @since  1.0.0
	 */
	public $post;

	/**
	 * The permalink of the current post.
	 *
	 * @var string
	 * @access public
	 * @since  1.0.0
	 */
	public $url;

	/**
	 * The array of saved share numbers.
	 *
	 * @var array
	 * @access public
	 * @since  1.0.0
	 */
	public $share_numbers;

	/**
	 * Expiry timestamp
	 *
	 * @var string
	 * @access public
	 * @since  1.3.0
	 */
	public $expires_timestamp;

	/**
	 * Whether or not we should cache the social numbers.
	 *
	 * @var bool Set to false to disable the caching
	 * @access public
	 * @since  1.0.0
	 */
	public $cache = true;

	/**
	 * How in seconds long we should cache the social share numbers.
	 *
	 * @var int
	 * @access public
	 * @since  1.0.0
	 */
	public $cache_time = 10800; // 3 hours in seconds

	/**
	 * The settings from the options panel.
	 *
	 * @var array
	 * @access public
	 * @since  1.0.0
	 */
	public $settings;

	/**
	 * Constructor function
	 *
	 * Sets the post object and loads the saved share numbers.
	 *
	 * @param null|WP_Post|int $post Post object, post ID, or leave null to auto fetch current post.
	 *
	 * @access public
	 * @since  1.0.0
	 * @return void
	 */
	public function __construct( $post = null ) {

		if ( $post && is_a( $post, 'WP_Post' ) ) {
			$this->post = $post;
		} elseif ( is_numeric( $post ) ) {
			$this->post = get_post( $post );
		} else {
			global $post;
			$this->post = $post;
		}

		// Load the settings.
		global $nss_options;
		$this->settings = $nss_options;

		$this->url = apply_filters( 'naked-social-share/post-permalink', get_permalink( $this->post ), $this->post, $this );

		if ( ! nss_get_option( 'nss_get_option' ) ) {
			$this->share_numbers = $this->get_share_numbers();
		}

	}

	/**
	 * Changes the amount of time the share counts are
	 * cached for.
	 *
	 * @param int $time Cache time in seconds
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_cache_time( $time ) {
		$this->cache_time = $time;
	}

	/**
	 * Generates a random time, more or less 500 seconds.
	 *
	 * @param int $timeout Cache time in seconds
	 *
	 * @access public
	 * @since  1.0.0
	 * @return int Randomized cache time in seconds
	 */
	public function generate_cache_time( $timeout ) {
		$lower = $timeout - 500;
		$lower = ( $lower < 0 ) ? 0 : $lower;
		$upper = $timeout + 500;

		return rand( $lower, $upper );
	}

	/**
	 * Is Cache Expired
	 *
	 * Checks to see if the share numbers have expired. This will return true if
	 * any of the following apply:
	 *
	 *      `$this->cache` is set to false (for debugging only).
	 *      The timestamp for the expiry date is in the past.
	 *
	 * @access public
	 * @since  1.3.0
	 * @return bool
	 */
	public function is_expired() {
		$is_expired = false;

		// Don't cache, so they're always expired.
		if ( $this->cache === false ) {
			$is_expired = true;
		}

		// They're expired.
		if ( is_numeric( $this->expires_timestamp ) && $this->expires_timestamp < time() ) {
			$is_expired = true;
		}

		return apply_filters( 'naked-social-share/share-counts-expired', $is_expired, $this->post, $this );
	}

	/**
	 * Gets the saved social share numbers for each site.
	 *
	 * If there are no numbers present, then we use 0 instead.
	 *
	 * @access public
	 * @since  1.0.0
	 * @return array
	 */
	public function get_share_numbers() {

		if ( ! isset( $this->share_numbers ) ) {
			$share_info = get_post_meta( $this->post->ID, 'naked_shares_count', true );

			if ( is_array( $share_info ) && array_key_exists( 'shares', $share_info ) && array_key_exists( 'expire', $share_info ) ) {
				$shares                  = $share_info['shares'];
				$this->expires_timestamp = $share_info['expire'];
			} else {
				$shares                  = array();
				$this->expires_timestamp = strtotime( '1 minute ago' );
			}

			$default_shares = array(
				'twitter'     => 0,
				'facebook'    => 0,
				'pinterest'   => 0,
				'stumbleupon' => 0,
				'google'      => 0,
				'linkedin'    => 0
			);

			$final_shares = wp_parse_args( $shares, $default_shares );

			$this->share_numbers = apply_filters( 'naked-social-share/get-share-numbers', $final_shares, $this->post, $this );
		}

		return $this->share_numbers;

	}

	/**
	 * Update Share Numbers
	 *
	 * Get new values from the APIs.
	 *
	 * @access public
	 * @since  1.3.0
	 * @return array
	 */
	public function update_share_numbers() {

		$shares = $this->get_share_numbers();

		/*
		 * Fetch the share numbers for Facebook if it's enabled.
		 */
		if ( in_array( 'facebook', $this->settings['social_sites'] ) ) {
			$facebook_url      = sprintf( 'https://graph.facebook.com/?id=%s', $this->url );
			$facebook_response = wp_remote_get( esc_url_raw( $facebook_url ) );
			// Make sure the response came back okay.
			if ( ! is_wp_error( $facebook_response ) && wp_remote_retrieve_response_code( $facebook_response ) == 200 ) {
				$facebook_body = json_decode( wp_remote_retrieve_body( $facebook_response ), true );

				// If the results look good, let's update them.
				if ( $facebook_body && is_array( $facebook_body ) && array_key_exists( 'share', $facebook_body ) && array_key_exists( 'share_count', $facebook_body['share'] ) ) {
					$shares['facebook'] = $facebook_body['share']['share_count'];
				}
			}
		} else {
			$shares['facebook'] = 0;
		}

		/*
		 * Fetch the share numbers for Pinterest if it's enabled.
		 */
		if ( in_array( 'pinterest', $this->settings['social_sites'] ) ) {
			$pinterest_url      = 'http://api.pinterest.com/v1/urls/count.json?callback=receiveCount&url=' . $this->url;
			$pinterest_response = wp_remote_get( esc_url_raw( $pinterest_url ) );
			// Make sure the response came back okay.
			if ( ! is_wp_error( $pinterest_response ) && wp_remote_retrieve_response_code( $pinterest_response ) == 200 ) {
				// Remove the annoying repsonseCode() stuff
				$pinterest_body = json_decode( preg_replace( "/[^(]*\((.*)\)/", "$1", wp_remote_retrieve_body( $pinterest_response ) ), true );
				// Get the count
				if ( array_key_exists( 'count', $pinterest_body ) && $pinterest_body['count'] && is_numeric( $pinterest_body['count'] ) ) {
					$shares['pinterest'] = $pinterest_body['count'];
				}
			}
		} else {
			$shares['pinterest'] = 0;
		}

		/*
		 * Fetch the share numbers for StumbleUpon if it's enabled.
		 */
		if ( in_array( 'stumbleupon', $this->settings['social_sites'] ) ) {
			$stumble_url      = 'http://www.stumbleupon.com/services/1.01/badge.getinfo?url=' . urlencode( $this->url );
			$stumble_response = wp_remote_get( esc_url_raw( $stumble_url ) );
			// Make sure the response came back okay.
			if ( ! is_wp_error( $stumble_response ) && wp_remote_retrieve_response_code( $stumble_response ) == 200 ) {
				$stumble_body = json_decode( wp_remote_retrieve_body( $stumble_response ) );
				if ( $stumble_body->result && method_exists( $stumble_body->result, 'views' ) && $stumble_body->result->views && is_numeric( $stumble_body->result->views ) ) {
					$shares['stumbleupon'] = $stumble_body->result->views;
				}
			}
		} else {
			$shares['stumbleupon'] = 0;
		}

		/*
		 * Fetch the share numbers for Google+ if it's enabled.
		 */
		if ( in_array( 'google', $this->settings['social_sites'] ) ) {
			$shares['google'] = $this->get_plus_ones( $this->url );
		} else {
			$shares['google'] = 0;
		}

		/*
		 * Fetch the share numbers for LinkedIn if it's enabled.
		 */
		if ( in_array( 'linkedin', $this->settings['social_sites'] ) ) {
			$linked_url      = 'https://www.linkedin.com/countserv/count/share?url=' . urlencode( $this->url ) . '&format=json';
			$linked_response = wp_remote_get( esc_url_raw( $linked_url ) );
			// Make sure the response came back okay.
			if ( ! is_wp_error( $linked_response ) && wp_remote_retrieve_response_code( $linked_response ) == 200 ) {
				$linked_body = json_decode( wp_remote_retrieve_body( $linked_response ) );
				if ( $linked_body->count && is_numeric( $linked_body->count ) ) {
					$shares['linkedin'] = $linked_body->count;
				}
			}
		} else {
			$shares['linkedin'] = 0;
		}

		/*
		 * Put together the final share numbers.
		 */

		$final_shares = array(
			'shares' => $shares,
			'expire' => time() + $this->generate_cache_time( $this->cache_time )
		);

		// Update the numbers and expiry time in the meta data.
		update_post_meta( $this->post->ID, 'naked_shares_count', apply_filters( 'naked-social-share/update-share-numbers', $final_shares, $this->post, $this ) );

		// Update the variable here.
		$this->share_numbers = $final_shares['shares'];

		// Return the numbers.
		return $this->share_numbers;

	}

	/**
	 * Get the numeric, total count of +1s from Google+ users for a given URL.
	 *
	 * @source https://stackoverflow.com/a/32569777/4895738
	 *
	 * @param $url string  The URL to check the +1 count for.
	 *
	 * @access public
	 * @return int The total count of +1s.
	 */
	public function get_plus_ones( $url ) {
		if ( empty( $url ) ) {
			return 0;
		}

		$request_url = 'https://clients6.google.com/rpc';

		$body = array(
			'method'     => 'pos.plusones.get',
			'id'         => 'p',
			'params'     => array(
				'nolog'   => true,
				'id'      => esc_url( $url ),
				'source'  => 'widget',
				'userId'  => '@viewer',
				'groupId' => '@self',
			),
			'jsonrpc'    => '2.0',
			'key'        => 'p',
			'apiVersion' => 'v1'
		);

		$args = array(
			'headers' => array(
				'Content-type' => 'application/json',
			),
			'body'    => json_encode( $body )
		);

		$response = wp_remote_post( $request_url, $args );

		if ( is_wp_error( $response ) || 200 != wp_remote_retrieve_response_code( $response ) ) {
			return 0;
		}

		$response_body = json_decode( wp_remote_retrieve_body( $response ), true );

		if ( ! is_array( $response_body ) || empty( $response_body['result']['metadata']['globalCounts']['count'] ) ) {
			return 0;
		}

		return intval( $response_body['result']['metadata']['globalCounts']['count'] );
	}

	/**
	 * Gets the URL of the featured image or the first image found in
	 * the post.
	 *
	 * @access public
	 * @since  1.0.0
	 * @return string URL to featured image or empty string if none is found
	 */
	public function get_featured_image_url() {

		// Get the featured image if it exists.
		if ( has_post_thumbnail( $this->post->ID ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $this->post->ID ), 'full' );

			return $image[0];
		}

		// See if we can find an image in the post.
		if ( preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $this->post->post_content, $matches ) ) {
			$first_img = $matches[1][0];

			// First image is empty, return an empty string.
			if ( empty( $first_img ) ) {
				return '';
			}

			// Return the first image we've found.
			return $first_img;
		}

		return '';

	}

	/**
	 * Displays the markup for the social share buttons.
	 *
	 * @access public
	 * @since  1.0.0
	 * @return void
	 */
	public function display_share_markup() {
		$twitter_handle = ( array_key_exists( 'twitter_handle', $this->settings ) && $this->settings['twitter_handle'] ) ? $this->settings['twitter_handle'] : '';
		$social_sites   = ( array_key_exists( 'social_sites', $this->settings ) && is_array( $this->settings['social_sites'] ) ) ? $this->settings['social_sites'] : false;

		if ( ! is_array( $social_sites ) || ! count( $social_sites ) ) {
			return;
		}

		$enabled_social_sites = apply_filters( 'naked_social_share_social_sites', $social_sites );
		?>
		<div class="naked-social-share<?php echo $this->is_expired() ? ' nss-update-share-numbers' : ''; ?>" data-post-id="<?php echo absint( $this->post->ID ); ?>">
			<ul>
				<?php do_action( 'naked-social-share/display/before-sites', $this ); ?>
				<?php foreach ( $enabled_social_sites as $key ) { ?>
					<?php switch ( $key ) {
						case 'twitter' :
							?>
							<li class="nss-twitter">
								<a href="http://www.twitter.com/intent/tweet?url=<?php echo urlencode( $this->url ) ?><?php echo ( ! empty( $twitter_handle ) ) ? '&via=' . urlencode( $twitter_handle ) : ''; ?>&text=<?php echo apply_filters( 'naked_social_share_twitter_text', $this->get_title(), $this->post ); ?>" target="_blank">
									<?php echo apply_filters( 'naked_social_share_twitter_icon', '<i class="fab fa-twitter"></i>' ); ?>
									<span class="nss-site-name"><?php echo apply_filters( 'naked-social-share/display/site-name/' . $key, __( 'Twitter', 'naked-social-share' ) ); ?></span>
									<?php if ( ! nss_get_option( 'disable_counters' ) && $this->share_numbers['twitter'] != 0 ) : ?>
										<span class="nss-site-count"><?php echo array_key_exists( 'twitter', $this->share_numbers ) ? esc_html( $this->share_numbers['twitter'] ) : 0; ?></span>
									<?php endif; ?>
								</a>
							</li>
							<?php
							break;

						case 'facebook' :
							?>
							<li class="nss-facebook">
								<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( $this->url ); ?>&t=<?php echo apply_filters( 'naked_social_share_facebook_text', $this->get_title(), $this->post ); ?>" target="_blank">
									<?php echo apply_filters( 'naked_social_share_facebook_icon', '<i class="fab fa-facebook"></i>' ); ?>
									<span class="nss-site-name"><?php echo apply_filters( 'naked-social-share/display/site-name/' . $key, __( 'Facebook', 'naked-social-share' ) ); ?></span>
									<?php if ( ! nss_get_option( 'disable_counters' ) ) : ?>
										<span class="nss-site-count"><?php echo array_key_exists( 'facebook', $this->share_numbers ) ? esc_html( $this->share_numbers['facebook'] ) : 0; ?></span>
									<?php endif; ?>
								</a>
							</li>
							<?php
							break;

						case 'pinterest' :
							?>
							<li class="nss-pinterest">
								<a href="#" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);">
									<?php echo apply_filters( 'naked_social_share_pinterest_icon', '<i class="fab fa-pinterest"></i>' ); ?>
									<span class="nss-site-name"><?php echo apply_filters( 'naked-social-share/display/site-name/' . $key, __( 'Pinterest', 'naked-social-share' ) ); ?></span>
									<?php if ( ! nss_get_option( 'disable_counters' ) ) : ?>
										<span class="nss-site-count"><?php echo array_key_exists( 'pinterest', $this->share_numbers ) ? esc_html( $this->share_numbers['pinterest'] ) : 0; ?></span>
									<?php endif; ?>
								</a>
							</li>
							<?php
							break;

						case 'stumbleupon' :
							?>
							<li class="nss-stumbleupon">
								<a href="http://www.stumbleupon.com/submit?url=<?php echo urlencode( $this->url ); ?>&title=<?php echo apply_filters( 'naked_social_share_stumbleupon_text', $this->get_title(), $this->post ); ?>" target="_blank">
									<?php echo apply_filters( 'naked_social_share_stumbleupon_icon', '<i class="fab fa-stumbleupon"></i>' ); ?>
									<span class="nss-site-name"><?php echo apply_filters( 'naked-social-share/display/site-name/' . $key, __( 'StumbleUpon', 'naked-social-share' ) ); ?></span>
									<?php if ( ! nss_get_option( 'disable_counters' ) ) : ?>
										<span class="nss-site-count"><?php echo array_key_exists( 'stumbleupon', $this->share_numbers ) ? esc_html( $this->share_numbers['stumbleupon'] ) : 0; ?></span>
									<?php endif; ?>
								</a>
							</li>
							<?php
							break;

						case 'google' :
							?>
							<li class="nss-google">
								<a href="https://plus.google.com/share?url=<?php echo urlencode( $this->url ); ?>" target="_blank">
									<?php echo apply_filters( 'naked_social_share_google_icon', '<i class="fab fa-google-plus"></i>' ); ?>
									<span class="nss-site-name"><?php echo apply_filters( 'naked-social-share/display/site-name/' . $key, __( 'Google+', 'naked-social-share' ) ); ?></span>
									<?php if ( ! nss_get_option( 'disable_counters' ) ) : ?>
										<span class="nss-site-count"><?php echo array_key_exists( 'google', $this->share_numbers ) ? esc_html( $this->share_numbers['google'] ) : 0; ?></span>
									<?php endif; ?>
								</a>
							</li>
							<?php
							break;

						case 'linkedin' :
							?>
							<li class="nss-linkedin">
								<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( $this->url ); ?>&title=<?php echo apply_filters( 'naked_social_share_linkedin_text', $this->get_title(), $this->post ); ?>&source=<?php echo urlencode( get_bloginfo( 'name' ) ); ?>" target="_blank">
									<?php echo apply_filters( 'naked_social_share_linkedin_icon', '<i class="fab fa-linkedin"></i>' ); ?>
									<span class="nss-site-name"><?php echo apply_filters( 'naked-social-share/display/site-name/' . $key, __( 'LinkedIn', 'naked-social-share' ) ); ?></span>
									<?php if ( ! nss_get_option( 'disable_counters' ) ) : ?>
										<span class="nss-site-count"><?php echo array_key_exists( 'linkedin', $this->share_numbers ) ? esc_html( $this->share_numbers['linkedin'] ) : 0; ?></span>
									<?php endif; ?>
								</a>
							</li>
							<?php
							break;
					}

					do_action( 'naked_social_share_display_buttons', $key, $this->share_numbers, $this->post, nss_get_option( 'nss_get_option' ) );
				} ?>
				<?php do_action( 'naked-social-share/display/after-sites', $this ); ?>
			</ul>
		</div>
		<?php
	}

	/**
	 * Gets the title of the post, decodes the HTML entities
	 * and urlencodes it for use in a URL.
	 *
	 * @param bool $urlencode
	 *
	 * @access public
	 * @since  1.0.6
	 * @return string
	 */
	public function get_title( $urlencode = true ) {
		$title_raw     = wp_strip_all_tags( get_the_title( $this->post ) );
		$title_decoded = html_entity_decode( $title_raw );
		$final_title   = $urlencode ? urlencode( $title_decoded ) : $title_decoded;

		return apply_filters( 'naked_social_share_get_title', $final_title, $this->post, $title_raw, $this );
	}

}