<?php
function create_api_post_type() {
  $labels = array(
    'name' => __( 'API Docs' ),
    'singular_name' => __( 'API Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'rewrite' => array('slug' => 'api', 'with_front' => false)
  );

  register_post_type( 'api_docs', $args);
  add_post_type_support( 'api_docs', 'genesis-layouts' );
}

function change_api_sidebar() {
  if ( is_singular('api_docs') ) {
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    add_action( 'genesis_sidebar', 'add_api_page_sidebar' );
  }
}

function add_api_page_sidebar() {
  genesis_widget_area( 'api_docs_sidebar' );
}

function remove_contents_for_api() {
  if ( is_singular('api_docs') ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
  }
}

?>