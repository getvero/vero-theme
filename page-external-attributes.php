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
    <h1>Use your own data to personalize emails</h1>
    <h2>Query your own data or API's to customize emails as they are sent.</h2>
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
    <h3>Email that is truly data-driven</h3>
      <p>Most email software keeps your data in a silo. Vero monitors behavior on your site to give you a more complete picture of your customers. Even more exciting, you can use that data to send incredibly personalized emails.</p>
    <img src="/wp-content/themes/vero/assets/images/external-attributes/dynamic-fields.png">
  </div>
  </div>
</section>
<section id="external-attributes">
  <div class="inner">
  <div class="center-text">
    <h3>Pull in even more data with our world-first External Attributes</h3>
    <div class='half'>
      <p>
        Instead of sending the same email to everyone, imagine sending a unique email to every customer.
      </p>
      <p>
        For example, use External Attributes to provide product recommendations based on purchase history or send retention emails based on inactivity. If you can track the behavior, we can trigger the email.
      </p>
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