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
    <h3 class="center-text">Track customers across multiple devices</h3>
    <div class='half text left-text'>
      <p>In order to build a complete user profile, mobile is a must. Vero tracks your contacts across devices, browsers and platforms to help you build robust profiles.</p>
    </div>
    <img class="half pull-right" src="/wp-content/themes/vero/assets/images/crm/tracking.png">
  </div>
  </div>
</section>
<section id="tags" class="gray">
  <div class="inner">
  <div class="center-text">
    <h3>Use Vero's tags for deeper segmentation and preference management</h3>
    <img src="/wp-content/themes/vero/assets/images/crm/tags.png">
    <div class="text">
      <p>
        Vero lets you automate just about everything but you can always take control using our tags. Use tags to label your best customers, hot leads or people who deserve a thank you note.
      </p>
      <p>
        You can even create dynamic segments based on tags, allowing you to segment groups at the deepest possible level.</p>
      </p>
    </div>
  </div>
  </div>
</section>
<section id="properties">
  <div class="inner">
  <div class="center-text">
    <h3>Unlimited storage of contact properties so your emails get smarter over time</h3>
    <img src="/wp-content/themes/vero/assets/images/crm/properties.png">
    <div class="text">
      <p>Add as many user properties, actions, tags and segments as you want. The more data you collect, the smarter your emails can be. And don't worry, Vero automates campaigns so you never have to worry about sending emails manually.</p>
    </div>
  </div>
  </div>
</section>
<section id="contact-actions" class="gray">
  <div class="inner">
  <div class="center-text">
    <h3>A detailed behavioral history</h3>
    <p>We keep track of behavior over time, making it easy to identify trends in usage and conversions. You'll get to know your contacts like never before.</p>
    <img src="/wp-content/themes/vero/assets/images/crm/event-log.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/external-attributes" class="btn btn-warning">Continue tour &rarr;</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static();
  wp_footer();
?>