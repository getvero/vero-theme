<?php
/*
Template Name: Blog Resources Home
*/

//Execute custom resources page
remove_action( 'genesis_loop', 'genesis_do_loop' );
remove_action('genesis_before_post_content','genesis_post_info');
remove_action('genesis_after_post_content','genesis_post_meta');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action('genesis_entry_content', 'custom_entry_content');
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//Add body class
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'full-width resource resources-home';
   return $classes;
}

//Add featured sections at the top
add_action( 'genesis_before_content', 'blog_resources_do_featured' );
function blog_resources_do_featured() {
    genesis_widget_area( 'resources-featured-full', array(
      'before' => '<main class="resources-featured-full">',
      'after' => '</main>',
    ) );
}

//Add guides
add_action('genesis_loop', 'custom_do_guides_loop');
function custom_do_guides_loop() {
  echo '<section id="guides"><div class="wrap"><h3 class="h4 center-text">Online Email Marketing Guides</h3>';

  global $query_args; // any wp_query() args
  $args= array('post_type' => 'guides', 'post_parent' => '0', 'posts_per_page' => 2, 'show_posts' => 2, 'order' => 'ASC', 'orderby' => 'date');
  genesis_custom_loop(wp_parse_args($query_args, $args));

  echo '</div></section>';
}

//Add resources 
add_action('genesis_loop', 'custom_do_resources_loop');
function custom_do_resources_loop() {
  echo '<section id="resources"><div class="wrap"><h3 class="h4 center-text">Free Email Marketing eBooks</h3>';

  global $query_args; // any wp_query() args
  $args= array('post_type' => 'resources', 'posts_per_page' => 3, 'show_posts' => 3);
  genesis_custom_loop(wp_parse_args($query_args, $args));

  echo '</div></section>';
}

//Define loops content
function custom_entry_content () {
  $post_type = get_post_type();
  if( $post_type == 'guides' ) { 
    $post = get_post();
    $cover_image = get_post_meta($post->ID, 'cover_image', true); 
    $cover_image = wp_get_attachment_url( $cover_image ); ?>
    <a style="background:url(<?php echo $cover_image; ?>)" href="<?php echo get_the_permalink() ?>">
      <div class="bg"><h4 class="entry-title" itemprop="headline"><?php echo get_the_title() ?></h4></div>
    </a>
  <?php } else { ?>
    <a href="<?php echo get_the_permalink() ?>">
      <?php echo genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ) ) ); ?>
      <h4 class="entry-title" itemprop="headline"><?php echo get_the_title() ?></h4>
    </a>
  <?php }
}

genesis(); ?>