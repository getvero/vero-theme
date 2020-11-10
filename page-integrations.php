<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integrations';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="double-padding relative" banner-name="" element-position="top">
  <div class="inner center-text">
    <div class="stack-md">
      <div class="stack-xxs">
        <h1 class="biggie semi-bold">Integrations</h1>

        <p class="large">Explore popular solutions to empower every team</p>
      </div>
    </div>
  </div>

  <div class="flex justify-center integrations-hero-customers z-1">
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/panoply.svg" alt="Panoply">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/zapier.svg" alt="Zapier">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/mailjet.svg" alt="Mailjet">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/sendgrid.svg" alt="Senndgrid">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/unbounce.svg" alt="Unbounce">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/stitch.svg" alt="Stitch">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/n8n.svg" alt="n8n">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/survicate.svg" alt="Survicate">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/amazon-aws.svg" alt="Amazon AWS">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/google-analytics.svg" alt="Google Analytics">
    </div>
    <div class="integrations-hero-customer bg-white border-radius-100 shadow-3 flex items-center justify-center">
      <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/twilio.svg" alt="Twilio">
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter integrations-featured relative overflow-hidden">
  <div class="inner small-inner relative z-1">
    <div class="w-sidebar w-sidebar--sm items-center">
      <div class="col-main stack-md order-1 md-order-0">
        <span class="cation tracked uppercase font-gray-dark semi-bold">Featured integration</span>

        <div class="stack-xs">
          <h2 class="tubs semi-bold">Vero and Segment</h2>

          <p class="medium">Use Segment to collect data from multiple sources to trigger personalized marketing communications.</p>
        </div>

        <a class="btn btn--secondary" href="/integrations/vero-segment/">Read more</a>
      </div>
      <div class="col-aside md-right-text order-0 md-order-1">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/vero-segment.svg" alt="Vero and Segment integrations">
      </div>
    </div>
  </div>
  <div class="inner small-inner relative z-1">
    <div class="w-sidebar w-sidebar--sm items-center">
      <div class="col-main order-1 stack-md">
        <span class="cation tracked uppercase font-gray-dark semi-bold">Featured integration</span>

        <div class="stack-xs">
          <h2 class="tubs semi-bold">Vero and Zapier</h2>
          <p class="medium">Using the Vero Zapier integration you can trigger actions in thousands of business tools.</p>
        </div>

        <a class="btn btn--secondary" href="/integrations/vero-zapier/">Read more</a>
      </div>
      <div class="col-aside order-0">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/vero-zapier.svg" alt="Vero and Zapier integrations">
      </div>
    </div>
  </div>

  <svg class="absolute z-0" width="1050" height="1050" xmlns="http://www.w3.org/2000/svg"><g stroke="#E1E1E1" fill="none" fill-rule="evenodd"><path d="M527.828 512.828l9.344 9.344a4 4 0 010 5.656l-9.344 9.344a4 4 0 01-5.656 0l-9.344-9.344a4 4 0 010-5.656l9.344-9.344a4 4 0 015.656 0z"/><path d="M527.828 482.828l39.344 39.344a4 4 0 010 5.656l-39.344 39.344a4 4 0 01-5.656 0l-39.344-39.344a4 4 0 010-5.656l39.344-39.344a4 4 0 015.656 0z"/><path d="M527.828 452.828l69.344 69.344a4 4 0 010 5.656l-69.344 69.344a4 4 0 01-5.656 0l-69.344-69.344a4 4 0 010-5.656l69.344-69.344a4 4 0 015.656 0z"/><path d="M527.828 422.828l99.344 99.344a4 4 0 010 5.656l-99.344 99.344a4 4 0 01-5.656 0l-99.344-99.344a4 4 0 010-5.656l99.344-99.344a4 4 0 015.656 0z"/><path d="M527.828 392.828l129.344 129.344a4 4 0 010 5.656L527.828 657.172a4 4 0 01-5.656 0L392.828 527.828a4 4 0 010-5.656l129.344-129.344a4 4 0 015.656 0z"/><path d="M527.828 362.828l159.344 159.344a4 4 0 010 5.656L527.828 687.172a4 4 0 01-5.656 0L362.828 527.828a4 4 0 010-5.656l159.344-159.344a4 4 0 015.656 0z"/><path d="M527.828 332.828l189.344 189.344a4 4 0 010 5.656L527.828 717.172a4 4 0 01-5.656 0L332.828 527.828a4 4 0 010-5.656l189.344-189.344a4 4 0 015.656 0z"/><path d="M527.828 302.828l219.344 219.344a4 4 0 010 5.656L527.828 747.172a4 4 0 01-5.656 0L302.828 527.828a4 4 0 010-5.656l219.344-219.344a4 4 0 015.656 0z"/><path d="M527.828 272.828l249.344 249.344a4 4 0 010 5.656L527.828 777.172a4 4 0 01-5.656 0L272.828 527.828a4 4 0 010-5.656l249.344-249.344a4 4 0 015.656 0z"/><path d="M527.828 242.828l279.344 279.344a4 4 0 010 5.656L527.828 807.172a4 4 0 01-5.656 0L242.828 527.828a4 4 0 010-5.656l279.344-279.344a4 4 0 015.656 0z"/><path d="M527.828 212.828l309.344 309.344a4 4 0 010 5.656L527.828 837.172a4 4 0 01-5.656 0L212.828 527.828a4 4 0 010-5.656l309.344-309.344a4 4 0 015.656 0z"/><path d="M527.828 182.828l339.344 339.344a4 4 0 010 5.656L527.828 867.172a4 4 0 01-5.656 0L182.828 527.828a4 4 0 010-5.656l339.344-339.344a4 4 0 015.656 0z"/><path d="M527.828 152.828l369.344 369.344a4 4 0 010 5.656L527.828 897.172a4 4 0 01-5.656 0L152.828 527.828a4 4 0 010-5.656l369.344-369.344a4 4 0 015.656 0z"/><path d="M527.828 122.828l399.344 399.344a4 4 0 010 5.656L527.828 927.172a4 4 0 01-5.656 0L122.828 527.828a4 4 0 010-5.656l399.344-399.344a4 4 0 015.656 0z"/><path d="M527.828 92.828l429.344 429.344a4 4 0 010 5.656L527.828 957.172a4 4 0 01-5.656 0L92.828 527.828a4 4 0 010-5.656L522.172 92.828a4 4 0 015.656 0z"/><path d="M527.828 62.828l459.344 459.344a4 4 0 010 5.656L527.828 987.172a4 4 0 01-5.656 0L62.828 527.828a4 4 0 010-5.656L522.172 62.828a4 4 0 015.656 0z"/><path d="M527.828 32.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L32.828 527.828a4 4 0 010-5.656L522.172 32.828a4 4 0 015.656 0z"/><path d="M527.828 2.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L2.828 527.828a4 4 0 010-5.656L522.172 2.828a4 4 0 015.656 0z"/></g></svg>
  <svg class="absolute z-0" width="1050" height="1050" xmlns="http://www.w3.org/2000/svg"><g stroke="#E1E1E1" fill="none" fill-rule="evenodd"><path d="M527.828 512.828l9.344 9.344a4 4 0 010 5.656l-9.344 9.344a4 4 0 01-5.656 0l-9.344-9.344a4 4 0 010-5.656l9.344-9.344a4 4 0 015.656 0z"/><path d="M527.828 482.828l39.344 39.344a4 4 0 010 5.656l-39.344 39.344a4 4 0 01-5.656 0l-39.344-39.344a4 4 0 010-5.656l39.344-39.344a4 4 0 015.656 0z"/><path d="M527.828 452.828l69.344 69.344a4 4 0 010 5.656l-69.344 69.344a4 4 0 01-5.656 0l-69.344-69.344a4 4 0 010-5.656l69.344-69.344a4 4 0 015.656 0z"/><path d="M527.828 422.828l99.344 99.344a4 4 0 010 5.656l-99.344 99.344a4 4 0 01-5.656 0l-99.344-99.344a4 4 0 010-5.656l99.344-99.344a4 4 0 015.656 0z"/><path d="M527.828 392.828l129.344 129.344a4 4 0 010 5.656L527.828 657.172a4 4 0 01-5.656 0L392.828 527.828a4 4 0 010-5.656l129.344-129.344a4 4 0 015.656 0z"/><path d="M527.828 362.828l159.344 159.344a4 4 0 010 5.656L527.828 687.172a4 4 0 01-5.656 0L362.828 527.828a4 4 0 010-5.656l159.344-159.344a4 4 0 015.656 0z"/><path d="M527.828 332.828l189.344 189.344a4 4 0 010 5.656L527.828 717.172a4 4 0 01-5.656 0L332.828 527.828a4 4 0 010-5.656l189.344-189.344a4 4 0 015.656 0z"/><path d="M527.828 302.828l219.344 219.344a4 4 0 010 5.656L527.828 747.172a4 4 0 01-5.656 0L302.828 527.828a4 4 0 010-5.656l219.344-219.344a4 4 0 015.656 0z"/><path d="M527.828 272.828l249.344 249.344a4 4 0 010 5.656L527.828 777.172a4 4 0 01-5.656 0L272.828 527.828a4 4 0 010-5.656l249.344-249.344a4 4 0 015.656 0z"/><path d="M527.828 242.828l279.344 279.344a4 4 0 010 5.656L527.828 807.172a4 4 0 01-5.656 0L242.828 527.828a4 4 0 010-5.656l279.344-279.344a4 4 0 015.656 0z"/><path d="M527.828 212.828l309.344 309.344a4 4 0 010 5.656L527.828 837.172a4 4 0 01-5.656 0L212.828 527.828a4 4 0 010-5.656l309.344-309.344a4 4 0 015.656 0z"/><path d="M527.828 182.828l339.344 339.344a4 4 0 010 5.656L527.828 867.172a4 4 0 01-5.656 0L182.828 527.828a4 4 0 010-5.656l339.344-339.344a4 4 0 015.656 0z"/><path d="M527.828 152.828l369.344 369.344a4 4 0 010 5.656L527.828 897.172a4 4 0 01-5.656 0L152.828 527.828a4 4 0 010-5.656l369.344-369.344a4 4 0 015.656 0z"/><path d="M527.828 122.828l399.344 399.344a4 4 0 010 5.656L527.828 927.172a4 4 0 01-5.656 0L122.828 527.828a4 4 0 010-5.656l399.344-399.344a4 4 0 015.656 0z"/><path d="M527.828 92.828l429.344 429.344a4 4 0 010 5.656L527.828 957.172a4 4 0 01-5.656 0L92.828 527.828a4 4 0 010-5.656L522.172 92.828a4 4 0 015.656 0z"/><path d="M527.828 62.828l459.344 459.344a4 4 0 010 5.656L527.828 987.172a4 4 0 01-5.656 0L62.828 527.828a4 4 0 010-5.656L522.172 62.828a4 4 0 015.656 0z"/><path d="M527.828 32.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L32.828 527.828a4 4 0 010-5.656L522.172 32.828a4 4 0 015.656 0z"/><path d="M527.828 2.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L2.828 527.828a4 4 0 010-5.656L522.172 2.828a4 4 0 015.656 0z"/></g></svg>

