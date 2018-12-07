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
  <div class="inner large-inner flush-bottom center-text">
    <h1 class="biggie semi-bold bottom-margin-large">A pricing plan that helps you scale your business</h1>
  </div>
  <div class="inner xlarge-inner flush-top bottom-padding-medium center-text">
    <p class="no-top-margin bottom-margin-large">How many subscribers do you have?</p>

    <div class="flexbox price-scale top-margin-micro">
      <div class="price-slider">
        <div id="js-price-slider"></div>
        <div id="js-price-pips-values"></div>
      </div>

      <a rel="leanModal" href="#demo">500,000+ subscribers</a>
    </div>
  </div>
</section>
<section class="pricing-footer">
  <div class="inner xlarge-inner flush-top">
    <div class="border-light border-radius padding-medium grid grid-thirds items-center">
      <div class="left">
        <!-- <p class="no-margin"><strong id="js-customer-update">50,000</strong> customers</p> -->
        <p class="medium no-margin">Vero's plans include <strong>unlimited</strong> email and push messages</p>
      </div>

      <div class="right flexbox">
        <div class="price right-margin-small">
          <span class="chunk display-block" id="js-price">$199</span>
          <p class="mini faded no-top-margin no-bottom-margin">monthly</p>
        </div>

        <div class="flexbox pricing-cta">
          <a class="btn btn-success" href="https://app.getvero.com/signup">Start a free trial</a>
          <a class="btn btn-outline btn-primary" rel="leanModal" href="#demo" >Contact our sales team</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="gray-section" id="pricing-addons">
  <div class="inner xlarge-inner center-text">
    <h2 class="tubs">Add-ons</h2>
    <div class="grid grid-thirds">
      <div class="border-light border-radius bg-white top-padding-small horizontal-padding-large bottom-padding-medium">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-ip.svg" alt="Dedicated IP">

        <header class="flexbox justify-center bottom-margin-tiny">
          <h3 class="micro medium no-bottom-margin">Dedicated IP</h3>

          <!-- <span class="self-center">$79 per month</span> -->
        </header>

        <p class="no-top-margin">Send your emails from a dedicated server</p>
        <a href="https://help.getvero.com/articles/dedicated-ips.html" target="_blank" rel="noopener">Find out more</a>
      </div>
      <div class="border-light border-radius bg-white top-padding-small horizontal-padding-large bottom-padding-medium">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-email.svg" alt="BYO email provider">

        <header class="flexbox justify-center bottom-margin-tiny">
          <h3 class="micro medium no-bottom-margin">BYO email platform</h3>
        </header>

        <p class="no-top-margin">We'll track and centralize your reporting</p>
        <a href="https://help.getvero.com/articles/improving-deliverability" target="_blank" rel="noopener">Find out more</a>
      </div>
      <div class="border-light border-radius bg-white top-padding-small horizontal-padding-large bottom-padding-medium">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-discount.svg" alt="Pay up front">

        <header class="flexbox justify-center bottom-margin-tiny">
          <h3 class="micro medium no-bottom-margin">Save 10%</h3>
        </header>

        <p class="no-top-margin">Choose an annual plan and get <strong>15%</strong> off</p>
        <a href="https://help.getvero.com/articles/lock-in-your-pricing.html" target="_blank" rel="noopener">Find out more</a>
      </div>
    </div>
  </div>
</section>
<section id="pricing-included">
  <div class="inner medium-inner top-padding-large bottom-padding-large">
    <ul class="unstyled-list feature-list grid grid-tiny center-text">
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support.svg" width="46">
        <h3 class="regular bottom-margin-tiny">24/7 support</h3>
        <p class="no-top-margin no-bottom-margin">Our global support team is on hand to help</p>
      </li>
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-encrypt.svg" width="46">
        <h3 class="regular bottom-margin-tiny">Data security</h3>
        <p class="no-top-margin no-bottom-margin">GDPR-ready, we take data security seriously</p>
      </li>
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-unlimited.svg" width="46">
        <h3 class="regular bottom-margin-tiny">Unlimited everything</h3>
        <p class="no-top-margin no-bottom-margin">Emails, sub-accounts, users - we won't charge you extra</p>
      </li>
    </ul>
  </div>
</section>
<section class="dark-box">
  <div class="inner medium-inner top-padding-large bottom-padding-medium center-text">
    <h3 class="section-label bottom-margin-small">Trusted by companies globally</h5>

    <ul class="unstyled-list logos-list">
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="display-block" href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-unsplash.svg" alt="Unsplash" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="display-block" href="https://monzo.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-monzo.svg" alt="Monzo" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="display-block" href="https://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-helloprint.svg" alt="Helloprint" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="display-block" href="https://tidal.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-tidal.svg" alt="Tidal" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="display-block" href="https://pipedrive.com">
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
        <h3 class="micro regular no-bottom-margin">What happens if I go over my subscription limit?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
      <p>Vero will send you an email when you cross the subscriber or email threshold of your current plan during a billing period. You will automatically be upgraded to the appropriate plan.</p>
      <p>As your usage fluctuates you can downgrade your plan during the next billing period, ensuring you minimize your spend each month.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="micro regular no-bottom-margin">What support does Vero provide?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>Our global support team is on hand to help 24 hours a day. Our email support has a satisfaction rating of over 98% and our internal SLA is to provide a response to every ticket within eight hours, regardless of where you are in the world.</p>
        <p>We have dedicated support team members in Australia, Europe and the USA. We also provide urgent, emergency support for customers on our Pro Plans (contact sales to learn more.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="micro regular no-bottom-margin">Can I pay annually?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>You sure can. We offer a 10% discount when you subscribe to an annual plan. You can get the full details <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">here</a>.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="micro regular no-bottom-margin">Can I use sub-accounts?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>In Vero, sub-accounts are called “Projects”. Each project has it's own subscriber database, API keys, and campaigns. In other words, it’s like having two or more Vero accounts that you can easily jump between. You can also think of them as free <strong>sandboxes</strong>.</p>
        <p>If you’re an agency, you may also use projects to manage multiple clients.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="micro regular no-bottom-margin">Does the data I send Vero belong to me?</h3>

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
    <a class="btn btn-success btn-large btn-wide" href="http://app.getvero.com/signup">Start a free trial</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
  include("hosted-enquiry-form.php");
?>
