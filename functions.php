<?php
// Start the engine the other way
add_action('genesis_setup','genesischild_theme_setup', 15); 
function genesischild_theme_setup() { 

	//Define child theme version
	define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );
	
  // Custom stylesheet
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );

  //Setup theme functions
  include_once( CHILD_DIR . '/lib/theme-functions.php' );
  include_once( CHILD_DIR . '/lib/theme-settings.php' );

  unregister_sidebar( 'sidebar-alt' );
  unregister_sidebar( 'sidebar-footer' );
  unregister_sidebar( 'header-right' );
  add_theme_support('genesis-footer-widgets', 3);

  //Favicon
  add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
  
  //Add classes to small images
  add_filter('the_content', 'add_class_to_small_images');

  //Change more links
  add_filter( 'the_content_more_link', 'read_more_link' );

  //Fix version numbers
  add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
  
  //Add categories to pages
  add_filter( 'admin_init', 'add_categories_to_pages');

  //Filter text on static pages
  //add_filter( 'admin_head', 'filter_text_on_static_pages');

  //Adjust sidebar in admin
  add_action( 'admin_menu', 'set_admin_menu_separator');

  //Fix pagination
  add_filter( 'genesis_prev_link_text', 'gt_review_prev_link_text' );
  function gt_review_prev_link_text() {
          $prevlink = '&laquo; Previous Posts';
          return $prevlink;
  }
  add_filter( 'genesis_next_link_text', 'gt_review_next_link_text' );
  function gt_review_next_link_text() {
          $nextlink = 'Next Posts &raquo;';
          return $nextlink;
  }
  
  //Cookies
  add_action('init', 'set_cookies');
  
  //Enqueue JS
  add_action( 'wp_enqueue_scripts', 'add_js' );  
  add_action('genesis_after_footer', 'add_gtm_identify');
  
  //HTML5 support
	remove_action( 'genesis_entry_footer', 'optimized_counters_html5', 1 );

	//Add support for HTML5 markup
	add_theme_support( 'html5' );
	//Add viewport metatag
	add_theme_support( 'genesis-responsive-viewport' );

	//Remove header
	remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
	remove_action( 'genesis_header', 'genesis_do_header' );
	remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

  //Remove Digg Digg where required
  add_filter('genesis_before', 'remove_digg_digg');

  //Add popups
  add_filter('genesis_after_content', 'custom_popups');

	//Remove 'filed under' & info
	remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
	add_filter( 'genesis_post_info', 'remove_post_info' );

	//Remove the edit link
	add_filter ( 'genesis_edit_post_link' , '__return_false' );

	//Custom footer
	add_filter( 'genesis_footer_output', 'child_output_filter', 10, 3 );

	//Custom body classes
  add_filter( 'body_class', 'add_body_classes' );

	//Add and customise help docs, KB and API docs
	add_action( 'init', 'create_all_docs_post_type' );
  genesis_register_sidebar( array(
    'id' => 'api_docs_sidebar',
    'name' => 'API Docs Sidebar',
    'description' => 'This is a column for the API docs sidebar.',
  ) );

  register_nav_menu('blog-api_docs_language_bar-nav-menu' , __( 'API Docs Languages'));
	add_action( 'get_header', 'all_docs_sidebar_logic' );
  add_filter( 'manage_taxonomies_for_kb_columns', 'kb_topic_columns' );
  add_filter( 'generate_rewrite_rules', 'taxonomy_slug_rewrite');

	//Customize blog posts
  add_action( 'genesis_before', 'fix_blog_navs_and_header' );
  add_action( 'genesis_after_header', 'add_blog_navbar_logic' ); 
  register_nav_menu('blog-secondary-nav-menu' , __( '(Blog) Primary Navigation Menu'));
  add_action( 'genesis_entry_footer', 'add_how_to_do_this_area', 14 );
  add_action( 'genesis_entry_footer', 'add_blog_cta_before_footer', 15 );

  //Add guides
  add_action( 'init', 'create_guides_post_type' );
  add_action( 'genesis_before', 'custom_header_for_guides' ); 
  add_action( 'genesis_before', 'fix_guide_navs' );
  add_action( 'wp_enqueue_scripts', 'add_guides_scripts');
  add_action ( 'genesis_after_entry', 'guides_before_footer');
  genesis_register_sidebar( array(
    'id'        => 'guides-sidebar-widget',
    'name'      => __( 'Guides sidebar' ),
    'description' => __( 'This is the code for registering a new widget in your functions file.' )
  ) );
  add_action( 'genesis_after_content', 'add_guides_sidebar' );

	//Add and customise resources
	add_action( 'init', 'create_resources_post_type' );

  //Add and customise resources page
  create_sidebars_blog_resources();

  //Custom blue navigation on blog posts and docs
  register_nav_menu('third-menu-blog' , __( '(Blog) Blue Navigation Menu'));
  register_nav_menu('third-menu-docs' , __( '(Docs) Blue Navigation Menu'));
  add_action( 'genesis_after_header', 'add_blue_navbar_logic' ); 
  add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );

  //Add logo to primary nav bar
  add_filter( 'genesis_nav_items', 'add_logo_to_navbar', 10, 2 );
  add_filter( 'wp_nav_menu_items', 'add_logo_to_navbar', 10, 2 );
  remove_action('genesis_after_header', 'genesis_do_subnav');
  add_action( 'after_setup_theme', 'remove_default_menu', 11 );
  function remove_default_menu(){
    unregister_nav_menu('secondary');
  }

  //Hola page
  register_nav_menu('hola-nav-menu' , __( '(Main) Hola Primary Navigation Menu'));
}
?>