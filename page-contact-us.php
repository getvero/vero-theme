<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = '';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section>
  <div class="inner">
    <div class="grid grid-auto items-center">
      <div class="stack-sm order-2 md-order-1">
        <h1 class="semi-bold biggie">Contact us</h1>
        <p class="large">Get in touch by email &mdash; we'd love to hear from you.</p>
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
