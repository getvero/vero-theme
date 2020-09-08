<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="overflow-hidden" id="workflows-hero" banner-name="Workflows" element-position="top">
  <div class="inner large-inner flex flex-column md-flex-row bottom-padding-lg">
    <div class="relative col-main secondary">
      <h1 class="hulk bottom-margin-sm semi-bold">Workflows</h1>
      <p class="no-top-margin bottom-margin-lg chunk">A better way to design, manage and optimize email and push campaigns</p>
      <a class="btn btn--success btn--large track-start-trial" element-position="top"  href="https://app.getvero.com/signup" >Try it out</a>
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
    <ul class="feature-list unstyled-list grid grid-halfs">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-waves.svg" alt="Flexibility">

        <div>
          <h3 class="chunk semi-bold bottom-margin-sm">Flexibility</h3>
          <p class="medium">Steps can be moved around, so you can easily design and update the order of logic, delays, and emails in your customer journey.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-circles.svg" alt="Clarity">

        <div>
          <h3 class="chunk semi-bold bottom-margin-sm">Clarity</h3>
          <p class="medium">Configuration of each step in the workflow is immediately visible, giving you and your team confidence to quickly create and update journeys.</p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-dots.svg" alt="Visibility">

        <div>
          <h3 class="chunk semi-bold bottom-margin-sm">Visibility</h3>
          <p class="medium">Track customers who enter and exit your workflow, monitor email performance and view conversion goals - all in one place. </p>
        </div>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/small-zigs.svg" alt="Customization">

        <div>
          <h3 class="chunk semi-bold bottom-margin-sm">Customization</h3>
          <p class="medium">All the tools you need to customize messages and journeys so your customers receive the right message at the right time.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="workflows-ui-nodes" class="double-padding bg-offwhite">
  <div class="inner large-inner">
    <div class="flex-inner">
      <div class="left center-text primary">
        <img class="responsive-image menu" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/add-menu-wide.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/add-menu-wide@2x.png 2x" alt="All the tools you need to move quickly 1">
        <img class="dots" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/smallish-dots.svg" data-parallax='{"y" : 100}' alt="All the tools you need to move quickly 3">
      </div>
      <div class="right secondary">
        <h2 class="biggie semi-bold">All the tools you need to move quickly</h2>
        <p class="large bottom-margin-lg">Workflows help you visualize your customers’ email experience as you build it. With all the tools you need in one place, you and your team can quickly and confidently create and update complex customer journeys.</p>

        <a class="medium pill pill--primary" href="https://help.getvero.com/articles/creating-a-new-workflow.html" target="_blank">Read the documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="workflows-reasons" class="double-padding">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie semi-bold bottom-margin-xl">Build engaging campaigns and reach your goals!</h2>
  </div>
  <div class="inner large-inner halfs flush-top top-padding-lg">
    <div class="left secondary">
      <ul class="feature-list left-align unstyled-list">
        <li>
          <img class="padding-tiny" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/onboarding.svg" width="50" height="50" alt="Onboard new users">
          <div>
            <h2 class="micro regular bottom-margin-xs">Onboard new users</h2>
            <p class="medium desc">Welcome, engage and help your customers gain value from your offering.</p>
          </div>
        </li>
        <li>
          <img class="padding-tiny" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/engagement.svg" width="50" height="50" alt="Increase engagement">
          <div>
            <h2 class="micro regular bottom-margin-xs">Increase engagement</h2>
            <p class="medium desc">Use real-time data to send your customers helpful messages, at exactly the right moment.</p>
          </div>
        </li>
        <li>
          <img class="padding-tiny" src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/recapture.svg" width="50" height="50" alt="Improve customer retention">
          <div>
            <h2 class="micro regular bottom-margin-xs">Improve customer retention</h2>
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
<section id="workflows-details" class="double-padding bg-offwhite">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie semi-bold bottom-margin-xl">We've got the details covered</h2>
  </div>
  <div class="inner large-inner flush-top">
    <ul class="unstyled-list feature-list grid grid-auto">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/conversion.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/conversion@2x.png 2x" class="show responsive-image bottom-margin-sm" alt="Conversion Goals">
        <h3 class="micro regular bottom-margin-xs">Conversion Goals</h3>
        <p class="desc top-margin-xs bottom-margin-sm">Set a goal and easily track the success of your workflow.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/insights.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/insights@2x.png 2x" class="show responsive-image bottom-margin-sm" alt="Insights">
        <h3 class="micro regular bottom-margin-xs">Insights</h3>
        <p class="desc top-margin-xs bottom-margin-sm">Monitor the performance of your workflow and quickly identify opportunities for optimization.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/dragdrop.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/dragdrop@2x.png 2x" class="show responsive-image bottom-margin-sm" alt="Drag and drop">
        <h3 class="micro regular bottom-margin-xs">Drag and Drop</h3>
        <p class="desc top-margin-xs bottom-margin-sm">All steps can be easily moved around, giving you full control over the order of logic, delays, and emails.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/preferredtime.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/preferredtime@2x.png 2x" class="show responsive-image bottom-margin-sm" alt="Send at a preferred time">
        <h3 class="micro regular bottom-margin-xs">Send at a preferred time</h3>
        <p class="desc top-margin-xs bottom-margin-sm">Deliver emails at a specified time in the customer's timezone.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/transactionals.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/transactionals@2x.png 2x" class="show responsive-image bottom-margin-sm" alt="Transactional emails">
        <h3 class="micro regular bottom-margin-xs">Transactional Emails</h3>
        <p class="desc top-margin-xs bottom-margin-sm">Override unsubscribes for important account servicing messages, such as requested password reset emails.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/abtesting.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/workflows/abtesting@2x.png 2x" class="show responsive-image bottom-margin-sm" alt="A/B testing">
        <h3 class="micro regular bottom-margin-xs">A/B Testing (coming soon)</h3>
        <p class="desc top-margin-xs bottom-margin-sm">Easily set up, monitor and roll out successful A/B tests in workflows.</p>
      </li>
    </ul>
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="top">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form home-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
      action="https://formkeep.com/f/5401a0ae5cb8"
      accept-charset="UTF-8"
      enctype="multipart/form-data"
      method="POST">

      <div class="flex flex-column sm-flex-row">
        <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

        <input class="btn btn--success btn--medium track-start-trial" element-position="bottom" type="submit" name="submit" value="Start a free trial">

        <input class="btn underline-link track-contact-us" element-position="bottom" type="submit" name="talk_to_us" value="Schedule a demo">
      </div>

      <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
    </form>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>