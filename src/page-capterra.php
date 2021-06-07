<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'capterra';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>
<section class="home-hero overflow-hidden">
  <div class="inner xlarge-inner border-bottom-light">
    <div class="flex flex-column md-flex-row">
      <div class="col-main center-text md-left-text bg-white-overlay">
        <h1 class="biggie semi-bold bottom-margin-xs home-title"><span class="md-ws-nowrap">Send emails that engage customers</span> and drive growth</h1>

        <p class="large md-bottom-margin-md">Unlimited messaging from $125/month.</p>

        <div class="flex flex-wrap md-flex-nowrap justify-center md-justify-start items-center bottom-margin-xs">
          <a class="btn btn--success btn--large hide xs-show xs-right-margin-md" href="https://app.getvero.com/signup">Start a free trial</a>
        </div>

        <p class="faded bottom-margin-xl">(No credit card details required)</p>

        <h2 class="micro regular faded bottom-margin-md">Trusted by leading brands</h2>

        <ul class="unstyled-list logo-list grid">
          <li class="logo-list-item no-margin">
            <a href="https://unsplash.com">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/unsplash-logo-vero.svg" alt=" Unsplash logo">
            </a>
          </li>
          <li class="logo-list-item no-margin">
            <a href="https://tidal.com">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/tidal-logo-vero.svg" alt="Tidal logo">
            </a>
          </li>
          <li class="logo-list-item no-margin">
            <a href="https://about.me">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/aboutme-logo-vero.svg" alt="About.me logo">
            </a>
          </li>
          <li class="logo-list-item no-margin">
            <a href="https://monzo.com">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/monzo-logo-vero.svg" alt="Monzo logo">
            </a>
          </li>
          <li class="logo-list-item no-margin">
            <a href="https://www.ausmed.com/">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/ausmed-logo-vero.svg" alt="Ausmed logo">
            </a>
          </li>
          <li class="logo-list-item no-margin">
            <a href="https://helloprint.co.uk">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/helloprint-logo-vero.svg" alt="Helloprint logo">
            </a>
          </li>
        </ul>
      </div>
      <div class="col-aside relative flex justify-center">
        <picture>
          <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/dist/images/home/create-better-customer-experiences-workflows-vero-mobile.png 1x, /wp-content/themes/vero/assets/dist/images/home/create-better-customer-experiences-workflows-vero-mobile@2x.png 2x">
          <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/dist/images/home/create-better-customer-experiences-workflows-vero.png 1x, /wp-content/themes/vero/assets/dist/images/home/create-better-customer-experiences-workflows-vero@2x.png 2x">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/create-better-customer-experiences-workflows-vero.png" alt="Create better customer experiences with workflows in Vero">
        </picture>
      </div>
    </div>
  </div>
</section>
<section class="double-padding capterra-event-manager bg-center">
  <div class="inner large-inner center-text">
    <header class="inner  flush-top flush-bottom bottom-margin-lg">
      <h2 class="chunk regular bottom-margin-xs">Confidently send messages with real-time data</h2>
      <p class="large">Vero tracks your customer's actions, as they happen, and gives you a clear view of the data.</p>
    </header>

    <div class="image-dots image-dots-2 bottom-margin-md">
      <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/capterra/send-messages-with-real-time-data.png" srcset="/wp-content/themes/vero/assets/dist/images/capterra/send-messages-with-real-time-data@2x.png 2x" alt="Confidently send messages with real-time data">
      <div class="background"></div>
    </div>

    <p class="large">You can feel confident in sending the right message, at the right time.</p>
  </div>
</section>
<section class="capterra-fusion bg-center">
  <div class="inner xlarge-inner flush-top">
    <div class="grid job-feature job-feature-right">
      <div class="col-main">
        <h2 class="chunk regular bottom-margin-md">Personalize your emails to improve customer engagement</h2>

        <p class="medium bottom-margin-md">Send customers account usage updates, tailored product recommendations and more!</p>
      </div>
      <div class="col-aside flex justify-center">
        <div class="image-dots image-dots-3">
          <div class="relative cards">
            <img class="card card-1 responsive-image" src="/wp-content/themes/vero/assets/dist/images/capterra/personalize-emails-to-improve-customer-engagement-1.svg" alt="Personalize your emails to improve customer engagement 1">
            <img class="card card-2 responsive-image" src="/wp-content/themes/vero/assets/dist/images/capterra/personalize-emails-to-improve-customer-engagement-2.svg" alt="Personalize your emails to improve customer engagement 2">
          </div>
          <div class="background"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="capterra-ab-testing bg-offwhite bg-center">
  <div class="inner large-inner center-text">
    <header class="inner  flush-top flush-bottom bottom-margin-lg">
      <h2 class="chunk regular bottom-margin-xs">Measure and optimize your emails</h2>
      <p class="large">View the performance of your campaigns and run A/B tests to improve results.</p>
    </header>

    <div class="image-dots image-dots-5">
      <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/capterra/measure-and-optimize-your-emails.png" srcset="/wp-content/themes/vero/assets/dist/images/capterra/measure-and-optimize-your-emails@2x.png 2x" alt="Measure and optimize your emails">
      <div class="background"></div>
    </div>
  </div>
