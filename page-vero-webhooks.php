<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration integration-webhooks';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="integration-hero" banner-name="Connect Vero with Webhooks" element-position="top">
  <div class="inner small-inner center-text stack-lg">
    <span class="show annotation tracked uppercase semi-bold font-gray-dark">Integrations</span>

    <div class="stack-md">
      <svg class="align-middle" width="305" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs/><defs><linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="b"><stop stop-color="#C73A63" offset="0%"/><stop stop-color="#01B2D0" offset="100%"/></linearGradient><path d="M33.05.002A4.44 4.44 0 0032.91 0H4.387A4.375 4.375 0 000 4.407c0 .55.105 1.078.296 1.564.09.274.207.543.354.803l14.18 24.65c.203.353.447.667.721.94a4.397 4.397 0 003.22 1.386c1.067 0 2.05-.4 2.806-1.058a4.42 4.42 0 001.094-1.268L36.85 6.774c.144-.255.26-.518.348-.786a4.28 4.28 0 00.302-1.58C37.5 1.954 35.554 0 33.193 0c-.048 0-.095 0-.143.002zM20.152 23.18L31.365 3.632c.04-.055.067-.097.081-.122a1.943 1.943 0 011.747-1.061c1.015 0 1.87.859 1.87 1.958 0 .376-.124.745-.326 1.062a.11.11 0 00-.04.081L22.346 27.016l-2.194-3.836zM4.55 2.45h24.702L27.06 6.285H4.307c-1.055 0-1.91-.86-1.91-1.878 0-1.1.855-1.958 1.91-1.958h.243zm7.296 6.284h13.808L18.75 20.736 11.846 8.733zm5.137 21.548c.002-.029-.011-.051-.041-.081L4.632 8.733H9.02l11.254 19.548c.014.054.039.101.08.164.173.287.285.65.285 1.06 0 1.02-.854 1.878-1.869 1.878a1.983 1.983 0 01-1.787-1.102z" id="a"/></defs><g fill="none" fill-rule="evenodd"><path d="M65.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0L5.657 65.657a8 8 0 010-11.314L54.343 5.657a8 8 0 0111.314 0z" fill="#01B2D0"/><use fill="#FFF" xlink:href="#a" transform="translate(40 47)"/><path d="M250.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0l-48.686-48.686a8 8 0 010-11.314l48.686-48.686a8 8 0 0111.314 0z" fill="#C73A63"/><g fill="#FFF" fill-rule="nonzero"><path d="M243.491 57.547c-1.64 2.759-3.213 5.43-4.819 8.082-.412.68-.616 1.235-.286 2.1.909 2.391-.374 4.717-2.784 5.349-2.274.596-4.489-.898-4.94-3.332-.4-2.155 1.272-4.267 3.647-4.603.2-.029.403-.032.737-.057l3.613-6.06c-2.272-2.259-3.625-4.9-3.325-8.173.211-2.314 1.121-4.313 2.784-5.952 3.185-3.139 8.044-3.647 11.794-1.238 3.602 2.314 5.252 6.82 3.845 10.678l-3.301-.895c.442-2.145.115-4.071-1.332-5.72-.955-1.09-2.182-1.661-3.576-1.872-2.795-.422-5.54 1.374-6.354 4.118-.925 3.114.474 5.658 4.297 7.575z"/><path d="M248.179 54.284l3.493 6.162c5.882-1.82 10.316 1.436 11.907 4.922 1.921 4.21.608 9.197-3.166 11.794-3.873 2.667-8.772 2.211-12.204-1.214l2.693-2.253c3.39 2.195 6.354 2.092 8.555-.508 1.877-2.218 1.836-5.524-.095-7.696-2.229-2.505-5.214-2.581-8.823-.176-1.497-2.656-3.02-5.29-4.469-7.965-.489-.902-1.028-1.425-2.13-1.616-1.84-.319-3.027-1.898-3.099-3.669-.07-1.75.961-3.332 2.573-3.949 1.597-.61 3.47-.117 4.545 1.24.877 1.11 1.156 2.357.694 3.725-.128.382-.294.75-.474 1.203z"/><path d="M250.942 70.959h-7.08c-.679 2.791-2.144 5.045-4.67 6.478-1.963 1.113-4.08 1.491-6.332 1.128-4.147-.67-7.537-4.402-7.836-8.606-.338-4.762 2.935-8.994 7.298-9.945l.907 3.29c-4.003 2.041-5.388 4.614-4.268 7.832.986 2.831 3.787 4.383 6.829 3.783 3.106-.613 4.672-3.194 4.48-7.337 2.946 0 5.893-.03 8.838.015 1.15.018 2.037-.101 2.904-1.115 1.426-1.668 4.051-1.518 5.587.058 1.57 1.61 1.495 4.2-.167 5.743-1.602 1.488-4.134 1.408-5.634-.195-.308-.33-.55-.723-.856-1.129z"/></g><g transform="translate(121 55)"><circle stroke="#C73A63" stroke-width="2" cx="58" cy="5" r="5"/><circle stroke="#01B2D0" stroke-width="2" cx="5" cy="5" r="5"/><rect fill="url(#b)" x="13" y="3" width="38" height="4" rx="2"/></g></g></svg>

      <div class="stack-xs">
        <h1 class="biggie semi-bold">Connect Vero with Webhooks</h1>

        <p class="large">Use webhooks to collect data from Vero and analyse message interaction data alongside your complete business data.</p>
      </div>
    </div>

    <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup">Start a free trial</a>
  </div>
  <div class="inner large-inner">
    <div class="bg-primary-lighter border-radius-2 border-primary integration-about">
      <div class="flex">
        <div class="stack-xs">
          <div class="flex items-center">
            <svg class="align-middle border-radius-1 right-margin-xxs" width="26" height="26" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><g stroke="#E1E1E1"><path d="M-402.172-908.172L57.172-448.828a4 4 0 010 5.656L-402.172 16.172a4 4 0 01-5.656 0l-459.344-459.344a4 4 0 010-5.656l459.344-459.344a4 4 0 015.656 0z"/><path d="M-402.172-938.172L87.172-448.828a4 4 0 010 5.656L-402.172 46.172a4 4 0 01-5.656 0l-489.344-489.344a4 4 0 010-5.656l489.344-489.344a4 4 0 015.656 0z"/><path d="M-402.172-968.172l519.344 519.344a4 4 0 010 5.656L-402.172 76.172a4 4 0 01-5.656 0l-519.344-519.344a4 4 0 010-5.656l519.344-519.344a4 4 0 015.656 0z"/></g><g transform="translate(-48 -48)"><rect stroke="#01B2D0" fill="#E5F7FA" x=".5" y=".5" width="1015" height="247" rx="8"/><path fill="#C73A63" d="M48 48h26v26H48z"/><g fill="#FFF" fill-rule="nonzero"><path d="M60.903 59.804c-.612 1.03-1.2 2.028-1.799 3.018-.154.254-.23.46-.107.784.34.892-.14 1.76-1.04 1.996-.848.223-1.675-.335-1.843-1.244-.15-.804.475-1.592 1.362-1.718.074-.01.15-.012.275-.021l1.348-2.262c-.848-.844-1.353-1.83-1.241-3.052a3.47 3.47 0 011.04-2.222 3.53 3.53 0 014.403-.462c1.344.864 1.96 2.546 1.435 3.986l-1.232-.334c.164-.8.042-1.52-.498-2.136-.356-.406-.814-.62-1.335-.698-1.043-.158-2.068.513-2.372 1.537-.345 1.163.177 2.112 1.604 2.828z"/><path d="M62.653 58.586l1.305 2.3c2.195-.679 3.85.537 4.445 1.838.717 1.572.227 3.434-1.182 4.403-1.446.996-3.275.826-4.556-.453l1.005-.841c1.266.82 2.372.78 3.194-.19.7-.828.685-2.062-.036-2.873-.832-.935-1.946-.964-3.293-.066-.56-.991-1.128-1.975-1.669-2.973-.182-.337-.384-.532-.795-.604-.687-.119-1.13-.708-1.157-1.37a1.505 1.505 0 01.96-1.474 1.498 1.498 0 011.697.463c.328.414.432.88.26 1.391-.048.142-.11.28-.178.449z"/><path d="M63.685 64.811h-2.643c-.254 1.042-.8 1.884-1.744 2.419a3.525 3.525 0 01-2.364.42c-1.548-.249-2.814-1.643-2.925-3.212-.126-1.778 1.096-3.358 2.725-3.713l.338 1.228c-1.494.763-2.011 1.723-1.593 2.924.368 1.057 1.414 1.637 2.55 1.413 1.159-.229 1.744-1.193 1.672-2.74 1.1 0 2.2-.01 3.3.006.428.007.76-.038 1.083-.416.533-.623 1.513-.567 2.086.022a1.497 1.497 0 01-.062 2.144 1.495 1.495 0 01-2.103-.073c-.115-.124-.206-.27-.32-.422z"/></g></g></g></svg>

            <h2 class="semi-bold atomic no-margin">About Webhooks</h2>
          </div>

          <p>Webhooks are one of a few ways web applications can communicate with each other. They allow you to send real-time data from one application to another whenever a given event occurs.</p>
        </div>

        <div class="stack-xs">
          <div class="flex items-center">
            <svg class="align-middle border-radius-1 right-margin-xxs" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(-29.066 -456.066)"><circle stroke="#F1F1F1" stroke-width="2" cx="395.066" cy="395.066" r="360"/><path d="M592.566 52.986C403.64-56.09 162.062 8.64 52.986 197.566-56.09 386.492 8.64 628.07 197.566 737.146c188.926 109.076 430.504 44.346 539.58-144.58 109.076-188.926 44.346-430.504-144.58-539.58z" stroke="#E1E1E1" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2378.4,238"/></g><path fill="#01B2D0" d="M0 0h24v24H0z"/><path d="M18.101 5.001L18.041 5H5.872C4.83 5 4 5.869 4 6.959c0 .244.045.479.126.695.039.122.089.241.151.357l6.05 10.955c.087.157.191.297.308.418.34.378.828.616 1.374.616.455 0 .875-.178 1.197-.47.183-.15.343-.34.467-.564l6.05-10.955c.061-.114.11-.23.148-.35.083-.218.129-.455.129-.702C20 5.869 19.17 5 18.163 5l-.062.001zm-5.503 10.301l4.784-8.688a.664.664 0 00.035-.054.826.826 0 01.746-.472c.432 0 .797.382.797.87a.912.912 0 01-.139.472.05.05 0 00-.017.037l-5.27 9.54-.936-1.705zM5.942 6.088H16.48l-.936 1.705H5.838a.83.83 0 01-.815-.834c0-.49.364-.87.815-.87h.104zm3.112 2.793h5.892L12 14.216 9.054 8.88zm2.192 9.577c.001-.013-.005-.023-.017-.036l-5.253-9.54h1.872l4.802 8.688a.25.25 0 00.035.072.943.943 0 01.121.472c0 .452-.364.834-.797.834a.844.844 0 01-.763-.49z" fill="#FFF"/></g></svg>

            <h2 class="semi-bold atomic no-margin">About Vero</h2>
          </div>

          <p>Vero helps you send behavioral and transactional emails. Our emails are data-driven, so you're never guessing when to send an email or who to send it to. Trigger a coupon when a customer views a product twice, or help a new user get started when they download your software.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner medium-inner flush-top">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main stack-md">
        <div class="stack-xs">
          <h2 class="tubs">Connecting Vero via Webhooks helps your team do more</h2>
          <p class="medium">Vero can send all message events, including sent, delivered, opened, clicked, bounced, unsubscribed to a webhook you provide. This enables you to capture and save the data in your own database or data warehouse.</p>
        </div>
        <a class="btn btn--secondary btn--outline" href="https://help.getvero.com/articles/setting-up-veros-webhooks/">View documentation</a>
      </div>

      <div class="col-aside stack-md lg-left-padding-lg">
        <div class="flex">
          <div class="right-margin-sm">
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><rect stroke="#6F0DFB" stroke-width="2" x="7" y="9" width="34" height="30" rx="4"/><path fill="#6F0DFB" d="M7 14h34v2H7z"/><path stroke-opacity=".4" stroke="#6F0DFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15.706 30l5.633-4.212L27.08 30l7.038-8.423"/></g></svg>
          </div>

          <div class="stack-xxxs">
            <h3 class="atomic">Custom insights</h3>
            <p>Using a BI tool, like Mode or Looker, you can then query all your customer data and build custom reports that can give you the insights important to your specific business.</p>
          </div>
        </div>

        <div class="flex">
          <div class="right-margin-sm">
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><defs/><g stroke="#FFC111" stroke-width="2" fill="none" fill-rule="evenodd"><rect x="5" y="5" width="16" height="16" rx="2"/><rect x="27" y="27" width="16" height="16" rx="2"/><circle stroke-opacity=".4" cx="35" cy="13" r="8"/><circle cx="13" cy="35" r="8"/></g></svg>
          </div>

          <div class="stack-xxxs">
            <h3 class="atomic">Trigger this and that</h3>
            <p>You can also use Webhooks to power integrations in various tools. Using Zapier and other middleware, you can catch Vero's webhooks and use them to power new functionality.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner small-inner stack-xxs flush-bottom bottom-margin-lg center-text">
    <h2 class="chunk semi-bold">Make decisions with greater clarity</h2>
    <p class="large">By combining message interaction data with all of your business data</p>
  </div>
  <div class="inner medium-inner stack-md border-bottom">
    <input class="hide integration-webhooks-radio-1" id="tab-1" name="integration-webhooks-tabs" type="radio" checked>
    <input class="hide integration-webhooks-radio-2" id="tab-2" name="integration-webhooks-tabs" type="radio">
    <input class="hide integration-webhooks-radio-3" id="tab-3" name="integration-webhooks-tabs" type="radio">
    <input class="hide integration-webhooks-radio-4" id="tab-4" name="integration-webhooks-tabs" type="radio">
    <input class="hide integration-webhooks-radio-5" id="tab-5" name="integration-webhooks-tabs" type="radio">
    <input class="hide integration-webhooks-radio-6" id="tab-6" name="integration-webhooks-tabs" type="radio">
    <input class="hide integration-webhooks-radio-7" id="tab-7" name="integration-webhooks-tabs" type="radio">

    <div class="stack-sm">
      <span class="show annotation semi-bold uppercase font-gray-dark tracked center-text">Triggers</span>

      <ul class="unstyled-list flex flex-wrap justify-center integration-triggers">
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-1">
            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M22.088 4.49L4.789 12.683a.613.613 0 00-.205.976l3.969 4.337c-.001.013-.004.026-.004.04v3.403c0 .565.724.844 1.14.44l.085-.082a37.026 37.026 0 00.883-.897 16.504 16.504 0 00.28-.3l2.298 2.512c.316.345.903.267 1.106-.147l8.647-17.646c.266-.54-.337-1.096-.9-.829zM9.698 17.315a.42.42 0 01.024-.612l7.035-6.07c.183-.158.201-.14.039.041l-6.207 6.953a.401.401 0 01-.598 0l-.293-.312z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
            </div>

            <span class="d-inline-block annotation">Sent</span>
          </label>
        </li>
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-2">

            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M13.759 1.448c3.23 2.081 5.68 3.677 7.355 4.789l.372.248c1.375.917 2.14 1.455 2.298 1.614.517.523.837 1.24.837 2.027v10.161a2.886 2.886 0 01-2.885 2.885H5.78a2.893 2.893 0 01-2.884-2.885v-10.16c0-.803.328-1.53.857-2.053.348-.343 3.683-2.552 10.005-6.626zm8.985 8.69H4.774a.427.427 0 00-.43.427v2.042c0 .236.149.541.347.694l8.493 6.533a.986.986 0 001.15 0l8.492-6.533a.987.987 0 00.346-.694v-2.042a.424.424 0 00-.428-.427z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
            </div>

            <span class="d-inline-block annotation">Opened</span>
          </label>
        </li>
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-3">
            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M23.585 5.895c.81 0 1.468.655 1.468 1.467v13.276a1.47 1.47 0 01-1.468 1.467H4.415c-.81 0-1.468-.655-1.468-1.467V7.362c0-.81.662-1.467 1.468-1.467h19.17zm-2.953 8.842l-.143.007c-.752.07-1.331.7-1.331 1.465v1.477c0 .82.66 1.472 1.474 1.472l.142-.007c.752-.071 1.331-.7 1.331-1.465v-1.477c0-.82-.66-1.472-1.473-1.472zm-9.58-5.895c-2.184 0-3.638 2.125-1.604 5.871.687 1.264-.742 1.563-2.188 1.897-1.196.275-1.35.839-1.365 1.792a.738.738 0 00.742.741h8.83c.41 0 .75-.332.743-.741-.014-.954-.168-1.517-1.364-1.793-1.478-.34-2.855-.64-2.188-1.896 2.029-3.825.538-5.87-1.605-5.87zm9.581 0h-2.95c-.82 0-1.472.66-1.472 1.472v1.477c0 .82.659 1.472 1.472 1.472h2.95c.819 0 1.472-.659 1.472-1.472v-1.477c0-.82-.659-1.472-1.472-1.472z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
            </div>

            <span class="d-inline-block annotation">Customer updated</span>
          </label>
        </li>
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-4">
            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M22.101 6C23.702 6 25 7.296 25 8.897v10.206c0 1.6-1.294 2.897-2.899 2.897H5.9A2.897 2.897 0 013 19.103V8.897C3 7.297 4.294 6 5.899 6H22.1zM6.281 8.218a.753.753 0 00-1.061 0 .742.742 0 000 1.054l8.25 8.202a.753.753 0 001.06 0l8.25-8.202a.742.742 0 000-1.054.753.753 0 00-1.06 0L14 15.893z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
            </div>

            <span class="d-inline-block annotation">Delivered</span>
          </label>
        </li>
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-5">
            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg class="align-middle" width="29" height="29" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M15.822 19.92c1.222 1.71 2.74 1.468 3.386-.522l3.97-12.239c.648-1.998-.3-2.77-2.131-1.719l-10.851 6.233c-1.826 1.049-1.77 2.646.109 3.56l1.704.83-4.177 5.156c-.63.778-.52 1.935.246 2.584l-.094-.08c.766.65 1.897.547 2.528-.232l4.177-5.156 1.133 1.585z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
            </div>

            <span class="d-inline-block annotation">Clicked</span>
          </label>
        </li>
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-6">
            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><path d="M14.5 4C20.299 4 25 8.701 25 14.5S20.299 25 14.5 25 4 20.299 4 14.5a1.5 1.5 0 013 0A7.5 7.5 0 1014.5 7v2.13c0 1.647-1.15 2.31-2.567 1.459L6.35 7.239c-1.42-.852-1.417-2.23 0-3.08l5.583-3.35C13.353-.043 14.5.612 14.5 2.27V4z" fill="#1B2E5B"/></g></svg>
            </div>

            <span class="d-inline-block annotation">Bounced</span>
          </label>
        </li>
        <li class="no-margin integration-triggers-item">
          <label class="pointer stack-xxs" for="tab-7">
            <div class="flex items-center justify-center bg-white border-dark-blue bw2 border-radius-100">
              <svg class="align-middle" width="23" height="23" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M6.573 18.048A8.253 8.253 0 0018.048 6.573L6.573 18.048zm-2.121-2.121L15.927 4.452A8.253 8.253 0 004.452 15.927zm14.753 3.278c-4.393 4.393-11.517 4.393-15.91 0-4.393-4.393-4.393-11.517 0-15.91 4.393-4.393 11.517-4.393 15.91 0 4.393 4.393 4.393 11.517 0 15.91z" fill="#1B2E5B" fill-rule="nonzero"/></svg>
            </div>

            <span class="d-inline-block annotation">Unsubscribed</span>
          </label>
        </li>
      </ul>
    </div>

    <div class="integration-webhooks-tab" data-category="sent">
      <pre class="language-json"><code>{
  "sent_at":1435016238,
  "type":"sent",
  "user": {
    "id":123,
    "email":"steve@getvero.com"
  },
  "campaign": {
    "id": 987,
    "type":" transactional",
    "name":" Order confirmation",
    "subject":" Your order is being processed!",
    "trigger-event":" purchased item",
    "permalink":" http://app.getvero.com/view/1/341d64944577ac1f70f560e37db54a25",
    "variation":" Variation A"
  },
  "message_id": "20190730123456.1.1B72E094173067F0F@veromail.com"
}</code></pre>
    </div>

    <div class="integration-webhooks-tab" data-category="opened">
      <pre class="language-json"><code>{
  "opened_at":1435016238,
  "user_agent":"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)",
  "type":"opened",
  "user": {
    "id": 123,
    "email": "steve@getvero.com"
  },
  "campaign": {
    "id": 987,
    "type": "transactional",
    "name": "Order confirmation",
    "subject": "Your order is being processed!",
    "trigger-event": "purchased item",
    "permalink": "http://app.getvero.com/view/1/341d64944577ac1f70f560e37db54a25",
    "variation": "Variation A"
  },
  "message_id": "20190730123456.1.1B72E094173067F0F@veromail.com"
}</code></pre>
    </div>

    <div class="integration-webhooks-tab" data-category="updated">
      <pre class="language-json"><code>// User created
{
  "type":"user_created",
  "user": {
    "firstname": "Steve",
    "company": "Vero",
    "role": "Bot",
    "id": 123,
    "email": "steve@getvero.com"
  }
}

  // User updated
  {
  "type":"user_updated",
  "user": {
    "id": 123,
    "email": "steve@getvero.com"
  },
  "changes": {
    "_tags": {
      "add": ["active-customer"],
      "remove": ["unactive-180-days"]
    }
  }
}</code></pre>
    </div>

    <div class="integration-webhooks-tab" data-category="delivered">
      <pre class="language-json"><code>{
  "delivered_at":1435016238,
  "type":"delivered",
  "user": {
    "id":123,
    "email":"steve@getvero.com"
  },
  "campaign": {
    "id":987,
    "type":"transactional",
    "name":"Order confirmation",
    "subject":"Your order is being processed!",
    "trigger-event":"purchased item",
    "permalink":"http://app.getvero.com/view/1/341d64944577ac1f70f560e37db54a25",
    "variation":"Variation A"
  },
  "message_id": "20190730123456.1.1B72E094173067F0F@veromail.com"
}</code></pre>
    </div>

    <div class="integration-webhooks-tab" data-category="clicked">
      <pre class="language-json"><code>{
  "clicked_at":1435016238,
  "user_agent":"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)",
  "type":"clicked",
  "user": {
    "id": 123,
    "email": "steve@getvero.com"
  },
  "campaign": {
    "id": 987,
    "type": "transactional",
    "name": "Order confirmation",
    "subject": "Your order is being processed!",
    "trigger-event": "purchased item",
    "permalink": "http://app.getvero.com/view/1/341d64944577ac1f70f560e37db54a25",
    "variation": "Variation A"
  },
  "message_id": "20190730123456.1.1B72E094173067F0F@veromail.com"
}</code></pre>
    </div>

    <div class="integration-webhooks-tab" data-category="bounced">
      <pre class="language-json"><code>{
  "bounced_at":1435016238,
  "bounce_type":"hard",
  "type":"bounced",
  "user": {
    "id": 123,
    "email":" steve@getvero.com"
  },
  "campaign": {
    "id": 987,
    "type": "transactional",
    "name": "Order confirmation",
    "subject": "Your order is being processed!",
    "trigger-event": "purchased item",
    "permalink": "http://app.getvero.com/view/1/341d64944577ac1f70f560e37db54a25",
    "variation": "Variation A"
  },
  "message_id": "20190730123456.1.1B72E094173067F0F@veromail.com"
}</code></pre>
    </div>

    <div class="integration-webhooks-tab" data-category="unsubscribed">
      <pre class="language-json"><code>{
  "unsubscribed_at":1435016238,
  "type":"unsubscribed",
  "user": {
    "id": 123,
    "email": "steve@getvero.com"
  },
  "campaign": {
    "campaign_title": "Order confirmation",
    "series_title": "Order Tracking",
    "message_id": "20190730123456.1.1B72E094173067F0F@veromail.com",
    "email_subject": "Your order is being processed!",
    "variation_name": "Control",
    "template": "Order Template"
  },
}</code></pre>
    </div>
  </div>
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--md items-center">
      <div class="col-main">
        <h2 class="tubs semi-bold">Access the insights important to your business</h2>
        <p class="medium">With Zapier and Vero together, when it comes to messaging if you can dream it, then you can build it.</p>

        <p class="medium">Zapier's no-code interface enables anyone on the team to send data to Vero, whether technical or not, from thousands of business applications. Empowering you to unlock more data and streamline your customer experience, the Vero Zap helps your team to move faster, test more ideas, personalize at a more granular level and deliver great products.</p>
      </div>
      <div class="col-aside relative center-text lg-right-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/webhooks/insights.svg" alt="Access the insights important to your business">
      </div>
    </div>
  </div>
</section>
<!-- <section class="flush-padding padding-md">
  <div class="inner medium-inner center-text">
    <div class="integration-cover integration-cover--plann relative">
      <div class="flex flex-column padding-sm absolute center-text font-white">
        <span class="annotation semi-bold uppercase tracked-tight">Case study</span>

        <div class="stack-0">
          <h3 class="biggie semi-bold">Plann</h3>
          <a class="medium negative" href="/case-studies/plann">Find out more</a>
        </div>
      </div>

      <div>
        <img class="align-middle full-width" src="/wp-content/themes/vero/assets/dist/images/integrations/case-studies/plann.jpg" srcset="/wp-content/themes/vero/assets/dist/images/integrations/case-studies/plann@2x.jpg 2x" alt="Plann">
      </div>
    </div>
  </div>
</section> -->
<section banner-name="Scale personalized messages" element-position="bottom">
  <div class="inner small-inner center-text">
    <h4 class="chunk bottom-margin-md">Vero helps marketing and engineering teams scale personalized customer messaging</h4>

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