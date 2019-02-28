<?php
/**
 * Template Name: Plain Text
 */

  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = '';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>

<section class="double-padding plain-text-body">
  <div class="inner">
    <!-- <?php do_action( 'genesis_loop' ); ?> -->

    <h1 class="biggie regular"><?php single_post_title(); ?></h1>

    <?php the_content(); ?>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>