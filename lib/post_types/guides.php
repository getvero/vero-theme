<?php

function create_guides_post_type() {
  $labels = array(
    'name' => __( 'Guides' ),
    'singular_name' => __( 'Guide' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'guides','with_front' => true),
    'hierarchical' => true,
    'supports' => array('title', 'author', 'comments', 'editor','page-attributes','thumbnail', 'excerpt', 'post-formats'),
    'taxonomies' => array('category', 'post_tag')
  );

  register_post_type( 'guides', $args);
  add_post_type_support( 'guides', 'genesis-layouts' );
}

?>