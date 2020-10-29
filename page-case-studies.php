<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'case-studies';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="case-studies-hero double-padding">
  <div class="inner tiny-inner center-text stack-md">
    <span class="d-inline-block annotation uppercase tracked semi-bold font-gray-dark">Case studies</span>

    <h1 class="semi-bold hulk">Join hundreds of customers that use Vero</h1>
  </div>
</section>
<section class="border-bottom-light">
  <div class="inner xlarge-inner">
    <div class="grid grid--thirds">
      <div class="stack-md">
        <div>
          <img class="align-middle case-studies-quote-logo" src="/wp-content/themes/vero/assets/dist/images/home/logos/unsplash-logo-vero.svg" height="44" alt="Unsplash logo Vero">

          <p class="medium relative"><span class="absolute quote-mark-small">&ldquo;</span>Four amazing services that make Unsplash possible with a small team: Heroku, Stream, Imgix, &amp; Vero.</p>
        </div>

        <div>
          <span class="show semi-bold">Luke Chesser</span>
          <span class="show">Cofounder</span>
        </div>
      </div>
      <div class="stack-md">
        <div>
          <img class="align-middle case-studies-quote-logo" src="/wp-content/themes/vero/assets/dist/images/home/logos/drawboard-logo-vero.svg" height="44" alt="Unsplash logo Vero">

          <p class="medium relative"><span class="absolute quote-mark-small">&ldquo;</span>Heck! Vero's support is exceptional!</p>
        </div>

        <div>
          <span class="show semi-bold">Nathan Field</span>
          <span class="show">Head of Marketing</span>
        </div>
      </div>
      <div class="stack-md">
        <div>
          <img class="align-middle case-studies-quote-logo" src="/wp-content/themes/vero/assets/dist/images/home/logos/filld-logo-vero.svg" height="44" alt="filld logo Vero">

          <p class="medium relative"><span class="absolute quote-mark-small">&ldquo;</span>Vero is one of the best DRIP apps—have been recommending to all my contacts. The workflows feature is industry-leading!</p>
        </div>

        <div>
          <span class="show semi-bold">Nitin Ahuja</span>
          <span class="show">VP of Product &amp; Engineering</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="overflow-hidden">
  <div class="inner medium-inner stack-xl">
    <ul class="unstyled-list case-studies-logos flex flex-wrap justify-between">
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/unsplash-logo-vero.svg" alt=" Unsplash logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/tidal-logo-vero.svg" alt="Tidal logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/stickermule-logo-vero.svg" alt="Stickermule logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/monzo-logo-vero.svg" alt="Monzo logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/pipedrive-logo-vero.svg" alt="Pipedrive logo">
      </li>
    </ul>

    <div>
      <div class="w-sidebar w-sidebar--md items-center">
        <div class="col-main lg-right-padding-lg">
          <div class="stack-md">
            <div>
              <h2>Plann is a social media scheduling app for travel, fashion, and lifestyle brand</h2>
              <p class="medium">Plann’s best performing open rate was at 32.1%, averaging at 3% click-through-rate for their best performing content.</p>
            </div>

            <a class="btn btn--secondary" href="#none">Read more</a>
          </div>
        </div>
        <div class="col-aside md-order-0 relative">
          <div class="case-studies-featured-img case-studies-featured-img--primary">
            <img class="responsive-image align-middle border-radius-2 shadow-4" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/hero.jpg" alt="Plann">

            <svg class="absolute align-middle" width="182" height="134" xmlns="http://www.w3.org/2000/svg"><path d="M1 1h147.39C166.4 1 181 15.6 181 33.61c0 18.01-14.6 32.61-32.61 32.61h-59C70.949 66.22 56 81.17 56 99.61 56 118.051 70.949 133 89.39 133h35.537" stroke="#FFC111" stroke-width="2" fill="none" fill-rule="evenodd" stroke-dasharray="3,8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
      </div>
    </div>

    <ul class="unstyled-list case-studies-logos flex flex-wrap justify-between">
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/helloprint-logo-vero.svg" alt="Helloprint logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/wiw-logo-vero.svg" alt="When I Work logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/ausmed-logo-vero.svg" alt="Ausmed logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/aboutme-logo-vero.svg" alt="about.me logo">
      </li>
      <li class="logo-list-item no-margin">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/bubble-logo-vero.svg" alt="bubble logo">
      </li>
    </ul>

    <div>
      <div class="w-sidebar w-sidebar--md items-center">
        <div class="col-main md-order-1 lg-left-padding-lg">
          <div class="stack-md">
            <div>
              <h2>When I Work is a fully-integrated scheduling, time tracking, and team messaging tool for businesses</h2>
              <p class="medium">Plann’s best performing open rate was at 32.1%, averaging at 3% click-through-rate for their best performing content.</p>
            </div>

            <a class="btn btn--secondary" href="#none">Read more</a>
          </div>
        </div>
        <div class="col-aside md-order-0 relative">
          <div class="case-studies-featured-img case-studies-featured-img--secondary">
            <img class="responsive-image align-middle border-radius-2 shadow-4" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/hero.jpg" alt="Plann">

            <svg class="absolute align-middle" width="154" height="120" xmlns="http://www.w3.org/2000/svg"><path d="M108 1h2.565c16.1 0 29.152 13.052 29.152 29.152s-13.052 29.151-29.152 29.151H31.508c-16.484 0-29.848 13.364-29.848 29.849C1.66 105.636 15.024 119 31.508 119h124.11" stroke="#F15242" stroke-width="2" fill="none" fill-rule="evenodd" stroke-dasharray="3,8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue">
  <div class="inner xlarge-inner">
    <div class="grid grid--thirds center-text">
      <div class="bg-white border-radius-2 padding-md stack-sm">
        <span class="show hulk">32.1%</span>

        <h3 class="atomic semi-bold">Best performing open rate</h3>

        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/wiw-logo-vero.svg" alt="When I Work logo">
      </div>
      <div class="bg-white border-radius-2 padding-md stack-sm">
        <span class="show hulk">50%</span>
        <div class="stack-0">
          <h3 class="atomic semi-bold">Email marketing</h3>
          <p class="medium">Cut down on the internal hours spent</p>
        </div>

        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/wiw-logo-vero.svg" alt="When I Work logo">
      </div>
      <div class="bg-white border-radius-2 padding-md stack-sm">
        <span class="show hulk">60%</span>

        <h3 class="atomic semi-bold">Click-through-rate</h3>

        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/home/logos/wiw-logo-vero.svg" alt="When I Work logo">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--md items-center">
      <div class="col-main md-order-1 md-left-padding-md stack-md">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/case-study/plann/logo.png" srcset="/wp-content/themes/vero/assets/dist/images/case-study/plann/logo@2x.png 2x" alt="Plann logo">

        <p class="micro quote-mark">Vero is constantly innovating and readily takes on product feature requests, so we’re confident that they’ll be able to scale with us.</p>

        <div>
          <span class="show atomic semi-bold">Karina May</span>
          <span class="medium">Chief Marketing Officer at Plann</span>
        </div>
      </div>
      <div class="col-aside md-order-0">
        <img class="responsive-image align-middle border-radius-2 shadow-4" src="/wp-content/themes/vero/assets/dist/images/case-study/karina.jpg" srcset="/wp-content/themes/vero/assets/dist/images/case-study/karina@2x.jpg 2x" alt="Karina May">
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>