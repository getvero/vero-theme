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
include_once( 'lib/post_types/guides.php' );         // Guides pages
include_once( 'lib/post_types/tutorials.php' );      // Tutorials pages
include_once( 'lib/post_types/release_notes.php' );  // Release Notes

add_action('genesis_setup','genesischild_theme_setup', 15);

function genesischild_theme_setup() {
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );

  add_theme_support( 'html5' );
  add_theme_support( 'xhtml' );
  add_theme_support( 'genesis-responsive-viewport' );
  add_theme_support( 'genesis-menus', array(
    'primary' => __( 'Navigation Menu', 'genesis' )
  ) );

  # Remove sidebars
  remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
  remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

  # Conditionally load Disqus
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

  # Remove header
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

  # Add custom types
  add_action( 'init', 'create_release_notes_post_type' );
  add_action( 'init', 'create_guides_post_type' );
  add_action( 'init', 'create_tutorials_post_type' );
  add_filter( 'pre_get_posts', 'add_custom_types' );
  // add_filter( 'post_link', 'change_url', 10, 3 );

  add_post_type_support( 'page', 'excerpt' );

  # Navbars and footers
  register_nav_menu('terms-and-policies' , __( 'Terms and Policies'));

  # Remove Block Library styles
  add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
  function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
  }

  # Remove genesis footer
  remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
  remove_action( 'genesis_footer', 'genesis_do_footer' );
  remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

  add_filter ( 'genesis_prev_link_text' , 'custom_prev_page_link' );
  add_filter ( 'genesis_next_link_text' , 'custom_next_page_link' );

  add_filter( 'genesis_pre_get_option_site_layout', 'force_full_width_on_posts' );
  add_action( 'genesis_after_content_sidebar_wrap', 'blog_cta' );
  add_action( 'genesis_footer', 'custom_footer' );
  add_filter( 'wp_nav_menu', 'add_logo_and_menu_toggle_to_navbar', 10, 2 );

  // add_action( 'genesis_after_header', 'add_categories_and_search' );
  add_action( 'genesis_before_content', 'add_latest_title' );
  add_action( 'genesis_before_loop', 'add_featured_post_to_category' );

  # Move featured image above title on search
  add_action( 'genesis_before_entry', 'move_featured_image' );

  # Customise post entry
  add_action( 'genesis_before_loop', 'change_post_structure' );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
  add_action( 'genesis_post_info', 'add_featured_image_to_post' );
  add_filter( 'genesis_post_info', 'change_post_info' );
  # Add author after entry title on single posts
  add_action( 'genesis_entry_header', 'add_author' );
  add_filter( 'the_content', 'add_class_to_small_images');
  // add_filter( 'the_content', 'add_blue_signup_boxes' );

  # Category page
  add_action( 'genesis_entry_footer', 'add_custom_read_more_link' );

  # Post Page
  add_action( 'genesis_before_content', 'generate_table_of_contents' );
  add_action( 'genesis_after_content', 'add_shares_to_post', 1 );
  // add_action( 'genesis_entry_footer', 'post_remove_footer' );
  add_filter( 'get_image_tag_class', '__return_empty_string' );

  # Remove entry footer on post page
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

  # Remove entry content on archives
  add_action( 'genesis_before_entry' , 'remove_archives_entry_content' );
  add_action( 'genesis_entry_content', 'custom_excerpt_text' );

  # Excerpt length for category/search page
  add_filter( 'excerpt_length', 'custom_excerpt_length' );
  add_filter( 'excerpt_more', 'new_excerpt_more' );

  # Remove comments
  add_action( 'genesis_after_entry', 'remove_comments', 0 );

  # Add categories and tags to pages
  function myplugin_settings() {
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
  }
  // Add to the admin_init hook of your theme functions.php file
  add_action( 'init', 'myplugin_settings' );

  # Search
  add_action( 'genesis_before', 'remove_search_title' );
  add_filter( 'genesis_search_text', 'change_search_form_placeholder' );
  add_filter( 'get_search_form', 'change_search_form_type' );
  add_filter( 'genesis_search_form', 'my_search_button' );
  function my_search_button($form) {

      $document = new DOMDocument();
      $document->loadHTML($form);
      $xpath = new DOMXPath($document);
      $input = $xpath->query('//input[@type="submit"]');
      $label = $document->createElement('label');
      $label->setAttribute('class', 'search-toggle search-toggle-close ico ico-close');
      $label->setAttribute('for', 'search-form');

      if ($input->length > 0) {
        $input->item(0)->parentNode->insertBefore($label, $input->item(0));
      }

      $document->removeChild($document->doctype);
      $document->replaceChild($document->firstChild->firstChild->firstChild, $document->firstChild);
      $form_html = $document->saveHTML();

      return $form_html;
  }

  # Remove Genesis SEO Settings menu link
  remove_theme_support('genesis-seo-settings-menu');

  # Customise release notes
  add_action( 'genesis_before', 'remove_elements_release_notes' );
  add_action( 'template_redirect', 'single_release_note_redirect' );

  # Customise resources home page
  add_action( 'genesis_before_loop', 'change_home_loop' );

  add_action( 'genesis_after_content_sidebar_wrap', 'be_related_posts_by_category' );

  # Noindex blog home subpages
  add_filter( 'wpseo_robots', function($robots) {
    if ( is_home() && is_paged() ) {
      return 'noindex, follow';
    } else {
      return $robots;
    }
  });

  # Redirect archive subpages
  // function wpa_parse_query( $query ){
  //   if ( is_home() && is_paged() ) {
  //     wp_redirect( home_url() );
  //     exit;
  //   }
  // }
  // add_action( 'parse_query', 'wpa_parse_query' );
}

?>
