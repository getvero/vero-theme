<?php
  include 'pages-shared/static-header.php';
?>

<section class="double-padding" id="hero">
  <?php
    do_action( 'genesis_before_header' );
    do_action( 'genesis_header' );
    do_action( 'genesis_after_header' );
  ?>
  <div class="inner xlarge-inner">
    <div class="grid intro intro-left relative">
      <h1 class="hulk bottom-margin-small home-title">Create a better customer experience</h1>

      <img class="absolute responsive-image" src="/wp-content/themes/vero/assets/images/home/home-hero.svg" alt="">

      <p class="large bottom-margin-medium">Vero helps engineering, product, and marketing teams create and manage automated messages and improve human interactions.</p>

      <div class="intro-footer nav-intro">
        <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="medium regular underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding logos" id="logos">
  <div class="inner xlarge-inner flush-top bottom-padding-medium center-text">
    <h2 class="micro regular faded">Trusted by fast-growing teams, globally</h2>

    <div class="grid grid-full">
      <ul class="unstyled-list logo-list flex justify-around" style="grid-column: 2 / span 8;">
        <li class="flex logo-list-item no-margin">
          <a class="flex self-stretch" href="https://unsplash.com">
            <img class="center" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-unsplash.svg" alt="Unsplash">
          </a>
        </li>
        <li class="flex logo-list-item no-margin">
          <a class="flex self-stretch" href="http://tidal.com">
            <img class="center" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-tidal.svg" alt="Tidal">
          </a>
        </li>
        <li class="flex logo-list-item no-margin">
          <a class="flex self-stretch" href="http://monzo.com">
            <img class="center" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-monzo.svg" alt="Monzo">
          </a>
        </li>
        <li class="flex logo-list-item no-margin">
          <a class="flex self-stretch" href="http://about.me">
            <img class="center" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-aboutme.svg" alt="about.me">
          </a>
        </li>
        <li class="flex logo-list-item no-margin">
          <a class="flex self-stretch" href="http://helloprint.co.uk">
            <img class="center" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-helloprint.svg" alt="Helloprint">
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="bg-dark-blue" id="social-proof">
  <div class="inner large-inner">
    <blockquote class="grid grid-full relative font-white">
      <div class="col-main">
        <p class="large">&ldquo;We push all of our behavioural events to Vero, an email marketing and notification platform, that moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights.&rdquo;</p>

        <span class="medium d-block semi-bold">Luke Chesser</span>
        <span class="medium d-block">CPO and Co-founder at Unsplash</span>
      </div>
    </blockquote>
  </div>
</section>
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
<section class="bg-offwhite">
  <div class="inner large-inner">
    <header class="section-header center center-text">
      <h2 class="chunk regular bottom-margin-large">Design automated messages and improve human interactions</h2>
    </header>
    <div class="grid grid-thirds">
      <div class="padding-xsmall border-light border-radius-10 bg-white">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage logo">

        <h3 class="micro semi-bold">Engage customers</h3>

        <p class="medium">Use real-time data to design and send personalized customer emails and push notifications.</p>

        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
      <div class="padding-xsmall border-light border-radius-10 bg-white">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-react.svg" alt="React logo">

        <h3 class="micro semi-bold">Stay informed</h3>

        <p class="medium">Alert and notify team members with the information they need to help customers take the next step.</p>

        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
    </div>
  </div>
</section>
<div class="bg-shapes bg-center">
  <section class="double-padding overflow-visible">
    <div class="inner large-inner">
      <h2 class="section-label uppercase bottom-margin-medium jump-link" id="customers">What people have said about Vero</h5>

      <div class="flex items-center justify-center">
        <div class="customer-scroll flex overflow-x-scroll">
          <blockquote class="bg-white padding-small border-radius-10 border-light flex customer-quote">
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

          <blockquote class="bg-white padding-small border-radius-10 border-light flex customer-quote">
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

          <blockquote class="bg-white padding-small border-radius-10 border-light flex customer-quote">
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
    <div class="inner large-inner flush-top center-text">
      <header class="section-header center bottom-margin-medium">
        <h2 class="chunk regular bottom-margin-tiny">24-hour support</h2>
        <p class="large">Our global team is on hand to help.</p>
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
          <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
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

      <a class="btn btn-primary" href="mailto:">Contact us</a>
    </div>
  </section>
</div>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="border-light border-radius-10 bg-white padding-large">
      <h3 class="chunk regular bottom-margin-small">Put your data first and craft better customer experiences</h3>
      <p class="medium">What is #customerops? Customer ops is about ensuring you always serve your customer the best way possible. In every interaction.</p>
      <a class="btn btn-large btn-success" href="https://app.getvero.com/signup">Start a free trial</a>
    </div>
  </div>
</section>
<section class="double-padding bg-gray-light">
  <div class="inner xlarge-inner">
    <div class="">
      <h3 class="chunk regular bottom-margin-small">Put your data first and craft better customer experiences</h3>
      <p class="medium">What is #customerops? Customer ops is about ensuring you always serve your customer the best way possible. In every interaction.</p>
      <a class="btn btn-large btn-success" href="https://app.getvero.com/signup">Start a free trial</a>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
  include("demo-enquiry-form.php");
?>
