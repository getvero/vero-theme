<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top" class="center-text">
  <div class="inner">
    <h1>Things you never knew you could do with email, <br> you can do with Vero.</h1>
    <ul class="list-unstyled list-inline">
      <li>
        <p>Automate emails when a user takes an action</p>
        <div class="box"></div>
      </li>
      <li>
        <p>Track and insert meta-data with on-site events</p>
        <div class="box"></div>
      </li>
      <li>
        <p>Send transactional emails without coding</p>
        <div class="box"></div>
      </li>
      <li>
        <p>Track clicks and conversions on your site</p>
        <div class="box"></div>
      </li>
      <li>
        <div class="box"></div>
        <p>A/B test triggered email campaigns </p>
      </li>
      <li>
        <div class="box"></div>
        <p>Pull data into emails from your web server</p>
      </li>
      <li>
        <div class="box"></div>
        <p>Send transactional emails without coding</p>
      </li>
      <li>
        <div class="box"></div>
        <p>Send transactional emails without coding</p>
      </li>
  </div>
</section>
<section id="usual-stuff">
  <div class="inner">
    <h2 class="center-text">...plus, you can do all the usual stuff too.</h2>
    <ul class="list-unstyled list-inline">
      <li>Send direct newsletters</li>
      <li>Invite team members</li>
      <li>Import users via CSV</li>
      <li>Export reporting data</li>
      <li>Google UTM integration</li>
      <li>Send emails from your own domain</li>
      <li>See open, click, unsubscribe, bounce and other statistics</li>
      <li>Import your own HTML templates and edit via WYSIWYG editor</li>
    </ul>
  </div>
</section>
<section id="awesome-support">
  <div class="inner">
    <h2 class="center-text">Our support heroes are real marketers and engineers</h2>
    <ul class="list-unstyled list-inline">
      <li><img src="/wp-content/themes/vero/assets/images/features/chris.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/chris.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/chris.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/chris.png"></li>
      <li><img src="/wp-content/themes/vero/assets/images/features/chris.png"></li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <a href="/pricing" class="btn btn-large btn-warning">Learn more</a>
    <h5>Start your 14-day free trial and use all of these features.</h5>
  </div>
</section>
<?php 
  no_content_genesis_footer();
 ?>