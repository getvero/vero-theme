<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'external-attributes';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <h1>Use your own APIs and data for true personalization</h1>
    <h2>Make queries of your own data or APIs to customise individual outgoing emails for truly dynamic sends.</h2>
    <div id="hero-images">
      <div class="inside">
      <img id="bikinis-web" src="/wp-content/themes/vero/assets/images/triggered/bikinis-web.png">
      <img id="bikinis-email" src="/wp-content/themes/vero/assets/images/triggered/bikinis-email.png">
      </div>
    </div>
  </div>
  </div>
</section>
<section id="merge-tags" class="gray">
  <div class="inner">
  <div class="center-text">
    <h3>Use all of the data you send Vero in your outgoing emails</h3>
      <p>Most email marketing software only knows about your contacts and their emails, not what they do on your website or in your application.</p>
    <img src="/wp-content/themes/vero/assets/images/external-attributes/dynamic-fields.png">
  </div>
  </div>
</section>
<section id="external-attributes">
  <div class="inner">
  <div class="center-text">
    <h3>Pull in even more data with our world-first External Attributes</h3>
    <div class='half'>
      <p>Most email marketing software only knows about your contacts and their emails, not what they do on your website or in your application.</p>
      <p>Vero's behavioral tracking gives you another layer of data you can use to segment your contacts.</p>
      <p>Want to email customers that have purchased three times? Need to send out an email to customers that have never used a certain feature? Vero has you covered.</p>
    </div>
    <img class="half" src="/wp-content/themes/vero/assets/images/external-attributes/external-attributes.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/features" class="btn btn-warning">Restart tour &rarr;</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static();
  wp_footer();
?>