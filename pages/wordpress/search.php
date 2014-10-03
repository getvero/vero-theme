<?php
/*
Template Name: Search archive
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );

remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');

function custom_excerpt() {
  $post = get_post();
  echo strip_tags(get_the_excerpt(), "<img>");
  echo '<p><br><a class="btn btn-success" href="'. get_permalink($post->ID) . '">' . 'Read More &rarr;' . '</a></p>';
}

genesis(); ?>