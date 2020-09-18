<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'landing landing-multi-language';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="hero border-bottom-light" banner-name="Send your multi-language emails" element-position="top">
  <div class="inner tiny-inner center-text flush-bottom stack-xl">
    <div class="stack-lg">
      <span class="flex items-center justify-center atomic semi-bold font-gray-dark">
        <a href="/features">Features</a>
        <svg class="horizontal-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
        Multi-langiage
      </span>

      <div class="stack-md">
        <div class="stack-xs">
          <h1 class="biggie semi-bold">The simple way to send your multi-language emails</h1>
          <p class="large">Send multiple language variations inside a single campaign. That's it, no fancy-pants stuff.</p>
        </div>
        <a class="btn btn--success btn--large track-start-trial" element-position="top"  href="http://app.getvero.com/signup">Start a free trial</a>
      </div>
    </div>

    <div>
      <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/language-templates.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/language-templates@2x.png 2x" alt="The simple way to send your multi-language emails">
    </div>
  </div>
</section>
<section id="multi-language-steps" class="border-bottom-light">
  <div class="inner full-width halfs">
    <div class="left">
      <h2 class="micro regular">Just add content, we do the rest.</h2>
      <ul class="steps unstyled-list">
        <li class="step"><span class="number">1</span><p class="step-title"><strong>Add a Language Variation</strong></p><p>Every campaign can have multiple content variations. Add as many as you need.</p></li>
        <li class="step"><span class="number">2</span><p class="step-title"><strong>Select a Language</strong></p><p>Choose the language that you want to send. Vero automatically checks every one of your customers for the ‘locale’ property and sends the right variation to each individual.</p></li>
        <li class="step"><span class="number">3</span><p class="step-title"><strong>Add HTML</strong></p><p>Paste in your translated HTML code to the language variation, or use our rich text editor. You can change what ever you like in each variation and use <a href="https://www.getvero.com/email-personalization-liquid-guide">Liquid</a> and <a href="https://help.getvero.com/articles/what-is-fusion-external-attributes.html" target="_blank">Fusion</a> just like normal.</p></li>
        <li class="step"><span class="number">4</span><p class="step-title"><strong>There is no fourth step!</strong> Launch the campaign and the right variation will be sent to the right user when your email is sent.</p></li>
      </ul>
    </div>
    <div class="right">
      <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/languages.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/languages@2x.png 2x" alt="Just add content, we do the rest">
    </div>
  </div>
</section>
<section id="multi-language-how-it-works" class="center-text border-bottom-light">
  <div class="inner center-text">
    <h2 class="tubs regular regular">How does it work?</h2>
    <p>Vero reserves the <code>locale</code> user property to keep track of each customer's language preference. This means you can easily define the version each customer will receive, simply by setting their <code>locale</code> using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag" target="_blank">IETF language codes</a>. For example, Spanish would be <code>es</code>. When you send a campaign, we automatically make sure that each content variation is sent to the right customer. Read our <a href="https://help.getvero.com/articles/create-a-multi-language-campaign.html" target="_blank">multi language campaigns help doc</a>.</p>
    <img src="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/languages-how-it-works.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/languages-how-it-works@2x.png 2x" alt="How does it work?">
  </div>
</section>
<section id="multi-languages-code">
  <div class="inner center-text">
    <h2 class="tubs regular regular center-text">Track your customers language in Vero like this:</h2>

    <div class="bottom-margin-xs">
      <pre><code class="language-javascript">// Do this every time you update your customer data
vero.users.track!({
  id:    '123',
  email: 'damienb@getvero.com',
  data:  {
    locale: 'fr-FR'
  }
})</code></pre>
    </div>

    <p>Learn more about tracking events and adding new customers at <a href="https://developers.getvero.com/?javascript" target="_blank">developers.getvero.com</a>.</p>

  </div>
</section>
<section class="bg-gray-lighter" banner-name="Use data to create better experience" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <a class="btn btn--success btn--large bottom-margin-sm track-start-trial"  element-position="bottom" href="https://app.getvero.com/signup">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
