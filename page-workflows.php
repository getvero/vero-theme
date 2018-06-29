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
  <div class="inner medium-inner halfs bottom-padding-medium right-padding-medium left-padding-medium">
    <div class="left secondary">
      <p class="semi-bold smallish font-brand-primary no-top-margin top-margin-large bottom-margin-small">Introducing</p>
      <h1 class="hulk bottom-margin-small semi-bold">Workflows</h1>
      <p class="no-top-margin bottom-margin-medium largest">A visual way to build your automated campaigns</p>
      <a href="" class="btn btn-primary btn-large btn-wide">Try it out</a>
    </div>
    <div class="workflows-hero-bg">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/zig.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/zig@2x.png 2x" class="zig" data-parallax='{"y" : 230}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/circle.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/circle@2x.png 2x" class="circle" data-parallax='{"y" : -100}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/waves.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/waves@2x.png 2x" class="waves" data-parallax='{"y" : -300}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/lines.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/lines@2x.png 2x" class="lines" data-parallax='{"y" : -350}'>
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/dots.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/dots@2x.png 2x" class="dots" data-parallax='{"y" : 100}'>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero@2x.png 2x" class="center-text display-block small-cover-image-200">
    </div>
  </div>

</section>
<section id="workflows-hero-features" class="double-padding">
  <div class="inner medium-inner">
    <ul class="feature-list left-align unstyled-list halfs">
      <li><div><h2 class="chunk">Move Faster</h2><p class="medium light no-top-margin">Quickly generate natural and helpful next steps in your customers journey. You can design, save, collaborate, change, come back to update later, publish and update all in one place.</p></div></li>
      <li><div><h2 class="chunk">Take Control</h2><p class="medium light no-top-margin">All the tools you need to design your customer’s email experience - giving you control of ordering, timing, actions and logic.</p></div></li>
      <li><div><h2 class="chunk">Confidently Make Changes</h2><p class="medium light no-top-margin">Understand the logic of a workflow at-a-glance so anyone in your team or new members can quickly pick up from where you left off.</p></div></li>
      <li><div><h2 class="chunk">Identify Opportunities</h2><p class="medium light no-top-margin">Visualising your customers experience helps you easily identify opportunities to further develop or optimise your email messages.</p></div></li>
    </ul>
  </div>
</section>
<section id="workflows-ui-nodes" class="feature-section double-padding gray-dot-section">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie bottom-margin-large">Everything you need to build effective automated campaigns</h2>
  </div>
  <div class="inner large-inner flush-top">
    <div class="flex-inner">
      <div class="left">
        
      </div>
      <div class="right">
        <ul class="feature-list left-align unstyled-list halfs">
          <li class="hover-box active"><div><h2 class="bottom-margin-tiny">Trigger</h2><p class="no-margin">Start your workflows with a customer action</p></div></li>
          <li class="hover-box"><div><h2 class="bottom-margin-tiny">Branch</h2><p class="no-margin">Take customers down different paths</p></div></li>
          <li class="hover-box"><div><h2 class="bottom-margin-tiny">Delay</h2><p class="no-margin">Experiment with timing and find out what works</p></div></li>
          <li class="hover-box"><div><h2 class="bottom-margin-tiny">Filter</h2><p class="no-margin">Only advance the right customers</p></div></li>
          <li class="hover-box"><div><h2 class="bottom-margin-tiny">Email</h2><p class="no-margin">Send you customers an email communication</p></div></li>
          <li class="hover-box"><div><h2 class="bottom-margin-tiny">Push</h2><p class="no-margin">Send a push notification (coming soon)</p></div></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="workflows-quotes" class="feature-section double-padding">
  <div class="inner halfs left-padding-large right-padding-large">
    <div class="left center-text">
      <img src="" srcset="" class="inline-block bottom-margin-small">
      <h3 class="quote">Awesome quote about this awesome new feature</h3>
      <p>Name, Position - Company</p>
    </div>
    <div class="right center-text">
      <img src="" srcset="" class="inline-block bottom-margin-small">
      <h3 class="quote">Awesome quote about this awesome new feature</h3>
      <p>Name, Position - Company</p>
    </div>
  </div>
</section>
<section id="workflows-reasons" class="feature-section double-padding gray-section">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie">Design campaigns without restriction</h2>
    <p class="large bottom-margin-large">Reaching your goals has never been easier with Workflow’s, here’s a few examples…</p>
  </div>
  <div class="inner large-inner halfs flush-top">
    <div class="left secondary">
      <ul class="feature-list left-align unstyled-list accordian">
        <li><div><h2 class="title">Onboarding new users</h2><p class="desc">Start your workflows with a customer action</p></div></li>
        <li><div><h2 class="title">Drive engagement</h2><p class="desc">Take customers down different paths</p></div></li>
        <li><div><h2 class="title">Recapture attention</h2><p class="desc">Experiment with timing and find out what works</p></div></li>
        <li><div><h2 class="title">Increase retention</h2><p class="desc">Only advance the right customers</p></div></li>
      </ul>
    </div>
    <div class="right primary">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/hero@2x.png 2x" class="center-text display-block small-cover-image-200">
    </div>
  </div>
</section>
<section id="workflows-details" class="feature-section double-padding">
  <div class="inner medium-inner flush-bottom">
    <h2 class="biggie bottom-margin-large">We've got the details covered</h2>
  </div>
  <div class="inner large-inner halfs flush-top">
    <ul class="feature-list thirds left-align">
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/dragdrop.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/dragdrop@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title">Onboarding new users</h2><p class="desc">Start your workflows with a customer action</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/preferredtime.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/preferredtime@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title">Onboarding new users</h2><p class="desc">Start your workflows with a customer action</p></div></li>
      <li><div><img src="/wp-content/themes/vero/assets/images/landing-pages/workflows/transactionals.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/workflows/transactionals@2x.png 2x" class="display-block responsive-image bottom-margin-small"><h2 class="title">Onboarding new users</h2><p class="desc">Start your workflows with a customer action</p></div></li>
    </ul>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Put your data first and craft better customer experiences</h1>
    <p class="sub-heading">Create a free account, import your data and see how Vero can help your team.</p>
    <form action="https://app.getvero.com/pre_signups" method='post' class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="mini light faded center-text mf-half center-block top-margin-small horizontal-padding-small">In order to provide our service to you, we must store your personal information. Any personal data that we collect will be handled in accordance with our <a href="/privacy">Privacy Notice</a>.</p>
  </div>
</section>


<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>