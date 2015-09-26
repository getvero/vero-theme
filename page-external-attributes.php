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
    <h2>Email that is truly data-driven</h2>
      <p>Most email software keeps your data in a silo. Vero monitors behavior on your site to give you a more complete picture of your customers.</p>
      <p>Even more exciting, you can use that data to send incredibly personalized emails. Insert contact attributes and event attributes using our merge tags. This could be a contact's first name, the list of products in their cart (including images and links) or the number of times they've done something.</p>
      <p>Give your emails context with Vero's personalisation tools.</p>
    <img src="/wp-content/themes/vero/assets/images/external-attributes/dynamic-fields.png">
  </div>
  </div>
</section>
<section id="external-attributes">
  <div class="inner">
  <div class="center-text">
    <h2>Pull in even more data with our world-first External Attributes</h2>
    <div class='half'>
      <p>Our highly advanced, one-of-a-kind, <em>External Attributes</em> feature allows you to setup emails that call your own web server or API and return HTML or JSON that can be used, dynamically in the individual outgoing email.</p>
      <p>Use this tool to insert product recommendations, run advanced algorithms on your own dataset, or insert custom chart images.</p>
      <p>Bring the full power of your entire database into your email marketing, layering on top of our merge tags and dynamic data.</p>
      <p><a href="/email-marketing-demo" class="btn btn-outline btn-primary">Get a demo</a></p>
    </div>
    <img class="half" src="/wp-content/themes/vero/assets/images/external-attributes/external-attributes.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-warning">Start my trial</a>
    <a href="/features" class="btn btn-white btn-outline">Restart tour &rarr;</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>