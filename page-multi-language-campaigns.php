<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'landing landing-multi-language';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="multi-language-coming-soon" class="coming-soon-banner">
  <div class="inner">
    <h3>Coming Soon</h3>
  </div>
</section>
<section id="multi-language-hero" class="hero border-bottom">
  <div class="inner center-text">
    <h1 class="hero-title">The simple way to send your multi language emails</h1>
    <p>Send multiple language variations inside a single campaign. That's it, no fancy-pants stuff.</p>
    <img class="center-block" src="/wp-content/themes/vero/assets/images/landing-pages/i18n/language-templates.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/i18n/language-templates@2x.png 2x">
  </div>
</section>
<section id="multi-language-services" class="border-bottom">
  <div class="inner center-text">
    <h2>Designed to work in conjunction with the translation services you already use.</h2>
    <img src="/wp-content/themes/vero/assets/images/landing-pages/i18n/language-services-logos.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/i18n/language-services-logos@2x.png 2x">
  </div>
</section>
<section id="multi-language-steps" class="border-bottom">
  <div class="inner full-width halfs">
    <div class="left">
      <h2>Just add content, we do the rest.</h2>
      <ul class="steps unstyled-list">
        <li class="step"><span class="number">1</span><p class="step-title"><strong>Add a Language Variation</strong></p><p>Every campaign can have multiple content variations. Add as many as you need.</p></li>
        <li class="step"><span class="number">2</span><p class="step-title"><strong>Select a Language</strong></p><p>Choose the language that you want to send. Vero automatically checks every one of your customers for the ‘language’ property and sends the right variation to each individual.</p></li>
        <li class="step"><span class="number">3</span><p class="step-title"><strong>Add HTML</strong></p><p>Paste in your translated HTML codeto the language variation, or use our rich text editor. You can change what ever you like in each variation and use <a href="https://github.com/Shopify/liquid/wiki/Liquid-for-Designers" target="_blank">Liquid</a> and <a href="http://help.getvero.com/articles/what-are-external-attributes.html" target="_blank">External Attributes</a> just like normal.</p></li>
        <li class="step"><span class="number">4</span><p class="step-title"><strong>There is no fourth step!</strong> Launch the campaign and the right variation will be sent to the right user when your email is sent.</p></li>
      </ul>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/images/landing-pages/i18n/languages-ui.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/i18n/languages-ui@2x.png 2x">
    </div>
  </div>
</section>
<section id="multi-language-how-it-works" class="center-text border-bottom">
  <div class="inner center-text">
    <h2>How does it work?</h2>
    <p>Vero reserves the <code>language</code> user property to keep track of each customer's language preference. This means you can easily define the version each customer will receive, simply by setting their <code>language</code> using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag" target="_blank">IETF language codes</a>. For example, Spanish would be <code>es_ES</code>. When you send a campaign, we automatically make sure that each content variation is sent to the right customer.</p>
    <img src="/wp-content/themes/vero/assets/images/landing-pages/i18n/languages-how-it-works.png" srcset="/wp-content/themes/vero/assets/images/landing-pages/i18n/languages-how-it-works@2x.png 2x">
  </div>
</section>
<section id="multi-languages-code">
  <div class="inner center-text">
    <h2 class="center-text">Track your customers language in Vero like this:</h2>
    <div class="center-block">
      <div id="data-code-block">
          <pre class="language-javascript line-numbers"><code>//Do this every time you update your customer data
vero.users.track!({
    id: '123',
    email: 'damienb@getvero.com',
    {
      language: 'fr_FR'
    }
  })</code></pre>
      </div>
      <div class="clearfix"></div>
    </div>
    <p>Learn more about tracking events and adding new customers at <a href="http://developers.getvero.com/?javascript" target="_blank">developers.getvero.com</a>.</p>
      
  </div>
</section>


<section id="call-to-action" class="center-text">
  <div class="inner center-text">
    <h2>Keep updated and get early access</h2>
    <form action="https://app.getvero.com/forms/be673e13e65a86736e07c35dad12b7a1" method='post' class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Notify Me">
    </form>
  </div>
</section>
<section id="multi-language-coming-soon" class="coming-soon-banner">
  <div class="inner">
    <h3>Coming Soon</h3>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>
