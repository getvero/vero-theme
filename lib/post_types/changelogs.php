<?php

function create_changelogs_post_type() {
  $labels = array(
    'name' => __( 'Changelogs' ),
    'singular_name' => __( 'Changelog' )
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'with_front' => false,
    'rewrite' => array('slug' => 'changelog', 'with_front' => false),
    'supports' => array( 'title', 'editor', 'thumbnail' )
    );

  register_post_type( 'changelogs', $args);
  add_post_type_support( 'changelogs', 'genesis-layouts' );
}

?>