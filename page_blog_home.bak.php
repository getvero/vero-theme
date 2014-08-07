<?php
/*
Template Name: Blog Home
*/

//Execute custom home page
remove_action( 'genesis_loop', 'genesis_do_loop' );

//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'full-width blog-home';
   return $classes;
}

//Add featured sections at the top
add_action( 'genesis_before_content', 'blog_home_do_featured' );
function blog_home_do_featured() {
    echo '<section id="home-featured" class="clearfix"><div class="wrap">';
 
    genesis_widget_area( 'home-featured-full', array(
      'before' => '<main class="home-featured-full">',
      'after' => '</main>',
    ) );

    echo '<section id="home-featured-halves">';
 
    genesis_widget_area( 'home-featured-left', array(
      'before' => '<aside class="home-featured-left one-half first">',
      'after' => '</aside>',
    ) );

    genesis_widget_area( 'home-featured-right', array(
      'before' => '<aside class="home-featured-right one-half">',
      'after' => '</aside>',
    ) );
 
    echo '</section><!-- end home-featured-halves --></div><!-- end wrap --></section><!-- end home-featured -->';
}

//Add new posts to the top 
add_action('genesis_loop', 'custom_do_starred_loop');
function custom_do_starred_loop() {
  echo '<section id="new-posts"><div class="wrap"><h1 class="center-text">New Posts</h1>';

  global $query_args; // any wp_query() args
  $args= array('category_name' => 'featured', 'posts_per_page' => 3);
  genesis_custom_loop(wp_parse_args($query_args, $args));

  echo '</div></section>';
}

//Add editors pick below
add_action('genesis_loop', 'custom_do_editors_pick_loop');
function custom_do_editors_pick_loop() {
  echo '<section id="editors-picks"><div class="wrap"><h1 class="center-text">Editor\'s Picks</h1>';

  genesis_widget_area( 'editors-pick-featured', array(
      'before' => '<aside class="editors-pick-featured">',
      'after' => '</aside>',
    ) );

  global $query_args; // any wp_query() args
  $args= array('category_name' => 'editors_pick');
  genesis_custom_loop(wp_parse_args($query_args, $args));

  echo '</div></section>';
}

add_action('genesis_loop', 'add_page_content');
function add_page_content() {
  the_content();
}

//Add images to posts and remove the info
add_action( 'genesis_before_post_title', 'add_image_before_post', 0 );
function add_image_before_post() {
  echo "<h1>hi</h1>";
  if ( has_post_thumbnail() ) {
    $img = genesis_get_image( array( 'format' => 'url') );
    printf( '<a href="%s" title="%s"><img src="%s/path/to/timthumb.php?src=%s&w=225&h=160" class="featured-image" /></a>', get_permalink(), the_title_attribute( 'echo=0' ),get_stylesheet_directory_uri(),$img );
  }
}

remove_action('genesis_before_post_content','genesis_post_info');
remove_action('genesis_after_post_content','genesis_post_meta');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

genesis(); ?>