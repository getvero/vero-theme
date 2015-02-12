<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'newsletters';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <h1>A new way to send your promotional email</h1>
    <h2>Use the power of behavior and Vero's segmentation engine to truly target the individual.</h2>
    <!---<img id="hero-image" src="/wp-content/themes/vero/assets/images/newsletters/hero.png">-->
  </div>
  </div>
</section>
<section id="use-behavior">
  <div class="inner">
  <div>
    <h3 class="center-text">Use the power of behavior to send newsletters that matter</h3>
    <div class='half text'>
      <p>Most email marketing software only knows about your contacts and their emails, not what they do on your website or in your application.</p>
      <p>Vero's behavioral tracking gives you another layer of data you can use to segment your contacts.</p>
      <p>Want to email customers that have purchased three times? Need to send out an email to customers that have never used a certain feature? Vero has you covered.</p>
    </div>
    <img class="half" src="/wp-content/themes/vero/assets/images/newsletters/triggers.png">
  </div>
  </div>
</section>
<section id="complex-sending">
  <div class="inner">
  <div class="center-text">
    <h3>Send emails at the right time, in your contacts' timezones</h3>
    <img src="/wp-content/themes/vero/assets/images/newsletters/timezones.png">
    <div class="text">
      <p>Vero allows you to setup workflows that trigger emails at exactly the right time based on what your contacts are clicking on, visiting and engaging with.</p>
    </div>
  </div>
  </div>
</section>
<section id="dynamic-segments">
  <div class="inner">
  <div class="center-text">
    <h3>Create dynamic lists in real time</h3>
    <img src="/wp-content/themes/vero/assets/images/newsletters/newsletter-segments.png">
    <div class="text">
      <p>Vero allows you to setup workflows that trigger emails at exactly the right time based on what your contacts are clicking on, visiting and engaging with.</p>
    </div>
  </div>
  </div>
</section>
<section id="conversions">
  <div class="inner">
  <div class="center-text">
    <h3>Track all the way to conversion on your website</h3>
    <p>Vero allows you to setup workflows that trigger emails at exactly the right time based on what your contacts are clicking on, visiting and engaging with.</p>
    <img src="/wp-content/themes/vero/assets/images/newsletters/conversions-clean.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/individual-contact-profiles" class="btn btn-warning">Continue tour &rarr;</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static();
  wp_footer();
?>