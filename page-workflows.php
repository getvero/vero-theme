<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="overflow-hidden" id="workflows-hero">
  <div class="inner large-inner flex flex-column md-flex-row bottom-padding-medium">
    <div class="relative col-main secondary">
      <h1 class="hulk bottom-margin-small semi-bold">Workflows</h1>
      <p class="no-top-margin bottom-margin-medium chunk">A better way to design, manage and optimize email and push campaigns</p>
      <a href="http://app.getvero.com/signup" class="btn btn-success btn-large">Try it out</a>
    </div>
    <div class="workflows-hero-bg">
      <img class="zig" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/zig.svg" data-parallax='{"y" : 230}' alt="Workflows - A visual way to build your automated campaigns 1">
      <img class="circle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/circle.svg"  data-parallax='{"y" : -100}' alt="Workflows - A visual way to build your automated campaigns 2">
      <img class="waves" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/waves.svg" data-parallax='{"y" : -300}' alt="Workflows - A visual way to build your automated campaigns 3">
      <img class="lines" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/lines.svg"  data-parallax='{"y" : -350}' alt="Workflows - A visual way to build your automated campaigns 4">
      <img class="dots hide-on-mobile" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/dots.svg"  data-parallax='{"y" : 100}' alt="Workflows - A visual way to build your automated campaigns 5">
    </div>
    <div class="relative col-aside primary">
      <picture>
        <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero-mobile.webp, /wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero-mobile@2x.webp 2x" type="image/webp">
        <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero-mobile.png, /wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero-mobile@2x.png 2x" type="image/png">
        <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero.webp, /wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero@2x.webp 2x" type="image/webp">
        <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero.png, /wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero@2x.png 2x" type="image/png">
        <img class="center-text show" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/hero@2x.png 2x"  alt="Workflows - A visual way to build your automated campaigns 6">
      </picture>
    </div>
  </div>

</section>
<section id="workflows-hero-features" class="double-padding">
  <div class="inner medium-inner">
    <ul class="feature-list unstyled-list grid grid-auto">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-waves.svg" alt="Flexibility">

        <div>
          <h3 class="chunk semi-bold bottom-margin-small">Flexibility</h3>
          <p class="medium">Steps can be moved around, so you can easily design and update the order of logic, delays, and emails in your customer journey.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-circles.svg" alt="Clarity">

        <div>
          <h3 class="chunk semi-bold bottom-margin-small">Clarity</h3>
          <p class="medium">Configuration of each step in the workflow is immediately visible, giving you and your team confidence to quickly create and update journeys.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-dots.svg" alt="Visibility">

        <div>
          <h3 class="chunk semi-bold bottom-margin-small">Visibility</h3>
          <p class="medium">Track customers who enter and exit your workflow, monitor email performance and view conversion goals - all in one place. </p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-zigs.svg" alt="Customization">

        <div>
          <h3 class="chunk semi-bold bottom-margin-small">Customization</h3>
          <p class="medium">All the tools you need to customize messages and journeys so your customers receive the right message at the right time.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="workflows-ui-nodes" class="feature-section double-padding bg-offwhite">
  <div class="inner large-inner">
    <div class="flex-inner">
      <div class="left center-text primary">
        <img class="responsive-image menu" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/add-menu-wide.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/add-menu-wide@2x.png 2x" alt="All the tools you need to move quickly 1">
        <img class="dots" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/smallish-dots.svg" data-parallax='{"y" : 100}' alt="All the tools you need to move quickly 3">
      </div>
      <div class="right secondary">
        <h2 class="biggie semi-bold">All the tools you need to move quickly</h2>
        <p class="large bottom-margin-medium">Workflows help you visualize your customers’ email experience as you build it. With all the tools you need in one place, you and your team can quickly and confidently create and update complex customer journeys.</p>

        <a class="medium pill pill-primary" href="https://help.getvero.com/articles/creating-a-new-workflow.html" target="_blank">Read the documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="workflows-reasons" class="feature-section double-padding">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie semi-bold bottom-margin-large">Build engaging campaigns and reach your goals!</h2>
  </div>
  <div class="inner large-inner halfs flush-top top-padding-medium">
    <div class="left secondary">
      <ul class="feature-list left-align unstyled-list">
        <li>
          <img class="padding-tiny" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/onboarding.svg" width="50" height="50" alt="Onboard new users">
          <div>
            <h2 class="micro regular bottom-margin-tiny">Onboard new users</h2>
            <p class="medium desc">Welcome, engage and help your customers gain value from your offering.</p>
          </div>
        </li>
        <li>
          <img class="padding-tiny" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/engagement.svg" width="50" height="50" alt="Increase engagement">
          <div>
            <h2 class="micro regular bottom-margin-tiny">Increase engagement</h2>
            <p class="medium desc">Use real-time data to send your customers helpful messages, at exactly the right moment.</p>
          </div>
        </li>
        <li>
          <img class="padding-tiny" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/recapture.svg" width="50" height="50" alt="Improve customer retention">
          <div>
            <h2 class="micro regular bottom-margin-tiny">Improve customer retention</h2>
            <p class="medium desc">Deliver your customers valuable content and reasons to engage with your product.</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/examples.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/examples@2x.png 2x" class="center-text show small-responsive-image" alt="Build engaging campaigns and reach your goals">
    </div>
  </div>
