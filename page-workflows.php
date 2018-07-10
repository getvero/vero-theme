<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'more-page';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>


<section id="workflows-hero">
  <div class="inner large-inner halfs bottom-padding-medium right-padding-medium left-padding-medium">
    <div class="left secondary">
      <p class="semi-bold smallish font-brand-primary introducing">Introducing</p>
      <h1 class="hulk bottom-margin-small semi-bold">Workflows</h1>
      <p class="no-top-margin bottom-margin-medium largest">A visual way to build your automated campaigns</p>
      <a href="http://app.getvero.com/signup" class="btn btn-success btn-large btn-wide">Try it out</a>
    </div>
    <div class="workflows-hero-bg">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/zig.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/zig@2x.png 2x" class="zig" data-parallax='{"y" : 230}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/circle.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/circle@2x.png 2x" class="circle" data-parallax='{"y" : -100}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/waves.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/waves@2x.png 2x" class="waves" data-parallax='{"y" : -300}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/lines.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/lines@2x.png 2x" class="lines" data-parallax='{"y" : -350}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/dots@2x.png 2x" class="dots hide-on-mobile" data-parallax='{"y" : 100}'>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero@2x.png 2x" class="center-text display-block">
    </div>
  </div>

</section>
<section id="workflows-hero-features" class="double-padding">
  <div class="inner medium-inner">
    <ul class="feature-list left-align unstyled-list halfs">
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-dots@2x.png 2x"></div><div><h2 class="chunk">Move Faster</h2><p class="medium light no-top-margin">Quickly generate natural and helpful next steps in your customers journey. You can design, save, collaborate, change, come back to update later, publish and update all in one place.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-zigs.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-zigs@2x.png 2x"></div><div><h2 class="chunk">Take Control</h2><p class="medium light no-top-margin">All the tools you need to design your customer’s email experience - giving you control of ordering, timing, actions and logic.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-waves.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-waves@2x.png 2x"></div><div><h2 class="chunk">Confidently Make Changes</h2><p class="medium light no-top-margin">Understand the logic of a workflow at-a-glance so anyone in your team or new members can quickly pick up from where you left off.</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-circles.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/small-circles@2x.png 2x"></div><div><h2 class="chunk">Identify Opportunities</h2><p class="medium light no-top-margin">Visualising your customers experience helps you easily identify opportunities to further develop or optimise your email messages.</p></div></li>
    </ul>
  </div>
</section>
<section id="workflows-ui-nodes" class="feature-section">
  <div class="inner large-inner">
    <div class="flex-inner">
      <div class="left center-text primary">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/add-menu.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/add-menu@2x.png 2x" class="responsive-image menu">
        <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-zig.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-zig@2x.png 2x" class="zig" data-parallax='{"y" : -100}'>
        <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/smallish-dots@2x.png 2x" class="dots" data-parallax='{"y" : 100}'>
      </div>
      <div class="right secondary">
        <h2 class="biggie">Everything you need to build effective automated marketing campaigns</h2>
        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p class="pill pill-medium pill-primary top-margin-small"><a href="#">Read the documentation</a></p>
      </div>
    </div>
  </div>
</section>
<section id="workflows-quotes" class="feature-section double-padding">
  <div class="inner halfs left-padding-large right-padding-large">
    <div class="left center-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/logo-example.png" srcset="" class="inline-block bottom-margin-medium">
      <h3 class="italic">&quot;Awesome quote about this awesome new feature&quot;</h3>
      <p>Name, Position - Company</p>
    </div>
    <div class="right center-text">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/logo-example.png" srcset="" class="inline-block bottom-margin-medium">
      <h3 class="italic">&quot;Awesome quote about this awesome new feature&quot;</h3>
      <p>Name, Position - Company</p>
    </div>
  </div>
</section>
<section id="workflows-reasons" class="feature-section double-padding gray-section">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie">Design campaigns without restriction</h2>
    <p class="large bottom-margin-large">Reaching your goals has never been easier...</p>
  </div>
  <div class="inner large-inner halfs flush-top">
    <div class="left secondary">
      <ul class="feature-list left-align unstyled-list">
        <li><img class="padding-tiny" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/onboarding.svg" width="50" height="50"><div><h2 class="title bottom-margin-tiny">Onboard new users</h2><p class="medium desc">Get your new customers started in the best possible way.</p></div></li>
        <li><img class="padding-tiny" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/engagement.svg" width="50" height="50"><div><h2 class="title bottom-margin-tiny">Drive engagement</h2><p class="medium desc">Point people in the right direction at exactly the right moment.</p></div></li>
        <li><img class="padding-tiny" src="/wp-content/themes/vero/assets/images/landing-pages/workflows/recapture.svg" width="50" height="50"><div><h2 class="title bottom-margin-tiny">Recapture attention</h2><p class="medium desc">Get back on the radar when customers have been inactive.</p></div></li>
      </ul>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/examples.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/examples@2x.png 2x" class="center-text display-block small-responsive-image">
    </div>
  </div>
</section>
<section id="workflows-details" class="feature-section double-padding">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie bottom-margin-large">We've got the details covered</h2>
  </div>
  <div class="inner large-inner halfs flush-top">
    <ul class="feature-list thirds left-align">
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/conversion.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/conversion@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title bottom-margin-tiny">Conversion Goals</h2><p class="desc top-margin-tiny bottom-margin-small">Start your workflows with a customer action</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/insights.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/insights@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title bottom-margin-tiny">Insights</h2><p class="desc top-margin-tiny bottom-margin-small">Start your workflows with a customer action</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/dragdrop.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/dragdrop@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title bottom-margin-tiny">Drag and Drop</h2><p class="desc top-margin-tiny bottom-margin-small">Start your workflows with a customer action</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/preferredtime.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/preferredtime@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title bottom-margin-tiny">Send at a preferred time</h2><p class="desc top-margin-tiny bottom-margin-small">Start your workflows with a customer action</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/transactionals.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/transactionals@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title bottom-margin-tiny">Transactional Emails</h2><p class="desc top-margin-tiny bottom-margin-small">Start your workflows with a customer action</p></div></li>
       <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/abtesting.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/abtesting@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title bottom-margin-tiny">A/B Testing (coming soon)</h2><p class="desc top-margin-tiny bottom-margin-small">Start your workflows with a customer action</p></div></li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Start building your best campaigns today</h1>
    <p class="sub-heading">Create a free account, build your first workflow and see how Vero can help your team.</p>
    <a href="http://app.getvero.com/signup" class="btn btn-success btn-large btn-wide">Get Started</a>
  </div>
</section>


<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>