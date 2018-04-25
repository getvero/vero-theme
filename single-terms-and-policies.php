<?php
/*
Template Name: Terms and Policies
*/

//* Force sidebar-content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );

add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'terms-and-policies';
   return $classes;
}

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

add_action( 'genesis_sidebar', 'generate_terms_menu' );
function generate_terms_menu() {
  wp_nav_menu(array(
    'menu' => 56
  ));
}

add_action( 'genesis_before_content', 'generate_resource_header', 5 );
function generate_resource_header() {
  global $post;
  ?>
  <header class="entry-header">
    <h1>Terms and Policies</h1>
  </header>
  <?php
}

genesis(); ?>