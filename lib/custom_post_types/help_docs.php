<?php

include_once( CHILD_DIR . '/lib/custom_post_types/api.php' );
include_once( CHILD_DIR . '/lib/custom_post_types/kb.php' );

//
// Add and customize Help Docs, API Docs & KB
//----------------------

function register_help_docs_post_type() {
  // Normal docs
  $labels = array(
    'name' => __( 'Help Docs' ),
    'singular_name' => __( 'Help Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/administrative-docs.png',
    'has_archive' => true,
    'rewrite' => array('slug' => 'docs')
  );

  register_post_type( 'help_docs', $args);
  add_post_type_support( 'help_docs', 'genesis-layouts' );
}

function create_all_docs_post_type() {
  if(genesis_get_option('help_docs') == true){
    register_help_docs_post_type();
  }
  if(genesis_get_option('kb') == true){
    register_kb_post_type();
  }
  if(genesis_get_option('api') == true){
    register_api_post_type();
  }
}

function kb_topic_columns( $taxonomies ) {
    $taxonomies[] = 'topic';
    return $taxonomies;
}

function remove_genesis_page_templates( $page_templates ) {
  unset( $page_templates['page_archive.php'] );
  unset( $page_templates['page_blog.php'] );
  return $page_templates;
}

function all_docs_sidebar_logic() {
  if ( is_singular('help_docs') ) {
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    add_action( 'genesis_sidebar', 'get_help_docs_sidebar' );
  } else if ( is_singular('api_docs') ) {
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    add_action( 'genesis_sidebar', 'get_api_docs_sidebar' );
  } else if ( is_singular('kb') || is_tax('topic') ) {
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    add_action( 'genesis_sidebar', 'get_kb_sidebar' );
  }
}

function get_help_docs_sidebar() {
  genesis_widget_area( 'help_docs_sidebar' );
}

function get_api_docs_sidebar() {
  genesis_widget_area( 'api_docs_sidebar' );
}

function get_kb_sidebar() {
  genesis_widget_area( 'kb_sidebar' );
}

function remove_post_info($post_info) {
  if ( is_singular('help_docs') || is_singular('resources') || is_page_template('page_blog_home.php') || is_tax('topic') || is_singular('guides')) {
  } else {
    $post_info = 'Published on [post_date]';
    return $post_info;
  }
}

function fix_docs_navs_and_header () {
  if( is_singular('help_docs') || is_singular('api_docs') ||  is_singular('kb') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    add_action( 'genesis_before_content', 'genesis_do_post_title', 9 );
    add_action( 'genesis_entry_header', 'blog_post_featured_image', 15);
  }
}