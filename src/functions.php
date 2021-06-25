<?php

# Custom config files
include_once( 'lib/configuration/assets.php' );
include_once( 'lib/configuration/archive.php' );
include_once( 'lib/configuration/blog.php' );
include_once( 'lib/configuration/posts.php' );
include_once( 'lib/configuration/search.php' );
include_once( 'lib/configuration/global.php' );
include_once( 'lib/configuration/headers.php' );
include_once( 'lib/configuration/footers.php' );

# Add in custom resources and the like
include_once( 'lib/post_types/guides.php' );         // Guides pages
include_once( 'lib/post_types/tutorials.php' );      // Tutorials pages

# Load everything to configure our Genesis setup
add_action('genesis_setup','genesischild_theme_setup', 15);

function genesischild_theme_setup() {
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );

  // ------ Baseline Genesis and Wordpress defaults and customisations

  # Add/remove support for a bunch of things — not quite sure what TBQH
  add_theme_support('html5');
  add_theme_support('xhtml');
  add_theme_support('genesis-responsive-viewport');
  add_theme_support('genesis-menus', array('primary' => __( 'Navigation Menu', 'genesis' )));
  if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    add_image_size('category-thumb', 387, 9999); // 300 pixels wide (and unlimited height)
  }
  add_filter('genesis_edit_post_link' , '__return_false' );

  # Remove default Genesis and Wordpress sidebars
  remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
  remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );
  unregister_sidebar( 'sidebar' );
  unregister_sidebar( 'sidebar-alt' );
  unregister_sidebar( 'sidebar-footer' );
  unregister_sidebar( 'header-right' );
  unregister_nav_menu( 'header-right' );

  # Remove default Genesis header
  remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
  remove_action( 'genesis_header', 'genesis_do_header' );
  remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

  # Remove Genesis footer
  remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
  remove_action( 'genesis_footer', 'genesis_do_footer' );
  remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

  # Remove block library as we don't use the Gutenberg editor
  add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );
  function remove_wp_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
  }

  # Remove Block Library styles
  add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
  function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
  }

  # Remove comments
  remove_action('genesis_after_entry', 'genesis_get_comments_template');


  // ------ Customise global settings for our theme

  # Random global stuff
  add_filter('wp_get_attachment_url', 'my_wp_get_attachment_url_ssl');

  # Add categories and tags to pages, not just posts
  add_action( 'init', 'myplugin_settings' );
  function myplugin_settings() {
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
  }

  # These functions are found in assets.php
  add_action( 'wp_enqueue_scripts', 'add_js' );
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );
  add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
  add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
  add_action( 'wp_footer', 'move_recaptcha_script' );
  add_filter( 'style_loader_src', 'remove_ver_css_js', 9999 );
  add_filter( 'script_loader_src', 'remove_ver_css_js', 9999 );

  # Add custom post types
  add_action('init', 'create_guides_post_type');
  add_action('init', 'create_tutorials_post_type');
  add_filter('pre_get_posts', 'add_custom_types');
  add_post_type_support('page', 'excerpt');

  # Customise headers and structure
  # These functions are found in headers.php
  add_filter( 'genesis_pre_get_option_site_layout', 'force_full_width_on_posts' );
  add_filter('body_class', 'add_body_classes');
  add_filter( 'wp_nav_menu', 'add_logo_and_menu_toggle_to_navbar', 10, 2 );
  add_filter( 'wp_nav_menu_args', 'add_classes_to_navbar' );

  # Customise footers
  # These functions are found in footers.php
  add_action( 'genesis_after_content_sidebar_wrap', 'blog_cta' );
  add_action( 'genesis_footer', 'custom_footer' );


  // ------ Customise home page and categories home pages
  // ------ These functions are found in archive.php

  # Customise resources home page
  add_action( 'genesis_before_loop', 'change_home_loop' );

  # Remove entry content on archives
  add_action( 'genesis_before_entry' , 'remove_archives_entry_content' );
  add_action( 'genesis_entry_content', 'custom_excerpt_text' );

  # Customize next/previous buttons
  add_filter ( 'genesis_prev_link_text' , 'custom_prev_page_link' );
  add_filter ( 'genesis_next_link_text' , 'custom_next_page_link' );

  # Add the big featured post to the top of each category
  add_action( 'genesis_before_loop', 'add_featured_post_to_category' );

  # Move featured image above entry title on archives
  add_action( 'genesis_before_entry', 'move_featured_image' );

  # Excerpt length for category/search page
  add_filter( 'excerpt_length', 'custom_excerpt_length' );
  add_filter( 'excerpt_more', 'new_excerpt_more' );

  add_action( 'genesis_entry_footer', 'add_custom_read_more_link' );


  // ------ Customise individual post pages

  add_filter( 'get_image_tag_class', '__return_empty_string' );

  # Customize header
  add_action( 'genesis_entry_header', 'add_featured_image_to_post', 3 );

  # Remove footer on post page
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

  # Remove entry meta on articles
  remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

  # Add author after entry title on single posts
  add_action( 'genesis_entry_header', 'add_author' );

  # Customize entry meta
  add_action( 'genesis_entry_header', 'genesis_post_info', 9 );
  add_filter( 'genesis_post_info', 'change_post_info', 15 );

  # Table of Contents on certain pages
  add_action( 'genesis_before_content', 'generate_table_of_contents' );

  # Add social shares
  add_action( 'genesis_after_content', 'add_shares_to_post', 1 );

  # Add support for an optional banner on blog posts
  add_action( 'genesis_before_header', 'blog_banner' );
  add_filter( 'body_class', 'add_body_class_blog_banner' );

  # Related posts
  add_action( 'genesis_after_content_sidebar_wrap', 'be_related_posts_by_category' );

  # Add the title to categories pages
  add_action( 'genesis_before_content', 'add_latest_title' );

  # Add a banner to the tutorials page
  add_action( 'genesis_before_content', 'add_banner_to_tutorials' );

  // ------ Customise the search page

  # Customise the search page
  add_action( 'genesis_before', 'remove_search_title' );
  add_filter( 'genesis_search_text', 'change_search_form_placeholder' );
  add_filter( 'get_search_form', 'change_search_form_type' );
  add_filter( 'genesis_search_form', 'my_search_button' );


  // ------ SEO stuff

  # Remove Genesis SEO Settings menu link
  remove_theme_support('genesis-seo-settings-menu');

  # Change OG type
  add_filter( 'wpseo_opengraph_type', 'yoast_change_opengraph_type', 10, 1 );
  function yoast_change_opengraph_type( $type ) {
    if ( is_page('drag-and-drop') || is_page('pricing') ) {
      return 'website';
    } else {
      return $type;
    }
  }


  // ------ Not yet categorised

  add_action ( 'genesis_after_entry', 'move_pagination' );
}

?>