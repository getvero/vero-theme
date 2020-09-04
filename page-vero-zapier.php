<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-zapier';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="integration-hero overflow-hidden" banner-name="Connect Vero and Zapier" element-position="top">
  <div class="inner large-inner flex flex-wrap items-center">
    <div class="col-main order-2 md-order-1 stack-lg">
      <span class="d-inline-block atomic semi-bold font-gray-dark">Integrations</span>

      <div class="stack-sm">
        <h1 class="biggie semi-bold">Connect Vero and Zapier</h1>

        <p class="large">Zapier makes it easy to add customers and their properties as well as tracking events.</p>

        <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup">Start a free trial</a>
      </div>
    </div>
    <div class="col-aside order-1 md-order-2 center-text relative">
      <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/zapier/hero.svg" alt="Zapier and Vero">

      <svg class="absolute orange-line" width="311" height="171" xmlns="http://www.w3.org/2000/svg"><path d="M309 2.547H141.69c-22.052 0-39.93 17.877-39.93 39.93 0 22.054 17.878 39.931 39.93 39.931h56.916c23.724 0 42.957 19.233 42.957 42.957v.113c-.063 23.804-19.378 43.069-43.183 43.069H-2h0" stroke="#FF4A00" stroke-width="4" fill="none" fill-rule="evenodd" stroke-dasharray="0,10" stroke-linecap="round" stroke-linejoin="round"/></svg>

      <svg class="absolute blue-line" width="334" height="173" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M2 2h209.042c23.357 0 42.313 18.894 42.39 42.25.076 23.258-18.717 42.173-41.974 42.25h-63.232c-23.334 0-42.25 18.916-42.25 42.25S124.892 171 148.226 171H340" stroke="#01B2D0" stroke-dasharray="0,10" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g></svg>
    </div>
  </div>
  <div class="inner large-inner bottom-padding-lg relative">
    <div class="bg-primary-lighter border-radius-2 border-primary integration-about">
      <div class="flex">
        <div class="stack-xs">
          <div class="flex items-start">
            <svg class="align-middle border-radius-1 right-margin-xxs" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FF4A00" d="M0 0h24v24H0z"/><path d="M13.75 12.003c0 .52-.096 1.018-.269 1.478-.46.173-.958.269-1.478.27h-.006c-.52-.001-1.018-.097-1.478-.27a4.187 4.187 0 01-.269-1.478v-.006c0-.52.096-1.018.269-1.478.46-.173.958-.269 1.478-.269h.006c.52 0 1.018.096 1.478.27.173.459.269.957.269 1.477v.006zm5.153-1.17h-4.086l2.889-2.889a7.055 7.055 0 00-1.65-1.65l-2.89 2.89V5.097A7.033 7.033 0 0012.004 5h-.008c-.396 0-.784.034-1.163.097v4.087l-2.889-2.89a6.99 6.99 0 00-.893.756l-.002.001a7.044 7.044 0 00-.755.893l2.89 2.89H5.097S5 11.6 5 11.997v.004c0 .397.034.786.097 1.165h4.087l-2.89 2.889a7.05 7.05 0 001.65 1.65l2.89-2.89v4.087c.377.063.765.097 1.16.097h.01c.397 0 .785-.034 1.162-.097v-4.087l2.89 2.89a7.068 7.068 0 001.65-1.65l-2.89-2.89h4.087c.063-.377.097-.765.097-1.16v-.011c0-.396-.034-.784-.097-1.162z" fill="#FFF"/></g></svg>

            <h2 class="semi-bold atomic no-margin">About Zapier</h2>
          </div>

          <p>Zapier is an online automation tool that connects your favorite apps, such as Gmail, Slack, Mailchimp, and more. You can connect two or more apps to automate repetitive tasks without coding or relying on developers to build the integration. It's easy enough that anyone can build their own app workflows with just a few clicks.</p>
        </div>

        <div class="stack-xs">
          <div class="flex items-start">
            <svg class="align-middle border-radius-1 right-margin-xxs" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(-29.066 -456.066)"><circle stroke="#F1F1F1" stroke-width="2" cx="395.066" cy="395.066" r="360"/><path d="M592.566 52.986C403.64-56.09 162.062 8.64 52.986 197.566-56.09 386.492 8.64 628.07 197.566 737.146c188.926 109.076 430.504 44.346 539.58-144.58 109.076-188.926 44.346-430.504-144.58-539.58z" stroke="#E1E1E1" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2378.4,238"/></g><path fill="#01B2D0" d="M0 0h24v24H0z"/><path d="M18.101 5.001L18.041 5H5.872C4.83 5 4 5.869 4 6.959c0 .244.045.479.126.695.039.122.089.241.151.357l6.05 10.955c.087.157.191.297.308.418.34.378.828.616 1.374.616.455 0 .875-.178 1.197-.47.183-.15.343-.34.467-.564l6.05-10.955c.061-.114.11-.23.148-.35.083-.218.129-.455.129-.702C20 5.869 19.17 5 18.163 5l-.062.001zm-5.503 10.301l4.784-8.688a.664.664 0 00.035-.054.826.826 0 01.746-.472c.432 0 .797.382.797.87a.912.912 0 01-.139.472.05.05 0 00-.017.037l-5.27 9.54-.936-1.705zM5.942 6.088H16.48l-.936 1.705H5.838a.83.83 0 01-.815-.834c0-.49.364-.87.815-.87h.104zm3.112 2.793h5.892L12 14.216 9.054 8.88zm2.192 9.577c.001-.013-.005-.023-.017-.036l-5.253-9.54h1.872l4.802 8.688a.25.25 0 00.035.072.943.943 0 01.121.472c0 .452-.364.834-.797.834a.844.844 0 01-.763-.49z" fill="#FFF"/></g></svg>

            <h2 class="semi-bold atomic no-margin">About Vero</h2>
          </div>

          <p>Vero helps you send behavioral and transactional emails. Our emails are data-driven, so you're never guessing when to send an email or who to send it to. Trigger a coupon when a customer views a product twice, or help a new user get started when they download your software.</p>
        </div>
      </div>
    </div>

    <div class="circles absolute overflow-hidden">
      <div class="outer-circles">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/outer-circles.svg" alt="Outer circles">
      </div>
      <div class="absolute inner-circles">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/inner-circles.svg" alt="Inner circles">
      </div>
    </div>
  </div>
