<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'landing landing-multi-language';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="center-text" banner-name="Send your multi-language emails" element-position="top">
  <div class="inner tiny-inner flush-bottom stack-xl">
    <div class="stack-lg">
      <span class="flex items-center justify-center atomic semi-bold font-gray-dark">
        <a href="/features">Features</a>
        <svg class="horizontal-margin-xxxs" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path stroke="#9D9D9D" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5L10.5 8 7 4.5" fill="none" fill-rule="evenodd"/></svg>
        Multi-language
      </span>

      <div class="stack-md">
        <div class="stack-xs">
          <h1 class="biggie semi-bold">The simple way to send your multi-language emails</h1>
          <p class="large">Send multiple language variations inside a single campaign. That's it, no fancy-pants stuff.</p>
        </div>

        <a class="btn btn--success btn--large track-start-trial" element-position="top"  href="http://app.getvero.com/signup/newsletters">Start a free trial</a>
      </div>

      <img class="responsive-image align-middle" src="/wp-content/themes/vero/assets/dist/images/features/multi-language/language-templates.svg" alt="The simple way to send your multi-language emails">
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter overflow-hidden">
  <div class="inner flush-bottom bottom-margin-xl">
    <h2 class="chunk semi-bold center-text">Just add content, we do the rest</h2>
  </div>
  <div class="inner halfs">
    <div class="left stack-md">
      <ul class="unstyled-list stack-md">
        <li class="flex">
          <span class="biggie lh-tight right-margin-md right-text">1</span>

          <div class="stack-xxxs">
            <h3 class="atomic semi-bold">Add a Language Variation</h3>

            <p class="medium">Every campaign can have multiple content variations. Add as many as you need.</p>
          </div>
        </li>
        <li class="flex">
          <span class="biggie lh-tight right-margin-md">2</span>

          <div class="stack-xxxs">
            <h3 class="atomic semi-bold">Select a language</h3>

            <p class="medium">Choose the language that you want to send. Vero automatically checks every one of your customers for the ‘locale’ property and sends the right variation to each individual.</p>
          </div>
        </li>
        <li class="flex">
          <span class="biggie lh-tight right-margin-md">3</span>

          <div class="stack-xxxs">
            <h3 class="atomic semi-bold">Add HTML</h3>

            <p class="medium">Paste in your translated HTML code to the language variation, or use our rich text editor. You can change what ever you like in each variation and use <a class="underline-link regular" href="https://www.getvero.com/email-personalization-liquid-guide">Liquid</a> and <a class="underline-link regular" href="https://help.getvero.com/articles/what-is-fusion-external-attributes.html" target="_blank">Fusion</a> just like normal.</p>
          </div>
        </li>
      </ul>

      <p class="border bg-white padding-md border-radius-2">Launch the campaign and the right variation will be sent to the right user when your email is sent.</p>
    </div>
    <div class="right md-right-bleed md-left-margin-xl">
      <img class="border border-radius-2 shadow-1" src="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/languages.png" srcset="/wp-content/themes/vero/assets/dist/images/landing-pages/i18n/languages@2x.png 2x" alt="Just add content, we do the rest">
    </div>
  </div>
</section>
<section class="center-text border-bottom">
  <div class="inner small-inner center-text stack-xl">
    <div class="stack-sm">
      <h2 class="chunk semi-bold">How does it work?</h2>

      <div class="stack-md">
        <p class="medium">Vero reserves the <code class="language-html">locale</code> user property to keep track of each customer's language preference. This means you can easily define the version each customer will receive, simply by setting their <code class="language-html">locale</code> using the <a class="underline-link regular" href="https://en.wikipedia.org/wiki/IETF_language_tag" target="_blank">IETF language codes</a>. For example, Spanish would be <code class="language-html">es</code>. When you send a campaign, we automatically make sure that each content variation is sent to the right customer.</p>

        <p class="medium">Read our <a class="underline-link regular" href="https://help.getvero.com/articles/create-a-multi-language-campaign.html" target="_blank">multi language campaigns help doc</a>.</p>
      </div>
    </div>

    <img src="/wp-content/themes/vero/assets/dist/images/features/multi-language/languages-how-it-works.png" srcset="/wp-content/themes/vero/assets/dist/images/features/multi-language/languages-how-it-works@2x.png 2x" alt="How does it work?">
  </div>
</section>
<section>
  <div class="inner small-inner center-text stack-md">
    <h2 class="chunk semi-bold">Track your customers language like this</h2>

    <div>
      <pre><code class="language-javascript">// Do this every time you update your customer data
vero.users.track!({
  id:    '123',
  email: 'damienb@getvero.com',
  data:  {
    locale: 'fr-FR'
  }
})</code></pre>
    </div>

    <p class="medium">Learn more about tracking events and adding new customers at <a class="underline-link regular" href="https://developers.getvero.com/?javascript" target="_blank">developers.getvero.com</a>.</p>
  </div>
</section>
<section class="bg-gray-lighter" banner-name="Use data to create better experience" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

    <a class="btn btn--success btn--large bottom-margin-sm track-start-trial"  element-position="bottom" href="https://app.getvero.com/signup/newsletters">Start a free trial</a>

    <p class="annotation faded">No credit card details required</p>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
