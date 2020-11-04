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
      <div class="col-main stack-md">
        <span class="annotation tracked uppercase font-gray-dark semi-bold">Featured integration</span>

        <div class="stack-xs">
          <h2 class="tubs semi-bold">Move faster by connecting Vero and Segment</h2>

          <p class="medium">Use Segment to collect data from multiple sources to trigger personalized marketing communications.</p>
        </div>

        <a class="btn btn--secondary" href="/integrations/vero-segment/">Read more</a>
      </div>
      <div class="col-aside md-right-text">
        <svg class="align-middle" width="303" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="b"><stop stop-color="#52BD94" offset="0%"/><stop stop-color="#01B2D0" offset="100%"/></linearGradient><path d="M33.05.002A4.44 4.44 0 0032.91 0H4.387A4.375 4.375 0 000 4.407c0 .55.105 1.078.296 1.564.09.274.207.543.354.803l14.18 24.65c.203.353.447.667.721.94a4.397 4.397 0 003.22 1.386c1.067 0 2.05-.4 2.806-1.058a4.42 4.42 0 001.094-1.268L36.85 6.774c.144-.255.26-.518.348-.786a4.28 4.28 0 00.302-1.58C37.5 1.954 35.554 0 33.193 0c-.048 0-.095 0-.143.002zM20.152 23.18L31.365 3.632c.04-.055.067-.097.081-.122a1.943 1.943 0 011.747-1.061c1.015 0 1.87.859 1.87 1.958 0 .376-.124.745-.326 1.062a.11.11 0 00-.04.081L22.346 27.016l-2.194-3.836zM4.55 2.45h24.702L27.06 6.285H4.307c-1.055 0-1.91-.86-1.91-1.878 0-1.1.855-1.958 1.91-1.958h.243zm7.296 6.284h13.808L18.75 20.736 11.846 8.733zm5.137 21.548c.002-.029-.011-.051-.041-.081L4.632 8.733H9.02l11.254 19.548c.014.054.039.101.08.164.173.287.285.65.285 1.06 0 1.02-.854 1.878-1.869 1.878a1.983 1.983 0 01-1.787-1.102z" id="a"/></defs><g fill="none" fill-rule="evenodd"><g stroke="#E1E1E1"><path d="M559.828 103.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L64.828 598.828a4 4 0 010-5.656l489.344-489.344a4 4 0 015.656 0z"/><path d="M559.828 73.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L34.828 598.828a4 4 0 010-5.656L554.172 73.828a4 4 0 015.656 0z"/></g><path d="M65.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0L5.657 65.657a8 8 0 010-11.314L54.343 5.657a8 8 0 0111.314 0z" fill="#01B2D0"/><use fill="#FFF" xlink:href="#a" transform="translate(40 47)"/><path d="M248.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0l-48.686-48.686a8 8 0 010-11.314l48.686-48.686a8 8 0 0111.314 0z" fill="#52BD94"/><g transform="translate(226 43)" fill="#FFF"><rect fill-rule="nonzero" x="13.127" y="11.942" width="20.9" height="3.626" rx=".674"/><rect fill-rule="nonzero" x=".195" y="21.002" width="20.9" height="3.626" rx=".674"/><path d="M2.705 14.423a.68.68 0 00.82-.461c2.239-7.029 9.466-11.191 16.668-9.6a.668.668 0 00.783-.487l.59-2.202a.678.678 0 00-.513-.835C11.947-1.215 2.793 4.078.03 12.994a.671.671 0 00.474.84l2.202.59zM31.525 22.146a.68.68 0 00-.821.462c-2.238 7.028-9.465 11.19-16.667 9.6a.669.669 0 00-.783.486l-.59 2.202a.678.678 0 00.513.835c9.106 2.053 18.26-3.24 21.024-12.156a.671.671 0 00-.474-.84l-2.202-.59z"/><circle fill-rule="nonzero" cx="27.445" cy="5.973" r="1.988"/><circle fill-rule="nonzero" cx="6.784" cy="30.596" r="1.988"/></g><g transform="translate(120 55)"><circle stroke="#52BD94" stroke-width="2" cx="58" cy="5" r="5"/><circle stroke="#01B2D0" stroke-width="2" cx="5" cy="5" r="5"/><rect fill="url(#b)" x="13" y="3" width="38" height="4" rx="2"/></g></g></svg>
      </div>
    </div>
  </div>
  <div class="inner small-inner relative z-1">
    <div class="w-sidebar w-sidebar--sm">
      <div class="col-main md-order-1 stack-md">
        <span class="annotation tracked uppercase font-gray-dark semi-bold">Featured</span>

        <div class="stack-xs">
          <h2 class="tubs semi-bold">Integrate beyond your product with Vero and Zapier</h2>
          <p class="medium">Using the Vero Zapier integration you can trigger actions in thousands of business tools.</p>
        </div>

        <a class="btn btn--secondary" href="/integrations/vero-zapier/">Read more</a>
      </div>
      <div class="col-aside md-order-0">
        <svg class="align-middle" width="303" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="b"><stop stop-color="#52BD94" offset="0%"/><stop stop-color="#01B2D0" offset="100%"/></linearGradient><path d="M33.05.002A4.44 4.44 0 0032.91 0H4.387A4.375 4.375 0 000 4.407c0 .55.105 1.078.296 1.564.09.274.207.543.354.803l14.18 24.65c.203.353.447.667.721.94a4.397 4.397 0 003.22 1.386c1.067 0 2.05-.4 2.806-1.058a4.42 4.42 0 001.094-1.268L36.85 6.774c.144-.255.26-.518.348-.786a4.28 4.28 0 00.302-1.58C37.5 1.954 35.554 0 33.193 0c-.048 0-.095 0-.143.002zM20.152 23.18L31.365 3.632c.04-.055.067-.097.081-.122a1.943 1.943 0 011.747-1.061c1.015 0 1.87.859 1.87 1.958 0 .376-.124.745-.326 1.062a.11.11 0 00-.04.081L22.346 27.016l-2.194-3.836zM4.55 2.45h24.702L27.06 6.285H4.307c-1.055 0-1.91-.86-1.91-1.878 0-1.1.855-1.958 1.91-1.958h.243zm7.296 6.284h13.808L18.75 20.736 11.846 8.733zm5.137 21.548c.002-.029-.011-.051-.041-.081L4.632 8.733H9.02l11.254 19.548c.014.054.039.101.08.164.173.287.285.65.285 1.06 0 1.02-.854 1.878-1.869 1.878a1.983 1.983 0 01-1.787-1.102z" id="a"/></defs><g fill="none" fill-rule="evenodd"><g stroke="#E1E1E1"><path d="M559.828 103.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L64.828 598.828a4 4 0 010-5.656l489.344-489.344a4 4 0 015.656 0z"/><path d="M559.828 73.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L34.828 598.828a4 4 0 010-5.656L554.172 73.828a4 4 0 015.656 0z"/></g><path d="M65.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0L5.657 65.657a8 8 0 010-11.314L54.343 5.657a8 8 0 0111.314 0z" fill="#01B2D0"/><use fill="#FFF" xlink:href="#a" transform="translate(40 47)"/><path d="M248.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0l-48.686-48.686a8 8 0 010-11.314l48.686-48.686a8 8 0 0111.314 0z" fill="#52BD94"/><g transform="translate(226 43)" fill="#FFF"><rect fill-rule="nonzero" x="13.127" y="11.942" width="20.9" height="3.626" rx=".674"/><rect fill-rule="nonzero" x=".195" y="21.002" width="20.9" height="3.626" rx=".674"/><path d="M2.705 14.423a.68.68 0 00.82-.461c2.239-7.029 9.466-11.191 16.668-9.6a.668.668 0 00.783-.487l.59-2.202a.678.678 0 00-.513-.835C11.947-1.215 2.793 4.078.03 12.994a.671.671 0 00.474.84l2.202.59zM31.525 22.146a.68.68 0 00-.821.462c-2.238 7.028-9.465 11.19-16.667 9.6a.669.669 0 00-.783.486l-.59 2.202a.678.678 0 00.513.835c9.106 2.053 18.26-3.24 21.024-12.156a.671.671 0 00-.474-.84l-2.202-.59z"/><circle fill-rule="nonzero" cx="27.445" cy="5.973" r="1.988"/><circle fill-rule="nonzero" cx="6.784" cy="30.596" r="1.988"/></g><g transform="translate(120 55)"><circle stroke="#52BD94" stroke-width="2" cx="58" cy="5" r="5"/><circle stroke="#01B2D0" stroke-width="2" cx="5" cy="5" r="5"/><rect fill="url(#b)" x="13" y="3" width="38" height="4" rx="2"/></g></g></svg>
      </div>
    </div>
  </div>

  <svg class="absolute z-0" width="1050" height="1050" xmlns="http://www.w3.org/2000/svg"><g stroke="#E1E1E1" fill="none" fill-rule="evenodd"><path d="M527.828 512.828l9.344 9.344a4 4 0 010 5.656l-9.344 9.344a4 4 0 01-5.656 0l-9.344-9.344a4 4 0 010-5.656l9.344-9.344a4 4 0 015.656 0z"/><path d="M527.828 482.828l39.344 39.344a4 4 0 010 5.656l-39.344 39.344a4 4 0 01-5.656 0l-39.344-39.344a4 4 0 010-5.656l39.344-39.344a4 4 0 015.656 0z"/><path d="M527.828 452.828l69.344 69.344a4 4 0 010 5.656l-69.344 69.344a4 4 0 01-5.656 0l-69.344-69.344a4 4 0 010-5.656l69.344-69.344a4 4 0 015.656 0z"/><path d="M527.828 422.828l99.344 99.344a4 4 0 010 5.656l-99.344 99.344a4 4 0 01-5.656 0l-99.344-99.344a4 4 0 010-5.656l99.344-99.344a4 4 0 015.656 0z"/><path d="M527.828 392.828l129.344 129.344a4 4 0 010 5.656L527.828 657.172a4 4 0 01-5.656 0L392.828 527.828a4 4 0 010-5.656l129.344-129.344a4 4 0 015.656 0z"/><path d="M527.828 362.828l159.344 159.344a4 4 0 010 5.656L527.828 687.172a4 4 0 01-5.656 0L362.828 527.828a4 4 0 010-5.656l159.344-159.344a4 4 0 015.656 0z"/><path d="M527.828 332.828l189.344 189.344a4 4 0 010 5.656L527.828 717.172a4 4 0 01-5.656 0L332.828 527.828a4 4 0 010-5.656l189.344-189.344a4 4 0 015.656 0z"/><path d="M527.828 302.828l219.344 219.344a4 4 0 010 5.656L527.828 747.172a4 4 0 01-5.656 0L302.828 527.828a4 4 0 010-5.656l219.344-219.344a4 4 0 015.656 0z"/><path d="M527.828 272.828l249.344 249.344a4 4 0 010 5.656L527.828 777.172a4 4 0 01-5.656 0L272.828 527.828a4 4 0 010-5.656l249.344-249.344a4 4 0 015.656 0z"/><path d="M527.828 242.828l279.344 279.344a4 4 0 010 5.656L527.828 807.172a4 4 0 01-5.656 0L242.828 527.828a4 4 0 010-5.656l279.344-279.344a4 4 0 015.656 0z"/><path d="M527.828 212.828l309.344 309.344a4 4 0 010 5.656L527.828 837.172a4 4 0 01-5.656 0L212.828 527.828a4 4 0 010-5.656l309.344-309.344a4 4 0 015.656 0z"/><path d="M527.828 182.828l339.344 339.344a4 4 0 010 5.656L527.828 867.172a4 4 0 01-5.656 0L182.828 527.828a4 4 0 010-5.656l339.344-339.344a4 4 0 015.656 0z"/><path d="M527.828 152.828l369.344 369.344a4 4 0 010 5.656L527.828 897.172a4 4 0 01-5.656 0L152.828 527.828a4 4 0 010-5.656l369.344-369.344a4 4 0 015.656 0z"/><path d="M527.828 122.828l399.344 399.344a4 4 0 010 5.656L527.828 927.172a4 4 0 01-5.656 0L122.828 527.828a4 4 0 010-5.656l399.344-399.344a4 4 0 015.656 0z"/><path d="M527.828 92.828l429.344 429.344a4 4 0 010 5.656L527.828 957.172a4 4 0 01-5.656 0L92.828 527.828a4 4 0 010-5.656L522.172 92.828a4 4 0 015.656 0z"/><path d="M527.828 62.828l459.344 459.344a4 4 0 010 5.656L527.828 987.172a4 4 0 01-5.656 0L62.828 527.828a4 4 0 010-5.656L522.172 62.828a4 4 0 015.656 0z"/><path d="M527.828 32.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L32.828 527.828a4 4 0 010-5.656L522.172 32.828a4 4 0 015.656 0z"/><path d="M527.828 2.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L2.828 527.828a4 4 0 010-5.656L522.172 2.828a4 4 0 015.656 0z"/></g></svg>
  <svg class="absolute z-0" width="1050" height="1050" xmlns="http://www.w3.org/2000/svg"><g stroke="#E1E1E1" fill="none" fill-rule="evenodd"><path d="M527.828 512.828l9.344 9.344a4 4 0 010 5.656l-9.344 9.344a4 4 0 01-5.656 0l-9.344-9.344a4 4 0 010-5.656l9.344-9.344a4 4 0 015.656 0z"/><path d="M527.828 482.828l39.344 39.344a4 4 0 010 5.656l-39.344 39.344a4 4 0 01-5.656 0l-39.344-39.344a4 4 0 010-5.656l39.344-39.344a4 4 0 015.656 0z"/><path d="M527.828 452.828l69.344 69.344a4 4 0 010 5.656l-69.344 69.344a4 4 0 01-5.656 0l-69.344-69.344a4 4 0 010-5.656l69.344-69.344a4 4 0 015.656 0z"/><path d="M527.828 422.828l99.344 99.344a4 4 0 010 5.656l-99.344 99.344a4 4 0 01-5.656 0l-99.344-99.344a4 4 0 010-5.656l99.344-99.344a4 4 0 015.656 0z"/><path d="M527.828 392.828l129.344 129.344a4 4 0 010 5.656L527.828 657.172a4 4 0 01-5.656 0L392.828 527.828a4 4 0 010-5.656l129.344-129.344a4 4 0 015.656 0z"/><path d="M527.828 362.828l159.344 159.344a4 4 0 010 5.656L527.828 687.172a4 4 0 01-5.656 0L362.828 527.828a4 4 0 010-5.656l159.344-159.344a4 4 0 015.656 0z"/><path d="M527.828 332.828l189.344 189.344a4 4 0 010 5.656L527.828 717.172a4 4 0 01-5.656 0L332.828 527.828a4 4 0 010-5.656l189.344-189.344a4 4 0 015.656 0z"/><path d="M527.828 302.828l219.344 219.344a4 4 0 010 5.656L527.828 747.172a4 4 0 01-5.656 0L302.828 527.828a4 4 0 010-5.656l219.344-219.344a4 4 0 015.656 0z"/><path d="M527.828 272.828l249.344 249.344a4 4 0 010 5.656L527.828 777.172a4 4 0 01-5.656 0L272.828 527.828a4 4 0 010-5.656l249.344-249.344a4 4 0 015.656 0z"/><path d="M527.828 242.828l279.344 279.344a4 4 0 010 5.656L527.828 807.172a4 4 0 01-5.656 0L242.828 527.828a4 4 0 010-5.656l279.344-279.344a4 4 0 015.656 0z"/><path d="M527.828 212.828l309.344 309.344a4 4 0 010 5.656L527.828 837.172a4 4 0 01-5.656 0L212.828 527.828a4 4 0 010-5.656l309.344-309.344a4 4 0 015.656 0z"/><path d="M527.828 182.828l339.344 339.344a4 4 0 010 5.656L527.828 867.172a4 4 0 01-5.656 0L182.828 527.828a4 4 0 010-5.656l339.344-339.344a4 4 0 015.656 0z"/><path d="M527.828 152.828l369.344 369.344a4 4 0 010 5.656L527.828 897.172a4 4 0 01-5.656 0L152.828 527.828a4 4 0 010-5.656l369.344-369.344a4 4 0 015.656 0z"/><path d="M527.828 122.828l399.344 399.344a4 4 0 010 5.656L527.828 927.172a4 4 0 01-5.656 0L122.828 527.828a4 4 0 010-5.656l399.344-399.344a4 4 0 015.656 0z"/><path d="M527.828 92.828l429.344 429.344a4 4 0 010 5.656L527.828 957.172a4 4 0 01-5.656 0L92.828 527.828a4 4 0 010-5.656L522.172 92.828a4 4 0 015.656 0z"/><path d="M527.828 62.828l459.344 459.344a4 4 0 010 5.656L527.828 987.172a4 4 0 01-5.656 0L62.828 527.828a4 4 0 010-5.656L522.172 62.828a4 4 0 015.656 0z"/><path d="M527.828 32.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L32.828 527.828a4 4 0 010-5.656L522.172 32.828a4 4 0 015.656 0z"/><path d="M527.828 2.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L2.828 527.828a4 4 0 010-5.656L522.172 2.828a4 4 0 015.656 0z"/></g></svg>

</section>
<section>
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