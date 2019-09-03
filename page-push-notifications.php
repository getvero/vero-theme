<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'push-notifications';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section>
  <div class="inner large-inner flex flex-column md-flex-row bottom-padding-medium">
    <h1 class="hulk">Mobile Push Notifications</h1>
  </div>
</section>
<section class="cta border-dark-blue bg-white center-text">
  <div class="cta-wrap">
    <h4 class="regular bottom-margin-smedium">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>