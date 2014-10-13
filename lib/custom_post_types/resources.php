<?php

//
// Add and customize Resources
//----------------------
function create_resources_post_type () {
  if (genesis_get_option('resources') == true) {
     $labels = array(
      'name' => __( 'Resources' ),
      'singular_name' => __( 'Resource' )
      );

      $args = array(
      'labels' => $labels,
      'public' => true,
      'menu_icon' => '/wp-content/themes/vero/assets/images/icons/resources.png',
      'has_archive' => true,
      'rewrite' => array('slug' => 'resources'),
      'supports' => array( 'title', 'editor', 'thumbnail' )
      );

    register_post_type( 'resources', $args);
    add_post_type_support( 'resources', 'genesis-layouts' );
  }
}

?>