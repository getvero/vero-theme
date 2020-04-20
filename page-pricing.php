<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="hero pricing-hero">
  <div class="inner tiny-inner center-text">
    <h1 class="biggie semi-bold">Simple pricing that helps you scale your business</h1>
    <p class="large">We’ve got plans to suit everyone.</p>
  </div>
</section>
<section>
  <div class="inner xlarge-inner">
    <div class="grid border-radius-2 pricing-comp-table">
      <div>
        <header class="pricing-comp-table-header">
          <h2 class="micro">Starter</h2>
        </header>

        <div class="pricing-comp-table-body">
          <span class="show semi-bold tubs">$49 p/m</span>

          <div>
            <span class="show regular annotation bottom-margin-xxs">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>2,000</strong> Customers </li>
              <li class="no-margin"><strong>10,000</strong> Messages p/m</li>
              <li class="no-margin"><strong>1M</strong> Data Points p/m</li>
              <li class="no-margin"><a class="annotation underline-link" href="">Additional usage charges</a></li>
            </ul>
          </div>

          <div>
            <span class="show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                All the core Vero features
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                1 Team member
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Online guides and help docs
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                30 days free Email support
              </li>
            </ul>
          </div>

          <a href="" class="btn btn--outline btn-success full-width">Try for free</a>
        </div>
      </div>
      <div>
        <header class="pricing-comp-table-header">
          <h2 class="micro">Pro</h2>
        </header>

        <div class="pricing-comp-table-body">
          <span class="show semi-bold tubs">$199 p/m</span>

          <div>
            <span class="show regular annotation bottom-margin-xxs">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>2,000</strong> Customers </li>
              <li class="no-margin"><strong>10,000</strong> Messages p/m</li>
              <li class="no-margin"><strong>1M</strong> Data Points p/m</li>
              <li class="no-margin"><a class="annotation underline-link" href="">Additional usage charges</a></li>
            </ul>
          </div>

          <div>
            <span class="show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                All the core Vero features
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                1 Team member
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Online guides and help docs
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                30 days free Email support
              </li>
            </ul>
          </div>

          <a href="" class="btn btn--outline btn-success full-width">Try for free</a>
        </div>
      </div>
      <div>
        <header class="pricing-comp-table-header">
          <h2 class="micro">Growth</h2>
        </header>

        <div class="pricing-comp-table-body">
          <span class="show semi-bold tubs">$599 p/m</span>

          <div>
            <span class="show regular annotation bottom-margin-xxs">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>2,000</strong> Customers </li>
              <li class="no-margin"><strong>10,000</strong> Messages p/m</li>
              <li class="no-margin"><strong>1M</strong> Data Points p/m</li>
              <li class="no-margin"><a class="annotation underline-link" href="">Additional usage charges</a></li>
            </ul>
          </div>

          <div>
            <span class="show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                All the core Vero features
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                1 Team member
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Online guides and help docs
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                30 days free Email support
              </li>
            </ul>
          </div>

          <a href="" class="btn btn--outline btn-success full-width">Try for free</a>
        </div>
      </div>
      <div>
        <header class="pricing-comp-table-header">
          <h2 class="micro">Enterprise</h2>
        </header>

        <div class="pricing-comp-table-body">
          <span class="show semi-bold tubs">$1,299 p/m &plus;</span>

          <div>
            <span class="show regular annotation bottom-margin-xxs">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>2,000</strong> Customers </li>
              <li class="no-margin"><strong>10,000</strong> Messages p/m</li>
              <li class="no-margin"><strong>1M</strong> Data Points p/m</li>
              <li class="no-margin"><a class="annotation underline-link" href="">Additional usage charges</a></li>
            </ul>
          </div>

          <div>
            <span class="show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                All the core Vero features
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                1 Team member
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Online guides and help docs
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                30 days free Email support
              </li>
            </ul>
          </div>

          <a href="" class="btn btn--outline btn--dark-blue btn-success full-width">Try for free</a>


          <a href="" class="btn btn--outline btn-success full-width">Try for free</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner large-inner center-text">
    <h2 class="atomic regular faded bottom-margin-sm">Trusted by leading brands</h2>

    <ul class="unstyled-list home-hero-logo-list flex flex-wrap justify-center">
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
  </div>
