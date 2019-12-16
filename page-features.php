<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="border-bottom-light">
  <div class="inner xlarge-inner">
    <h1 class="hulk semi-bold bottom-margin-xs">How it works</h1>
    <p class="large">The messaging platform that scales personalisation.</p>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Automation scales when you can't</h2>
    <p class="medium">Your customers never sleep&mdash;they're 24/7, 365, global. Use automation to extend your team and help more customers, more often.</p>
  </div>
  <div class="inner">
    <h3 class="tubs">Workflows</h3>

    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3>Workflows</h3>
        <p class="medium">Automatically trigger workflows based on customer activity, automate decisions and trigger messages across multiple channels, all with our beautiful drag-and-drop UI.</p>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main lg-order-2">
        <h3 class="tubs semi-bold">Recurring newsletter</h3>
        <p class="medium">Whether it's a weekly summary, a daily news feed or the latest products, use recurring newsletters in conjunction with dynamic segmentation for powerful results.</p>
      </div>
      <div class="col-aside lg-order-1">
        <p class="medium">Image</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>