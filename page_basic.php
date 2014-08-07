<?php
/*
Template Name: Basic Page
*/

//Force full width layout
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'basic';
   return $classes;
}

add_action( 'genesis_before_content', 'generate_header', 9 );
function generate_header() {
  ?>
  <section id="top" class="center-text">
    <div class="inner">
      <h1><?php echo get_the_title() ?></h1>
    </div>
  </section>
  <?php
}

genesis(); ?>