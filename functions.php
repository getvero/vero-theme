<?php

# Custom config files
include_once( 'lib/configuration/assets.php' );
include_once( 'lib/configuration/global.php' );
include_once( 'lib/configuration/headers.php' );
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
  add_theme_support( 'genesis-responsive-viewport' );

  add_action( 'wp_enqueue_scripts', 'add_js' );  
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );

  add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
  remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
  remove_action( 'genesis_header', 'genesis_do_header' );
  remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
  add_filter( 'body_class', 'add_body_classes' );

  //Add custom types
  add_action( 'init', 'create_jobs_post_type' );
  add_action( 'init', 'create_api_post_type' );
  add_action( 'init', 'create_help_docs_post_type' );
  
  register_nav_menu('third-menu-docs' , __( '(Docs) Blue Navigation Menu'));
  register_nav_menu('api-docs-languages' , __( '(Docs) Languages Menu'));
  add_action( 'genesis_after_header', 'add_blue_navbar_logic' ); 

  remove_action( 'genesis_footer', 'genesis_do_footer' );
  add_action( 'genesis_footer', 'custom_footer');

  // Custom help pages
  add_action( 'init', 'add_help_docs_taxonomies', 0 );
  add_filter( 'post_type_link', 'filter_help_docs_link', 10, 2);
  add_filter('genesis_site_layout', 'help_docs_layout');

  // Customise API docs
  genesis_register_sidebar( array(
    'id' => 'api_docs_sidebar',
    'name' => 'API Docs Sidebar',
    'description' => 'This is a column for the API docs sidebar.',
  ) );
  register_nav_menu('blog-api_docs_language_bar-nav-menu' , __( 'API Docs Languages'));
}

?>