<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="hero" id="pricing-hero" >
  <div class="inner small-inner flush-bottom center-text">
    <h1 class="biggie semi-bold bottom-margin-large">A plan that scales with your business</h1>
  </div>
  <div class="inner large-inner top-padding-medium center-text">
    <div class="price-slider">
      <div id="js-price-slider"></div>
      <div id="js-price-pips-values"></div>
    </div>

    <p class="no-top-margin no-bottom-margin">How many contacts do you have?</p>
  </div>
</section>
<section class="fixed pricing-footer bg-gray-lighter">
  <div class="inner large-inner top-padding-small bottom-padding-small grid grid-third items-center">
    <div class="left">
      <p class="no-top-margin no-bottom-margin"><strong id="js-customer-update">50000</strong> customers</p>
      <p class="annotation no-top-margin no-bottom-margin">Vero's plans included <strong>unlimited</strong> email and push messages</p>
    </div>

    <div class="right flexbox">
      <div class="price right-margin-small">
        <span class="chunk display-block" id="js-price">$199</span>
        <p class="mini faded no-top-margin no-bottom-margin">monthly</p>
      </div>

      <div class="flexbox pricing-cta">
        <a class="btn btn-success" href="https://app.getvero.com/signup">Get a trial</a>
        <a class="btn btn-outline btn-primary" rel="leanModal" href="#demo" >Contact our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="gray-section" id="pricing-addons">
  <div class="inner xlarge-inner center-text">
    <h2 class="tubs">Addons</h2>
    <div class="grid grid-third">
      <div class="border-light bg-white padding-small top-padding-medium bottom-padding-medium">
        <header class="flexbox justify-center bottom-margin-tiny">
          <h3 class="micro medium right-margin-tiny no-bottom-margin">Dedicated IP</h3>

          <span class="self-center">$79 per month</span>
        </header>

        <p class="no-top-margin no-bottom-margin">$79 per month. Enim praesent elementum facilisis leo vel fringilla</p>
      </div>
      <div class="border-light bg-white padding-small top-padding-medium bottom-padding-medium">
        <header class="flexbox justify-center bottom-margin-tiny">
          <h3 class="micro medium right-margin-tiny no-bottom-margin">BYO email provider</h3>

          <span class="self-center">10% off</span>
        </header>

        <p class="no-top-margin no-bottom-margin">Enim praesent elementum facilisis leo vel fringilla est ullamcorper</p>
      </div>
      <div class="border-light bg-white padding-small top-padding-medium bottom-padding-medium">
        <header class="flexbox justify-center bottom-margin-tiny">
          <h3 class="micro medium right-margin-tiny no-bottom-margin">Pay up front</h3>

          <span class="self-center">10% off</span>
        </header>

        <p class="no-top-margin no-bottom-margin">Save on your subscription with our <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">advanced-payment plans</a></p>
      </div>
    </div>
  </div>
</section>
<section id="pricing-included">
  <div class="inner small-inner">
    <ul class="unstyled-list feature-list flex center-text">
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-support@2x.png 2x" width="46">
        <h3 class="regular bottom-margin-tiny">24/7 support</h3>
        <p class="no-top-margin no-bottom-margin">Our global support team is on hand to help</p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-encrypt.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-encrypt@2x.png 2x" width="46">
        <h3 class="regular bottom-margin-tiny">Data security</h3>
        <p class="no-top-margin no-bottom-margin">GDPR-ready, we take data security seriously</p>
      </li>
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited@2x.png 2x" width="46">
        <h3 class="regular bottom-margin-tiny">Unlimited flexibility</h3>
        <p class="no-top-margin no-bottom-margin">Multiple sub-accounts and unlimited users - we won’t charge you extra</p>
      </li>
    </ul>
  </div>
</section>
<section class="dark-box">
  <div class="inner top-padding-large bottom-padding-medium center-text">
    <h3 class="section-label bottom-margin-small">Trusted by companies globally</h5>

    <ul class="unstyled-list logos-list">
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-unsplash.svg" alt="Unsplash" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://monzo.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-monzo.svg" alt="Monzo" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-helloprint.svg" alt="Helloprint" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://tidal.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-tidal.svg" alt="Tidal" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://pipedrive.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-pipedrive.svg" salt="Pipedrive" height="76">
        </a>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-faq">
  <div class="inner">
    <h2 class="chunk regular center-text bottom-margin-large jump-link">Frequently Asked Questions</h2>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">What happens if I go over my subscription limit?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
      <p>Vero will send you an email when you cross the subscriber or email threshold of your current plan during a billing period. You will automatically be upgraded to the appropriate plan.</p>
      <p>As your usage fluctuates you can downgrade your plan during the next billing period, ensuring you minimize your spend each month.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">What support does Vero provide?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>Our global support team is on hand to help 24 hours a day. Our email support has a satisfaction rating of over 98% and our internal SLA is to provide a response to every ticket within eight hours, regardless of where you are in the world.</p>
        <p>We have dedicated support team members in Australia, Europe and the USA. We also provide urgent, emergency support for customers on our Pro Plans (contact sales to learn more.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">Can I pay annually?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>You sure can. We offer a 10% discount when you subscribe to an annual plan. You can get the full details <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">here</a>.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">Can I use sub-accounts??</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>In Vero, sub-accounts are called “Projects”. Each project has it's own subscriber database, API keys, and campaigns. In other words, it’s like having two or more Vero accounts that you can easily jump between. You can also think of them as free <strong>sandboxes</strong>.</p>
        <p>If you’re an agency, you may also use projects to manage multiple clients.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">Does the data I send Vero belong to me?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>Absolutely. The data you send us belongs to you. Vero collects and processes all data securely, in accordance with legislation, including EU GDPR. At any time, you can export or request us to remove your data. Read our <a href="/terms-of-service" target="blank">Terms of Service</a> for more details.</p>
      </div>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Improve your customer experience today</h1>
    <p class="sub-heading">No contracts to lock you in, only pay when you start sending live emails</p>
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Get started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
  include("hosted-enquiry-form.php");
?>
