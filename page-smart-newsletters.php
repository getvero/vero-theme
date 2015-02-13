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
    <h2>Use the power of behavior to send segmented, relevant and timely emails.</h2>
    <img id="hero-image" src="/wp-content/themes/vero/assets/images/newsletters/hero.png">
  </div>
  </div>
</section>
<section id="use-behavior">
  <div class="inner">
  <div>
    <h3 class="center-text">Send one-to-one newsletters that matter</h3>
    <div class='half text'>
      <p>
        Instead of sending the same email to your entire list, Vero's behavioral tracking and dynamic segmentation make it easy to send personalized newsletters and promotional emails.
      </p>
      <p>
        You can even automate emails based on purchases or activity in your app. For example, automate a reminder to buy more dog food based on the purchase data and size of the previous order. Or trigger a retention email to users who haven't paid this month but haven't logged in for 14 days.
      </p>
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
      <p>
        Not all of your contacts live on different time zones, making it hard to send email everyone at 7am on Tuesday.
      </p>
      <p>
        Vero's newsletters solve this problem by automatically tracking the location of each individual contact and allowing you to send emails based on each individual recipients' time zone.
      </p>
      <p>
        Increase your conversions by targeting people at the right time in their lives.
      </p>
    </div>
  </div>
  </div>
</section>
<section id="dynamic-segments">
  <div class="inner">
  <div class="center-text">
    <h3>Real-time segmentation to target your contacts</h3>
    <img src="/wp-content/themes/vero/assets/images/newsletters/newsletter-segments.png">
    <div class="text">
      <p>Instead of downloading lists, adjusting them in Excel and uploading them every time you want to create a new list, let Vero automate the process for you.</p>
      <p>Our dynamic segments update as your contacts take actions on your site or in your app or as their attributes are updated in Vero.</p> 
      <p>Want to target the most up to date list of customers that have <em>Checked out</em> three times before? Or your SaaS users that have signed up but not used a certain feature? Easy, with Vero's segment builder.</p>
      <p>Every segment is real-time, constantly up to date, and flexible. Move faster with Vero.</p>
    </div>
  </div>
  </div>
</section>
<section id="conversions">
  <div class="inner">
  <div class="center-text">
    <h3>Track conversions, not just opens and clicks</h3>
    <p>Opens and clicks don't drive revenue but conversions do.</p>
    <p>Identify the goal of each email and track how many contacts convert. Whether it's starting a free trial, buying a product or just visiting a landing page, you'll know exactly how effective every email is.</p>
    <img src="/wp-content/themes/vero/assets/images/newsletters/conversions-clean.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/individual-contact-profiles" class="btn btn-warning">Continue tour</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static_wrap();
  wp_footer();
?>