<?php
function create_api_post_type() {
  $labels = array(
    'name' => __( 'API Docs' ),
    'singular_name' => __( 'API Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/api.png',
    'has_archive' => true,
    'hierarchical' => true,
    'rewrite' => array('slug' => 'api', 'with_front' => false)
  );

  register_post_type( 'api_docs', $args);
  add_post_type_support( 'api_docs', 'genesis-layouts' );
}

?>