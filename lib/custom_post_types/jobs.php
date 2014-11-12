<?php

//
// Add and customize Jobs
//----------------------
function create_jobs_post_type () {
  if (genesis_get_option('jobs') == true) {
     $labels = array(
      'name' => __( 'Jobs' ),
      'singular_name' => __( 'Job' )
      );

      $args = array(
      'labels' => $labels,
      'public' => true,
      //'menu_icon' => '/wp-content/themes/vero/assets/images/icons/resources.png',
      'has_archive' => true,
      'rewrite' => array('slug' => 'jobs'),
      'supports' => array( 'title', 'editor', 'thumbnail' )
      );

    register_post_type( 'jobs', $args);
    add_post_type_support( 'jobs', 'genesis-layouts' );
  }
}

?>