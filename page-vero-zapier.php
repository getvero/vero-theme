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

      <div class="stack-md">
        <div class="stack-xxs">
          <h1 class="biggie semi-bold">Connect Vero and Zapier</h1>

          <p class="large">Zapier makes it easy to add customers and their properties as well as tracking events.</p>
        </div>

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
            <svg class="align-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><path d="M24.769 14.467c.519-.643.107-1.666-.67-1.666h-5.794l2.692-9.495c.291-1.027-.883-1.769-1.528-.967L7.23 17.533c-.519.643-.107 1.666.67 1.666h5.79l-2.688 9.495c-.291 1.027.883 1.769 1.528.967L24.77 14.467z" fill-rule="nonzero" stroke="#FFC111" stroke-width="2" fill="none"/></svg>
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
            <svg class="align-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M16.2 9a.8.8 0 01.8.8v5.6h5.6a.8.8 0 110 1.6H17v5.6a.8.8 0 11-1.6 0V17H9.8a.8.8 0 110-1.6h5.6V9.8a.8.8 0 01.8-.8z" fill="#F15242"/><circle stroke="#F15242" stroke-width="2" cx="16" cy="16" r="12"/></g></svg>
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
  <div class="inner xlarge-inner center-text stack-md">
    <h2 class="chunk semi-bold">Zapier recipes</h2>

    <input class="hide acquisition-radio" id="acquisition-recipe" name="integration-zapier" type="checkbox" checked>
    <input class="hide referral-radio" id="referral-recipe" name="integration-zapier" type="checkbox" checked>
    <input class="hide retention-radio" id="retention-recipe" name="integration-zapier" type="checkbox" checked>
    <input class="hide tracking-radio" id="tracking-recipe" name="integration-zapier" type="checkbox" checked>

    <div class="flex justify-center integration-recipe-switcher">
      <label class="flex items-center integration-label semi-bold" data-category="acquisition" for="acquisition-recipe">
        <svg class="align-middle right-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#ffffff" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"></path></svg>

        <span>Acquisition</span>
      </label>
      <label class="flex items-center integration-label semi-bold" data-category="referral" for="referral-recipe">
        <svg class="align-middle right-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#ffffff" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"></path></svg>

        <span>Referral</span>
      </label>
      <label class="flex items-center integration-label semi-bold" data-category="retention" for="retention-recipe">
        <svg class="align-middle right-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#ffffff" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"></path></svg>

        <span>Retention</span>
      </label>
      <label class="flex items-center integration-label semi-bold" data-category="tracking" for="tracking-recipe">
        <svg class="align-middle right-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#ffffff" d="M15.126 2.38a1.3 1.3 0 010 1.84l-8.755 8.755a1.294 1.294 0 01-.72.365l-.133.014h-.133a1.295 1.295 0 01-.852-.38L1.38 9.824a1.3 1.3 0 111.838-1.839l2.232 2.232 7.837-7.835a1.3 1.3 0 011.838 0z" fill-rule="evenodd"></path></svg>

        <span>Tracking</span>
      </label>
    </div>

    <input class="hide recipe-reveal" id="integration-recipe-reveal" name="reveal" type="checkbox">

    <ul class="integration-recipe-list unstyled-list relative flex flex-wrap">
      <?php
      // Loop through Array
      $someJSON =
      '[
        {
          "featured"   : "featured",
          "integration": "Facebook Ads",
          "desc"       : "Send new leads from Facebook Lead Ads to Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "featured"   : "featured",
          "integration": "Stripe",
          "desc"       : "Add or update Vero contacts when there are new Stripe charges or events",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "featured"   : "featured",
          "integration": "Salesforce",
          "desc"       : "Add new Salesforce leads to Vero or update contacts",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "featured"   : "featured",
          "integration": "Google Sheet",
          "desc"       : "Track event in Vero using a Google Sheet",
          "tag"        : "Tracking",
          "team"       : "Marketing"
        },
        {
          "featured"   : "featured",
          "integration": "Mailchimp",
          "desc"       : "Sync unsubscribes from Mailchimp to Vero",
          "tag"        : "Tracking",
          "team"       : "Marketing"
        },
        {
          "featured"   : "featured",
          "integration": "Google Ads",
          "desc"       : "Add new leads in Google lead form extension to contact lists in Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Typeform",
          "desc"       : "Add new Typeform response as a Vero event",
          "tag"        : "Tracking",
          "team"       : "Marketing"
        },
        {
          "integration": "Unbounce",
          "desc"       : "Add new Unbounce submissions to Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "JotForm",
          "desc"       : "Add new JotForm form submission to Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "SumoMe",
          "desc"       : "Add new SumoMe subscribers to Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "FormKeep",
          "desc"       : "Create or update customers in Vero from FormKeep submissions",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "integration": "Survicate",
          "desc"       : "Create or update customer profiles in Vero from new Survicate question responses",
          "tag"        : "Acquisition",
          "team"       : "Engineering"
        },
        {
          "integration": "LinkedIn Ads",
          "desc"       : "Send new leads from LinkedIn Lead Get Forms to Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Stripe",
          "desc"       : "Add Stripe customers with new Vero contacts",
          "tag"        : "Acquisition",
          "team"       : "Engineering"
        },
        {
          "integration": "Mixpanel",
          "desc"       : "Create or update Mixpanel profiles whenever people unsubscribe from Vero",
          "tag"        : "Trackiing",
          "team"       : "Engineering"
        },
        {
          "integration": "Trustpilot",
          "desc"       : "Send Trustpilot review invitations to your top customers in Vero",
          "tag"        : "Referral",
          "team"       : "Product Marketing or Product"
        },
        {
          "integration": "Pipedrive",
          "desc"       : "Send new people on Pipderive to Vero as new contacts",
          "tag"        : "Acquisition",
          "team"       : "Sale or Marketing"
        },
        {
          "integration": "Appcues",
          "desc"       : "Create a list of NPS promoters from Appcues in Vero",
          "tag"        : "Tracking",
          "team"       : "Product Marketing or Product"
        },
        {
          "integration": "Close",
          "desc"       : "Assign leads in Close and create events in Vero",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "integration": "Unbounce",
          "desc"       : "Add new Unbounce response as a Vero event",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "JotForm",
          "desc"       : "Add new JotForm response as a Vero event",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Typeform",
          "desc"       : "Create Vero contacts from new Typeform entries",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "SatisMeter",
          "desc"       : "Update contacts in Vero with new survey responses from SatisMeter",
          "tag"        : "Tracking",
          "team"       : "Product Marketing or Product"
        },
        {
          "integration": "Calendly",
          "desc"       : "Add contacts to an Vero when they create a new Calendly event",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "integration": "Wufoo",
          "desc"       : "Add contacts to an Vero when they create a new Calendly event",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Pipedrive",
          "desc"       : "Add new Vero contacts to Pipedrive as people",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "integration": "Accelo",
          "desc"       : "Create/Update Accelo contacts for new Vero contacts",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "integration": "Webflow",
          "desc"       : "Add Vero subscribers for new form submissions in Webflow",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "SuperSaaS",
          "desc"       : "Add a new SuperSaaS users as contacts in Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Gravity Forms",
          "desc"       : "Add Vero subscribers from new Gravity Forms submissions",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Leadpages",
          "desc"       : "Add new Vero subscribers for new Leadpages submissions",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Google Sheet",
          "desc"       : "Add new Vero subscribers to a Google Sheet as rows",
          "tag"        : "Tracking",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Google Forms",
          "desc"       : "Create Vero subscribers from Google Forms responses",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Paypal",
          "desc"       : "Add new PayPal customers to Vero as new contacts",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "ManyChat",
          "desc"       : "Add ManyChat subscribers to Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "SurveyMonkey",
          "desc"       : "Add or Update Vero contacts with SurveyMonkey responses",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "GoToWebinar",
          "desc"       : "Add new GoToWebinar registrants to Vero as new subscribers",
          "tag"        : "Acquisition",
          "team"       : "Sale",
          "image"      : "sql.svg"
        },
        {
          "integration": "PaperForm",
          "desc"       : "Add subscribers to ActiveCampaign from new Paperform submissions",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Insightly",
          "desc"       : "Add Insightly leads to Vero as subscribers",
          "tag"        : "Acquisition",
          "team"       : "Sale",
          "image"      : "sql.svg"
        },
        {
          "integration": "Formstack",
          "desc"       : "Add Vero contacts from new Formstack submissions",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Xero",
          "desc"       : "Add new Xero contacts to Vero",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "integration": "MySQL",
          "desc"       : "Create new Vero subscribers from new MySQL rows",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "integration": "Facebook Ads",
          "desc"       : "Add new Vero campaign conversion as Facebook Offline Conversions",
          "tag"        : "Tracking",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Zoom",
          "desc"       : "Add new Vero contacts from new Zoom registrants",
          "tag"        : "Acquisition",
          "team"       : "Marketing",
          "image"      : "sql.svg"
        },
        {
          "integration": "Airtasker",
          "desc"       : "Turn new Airtable records into Vero contacts",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Salesforce",
          "desc"       : "Create Salesforce leads when new contacts are added to Vero",
          "tag"        : "Acquisition",
          "team"       : "Sale"
        },
        {
          "integration": "Instapage",
          "desc"       : "Create Vero contacts from new Instapage form submissions",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Quora Ads",
          "desc"       : "Add Quora Lead Gen Form leads as new contacts in Vero",
          "tag"        : "Acquisition",
          "team"       : "Marketing"
        },
        {
          "integration": "Twilio",
          "desc"       : "Send SMS messages using Twilio for new Vero automation webhooks",
          "tag"        : "Retention",
          "team"       : "Product Marketing or Product"
        },
        {
          "integration": "PostgreSQL",
          "desc"       : "Add subscribers to Vero for new rows on PostgreSQL",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "integration": "PostgreSQL",
          "desc"       : "Update contacts in Vero for new rows on PostgreSQL",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "integration": "MySQL",
          "desc"       : "Update contacts in Vero for new rows on MySQL",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "integration": "PostgreSQL",
          "desc"       : "Track an event in Vero for new rows on PostgreSQL",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        },
        {
          "integration": "MySQL",
          "desc"       : "Track an event in Vero for new rows on MySQL",
          "tag"        : "Tracking",
          "team"       : "Engineering"
        }
      ]'
      ;

      // Convert JSON string to Array
      $someObject = json_decode($someJSON);

      // Loop through Object
      foreach($someObject as $key => $value) {
        $integration = $value->integration;
        $newStr = str_replace(" ", "-", $integration);

        ?>
          <li class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="<?php echo strtolower($value->tag) . " " . $value->featured ?>">
            <div class="stack-xxxs">
              <div class="flex items-center justify-center">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/<?php echo strtolower($newStr) ?>.svg" alt="<?php echo $value->integration ?>">

                <svg class="align-middle horizontal-margin-xxs" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M8 0a1 1 0 011 1v6h6a1 1 0 110 2H9v6a1 1 0 11-2 0V9H1a1 1 0 010-2h6V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

                <svg class="align-middle" width="32" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M28.203.002a3.789 3.789 0 00-.12-.002H3.743A3.733 3.733 0 000 3.761c0 .47.09.92.253 1.335.076.233.177.463.302.685l12.1 21.034c.173.301.381.57.615.802a3.752 3.752 0 002.747 1.183c.911 0 1.75-.341 2.396-.902.365-.29.684-.652.933-1.083l12.1-21.034a3.81 3.81 0 00.297-.672c.166-.418.257-.873.257-1.348C32 1.668 30.34 0 28.325 0c-.041 0-.082 0-.122.002zM17.196 19.78L26.765 3.1c.034-.048.057-.084.07-.105a1.658 1.658 0 011.49-.906c.866 0 1.595.734 1.595 1.672a1.7 1.7 0 01-.278.905.094.094 0 00-.034.07l-10.54 18.318-1.872-3.274zM3.883 2.09h21.079L23.09 5.362H3.675c-.9 0-1.63-.733-1.63-1.602 0-.939.73-1.672 1.63-1.672h.208zm6.225 5.362h11.784L16 17.695 10.108 7.452zm4.384 18.388c.002-.025-.01-.044-.035-.07L3.952 7.452h3.745L17.3 24.133a.472.472 0 00.07.14c.147.245.242.554.242.905 0 .87-.728 1.602-1.595 1.602-.684 0-1.252-.39-1.525-.94z" id="a"/></defs><use fill="#0AA6D2" xlink:href="#a" transform="translate(0 6)" fill-rule="evenodd"/></svg>
              </div>

              <p class="annotation"><?php echo $value->desc ?></p>
            </div>

            <div class="padding-xs border-top-light flex justify-center">
              <span class="cation semi-bold uppercase"><?php echo $value->tag ?></span>
            </div>
          </li>
        <?php
      }

      ?>

      <li>
        <label class="absolute annotation tracked uppercase bg-white border border-radius-2 padding-sm" for="integration-recipe-reveal">View more</label>
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

    <p class="cation regular font-gray-dark">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>