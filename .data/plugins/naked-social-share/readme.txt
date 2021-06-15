=== Naked Social Share ===
Contributors: NoseGraze
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=L2TL7ZBVUMG9C
Tags: social, twitter, facebook, pinterest, stumbleupon, social share
Requires at least: 3.0
Tested up to: 5.5.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple, unstyled social share icons for theme designers.

== Description ==

Naked Social Share allows you to insert plain, unstyled social share buttons for Twitter, Facebook, Pinterest, StumbleUpon, and Google+ after each post. The icons come with no styling, so that you -- the designer -- can style the buttons to match your theme.

There are a few simple options in the settings panel:

* Load default styles - This includes a simple stylesheet that applies a few bare minimum styles to the buttons.
* Load Font Awesome - Naked Social Share uses Font Awesome for the social share icons.
* Disable JavaScript - There is a small amount of JavaScript used to make the buttons open in a new popup window when clicked.
* Automatically add buttons - You can opt to automatically add the social icons below blog posts or pages.
* Twitter handle - Add your Twitter handle to include a "via @YourHandle" message in the Tweet.
* Social media sites - Change the order the buttons appear in and disable any you don't want.

If you want to display the icons manually in your theme, do so by placing this code inside your theme file where you want the icons to appear:

`<?php naked_social_share_buttons(); ?>`

== Installation ==

1. Upload `naked-social-share` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Adjust the settings in Settings -> Naked Social Share
1. If you want to display the buttons manually in your theme somewhere, insert this into your theme file where you want the buttons to appear: `<?php naked_social_share_buttons(); ?>`

== Frequently Asked Questions ==

= How can I add the icons to my theme manually? =

Open up your theme file (for example, `single.php`) and place this code exactly where you want the icons to appear: `<?php naked_social_share_buttons(); ?>`

= Why aren't my share counters updating? =

The share counters are cached for 3 hours to improve loading times and to avoid making API calls on every single page load.

= Will this plugin slow down my site? =

If you opt to display share counts, then the plugin uses third party APIs to get that information. However, these calls are made via ajax after the page is loaded, so you won't notice any impact on loading time. Here's how the process works:

* Page loads immediately with saved share numbers.
* If the cache has expired, then JavaScript picks that up and makes an ajax call to fetch new numbers.
* The new numbers are saved in the background and the cache expiry is updated.
* The page is updated via JavaScript with the new numbers.
* On the next page load, the new saved numbers are displayed and since the cache is now valid, no ajax call is made.

= How can I extend the plugin to add a new site? =

You can add a new site using filters and actions from the plugin. Here's an example showing how to create an add-on plugin to add 'Email' as a social site option: https://gist.github.com/nosegraze/73e950885fdbbecb20fe

= How can I change the font awesome icons? =

You can do this by creating a new add-on plugin and using the Naked Social Share filters. Here's an example for changing the Twitter icon:

`function nss_addon_twitter_icon( $icon_html ) {
	return '<i class="fa fa-twitter-square"></i>';
}
add_filter( 'naked_social_share_twitter_icon', 'nss_addon_twitter_icon' );`

For more details, see this page: https://gist.github.com/nosegraze/f00b5101466752213e2d

== Screenshots ==

1. The view of the settings panel.
2. A screenshot of the social share icons automatically added to the Twenty Fifteen theme. This also shows the default button styles applied.

== Changelog ==

= 1.5.2 - 25 October 2020 =
* Fix: Use `Naked_Social_Share_Buttons::$url` property for all post/page URLs.
* Improvement: More escaping and URL encoding.

= 1.5.1 - 1 October 2019 =
* Fix: Buttons not appearing on the `page` post type.

= 1.5 =
* New: Font Awesome library updated to version 5.5.

= 1.4.2 =
* Fix: StumbleUpon count was only working if Pinterest was also enabled.
* Fix: Google+ count not working.

= 1.4.1 =
* Updated Font Awesome library to version 4.7.0.

