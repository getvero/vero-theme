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
<section class="hero double-padding">
  <div class="inner stack-md center-text">
    <div class="stack-xs">
      <h1 class="hulk semi-bold">Working at Vero</h3>
      <p class="large">We've come far. With your help we’ll go further.</p>
    </div>

    <a class="btn btn--large btn--secondary btn--outline" href="#careers-job-listings">View current openings</a>
  </div>
</section>
<section>
  <div class="inner xlarge-inner">
    <div class="w-sidebar w-sidebar--md items-center">
      <div class="col-main order-1">
        <h2 class="chunk semi-bold">We believe data is changing our world</h2>
        <p class="medium">Collecting realtime data and using it responsibly to create products and messages that deliver <strong>more value</strong> is the key to success for the next generation of products. At Vero, you'll help Product Teams harness the power of their data to <strong>create</strong> message and product experiences that matter.</p>
      </div>
      <div class="col-aside order-0">
        <div class="grid careers-photo-wall">
          <div>
            <img class="align-middle full-width" src="/wp-content/themes/vero/assets/dist/images/careers/placeholders.jpg" alt="">
          </div>
          <div>
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/careers/placeholders.jpg" alt="">
          </div>
          <div>
            <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/careers/placeholders.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs semi-bold">Live to work, not the other way around</h2>

        <p class="medium">We believe that happy teams are the key to a powerful business. At Vero we are an empowered group of people who accomplish a lot. By helping each other to overcome any challenge that comes our way we have built a company that thrives on trust, positivity and a pinch of adventure.</p>
      </div>
      <div class="col-aside md-left-padding-xl">
        <ul class="unstyled-list stack-md careers-empowered-list">
          <li class="flex">
            <div>
              <h3 class="atomic semi-bold">Work on hard problems</h3>
              <p>Smart people should work on the hardest problems. At Vero, you'll have the opportunity to tackle the kind of challenges that make work interesting.</p>
            </div>
          </li>
          <li class="flex">
            <div>
              <h3 class="atomic semi-bold">Make an impact</h3>
              <p>We believe in quality over quantity. As a young company with a growing team you will have the opportunity to make a big impact on all aspects of Vero.</p>
            </div>
          </li>
          <li class="flex">
            <div>
              <h3 class="atomic semi-bold">Opportunities to grow</h3>
              <p>We believe in growing and moving forward, as a company and as individuals. Our goal is to enable you to seek the knowledge and learn the skills that make you a better human.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="careers-vibe" class="double-padding">
  <div class="inner small-inner bottom-padding-lg">
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
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner">
    <ul class="unstyled-list">
      <li class="stack-md">
        <h3>Do exceptional work with extraordinary people</h3>
        <blockquote>
          <q class="large">Every day I get the chance to work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference.</q>
        </blockquote>

        <div class="stack-0">
          <h4 class="atomic">Rory Colsell</h4>
          <span class="atomic">Product Design</span>
        </div>
      </li>
      <li class="stack-md">
        <h3>Solve challenging problems for interesting customers</h3>
        <blockquote>
          <q class="large">There's nothing more satisfying than cracking a hard problem for a customer. At Vero I get to work side by side with some of the best companies in the industry, where every day is different.</q>
        </blockquote>

        <div class="stack-0">
          <h4 class="atomic">Reba Moyes</h4>
          <span class="atomic">Support</span>
        </div>
      </li>
    </ul>
  </div>
  <div class="inner">
    <h2 class="chunk regular md-center">Not just work life, real life</h2>
    <ul class="unstyled-list grid grid--thirds">
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
<section class="double-padding">
  <div class="inner small-inner bottom-padding-xs">
    <h2 class="chunk regular">Be where you want to be</h2>
    <p class="medium">Living and traveling to different countries is a valuable and pleasurable part of life. At Vero, you are free to live and work wherever you want. We hire from countries around the world and we encourage people to travel and try something new. Here’s some of the locations Vero team members currently reside:</p>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner">
    <h2 class="chunk regular">See where you fit in</h2>

    <p class="medium bottom-margin-md">Join us on our mission to empower businesses to put their data to work to create great product experiences.</p>

    <iframe class="airtable-embed" src="https://airtable.com/embed/shrtJO3ER23AbnAi8?backgroundColor=green&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>

    <p class="medium top-margin-md">Don’t see what you’re looking for? Drop us a line at <a href="mailto:careers@getvero.com">careers@getvero.com</a></p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
