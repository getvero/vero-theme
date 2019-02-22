<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>


<section id="workflows-hero">
  <div class="inner large-inner halfs bottom-padding-medium right-padding-medium left-padding-medium">
    <div class="left secondary">
      <p class="semi-bold smallish font-brand-primary introducing">Introducing</p>
      <h1 class="hulk bottom-margin-small semi-bold">Workflows</h1>
      <p class="no-top-margin bottom-margin-medium largest">A visual way to build your automated campaigns</p>
      <a href="http://app.getvero.com/signup" class="btn btn-success btn-large btn-wide">Try it out</a>
    </div>
    <div class="workflows-hero-bg">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/zig.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/zig@2x.png 2x" class="zig" data-parallax='{"y" : 230}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/circle.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/circle@2x.png 2x" class="circle" data-parallax='{"y" : -100}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/waves.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/waves@2x.png 2x" class="waves" data-parallax='{"y" : -300}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/lines.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/lines@2x.png 2x" class="lines" data-parallax='{"y" : -350}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/dots@2x.png 2x" class="dots hide-on-mobile" data-parallax='{"y" : 100}'>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero@2x.png 2x" class="center-text  d-block">
    </div>
  </div>

</section>
<section id="workflows-hero-features" class="double-padding">
  <div class="inner medium-inner">
    <ul class="feature-list unstyled-list halfs">
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-waves.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-waves@2x.png 2x"></div><div><h2 class="chunk semi-bold bottom-margin-small">Flexibility</h2><p class="medium light no-top-margin">Steps can be moved around, so you can easily design and update the order of logic, delays, and emails in your customer journey.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-circles.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-circles@2x.png 2x"></div><div><h2 class="chunk semi-bold bottom-margin-small">Clarity</h2><p class="medium light no-top-margin">Configuration of each step in the workflow is immediately visible, giving you and your team confidence to quickly create and update journeys.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-dots@2x.png 2x"></div><div><h2 class="chunk semi-bold bottom-margin-small">Visibility</h2><p class="medium light no-top-margin">Track customers who enter and exit your workflow, monitor email performance and view conversion goals - all in one place. </p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-zigs.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-zigs@2x.png 2x"></div><div><h2 class="chunk semi-bold bottom-margin-small">Customization</h2><p class="medium light no-top-margin">All the tools you need to customize messages and journeys so your customers receive the right message at the right time.</p></div></li>
    </ul>
  </div>
</section>
<section id="workflows-ui-nodes" class="feature-section double-padding bg-offwhite">
  <div class="inner large-inner">
    <div class="flex-inner">
      <div class="left center-text primary">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/add-menu.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/add-menu@2x.png 2x" class="responsive-image menu">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-zig.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-zig@2x.png 2x" class="zig" data-parallax='{"y" : -100}'>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-dots@2x.png 2x" class="dots" data-parallax='{"y" : 100}'>
      </div>
      <div class="right secondary">
        <h2 class="biggie semi-bold">All the tools you need to move quickly</h2>
        <p class="large">Workflows help you visualize your customers’ email experience as you build it. With all the tools you need in one place, you and your team can quickly and confidently create and update complex customer journeys.</p>
        <p class="pill pill-medium pill-primary top-margin-small"><a href="https://help.getvero.com/articles/creating-a-new-workflow.html" target="_blank">Read the documentation</a></p>
      </div>
    </div>
  </div>
</section>
<!-- <section id="workflows-quotes" class="feature-section double-padding">
  <div class="inner halfs left-padding-large right-padding-large">
    <div class="left center-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/logo-example.png" srcset="" class=" d-inline-block bottom-margin-medium">
      <h3 class="italic">&quot;Awesome quote about this awesome new feature&quot;</h3>
      <p>Name, Position - Company</p>
    </div>
    <div class="right center-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/logo-example.png" srcset="" class=" d-inline-block bottom-margin-medium">
      <h3 class="italic">&quot;Awesome quote about this awesome new feature&quot;</h3>
      <p>Name, Position - Company</p>
    </div>
  </div>
</section> -->
<section id="workflows-reasons" class="feature-section double-padding">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie semi-bold bottom-margin-large">Build engaging campaigns and reach your goals!</h2>
  </div>
  <div class="inner large-inner halfs flush-top top-padding-medium">
    <div class="left secondary">
      <ul class="feature-list left-align unstyled-list">
        <li><img class="padding-tiny" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/onboarding.svg" width="50" height="50"><div><h2 class="micro regular bottom-margin-tiny">Onboard new users</h2><p class="medium desc">Welcome, engage and help your customers gain value from your offering.</p></div></li>
        <li><img class="padding-tiny" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/engagement.svg" width="50" height="50"><div><h2 class="micro regular bottom-margin-tiny">Increase engagement</h2><p class="medium desc">Use real-time data to send your customers helpful messages, at exactly the right moment.</p></div></li>
        <li><img class="padding-tiny" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/recapture.svg" width="50" height="50"><div><h2 class="micro regular bottom-margin-tiny">Improve customer retention</h2><p class="medium desc">Deliver your customers valuable content and reasons to engage with your product.</p></div></li>
      </ul>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/examples.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/examples@2x.png 2x" class="center-text  d-block small-responsive-image">
    </div>
  </div>
</section>
<section id="workflows-details" class="feature-section double-padding bg-offwhite">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie semi-bold bottom-margin-large">We've got the details covered</h2>
  </div>
  <div class="inner large-inner halfs flush-top">
    <ul class="unstyled-list feature-list thirds">
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/conversion.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/conversion@2x.png 2x" class=" d-block responsive-image bottom-margin-small"><h2 class="micro regular bottom-margin-tiny">Conversion Goals</h2><p class="desc top-margin-tiny bottom-margin-small">Set a goal and easily track the success of your workflow.
</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/insights.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/insights@2x.png 2x" class=" d-block responsive-image bottom-margin-small"><h2 class="micro regular bottom-margin-tiny">Insights</h2><p class="desc top-margin-tiny bottom-margin-small">Monitor the performance of your workflow and quickly identify opportunities for optimization.
</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/dragdrop.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/dragdrop@2x.png 2x" class=" d-block responsive-image bottom-margin-small"><h2 class="micro regular bottom-margin-tiny">Drag and Drop</h2><p class="desc top-margin-tiny bottom-margin-small">All steps can be easily moved around, giving you full control over the order of logic, delays, and emails.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/preferredtime.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/preferredtime@2x.png 2x" class=" d-block responsive-image bottom-margin-small"><h2 class="micro regular bottom-margin-tiny">Send at a preferred time</h2><p class="desc top-margin-tiny bottom-margin-small">Deliver emails at a specified time in the customer's timezone.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/transactionals.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/transactionals@2x.png 2x" class=" d-block responsive-image bottom-margin-small"><h2 class="micro regular bottom-margin-tiny">Transactional Emails</h2><p class="desc top-margin-tiny bottom-margin-small">Override unsubscribes for important account servicing messages, such as requested password reset emails.</p></div></li>
       <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/abtesting.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/abtesting@2x.png 2x" class=" d-block responsive-image bottom-margin-small"><h2 class="micro regular bottom-margin-tiny">A/B Testing (coming soon)</h2><p class="desc top-margin-tiny bottom-margin-small">Easily set up, monitor and roll out successful A/B tests in workflows.
</p></div></li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title chunk semi-bold bottom-margin-small">Start building your best campaigns today</h1>
    <p class="sub-heading">Create a free account, build your first workflow and see how Vero can help your team.</p>
    <a href="http://app.getvero.com/signup" class="btn btn-success btn-large btn-wide">Get Started</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>