<?php

function create_jobs_post_type() {
  if (genesis_get_option('jobs') == true) {
     $labels = array(
      'name' => __( 'Jobs' ),
      'singular_name' => __( 'Job' )
      );

      $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'with_front' => false,
      'rewrite' => array('slug' => 'jobs', 'with_front' => false),
      'supports' => array( 'title', 'editor', 'thumbnail' )
      );

    register_post_type( 'jobs', $args);
    add_post_type_support( 'jobs', 'genesis-layouts' );
  }
}

?>