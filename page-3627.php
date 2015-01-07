<?php
/*
Template Name: Blog Resources Home
*/

//Execute custom resources page
remove_action( 'genesis_loop', 'genesis_do_loop' );
remove_action('genesis_after_header', 'genesis_do_nav');
add_action( 'genesis_after_header', 'add_blog_navbar_logic_resources_home' ); 
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );
add_action( 'genesis_before_entry_content', 'do_post_type' );
add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
add_action('genesis_after_header', 'add_big_cta_resources');

//Add body class
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'blog resources-home';
   return $classes;
}

//Add all
add_action('genesis_loop', 'custom_do_loop');
function custom_do_loop() {
  global $query_args; // any wp_query() args
  $args= array('post_type' => array('guides', 'resources'), 'post_parent' => '0', 'posts_per_page' => 10, 'show_posts' => 2, 'offset' => 1);
  genesis_custom_loop(wp_parse_args($query_args, $args));
}

//Add blue navbar
function add_blog_navbar_logic_resources_home() {
  echo '<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"><div class="wrap">';
  wp_nav_menu( array(
    'theme_location' => 'blog-secondary-nav-menu',
    'container_class' => 'menu-primary'
  ) );
  echo '</div></nav>';
}

//Add feature
function add_big_cta_resources() {
  echo "<div class='big-cta-area'>";
  
  $featured_query_args= array('post_type' => array('guides'), 'post_parent' => '0', 'posts_per_page' => 1, 'show_posts' => 1);
  $items = get_posts( $featured_query_args );
  
  foreach( $items as $post ) {
    $img = get_post_meta($post->ID, 'cover_image', true);
    $img = wp_get_attachment_image_src($img, 'large')[0];
  ?>
    <div class='big-bg' style="background:url('<?php echo $img; ?>')">
    <div class="shade">
    <div class="wrap">
      <div class="post-type-line-top"></div>
      <?php echo do_post_type('white',false,true,'guide'); ?>
      <h1><a href="<?php echo get_the_permalink($post) ?>"><?php echo get_the_title($post) ?></a></h1>
      <p><?php echo get_custom_excerpt(200); ?></p>
      <p>
        <a class="more-link btn btn-success" href="<?php echo get_the_permalink($post); ?>">Read more &rarr;</a>
      </p>
      </div>
    </div>
    </div>
  <?php
  }
  echo "</div>";
}

genesis(); ?>