</section>
<section class="capterra-support bg-dark-blue">
  <div class="flex flex-wrap md-flex-nowrap justify-center items-center center-text">
    <p class="medium regular font-white no-margin">24/7 Customer support</p>
    <span></span>
    <p class="medium regular font-white no-margin">95% Customer satisfaction</p>
  </div>
</section>
<section class="footer-cta bg-dots">
  <div class="inner large-inner">
    <div class="flex flex-wrap justify-center items-center center-text md-left-text">

      <h3 class="chunk regular md-right-margin-lg">Easily create and manage automated messages</h3>

      <a class="d-inline-block btn btn--large btn--success" href="https://app.getvero.com/signup">Start a free trial</a>
    </div>
  </div>
</section>
<section class="capterra-features">
  <div class="inner large-inner top-padding-md">
    <h2 class="annotation semi-bold faded uppercase center-text bottom-margin-lg">More features</h2>

    <ul class="unstyled-list grid center-text">
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/newsletter.svg" alt="Scheduled Newsletters">
        <h3 class="semi-bold atomic bottom-margin-xxs">Scheduled Newsletters</h3>
        <p class="light">Send one-off campaigns to individual segments – instantly, or at a scheduled time in the future.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/reports.svg" alt="Detailed reporting">
        <h3 class="semi-bold atomic bottom-margin-xxs">Detailed Reporting</h3>
        <p class="light">Get aggregate and day-by-day breakdowns of every email campaign sent through Vero. Plays nice with data warehouses too.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/liquid.svg" alt="Liquid content">
        <h3 class="semi-bold atomic bottom-margin-xxs">Liquid Content</h3>
        <p class="light">Personalise every email using the <a href="https://www.getvero.com/email-personalization-liquid-guide" target="_blank">Liquid templating language</a> and utilise your customer data.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/templates.svg" alt="Manage HTML templates">
        <h3 class="semi-bold atomic bottom-margin-xxs">Manage HTML templates</h3>
        <p class="light">Upload, organise and edit your fully responsive email designs and reuse them in all of your campaigns.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/editables.svg" alt="Visual editor">
        <h3 class="semi-bold atomic bottom-margin-xxs">Visual Editor</h3>
        <p class="light">Define areas of your email content that the whole team can edit in Vero's point-and-click content editor.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/timezones.svg" alt="Send per timezone">
        <h3 class="semi-bold atomic bottom-margin-xxs">Send per Timezone</h3>
        <p class="light">Schedule your emails at the right time for every customer, no matter where in the world they are.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/conversions.svg" alt="Track conversions">
        <h3 class="semi-bold atomic bottom-margin-xxs">Track Conversions</h3>
        <p class="light">Go beyond just clicks and track the true success of each campaign using user actions as converion goals.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/abtesting.svg" alt="A/B Testing">
        <h3 class="semi-bold atomic bottom-margin-xxs">A/B Testing</h3>
        <p class="light">Multi-variate test the subject, from address, content and template for any email campaign, including triggered workflows.</p>
      </li>
      <li class="no-margin">
        <img class="bottom-margin-sm align-middle" src="/wp-content/themes/vero/assets/dist/images/home/features/more/csv.svg" alt="CSV Imports">
        <h3 class="semi-bold atomic bottom-margin-xxs">CSV Imports</h3>
        <p class="light">Hit the ground running and import your customer attributes and actions using Vero's CSV import tools.</p>
      </li>
    </ul>
  </div>
</section>
<section class="bg-offwhite capterra-quote">
  <div class="inner xlarge-inner">
    <blockquote class="quote-mark bottom-margin-md">
      <p class="quote large">We push all of our behavioural events to Vero… allowing our non-developer teammates to build highly-personalized emails, based on complex event-based logic on their own insights.</p>
    </blockquote>

    <span class="show medium">Luke Chesser</span>
    <img class="align-middle logo" src="/wp-content/themes/vero/assets/dist/images/home/logos/unsplash-logo-vero.svg" width="160" alt="Unsplash logo">
  </div>
</section>
<section class="double-padding footer-cta-capterra">
  <div class="inner small-inner center-text">
    <h3 class="regular chunk bottom-margin-md">Empower your team to use customer data to create personal and timely messages, that drive more growth for your business</h3>

    <a class="d-inline-block btn btn--large btn--success" href="https://app.getvero.com/signup">Try Vero for free</a>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
