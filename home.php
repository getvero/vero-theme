<?php
/*
Template Name: Post archive
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );

function category_featured_image () {
  $img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
  printf( '<a href="%s" title="%s">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $img );
}
add_action( 'genesis_before_entry_content', 'category_featured_image', 15);

remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');

function custom_excerpt() {
  $post = get_post();
  echo strip_tags(get_the_excerpt(), "<img>");
  echo '<p><br><a class="btn btn-success" href="'. get_permalink($post->ID) . '">' . 'Read More &rarr;' . '</a></p>';
}

genesis(); ?>