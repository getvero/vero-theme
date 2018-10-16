<?php

include_once( 'lib/configuration/footers.php' );
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
  echo get_field('custom_sidebar'); //display it
}

// Add sticky class if true
if(get_field('sticky')){
  add_filter( 'genesis_attr_sidebar-primary', 'sidebar_primary_add_css_attr' );
  add_filter( 'genesis_attr_content-sidebar-wrap', 'content_sidebar_wrap_css_attr' );
  add_filter( 'genesis_attr_content', 'content_add_css_attr' );

  function content_add_css_attr( $attributes ) {
    // add original plus extra CSS classes
    $attributes['class'] .= ' content-liquid';

    // return the attributes
    return $attributes;
  }

  function sidebar_primary_add_css_attr( $attributes ) {
    // add original plus extra CSS classes
    $attributes['class'] .= ' sidebar-sticky sidebar-gradient';

    // return the attributes
    return $attributes;
  }

  function content_sidebar_wrap_css_attr( $attributes ) {
    // add original plus extra CSS classes
    $attributes['class'] .= ' relative';

    // return the attributes
    return $attributes;
  }
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

if(get_field('social')){
  add_action( 'genesis_entry_header', 'social' );
}
if(get_field('footer_cta')){
  add_action( 'genesis_before_footer', 'blog_cta' );
}

function social() {
  $share_obj = new Naked_Social_Share_Buttons();
  ?>
  <div class='shares-block'>
    <?php echo naked_social_share_buttons(); ?>
  </div>
  <?php
}

genesis(); ?>