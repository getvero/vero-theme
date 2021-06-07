<?php

function create_release_notes_post_type() {
  $labels = array(
    'name' => __( 'Release Notes' ),
    'singular_name' => __( 'Release Note' )
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'with_front' => false,
    'rewrite' => array('slug' => 'release-notes', 'with_front' => false),
    'supports' => array( 'title', 'editor', 'thumbnail' )
    );

  register_post_type( 'release-notes', $args);
  add_post_type_support( 'release-notes', 'genesis-layouts' );
}

?>