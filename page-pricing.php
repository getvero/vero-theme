<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section id="pricing-hero" class="hero">
  <div class="inner small-inner flush-bottom center-text">
    <h1 class="biggie semi-bold">Get started with Vero</h1>
    <!-- <p class="large no-bottom-margin"><strong>Vero</strong> is built to scale. Whether you start small or big, our pricing is designed to scale as you do.</p> -->
  </div>
  <div class="inner xlarge-inner top-padding-medium center-text">
    <!-- <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Monthly</li>
      <li id="slider-yearly">Annually</li>
    </ul> -->
    <!-- <ul class="plan-tabs unstyled-list inline-list">
      <li id="slider-monthly" class="active">Cloud</li>
      <li id="slider-self-hosted">Self-hosted</li>
    </ul> -->
    <ul id="pricing-slider">
      <li class="no-margin-bottom">
        <h2>How many are you sending too?</h2>

        <div class="js-slider">
          <input class="js-slider-range pricing-slider" type="range" value="20000" min="0" max="500000" step="10000">

          <span class="js-slider-value">0</span>

          <span class="js-slider-price">$0</span>
        </div>

        <p class="no-top-margin no-bottom-margin">
        Have questions? See the list of <a data-scroll href="#pricing-faq">Frequently Asked Questions</a> below.</p>

        <!-- <div class="flexbox pricing-cta bottom-margin-medium center-text">
          <a href="https://app.getvero.com/signup" class="btn btn-success btn-large btn-wide">Get started</a>
          <a rel="leanModal" href="#demo" class="btn btn-warning btn-large btn-wide ">Contact our sales team</a>
        </div> -->
      </li>
    </ul>
  </div>
</section>
<section class="gray-section">
  <div class="inner large-inner center-text top-padding-large bottom-padding-large">
    <h2 class="tubs medium bottom-margin-medium">Addons</h2>
    <div class="grid grid-third">
      <div>
        <img class="quote-image bottom-margin-small" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-plans.svg">
        <h3 class="micro medium bottom-margin-tiny">Dedicated IP</h3>
        <p class="no-top-margin no-bottom-margin">$79 per month</p>
      </div>
      <div>
        <img class="quote-image bottom-margin-small" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-plans.svg">
        <h3 class="micro medium bottom-margin-tiny">BYO email provider</h3>
        <p class="no-top-margin no-bottom-margin">-10%</p>
      </div>
      <div>
        <img class="quote-image bottom-margin-small" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-plans.svg">
        <h3 class="micro medium bottom-margin-tiny">Save with an annual plan</h3>
        <p class="no-top-margin no-bottom-margin">Save on your subscription with our <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">advanced-payment plans</a>.</p>
      </div>
      <div>
        <img class="quote-image bottom-margin-small" src="/wp-content/themes/vero/assets/images/home/pricing/pricing-plans.svg">
        <h3 class="micro medium bottom-margin-tiny">Save with an annual plan</h3>
        <p class="no-top-margin no-bottom-margin">Save on your subscription with our <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">advanced-payment plans</a>.</p>
      </div>
    </div>
  </div>
</section>
<section id="pricing-included">
  <div class="inner large-inner">
    <ul class="unstyled-list feature-list flex inline-list center-text">
      <li class="center-text">
        <img src="/wp-content/themes/vero/assets/images/home/pricing/pricing-support.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/pricing-support@2x.png 2x" width="46">
        <h3 class="regular bottom-margin-tiny">24/7 support</h3>
        <p class="no-top-margin no-bottom-margin">Across EMEA, the US and APAC, dedicated support is here to help</p>
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
<section id="pricing-validation" class="dark-box">
  <div class="inner bottom-padding-small center-text">
    <blockquote class="quote bottom-margin-small">
      <p class="no-top-margin no-bottom-margin">&ldquo;I’m in the midst of transitioning over to Vero for this reason. All the things I liked about Drip, plus their email workflows and templating engine can pull data directly from my app’s API. Game changer for me.&rdquo;</p>
    </blockquote>

    <div class="flex bottom-margin-medium bottom-padding-large bottom-border-faded">
      <img class="quote-image bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/pricing/ken-wallace.png" srcset="/wp-content/themes/vero/assets/images/home/pricing/ken-wallace@2x.png 2x">

      <p class="large no-top-margin no-bottom-margin">Ken Wallace, Founder of MastermindJam</p>
    </div>

    <ul class="unstyled-list logos-list">
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-unsplash.svg" alt="Unsplash" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://tidal.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-tidal.svg" alt="Tidal" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://monzo.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-monzo.svg" alt="Monzo" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://pipedrive.com">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-pipedrive.svg" salt="Pipedrive" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://about.me">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-aboutme.svg" alt="about.me" height="76">
        </a>
      </li>
      <li class="logos-list-item no-top-margin">
        <a class="display-block" href="http://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/images/home/pricing/logos/pricing-helloprint.svg" alt="Helloprint" height="76">
        </a>
      </li>
    </ul>
  </div>
</section>
<section id="pricing-faq">
  <div class="inner">
    <h2 class="h1 regular center-text bottom-margin-large jump-link">Frequently Asked Questions</h2>

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
        <p>We want your experience with our support to be the best experience you’ve ever had, not just the best you’ve had with an online service, or the best you’ve had this week.
        </p>
        <p>We provide 24 hour support via email. We are proud of our support and our internal SLA is to provide a response to every ticket within three hours. Our aim is to understand and work with you closely on any specific marketing or technical questions or issues and ensure your problems are solved to the best of our abilities.
        </p>
        <p>We also provide phone and emergency support for customers on our $1,049/month Enterprise plans. Please request a demo above for more information or if you have questions about this process.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">Can I pay annually?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
      <p>Yes, <a href="https://help.getvero.com/articles/lock-in-your-pricing.html">read about lock-in pricing on our help docs</a>.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">What are projects?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
      <p>Projects are individual instances of Vero. Each project has it's own subscriber database, API keys and campaigns. In other words, it’s like having two or more Vero accounts in one.
      </p>
      <p>If you’re an agency, you may also use projects to manage multiple clients.</p>
      </div>
    </div>

    <div class="question-block bottom-margin-medium">
      <div class="js-toggle flexbox question">
        <h3 class="h2 regular no-bottom-margin">Does the data I send Vero belong to me?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/images/home/pricing/caret.svg" alt="">
      </div>
      <div class="answer">
      <p>Absolutely. Vero is a platform designed to help you send better emails to your users. The data you send us is stored in order to deliver the best service we can for sending targeted emails. At any time you can export or request us to remove your data – it is entirely yours.</p>
      <p>Read our <a href="/terms-of-service" target="blank">Terms of Service</a> for more details.</p>
      </div>
    </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Send your first email today</h1>
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
