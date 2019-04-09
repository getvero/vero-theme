<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = '404 page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="double-padding">
  <div class="inner center-text">
    <img class="bottom-margin-medium" src="/wp-content/themes/vero/assets/dist/images/home/404/404.png" width="340">
    <h1 class="semi-bold biggie bottom-margin-tiny">Uh oh, you got stung!</h1>
    <p class="medium">If you're looking for email marketing that doesn't hurt…check out the <a href="https://www.getvero.com">homepage</a>.</p>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>