</section>
<section>
  <div class="inner medium-inner top-padding-xl bottom-padding-xl">
    <ul class="unstyled-list feature-list grid grid-sixths center-text">
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-support.svg" width="46" alt="24-hour support">
        <h3 class="regular bottom-margin-xs">24-hour support</h3>
        <p class="no-top-margin no-bottom-margin">Our global support team is on hand to help you</p>
      </li>
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-encrypt.svg" width="46" alt="Data security">
        <h3 class="regular bottom-margin-xs">Data security</h3>
        <p class="no-top-margin no-bottom-margin">GDPR-ready, we take data security seriously</p>
      </li>
      <li class="no-bottom-margin">
        <img src="/wp-content/themes/vero/assets/dist/images/home/pricing/pricing-unlimited.svg" width="46" alt="Unlimited everything">
        <h3 class="regular bottom-margin-xs">Unlimited everything</h3>
        <p class="no-top-margin no-bottom-margin">Emails, sub-accounts, users - we won't charge you extra</p>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner">
    <h2 class="chunk regular center-text bottom-margin-xl">Frequently Asked Questions</h2>

    <details class="question-block bottom-margin-lg">
      <summary class="flex question">
        <h3 class="micro regular no-bottom-margin">What happens if I go over my subscriber limit?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </summary>
      <summary class="answer">
        <p>Vero will send you an email when you cross the subscriber threshold of your current plan. Your account will be automatically upgraded to a new plan, which will be reflected in your your next invoice.</p>
        <p>As your usage fluctuates you can downgrade your plan during the next billing period, ensuring you minimize your spend each month.</p>
      </summary>
    </details>

    <details class="question-block bottom-margin-lg">
      <summary class="flex question">
        <h3 class="micro regular no-bottom-margin">What support does Vero provide?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </summary>
      <summary class="answer">
        <p>Our global support team is on hand to help 24 hours a day. We have dedicated support team members in Australia, Europe, and the USA. Our email support has a customer satisfaction rating of over 98%.</p>

        <p>We also provide urgent, emergency support for customers on our high-volume plans - <a class="typeform-share"  data-mode="popup" href="https://getvero.typeform.com/to/d9wZ4V" target="_blank">talk to our sales team</a> to learn more.</p>
      </summary>
    </details>

    <details class="question-block bottom-margin-lg">
      <summary class="flex question">
        <h3 class="micro regular no-bottom-margin">Can I pay annually?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </summary>
      <summary class="answer">
        <p>You sure can. We offer a 15% discount when you subscribe to an annual plan. <a href="https://help.getvero.com/articles/annual-plan-discount.html">Find out more about annual plans</a>.</p>
      </summary>
    </details>

    <details class="question-block bottom-margin-lg">
      <summary class="flex question">
        <h3 class="micro regular no-bottom-margin">Can I use sub-accounts?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </summary>
      <summary class="answer">
        <p>In Vero, sub-accounts are called <strong>Projects</strong>. Each project has it's own subscriber database, API keys, and campaigns. In other words, it’s like having two or more Vero accounts that you can easily jump between. You can also think of them as <strong>free sandboxes</strong>.</p>
        <p>If you’re an agency, you may also use projects to manage multiple clients.</p>
      </summary>
    </details>

    <details class="question-block bottom-margin-lg">
      <summary class="flex question">
        <h3 class="micro regular no-bottom-margin">Does the data I send Vero belong to me?</h3>

        <img class="left-margin-auto question-caret" src="/wp-content/themes/vero/assets/dist/images/home/pricing/caret.svg" alt="">
      </summary>
      <summary class="answer">
        <p>Absolutely. The data you send us belongs to you. Vero collects and processes all data securely, in accordance with legislation, including EU GDPR. At any time, you can export or request us to remove your data. Read our <a href="https://www.getvero.com/terms-of-service/" rel="noopener" target="_blank">Terms of Service</a> for more details.</p>
      </summary>
    </details>
  </div>
</section>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams use their data to create a better customer messaging experience</h4>

    <a class="btn btn-success btn-large bottom-margin-sm" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
?>
