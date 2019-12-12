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
    <h1 class="biggie semi-bold bottom-margin-xl">A pricing plan that helps you scale your business</h1>
  </div>
  <div class="inner xlarge-inner flush-top">
    <h2 class="atomic regular bottom-margin-xl center-text">How many subscribers do you have?</h2>

    <div class="flex price-scale top-margin-xxs bottom-margin-xl center-text">
      <div class="price-slider">
        <div id="js-price-slider"></div>
        <div id="js-price-pips-values"></div>
      </div>
    </div>

    <div class="pricing-footer border-light border-radius-2 padding-lg flex items-center">
      <div class="left">
        <p class="no-top-margin bottom-margin-xxs"><span class="tubs regular semi-bold" id="js-price">$199</span> <span class="faded no-margin">per month</span></p>
        <!-- <p class="no-margin"><strong id="js-customer-update">50,000</strong> customers</p> -->
        <p class="annotation italic no-margin">Includes <strong>unlimited</strong> email and push messages</p>
      </div>

      <div class="right flex">
        <div class="flex pricing-cta">
          <a class="btn btn-medium btn-success" id="js-trial-btn" href="https://app.getvero.com/signup">Start a free trial</a>
          <a class="btn btn-medium btn-outline btn-primary typeform-share" id="talk_to_us" href="https://getvero.typeform.com/to/d9wZ4V" data-mode="popup" target="_blank">Contact our sales team</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite" id="pricing-addons">
  <div class="inner xlarge-inner center-text">
    <h2 class="tubs regular">Simple, flexible pricing options</h2>
    <div class="grid grid-auto">
      <div class="border-light border-radius-2 bg-white top-padding-xs horizontal-padding-xl bottom-padding-lg">
        <img class="bottom-margin-xs" src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-ip.svg" alt="Dedicated IP">

        <header class="flex justify-center bottom-margin-xs">
          <h3 class="micro semi-bold medium no-bottom-margin">Dedicated IP</h3>

          <!-- <span class="self-center">$79 per month</span> -->
        </header>

        <p class="no-top-margin">Send your emails from a dedicated server</p>
        <a href="https://help.getvero.com/articles/dedicated-ips.html" target="_blank" rel="noopener">Find out more</a>
      </div>
      <div class="border-light border-radius-2 bg-white top-padding-xs horizontal-padding-xl bottom-padding-lg">
        <img class="bottom-margin-xs" src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-email.svg" alt="BYO email provider">

        <header class="flex justify-center bottom-margin-xs">
          <h3 class="micro semi-bold medium no-bottom-margin">BYO email platform</h3>
        </header>

        <p class="no-top-margin">We'll track and centralize your reporting</p>
        <a href="https://help.getvero.com/articles/improving-deliverability#bring-your-own-email-infrastructure" target="_blank" rel="noopener">Find out more</a>
      </div>
      <div class="border-light border-radius-2 bg-white top-padding-xs horizontal-padding-xl bottom-padding-lg">
        <img class="bottom-margin-xs" src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-discount.svg" alt="Pay up front">

        <header class="flex justify-center bottom-margin-xs">
          <h3 class="micro semi-bold medium no-bottom-margin">Save 15%</h3>
        </header>

        <p class="no-top-margin">Choose an annual plan and receive a discount</p>
        <a href="https://help.getvero.com/articles/annual-plan-discount.html" target="_blank" rel="noopener">Find out more</a>
      </div>
    </div>
  </div>
</section>
<section id="pricing-included">
  <div class="inner medium-inner top-padding-xl bottom-padding-xl">
    <ul class="unstyled-list feature-list grid grid-sixths center-text">
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-support.svg" width="46" alt="24-hour support">
        <h3 class="regular bottom-margin-xs">24-hour support</h3>
        <p class="no-top-margin no-bottom-margin">Our global support team is on hand to help you</p>
      </li>
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-encrypt.svg" width="46" alt="Data security">
        <h3 class="regular bottom-margin-xs">Data security</h3>
        <p class="no-top-margin no-bottom-margin">GDPR-ready, we take data security seriously</p>
      </li>
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-unlimited.svg" width="46" alt="Unlimited everything">
        <h3 class="regular bottom-margin-xs">Unlimited everything</h3>
        <p class="no-top-margin no-bottom-margin">Emails, sub-accounts, users - we won't charge you extra</p>
      </li>
    </ul>
  </div>
</section>
<section class="bg-dark-blue-gradient" id="pricing-logos">
  <div class="inner medium-inner top-padding-xl bottom-padding-lg center-text">
    <h3 class="section-label bottom-margin-sm font-white">Trusted by companies globally</h5>

    <ul class="unstyled-list logos-list flex">
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="show" href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/logos/pricing-unsplash.svg" alt="Unsplash logo" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="show" href="https://monzo.com">
          <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/logos/pricing-monzo.svg" alt="Monzo logo" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="show" href="https://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/logos/pricing-helloprint.svg" alt="Helloprint logo" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="show" href="https://tidal.com">
          <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/logos/pricing-tidal.svg" alt="Tidal logo" height="76">
        </a>
      </li>
      <li class="logos-list-item logos-list-item-big no-top-margin">
        <a class="show" href="https://pipedrive.com">
          <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/logos/pricing-pipedrive.svg" alt="Pipedrive logo" height="76">
        </a>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-faq">
  <div class="inner">
    <h2 class="chunk regular center-text bottom-margin-xl jump-link">Frequently Asked Questions</h2>

    <div class="question-block bottom-margin-lg">
      <div class="js-toggle flex question">
        <h3 class="micro regular no-bottom-margin">What happens if I go over my subscriber limit?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
      <p>Vero will send you an email when you cross the subscriber threshold of your current plan. Your account will be automatically upgraded to a new plan, which will be reflected in your your next invoice.</p>
      <p>As your usage fluctuates you can downgrade your plan during the next billing period, ensuring you minimize your spend each month.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-lg">
      <div class="js-toggle flex question">
        <h3 class="micro regular no-bottom-margin">What support does Vero provide?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>Our global support team is on hand to help 24 hours a day. We have dedicated support team members in Australia, Europe, and the USA. Our email support has a customer satisfaction rating of over 98%.</p>
        <p>We also provide urgent, emergency support for customers on our high-volume plans - <a rel="leanModal" href="#demo">talk to our sales team</a> to learn more.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-lg">
      <div class="js-toggle flex question">
        <h3 class="micro regular no-bottom-margin">Can I pay annually?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>You sure can. We offer a 15% discount when you subscribe to an annual plan. <a href="https://help.getvero.com/articles/annual-plan-discount.html">Find out more about annual plans</a>.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-lg">
      <div class="js-toggle flex question">
        <h3 class="micro regular no-bottom-margin">Can I use sub-accounts?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>In Vero, sub-accounts are called <strong>Projects</strong>. Each project has it's own subscriber database, API keys, and campaigns. In other words, it’s like having two or more Vero accounts that you can easily jump between. You can also think of them as <strong>free sandboxes</strong>.</p>
        <p>If you’re an agency, you may also use projects to manage multiple clients.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-lg">
      <div class="js-toggle flex question">
        <h3 class="micro regular no-bottom-margin">Does the data I send Vero belong to me?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
        <p>Absolutely. The data you send us belongs to you. Vero collects and processes all data securely, in accordance with legislation, including EU GDPR. At any time, you can export or request us to remove your data. Read our <a href="https://www.getvero.com/terms-of-service/" rel="noopener" target="_blank">Terms of Service</a> for more details.</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>
