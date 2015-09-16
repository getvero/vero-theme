<?php

# Custom config files
include_once( 'lib/configuration/assets.php' );
include_once( 'lib/configuration/archive.php' );
include_once( 'lib/configuration/blog.php' );
include_once( 'lib/configuration/posts.php' );
include_once( 'lib/configuration/search.php' );
include_once( 'lib/configuration/global.php' );
include_once( 'lib/configuration/headers.php' );
include_once( 'lib/configuration/tracking.php' );
include_once( 'lib/configuration/footers.php' );

# Add in custom resources and the like
include_once( 'lib/post_types/api.php' );             # API archive and pages
include_once( 'lib/post_types/guides.php' );          # Guides pages
include_once( 'lib/post_types/help_docs.php' );       # Help docs archive and pages
include_once( 'lib/post_types/jobs.php' );            # Jobs archive and pages

add_action('genesis_setup','genesischild_theme_setup', 15);
function genesischild_theme_setup() { 
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );
  
  add_theme_support( 'html5' );
  add_theme_support( 'xhtml' );
  add_theme_support( 'genesis-responsive-viewport' );
  add_theme_support( 'genesis-menus', array( 
    'primary' => __( 'Navigation Menu', 'genesis' ) 
  ) );

  add_action( 'wp_enqueue_scripts', 'add_js' ); 
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );

  add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
  remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
  remove_action( 'genesis_header', 'genesis_do_header' );
  remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
  add_filter( 'body_class', 'add_body_classes' );
  add_filter('wp_get_attachment_url', 'my_wp_get_attachment_url_ssl');

  unregister_sidebar( 'sidebar-alt' );
  unregister_sidebar( 'sidebar-footer' );
  unregister_sidebar( 'header-right' );
  unregister_nav_menu( 'header-right' );

  // Add custom types
  add_action( 'init', 'create_jobs_post_type' );
  add_action( 'init', 'create_api_post_type' );
  add_action( 'init', 'create_help_docs_post_type' );
  add_action( 'init', 'create_guides_post_type' );
  add_filter( 'pre_get_posts', 'add_custom_types' );
  // add_filter( 'post_link', 'change_url', 10, 3 );

  // Navbars and footers
  register_nav_menu('blue-nav-left' , __( 'Blue Navbar'));
  register_nav_menu('api-languages' , __( 'API Languages'));
  add_action( 'genesis_after_header', 'add_blue_navbar_logic' ); 
  remove_action( 'genesis_footer', 'genesis_do_footer' );
  add_action( 'genesis_footer', 'custom_footer');
  add_filter( 'wp_nav_menu', 'add_logo_and_menu_toggle_to_navbar', 10, 2 );
  add_filter('get_search_form', 'change_search_form_type');

  // Add featured posts, search and category bar to posts archive
  add_filter( 'genesis_pre_get_option_site_layout', 'force_full_width_on_posts' );
  add_action( 'genesis_before_content', 'add_blog_post_back_button' );
  add_action( 'genesis_before_content_sidebar_wrap', 'add_categories_and_search' );
  add_action( 'genesis_before_content_sidebar_wrap', 'add_featured_posts' );
  add_action( 'genesis_before_loop', 'add_latest_title' );
  add_filter( 'genesis_prev_link_text', 'prev_link_text' );
  add_filter( 'genesis_next_link_text', 'next_link_text' );

  // Entry post structure
  add_filter( 'get_the_content_more_link', 'remove_read_more_link' ); 
  add_action( 'genesis_entry_footer', 'add_custom_read_more_link' );
  add_action( 'genesis_entry_footer', 'add_shares' );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
  add_action( 'genesis_entry_header', 'add_feature_image_to_posts', 12 );
  add_action( 'genesis_entry_header', 'add_shares_to_post', 13 );
  add_filter( 'genesis_post_info', 'change_post_info' );
  add_filter( 'genesis_after_entry_content', 'add_author_bio' );
  add_filter( 'genesis_after_entry_content', 'add_subscribe_form' );
  add_filter( 'the_content', 'add_class_to_small_images');
  add_filter( 'the_content', 'add_blue_signup_boxes' );

  // Custom sidebar for post
  genesis_register_sidebar( array(
    'id'            => 'post-sidebar',
    'name'          => __( 'Post Sidebar', 'vero' ),
    'description'   => __( 'This widget are floats next to blog posts and guides', 'vero' ),
  ) );
  add_action( 'genesis_after_content', 'add_post_sidebar' );

  // Category page
  add_action( 'genesis_entry_header', 'category_setup', 8); 

  // Post Page
  add_action( 'genesis_entry_footer', 'post_remove_footer' );
  add_action( 'genesis_before_footer', 'blog_related_posts');

  // Search page
  add_action ('genesis_before', 'remove_search_title');

  // Custom help pages
  add_action( 'pre_get_posts',  'set_posts_per_docs_category'  );
  add_action( 'init', 'add_help_docs_taxonomies', 0 );
  add_action( 'get_header', 'change_help_docs_sidebar' );
  add_filter( 'post_type_link', 'filter_help_docs_link', 10, 2 );
  add_action( 'genesis_entry_header', 'add_help_docs_breadcrumbs', 8 );

  // Customise API docs
  add_action( 'genesis_before', 'remove_contents_for_api' );
  add_action( 'get_header', 'change_api_sidebar' );
  genesis_register_sidebar( array(
    'id' => 'api_docs_sidebar',
    'name' => 'API Docs Sidebar',
    'description' => 'This is a column for the API docs sidebar.',
  ) );
}

?>