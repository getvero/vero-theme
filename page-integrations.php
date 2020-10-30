<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integrations';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="double-padding" banner-name="" element-position="top">
  <div class="inner center-text">
    <div class="stack-md">
      <div class="stack-xxs">
        <h1 class="biggie semi-bold">Integrations</h1>

        <p class="large">Explore popular solutions to empower every team</p>
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

    <div class="flex flex-wrap justify-center integration-recipe-switcher">
      <label class="flex items-center integration-label cation uppercase semi-bold" data-category="acquisition" for="acquisition-recipe">
        <div class="bg-white box border right-margin-xxxs">
          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Acquisition</span>
      </label>
      <label class="flex items-center integration-label cation uppercase semi-bold" data-category="referral" for="referral-recipe">
        <div class="bg-white box border right-margin-xxxs">
          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Referral</span>
      </label>
      <label class="flex items-center integration-label cation uppercase semi-bold" data-category="retention" for="retention-recipe">
        <div class="bg-white box border right-margin-xxxs">
          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Retention</span>
      </label>
      <label class="flex items-center integration-label cation uppercase semi-bold" data-category="tracking" for="tracking-recipe">
        <div class="bg-white box border right-margin-xxxs">
          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Tracking</span>
      </label>
    </div>

    <input class="hide recipe-reveal" id="integration-recipe-reveal" name="reveal" type="checkbox">

    <div class="integration-recipe-list">
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
          "desc"       : "Add subscribers to Vero from new Paperform submissions",
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
          "integration": "Airtable",
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

      $count = 1;

      // Loop through Object
      foreach($someObject as $key => $value) {
        $integration = $value->integration;
        $newStr = str_replace(" ", "-", $integration);

        if ($value->featured == "featured") {
          if ($count%6 == 1) {
            echo "<div class='flex flex-wrap'>";
          }

          ?>
          <div class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="<?php echo strtolower($value->tag) . " " . $value->featured ?>">
            <div class="stack-xxs">
              <div class="flex items-center justify-center">
                <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/<?php echo strtolower($newStr) ?>.svg" alt="<?php echo $value->integration ?>">

                <svg class="align-middle horizontal-margin-xxs" width="12" height="12" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M6 0a1 1 0 011 1v4h4a1 1 0 110 2H7v4a1 1 0 11-2 0V7H1a1 1 0 110-2h4V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

                <svg class="align-middle" width="32" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M28.203.002a3.789 3.789 0 00-.12-.002H3.743A3.733 3.733 0 000 3.761c0 .47.09.92.253 1.335.076.233.177.463.302.685l12.1 21.034c.173.301.381.57.615.802a3.752 3.752 0 002.747 1.183c.911 0 1.75-.341 2.396-.902.365-.29.684-.652.933-1.083l12.1-21.034a3.81 3.81 0 00.297-.672c.166-.418.257-.873.257-1.348C32 1.668 30.34 0 28.325 0c-.041 0-.082 0-.122.002zM17.196 19.78L26.765 3.1c.034-.048.057-.084.07-.105a1.658 1.658 0 011.49-.906c.866 0 1.595.734 1.595 1.672a1.7 1.7 0 01-.278.905.094.094 0 00-.034.07l-10.54 18.318-1.872-3.274zM3.883 2.09h21.079L23.09 5.362H3.675c-.9 0-1.63-.733-1.63-1.602 0-.939.73-1.672 1.63-1.672h.208zm6.225 5.362h11.784L16 17.695 10.108 7.452zm4.384 18.388c.002-.025-.01-.044-.035-.07L3.952 7.452h3.745L17.3 24.133a.472.472 0 00.07.14c.147.245.242.554.242.905 0 .87-.728 1.602-1.595 1.602-.684 0-1.252-.39-1.525-.94z" id="a"/></defs><use fill="#0AA6D2" xlink:href="#a" transform="translate(0 6)" fill-rule="evenodd"/></svg>
              </div>

              <p><?php echo $value->desc ?></p>
            </div>

            <div class="flex justify-center integration-recipe-tags">
              <span class="d-inline-block bg-gray-light cation semi-bold uppercase border-radius-1"><?php echo $value->tag ?></span>
            </div>
          </div>
          <?php

          if ($count%6 == 0) {
            echo "</div>";
          }
          $count++;

        }
      }

      ?>

      <label class="annotation semi-bold tracked uppercase underline-link" for="integration-recipe-reveal">View more recipes</label>

      <div>
        <div class="flex flex-wrap">

        <?php
        // Loop through Object
        foreach($someObject as $key => $value) {
          $integration = $value->integration;
          $newStr = str_replace(" ", "-", $integration);

          if ($value->featured == "") {
            ?>
            <div class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="<?php echo strtolower($value->tag) . " " . $value->featured ?>">
              <div class="stack-xxs">
                <div class="flex items-center justify-center">
                  <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/<?php echo strtolower($newStr) ?>.svg" alt="<?php echo $value->integration ?>">

                  <svg class="align-middle horizontal-margin-xxs" width="12" height="12" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M6 0a1 1 0 011 1v4h4a1 1 0 110 2H7v4a1 1 0 11-2 0V7H1a1 1 0 110-2h4V1a1 1 0 011-1z" fill="#9D9D9D"/></g></svg>

                  <svg class="align-middle" width="32" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M28.203.002a3.789 3.789 0 00-.12-.002H3.743A3.733 3.733 0 000 3.761c0 .47.09.92.253 1.335.076.233.177.463.302.685l12.1 21.034c.173.301.381.57.615.802a3.752 3.752 0 002.747 1.183c.911 0 1.75-.341 2.396-.902.365-.29.684-.652.933-1.083l12.1-21.034a3.81 3.81 0 00.297-.672c.166-.418.257-.873.257-1.348C32 1.668 30.34 0 28.325 0c-.041 0-.082 0-.122.002zM17.196 19.78L26.765 3.1c.034-.048.057-.084.07-.105a1.658 1.658 0 011.49-.906c.866 0 1.595.734 1.595 1.672a1.7 1.7 0 01-.278.905.094.094 0 00-.034.07l-10.54 18.318-1.872-3.274zM3.883 2.09h21.079L23.09 5.362H3.675c-.9 0-1.63-.733-1.63-1.602 0-.939.73-1.672 1.63-1.672h.208zm6.225 5.362h11.784L16 17.695 10.108 7.452zm4.384 18.388c.002-.025-.01-.044-.035-.07L3.952 7.452h3.745L17.3 24.133a.472.472 0 00.07.14c.147.245.242.554.242.905 0 .87-.728 1.602-1.595 1.602-.684 0-1.252-.39-1.525-.94z" id="a"/></defs><use fill="#0AA6D2" xlink:href="#a" transform="translate(0 6)" fill-rule="evenodd"/></svg>
                </div>

                <p><?php echo $value->desc ?></p>
              </div>

              <div class="flex justify-center integration-recipe-tags">
                <span class="d-inline-block bg-gray-light cation semi-bold uppercase border-radius-1"><?php echo $value->tag ?></span>
              </div>
            </div>
            <?php
          }
        }
        ?>

        </div>

        <span class="d-inline-block font-gray-dark annotation semi-bold tracked uppercase top-margin-lg">More recipes to come</span>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue border-bottom-faded" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <span class="annotation tracked uppercase semi-bold">More integrations</span>

    <h4 class="chunk bottom-margin-md">Start connecting your data with Vero</h4>

    <form class="js-signup-form home-signup-form track-signup-form lg-horizontal-margin-lg stack-xs bottom-margin-sm"
      <?php if (get_field('sign_up')) { ?>
        data-url="<?php echo get_field('sign_up'); ?>"
      <?php } ?>
      element-position="bottom"
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