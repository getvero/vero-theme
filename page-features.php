<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <h1>What is Vero?</h1>
    <h2>The smartest way to automate emails based on what your customers do.</h2>
    <p>Learn how Vero empowers every step of the email marketing journey so you can send the most personalised content to each of your customers.</p>
  </div>
  </div>
</section>
<section id="descriptions" >
  <section id="backgrounds">
    <div id="segments-bg"></div>
    <div id="email-bg"></div>
  </section>
  <div class="inner">
    <div class="description" id="inputs-description">
      <h3>Use more data than ever before.</h3>
      <p>Unlike traditional, list-based, email marketing platforms, Vero tracks what your customers do. Track what happens on your website, in your app, via plugins such as Zapier and Segment and use this powerful real-time data to send more targeted campaigns.</p>
      <p><a href="/smart-newsletters" class="btn btn-mini btn-primary btn-outline">Read more &rarr;</a></p> 
    </div>
    <div class="description" id="segments-description">
      <h3>Segment without writing code.</h3>
      <p>Using Vero you can build all of your campaign logic using our great UI. No more writing code, massaging Excel spreadsheets or running SQL queries to find the right customers to email – Vero does all this for you, enabling you to work smarter and faster.</p>
      <p><a href="/individual-contact-profiles" class="btn btn-mini btn-primary btn-outline">Read more &rarr;</a></p>  
    </div>
    <div class="description" id="timing-description">
      <h3>Trigger automated messages or send a newsletter today.</h3>
      <p>Setup automated emails, drip campaigns, and workflows to send individual contacts the right message at exactly the right time. Vero works while you sleep, so the right customers always get the right message.</p>
      <p><a href="/triggered-emails" class="btn btn-mini btn-primary btn-outline">Read more &rarr;</a></p> 
    </div>
    <div class="description" id="dynamic-description">
      <h3>Use your data with dynamic fields.</h3>
      <p>Insert the dynamic data you send Vero into your templates and outgoing emails. This could be as simple as a contact's first name or as complex as a product they looked at on your website. Vero's templating language gives you the power to ensure your emails are truly personalised.</p>
      <p>Processing billions of rows of data, Vero is designed to handle your data.</p> 
    </div>
    <div class="description" id="external-description">
      <h3>Insert even more dynamic code from your own APIs.</h3>
      <p>Send better emails with better data. Vero can pull data from your website or APIs and make your emails super dynamic. Include charts, related products or up-to-the-minute statistics in any of your outgoing emails with our <em>External Attributes</em> feature.</p>
      <p><a href="/external-attributes" class="btn btn-mini btn-primary btn-outline">Read more &rarr;</a></p> 
    </div>
    <div class="description" id="template-description">
      <h3>Manage all of your templates in one central place.</h3>
      <p>Edit both transactional and newsletter emails in one UI. Upload custom HTML templates that support fully responsive design and use these across all of your campaigns for a consistent look and feel whenever you email your customers.</p>
    </div>
  </div>
</section>
<section id="story-container">
  <div id="story">
    <div id="rain">
      <img id="rain-left" src="/wp-content/themes/vero/assets/images/features/machine/rain-left.png">
      <img id="rain-right" src="/wp-content/themes/vero/assets/images/features/machine/rain-right.png">
    </div>
    <div id="inputs">
      <img id="browser" src="/wp-content/themes/vero/assets/images/features/machine/browser.png">
      <div id="inputs-trigger"></div>
      <img id="zapier" src="/wp-content/themes/vero/assets/images/features/machine/zapier.png">
      <img id="csv" src="/wp-content/themes/vero/assets/images/features/machine/csv.png">
      <img id="iphone" src="/wp-content/themes/vero/assets/images/features/machine/iphone.png">
    </div>
    <div id="segments-trigger"></div>
    <img id="line-1" src="/wp-content/themes/vero/assets/images/features/machine/line-1.png">
    <div id="segments">
      <img id="base" src="/wp-content/themes/vero/assets/images/features/machine/segment-base.png">
      <img id="red" src="/wp-content/themes/vero/assets/images/features/machine/segment-red.png">
      <img id="purple" src="/wp-content/themes/vero/assets/images/features/machine/segment-purple.png">
      <img id="green" src="/wp-content/themes/vero/assets/images/features/machine/segment-green.png">
    </div>
    <div id="clock-trigger"></div>
    <img id="line-2" src="/wp-content/themes/vero/assets/images/features/machine/line-2.png">
    <div id="timing">
      <img id="clock-area" src="/wp-content/themes/vero/assets/images/features/machine/timing.png">
      <img id="clock" src="/wp-content/themes/vero/assets/images/features/machine/clock.png">
    </div>
    <div id="emails-trigger"></div>
    <img id="line-3" src="/wp-content/themes/vero/assets/images/features/machine/line-3.png">
    <div id="email">
      <img id="gmail" src="/wp-content/themes/vero/assets/images/features/machine/gmail.png">
      <img id="body" src="/wp-content/themes/vero/assets/images/features/machine/body.png">
      <img id="dynamic" src="/wp-content/themes/vero/assets/images/features/machine/dynamic.png">
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/triggered-emails" class="btn btn-warning">Continue tour</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static_wrap();
  wp_footer();
  add_page_tracking_code("ProductPage");
?>