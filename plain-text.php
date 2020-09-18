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
  <div class="inner small-inner">
    <h1 class="biggie semi-bold bottom-margin-sm"><?php single_post_title(); ?></h1>

    <?php the_content(); ?>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>