<?php
/*
Template Name: Plain Sidebar Hero 
*/

//* Force sidebar-content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );

add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
  if(get_field('custom_sidebar')){
    $classes[] = 'left-menu plain-template';
  } else {
    $classes[] = 'plain-template';
  }
  return $classes;
}
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

if(get_field('custom_sidebar')){
  add_action( 'genesis_sidebar', 'generate_sidebar' );
}
function generate_sidebar() {
  echo '<p>' . get_field('custom_sidebar') . '</p>'; //display it
}

add_action( 'genesis_after_header', 'hero', 10, 2  );
function hero() {
  $color = get_field('header_color');
  if(empty($color)) {
    $color = '#ffffff'; // default to white
  }
  $image = get_field('image_header');
  if( !empty($image) ) {
    echo '<div class="hero" style="backgorund-color:'. $color . '; background-image: url(' . $image['url'] . ');"></div>';
  }
}

genesis(); ?>