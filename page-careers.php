<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'careers';
    return $classes;
  }
  include 'pages-shared/static-header.php';

  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
<section class="hero double-padding font-white" id="careers-hero">
  <div class="inner">
    <h1 class="hulk bold no-margin-top">We've come far.<br/>With your help we’ll go further.</h1>
    <a class="btn btn-outline-white" data-scroll href="#careers-job-listings">View current openings</a>
  </div>
</section>
<section id="careers-mission" class="double-padding">
  <div class="inner small-inner flush-bottom">
    <h2 class="chunk regular">We believe data is changing our world</h2>
    <p class="medium">Collecting realtime data and using it responsibly to create products and messages that deliver <strong>more value</strong> is the key to success for the next generation of products. At Vero, you'll help Product Teams harness the power of their data to <strong>create</strong> message and product experiences that matter.</p>
  </div>
</section>
<section lass="double-padding" id="careers-why">
  <div class="inner small-inner flush-bottom">
    <h2 class="chunk regular no-margin bottom-margin-large">Be empowered to do your best work</h2>
  </div>
  <div class="inner large-inner flush-top flush-bottom">
    <ul class="feature-list unstyled-list grid grid-auto">
      <li>
        <img class="bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/careers/rubix.svg" alt="work on hard problems">
        <h3 class="atomic semi-bold">Work on hard problems</h3>
        <p>Smart people should work on the hardest problems. At Vero, you'll have the opportunity to tackle the kind of challenges that make work interesting.</p>
      </li>
      <li>
        <img class="bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/careers/meteor.svg" alt="Make an impact">
        <h3 class="atomic semi-bold">Make an impact</h3>
        <p>We believe in quality over quantity. As a young company with a growing team you will have the opportunity to make a big impact on all aspects of Vero.</p>
      </li>
      <li>
        <img class="bottom-margin-small" src="/wp-content/themes/vero/assets/dist/images/careers/grow.svg" alt="Opportunities to grow">
        <h3 class="atomic semi-bold">Opportunities to grow</h3>
        <p>We believe in growing and moving forward, as a company and as individuals. Our goal is to enable you to seek the knowledge and learn the skills that make you a better human.</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-vibe" class="double-padding">
  <div class="inner small-inner bottom-padding-medium">
    <h2 class="chunk regular">Live to work, not the other way around</h2>
    <p class="medium">We believe that happy teams are the key to a powerful business. At Vero we are an empowered group of people who accomplish a lot. By helping each other to overcome any challenge that comes our way we have built a company that thrives on trust, positivity and a pinch of adventure.</p>
  </div>
  <div class="inner flush-top large-inner vibe-images">
    <div class="vibe-image" id="beach"></div>
    <div class="vibe-image" id="cafe"></div>
    <div class="vibe-image" id="bar"></div>
    <div class="vibe-image" id="boat"></div>
  </div>
</section>
<section id="careers-profiles" class="double-padding">
  <ul class="" id="careers-profiles-slider">
    <!-- <li class="linda">
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="italic">
          <q>Everyday I get the chance work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference, that’s what drives me every day.</q>
        </p>
        <div class="top-margin-small">
          <div class="pull-left linda small-profile-image"></div>
          <h4>Linda Grant</h4>
          <p class="no-top-margin">Marketing</p>
        </div>
        <div class="bx-controls">
          <div class="bx-control bx-active" data-bx="0"></div>
          <div class="bx-control" data-bx="1"></div>
          <div class="bx-control" data-bx="2"></div>
        </div>
      </div>
    </li> -->
    <li class="rory">
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p>
          <q>Every day I get the chance to work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference.</q>
        </p>
        <div class="top-margin-small">
          <div class="pull-left rory small-profile-image"></div>
          <h4>Rory Colsell</h4>
          <p class="no-top-margin">Product Design</p>
        </div>
        <div class="bx-controls">
          <div class="bx-control bx-active" data-bx="0"></div>
          <div class="bx-control" data-bx="1"></div>
          <!-- <div class="bx-control" data-bx="2"></div> -->
        </div>
      </div>
    </li>
    <li class="reba">
      <div class="inner">
        <h3>Solve challenging problems for interesting customers</h3>
        <p>
          <q>There's nothing more satisfying than cracking a hard problem for a customer. At Vero I get to work side by side with some of the best companies in the industry, where every day is different.</q>
        </p>
        <div class="top-margin-small">
          <div class="pull-left reba small-profile-image"></div>
          <h4>Reba Moyes</h4>
          <p class="no-top-margin">Support</p>
        </div>
        <div class="bx-controls">
          <div class="bx-control" data-bx="0"></div>
          <div class="bx-control bx-active" data-bx="1"></div>
          <!-- <div class="bx-control bx-active" data-bx="2"></div> -->
        </div>
      </div>
    </li>
  </ul>