</section>
<section id="workflows-details" class="feature-section double-padding bg-offwhite">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie semi-bold bottom-margin-large">We've got the details covered</h2>
  </div>
  <div class="inner large-inner flush-top">
    <ul class="unstyled-list feature-list grid grid-auto">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/conversion.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/conversion@2x.png 2x" class="show responsive-image bottom-margin-small" alt="Conversion Goals">
        <h3 class="micro regular bottom-margin-tiny">Conversion Goals</h3>
        <p class="desc top-margin-tiny bottom-margin-small">Set a goal and easily track the success of your workflow.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/insights.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/insights@2x.png 2x" class="show responsive-image bottom-margin-small" alt="Insights">
        <h3 class="micro regular bottom-margin-tiny">Insights</h3>
        <p class="desc top-margin-tiny bottom-margin-small">Monitor the performance of your workflow and quickly identify opportunities for optimization.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/dragdrop.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/dragdrop@2x.png 2x" class="show responsive-image bottom-margin-small" alt="Drag and drop">
        <h3 class="micro regular bottom-margin-tiny">Drag and Drop</h3>
        <p class="desc top-margin-tiny bottom-margin-small">All steps can be easily moved around, giving you full control over the order of logic, delays, and emails.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/preferredtime.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/preferredtime@2x.png 2x" class="show responsive-image bottom-margin-small" alt="Send at a preferred time">
        <h3 class="micro regular bottom-margin-tiny">Send at a preferred time</h3>
        <p class="desc top-margin-tiny bottom-margin-small">Deliver emails at a specified time in the customer's timezone.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/transactionals.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/transactionals@2x.png 2x" class="show responsive-image bottom-margin-small" alt="Transactional emails">
        <h3 class="micro regular bottom-margin-tiny">Transactional Emails</h3>
        <p class="desc top-margin-tiny bottom-margin-small">Override unsubscribes for important account servicing messages, such as requested password reset emails.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/abtesting.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/abtesting@2x.png 2x" class="show responsive-image bottom-margin-small" alt="A/B testing">
        <h3 class="micro regular bottom-margin-tiny">A/B Testing (coming soon)</h3>
        <p class="desc top-margin-tiny bottom-margin-small">Easily set up, monitor and roll out successful A/B tests in workflows.</p>
      </li>
    </ul>
  </div>
</section>
<section class="cta border-dark-blue bg-white center-text">
  <div class="cta-wrap">
    <h4 class="regular bottom-margin-smedium">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-smedium" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>