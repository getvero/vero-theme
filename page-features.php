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
  <div class="inner xlarge-inner center-text">
    <h1 class="hulk semi-bold bottom-margin-sm">How it works</h1>
    <p class="large bottom-margin-md">The messaging platform that scales personalisation.</p>
    <a class="btn btn-large btn-success" href="">Start a trial</a>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner center-text">
    <h2 class="chunk semi-bold bottom-margin-sm">Automation scales when you can't</h2>
    <p class="medium">Your customers never sleep&mdash;they're 24/7, 365, global. Use automation to extend your team and help more customers, more often.</p>
  </div>
  <div class="inner">
    <ul class="unstyled-list flex">
      <li><button>Workflows</button></li>
      <li><button>Recurring newsletter</button></li>
    </ul>

    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">Workflows</h3>

        <p class="medium">Automatically trigger workflows based on customer activity, automate decisions and trigger messages across multiple channels, all with our beautiful drag-and-drop UI.</p>

        <a href="/worksflows">Learn more</a>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main lg-order-2">
        <h3 class="tubs semi-bold">Recurring newsletter</h3>
        <p class="medium">Whether it's a weekly summary, a daily news feed or the latest products, use recurring newsletters in conjunction with dynamic segmentation for powerful results.</p>
      </div>
      <div class="col-aside lg-order-1">
        <p class="medium">Image</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner">
    <h2 class="chunk semi-bold bottom-margin-sm">Customers, not <strong>lists</strong></h2>
    <p class="medium">Create one, rich, central view of each customer. Reduce duplication, create audiences faster and have confidence in what your customers are seeing.</p>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">Custom attributes</h3>

        <p class="medium">Use attributes to store customer inputs, demographic data, subscription preferences.</p>

        <a href="/event-manager">Learn more</a>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main lg-order-1">
        <p>Image</p>
      </div>
      <div class="col-aside lg-order-2">
        <h3 class="tubs semi-bold">Activity Tracking</h3>

        <p class="medium">Keep a record of what your customers do (and don't do) on both your site and in your product.</p>

        <p class="medium">Integrations along with our JavaScript, Ruby, Python and other libraries make powerful activity tracking simpler.</p>

        <a href="">Learn more</a>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">Dynamic newsfeed</h3>

        <p class="medium">Pull data at the time your message is sent from your own, or public, APIs and personalize what your customers see at a whole new level.</p>

        <a href="/fusion">Learn more</a>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner center-text">
    <h2 class="chunk semi-bold">A workflow the whole team can use to message customers</h2>
    <p class="medium">Separate message design from message code. An easy-to-use UI to create, edit and deploy messages to customers.</p>
  </div>
  <div class="inner">
    <ul class="unstyled-list flex">
      <li><button>Templates</button></li>
      <li><button>Personalize</button></li>
      <li><button>Multi-language</button></li>
    </ul>

    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">Templates</h3>
        <p class="medium">Manage email designs centrally and synchronise changes to automated campaigns instantly.</p>
        <p class="medium">Include point-and-click regions to make creating and editing emails a safe and on-brand experience.</p>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main lg-order-2">
        <h3 class="tubs semi-bold">Personalize emails with dynamic data and templating</h3>
        <p class="medium">Bring the full power of the Liquid templating language to your campaigns and ensure your emails are personal.</p>
        <p class="medium">Make including dynamic data like <code class="language-liquid">first_name</code> and <code class="language-liquid">last_name</code> a breeze. Use powerful <code class="language-liquid">if</code>, <code class="language-liquid">else</code> and case` statements to fully customise content or templates.</p>
      </div>
      <div class="col-aside lg-order-1">
        <p>Image</p>
      </div>
    </div>
  </div>
  <div class="inner">
    <div class="w-sidebar w-sidebar--feature-default">
      <div class="col-main">
        <h3 class="tubs semi-bold">Talk to customers in their language</h3>
        <p class="medium">Create a variant in any language, for any message campaign.</p>

        <p class="medium bottom-margin-lg">Vero automatically sends each customer the right language variant, wherever it's available.</p>

        <a class="medium" href="/multi-language-campaigns">Learn more</a>
      </div>
      <div class="col-aside">
        <p>Image</p>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner tiny-inner">
    <h2 class="chunk semi-bold">Iterate on and A/B test your messages</h2>
    <p class="medium">Don't guess what works: test it. Built-in tools to test one-off and automated campaigns.</p>
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