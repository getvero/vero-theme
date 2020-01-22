<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="features-hero bg-gray-lighter top-padding-xxl">
  <?php
    do_action( 'genesis_before_header' );
    do_action( 'genesis_header' );
    do_action( 'genesis_after_header' );
  ?>
  <div class="inner xlarge-inner flush-bottom center-text">
    <div class="bottom-margin-xl">
      <span class="d-inline-block atomic semi-bold font-brand-gray-dark bottom-margin-sm xs-bottom-margin-lg">Features</span>

      <h1 class="hulk semi-bold bottom-margin-sm">How it works</h1>
      <p class="large bottom-margin-md">The messaging platform that scales personalisation.</p>
      <a class="btn btn-large btn-success" href="">Start a trial</a>
    </div>

    <img class="features-hero-img border border-radius-2 shadow-2 responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/hero-1.png" srcset="/wp-content/themes/vero/assets/dist/images/features/hero-1@2x.png" alt="">
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner flush-bottom top-margin-lg bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Automation scales when you can't</h2>
    <p class="large">Your customers never sleep&mdash;they're 24/7, 365, global. Use automation to extend your team and help more customers, more often.</p>
  </div>

  <div class="inner">
    <input class="hide automation-radio-1" id="automation-tab-1" type="radio" name="automation-tabs" checked>
    <input class="hide automation-radio-2" id="automation-tab-2" type="radio" name="automation-tabs">

    <ul class="unstyled-list bottom-margin-lg justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label automation-label-1 semi-bold" for="automation-tab-1">Workflows</label>
      </li>
      <li>
        <label class="feature-tab-label automation-label-2 semi-bold" for="automation-tab-2">Recurring newsletters</label>
      </li>
    </ul>

    <div class="automation-tab automation-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center" id="1a">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold bottom-margin-sm">Workflows</h3>

          <p class="medium bottom-margin-md">Automatically trigger workflows based on customer activity, automate decisions and trigger messages across multiple channels, all with our beautiful drag-and-drop UI.</p>

          <!-- <a class="medium unstyled underline-link" href="/worksflows">Learn more</a> -->

          <a class="btn btn-primary btn--outline" href="/workflows">Learn more</a>
        </div>
        <div class="col-aside order-1 md-order-2 center-text md-right-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/workflows.svg" alt="">
        </div>
      </div>
    </div>
    <div class="automation-tab automation-tab--2">
      <div class="w-sidebar w-sidebar--feature-default items-center" id="1b">
        <div class="col-main lg-left-padding-md order-2">
          <h3 class="tubs semi-bold">Recurring newsletters</h3>
          <p class="medium bottom-margin-md">Whether it's a weekly summary, a daily news feed or the latest products, use recurring newsletters in conjunction with dynamic segmentation for powerful results.</p>
        </div>
        <div class="col-aside order-1 center-text md-left-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <div class="d-inline-block bg-dots-offset">
            <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/recurring-newsletters.svg" alt="">
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
    <input class="hide customers-radio-1" id="customers-tab-1" type="radio" name="customers-tabs" checked>
    <input class="hide customers-radio-2" id="customers-tab-2" type="radio" name="customers-tabs">
    <input class="hide customers-radio-3" id="customers-tab-3" type="radio" name="customers-tabs">

    <ul class="unstyled-list bottom-margin-lg justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label customers-label-1 semi-bold" for="customers-tab-1">Custom attributes</label>
      </li>
      <li>
        <label class="feature-tab-label customers-label-2 semi-bold" for="customers-tab-2">Activity tracking</label>
      </li>
      <li>
        <label class="feature-tab-label customers-label-3 semi-bold" for="customers-tab-3">Dynamic data feeds</label>
      </li>
    </ul>

    <div class="customers-tab customers-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold bottom-margin-sm">Custom attributes</h3>

          <p class="medium bottom-margin-md">Use attributes to store customer inputs, demographic data, subscription preferences.</p>

          <a class="btn btn-primary btn--outline" href="/event-manager">Learn more</a>
        </div>
        <div class="col-aside order-1 md-order-2 center-text md-right-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <div class="d-inline-block bg-dots-offset">
            <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/custom-attributes.svg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="customers-tab customers-tab--2">
      <div class="w-sidebar w-sidebar--feature-default">
        <div class="col-main order-2">
          <h3 class="tubs semi-bold">Activity tracking</h3>

          <p class="medium">Keep a record of what your customers do (and don't do) on both your site and in your product.</p>

          <p class="medium bottom-margin-md">Integrations along with our JavaScript, Ruby, Python and other libraries make powerful activity tracking simpler.</p>

          <a class="btn btn-primary btn--outline" href="/event-manager">Learn more</a>
        </div>
        <div class="col-aside order-1 center-text md-left-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/activity-tracking.svg" alt="">
        </div>
      </div>
    </div>

    <div class="customers-tab customers-tab--3">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold bottom-margin-sm">Dynamic data feeds</h3>

          <p class="medium bottom-margin-md">Pull data at the time your message is sent from your own, or public, APIs and personalize what your customers see at a whole new level.</p>

          <a class="btn btn-primary btn--outline" href="/fusion">Learn more</a>
        </div>
        <div class="col-aside order-1 md-order-2 center-text md-right-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <div class="d-inline-block bg-dots-offset">
            <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/dynamic-data-feeds.svg" alt="">
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
    <input class="hide something-radio-1" id="something-tab-1" type="radio" name="something-tabs" checked>
    <input class="hide something-radio-2" id="something-tab-2" type="radio" name="something-tabs">
    <input class="hide something-radio-3" id="something-tab-3" type="radio" name="something-tabs">

    <ul class="unstyled-list bottom-margin-lg justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label something-label-1 semi-bold" for="something-tab-1">Templates</label>
      </li>
      <li>
        <label class="feature-tab-label something-label-2 semi-bold" for="something-tab-2">Personalize</label>
      </li>
      <li>
        <label class="feature-tab-label something-label-3 semi-bold" for="something-tab-3">Multi-language</label>
      </li>
    </ul>

    <div class="something-tab something-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold">Templates</h3>
          <p class="medium">Manage email designs centrally and synchronise changes to automated campaigns instantly.</p>
          <p class="medium">Include point-and-click regions to make creating and editing emails a safe and on-brand experience.</p>
        </div>
        <div class="col-aside order-1 md-order-2 center-text md-right-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/templates.svg" alt="">
        </div>
      </div>
    </div>

    <div class="something-tab something-tab--2">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2">
          <h3 class="tubs semi-bold">Personalize emails with dynamic data and templating</h3>
          <p class="medium">Bring the full power of the Liquid templating language to your campaigns and ensure your emails are personal.</p>
          <p class="medium bottom-margin-md">Make including dynamic data like <code class="language-liquid">first_name</code> and <code class="language-liquid">last_name</code> a breeze. Use powerful <code class="language-liquid">if</code>, <code class="language-liquid">else</code> and case` statements to fully customise content or templates.</p>
          <a class="btn btn--outline btn-primary" href="/email-personalization-liquid-guide">Learn more</a>
        </div>
        <div class="col-aside order-1 center-text md-left-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <div class="d-inline-block bg-dots-offset">
            <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/personalize.svg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="something-tab something-tab--3">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold">Talk to customers in their language</h3>
          <p class="medium">Create a variant in any language, for any message campaign.</p>

          <p class="medium bottom-margin-md">Vero automatically sends each customer the right language variant, wherever it's available.</p>

          <a class="btn btn--outline btn-primary" href="/multi-language-campaigns">Learn more</a>
        </div>
        <div class="col-aside order-1 md-order-2 center-text lg-right-text bottom-margin-md md-no-bottom-margin md-horizontal-padding-md">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/multi-language.png" srcset="/wp-content/themes/vero/assets/dist/images/features/multi-language@2x.png 2x" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner tiny-inner flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Iterate on and A/B test your messages</h2>
    <p class="large">Don't guess what works: test it. Built-in tools to test one-off and automated campaigns.</p>
  </div>
  <div class="inner">
    <input class="hide testing-radio-1" id="testing-tab-1" type="radio" name="testing-tabs" checked>
    <input class="hide testing-radio-2" id="testing-tab-2" type="radio" name="testing-tabs">

    <ul class="unstyled-list bottom-margin-lg justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label testing-label-1 semi-bold" for="testing-tab-1">AB testing</label>
      </li>
      <li>
        <label class="feature-tab-label testing-label-2 semi-bold" for="testing-tab-2">Reporting</label>
      </li>
    </ul>

    <div class="testing-tab testing-tab--1">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold">A/B testing</h3>
          <p class="medium">Allows you to rigorously test message subject lines, content and timing across one-off campaigns and workflow automations.</p>
        </div>
        <div class="col-aside order-1 md-order-2 bottom-margin-md md-no-bottom-margin md-horizontal-padding-md center-text md-right-text">
          <div class="d-inline-block bg-dots-offset">
            <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/ab-testing.svg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="testing-tab testing-tab--2">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2">
          <!-- <h3 class="tubs semi-bold">Reporting that gives you an overview, or lets you dive in deep</h3> -->
          <h3 class="tubs semi-bold">Reporting that gives you a deep overview</h3>
          <p class="medium">Track send, delivery, open and click rates by campaign, variation, language and more.</p>
  
          <p class="medium">Define the conversion activity for every campaign and track the number of customers that convert after seeing, receiving or clicking your campaign.</p>

          <p class="medium bottom-margin-md">Use our webhooks or integrations with Stitch, Segment and others to send a copy of everything that happens in Vero to your data warehouse.</p>
          
          <a class="btn btn--outline btn-primary" href="/reporting">Learn more</a>
        </div>
        <div class="col-aside order-1 bottom-margin-md md-no-bottom-margin md-horizontal-padding-md center-text md-left-text">
          <div class="d-inline-block bg-dots-offset">
            <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/reporting.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Reach your customer where they are</h2>
    <p class="large">Every customer and every message is different. Reach your customers via email, push and other channels to make sure your message is heard.</p>
  </div>
  <div class="inner">
    <input class="hide multi-channel-radio-1" id="multi-channel-1" type="radio" name="multi-channels" checked>
    <input class="hide multi-channel-radio-2" id="multi-channel-2" type="radio" name="multi-channels">
    <input class="hide multi-channel-radio-3" id="multi-channel-3" type="radio" name="multi-channels">

    <ul class="unstyled-list bottom-margin-lg justify-center feature-tab-switcher border-bottom">
      <li>
        <label class="feature-tab-label multi-channel-label-1 semi-bold" for="multi-channel-1">Email</label>
      </li>
      <li>
        <label class="feature-tab-label multi-channel-label-2 semi-bold" for="multi-channel-2">Push</label>
      </li>
      <li>
        <label class="feature-tab-label multi-channel-label-3 semi-bold" for="multi-channel-3">SMS</label>
      </li>
    </ul>

    <div class="multi-channel-tab multi-channel-tab--1">
      <div class="w-sidebar w-sidebar--feature-default">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold flex items-center">Email <span class="pill pill--primary pill--small uppercase semi-bold left-margin-xs">Coming soon</span></h3>
          <p class="medium">Creating good looking email isn't easy. Using our drag-and-drop editor you can build great looking, mobile responsive emails, visually.</p>

          <p class="medium">Built on top of the powerful <a class="unstyled underline-link" href="https://mjml.io">MJML</a> rendering engine, you can import, export and reuse full HTML templates with ease.</p>
        </div>
        <div class="col-aside order-1 md-order-2 bottom-margin-md md-no-bottom-margin md-horizontal-padding-md center-text md-right-text">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/email.svg" alt="">
        </div>
      </div>
    </div>

    <div class="multi-channel-tab multi-channel-tab--2">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2">
          <h3 class="tubs semi-bold">Push</h3>
          <p class="medium bottom-margin-md">A visual UI that makes creating iOS and Android push messages simpler for everyone on the team. Add the subject, body content and images at the click of a button.</p>
          <a class="btn btn--outline btn-primary" href="/push-notifications">Learn more</a>
        </div>
        <div class="col-aside order-1 center-text bottom-margin-md md-no-bottom-margin">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/push.svg" alt="">
        </div>
      </div>
    </div>

    <div class="multi-channel-tab multi-channel-tab--3">
      <div class="w-sidebar w-sidebar--feature-default items-center">
        <div class="col-main order-2 md-order-1">
          <h3 class="tubs semi-bold flex items-center">SMS <span class="pill pill--primary pill--small uppercase semi-bold left-margin-xs">Coming soon</span></h3>
          <p class="medium">Message your entire customer base as easily as if you were texting a friend.</p>

          <p class="padding-sm border border-radius-1 bg-offwhite bottom-margin-md">Via our integrations with Twilio, Messagebird and others you can send messages to customers anywhere in the world from one simple-to-use interface.</p>
        </div>
        <div class="col-aside order-1 md-order-2 bottom-margin-md md-no-bottom-margin md-horizontal-padding-md center-text md-right-text">
          <img class="d-inline-block responsive-image" src="/wp-content/themes/vero/assets/dist/images/features/sms.png" srcset="/wp-content/themes/vero/assets/dist/images/features/sms@2x.png 2x" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter feature-integrations">
  <div class="inner tiny-inner flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Our integrations</h2>
    <p class="large">Built from the ground up to work with the modern data stack, Vero respects your data on the way in, and on the way out.</p>
  </div>
  <div class="inner center-text">
    <div class="grid items-center feature-integrations-diagram">
      <div class="order 1 md-order-0">
        <h3 class="atomic">Data in</h3>
      </div>
      <div class="order-5 md-order-0">
        <h3 class="atomic">Data out</h3>
      </div>
      <div class="order-2 md-order-0">
        <ul class="unstyled-list flex md-flex-column justify-center input">
          <li class="tooltip" data-label="Segment">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/segment.svg" alt="Segment logo">
          </li>
          <li class="tooltip" data-label="Zapier">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/zapier.svg" alt="Zapier logo">
          </li>
        </ul>
      </div>
      <div class="order-4 md-order-0">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/vero.svg" alt="">
      </div>
      <div class="order-6 md-order-0">
        <ul class="unstyled-list grid justify-center output">
          <li class="tooltip" data-label="Webhook">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/webhook.svg" alt="">
          </li>
          <li class="tooltip" data-label="Stitch">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/stitch.svg" alt="Stitch logo">
          </li>
          <li class="tooltip" data-label="Segment">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/segment.svg" alt="Segment logo">
          </li>
          <li class="tooltip" data-label="Snowplow">
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/features/integrations/snowplow.svg" alt="Snowplow logo">
          </li>
        </ul>
      </div>
      <div class="order-3 md-order-0">
        <p>Add or update data in Vero using</p>
      </div>
      <div class="order-7 md-order-0">
        <p>Copy all message activity from Vero to</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>