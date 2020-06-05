<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section class="hero pricing-hero stack-lg">
  <div class="inner tiny-inner center-text stack-sm">
    <h1 class="biggie semi-bold">Simple pricing that helps you scale your business</h1>
    <p class="large">We’ve got plans to suit everyone.</p>
  </div>
  <div class="inner xlarge-inner stack-md">
    <input class="hide pricing-radio-1" id="pricing-tab-1" type="radio" name="pricing-tabs" checked>
    <input class="hide pricing-radio-2" id="pricing-tab-2" type="radio" name="pricing-tabs">

    <div class="tab-switcher center-text">
      <div class="pricing-tab-labels inline-flex shadow-1 border border-radius-2 padding-xxs">
        <label class="pricing-tab-label pricing-tab-label--1" for="pricing-tab-1">Monthly</label>
        <label class="pricing-tab-label pricing-tab-label--2" for="pricing-tab-2">Annually</label>
      </div>
    </div>

    <div class="bg-white border-radius-2 pricing-plan-table pricing-tab pricing-tab--1">
      <div class="flex flex-column">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Starter</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="semi-bold tubs">$49</span><span class="font-gray-dark">/mo</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>2,000</strong> Customers </li>
              <li class="no-margin"><strong>10,000</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>1M</strong> Data points/mo</span>

                <span class="tooltip" data-label="This is a tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--starter regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

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

          <a class="btn btn--outline btn--success full-width top-margin-auto" href="">Try for free</a>
        </div>
      </div>
      <div class="flex flex-column">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Pro</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="semi-bold tubs">$199</span><span class="font-gray-dark">/mo</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>10,000</strong> Customers </li>
              <li class="no-margin"><strong>75,000</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>7.5M</strong> Data points/mo</span>

                <span class="tooltip" data-label="This is a tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--pro regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                <span>Everything from <strong>Starter</strong></span>
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                5 Team members
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                AB Testing
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Custom Webhooks
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Team Access Management
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                24/7 Email Support
              </li>
            </ul>
          </div>

          <a href="" class="btn btn--outline btn--success full-width top-margin-auto">Try for free</a>
        </div>
      </div>
      <div class="flex flex-column relative">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Growth</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="semi-bold tubs">$599</span><span class="font-gray-dark">/mo</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>75,000</strong> Customers </li>
              <li class="no-margin"><strong>375,000</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>37M</strong> Data points/mo</span>

                <span class="tooltip" data-label="A 'data point' is any event 'track' that you record, read more in our help docs.">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--growth regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                <span>Everything from <strong>Pro</strong></span>
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                20 Team members
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Multi-Language Campaigns
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Dedicated IP Address
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                BYO Email Provider
              </li>
            </ul>
          </div>

          <a href="#none" class="btn btn--outline btn--success full-width top-margin-auto">Try for free</a>
        </div>
      </div>
      <div class="flex flex-column">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Enterprise</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="semi-bold tubs">$1,299</span><span class="font-gray-dark">/mo</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>250,000&plus;</strong> Customers </li>
              <li class="no-margin"><strong>1,250,000&plus;</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>125M&plus;</strong> Data points/mo</span>

                <span class="tooltip" data-label="This is a tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--enterprise regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                <span>Everything from <strong>Growth</strong></span>
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Unlimited Team members
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Priority Email Support
              </li>
            </ul>
          </div>

          <a href="#none" class="btn btn--outline btn--secondary full-width top-margin-auto">Talk to us</a>
        </div>
      </div>
    </div>

    <div class="bg-white border-radius-2 pricing-plan-table pricing-tab pricing-tab--2">
      <div class="flex flex-column">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Starter</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="tubs semi-bold">$<?php echo number_format(floor((49 * 12) * 0.9), 0); ?></span><span class="font-gray-dark">/yr</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>2,000</strong> Customers </li>
              <li class="no-margin"><strong>10,000</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>1M</strong> Data points/mo</span>

                <span class="tooltip" data-label="This is a tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--starter regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

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

          <a class="btn btn--outline btn--success full-width top-margin-auto" href="">Try for free</a>
        </div>
      </div>
      <div class="flex flex-column">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Pro</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>

            <div><span class="tubs semi-bold">$<?php echo number_format(floor((199 * 12) * 0.9), 0); ?></span><span class="font-gray-dark">/yr</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>10,000</strong> Customers </li>
              <li class="no-margin"><strong>75,000</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>7.5M</strong> Data points/mo</span>

                <span class="tooltip" data-label="This is a tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--pro regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                <span>Everything from <strong>Starter</strong></span>
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                5 Team members
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                AB Testing
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Custom Webhooks
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Team Access Management
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                24/7 Email Support
              </li>
            </ul>
          </div>

          <a href="" class="btn btn--outline btn--success full-width top-margin-auto">Try for free</a>
        </div>
      </div>
      <div class="flex flex-column relative">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Growth</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="tubs semi-bold">$<?php echo number_format(floor((599 * 12) * 0.9), 0); ?></span><span class="font-gray-dark">/yr</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>75,000</strong> Customers </li>
              <li class="no-margin"><strong>375,000</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>37M</strong> Data points/mo</span>

                <span class="tooltip" data-label="A 'data point' is any event 'track' that you record, read more in our help docs.">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--growth regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                <span>Everything from <strong>Pro</strong></span>
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                20 Team members
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Multi-Language Campaigns
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Dedicated IP Address
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                BYO Email Provider
              </li>
            </ul>
          </div>

          <a href="#none" class="btn btn--outline btn--success full-width top-margin-auto">Try for free</a>
        </div>
      </div>
      <div class="flex flex-column">
        <header class="pricing-plan-table-header">
          <h2 class="micro">Enterprise</h2>
        </header>

        <div class="pricing-plan-table-body flex flex-column">
          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Starting at</span>
            <div><span class="tubs semi-bold">$<?php echo number_format(floor((1299 * 12) * 0.9), 0); ?></span><span class="font-gray-dark">/yr</span></div>
          </div>

          <div class="stack-xxs">
            <span class="font-gray-dark show regular annotation">Including</span>

            <ul class="unstyled-list">
              <li class="no-margin"><strong>250,000&plus;</strong> Customers </li>
              <li class="no-margin"><strong>1,250,000&plus;</strong> Messages/mo</li>
              <li class="no-margin flex items-center">
                <span class="right-margin-xxs"><strong>125M&plus;</strong> Data points/mo</span>

                <span class="tooltip" data-label="This is a tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#CED0D5" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.412-8.518c.777 0 1.44.37 1.236 1.518-.204 1.148-.478 2.059-.671 2.85-.193.791 1.024.406 1.3.406v.45c-.56.274-1.107.412-1.642.412-.804 0-1.686-.412-1.43-1.581.254-1.17.486-1.903.626-2.537.14-.634-.14-.726-.493-.726-.235 0-.489.046-.763.139v-.564c.707-.245 1.32-.367 1.837-.367zm.906-2.847a1.07 1.07 0 110 2.141 1.07 1.07 0 010-2.14z" fill-rule="evenodd"/></svg>
                </span>
              </li>
              <li class="no-margin"><a class="js-overage-calculator js-overage-calculator--enterprise regular annotation underline-link font-gray-dark" href="#none">Additional usage charges</a></li>
            </ul>
          </div>

          <div class="pricing-features">
            <span class="font-gray-dark show regular annotation bottom-margin-xs">Features</span>

            <ul class="unstyled-list annotation">
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                <span>Everything from <strong>Growth</strong></span>
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Unlimited Team members
              </li>
              <li class="flex items-center no-margin">
                <svg class="right-margin-xxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>

                Priority Email Support
              </li>
            </ul>
          </div>

          <a href="#none" class="btn btn--outline btn--secondary full-width top-margin-auto">Talk to us</a>
        </div>
      </div>
    </div>

    <p class="font-gray-dark italic center-text">No credit card required. 30 day free trial on all plans</p>
  </div>
