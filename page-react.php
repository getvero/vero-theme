<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'react';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="hero">
  <div class="inner large-inner flush-bottom center-text">
    <h1 class="biggie semi-bold bottom-margin-large">Send alerts and relevant data to your team so they can offer better help, faster</h1>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
