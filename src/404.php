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
    <img class="horizontal-margin-auto bottom-margin-lg" src="/wp-content/themes/vero/assets/images/home/404/404.png" width="340">
    <h1 class="semi-bold biggie bottom-margin-xs">Uh oh, you got stung!</h1>
    <p class="medium">If you're looking for email marketing that doesn't hurt…check out the <a href="https://www.getvero.com/?from=404-pages">homepage</a>.</p>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>