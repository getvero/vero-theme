<?php
/*
Template Name: Post category
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );

function category_featured_image () {
  $img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
  printf( '<a href="%s" title="%s">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $img );
}
add_action( 'genesis_before_entry_content', 'category_featured_image', 15);

genesis(); ?>