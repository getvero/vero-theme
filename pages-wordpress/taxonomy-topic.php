<?php
/*
Template Name: Resource
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );

remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

add_action( 'genesis_before_content', 'taxonomy_title' );
add_action('genesis_entry_header', 'custom_post_title');

remove_action('genesis_entry_content', 'genesis_do_post_content');
add_action('genesis_entry_content', 'custom_post_content');

function taxonomy_title () {
  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
  echo "<h1>" . $term->name . "</h1>";
}

function custom_post_title () {
  echo "<h3><a href='" . get_permalink() . "'>" . get_the_title() . "</a></h3>";
}

function custom_post_content () {
  $content = strip_tags(get_the_content());
  echo substr($content, 0, 250);
}

remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_before_post_content', 'genesis_post_info' );

genesis(); ?>