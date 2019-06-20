<?php

# Custom config files
include_once( 'lib/configuration/assets.php' );
include_once( 'lib/configuration/archive.php' );
include_once( 'lib/configuration/blog.php' );
include_once( 'lib/configuration/release_notes.php' );
include_once( 'lib/configuration/posts.php' );
include_once( 'lib/configuration/search.php' );
include_once( 'lib/configuration/global.php' );
include_once( 'lib/configuration/headers.php' );
include_once( 'lib/configuration/tracking.php' );
include_once( 'lib/configuration/footers.php' );

# Add in custom resources and the like
include_once( 'lib/post_types/guides.php' );          # Guides pages
include_once( 'lib/post_types/tutorials.php' );          # Tutorials pages
include_once( 'lib/post_types/release_notes.php' );   # Release Notes

add_action('genesis_setup','genesischild_theme_setup', 15);

function genesischild_theme_setup() {
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );

  add_theme_support( 'html5' );
  add_theme_support( 'xhtml' );
  add_theme_support( 'genesis-responsive-viewport' );
  add_theme_support( 'genesis-menus', array(
    'primary' => __( 'Navigation Menu', 'genesis' )
  ) );

  // Remove sidebars
  remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
  remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );
  // Conditionally load Disqus
  function filter_dsq_can_load( $script_name ) {
    if ( !is_single() && ( 'count' === $script_name || 'embed' === $script_name )) {
      return false;
    }
    return true;
  }
  add_filter( 'dsq_can_load', 'filter_dsq_can_load' );

  add_action( 'wp_enqueue_scripts', 'add_js' );
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );

  add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );

  // Remove header
  remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
  remove_action( 'genesis_header', 'genesis_do_header' );
  remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

  add_filter( 'body_class', 'add_body_classes' );
  add_filter('wp_get_attachment_url', 'my_wp_get_attachment_url_ssl');
  add_filter ( 'genesis_edit_post_link' , '__return_false' );

  unregister_sidebar( 'sidebar' );
  unregister_sidebar( 'sidebar-alt' );
  unregister_sidebar( 'sidebar-footer' );
  unregister_sidebar( 'header-right' );
  unregister_nav_menu( 'header-right' );

  // Add custom types
  add_action( 'init', 'create_release_notes_post_type' );
  add_action( 'init', 'create_guides_post_type' );
  add_action( 'init', 'create_tutorials_post_type' );
  add_filter( 'pre_get_posts', 'add_custom_types' );
  // add_filter( 'post_link', 'change_url', 10, 3 );

  // Navbars and footers
  register_nav_menu('terms-and-policies' , __( 'Terms and Policies'));

  // Remove genesis footer
  remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
  remove_action( 'genesis_footer', 'genesis_do_footer' );
  remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

  add_action( 'genesis_after_content', 'landing_blog_cta' );
  add_action( 'genesis_after_content_sidebar_wrap', 'post_blog_cta' );
  add_action( 'genesis_footer', 'custom_footer' );
  add_filter( 'wp_nav_menu', 'add_logo_and_menu_toggle_to_navbar', 10, 2 );
  add_filter( 'get_search_form', 'change_search_form_type' );

  // Add categories and search
  // add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'genesis_pre_get_option_site_layout', 'force_full_width_on_posts' );
  // add_action( 'genesis_before_content', 'add_blog_post_back_button' );
  // add_action( 'genesis_after_header', 'add_categories_and_search' );
  add_action( 'genesis_before_content', 'add_latest_title' );
  add_action( 'genesis_before_loop', 'add_featured_post_to_category' );
  add_filter( 'genesis_prev_link_text', 'prev_link_text' );
  add_filter( 'genesis_next_link_text', 'next_link_text' );

  // Entry post structure
  add_filter( 'get_the_content_more_link', 'remove_read_more_link', 99 );
  add_action( 'genesis_entry_footer', 'add_custom_read_more_link' );

  // Move featured image above title
  add_action( 'genesis_entry_header', 'move_featured_image' );

  // Customise post entry
  add_action( 'genesis_before_loop', 'change_post_structure' );

  // add_action( 'genesis_after_content', 'add_subscribe_form' );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
  add_action( 'genesis_before_entry', 'add_featured_image_to_post' );
  add_action( 'genesis_entry_header', 'add_shares_to_post', 13 );
  add_filter( 'genesis_post_info', 'change_post_info' );
  // Add author after entry title on single posts
  add_action( 'genesis_entry_header', 'add_author' );
  // Add date after entry title on posts
  // add_action( 'genesis_entry_header', 'add_date' );
  add_filter( 'genesis_after_entry_content', 'add_contributors' );
  add_filter( 'the_content', 'add_class_to_small_images');
  add_filter( 'the_content', 'add_blue_signup_boxes' );
  add_action( 'genesis_entry_footer', 'custom_entry_footer' );

  // Custom sidebar for post
  genesis_register_sidebar( array(
    'id'            => 'post-sidebar',
    'name'          => __( 'Post Sidebar', 'vero' ),
    'description'   => __( 'This widget are floats next to blog posts and guides', 'vero' ),
  ) );
  add_action( 'genesis_after_content', 'add_post_sidebar' );

  // Category page
  add_action( 'genesis_entry_header', 'category_setup', 8);
  remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

  // Post Page
  // add_action( 'genesis_entry_footer', 'post_remove_footer' );
  // add_action( 'genesis_entry_footer', 'blog_related_posts');

  // Remove entry footer on post page
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

  add_filter( 'excerpt_length', 'custom_excerpt_length' );
  add_filter( 'excerpt_more', 'new_excerpt_more' );

  // Search page
  add_action( 'genesis_before', 'remove_search_title' );
  add_filter( 'genesis_search_text', 'change_search_form_placeholder' );
  add_filter( 'search_form_format', 'wpse_259716_search_form_format', 99, 1 );
  function wpse_259716_search_form_format( $format ) {
    if( in_array( $format, array( 'html5' ) ) ) {
      add_filter( 'get_search_form', "wpse_259716_get_search_form_$format", 99, 1 );
    }
    return $format;
  }

  function wpse_259716_get_search_form_html5( $form ) {
    $search = '<input type="submit"';
    $html5 = '<label class="search-toggle search-toggle-close ico ico-close" for="search-form"></label>
    <input class="search-checkbox hide" id="search-form" type="checkbox">';
    $replace = $html5 . $search;
    return str_replace( $search, $replace, $form );
  }

  // Remove Genesis SEO Settings menu link
  remove_theme_support('genesis-seo-settings-menu');

  // Customise Release Notes
  add_action( 'genesis_before', 'remove_elements_release_notes' );
  add_action( 'template_redirect', 'single_release_note_redirect' );

  // Customise resources home page
  add_action( 'genesis_before_loop', 'change_home_loop' );

  // Add custom thumbnail size
  add_action( 'after_setup_theme', 'add_inline_thumbnail' );
  function add_inline_thumbnail() {
    add_image_size( 'inline-thumbnail', 800, 600, array( 'center', 'top' ) );
  }
  add_filter( 'image_size_names_choose', 'rudr_new_image_sizes' );
  function rudr_new_image_sizes( $sizes ) {
    $addsizes = array(
        'inline-thumbnail' => 'Inline thumbnail'
    );

    $newsizes = array_merge( $sizes, $addsizes );

    return $newsizes;
  }

}

?>