</section>
<section class="double-padding integration-zapier-connect">
  <div class="inner medium-inner border-bottom">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main stack-md">
        <div class="stack-xs">
          <h2 class="tubs">Connect Vero and Zapier to integrate beyond your product</h2>
          <p class="medium">Vero's Zapier integration enables you to import data from across your organization, enriching the core product data that Vero integrates with so tightly. Using the Vero Zapier integration you can trigger actions in thousands of business tools.</p>
        </div>
        <a class="btn btn--secondary btn--outline" href="#none">View documentation</a>
      </div>

      <div class="col-aside stack-md">
        <div class="flex">
          <div class="right-margin-sm">
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g stroke="#01B2D0" stroke-width="2"><rect x="7" y="27" width="14" height="14" rx="4"/><rect x="27" y="27" width="14" height="14" rx="4"/><rect x="7" y="7" width="14" height="14" rx="4"/><rect opacity=".2" x="27" y="7" width="14" height="14" rx="4"/></g><path d="M577.5-779.08C388.574-888.156 146.996-823.426 37.92-634.5-71.156-445.574-6.426-203.996 182.5-94.92 371.426 14.156 613.004-50.574 722.08-239.5c109.076-188.926 44.346-430.504-144.58-539.58z" stroke="#E1E1E1" stroke-dasharray="2378.4,238" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g></svg>
          </div>

          <div class="stack-xxxs">
            <h3 class="atomic">Access 2,000&plus; business apps</h3>
            <p>With Zapier, you can send data to Vero from thousands of integrations and synchronize key stages of the customer journey for personalized, targeted messages at scale.</p>
          </div>
        </div>

        <div class="flex">
          <div class="right-margin-sm">
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g stroke="#F15242" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M27.577 13.113l14.266 10.07a1 1 0 010 1.634l-14.266 10.07A1 1 0 0126 34.07V13.93a1 1 0 011.577-.817z" fill="#F15242" opacity=".4"/><path d="M7.577 13.113l14.266 10.07a1 1 0 010 1.634L7.577 34.887A1 1 0 016 34.07V13.93a1 1 0 011.577-.817z" fill="#FFF"/></g></svg>
          </div>

          <div class="stack-xxxs">
            <h3 class="atomic">Reduce time-to-live</h3>
            <p>Using Vero Zap, import data from your business applications without custom code and engineering hours which helps you iterate and go from <strong>idea</strong> to <strong>live</strong> faster</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding border-bottom integration-zapier-automate">
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs semi-bold">Automate at a whole new level</h2>
        <p class="medium">With Zapier and Vero together, when it comes to messaging if you can dream it, then you can build it.</p>

        <p class="medium">Zapier's no-code interface enables anyone on the team to send data to Vero, whether technical or not, from thousands of business applications. Empowering you to unlock more data and streamline your customer experience, the Vero Zap helps your team to move faster, test more ideas, personalize at a more granular level and deliver great products.</p>
      </div>
      <div class="col-aside relative center-text lg-right-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/zapier/automate.svg" alt="Automate at a whole new level">
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner medium-inner stack-md">
    <h2 class="chunk semi-bold center-text">Create your own automation journey</h2>

    <div class="integration-triggers-actions flex justify-between">
      <div class="stack-md center-text triggers">
        <div class="stack-xs">
          <div>
            <svg class="align-middle" width="60" height="60" xmlns="http://www.w3.org/2000/svg"><path d="M42.666 27.81c.75-.92.155-2.38-.968-2.38h-8.37l3.89-13.565c.42-1.466-1.275-2.526-2.208-1.38L17.334 32.188c-.75.92-.155 2.38.968 2.38h8.364L22.78 48.136c-.42 1.466 1.276 2.526 2.209 1.38l17.676-21.704z" fill-rule="nonzero" stroke="#FFC111" stroke-width="2" fill="none"/></svg>
          </div>

          <div class="stack-xxs">
            <span class="show annotation semi-bold uppercase font-gray-dark tracked">Triggers</span>
            <h3 class="micro semi-bold">When this happens…</h3>
          </div>
        </div>

        <ul class="unstyled-list padding-md border-radius-2 border bg-offwhite stack-xxs">
          <li class="d-inline-block bg-white border border-radius-2 bottom-margin-xs">
            <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
          </li>
          <li>
            <span class="show atomic regular">Update user</span>
          </li>
          <li>
            <span class="atomic regular">New user</span>
          </li>
          <li>
            <span class="atomic regular">Unsubscribed user</span>
          </li>
        </ul>
      </div>

      <div class="stack-md center-text actions">
        <div class="stack-xs">
          <div>
            <svg class="align-middle" width="60" height="60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M30 21a1 1 0 011 1v7h7a1 1 0 010 2h-7v7a1 1 0 01-2 0v-7h-7a1 1 0 010-2h7v-7a1 1 0 011-1z" fill="#F15242"/><circle stroke="#F15242" stroke-width="2" cx="30" cy="30" r="17"/></g></svg>
          </div>

          <div class="stack-xxs">
            <span class="show annotation semi-bold uppercase font-gray-dark tracked">Actions</span>
            <h3 class="micro semi-bold">Do this…</h3>
          </div>
        </div>

        <ul class="unstyled-list padding-md border-radius-2 border bg-offwhite stack-xxs">
          <li class="d-inline-block bg-white border border-radius-2 bottom-margin-xs">
            <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
          </li>
          <li>
            <span class="show atomic regular">Create or update a user</span>
          </li>
          <li>
            <span class="atomic regular">Track an event</span>
          </li>
          <li>
            <span class="atomic regular">Unsubscribe a user</span>
          </li>
          <li>
            <span class="atomic regular">Update user tags</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter">
  <div class="inner large-inner center-text stack-md">
    <h2 class="chunk semi-bold">Zapier recipes</h2>

    <input class="hide retention-radio" id="retention-recipe" name="integration-zapier" type="checkbox" checked>
    <input class="hide acquisition-radio" id="acquisition-recipe" name="integration-zapier" type="checkbox" checked>

    <div class="flex justify-center integration-recipe-switcher">
      <label class="flex items-center integration-label semi-bold" data-category="acquisition" for="acquisition-recipe">
        <svg class="align-middle right-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#ffffff" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"></path></svg>

        <span>Acquisition</span>
      </label>
      <label class="flex items-center integration-label semi-bold" data-category="retention" for="retention-recipe">
        <svg class="align-middle right-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#ffffff" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"></path></svg>

        <span>Retention</span>
      </label>
    </div>

    <ul class="integration-recipe-list unstyled-list flex flex-wrap">
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention acquisition">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="39" height="39" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M19.58 37.93c5.254.266 10.367-.093 14.028-3.487 3.66-3.394 4.784-7.935 4.277-13.485-.507-5.55-2.866-10.274-6.813-14.262C27.125 2.71 22.868.774 18.15 1.021c-4.718.247-7.239 3.248-10.669 6.91-3.43 3.662-6.452 6.363-6.48 11.4-.028 5.036 2.624 10.064 6.34 13.784 3.716 3.72 6.987 4.55 12.24 4.815z" stroke="#262627" stroke-width=".841"/><path fill="#262627" fill-rule="nonzero" d="M14.712 16.483v-1.991h10.494v1.991h-4.2V27.9h-2.093V16.483z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Add new Typeform response as a Vero event</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Acquisition</span>
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="acquisition">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="46" height="46" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M23.096 44.917c6.248.316 12.328-.11 16.681-4.147 4.353-4.037 5.69-9.437 5.086-16.036-.603-6.6-3.408-12.218-8.101-16.96-4.694-4.742-9.757-7.043-15.368-6.75-5.611.295-8.609 3.863-12.688 8.218C4.628 13.597 1.034 16.809 1 22.798c-.033 5.99 3.12 11.97 7.54 16.393 4.419 4.424 8.309 5.41 14.556 5.726z" stroke="#262627"/><path fill="#262627" fill-rule="nonzero" d="M17.306 19.413v-2.369h12.48v2.369H24.79v13.574H22.3V19.413z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Send new leads from Facebook Lead Ads to Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Acquisition</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="40" height="40" xmlns="http://www.w3.org/2000/svg"><g fill="#03F" fill-rule="nonzero"><path d="M19.865.11C9.009.11.222 8.899.222 19.755c0 10.855 8.787 19.643 19.643 19.643 10.855 0 19.643-8.788 19.643-19.643C39.508 8.898 30.72.11 19.865.11zm-.702 27.36l-1.44 4.247c-.037.148-.11.258-.185.37a1.731 1.731 0 01-.701.664 1.715 1.715 0 01-.85.221c-.184 0-.405-.037-.59-.11-.812-.296-1.33-1.108-1.219-1.92a12.542 12.542 0 01-6.83-11.188c0-6.942 5.612-12.59 12.59-12.59.813 0 1.588.073 2.364.22a1.874 1.874 0 012.141-.775c.443.148.775.443.997.813.185.332.295.701.258 1.107 0 .148-.036.296-.073.406l-1.44 4.247-5.022 14.289zm1.588 4.838l1.735-5.243a7.736 7.736 0 005.132-7.311c0-1.588-.48-3.102-1.329-4.32l1.736-5.243a12.53 12.53 0 014.43 9.563c-.037 6.646-5.169 12.074-11.704 12.554z"/><path d="M12.11 19.754c0 2.732 1.44 5.132 3.582 6.535l4.874-14.252c-.221-.037-.48-.037-.701-.037a7.753 7.753 0 00-7.754 7.754z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Add new Unbounce submissions to Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="37" height="37" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="29.774%" y1="48.644%" x2="67.535%" y2="55.645%" id="a"><stop stop-color="#F1CEBA" offset="0%"/><stop stop-color="#B8846F" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><path d="M37 18.5C37 28.717 28.717 37 18.5 37S0 28.718 0 18.5 8.282 0 18.5 0 37 8.283 37 18.5z" fill="#424242" fill-rule="nonzero" opacity=".1"/><path d="M33.648 21.552l2.248-9.357a18.558 18.558 0 00-9.527-10.438L22.991 19.98 10.404 30.2l23.244-8.648z" fill="#000" fill-rule="nonzero" opacity=".05"/><path d="M18.5 0a18.5 18.5 0 00-4.987.685l-1.657 6.122 3.45.49 3.558 1.221 3.213 1.612 2.56-9.082A18.46 18.46 0 0018.5 0z" fill="#F38632" fill-rule="nonzero"/><path fill="#4E4E4E" fill-rule="nonzero" d="M13.87 24.475l-3.466 5.724.414-6.72 1.016.041 1.239.343z"/><path fill="url(#a)" fill-rule="nonzero" d="M13.87 24.475l-.797-.612-1.24-.343-1.015-.04 1.039-16.673 3.45.49 3.557 1.221 3.214 1.61z"/><path d="M13.514.685l-1.657 6.122 3.45.49L17.406.034a18.448 18.448 0 00-3.892.65z" fill="#F6A259" fill-rule="nonzero"/><path d="M24.637 1.047A18.362 18.362 0 0021.353.22l-2.489 8.3-8.46 21.68 3.471-5.724 8.203-14.346 2.56-9.082z" fill="#1A1A1A" fill-rule="nonzero" opacity=".2" style="mix-blend-mode:multiply"/><path fill="#FFF" fill-rule="nonzero" opacity=".15" d="M10.404 30.112l4.903-22.817-3.45-.488z"/><path d="M37 18.5C37 28.717 28.717 37 18.5 37S0 28.718 0 18.5 8.282 0 18.5 0 37 8.283 37 18.5z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>


            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Add new JotForm customers to Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="40" height="40" xmlns="http://www.w3.org/2000/svg"><g fill="#03F" fill-rule="nonzero"><path d="M19.865.11C9.009.11.222 8.899.222 19.755c0 10.855 8.787 19.643 19.643 19.643 10.855 0 19.643-8.788 19.643-19.643C39.508 8.898 30.72.11 19.865.11zm-.702 27.36l-1.44 4.247c-.037.148-.11.258-.185.37a1.731 1.731 0 01-.701.664 1.715 1.715 0 01-.85.221c-.184 0-.405-.037-.59-.11-.812-.296-1.33-1.108-1.219-1.92a12.542 12.542 0 01-6.83-11.188c0-6.942 5.612-12.59 12.59-12.59.813 0 1.588.073 2.364.22a1.874 1.874 0 012.141-.775c.443.148.775.443.997.813.185.332.295.701.258 1.107 0 .148-.036.296-.073.406l-1.44 4.247-5.022 14.289zm1.588 4.838l1.735-5.243a7.736 7.736 0 005.132-7.311c0-1.588-.48-3.102-1.329-4.32l1.736-5.243a12.53 12.53 0 014.43 9.563c-.037 6.646-5.169 12.074-11.704 12.554z"/><path d="M12.11 19.754c0 2.732 1.44 5.132 3.582 6.535l4.874-14.252c-.221-.037-.48-.037-.701-.037a7.753 7.753 0 00-7.754 7.754z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>


            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Add new Sumo subscribers to Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="34" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="#615279" fill-rule="nonzero"><path d="M22.967 27.426c0 .309-.213.54-.524.54H10.718a.532.532 0 01-.547-.54v-2.399c0-.286.11-.56.317-.758l1.409-1.352.842-7.808a.647.647 0 00-.222-.559l-1.135-.988a.994.994 0 01-.336-.766V8.982c0-.32.228-.581.551-.581h1.72c.304 0 .572.245.572.547v.866h1.422v-.839c0-.317.269-.574.588-.574h1.412c.304 0 .515.245.515.547v.866h1.422V9c0-.331.315-.6.648-.6h1.703c.304 0 .602.246.602.548v3.927c0 .247-.119.485-.287.667l-1.198 1.02a.616.616 0 00-.215.528l.843 7.827 1.409 1.427c.15.15.214.354.214.567v2.515zm7.417-20.347L19.344.739a5.568 5.568 0 00-5.541 0l-11.04 6.34C.735 8.183 0 9.883 0 11.853v12.68a5.5 5.5 0 002.766 4.774l11.045 6.34a5.572 5.572 0 005.545 0l11.029-6.34a5.487 5.487 0 002.753-4.774v-12.68c0-1.97-1.038-3.79-2.754-4.774z"/><path d="M16.613 19.462c-.9-.024-1.63.767-1.63 1.667v3.37c0 .184.176.35.359.35h2.437c.206 0 .376-.184.376-.39v-3.33c0-.906-.645-1.643-1.542-1.667"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>


            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Create or update customers in Vero from FormKeep submissions</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="41" height="32" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path fill="#E9A826" d="M20.024 27.045l-4.62-4.62-2.34 2.35 6.96 6.96 11.65-11.65-2.34-2.349z"/><path d="M34.215 5.877c-7.838-7.836-20.544-7.836-28.382 0L0 11.711l9.519 9.527 2.349-2.35.008-.008-3.685-3.685 3.485-3.476L8.2 8.244a16.719 16.719 0 0123.648 0l-3.484 3.475 5.833 5.843 5.842-5.834-5.824-5.85z" fill="#292A2A"/><path fill="#292A2A" d="M14.182 14.226l5.842 5.833 5.834-5.833H14.182z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>


            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Create or update customer profiles in Vero from new Survicate question responses</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="37" height="37" xmlns="http://www.w3.org/2000/svg"><path d="M31.441 30.948h-5.382V22.52c0-2.01-.036-4.597-2.799-4.597-2.803 0-3.232 2.19-3.232 4.45v8.574h-5.382V13.615h5.167v2.369h.072a5.662 5.662 0 015.098-2.8c5.455 0 6.46 3.588 6.46 8.256l-.002 9.508zM8.574 11.246A3.123 3.123 0 118.573 5a3.123 3.123 0 010 6.246m2.692 19.702H5.877V13.615h5.388v17.333zM34.125.002H3.172A2.65 2.65 0 00.493 2.62V33.7a2.653 2.653 0 002.68 2.62h30.951a2.658 2.658 0 002.691-2.62V2.618A2.657 2.657 0 0034.125 0" fill="#0A66C2" fill-rule="nonzero"/></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Send new leads from LinkedIn Lead Get Forms to Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="60" height="25" xmlns="http://www.w3.org/2000/svg"><g fill="#32325D" fill-rule="evenodd"><path d="M60 12.9c0-4.267-2.067-7.633-6.017-7.633-3.966 0-6.366 3.366-6.366 7.6 0 5.016 2.833 7.55 6.9 7.55 1.983 0 3.483-.45 4.616-1.084V16c-1.133.567-2.433.917-4.083.917-1.617 0-3.05-.567-3.233-2.534h8.15c0-.216.033-1.083.033-1.483zm-8.233-1.583c0-1.884 1.15-2.667 2.2-2.667 1.016 0 2.1.783 2.1 2.667h-4.3zM41.183 5.267c-1.633 0-2.683.766-3.266 1.3L37.7 5.533h-3.667v19.434l4.167-.884.017-4.716c.6.433 1.483 1.05 2.95 1.05 2.983 0 5.7-2.4 5.7-7.684C46.85 7.9 44.1 5.267 41.183 5.267zm-1 11.483c-.983 0-1.566-.35-1.966-.783L38.2 9.783c.433-.483 1.033-.816 1.983-.816 1.517 0 2.567 1.7 2.567 3.883 0 2.233-1.033 3.9-2.567 3.9zM28.3 4.283l4.183-.9V0L28.3.883zM28.3 5.55h4.183v14.583H28.3zM23.817 6.783L23.55 5.55h-3.6v14.583h4.167V10.25c.983-1.283 2.65-1.05 3.166-.867V5.55c-.533-.2-2.483-.567-3.466 1.233zM15.483 1.933l-4.066.867-.017 13.35c0 2.467 1.85 4.283 4.317 4.283 1.366 0 2.366-.25 2.916-.55V16.5c-.533.217-3.166.983-3.166-1.483V9.1h3.166V5.55h-3.166l.016-3.617zM4.217 9.783c0-.65.533-.9 1.416-.9 1.267 0 2.867.384 4.134 1.067V6.033c-1.384-.55-2.75-.766-4.134-.766C2.25 5.267 0 7.033 0 9.983c0 4.6 6.333 3.867 6.333 5.85 0 .767-.666 1.017-1.6 1.017-1.383 0-3.15-.567-4.55-1.333v3.966c1.55.667 3.117.95 4.55.95 3.467 0 5.85-1.716 5.85-4.7-.016-4.966-6.366-4.083-6.366-5.95z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>


            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Add or update Vero contacts when there are new Stripe charges or events</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="60" height="25" xmlns="http://www.w3.org/2000/svg"><g fill="#32325D" fill-rule="evenodd"><path d="M60 12.9c0-4.267-2.067-7.633-6.017-7.633-3.966 0-6.366 3.366-6.366 7.6 0 5.016 2.833 7.55 6.9 7.55 1.983 0 3.483-.45 4.616-1.084V16c-1.133.567-2.433.917-4.083.917-1.617 0-3.05-.567-3.233-2.534h8.15c0-.216.033-1.083.033-1.483zm-8.233-1.583c0-1.884 1.15-2.667 2.2-2.667 1.016 0 2.1.783 2.1 2.667h-4.3zM41.183 5.267c-1.633 0-2.683.766-3.266 1.3L37.7 5.533h-3.667v19.434l4.167-.884.017-4.716c.6.433 1.483 1.05 2.95 1.05 2.983 0 5.7-2.4 5.7-7.684C46.85 7.9 44.1 5.267 41.183 5.267zm-1 11.483c-.983 0-1.566-.35-1.966-.783L38.2 9.783c.433-.483 1.033-.816 1.983-.816 1.517 0 2.567 1.7 2.567 3.883 0 2.233-1.033 3.9-2.567 3.9zM28.3 4.283l4.183-.9V0L28.3.883zM28.3 5.55h4.183v14.583H28.3zM23.817 6.783L23.55 5.55h-3.6v14.583h4.167V10.25c.983-1.283 2.65-1.05 3.166-.867V5.55c-.533-.2-2.483-.567-3.466 1.233zM15.483 1.933l-4.066.867-.017 13.35c0 2.467 1.85 4.283 4.317 4.283 1.366 0 2.366-.25 2.916-.55V16.5c-.533.217-3.166.983-3.166-1.483V9.1h3.166V5.55h-3.166l.016-3.617zM4.217 9.783c0-.65.533-.9 1.416-.9 1.267 0 2.867.384 4.134 1.067V6.033c-1.384-.55-2.75-.766-4.134-.766C2.25 5.267 0 7.033 0 9.983c0 4.6 6.333 3.867 6.333 5.85 0 .767-.666 1.017-1.6 1.017-1.383 0-3.15-.567-4.55-1.333v3.966c1.55.667 3.117.95 4.55.95 3.467 0 5.85-1.716 5.85-4.7-.016-4.966-6.366-4.083-6.366-5.95z"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Add Stripe customers with new Vero contacts</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="80" height="27" xmlns="http://www.w3.org/2000/svg"><g fill="#4284FB" fill-rule="nonzero"><path d="M7.077 23.138a3.44 3.44 0 01-3.446 3.447 3.44 3.44 0 01-3.446-3.447 3.44 3.44 0 013.446-3.446 3.44 3.44 0 013.446 3.446M18.585 23.2a2.469 2.469 0 01-2.462 2.462 2.469 2.469 0 01-2.461-2.462 2.469 2.469 0 012.461-2.462 2.469 2.469 0 012.462 2.462M27.508 23.2c0 .615-.493 1.108-1.108 1.108a1.103 1.103 0 01-1.108-1.108c0-.615.493-1.108 1.108-1.108.615 0 1.108.493 1.108 1.108M15.446 15.877A1.037 1.037 0 0114.4 14.83v-4.554c0-1.539-.738-2.77-2.4-2.77S9.292 8.8 9.292 10.278v4.492c0 .616-.43 1.046-1.046 1.046A1.037 1.037 0 017.2 14.77v-4.554c0-1.538-.8-2.769-2.462-2.769-1.723 0-2.584 1.292-2.584 2.77v4.492c0 .615-.43 1.046-1.046 1.046a1.037 1.037 0 01-1.046-1.046V6.769c0-.615.43-1.107 1.046-1.107.738 0 1.046.492 1.046 1.107v.739a3.606 3.606 0 013.2-1.908c1.6 0 2.83.8 3.446 2.03.862-1.353 2.154-2.03 3.754-2.03 2.708 0 4.061 1.908 4.061 4.554v4.677c-.061.554-.492 1.046-1.169 1.046M19.508 15.877a1.037 1.037 0 01-1.046-1.046V6.769c0-.615.43-1.046 1.046-1.046.615 0 1.046.492 1.046 1.046v8.062c0 .554-.43 1.046-1.046 1.046zm0-14.215c.677 0 1.23.553 1.23 1.23 0 .677-.553 1.231-1.23 1.231-.677 0-1.231-.554-1.231-1.23 0-.678.554-1.231 1.23-1.231zM26.523 9.354l2.708-3.323c.184-.185.43-.308.677-.308.615 0 .984.37.984.923 0 .185-.061.43-.246.616l-2.954 3.507 3.016 3.57a.79.79 0 01.246.615c0 .492-.43.923-.923.923a.877.877 0 01-.739-.37l-2.707-3.384-2.708 3.385a.877.877 0 01-.739.369.946.946 0 01-.923-.923.79.79 0 01.247-.616l3.015-3.569-2.954-3.507a.882.882 0 01-.246-.616c0-.554.37-.923.985-.923.307 0 .492.123.676.308l2.585 3.323M37.662 7.385c-1.847 0-3.016 1.6-3.016 3.446 0 1.784 1.23 3.446 3.016 3.446 1.846 0 3.015-1.354 3.015-3.446 0-2.093-1.17-3.446-3.015-3.446zm.43 8.615c-1.538 0-2.769-.8-3.446-1.97v5.047c0 .615-.43 1.046-1.046 1.046a1.037 1.037 0 01-1.046-1.046V6.769c0-.615.37-1.046.984-1.046.616 0 1.047.492 1.047 1.108v.8c.677-1.17 2.03-1.97 3.507-1.97 2.585 0 4.677 2.154 4.677 5.17 0 3.077-2.092 5.169-4.677 5.169zM48.8 7.446c-1.785 0-3.077 1.539-3.077 3.385 0 1.969 1.046 3.384 3.077 3.384 1.846 0 3.077-1.6 3.077-3.384-.062-2.154-1.292-3.385-3.077-3.385zm5.17 7.385c0 .615-.432 1.046-1.047 1.046a1.037 1.037 0 01-1.046-1.046v-.493C51.262 15.262 50.03 16 48.615 16c-3.138 0-4.984-2.338-4.984-5.17 0-2.83 2.03-5.168 5.23-5.168 3.262 0 5.17 2.153 5.17 5.169v4h-.062zM60.308 5.6c2.707 0 4.738 2.092 4.738 4.738v4.493c0 .615-.492 1.046-1.046 1.046a1.037 1.037 0 01-1.046-1.046v-4.739c0-1.415-1.108-2.523-2.585-2.523-1.477 0-2.584 1.108-2.584 2.523v4.739c0 .615-.493 1.046-1.047 1.046a1.037 1.037 0 01-1.046-1.046v-4.493C55.631 7.692 57.6 5.6 60.308 5.6M71.385 7.323c-1.539 0-2.585 1.108-2.831 2.523h5.538c-.184-1.415-1.169-2.523-2.707-2.523zm4.677 3.508c0 .369-.185.738-.8.738h-6.708c.123 1.539 1.17 2.708 3.015 2.708 1.17 0 1.846-.43 2.585-1.108.184-.184.43-.369.677-.369.492 0 .861.37.861.862 0 .246-.123.43-.246.615-.861.985-2.4 1.661-4 1.661-3.384 0-5.108-2.338-5.108-5.169 0-2.954 2.154-5.169 5.047-5.169 2.83 0 4.677 2.338 4.677 5.23zM78.585 15.877a1.037 1.037 0 01-1.047-1.046V1.538c0-.615.431-1.046 1.047-1.046.615 0 1.046.493 1.046 1.046v13.293c0 .554-.431 1.046-1.046 1.046"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Create or update Mixpanel profiles whenever people unsubscribe from Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
      <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="retention">
        <div class="padding-md stack-sm">
          <div class="flex items-center justify-center">
            <svg class="align-middle" width="96" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M90.889 11.732h1.446V9.125h1.918v2.607h1.732v1.43h-1.732v4.642c0 .201.008.375.025.521.017.146.056.27.118.37a.557.557 0 00.277.227c.124.05.292.076.505.076.135 0 .269-.003.403-.009.135-.005.27-.025.404-.058v1.48c-.213.022-.42.044-.622.067-.202.022-.41.034-.622.034-.505 0-.912-.048-1.22-.143-.309-.096-.55-.236-.723-.42a1.453 1.453 0 01-.353-.699c-.062-.28-.099-.6-.11-.959v-5.13H90.89v-1.429zm-4.945 7.417c.426 0 .797-.09 1.11-.269a2.34 2.34 0 00.775-.706c.201-.292.35-.62.444-.984a4.381 4.381 0 000-2.229 2.97 2.97 0 00-.444-.984 2.383 2.383 0 00-.775-.698c-.313-.179-.684-.269-1.11-.269-.426 0-.795.09-1.11.27-.314.179-.572.411-.773.697-.202.286-.35.614-.446.984a4.43 4.43 0 000 2.229c.095.364.244.692.446.984.201.291.46.527.773.706.315.18.684.27 1.11.27zm0 1.514c-.695 0-1.314-.115-1.858-.345a3.958 3.958 0 01-1.38-.95 4.057 4.057 0 01-.857-1.447 5.563 5.563 0 01-.294-1.85c0-.661.098-1.272.294-1.833.196-.56.482-1.043.858-1.446.375-.404.835-.72 1.379-.95.544-.23 1.163-.345 1.858-.345.696 0 1.315.115 1.86.344.542.23 1.002.547 1.378.95.376.404.661.887.858 1.447.196.56.294 1.172.294 1.833a5.58 5.58 0 01-.294 1.85 4.062 4.062 0 01-.858 1.447c-.376.404-.836.72-1.379.95-.544.23-1.163.345-1.859.345zm-7.787-.236h1.918V8.42h-1.918v12.008zm-3.63 0h1.917v-8.695h-1.918v8.695zm0-10.192h1.917V8.42h-1.918v1.816zm-3.381 5.853c0-.392-.05-.774-.152-1.144-.1-.37-.252-.698-.454-.983a2.346 2.346 0 00-.757-.69 2.057 2.057 0 00-1.042-.26c-.808 0-1.416.28-1.825.84-.41.561-.614 1.306-.614 2.237 0 .437.053.844.16 1.22.106.375.266.697.479.967.213.269.468.482.765.639a2.18 2.18 0 001.035.235c.437 0 .807-.09 1.11-.269.302-.18.552-.412.748-.698.196-.286.337-.61.42-.975.085-.365.127-.738.127-1.119zm-6.694-4.356h1.816v1.177h.034c.269-.504.644-.866 1.127-1.084a3.741 3.741 0 011.564-.328c.684 0 1.28.12 1.791.361.51.241.934.572 1.27.992.336.42.589.912.757 1.472.168.56.252 1.16.252 1.8 0 .583-.076 1.15-.227 1.698a4.421 4.421 0 01-.69 1.455 3.45 3.45 0 01-1.168 1.01c-.471.252-1.026.378-1.665.378-.281 0-.561-.025-.841-.076-.28-.05-.55-.132-.808-.244a3.17 3.17 0 01-.715-.429 2.377 2.377 0 01-.546-.613h-.034v4.339h-1.917V11.732zm-6.442 0h1.447V9.125h1.917v2.607h1.732v1.43h-1.732v4.642c0 .201.008.375.025.521.017.146.056.27.118.37a.56.56 0 00.278.227c.123.05.291.076.504.076.135 0 .27-.003.404-.009.134-.005.269-.025.403-.058v1.48c-.213.022-.42.044-.622.067-.202.022-.41.034-.622.034-.505 0-.911-.048-1.22-.143-.308-.096-.55-.236-.723-.42a1.448 1.448 0 01-.353-.699 5.23 5.23 0 01-.11-.959v-5.13H58.01v-1.429zm-6.324 5.903c.056.561.27.954.64 1.178.37.224.812.336 1.328.336.18 0 .384-.014.614-.042a2.66 2.66 0 00.648-.16c.201-.078.367-.193.496-.344.129-.152.187-.35.176-.598a.848.848 0 00-.269-.605 1.87 1.87 0 00-.647-.379 6.302 6.302 0 00-.9-.243c-.337-.068-.679-.14-1.026-.219a9.54 9.54 0 01-1.035-.286 3.324 3.324 0 01-.89-.454 2.095 2.095 0 01-.632-.732c-.157-.297-.235-.664-.235-1.101 0-.471.115-.866.345-1.186.23-.32.521-.577.874-.774a3.813 3.813 0 011.178-.412 6.924 6.924 0 011.236-.117c.448 0 .877.047 1.287.142.409.096.779.25 1.11.463.33.213.605.49.824.832.218.343.356.755.412 1.237h-2.002c-.09-.46-.3-.768-.63-.925a2.618 2.618 0 00-1.136-.236c-.134 0-.294.011-.48.034a2.236 2.236 0 00-.52.126c-.163.062-.3.151-.413.27a.643.643 0 00-.168.462c0 .235.082.426.244.571.163.146.376.267.64.362.263.095.563.177.9.244.336.067.683.14 1.042.219.347.078.69.174 1.026.286.336.112.636.263.9.454.263.19.476.431.639.723.162.292.244.65.244 1.076 0 .516-.118.953-.354 1.312a2.79 2.79 0 01-.916.875 4.167 4.167 0 01-1.253.488c-.46.1-.914.15-1.363.15-.549 0-1.056-.06-1.522-.184a3.543 3.543 0 01-1.21-.564 2.717 2.717 0 01-.808-.941c-.196-.376-.3-.822-.311-1.338h1.917zm-3.263 2.792H46.54v-1.21h-.034a2.633 2.633 0 01-1.051 1.05c-.465.264-.94.396-1.421.396-1.144 0-1.97-.283-2.481-.85-.51-.566-.765-1.42-.765-2.564v-5.517h1.917v5.332c0 .762.146 1.3.437 1.614.292.314.7.471 1.228.471.404 0 .74-.061 1.01-.185a1.78 1.78 0 00.655-.496c.168-.207.289-.457.362-.748a3.88 3.88 0 00.11-.942v-5.046h1.916v8.695zM34.53 11.732h1.8v1.682h.033c.056-.236.165-.465.328-.69a3.19 3.19 0 01.589-.614c.23-.185.484-.333.765-.445.28-.112.566-.168.858-.168.224 0 .378.005.462.016.084.012.171.023.26.034v1.85a9.254 9.254 0 00-.411-.059 3.467 3.467 0 00-.412-.025c-.326 0-.631.065-.917.193-.286.13-.536.32-.748.572a2.798 2.798 0 00-.505.934c-.123.37-.185.796-.185 1.278v4.137h-1.917v-8.695zm-9.301-3.313h9.721v1.816h-3.818v10.192H29.03V10.235h-3.801V8.42z" fill="#161615"/><path fill="#11AA73" d="M22.99 8.419l-8.782-.002L11.495.066l-2.713 8.35L0 8.415l7.105 5.163-2.713 8.352 7.104-5.16 7.102 5.16-2.713-8.35 7.104-5.161"/><path fill="#114728" d="M16.5 15.473l-.615-1.893-4.39 3.19 5.005-1.297"/></g></svg>

            <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

            <svg class="align-middle" width="40" height="37" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M35.253.002L35.103 0H4.68C2.076 0 0 2.143 0 4.832c0 .603.112 1.182.316 1.714.096.3.221.595.377.88L15.818 34.45c.217.387.477.731.77 1.03A4.632 4.632 0 0020.022 37a4.487 4.487 0 002.994-1.16c.457-.37.856-.836 1.166-1.39L39.307 7.427c.153-.28.277-.569.371-.863A4.807 4.807 0 0040 4.832C40 2.143 37.924 0 35.406 0c-.051 0-.102 0-.153.002zm-13.758 25.41l11.961-21.43c.043-.06.071-.107.087-.134.354-.702 1.041-1.164 1.863-1.164 1.083 0 1.994.942 1.994 2.148 0 .412-.132.817-.347 1.163a.122.122 0 00-.043.09L23.835 29.618l-2.34-4.206zM4.854 2.684h26.349l-2.34 4.206H4.592c-1.124 0-2.036-.942-2.036-2.058 0-1.206.912-2.148 2.037-2.148.06 0 .1.002.13 0h.13zm7.781 6.89h14.73L20 22.733 12.635 9.574zm5.48 23.623c.003-.031-.012-.056-.044-.09L4.941 9.575h4.68l12.004 21.43c.016.06.042.111.087.18.184.315.303.712.303 1.163 0 1.117-.91 2.058-1.993 2.058a2.111 2.111 0 01-1.907-1.208z" fill="#0AA6D2"/></g></svg>
          </div>

          <p>Send Trustpilot review invitations to your top customers in Vero</p>
        </div>

        <div class="padding-xs border-top-light flex justify-center">
          <span class="annotation semi-bold uppercase">Retention</span>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="flush-padding padding-md">
  <div class="inner xlarge-inner center-text flex">
    <div class="integration-cover integration-cover--plann inline-flex relative">
      <div class="flex flex-column padding-sm absolute center-text font-white">
        <span class="annotation semi-bold uppercase">Case study</span>

        <div class="stack-0">
          <h3 class="biggie semi-bold">Plann</h3>
          <a class="medium underline-link negative" href="/case-studies/plann">Find out more</a>
        </div>
      </div>

      <div>
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/case-studies/plann.jpg" srcset="/wp-content/themes/vero/assets/dist/images/integrations/case-studies/plann@2x.jpg 2x" alt="Plann">
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <form class="js-signup-form home-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
      action="https://formkeep.com/f/5401a0ae5cb8"
      accept-charset="UTF-8"
      enctype="multipart/form-data"
      method="POST">

      <div class="flex flex-column sm-flex-row">
        <input class="bg-white form-control full-width" id="user_email" type="email" name="email" placeholder="Your email address" required>

        <input class="btn btn--success btn--medium track-start-trial" element-position="bottom" type="submit" name="submit" value="Start a free trial">

        <input class="btn underline-link track-contact-us" element-position="bottom" type="submit" name="talk_to_us" value="Schedule a demo">
      </div>

      <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>
    </form>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>