</section>
<section class="double-padding">
  <div class="inner large-inner center-text stack-md">
    <h2 class="micro semi-bold font-gray-dark">Trusted by leading brands</h2>

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
  <div class="inner large-inner stack-lg">
    <h2 class="chunk semi-bold center-text">Feature comparison</h2>

    <div>
      <div class="pricing-feature-table is-sticky no-margin">
        <div class="pricing-feature-table-row is-sticky flex font-text">
          <div>
          </div>
          <div class="center-text">
            <strong class="medium regular">Starter</strong>
          </div>
          <div class="center-text">
            <strong class="medium regular">Pro</strong>
          </div>
          <div class="center-text">
            <strong class="medium regular">Grow</strong>
          </div>
          <div class="center-text">
            <strong class="medium regular">Enterprise</strong>
          </div>
        </div>
      </div>

      <div class="stack-lg">
        <div class="pricing-feature-table">
          <div class="pricing-feature-table-row flex border-bottom-light">
            <div>
              <strong class="medium regular">Message Automation</strong>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>

          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Newsletter Campaigns</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Segmentation</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Workflow automated campaigns</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Conversion tracking</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Campaign reporting</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Form builder</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">AB testing</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
        </div>

        <div class="pricing-feature-table">
          <div class="pricing-feature-table-row flex border-bottom-light">
            <div>
              <strong class="medium regular">Design, branding &amp; customization</strong>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>

          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Drag &amp; drop template builder</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Example email templates</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Custom domain signing</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Multi-language campaigns (Internationalization)</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
        </div>

        <div class="pricing-feature-table">
          <div class="pricing-feature-table-row flex border-bottom-light">
            <div>
              <strong class="medium regular">Developer tooling</strong>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>

          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">API access</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Developer documentation</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Integrations</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Data sync (webhooks)</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Dedicated IP</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">BYO email providers</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
        </div>

        <div class="pricing-feature-table">
          <div class="pricing-feature-table-row flex border-bottom-light">
            <div>
              <strong class="medium regular">Security &amp; privacy</strong>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>

          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">GDPR compliance</div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Team member permission management</div>
            <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#E1E2E5" stroke-linecap="round" stroke-width="2" d="M2 8h12" fill="none" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
            <div class="flex items-center justify-center">
              <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#6FD350" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"/></svg>
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Team members</div>
            <div class="flex items-center justify-center">
              1
            </div>
            <div class="flex items-center justify-center">
              5
            </div>
            <div class="flex items-center justify-center">
              20
            </div>
            <div class="flex items-center justify-center">
              Unlimited
            </div>
          </div>
        </div>

        <div class="pricing-feature-table">
          <div class="pricing-feature-table-row flex border-bottom-light">
            <div>
              <strong class="medium regular">Data handling &amp; message quotas</strong>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>

          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Customers (contacts/subscribers)</div>
            <div class="flex items-center justify-center">
              2,000
            </div>
            <div class="flex items-center justify-center">
              15,000
            </div>
            <div class="flex items-center justify-center">
              75,000
            </div>
            <div class="flex items-center justify-center">
              250,000&plus;
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Messages sent per month (email or push)</div>
            <div class="flex items-center justify-center">
              10,000
            </div>
            <div class="flex items-center justify-center">
              75,000
            </div>
            <div class="flex items-center justify-center">
              375,000
            </div>
            <div class="flex items-center justify-center">
              1,250,000&plus;
            </div>
          </div>
          <div class="annotation pricing-feature-table-row flex border-bottom-light">
            <div class="strong">Data points monthly quota</div>
            <div class="flex items-center justify-center">
              1M
            </div>
            <div class="flex items-center justify-center">
              7.5M
            </div>
            <div class="flex items-center justify-center">
              37.5M
            </div>
            <div class="flex items-center justify-center">
              125M
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner">
    <h2 class="chunk regular center-text bottom-margin-xl">Frequently Asked Questions</h2>

    <ul class="unstyled-list stack-md pricing-questions">
      <li>
        <details class="stack-sm">
          <summary>
            <div class="flex items-center">
              <h3 class="micro regular no-bottom-margin">What happens if I go over my subscriber limit?</h3>

              <svg class="left-margin-auto" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M13.001 11.946l-4.667-4.86c-.445-.463-.446-1.242 0-1.735.454-.467 1.185-.468 1.667 0l5.333 5.554c.445.65.446 1.43 0 2.082l-5.333 5.554c-.48.467-1.212.468-1.667 0-.445-.492-.446-1.271 0-1.735l4.667-4.86z" fill="#9D9D9D" fill-rule="evenodd"/></svg>
            </div>
          </summary>
          <div class="answer">
            <p class="medium">Vero will send you an email when you cross the subscriber threshold of your current plan. Your account will be automatically upgraded to a new plan, which will be reflected in your your next invoice.</p>
            <p class="medium">As your usage fluctuates you can downgrade your plan during the next billing period, ensuring you minimize your spend each month.</p>
          </div>
        </details>
      </li>
      <li>
        <details class="stack-sm">
          <summary>
            <div class="flex items-center">
              <h3 class="micro regular no-bottom-margin">What support does Vero provide?</h3>

              <svg class="left-margin-auto" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M13.001 11.946l-4.667-4.86c-.445-.463-.446-1.242 0-1.735.454-.467 1.185-.468 1.667 0l5.333 5.554c.445.65.446 1.43 0 2.082l-5.333 5.554c-.48.467-1.212.468-1.667 0-.445-.492-.446-1.271 0-1.735l4.667-4.86z" fill="#9D9D9D" fill-rule="evenodd"/></svg>
            </div>
          </summary>
          <div class="answer">
            <p class="medium">Our global support team is on hand to help 24 hours a day. We have dedicated support team members in Australia, Europe, and the USA. Our email support has a customer satisfaction rating of over 98%.</p>

            <p class="medium">We also provide urgent, emergency support for customers on our high-volume plans - <a class="typeform-share" data-mode="popup" href="https://getvero.typeform.com/to/d9wZ4V" target="_blank">talk to our sales team</a> to learn more.</p>
          </div>
        </details>
      </li>
      <li>
        <details class="stack-sm">
          <summary>
            <div class="flex items-center">
              <h3 class="micro regular no-bottom-margin">Can I pay annually?</h3>

              <svg class="left-margin-auto" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M13.001 11.946l-4.667-4.86c-.445-.463-.446-1.242 0-1.735.454-.467 1.185-.468 1.667 0l5.333 5.554c.445.65.446 1.43 0 2.082l-5.333 5.554c-.48.467-1.212.468-1.667 0-.445-.492-.446-1.271 0-1.735l4.667-4.86z" fill="#9D9D9D" fill-rule="evenodd"/></svg>
            </div>
          </summary>
          <div class="answer">
            <p class="medium">You sure can. We offer a 15% discount when you subscribe to an annual plan. <a href="https://help.getvero.com/articles/annual-plan-discount.html">Find out more about annual plans</a>.</p>
          </div>
        </details>
      </li>
      <li>
        <details class="stack-sm">
          <summary>
            <div class="flex items-center">
              <h3 class="micro regular no-bottom-margin">Can I use sub-accounts?</h3>

              <svg class="left-margin-auto" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M13.001 11.946l-4.667-4.86c-.445-.463-.446-1.242 0-1.735.454-.467 1.185-.468 1.667 0l5.333 5.554c.445.65.446 1.43 0 2.082l-5.333 5.554c-.48.467-1.212.468-1.667 0-.445-.492-.446-1.271 0-1.735l4.667-4.86z" fill="#9D9D9D" fill-rule="evenodd"/></svg>
            </div>
          </summary>
          <div class="answer">
            <p class="medium">In Vero, sub-accounts are called <strong>Projects</strong>. Each project has it's own subscriber database, API keys, and campaigns. In other words, it’s like having two or more Vero accounts that you can easily jump between. You can also think of them as <strong>free sandboxes</strong>.</p>
            <p class="medium">If you’re an agency, you may also use projects to manage multiple clients.</p>
          </div>
        </details>
      </li>
      <li>
        <details class="stack-sm">
          <summary>
            <div class="flex items-center">
              <h3 class="micro regular no-bottom-margin">Does the data I send Vero belong to me?</h3>

              <svg class="left-margin-auto" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M13.001 11.946l-4.667-4.86c-.445-.463-.446-1.242 0-1.735.454-.467 1.185-.468 1.667 0l5.333 5.554c.445.65.446 1.43 0 2.082l-5.333 5.554c-.48.467-1.212.468-1.667 0-.445-.492-.446-1.271 0-1.735l4.667-4.86z" fill="#9D9D9D" fill-rule="evenodd"/></svg>
            </div>
          </summary>
          <div class="answer">
            <p class="medium">Absolutely. The data you send us belongs to you. Vero collects and processes all data securely, in accordance with legislation, including EU GDPR. At any time, you can export or request us to remove your data. Read our <a href="https://www.getvero.com/terms-of-service/" rel="noopener" target="_blank">Terms of Service</a> for more details.</p>
          </div>
        </details>
      </li>
    </ul>
  </div>