= 1.4.0 =
* You can now control the automatic display on all public post types instead of just posts and pages.

= 1.3.4 =
* Fixed problem with Font Awesome not being loaded, even when checked.
* Sorry for 5 million updates in such quick succession. I know it sucks.

= 1.3.3 =
* Pinterest no longer opens in a new tab.

= 1.3.2 =
* JavaScript file is no longer loaded if "Disable JavaScript" is checked and "Disable Share Counters" is checked.

= 1.3.1 =
* Strip tags from post titles.
* Added filter to `get_title()` method.
* Fixed problem with disabling counters not working.

= 1.3.0 =
* Share numbers are now updated via ajax to stop the page from taking longer to load when the cache is expired.
* Updated default styles to hide `:before` and reset some padding.
* Refactored the settings panel code.
* Added sanitization callbacks to settings.
* Updated how the "Social Media Sites" sorter array is saved. **NOTE:** If you used [this tutorial](https://gist.github.com/nosegraze/73e950885fdbbecb20fe) to add a custom social media site, you will need to update your code. Follow that link for the new details.
* Deleted screenshots from plugin file.

= 1.2.9 =
* Fixed issue with Facebook share counts. They should hopefully work again now.

= 1.2.8 =
* Added a few extra `array_key_exists` checks around the display code to hopefully avoid some errors from popping up.

= 1.2.7 =
* Changed the behaviour of the Pinterest share button to allow for image selection.

= 1.2.6 =
* Added more filters and actions for extending the plugin. See the FAQ for examples: https://wordpress.org/plugins/naked-social-share/faq/

= 1.2.5 =
* Removed the share counter (just the number - not the button) for Twitter due to their API changes. The number is only removed if the share count is 0, which it will be for all new blog posts. (I'm doing my best to preserve previous numbers from before the API change.)

= 1.2.4 =
* Added filters for the share text for each social media site so the text can be modified in other plugins/themes. For example, the Twitter filter is: naked_social_share_twitter_text. Each filter takes two parameters: the share text and the post object.

= 1.2.3 =
* Fixed a glitch with the Pinterest share button where it wasn't picking up the featured image.

= 1.2.2 =
* Added German translation. Thanks to jackennils
* Changed cache time to 3 hours, as advertised. It was set to only 2 hours for some reason.

= 1.2.1 =
* Tested with WordPress version 4.3.
* Minor coding tweaks to the settings panel.

= 1.2.0 =
* Added LinkedIn button.
* Tested with WordPress version 4.2.4.
* New option to disable share counts.
* Code tweaks to properly implement upgrade routines and version number logging.

= 1.1.3 =
* Fixed an incorrectly spelled slug.
* Updated the settings panel (no visual changes).
* Tested with WordPress version 4.2.3

= 1.1.2 =
* Added more class names to the buttons so you can target the site name (text) and the counter numbers separately.

= 1.1.1 =
* Changed the method used to retrieve the Facebook share count.

= 1.1.0 =
* Settings Panel: You can now change the display order of the social media sites and disable the ones you don't want.
* Settings Panel: Google+ button option is now available.
* Buttons: Fixed a problem with ampersands displaying as their HTML entities when sharing a post (specifically Twitter). Titles are now run through html_entity_decode()
* Updated readme.txt

= 1.0.5 =
* Made some code adjustments to the Naked_Social_Share_Buttons class so you can fetch the buttons for any post object.

= 1.0.4 =
* Fixed a problem with the caching not working properly.

= 1.0.3 =
* Fixed an undefined property notice when the post is not submitted to StumbleUpon.
* Added class names to each social button's `li` tag in case you want to style them differently.
* Tested with WordPress 4.2.

= 1.0.2 =
* Replaced `urlencode` functions with `esc_url_raw`, as urlencode was preventing the social share requests from working properly.

= 1.0.1 =
* Removed some debugging code that was left behind.

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.5.1 =
* Fix: Buttons not appearing on the page post type.