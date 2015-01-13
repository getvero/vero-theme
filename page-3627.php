<?php
/*
Template Name: Blog Resources Home
*/

//Execute custom resources page
remove_action( 'genesis_loop', 'genesis_do_loop' );
remove_action('genesis_after_header', 'genesis_do_nav');
add_action( 'genesis_after_header', 'add_blog_navbar_logic_resources_home' ); 
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );

add_action('genesis_after_header', 'add_big_cta_resources');

add_action( 'genesis_before_entry_content', 'do_post_type' );
add_action( 'genesis_before_entry_content', 'my_title' );
add_action( 'genesis_before_entry_content', 'add_featured_image', 15);
add_filter('the_content', 'my_excerpts');

//Title
function my_title() {
  global $post;
  ?>
  <h1 class="entry-title"><a href="<?php echo get_the_permalink($post) ?>"><?php echo get_the_title($post) ?></a></h1>
  <?php
}

//Length
function my_excerpts() {
  global $post;
  $content = $post->post_excerpt;

  // If an excerpt is set in the Optional Excerpt box
  if($content) :
    $content = apply_filters('the_excerpt', $content);

  // If no excerpt is set
  else :
    $content = $post->post_content;
    $excerpt_length = 55;
    $content = str_replace(']]>', ']]>', $content);
    $content = strip_tags($content,'<p>');
    $words = explode(' ', $content, $excerpt_length + 1);
    if(count($words) > $excerpt_length) :
      array_pop($words);
      array_push($words, '[...]');
      $content = implode(' ', $words);
    endif;
    $content = '<p>' . $content . '</p>';

  endif;

  $content = $content. '<p><a class="more-link btn btn-success" href="' . get_permalink() . '">Read more &rarr;</a></p>';

  // Make sure to return the content
  return $content;

}

//Image
function add_featured_image() {
  $img = genesis_get_image( array( 'format' => 'html', 'size' => genesis_get_option( 'image_size' ), 'attr' => array( 'class' => 'post-image' ) ) );
  printf( '<a class="post-image-link" href="%s" title="%s">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $img );
}

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
  
  foreach( $items as $item ) {
    $img = get_post_meta($item->ID, 'cover_image', true);
    $img = wp_get_attachment_image_src($img, 'large');
    if(empty($img)){ $img = $img[0]; }
  ?>
    <div class='big-bg' style="background: #00c3e4 url('<?php echo $img; ?>') no-repeat center center fixed;">
    <?php if(!empty($img)){ ?><div class="shade"><?php } ?>
    <div class="wrap">
      <div class="post-type-line-top"></div>
      <?php echo do_post_type('white',false,true,'guide'); ?>
      <h1><a href="<?php echo get_the_permalink($item); ?>"><?php echo get_the_title($item) ?></a></h1>
      <div><?php echo get_custom_excerpt_with_text(100,$item->post_content); ?></div>
      <p>
        <a class="more-link btn btn-success" href="<?php echo get_the_permalink($item); ?>">Read more &rarr;</a>
      </p>
      </div>
    <?php if(!empty($img)){ ?></div><?php } ?>
    </div>
  <?php
  }
  echo "</div>";
}

genesis(); ?>