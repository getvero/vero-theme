<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'glossary';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="getting-started-hero">
  <div class="inner xlarge-inner flush-bottom">
    <h1 class="hulk bottom-margin-sm">Glossary</h1>
    <p class="large bottom-margin-lg">Learn how to master personalized messaging from the Vero Team.</p>
  </div>
</section>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Scale personalized customer messaging</h4>

    <a class="btn btn-success btn-large bottom-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>