</section>
<section>
  <div class="inner xlarge-inner stack-lg">
    <h2 class="chunk semi-bold center-text">Integrations</h2>

    <input class="hide data-in-radio" id="data-in-recipe" name="integrations" type="checkbox" checked>
    <input class="hide data-out-radio" id="data-out-recipe" name="integrations" type="checkbox" checked>
    <input class="hide messaging-channel-radio" id="messaging-channel-recipe" name="integrations" type="checkbox" checked>
    <input class="hide other-radio" id="other-recipe" name="integrations" type="checkbox" checked>

    <div class="flex items-center flex-wrap justify-center integration-recipe-switcher">
      <label class="flex items-center integration-label atomic semi-bold" data-category="data-in" for="data-in-recipe">
        <div class="bg-white box border right-margin-xxs">
          <svg class="align-middle" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Data in</span>
      </label>

      <label class="flex items-center integration-label atomic semi-bold" data-category="data-out" for="data-out-recipe">
        <div class="bg-white box border right-margin-xxs">
          <svg class="align-middle" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Data out</span>
      </label>

      <label class="flex items-center integration-label atomic semi-bold" data-category="messaging-channel" for="messaging-channel-recipe">
        <div class="bg-white box border right-margin-xxs">
          <svg class="align-middle" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Messaging channel</span>
      </label>

      <label class="flex items-center integration-label atomic semi-bold" data-category="other" for="other-recipe">
        <div class="bg-white box border right-margin-xxs">
          <svg class="align-middle" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h16v16H0z" fill="#01B2D0"/><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M3.46 9.43l2.351 2.402 6.413-7.206"/></g></svg>
        </div>

        <span>Other</span>
      </label>
    </div>

    <div class="js-integrations-blank-state hide border border-radius-2 padding-lg stack-sm">
      <h3 class="micro">No integrations</h3>
      <p></p>
    </div>

    <div class="integration-recipe-list">
      <div class="flex flex-wrap">
      <?php
      // Loop through Array
      $someJSON =
      '[
        {
          "integration": "Segment",
          "desc"       : "Use Segment to collect data from multiple sources to trigger personalized marketing communications",
          "tag"        : "Data in",
          "link"       : "/integrations/vero-segment/"
        },
        {
          "integration": "Zapier",
          "desc"       : "Using the Vero Zapier integration you can trigger actions in thousands of business tools",
          "tag"        : "Data in",
          "tag2"       : "Data out",
          "link"       : "/integrations/vero-zapier/"
        },
        {
          "integration": "Stitch",
          "desc"       : "Use Stitch to send your email interaction data including deliveries, opens, clicks and unsubscribes from Vero to your data warehouse in one click",
          "tag"        : "Data out",
          "link"       : "/integrations/vero-stitch/"
        },
        {
          "integration": "Snowplow",
          "desc"       : "Use Snowplow to send all your email and push interaction data including deliveries, opens, clicks and unsubscribes from Vero to your data warehouse",
          "tag"        : "Data out",
          "link"       : "/integrations/vero-snowplow/"
        },
        {
          "integration": "Google Analytics",
          "desc"       : "You can automatically append UTM parameters to outbound links in your email campaigns and use this data to attribute conversions to their correct source",
          "tag"        : "Data out"
        },
        {
          "integration": "Unbounce",
          "desc"       : "By integrating Vero with Unbounce, you can capture the email addresses and actions of leads that sign up via your Unbounce landing pages",
          "tag"        : "Data in"
        },
        {
          "integration": "Sendgrid",
          "desc"       : "Third party email service provider to assist with deliveribility",
          "tag"        : "Messaging channel"
        },
        {
          "integration": "Mailgun",
          "desc"       : "Third party email service provider to assist with deliveribility",
          "tag"        : "Messaging channel"
        },
        {
          "integration": "Mandrill",
          "desc"       : "Third party email service provider to assist with deliveribility",
          "tag"        : "Messaging channel"
        },
        {
          "integration": "Mailjet",
          "desc"       : "Third party email service provider to assist with deliveribility",
          "tag"        : "Messaging channel"
        },
        {
          "integration": "Twilio",
          "desc"       : "Third party email service provider to assist with deliveribility",
          "tag"        : "Messaging channel"
        },
        {
          "integration": "Amazon SNS",
          "desc"       : "Third party email service provider to assist with deliveribility",
          "tag"        : "Messaging channel"
        },
        {
          "integration": "Gleam",
          "desc"       : "Create or update customers in Vero from FormKeep submissions",
          "tag"        : "Data in",
          "link"       : "https://gleam.io/docs/integrations/vero"
        },
        {
          "integration": "Survicate",
          "desc"       : "Create or update customer profiles in Vero from new Survicate question responses",
          "tag"        : "Data In",
          "link"       : "https://survicate.com/blog/installation/vero-integration"
        },
        {
          "integration": "Leadsbridge",
          "desc"       : "Send new leads from LinkedIn Lead Get Forms to Vero",
          "tag"        : "Data In",
          "link"       : "https://leadsbridge.com/integrations/vero/"
        },
        {
          "integration": "Lexer",
          "desc"       : "Add Stripe customers with new Vero contacts",
          "tag"        : "Data In",
          "link"       : "https://learn.lexer.io/article/05ouna37ca-vero"
        },
        {
          "integration": "n8n",
          "desc"       : "Create or update Mixpanel profiles whenever people unsubscribe from Vero",
          "tag"        : "Data in",
          "link"       : "https://n8n.io/integrations/n8n-nodes-base.vero"
        },
        {
          "integration": "Tealium",
          "desc"       : "Send Trustpilot review invitations to your top customers in Vero",
          "tag"        : "Data in",
          "link"       : "https://tealium.com/integrations/vero_vero.php"
        },
        {
          "integration": "Panoply",
          "desc"       : "Send new people on Pipderive to Vero as new contacts",
          "tag"        : "Data out",
          "link"       : "https://panoply.io/integrations/vero/"
        },
        {
          "integration": "Branch",
          "desc"       : "Branch’s deep links store contextual information about where a user wants to go, where the link was clicked, who originally shared the link, and an almost unlimited amount of custom data",
          "tag"        : "Other",
          "link"       : "https://help.branch.io/using-branch/docs/vero"
        },
        {
          "integration": "Freshpaint",
          "desc"       : "Assign leads in Close and create events in Vero",
          "tag"        : "Data In",
          "link"       : "http://freshpaint.io/"
        }
      ]'
      ;

      // Convert JSON string to Array
      $someObject = json_decode($someJSON);

      // Loop through Object
      foreach($someObject as $key => $value) {
        $integration = $value->integration;
        $newIntegration = str_replace(" ", "-", $integration);

        $tag = $value->tag;
        $newTag = str_replace(" ", "-", $tag);

        $tag2 = $value->tag2;
        $newTag2 = str_replace(" ", "-", $tag2);
        ?>

        <div class="integration-recipe shadow-2 border-radius-2 bg-white border" data-category="<?php echo strtolower($newTag); strtolower($newTag2); ?>">
          <div class="stack-sm">
            <div class="stack-xxxs">
              <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/integrations/logos/<?php echo strtolower($newIntegration) ?>.svg" alt="<?php echo $value->integration ?>">

              <h3 class="micro semi-bold"><?php echo $integration; ?></h3>

              <p><?php echo $value->desc ?>.</p>
            </div>

            <?php
              if ($value->link) {
                ?>
                  <a class="d-inline-block regular underline-link" href="<?php echo $value->link; ?>">Find out more</a>
                <?php
              }
            ?>
          </div>

          <div class="flex integration-recipe-tags">
            <span class="d-inline-block bg-gray-light cation semi-bold uppercase border-radius-1"><?php echo $value->tag ?></span>

            <?php
              if ($value->tag2) {
                ?>
                  <span class="d-inline-block bg-gray-light cation semi-bold uppercase border-radius-1"><?php echo $value->tag2 ?></span>
                <?php
              }
            ?>
          </div>
        </div>

        <?php
      }

      ?>
    </div>
  </div>
</section>
<section class="bg-dark-blue border-bottom-faded" banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner tiny-inner center-text stack-md">
    <span class="annotation tracked uppercase semi-bold font-gray-dark">More integrations</span>

    <div class="stack-sm">
      <h4 class="chunk font-white">Start connecting your data with Vero</h4>

      <form class="js-signup-form home-signup-form track-signup-form lg-horizontal-margin-lg stack-xs"
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
        </div>

        <div class="js-home-contact-msg home-contact-msg font-brand-error"></div>

        <p class="cation font-gray-dark">Free for 30 days. No credit card details required.</p>
      </form>
    </div>

    <p class="medium center-text font-white">See Vero in action: <a class="underline-link negative regular track-contact-us" href="/demo/" element-position="top">schedule a demo</a></p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>