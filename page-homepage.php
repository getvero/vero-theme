<?php
  include 'pages-shared/static-header.php';
?>
<section class="double-padding overflow-hidden" id="hero">
  <?php
    do_action( 'genesis_header' );
    do_action( 'genesis_after_header' );
  ?>
  <div class="inner xlarge-inner">
    <div class="flex flex-column md-flex-row">
      <div class="col-main center-text md-left-text">
        <h1 class="hulk bottom-margin-small home-title">Create better customer experiences</h1>

        <p class="large bottom-margin-medium">The messaging platform that helps you drive customer engagement and grow your business</p>

        <div class="flex flex-wrap md-flex-nowrap items-center">
          <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>

          <span class="d-inline-block faded horizontal-margin-tiny hide md-show">or</span>

          <a class="btn btn-primary btn-outline btn-large" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
        </div>
      </div>
      <div class="col-aside relative">
        <picture>
          <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/images/home/home-hero-mobile.png 1x, /wp-content/themes/vero/assets/images/home/home-hero-mobile@2x.png 2x">
          <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/images/home/home-hero.png 1x, /wp-content/themes/vero/assets/images/home/home-hero@2x.png 2x">
          <img class="" src="/wp-content/themes/vero/assets/images/home/home-hero.png" alt="Sreengrab of Workflows UI">
        </picture>
      </div>
    </div>
  </div>
</section>
<section class="logos" id="logos">
  <div class="inner xlarge-inner flush-top bottom-padding-smedium center-text border-bottom-light">
    <h2 class="micro regular faded bottom-margin-smedium">Trusted by leading brands</h2>

    <ul class="unstyled-list logo-list flex flex-column md-flex-row justify-around">
      <li class="flex justify-center logo-list-item no-margin">
        <a href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" alt="Unsplash logo">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://tidal.com">
          <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-tidal.svg" alt="Tidal logo">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://monzo.com">
          <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-monzo.svg" alt="Monzo logo">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://about.me">
          <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-aboutme.svg" alt="about.me logo">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-helloprint.svg" alt="Helloprint logo">
        </a>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <header class="section-header bottom-margin-large center-text">
      <h2 class="chunk regular bottom-margin-tiny">Design and manage automated messages throughout the entire customer lifecycle</h2>
    </header>
    <div class="grid grid-thirds center-text">
      <a class="d-block padding-small md-padding-smedium border-light border-radius-2 bg-white unstyled cta-arrow-link" href="/empower/">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-empower.svg" alt="React logo">

        <h3 class="micro semi-bold bottom-margin-micro">Empower your team</h3>

        <p>Empower your marketing team to create and test customer experiences using real-time data.</p>

        <!-- <span class="semi-bold unstyled underline-link">Learn more

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </span> -->
      </a>
      <a class="d-block padding-small md-padding-smedium border-light border-radius-2 bg-white unstyled cta-arrow-link" href="/engage-customers/">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage logo">

        <h3 class="micro semi-bold bottom-margin-micro">Engage customers</h3>

        <p>Send email and push notifications that drive customer engagement and increase revenue.</p>

        <!-- <span class="semi-bold unstyled underline-link">Learn more

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </span> -->
      </a>
      <a class="d-block padding-small md-padding-smedium border-light border-radius-2 bg-white unstyled cta-arrow-link" href="/coordinate-experiences/">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-coordinate.svg" alt="Co-ordinate logo">

        <h3 class="micro semi-bold bottom-margin-micro">Co-ordinate messaging</h3>

        <p>Create and manage emails, push notifications and custom interactions on a single canvas.</p>

        <!-- <span class="semi-bold unstyled underline-link">Learn more

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </span> -->
      </a>
    </div>
  </div>
