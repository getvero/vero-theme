<?php
/*
Template Name: Plain Sidebar + Hero 
*/

//* Force sidebar-content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );

add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'left-menu plain-sidebar-hero';
   return $classes;
}

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

add_action( 'genesis_sidebar', 'generate_sidebar' );
function generate_sidebar() {
  if(get_field('custom_sidebar')){ //if the field is not empty
    echo '<p>' . get_field('custom_sidebar') . '</p>'; //display it
  }
}

add_action( 'genesis_after_header', 'hero', 10, 2  );
function hero() {
  $color = get_field('header_color');
  $image = get_field('image_header');
  if( !empty($color) ) {
    echo '<div class="plain-sidebar-hero" style="background-color:' . get_field('header_color') . ';"><div class="site-inner">';
  } else {
    echo '<div class="plain-sidebar-hero"><div class="site-inner">';
  }
  if( !empty($image) ) {
    echo '<img src="' . $image['url'] . '" width="100%"/>';
  }
  echo '</div></div>';
}

genesis(); ?>