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
      <h1 class="hulk bottom-margin-small home-title">Build a better customer experience</h1>

      <img class="absolute responsive-image" src="/wp-content/themes/vero/assets/images/home/home-hero.svg" alt="">

      <p class="large bottom-margin-medium">Everything you need to co-ordinate customer emails, messages and personal follow-ups.</p>

      <div class="intro-footer nav-intro">
        <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="medium regular underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding logos" id="logos">
  <div class="inner xlarge-inner flush-top">
    <h2 class="section-label bottom-margin-medium">Trusted worldwide</h2>

    <div class="bg-offwhite border-light border-radius-10 grid grid-halfs bottom-margin-medium">
      <ul class="unstyled-list padding-xsmall logo-list grid center-text">
        <li class="flex logo-list-item logo-list-item-top-cap no-margin">
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
          <a class="flex self-stretch" href="http://pipedrive.com">
            <img class="center" src="/wp-content/themes/vero/assets/images/home/logos/v4/home-pipedrive.svg" salt="Pipedrive">
          </a>
        </li>
        <li class="flex logo-list-item logo-list-item-bottom-cap no-margin">
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

      <blockquote class="bg-white padding-xsmall">
        <p class="large no-top-margin bottom-margin-xsmall">"…moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights."</p>

        <div class="flex">
          <div class="avatar-md right-margin-tiny">
            <img class="border-radius-100 responsive-image"src="/wp-content/themes/vero/assets/images/customers/luke-chesser.jpg" srcset="/wp-content/themes/vero/assets/images/customers/luke-chesser@2x.jpg 2x" alt="Luke Chesser">
          </div>

          <div class="customer-author">
            <span class="annotation  d-block"><strong>Luke Chesser</strong></span>
            <span class="annotation  d-block">Founder of Unsplash</span>
          </div>
        </div>
      </blockquote>
    </div>

    <a class="regular underline-link  d-block center-text" data-scroll href="#customers">See what our customers say</a>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="section-header center center-text bottom-margin-large">
      <h2 class="chunk regular bottom-margin-tiny">Our features</h2>
      <!-- <p class="large">Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci.</p> -->
    </div>

    <div class="flex flex-wrap">
      <div class="js-showcase-carousel-navigation showcase-carousel-navigation"></div>

      <div class="js-showcase-carousel showcase-carousel">
        <div class="js-showcase-item"
          data-title="Native and CDP data integrations"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Native and CDP data integrations</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Unique customer profiles"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Unique customer profiles</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Workflows"
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
          data-title="Email"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">Email</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="iOS/Android push"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular">iOS/Android push</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="A/B testing"
          data-desc="Lorem ipsum dolor sit, amett…"
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
<section class="bg-offwhite double-padding">
  <div class="inner xlarge-inner">
    <header class="section-header center center-text">
      <h2 class="chunk regular bottom-margin-large">Vero is perfect for digital-first teams</h2>
    </header>
    <div class="grid grid-thirds">
      <div class="padding-xsmall border-light border-radius-10 bg-white">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="">

        <h3 class="micro semi-bold">Engage</h3>

        <p class="medium">Design messages and personalise with your data to reach your customers with relevant information.</p>

        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
      <div class="padding-xsmall border-light border-radius-10 bg-white">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-assist.svg" alt="">

        <h3 class="micro semi-bold">Connect</h3>

        <p class="medium">Setup internal workflows and alerts tailored to your teams’ needs to help customers take the next step.</p>

        <a class="medium regular underline-link" href="#none">Learn more</a>
      </div>
    </div>
  </div>
</section>
<section class="double-padding border-bottom-light">
  <div class="inner">
    <h2 class="section-label bottom-margin-medium">Why you’ll love using Vero</h2>

    <div class="grid grid-halfs bottom-margin-xlarge">
      <img class="md-order-2 left-margin-auto" src="/wp-content/themes/vero/assets/images/home/home-everyone.png" srcset="/wp-content/themes/vero/assets/images/home/home-everyone@2x.png 2x" alt="Marketers and engineers">

      <div class="md-order-1">
        <h3 class="tubs regular bottom-margin-small">Beyond Messaging</h3>

        <p class="medium multi-measure">puisque id diam vel quam elementum pulvinar etiam non quam. Vitae congue eu consequat ac felis donec et. Eu sem integer vitae justo. Turpis egestas pretium aenean pharetra.</p>
        <p class="medium multi-measure">Risus feugiat in ante metus dictum. Ipsum a arcu cursus vitae congue. Ac tincidunt vitae semper quis lectus nulla at volutpat.</p>
      </div>
    </div>
    <div class="grid grid-halfs bottom-margin-xlarge items-center">
      <img src="/wp-content/themes/vero/assets/images/home/home-everyone.png" srcset="/wp-content/themes/vero/assets/images/home/home-everyone@2x.png 2x" alt="Marketers and engineers">

      <div class="left-margin-auto">
        <h3 class="tubs regular bottom-margin-small">For marketers and engineers alike</h3>
        <p class="medium multi-measure">Our tools are structured to help you get started quickly and scale as your team and company changes and grows.</p>
      </div>
    </div>
    <div class="grid grid-halfs">
      <img class="md-order-2 responsive-image" src="/wp-content/themes/vero/assets/images/home/home-data.svg" alt="Data">

      <div class="md-order-1">
        <h3 class="tubs regular bottom-margin-small">Works with your data, your way</h3>

        <p class="medium multi-measure">Tight integration with your core customer data is critical to sending effective and customer-friendly marketing, success and sales messages.</p>
        <p class="medium multi-measure">Vero was designed and built to shape around your customer data - to provide you with accuracy and flexibility.</p>
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
        <h2 class="chunk regular bottom-margin-tiny">Great support 24/7</h2>
        <p class="large">With team members spread around the world, Vero offers fast, reliable support 24/7&mdash;we're real humans.</p>
      </header>

      <div class="bar bg-gray-lighter bottom-margin-medium">
        <div class="bg-primary" style="height: 100%; width: 99%"></div>
      </div>

      <div class="flex justify-center bottom-margin-medium">
        <div>
          <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
          <span class=" d-block annotation">Reba</span>
        </div>
        <div>
          <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
          <span class=" d-block annotation">Reba</span>
        </div>
        <div>
          <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
          <span class=" d-block annotation">Reba</span>
        </div>
        <div>
          <img class="avatar avatar-lg border-radius-100" src="/wp-content/themes/vero/assets/images/home/support/home-reba.png" srcset="/wp-content/themes/vero/assets/images/home/support/home-reba@2x.png 2x" alt="Reba">
          <span class=" d-block annotation">Reba</span>
        </div>
      </div>

      <a class="btn btn-default" href="mailto:">Contact us</a>
    </div>
  </section>
  <section class="double-padding">
    <div class="inner large-inner">
      <div class="border-light border-radius-10 padding-large">
        <h2 class="chunk bottom-margin-small">Vero is for #customerops</h2>
        <p class="medium">What is #customerops? Customer ops is about ensuring you always serve your customer the best way possible. In every interaction.</p>
      </div>
    </div>
  </section>
</div>
<?php
  no_content_genesis_footer();
  include("demo-enquiry-form.php");
?>