</section>
<!--
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="flex flex-wrap">
      <div class="js-showcase-carousel-navigation showcase-carousel-navigation"></div>

      <div class="js-showcase-carousel showcase-carousel">
        <div class="js-showcase-item"
          data-title="Workflows"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Native and CDP data integrations</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Integrations"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Unique customer profiles</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Customer profiles"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Workflows</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Segmentation"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Segmentation</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Data management"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Email</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Email"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">iOS/Android push</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Push notifications"
          data-desc="Lorem ipsum dolor sit, amett…"
        >
        </div>
        <div class="js-showcase-item"
          data-title="Personalization"
        >
        </div>
        <div class="js-showcase-item"
          data-title="A/B testing"
        >
          <h2 class="tubs regular">A/B testing</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Reporting"
          data-desc="Lorem ipsum dolor sit, amett…"
        >
          <h2 class="tubs regular">Reporting</h2>
          <div class="bg-gray-lighter" style="height: 400px;"></div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<section class="bg-offwhite bg-shapes bg-center overflow-visible">
  <div class="inner xlarge-inner center-text md-left-text">
    <h2 class="tubs regular bottom-margin-smedium jump-link" id="customers">What people have said about Vero</h5>

    <div class="flex items-center justify-center">
      <div class="customer-scroll flex flex-wrap smd-flex-nowrap overflow-x-scroll">
        <blockquote class="bg-white padding-small border-radius-2 border-light flex flex-wrap md-flex-nowrap customer-quote">
          <div class="col-aside right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/luke-chesser.jpg" srcset="/wp-content/themes/vero/assets/images/customers/luke-chesser@2x.jpg 2x" alt="Luke Chesser">
          </div>

          <div class="col-main">
            <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" height="70" alt="Unsplash">

            <p class="medium">"Four amazing services that make Unsplash possible with a small team: Heroku, Stream, Imgix, &amp; Vero."</p>

            <a class="d-block semi-bold unstyled" href="https://twitter.com/lukechesser/status/892448177697292289?ref_src=twsrc%5Etfw" target="_blank">Luke Chesser</a>
            <span>Cofounder at Unsplash</span>
          </div>
        </blockquote>

        <blockquote class="bg-white padding-small border-radius-2 border-light flex flex-wrap md-flex-nowrap customer-quote">
          <div class="col-aside right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/julien-catani.jpg" srcset="/wp-content/themes/vero/assets/images/customers/julien-catani@2x.jpg 2x" alt="Julien Catani">
          </div>

          <div class="col-main">
            <img class="self-center"
            src="/wp-content/themes/vero/assets/images/home/logos/v4/home-helloprint.svg" height="70" alt="Helloprint">

            <p class="medium">"Vero enables us to use real-time data to enrich our emails with relevant content to drive a higher ROI."</p>

            <a class="d-block semi-bold unstyled" href="https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/" target="_blank">Julien Catani</a>
            <span>Head of CRM at Helloprint</span>
          </div>
        </blockquote>

        <blockquote class="bg-white padding-small border-radius-2 border-light flex flex-wrap md-flex-nowrap customer-quote">
          <div class="col-aside right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/nathan-field.jpg" srcset="/wp-content/themes/vero/assets/images/customers/nathan-field@2x.jpg 2x" alt="Nathan Field">
          </div>

          <div class="col-main">
            <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" height="70" alt="Unsplash">

            <p class="medium">"Heck! Vero's support is exceptional!"</p>

            <a class="d-block semi-bold unstyled" href="https://twitter.com/nathfield/status/909951597500817409?ref_src=twsrc%5Etfw" target="_blank">Nathan Field</a>
            <span>Head of Marketing at Drawboard</span>
          </div>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner center-text">
    <div class="donut horizontal-margin-auto bottom-margin-tiny">
      <div>
        <span class="biggie semi-bold font-brand-success">95%</span>
        <span class="d-block annotation horizontal-margin-medium">Customer happiness rating</span>
      </div>
      <img src="/wp-content/themes/vero/assets/images/home/donut.svg" alt="95% donut shape">
    </div>

    <p class="annotation bottom-margin-medium faded">Based on last 6 months of support ratings</p>

    <header class="section-header center bottom-margin-medium">
      <p class="large">Our global support team is on hand to help 24 hours a day. We have dedicated support team members in Australia, Europe, and the USA</p>
    </header>
  </div>
</section>
<?php
  include 'pages-shared/footer-cta.php';
?>
<?php
  no_content_genesis_footer();
  include("demo-enquiry-form.php");
?>
