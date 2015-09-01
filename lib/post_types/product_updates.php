<?php

//
// Add and customize Product updates
//----------------------
function create_product_updates_post_type () {
  if (genesis_get_option('product_updates') == true) {
     $labels = array(
      'name' => __( 'Product updates' ),
      'singular_name' => __( 'Product update' )
      );

      $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'with_front' => false,
      'rewrite' => array('slug' => 'product-updates'),
      'supports' => array( 'title', 'editor', 'thumbnail' )
      );

    register_post_type( 'product_updates', $args);
    add_post_type_support( 'product_updates', 'genesis-layouts' );
  }
}

?>