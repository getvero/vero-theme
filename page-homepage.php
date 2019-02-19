<?php
  include 'pages-shared/static-header.php';
?>
<section class="double-padding overflow-hidden" id="hero">
  <?php
    do_action( 'genesis_before_header' );
    do_action( 'genesis_header' );
    do_action( 'genesis_after_header' );
  ?>
  <div class="inner xlarge-inner">
    <div class="flex flex-column md-flex-row">
      <div class="col-main">
        <h1 class="hulk bottom-margin-small home-title">Create better customer experiences</h1>

        <p class="large bottom-margin-medium">Email and communication platform for marketering and engineering teams. xxxxxx</p>

        <div class="flex intro-footer nav-intro">
          <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>

          <a class="btn btn-primary btn-outline btn-large md-left-margin-small" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
        </div>
      </div>
      <div class="col-aside">
        <img class="" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero@2x.png 2x">
      </div>
    </div>
  </div>
</section>
<section class="logos" id="logos">
  <div class="inner large-inner flush-top bottom-padding-xsmall center-text">
    <h2 class="micro regular faded">Trusted by fast-growing teams, globally</h2>

    <ul class="unstyled-list logo-list flex flex-column md-flex-row justify-around">
      <li class="flex logo-list-item no-margin">
        <a href="https://unsplash.com">
          <img class="faded" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" alt="Unsplash">
        </a>
      </li>
      <li class="flex logo-list-item no-margin">
        <a href="http://tidal.com">
          <img class="faded" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-tidal.svg" alt="Tidal">
        </a>
      </li>
      <li class="flex logo-list-item no-margin">
        <a href="http://monzo.com">
          <img class="faded" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-monzo.svg" alt="Monzo">
        </a>
      </li>
      <li class="flex logo-list-item no-margin">
        <a href="http://about.me">
          <img class="faded" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-aboutme.svg" alt="about.me">
        </a>
      </li>
      <li class="flex logo-list-item no-margin">
        <a href="http://helloprint.co.uk">
          <img class="faded" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-helloprint.svg" alt="Helloprint">
        </a>
      </li>
    </ul>
  </div>
