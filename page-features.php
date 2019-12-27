<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="border-bottom-light">
  <div class="inner xlarge-inner flush-bottom center-text">
    <div class="bottom-margin-xl">
      <h1 class="hulk semi-bold bottom-margin-sm">How it works</h1>
      <p class="large bottom-margin-md">The messaging platform that scales personalisation.</p>
      <a class="btn btn-large btn-success" href="">Start a trial</a>
    </div>

    <ul class="unstyled-list relative">
      <li>
        <img class="border border-radius-2 responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/hero-1.png" srcset="/wp-content/themes/vero/assets/dist/images/features/hero-1@2x.png" alt="">
      </li>
      <li class="absolute">
        <img class="border border-radius-2 responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/hero-1.png" srcset="/wp-content/themes/vero/assets/dist/images/features/hero-1@2x.png" alt="">
      </li>
    </ul>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Automation scales when you can't</h2>
    <p class="large">Your customers never sleep&mdash;they're 24/7, 365, global. Use automation to extend your team and help more customers, more often.</p>
  </div>

  <div class="inner">
    <input class="hide automation-tab-radio-1" id="automation-tab-1" type="radio" name="automation-tabs" checked>
    <input class="hide automation-tab-radio-2" id="automation-tab-2" type="radio" name="automation-tabs">

    <ul class="unstyled-list bottom-margin-lg flex justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label automation-label-1 semi-bold atomic" for="automation-tab-1">Workflows</label>
      </li>
      <li>
        <label class="feature-tab-label automation-label-2 semi-bold atomic" for="automation-tab-2">Recurring newsletters</label>
      </li>
    </ul>

    <div class="automation-tab automation-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center" id="1a">
        <div class="col-main">
          <h3 class="tubs semi-bold bottom-margin-sm">Workflows</h3>

          <p class="medium bottom-margin-md">Automatically trigger workflows based on customer activity, automate decisions and trigger messages across multiple channels, all with our beautiful drag-and-drop UI.</p>

          <!-- <a class="medium unstyled underline-link" href="/worksflows">Learn more</a> -->

          <a class="btn btn-primary btn--outline" href="/workflows">Learn more</a>
        </div>
        <div class="col-aside lg-right-text">
          <img src="/wp-content/themes/vero/assets/dist/images/features/workflows.svg" alt="">
        </div>
      </div>
    </div>
    <div class="automation-tab automation-tab--2">
      <div class="w-sidebar w-sidebar--feature-default items-center" id="1b">
        <div class="col-main lg-order-2">
          <h3 class="tubs semi-bold">Recurring newsletters</h3>
          <p class="medium bottom-margin-md">Whether it's a weekly summary, a daily news feed or the latest products, use recurring newsletters in conjunction with dynamic segmentation for powerful results.</p>
        </div>
        <div class="col-aside lg-order-1">
          <div class="d-inline-block bg-dots-offset">
            <img src="/wp-content/themes/vero/assets/dist/images/features/recurring-newsletters.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner tiny-inner flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Customers, not <strong>lists</strong></h2>
    <p class="large">Create one, rich, central view of each customer. Reduce duplication, create audiences faster and have confidence in what your customers are seeing.</p>
  </div>
  <div class="inner">
    <input class="hide customers-tab-radio-1" id="customers-tab-1" type="radio" name="customers-tabs" checked>
    <input class="hide customers-tab-radio-2" id="customers-tab-2" type="radio" name="customers-tabs">
    <input class="hide customers-tab-radio-3" id="customers-tab-3" type="radio" name="customers-tabs">

    <ul class="unstyled-list bottom-margin-lg flex justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label customers-label-1 semi-bold atomic" for="customers-tab-1">Custom attributes</label>
      </li>
      <li>
        <label class="feature-tab-label customers-label-2 semi-bold atomic" for="customers-tab-2">Activity tracking</label>
      </li>
      <li>
        <label class="feature-tab-label customers-label-3 semi-bold atomic" for="customers-tab-3">Dynamic data feeds</label>
      </li>
    </ul>

    <div class="customers-tab customers-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main">
          <h3 class="tubs semi-bold bottom-margin-sm">Custom attributes</h3>

          <p class="medium bottom-margin-md">Use attributes to store customer inputs, demographic data, subscription preferences.</p>

          <a class="btn btn-primary btn--outline" href="/event-manager">Learn more</a>
        </div>
        <div class="col-aside lg-right-text">
          <div class="d-inline-block bg-dots-offset">
            <img src="/wp-content/themes/vero/assets/dist/images/features/custom-attributes.svg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="customers-tab customers-tab--2">
      <div class="w-sidebar w-sidebar--feature-default">
        <div class="col-main lg-order-1">
          <p>Image</p>
        </div>
        <div class="col-aside lg-order-2">
          <h3 class="tubs semi-bold">Activity tracking</h3>

          <p class="medium">Keep a record of what your customers do (and don't do) on both your site and in your product.</p>

          <p class="medium">Integrations along with our JavaScript, Ruby, Python and other libraries make powerful activity tracking simpler.</p>

          <a href="">Learn more</a>
        </div>
      </div>
    </div>
    <div class="customers-tab customers-tab--3">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main">
          <h3 class="tubs semi-bold bottom-margin-sm">Dynamic data feeds</h3>

          <p class="medium bottom-margin-md">Pull data at the time your message is sent from your own, or public, APIs and personalize what your customers see at a whole new level.</p>

          <a class="btn btn-primary btn--outline" href="/fusion">Learn more</a>
        </div>
        <div class="col-aside lg-right-text">
          <div class="d-inline-block bg-dots-offset">
            <img src="/wp-content/themes/vero/assets/dist/images/features/dynamic-data-feeds.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">A workflow the whole team can use to message customers</h2>
    <p class="large">Separate message design from message code. An easy-to-use UI to create, edit and deploy messages to customers.</p>
  </div>
  <div class="inner">
    <input class="hide something-tab-radio-1" id="something-tab-1" type="radio" name="something-tabs" checked>
    <input class="hide something-tab-radio-2" id="something-tab-2" type="radio" name="something-tabs">
    <input class="hide something-tab-radio-3" id="something-tab-3" type="radio" name="something-tabs">

    <ul class="unstyled-list bottom-margin-lg flex justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label something-label-1 semi-bold atomic" for="something-tab-1">Templates</label>
      </li>
      <li>
        <label class="feature-tab-label something-label-2 semi-bold atomic" for="something-tab-2">Personalize</label>
      </li>
      <li>
        <label class="feature-tab-label something-label-3 semi-bold atomic" for="something-tab-3">Multi-language</label>
      </li>
    </ul>

    <div class="something-tab something-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main">
          <h3 class="tubs semi-bold">Templates</h3>
          <p class="medium">Manage email designs centrally and synchronise changes to automated campaigns instantly.</p>
          <p class="medium">Include point-and-click regions to make creating and editing emails a safe and on-brand experience.</p>
        </div>
        <div class="col-aside lg-right-text">
          <img src="/wp-content/themes/vero/assets/dist/images/features/templates.svg" alt="">
        </div>
      </div>
    </div>

    <div class="something-tab something-tab--2">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main lg-order-2">
          <h3 class="tubs semi-bold">Personalize emails with dynamic data and templating</h3>
          <p class="medium">Bring the full power of the Liquid templating language to your campaigns and ensure your emails are personal.</p>
          <p class="medium">Make including dynamic data like <code class="language-liquid">first_name</code> and <code class="language-liquid">last_name</code> a breeze. Use powerful <code class="language-liquid">if</code>, <code class="language-liquid">else</code> and case` statements to fully customise content or templates.</p>
        </div>
        <div class="col-aside lg-order-1">
          <div class="d-inline-block bg-dots-offset">
            <img src="/wp-content/themes/vero/assets/dist/images/features/personalize.svg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="something-tab something-tab--3">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main">
          <h3 class="tubs semi-bold">Talk to customers in their language</h3>
          <p class="medium">Create a variant in any language, for any message campaign.</p>

          <p class="medium bottom-margin-lg">Vero automatically sends each customer the right language variant, wherever it's available.</p>

          <a class="medium" href="/multi-language-campaigns">Learn more</a>
        </div>
        <div class="col-aside lg-right-text">
          <img src="/wp-content/themes/vero/assets/dist/images/features/multi-language.png" srcset="/wp-content/themes/vero/assets/dist/images/features/multi-language@2x.png 2x" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner tiny-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Iterate on and A/B test your messages</h2>
    <p class="large">Don't guess what works: test it. Built-in tools to test one-off and automated campaigns.</p>
  </div>
  <div class="inner">
    <ul class="unstyled-list flex justify-center feature-switcher">
      <li><a class="feature-switcher-btn" href="#4a">AB testing</a></li>
      <li><a class="feature-switcher-btn" href="#4b">Reporting</a></li>
    </ul>

    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">A/B testing</h3>
        <p class="medium">Allows you to rigorously test message subject lines, content and timing across one-off campaigns and workflow automations.</p>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main lg-order-2">
        <h3 class="tubs semi-bold">Reporting that gives you an overview, or lets you dive in deep</h3>
        <p class="medium">Track send, delivery, open and click rates by campaign, variation, language and more.</p>
        <p class="medium">Conversion tracking. Define the conversion activity for every campaign and track the number of customers that convert after seeing, receiving or clicking your campaign.</p>
        <p class="medium bottom-margin-lg">Use our webhooks or integrations with Stitch, Segment and others to send a copy of everything that happens in Vero to your data warehouse.</p>
        <a class="medium" href="/reporting">Learn more</a>
      </div>
      <div class="col-aside lg-order-1">
        <p>Image</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner tiny-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Reach your customer where they are</h2>
    <p class="large">Every customer and every message is different. Reach your customers via email, push and other channels to make sure your message is heard.</p>
  </div>
  <div class="inner">
    <ul class="unstyled-list flex justify-center feature-switcher">
      <li><a class="feature-switcher-btn" href="#5a">Email</a></li>
      <li><a class="feature-switcher-btn" href="#5b">Push</a></li>
      <li><a class="feature-switcher-btn" href="#5c">SMS</a></li>
    </ul>

    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">Email</h3>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main lg-order-2">
        <h3 class="tubs semi-bold">Push</h3>
      </div>
      <div class="col-aside lg-order-1">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">SMS</h3>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner tiny-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Our integrations</h2>
    <p class="large">Built from the ground up to work with the modern data stack, Vero respects your data on the way in, and on the way out.</p>
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
?>