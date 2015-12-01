<?php
/**
 * Template Name: Plain Text
 */

  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features feature-data';
    return $classes;  
  }
  include 'pages-shared/static-header.php';
?>

<section class="plain-text-body">
  <?php do_action( 'genesis_loop' ); ?>
</section>

<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>