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
<section class="double-padding">
  <div class="inner stack-md center-text">
    <div class="stack-xs">
      <h1 class="hulk semi-bold">Working at Vero</h3>
      <p class="large">We've come far. With your help we’ll go further.</p>
    </div>

    <a class="btn btn--large btn--secondary btn--outline" href="#careers-job-listings">View current openings</a>
  </div>
</section>
<section>
  <div class="inner xlarge-inner flush-top">
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
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner halfs">
    <div class="careers-slider">
      <input class="careers-radio-1" id="careers-radio-1" type="radio" name="careers-radios" checked>
      <input class="careers-radio-2" id="careers-radio-2" type="radio" name="careers-radios">

      <div class="careers-slides">
        <div class="careers-slide careers-slide--rory" data-slide="rory">
          <div class="col-main stack-md">
            <blockquote>
              <q class="large">Every day I get the chance to work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference.</q>
            </blockquote>

            <div class="stack-0 border-top-primary bw2">
              <h4 class="atomic">Rory Colsell</h4>
              <span class="atomic">Product Design</span>
            </div>
          </div>

          <div class="col-aside">
            <img class="align-middle  border-radius-2" src="/wp-content/themes/vero/assets/dist/images/careers/rory.jpg" srcset="/wp-content/themes/vero/assets/dist/images/careers/rory@2x.jpg 2x" alt="Rory">
          </div>
        </div>
        <div class="careers-slide careers-slide--reba" data-slide="reba">
          <div class="col-main stack-md">
            <blockquote>
              <q class="large">There's nothing more satisfying than cracking a hard problem for a customer. At Vero I get to work side by side with some of the best companies in the industry, where every day is different.</q>
            </blockquote>

            <div class="stack-0 border-top-primary bw2">
              <h4 class="atomic">Reba Moyes</h4>
              <span class="atomic">Support</span>
            </div>
          </div>

          <div class="col-aside">
            <img class="align-middle  border-radius-2" src="/wp-content/themes/vero/assets/dist/images/careers/rory.jpg" srcset="/wp-content/themes/vero/assets/dist/images/careers/rory@2x.jpg 2x" alt="Rory">
          </div>
        </div>
      </div>

      <ul class="careers-slider-nav unstyled-list flex">
        <li class="no-margin">
          <label for="careers-radio-1">Rory</label>
        </li>
        <li class="no-margin">
          <label for="careers-radio-2">Reba</label>
        </li>
      </ul>
    </div>
  </div>
  <div class="inner">
    <h2 class="tubs semi-bold">Not just work life, real life</h2>
    <ul class="unstyled-list grid grid--thirds">
      <li class="stack-sm">
        <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><circle stroke="#01B2D0" stroke-width="2" cx="28" cy="28" r="23"/><path d="M28 14c4.97 0 9 3.76 9 8.4 0 3.093-3 9.626-9 19.6-6-9.974-9-16.507-9-19.6 0-4.64 4.03-8.4 9-8.4zm0 6a3 3 0 100 6 3 3 0 000-6z" fill="#01B2D0" opacity=".4"/></g></svg>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Remote-First</h3>
          <p>Embracing global culture and opportunity, you are free to live and work where you want in the world, whether it's our HQ in Sydney, or a cabin in the woods.</p>
        </div>
      </li>
      <li class="stack-sm">
        <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><defs/><defs><circle id="a" cx="28" cy="28" r="24"/></defs><g fill="none" fill-rule="evenodd"><rect fill="#F7DF9B" x="27" y="12" width="2" height="18" rx="1"/><rect fill="#F7DF9B" transform="rotate(-90 34 29)" x="33" y="22" width="2" height="14" rx="1"/><circle stroke="#FFC111" stroke-width="2" cx="28" cy="28" r="23"/></g></svg>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Flexibility</h3>
          <p>We know people have different needs and work in different ways. We believe in asynchronous work and invest in processes that enable you to work the way that suits you.</p>
        </div>
      </li>
      <li class="stack-sm">
        <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><defs/><g stroke="#6FD350" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M15.02 11.53a.997.997 0 011.22.48h0l13.344 25.527a.997.997 0 01-.423 1.35h0L3.171 39a.997.997 0 01-1-1h0l12.28-25.958a.997.997 0 01.57-.512z"/><path d="M39.02 11.53a.997.997 0 011.22.48h0l13.344 25.527a.997.997 0 01-.423 1.35h0L27.171 39a.997.997 0 01-1-1h0l12.28-25.958a.997.997 0 01.57-.512z"/><path d="M26.702 7.53a.997.997 0 011.22.48h0l20.662 39.527a.997.997 0 01-.423 1.35h0L8.171 49a.997.997 0 01-1-1h0L26.133 8.042a.997.997 0 01.57-.512z" fill="#F3F4F7"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.613 23l4 7 4-7 4 7 4-7"/></g></svg>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Yearly Adventures</h3>
          <p>Once a year we go on a team retreat somewhere exciting, challenging and inspiring. For our last trip we went to Thailand, we had a blast!</p>
        </div>
      </li>
      <li class="stack-sm">
        <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M20 11a9.967 9.967 0 016.977 2.836 9.969 9.969 0 013.02 6.89h0L30 27h5.986c2.826.074 5.324 1.205 7.119 3A9.85 9.85 0 0146 37a9.967 9.967 0 01-2.836 6.977 9.969 9.969 0 01-6.889 3.02h0L10 47V21.013c.074-2.826 1.205-5.324 3-7.119A9.85 9.85 0 0120 11z" stroke="#6F0DFB" stroke-width="2" fill="none" fill-rule="evenodd"/></svg>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Health Conscious</h3>
          <p>We believe in a healthy working environment. Sit-stand desks are provided, healthy snacks are on offer and our global team regularly discusses their exercise.</p>
        </div>
      </li>
      <li class="stack-sm">
        <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle stroke="#F15242" stroke-width="2" cx="18" cy="13" r="7"/><rect stroke="#F15242" stroke-width="2" fill="#F3F4F7" x="19" y="14" width="22" height="36" rx="2"/><path fill-opacity=".4" fill="#F15242" d="M20 23h20v2H20z"/></g></svg>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Culture</h3>
          <p>We are a semi-distrubuted team so try and keep social by using our non-work related Slack channel with Among Us and regular Zoom happy hours.</p>
        </div>
      </li>
      <li class="stack-sm">
        <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle stroke="#F15242" stroke-width="2" cx="18" cy="13" r="7"/><rect stroke="#F15242" stroke-width="2" fill="#F3F4F7" x="19" y="14" width="22" height="36" rx="2"/><path fill-opacity=".4" fill="#F15242" d="M20 23h20v2H20z"/></g></svg>

        <div class="stack-xxxs">
          <h3 class="atomic semi-bold">Team Activities</h3>
          <p>From doing the Friday crossword to running and indoor climbing, we flex our brains and bodies in different ways, always with a little competition thrown in.</p>
        </div>
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
    <h2>Be where you want to be</h2>

    <h2 class="chunk regular">See where you fit in</h2>

    <p class="medium bottom-margin-md">Join us on our mission to empower businesses to put their data to work to create great product experiences.</p>

    <iframe class="airtable-embed" src="https://airtable.com/embed/shrtJO3ER23AbnAi8?backgroundColor=green&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>

    <p class="medium top-margin-md">Don’t see what you’re looking for? Drop us a line at <a href="mailto:careers@getvero.com">careers@getvero.com</a></p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
