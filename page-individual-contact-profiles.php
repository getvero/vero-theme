<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'crm';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <h1>Treat every contact as a human, not just an email</h1>
    <h2>Don't store static <em>lists</em> – build dynamic, individual profiles for all of your contacts.</h2>
    <img id="hero-image" src="/wp-content/themes/vero/assets/images/newsletters/hero.png">
  </div>
  </div>
</section>
<section id="devices">
  <div class="inner">
  <div>
    <h2 class="center-text">Track customers across multiple devices</h2>
    <div class='half text left-text'>
      <p>In order to build a complete user profile, mobile is a must.</p>
      <p>Vero tracks your contacts across devices, browsers and platforms to help you build robust profiles.</p>
      <p>Add users to your Vero database using just their email or identifying them with a custom <em>ID</em>, allowing you to update their attributes and data anytime from any platform: via our API, CSV or our plugins with Zapier, Segment and others.</p>
    </div>
    <img class="half pull-right" src="/wp-content/themes/vero/assets/images/crm/tracking.png">
  </div>
  </div>
</section>
<section id="contact-actions" class="gray">
  <div class="inner">
  <div class="center-text">
    <h2>A detailed behavioral history</h2>
    <p>We keep track of your contacts' actions over time, making it easier to improve your emails based on usage and conversions. The longer you use Vero and the more emails you send, the more targeted each individual contact profile becomes.</p>
    <p>You'll get to know your contacts like never before and create email campaigns they'll actually want to receive.</p>
    <img src="/wp-content/themes/vero/assets/images/crm/event-log.png">
  </div>
  </div>
</section>
<section id="properties">
  <div class="inner">
  <div class="center-text">
    <h2>Unlimited storage of contact properties so your emails get smarter over time</h2>
    <img src="/wp-content/themes/vero/assets/images/crm/properties.png">
    <div class="text">
      <p>Add and store as many user attributes, actions, tags and segments as you want.</p>
      <p>The more data you collect, the smarter your emails can be. We don't charge for data storage or API calls at Vero: we want you to have as much data as possible at your fingertips in order to make the best marketing decisions possible.</p>
    </div>
  </div>
  </div>
</section>
<section id="tags" class="gray">
  <div class="inner">
  <div class="center-text">
    <h2>Use Vero's tags for preference management or deeper segmentation</h2>
    <div class="text">
      <p>
        Every contact in your database can have as many tags as you specify. Create custom preference management toolsets, allowing your users to express in a particular category or frequency and tag them in order to exclude or include them in specific email campaigns.</p>
      </p>
      <p>
        You can even add tags via the Vero UI, so you can change an individual contact's journey through your automated campaigns.</p>
      </p>
    </div>
    <img src="/wp-content/themes/vero/assets/images/crm/tags.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/external-attributes" class="btn btn-warning">Continue tour</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>