</section>
<section class="bg-gray-lighter">
  <div class="inner tiny-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <a class="btn btn--success btn--large bottom-margin-sm start-a-free-trial" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<section class="js-modal overlay-modal bg-dark-blue-lighter shadow-1 stack-md">
  <h2 class="center-text">Overage calculator</h2>

  <div class="flex flex-column md-flex-row pricing-overage-calculator">
    <div class="pricing-overage-calculator-body">
      <div class="stack-md">
        <div class="stack-xs">
          <h3>How many customers do you have?</h3>

          <div class="js-pricing-slider-value chunk regular font-gray-dark"></div>
          <div class="js-pricing-customer-slider pricing-customer-slider"></div>
        </div>

        <div class="flex pricing-overage-values border-bottom bottom-padding-md">
          <div class="stack-xxxs">
            <h4>Messages</h4>
            <div class="js-pricing-messages-value atomic regular font-gray-dark"></div>
          </div>

          <div class="stack-xxxs">
            <h4>Data points</h4>
            <div class="js-pricing-data-points-value atomic regular font-gray-dark"></div>
          </div>
        </div>

        <p class="annotation font-gray-dark">To keep things simple, we charge overage based on the one customer metric.</p>
      </div>
    </div>

    <div class="pricing-overage-calculator-footer bg-white padding-md border border-radius-2 shadow-1 stack-md">
      <div class="stack-sm">
        <div class="flex">
          <div>
            <h4 class="atomic semi-bold no-margin">Plan</h4>
            <div class="relative">
              <div class="js-pricing-plan-name regular font-gray-dark pointer">Starter</div>

              <div class="js-pricing-plan-dropdown bg-white absolute pricing-plan-dropdown border-light border-radius-2 shadow-1">
                <ul class="unstyled-list no-margin stack-xxs">
                  <li class="js-test is-active">Starter</li>
                  <li class="js-test">Pro</li>
                  <li class="js-test">Growth</li>
                  <li class="js-test">Enterprise</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="right-text">
            <span class="atomic semi-bold">$<span class="js-pricing-plan-price">49</span></span>
            <span class="font-gray-dark">/mo</span>
          </div>
        </div>

        <div class="flex border-bottom bottom-padding-md">
          <div>
            <h4 class="atomic semi-bold no-margin">Additional customers</h4>
            <div class="js-pricing-additional-customers regular font-gray-dark"></div>
          </div>
          <div class="right-text">
            <span class="atomic semi-bold">$<span class="js-pricing-additional-price">49</span></span>
            <span class="font-gray-dark">/mo</span>
          </div>
        </div>
      </div>

      <div class="flex">
        <div>
          <h4 class="atomic semi-bold no-margin">Your total payment</h4>
        </div>
        <div class="right-text">
          <span class="atomic semi-bold">$<span class="js-pricing-total-cost"></span></span>
          <span class="font-gray-dark">/mo</span>
        </div>
      </div>

      <a class="btn btn--large btn--success full-width start-a-free-trial" href="#none">Try for free</a>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
