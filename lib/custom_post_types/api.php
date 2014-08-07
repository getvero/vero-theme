<?php

function register_api_post_type () {
  // API docs
  $labels = array(
    'name' => __( 'API Docs' ),
    'singular_name' => __( 'API Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/database.png',
    'has_archive' => true,
    'rewrite' => array('slug' => 'api')
  );

  register_post_type( 'api_docs', $args);
  add_post_type_support( 'api_docs', 'genesis-layouts' );
}

?>