<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration-zapier';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="double-padding integration-hero" banner-name="Connect Vero and Zapier" element-position="top">
  <div class="inner large-inner flex flex-wrap">
    <div class="col-main stack-lg">
      <span class="d-inline-block atomic semi-bold font-gray-dark">Integrations</span>

      <div class="stack-sm">
        <h1 class="biggie semi-bold">Connect Vero and Zapier</h1>

        <p class="large">Zapier makes it easy to add customers and their properties as well as tracking events.</p>

        <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup">Start a free trial</a>
      </div>
    </div>
    <div class="col-aside">
    </div>
  </div>
  <div class="inner large-inner">
    <div class="bg-primary-lighter border-radius-2 border-primary padding-lg flex intergration-about">
      <div>
        <h2 class="regular micro">About Zapier</h2>
        <p>Zapier is an online automation tool that connects your favorite apps, such as Gmail, Slack, Mailchimp, and more. You can connect two or more apps to automate repetitive tasks without coding or relying on developers to build the integration. It's easy enough that anyone can build their own app workflows with just a few clicks.</p>
      </div>

      <div>
        <h2 class="regular micro">About Vero</h2>
        <p>Vero helps you send behavioral and transactional emails. Our emails are data-driven, so you're never guessing when to send an email or who to send it to. Trigger a coupon when a customer views a product twice, or help a new user get started when they download your software.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner medium-inner border-bottom">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs">Connect Vero and Zapier to integrate beyond your product</h2>
        <p class="medium">Vero's Zapier integration enables you to import data from across your organization, enriching the core product data that Vero integrates with so tightly. Using the Vero Zapier integration you can trigger actions in thousands of business tools.</p>
        <a class="btn btn--secondary btn--outline" href="#none">View documentation</a>
      </div>

      <div class="col-aside stack-md">
        <div class="flex">
          <div class="right-margin-xs">
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g stroke="#01B2D0" stroke-width="2"><rect x="7" y="27" width="14" height="14" rx="4"/><rect x="27" y="27" width="14" height="14" rx="4"/><rect x="7" y="7" width="14" height="14" rx="4"/><rect opacity=".2" x="27" y="7" width="14" height="14" rx="4"/></g><path d="M577.5-779.08C388.574-888.156 146.996-823.426 37.92-634.5-71.156-445.574-6.426-203.996 182.5-94.92 371.426 14.156 613.004-50.574 722.08-239.5c109.076-188.926 44.346-430.504-144.58-539.58z" stroke="#E1E1E1" stroke-dasharray="2378.4,238" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g></svg>
          </div>

          <div class="stack-xxxs">
            <h3 class="atomic">Access 2,000&plus; business apps</h3>
            <p>With Zapier, you can send data to Vero from thousands of integrations and synchronize key stages of the customer journey for personalized, targeted messages at scale.</p>
          </div>
        </div>

        <div class="flex">
          <div class="right-margin-xs">
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
<section class="border-bottom">
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs semi-bold">Automate at a whole new level</h2>
        <p class="medium">With Zapier and Vero together, when it comes to messaging if you can dream it, then you can build it.</p>

        <p class="medium">Zapier's no-code interface enables anyone on the team to send data to Vero, whether technical or not, from thousands of business applications. Empowering you to unlock more data and streamline your customer experience, the Vero Zap helps your team to move faster, test more ideas, personalize at a more granular level and deliver great products.</p>
      </div>
      <div class="col-aside">

      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner medium-inner">
    <h2 class="chunk semi-bold center-text">Create your own automation journey</h2>

    <div class="flex justify-between">
      <div class="stack-lg">
        <div class="stack-xxs">
          <span>Triggers</span>
          <h3 class="micro semi-bold">When this happens</h3>
        </div>

        <ul class="unstyled-list stack-sm">
          <li class="flex items-center">
            <div class="bg-white shadow-1 border border-radius-2 right-margin-xs">
              <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h56v56H0z"/><path d="M37.491 17.113a2.83 2.83 0 00-.094-.002H18.468c-1.62 0-2.912 1.352-2.912 3.047 0 .38.07.745.196 1.081.06.19.138.376.235.556l9.41 17.041c.136.244.298.461.48.65.53.588 1.288.958 2.136.958.71 0 1.361-.276 1.863-.73.285-.235.533-.529.726-.878l9.411-17.041c.095-.177.172-.359.231-.544.13-.34.2-.708.2-1.093 0-1.695-1.291-3.047-2.858-3.047-.032 0-.063 0-.095.002zm-8.56 16.024l7.442-13.515c.026-.038.044-.067.054-.085.22-.442.647-.733 1.16-.733.673 0 1.24.594 1.24 1.354 0 .26-.082.515-.216.734a.077.077 0 00-.027.056L30.386 35.79l-1.456-2.652zM18.575 18.804H34.97l-1.456 2.652h-15.1c-.7 0-1.267-.594-1.267-1.298 0-.76.567-1.354 1.267-1.354h.162zm4.842 4.345h9.164L28 31.447l-4.582-8.298zm3.409 14.897c.002-.02-.007-.035-.027-.056l-8.17-14.841h2.912l7.47 13.515a.39.39 0 00.053.113c.115.198.189.449.189.733 0 .704-.567 1.298-1.24 1.298-.532 0-.975-.316-1.187-.762z" fill="#0AA6D2"/></g></svg>
            </div>

            <span class="atomic regular">Update user</span>
          </li>
          <li class="flex items-center">
            <div class="bg-white shadow-1 border border-radius-2 right-margin-xs">
              <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h56v56H0z"/><path d="M37.491 17.113a2.83 2.83 0 00-.094-.002H18.468c-1.62 0-2.912 1.352-2.912 3.047 0 .38.07.745.196 1.081.06.19.138.376.235.556l9.41 17.041c.136.244.298.461.48.65.53.588 1.288.958 2.136.958.71 0 1.361-.276 1.863-.73.285-.235.533-.529.726-.878l9.411-17.041c.095-.177.172-.359.231-.544.13-.34.2-.708.2-1.093 0-1.695-1.291-3.047-2.858-3.047-.032 0-.063 0-.095.002zm-8.56 16.024l7.442-13.515c.026-.038.044-.067.054-.085.22-.442.647-.733 1.16-.733.673 0 1.24.594 1.24 1.354 0 .26-.082.515-.216.734a.077.077 0 00-.027.056L30.386 35.79l-1.456-2.652zM18.575 18.804H34.97l-1.456 2.652h-15.1c-.7 0-1.267-.594-1.267-1.298 0-.76.567-1.354 1.267-1.354h.162zm4.842 4.345h9.164L28 31.447l-4.582-8.298zm3.409 14.897c.002-.02-.007-.035-.027-.056l-8.17-14.841h2.912l7.47 13.515a.39.39 0 00.053.113c.115.198.189.449.189.733 0 .704-.567 1.298-1.24 1.298-.532 0-.975-.316-1.187-.762z" fill="#0AA6D2"/></g></svg>
            </div>

            <span class="atomic regular">New user</span>
          </li>
          <li class="flex items-center">
            <div class="bg-white shadow-1 border border-radius-2 right-margin-xs">
              <svg class="align-middle" width="56" height="56" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h56v56H0z"/><path d="M37.491 17.113a2.83 2.83 0 00-.094-.002H18.468c-1.62 0-2.912 1.352-2.912 3.047 0 .38.07.745.196 1.081.06.19.138.376.235.556l9.41 17.041c.136.244.298.461.48.65.53.588 1.288.958 2.136.958.71 0 1.361-.276 1.863-.73.285-.235.533-.529.726-.878l9.411-17.041c.095-.177.172-.359.231-.544.13-.34.2-.708.2-1.093 0-1.695-1.291-3.047-2.858-3.047-.032 0-.063 0-.095.002zm-8.56 16.024l7.442-13.515c.026-.038.044-.067.054-.085.22-.442.647-.733 1.16-.733.673 0 1.24.594 1.24 1.354 0 .26-.082.515-.216.734a.077.077 0 00-.027.056L30.386 35.79l-1.456-2.652zM18.575 18.804H34.97l-1.456 2.652h-15.1c-.7 0-1.267-.594-1.267-1.298 0-.76.567-1.354 1.267-1.354h.162zm4.842 4.345h9.164L28 31.447l-4.582-8.298zm3.409 14.897c.002-.02-.007-.035-.027-.056l-8.17-14.841h2.912l7.47 13.515a.39.39 0 00.053.113c.115.198.189.449.189.733 0 .704-.567 1.298-1.24 1.298-.532 0-.975-.316-1.187-.762z" fill="#0AA6D2"/></g></svg>
            </div>

            <span class="atomic regular">Unsubscribed user</span>
          </li>
        </ul>
      </div>

      <div class="right-text">
        <span>Actions</span>
        <h3 class="micro semi-bold">Do this</h3>
      </div>
    </div>
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Scale personalized messages" element-position="bottom">
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