</section>
<section class="bg-dark-blue small-padding" id="social-proof">
  <div class="inner xlarge-inner">
    <blockquote class="flex relative font-white">
      <div class="col-main quotation-marks">
        <p class="large quote">We push all of our behavioural events to Vero… that moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights.</p>

        <span class="medium d-block semi-bold">Luke Chesser</span>
        <span class="medium d-block">CPO and Co-founder at Unsplash</span>
      </div>
    </blockquote>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <header class="section-header bottom-margin-large center-text">
      <h2 class="chunk regular bottom-margin-tiny">Design automated messages and improve human interactions</h2>
      <p class="large">Duis aute irure dolor in reprehenderit in. xxxxxx</p>
    </header>
    <div class="grid grid-thirds center-text">
      <a class="d-block padding-xsmall border-light border-radius-2 bg-white unstyled cta-arrow-link" href="/engage-customers/">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage logo">

        <h3 class="micro semi-bold">Engage customers</h3>

        <p>Send email and push notifications that drive customer engagement and increase revenue.</p>

        <span class="semi-bold unstyled underline-link">Learn more

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </span>
      </a>
      <a class="d-block padding-xsmall border-light border-radius-2 bg-white unstyled cta-arrow-link" href="/coordinate-experiences/">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-coordinate.svg" alt="Co-ordinate logo">

        <h3 class="micro semi-bold">Co-ordinate experiences</h3>

        <p>Easily manage your customer journeys by unifying email and push notifications on a single canvas.</p>

        <span class="semi-bold unstyled underline-link">Learn more

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </span>
      </a>
      <a class="d-block padding-xsmall border-light border-radius-2 bg-white unstyled cta-arrow-link" href="/empower/">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-empower.svg" alt="React logo">

        <h3 class="micro semi-bold">Empower your team</h3>

        <p>Empower your marketing team to create and test customer experiences using real-time data.</p>

        <span class="semi-bold unstyled underline-link">Learn more

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </span>
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
<section class="double-padding bg-offwhite bg-shapes bg-center overflow-visible">
  <div class="inner xlarge-inner">
    <h2 class="tubs regular bottom-margin-medium jump-link" id="customers">What people have said about Vero</h5>

    <div class="flex items-center justify-center">
      <div class="customer-scroll flex overflow-x-scroll">
        <blockquote class="bg-white padding-small border-radius-2 border-light flex customer-quote">
          <div class="right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/luke-chesser.jpg" srcset="/wp-content/themes/vero/assets/images/customers/luke-chesser@2x.jpg 2x" alt="Luke Chesser">
          </div>

          <div>
            <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" height="70" alt="Unsplash">

            <p class="bottom-margin-small">"Four amazing services that make Unsplash possible with a small team: Heroku, Stream, Imgix, &amp; Vero."</p>

            <a class=" d-block annotation semi-bold" href="            https://twitter.com/lukechesser/status/892448177697292289?ref_src=twsrc%5Etfw" target="_blank">Luke Chesser</a>
            <span class="annotation">Cofounder at Unsplash</span>
          </div>
        </blockquote>

        <blockquote class="bg-white padding-small border-radius-2 border-light flex customer-quote">
          <div class="right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/julien-catani.jpg" srcset="/wp-content/themes/vero/assets/images/customers/julien-catani@2x.jpg 2x" alt="Julien Catani">
          </div>

          <div>
            <img class="self-center"
            src="/wp-content/themes/vero/assets/images/home/logos/v4/home-helloprint.svg" height="70" alt="Helloprint">

            <p class="bottom-margin-small">"Vero enables us to use real-time data to enrich our emails with relevant content to drive a higher ROI."</p>

            <a class=" d-block annotation semi-bold" href="              https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/" target="_blank">Julien Catani</a>
            <span class="annotation">Head of CRM at Helloprint</span>
          </div>
        </blockquote>

        <blockquote class="bg-white padding-small border-radius-2 border-light flex customer-quote">
          <div class="right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/nathan-field.jpg" srcset="/wp-content/themes/vero/assets/images/customers/nathan-field@2x.jpg 2x" alt="Nathan Field">
          </div>

          <div>
            <img src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" height="70" alt="Unsplash">

            <p class="bottom-margin-small">"Heck! Vero's support is exceptional!"</p>

            <a class=" d-block annotation semi-bold" href="https://twitter.com/nathfield/status/909951597500817409?ref_src=twsrc%5Etfw" target="_blank">Nathan Field</a>
            <span class="annotation">Head of Marketing at Drawboard</span>
          </div>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding" id="support">
  <div class="inner large-inner center-text">
    <header class="section-header center bottom-margin-medium">
      <h2 class="chunk regular bottom-margin-tiny">24-hour support</h2>
      <p class="large">Our global team is on hand to help</p>
    </header>

    <div class="flex justify-center bottom-margin-medium">
      <div>
        <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
        <span class=" d-block annotation">Reba</span>
      </div>
      <div>
        <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
        <span class=" d-block annotation">Ellis</span>
      </div>
      <div>
        <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-rae.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-rae@2x.png 2x" alt="Rae">
        <span class=" d-block annotation">Rae</span>
      </div>
      <div>
        <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
        <span class=" d-block annotation">Eric</span>
      </div>
    </div>

    <div class="bar bg-gray-lighter bottom-margin-small">
      <div class="bg-primary flex flex-column items-center justify-center" style="height: 100%; width: 97.5%">
        <span class="d-block micro semi-bold font-white">97.5%</span>
        <p class="d-block annotation font-white">Customer happiness rating</p>
      </div>
    </div>

    <p class="annotation faded">Customer feedback gathered through Help Scout over the past 60 days.</p>
  </div>
</section>
<?php
  include 'pages-shared/footer-cta.php';
?>
<?php
  no_content_genesis_footer();
  include("demo-enquiry-form.php");
?>
