<?php 
  //Remove the entry header markup (requires HTML5 theme support)
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title');
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

  //Force full width layout
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'metro_add_body_class' );
  function metro_add_body_class( $classes ) {
   $classes[] = 'full-width zapier';
   return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div id="integrations">
    <ul class="list-unstyled list-inline">
      <?php 
        $integrations = ['wistia','stripe','zendesk','salesforce','vero','helpscout','pipedrive','unbounce','freshdesk','closeio','leadpages','slack','recurly'];
        $i = 9;
        while ($i > 0) {
          foreach($integrations as $integration) {
            ?>
              <li class="integration <?php echo $integration; ?>"></li>
            <?php
          }
          $i--;
        }
      ?>
    </ul>
  </div>
  <div id="introduction">
    <div class="centered">
      <h1>Vero + Zapier</h1>
      <p>Vero helps you use everything you know about your customers to send more personal emails. With Zapier, you can now use more data than ever before to power your personalisation.</p>
      <p>Create your first Zap with Vero now, or check out some popular examples below.</p>
      <a href="https://zapier.com" class="btn btn-large btn-primary">Create a free Vero account &rarr;</a>
      <p class="small">Test Vero with Zapier on Vero's 14 day free trial</p>
    </div>
  </div>
</section>

<section id="examples">
  <div class="inner">
    <h2 class="center-text">Track every little thing your customers do</h2>
    <p class="center-text top">Vero now works with Zapier to let you synchronise customer properties and track events for over 250 online services.</p>

    <ul class="ideas list-inline">
      <li class="center-text">
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/helpscout.png">
          <p class="h3">HelpScout</p>
        </div>
        <div class="plus">+</div>
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/vero.png">
          <p class="h3">Vero</p>
        </div>
        <p class="body">
          Trigger an email when someone has sent your help desk five separate support tickets with an offer to give them a call, or asking for feedback.
          <a href="#" class="btn btn-warning">Create this Zap in Zapier</a>
        </p>
      </li>
      <li class="center-text">
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/stripe.png">
          <p class="h3">Stripe</p>
        </div>
        <div class="plus">+</div>
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/vero.png">
          <p class="h3">Vero</p>
        </div>
        <p class="body">
          Trigger an email when someone has sent your help desk five separate support tickets with an offer to give them a call, or asking for feedback.
          <a href="#" class="btn btn-warning">Create this Zap in Zapier</a>
        </p>
      </li>
      <li class="center-text">
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/pipedrive.png">
          <p class="h3">Pipedrive</p>
        </div>
        <div class="plus">+</div>
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/vero.png">
          <p class="h3">Vero</p>
        </div>
        <p class="body">
          Trigger a series of emails when you create a new deal, or remove customers from a series when they enter your pipeline.
          <a href="#" class="btn btn-warning">Create this Zap in Zapier</a>
        </p>
      </li>
      <li class="center-text">
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/unbounce.png">
          <p class="h3">Unbounce</p>
        </div>
        <div class="plus">+</div>
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/vero.png">
          <p class="h3">Vero</p>
        </div>
        <p class="body">
          Send a series of emails to a lead that downloads an ebook or enters a contest.
          <a href="#" class="btn btn-warning">Create this Zap in Zapier</a>
        </p>
      </li>
      <li class="center-text">
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/wistia.png">
          <p class="h3">Wistia</p>
        </div>
        <div class="plus">+</div>
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/vero.png">
          <p class="h3">Vero</p>
        </div>
        <p class="body">
          When someone subscribes at the end of your video, send them the perfect message based on what they just watched.
          <a href="#" class="btn btn-warning">Create this Zap in Zapier</a>
        </p>
      </li>
      <li class="center-text">
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/gmail.png">
          <p class="h3">Gmail</p>
        </div>
        <div class="plus">+</div>
        <div class="zap center-text">
          <img src="/wp-content/themes/vero/assets/images/zapier/vero.png">
          <p class="h3">Vero</p>
        </div>
        <p class="body">
          Track replies to your emails and remove customers from automated email flows. No more pesky double-ups that bother your customers.
          <a href="#" class="btn btn-warning">Create this Zap in Zapier</a>
        </p>
      </li>
    </ul>
  </div>
</section>

<section id="case-study">
  <div class="cm" style="background:url('/wp-content/themes/vero/assets/images/zapier/contact-monkey-outside.jpg') no-repeat">
    <div class="inner">
      <div class="wrapper">
        <h2>ContactMonkey use Zapier and Vero to increase trial conversions</h3>
        <p>ContactMonkey are a SaaS business that uses Vero's Zapier plugin to track replies to their automated onboarding campaign and via their helpdesk. Armed with this knowledge they ensure customers don't have a conflicted onboarding experience, enabling them to improve customer happiness and increase conversion rates.</p>
        <p>
          <a class="btn btn-primary" href="#">Read more &rarr;</a>
          <a class="btn btn-outline btn-white" href="#">Start your own Vero free trial</a>
        </p>
      </div>
    </div>
  </div>
</section>

<script>
jQuery(document).ready(function() {
  setInterval(
    function() 
    {
      jQuery('#integrations .active').removeClass('active');
      jQuery.fn.random = function() {
        return this.eq(Math.floor(Math.random() * this.length));
      }          
      jQuery('#integrations .integration').random().addClass('active');
      jQuery('#integrations .integration').random().addClass('active');
      jQuery('#integrations .vero').random().addClass('active');
      jQuery('#integrations .integration').random().addClass('active');
    }, 
  1500);
});
</script>

<?php 
  no_content_genesis_footer();
?>