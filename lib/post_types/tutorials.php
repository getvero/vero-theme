<?php

function create_tutorials_post_type() {
  $labels = array(
    'name' => __( 'Tutorials' ),
    'singular_name' => __( 'Tutorial' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'tutorials','with_front' => false),
    'hierarchical' => true,
    'supports' => array('title', 'author', 'comments', 'editor', 'thumbnail', 'excerpt', 'post-formats'),
    'taxonomies' => array('category', 'post_tag')
  );

  register_post_type( 'tutorials', $args);
  add_post_type_support( 'tutorials', 'genesis-layouts' );
}

?>