</section>
<section class="double-padding bg-blue-light" id="careers-perks">
  <div class="inner blue-box">
    <h2 class="chunk regular md-center">Not just work life, real life</h2>
    <ul class="feature-list unstyled-list grid sm-left-align">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/remote.svg" alt="Remote-first">
        <p class="semi-bold">Remote-First</p>
        <p class="">Embracing global culture and opportunity, you are free to live and work where you want in the world, whether it's our HQ in Sydney, or a cabin in the woods.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/hours.svg" alt="Flexible hours">
        <p class="semi-bold">Flexibility</p>
        <p class="">We know people have different needs and work in different ways. We believe in asynchronous work and invest in processes that enable you to work the way that suits you.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/vacation.svg" alt="Yearly adventures">
        <p class="semi-bold">Yearly Adventures</p>
        <p class="">Once a year we go on a team retreat somewhere exciting, challenging and inspiring. For our last trip we went to Thailand, we had a blast!</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/health.svg" alt="Health conscious">
        <p class="semi-bold">Health Conscious</p>
        <p class="">We believe in a healthy working environment. Sit-stand desks are provided, healthy snacks are on offer and our global team regularly discusses their exercise.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/activities.svg" alt="Team activities">
        <p class="semi-bold">Team Activities</p>
        <p class="">From doing the Friday crossword to running and indoor climbing, we flex our brains and bodies in different ways, always with a little competition thrown in.</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-remote" class="double-padding">
  <div class="inner small-inner bottom-padding-small">
    <h2 class="chunk regular">Be where you want to be</h2>
    <p class="medium">Living and traveling to different countries is a valuable and pleasurable part of life. At Vero, you are free to live and work wherever you want. We hire from countries around the world and we encourage people to travel and try something new. Here’s some of the locations Vero team members currently reside:</p>
  </div>
  <div class="inner full-width flush-top flush-bottom">
    <ul class="feature-list grid grid-sixths unstyled-list center-text">
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/locations/sydney.png" srcset="/wp-content/themes/vero/assets/dist/images/careers/locations/sydney@2x.png 2x" alt="Sydney, Australia">
        <p class="semi-bold no-bottom-margin">Sydney</p>
        <p class="no-margin small">Australia</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/locations/florida.png" srcset="/wp-content/themes/vero/assets/dist/images/careers/locations/florida@2x.png 2x" alt="Florida, USA">
        <p class="semi-bold no-bottom-margin">Florida</p>
        <p class="no-margin small">USA</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/locations/beijing.png" srcset="/wp-content/themes/vero/assets/dist/images/careers/locations/beijing@2x.png 2x" alt="Beijing, China">
        <p class="semi-bold no-bottom-margin">Beijing</p>
        <p class="no-margin small">China</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/locations/brisbane.png" srcset="/wp-content/themes/vero/assets/dist/images/careers/locations/brisbane@2x.png 2x" alt="Brisbane, Australia">
        <p class="semi-bold no-bottom-margin">Brisbane</p>
        <p class="no-margin small">Australia</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/locations/edinburgh.png" srcset="/wp-content/themes/vero/assets/dist/images/careers/locations/edinburgh@2x.png 2x" alt="Edinburgh, United Kingdom">
        <p class="semi-bold no-bottom-margin">Edinburgh</p>
        <p class="no-margin small">United Kingdom</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/dist/images/careers/locations/amsterdam.png" srcset="/wp-content/themes/vero/assets/dist/images/careers/locations/amsterdam@2x.png 2x" alt="Amsterdam, Netherlands">
        <p class="semi-bold no-bottom-margin">Amsterdam</p>
        <p class="no-margin small">Netherlands</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-job-listings" class="double-padding">
  <div class="inner small-inner">
    <h2 class="chunk regular">See where you fit in</h2>
    <p class="medium bottom-margin-smedium">Join us on our mission to empower businesses to put their data to work to create great product experiences.</p>
    <ul class="unstyled-list lined-list medium bottom-margin-medium">
      <li class="no-margin">
        <a class="semi-bold vertical-padding-small flex" href="https://getvero.workable.com/jobs/1068175" target="_blank">
          Content Writer (Contract)
          <img class="left-margin-auto" src="/wp-content/themes/vero/assets/dist/images/careers/arrow.svg">
        </a>
      </li>
        <li class="no-margin">
        <a class="semi-bold vertical-padding-small flex" href="https://getvero.workable.com/jobs/1068206" target="_blank">
          Senior Content Manager
          <img class="left-margin-auto" src="/wp-content/themes/vero/assets/dist/images/careers/arrow.svg">
        </a>
      </li>
    </ul>

    <p class="medium">Don’t see what you’re looking for? Drop us a line at <a href="mailto:careers@getvero.com">careers@getvero.com</a></p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>
