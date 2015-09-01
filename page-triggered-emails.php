<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'triggered';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <h1>Trigger emails from a smart UI</h1>
    <h2>Write campaigns and create workflow logic to send the right email at the right time.</h2>
    <img id="hero-image" src="/wp-content/themes/vero/assets/images/triggered/hero.png">
  </div>
  </div>
</section>
<section id="workflows">
  <div class="inner">
  <div class="center-text">
    <h2>Build automated workflows without touching code</h2>
    <img class="half" src="/wp-content/themes/vero/assets/images/triggered/triggered-email-workflow.png">
    <div class='half'>
      <p>Vero allows you to setup workflows that trigger emails at exactly the right time based on what your contacts are clicking on, visiting and engaging with.</p>
      <p>Triggered emails have the most context and having the ability to target a contact after they take a key action on your website or in your application gives you the best chance to be heard and increase your email conversions.</p>
      <p>With traditional email marketing tools you have to build this logic yourself by writing code or getting lost in CSV uploads. Vero does the heavy lifting when it comes to email automation.</p>
    </div>
  </div>
  </div>
</section>
<section id="filters">
  <div class="inner">
  <div class="center-text">
    <h2>Target exact individuals with powerful filters</h2>
    <img src="/wp-content/themes/vero/assets/images/triggered/filters.png">
    <div class="text">
      <p>Vero allows you to setup workflows that trigger emails at exactly the right time based on what your contacts are clicking on, visiting and engaging with.</p>
      <p>Triggered emails have the most context and having the ability to target a contact after they take a key action on your website or in your application gives you the best chance to be heard and increase your email conversions.</p>
      <p>With traditional email marketing tools you have to build this logic yourself by writing code or getting lost in CSV uploads. Vero does the heavy lifting when it comes to email automation.</p>
    </div>
  </div>
  </div>
</section>
<section id="ab-test">
  <div id="ab-test-trigger"></div>
  <div class="inner">
  <div class="center-text">
    <h2>A/B test your triggered emails</h2>
    <p>In the past, triggered emails were locked in your code, sent via SMTP to a server somewhere on the interet.</p>
    <p>Vero empowers your team to move faster by allowing you to A/B test the triggered emails that you send – whether it's a receipt email, a new user onboarding sequence or a marketing newsletter.</p>
    <div id="a-and-b">
      <img id="var-line" src="/wp-content/themes/vero/assets/images/triggered/a-and-b.png">
      <img id="var-a" src="/wp-content/themes/vero/assets/images/triggered/a.png">
      <img id="var-b" src="/wp-content/themes/vero/assets/images/triggered/b.png">
    </div>
  </div>
  </div>
</section>
<section id="use-data">
  <div class="inner">
  <div class="center-text">
    <h2>Use data you track from your website in your emails</h2>
    <p>Vero is design to track all of your customers properties and actions, including specific details such as their age, which products they viewed, how much money they've spent or how many times they've logged in.</p>
    <p>Using Vero's merge tags and <em>External Data</em> features, you can insert any of the data you've captured. This means your triggered emails can include personal content <strong>for each individual</strong> thanks to our merge tags.</p>
    <p><a href="/external-attributes" class="btn btn-outline btn-primary">More on External Attributes &rarr;</a></p>
    <div id="use-data-trigger"></div>
    <div class="images">
      <img id="bikinis-web" src="/wp-content/themes/vero/assets/images/triggered/bikinis-web.png">
      <img id="bikinis-email" src="/wp-content/themes/vero/assets/images/triggered/bikinis-email.png">
    </div>
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/smart-newsletters" class="btn btn-warning">Continue tour</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>