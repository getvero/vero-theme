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
      <svg class="align-middle" width="305" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs></defs><defs><linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="b"><stop stop-color="#EE5758" offset="0%"></stop><stop stop-color="#01B2D0" offset="100%"></stop></linearGradient><path d="M33.05.002A4.44 4.44 0 0032.91 0H4.387A4.375 4.375 0 000 4.407c0 .55.105 1.078.296 1.564.09.274.207.543.354.803l14.18 24.65c.203.353.447.667.721.94a4.397 4.397 0 003.22 1.386c1.067 0 2.05-.4 2.806-1.058a4.42 4.42 0 001.094-1.268L36.85 6.774c.144-.255.26-.518.348-.786a4.28 4.28 0 00.302-1.58C37.5 1.954 35.554 0 33.193 0c-.048 0-.095 0-.143.002zM20.152 23.18L31.365 3.632c.04-.055.067-.097.081-.122a1.943 1.943 0 011.747-1.061c1.015 0 1.87.859 1.87 1.958 0 .376-.124.745-.326 1.062a.11.11 0 00-.04.081L22.346 27.016l-2.194-3.836zM4.55 2.45h24.702L27.06 6.285H4.307c-1.055 0-1.91-.86-1.91-1.878 0-1.1.855-1.958 1.91-1.958h.243zm7.296 6.284h13.808L18.75 20.736 11.846 8.733zm5.137 21.548c.002-.029-.011-.051-.041-.081L4.632 8.733H9.02l11.254 19.548c.014.054.039.101.08.164.173.287.285.65.285 1.06 0 1.02-.854 1.878-1.869 1.878a1.983 1.983 0 01-1.787-1.102z" id="a"></path></defs><g fill="none" fill-rule="evenodd"><path d="M65.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0L5.657 65.657a8 8 0 010-11.314L54.343 5.657a8 8 0 0111.314 0z" fill="#01B2D0"></path><use fill="#FFF" xlink:href="#a" transform="translate(40 47)"></use><path d="M250.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0l-48.686-48.686a8 8 0 010-11.314l48.686-48.686a8 8 0 0111.314 0z" fill="#EE5758"></path><g fill="#FFF" fill-rule="nonzero"><path d="M234.061 63.242v-6.743c0-.343.279-.617.619-.617h7.612c.344 0 .62.278.62.617v6.743a.618.618 0 01-.62.617h-7.612a.618.618 0 01-.619-.617zM242.915 68.16v6.91a.617.617 0 01-.615.618l-7.613.068a.62.62 0 01-.626-.617v-6.983c0-.343.279-.617.619-.617h7.612a.627.627 0 01.623.621zM257.53 44.67a.618.618 0 00-.62-.617h-22.23a.618.618 0 00-.619.617v6.907c0 .343.279.617.619.617h22.227a.618.618 0 00.618-.617V44.67h.004zM257.53 56.499a.618.618 0 00-.62-.617h-9.453a.618.618 0 00-.62.617v6.743c0 .343.28.617.62.617h9.45a.618.618 0 00.618-.617v-6.743h.004z"></path></g><g transform="translate(121 55)"><circle stroke="#EE5758" stroke-width="2" cx="58" cy="5" r="5"></circle><circle stroke="#01B2D0" stroke-width="2" cx="5" cy="5" r="5"></circle><rect fill="url(#b)" x="13" y="3" width="38" height="4" rx="2"></rect></g></g></svg>

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
            <svg class="align-middle border-radius-1 right-margin-xxs" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FF4A00" d="M0 0h24v24H0z"/><path d="M13.75 12.003c0 .52-.096 1.018-.269 1.478-.46.173-.958.269-1.478.27h-.006c-.52-.001-1.018-.097-1.478-.27a4.187 4.187 0 01-.269-1.478v-.006c0-.52.096-1.018.269-1.478.46-.173.958-.269 1.478-.269h.006c.52 0 1.018.096 1.478.27.173.459.269.957.269 1.477v.006zm5.153-1.17h-4.086l2.889-2.889a7.055 7.055 0 00-1.65-1.65l-2.89 2.89V5.097A7.033 7.033 0 0012.004 5h-.008c-.396 0-.784.034-1.163.097v4.087l-2.889-2.89a6.99 6.99 0 00-.893.756l-.002.001a7.044 7.044 0 00-.755.893l2.89 2.89H5.097S5 11.6 5 11.997v.004c0 .397.034.786.097 1.165h4.087l-2.89 2.889a7.05 7.05 0 001.65 1.65l2.89-2.89v4.087c.377.063.765.097 1.16.097h.01c.397 0 .785-.034 1.162-.097v-4.087l2.89 2.89a7.068 7.068 0 001.65-1.65l-2.89-2.89h4.087c.063-.377.097-.765.097-1.16v-.011c0-.396-.034-.784-.097-1.162z" fill="#FFF"/></g></svg>

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
        <a class="btn btn--secondary btn--outline" href="#none">View documentation</a>
      </div>

      <div class="col-aside stack-md">
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
  <div class="inner small-inner stack-xxs">
    <h2 class="chunk semi-bold center-text">Make decisions with greater clarity</h2>
    <p class="large">By combining message interaction data with all of your business data</p>
  </div>
  <div class="inner medium-inner stack-lg">
    <span class="show annotation semi-bold uppercase font-gray-dark tracked center-text">Triggers</span>

    <input class="integration-webhooks-radio-1" id="tab-1" name="test" type="radio">
    <input class="integration-webhooks-radio-2" id="tab-2" name="test" type="radio">
    <input class="integration-webhooks-radio-3" id="tab-3" name="test" type="radio">
    <input class="integration-webhooks-radio-4" id="tab-4" name="test" type="radio">
    <input class="integration-webhooks-radio-5" id="tab-5" name="test" type="radio">
    <input class="integration-webhooks-radio-6" id="tab-6" name="test" type="radio">
    <input class="integration-webhooks-radio-7" id="tab-7" name="test" type="radio">

    <ul class="unstyled-list flex justify-center integration-triggers">
      <li class="integration-triggers-item">
        <label for="tab-1">

          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M22.088 4.49L4.789 12.683a.613.613 0 00-.205.976l3.969 4.337c-.001.013-.004.026-.004.04v3.403c0 .565.724.844 1.14.44l.085-.082a37.026 37.026 0 00.883-.897 16.504 16.504 0 00.28-.3l2.298 2.512c.316.345.903.267 1.106-.147l8.647-17.646c.266-.54-.337-1.096-.9-.829zM9.698 17.315a.42.42 0 01.024-.612l7.035-6.07c.183-.158.201-.14.039.041l-6.207 6.953a.401.401 0 01-.598 0l-.293-.312z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
          </div>

          <span>Sent</span>
        </label>
      </li>
      <li class="integration-triggers-item">
        <label for="tab-2">

          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M13.759 1.448c3.23 2.081 5.68 3.677 7.355 4.789l.372.248c1.375.917 2.14 1.455 2.298 1.614.517.523.837 1.24.837 2.027v10.161a2.886 2.886 0 01-2.885 2.885H5.78a2.893 2.893 0 01-2.884-2.885v-10.16c0-.803.328-1.53.857-2.053.348-.343 3.683-2.552 10.005-6.626zm8.985 8.69H4.774a.427.427 0 00-.43.427v2.042c0 .236.149.541.347.694l8.493 6.533a.986.986 0 001.15 0l8.492-6.533a.987.987 0 00.346-.694v-2.042a.424.424 0 00-.428-.427z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
          </div>

          <span>Opened</span>
        </label>
      </li>
      <li class="integration-triggers-item">
        <label for="tab-3">
          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M23.585 5.895c.81 0 1.468.655 1.468 1.467v13.276a1.47 1.47 0 01-1.468 1.467H4.415c-.81 0-1.468-.655-1.468-1.467V7.362c0-.81.662-1.467 1.468-1.467h19.17zm-2.953 8.842l-.143.007c-.752.07-1.331.7-1.331 1.465v1.477c0 .82.66 1.472 1.474 1.472l.142-.007c.752-.071 1.331-.7 1.331-1.465v-1.477c0-.82-.66-1.472-1.473-1.472zm-9.58-5.895c-2.184 0-3.638 2.125-1.604 5.871.687 1.264-.742 1.563-2.188 1.897-1.196.275-1.35.839-1.365 1.792a.738.738 0 00.742.741h8.83c.41 0 .75-.332.743-.741-.014-.954-.168-1.517-1.364-1.793-1.478-.34-2.855-.64-2.188-1.896 2.029-3.825.538-5.87-1.605-5.87zm9.581 0h-2.95c-.82 0-1.472.66-1.472 1.472v1.477c0 .82.659 1.472 1.472 1.472h2.95c.819 0 1.472-.659 1.472-1.472v-1.477c0-.82-.659-1.472-1.472-1.472z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
          </div>

          <span>Customer updated</span>
        </label>
      </li>
      <li class="integration-triggers-item">
        <label for="tab-4">
          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M22.101 6C23.702 6 25 7.296 25 8.897v10.206c0 1.6-1.294 2.897-2.899 2.897H5.9A2.897 2.897 0 013 19.103V8.897C3 7.297 4.294 6 5.899 6H22.1zM6.281 8.218a.753.753 0 00-1.061 0 .742.742 0 000 1.054l8.25 8.202a.753.753 0 001.06 0l8.25-8.202a.742.742 0 000-1.054.753.753 0 00-1.06 0L14 15.893z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
          </div>

          <span>Delivered</span>
        </label>
      </li>
      <li class="integration-triggers-item">
        <label for="tab-5">
          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="29" height="29" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M15.822 19.92c1.222 1.71 2.74 1.468 3.386-.522l3.97-12.239c.648-1.998-.3-2.77-2.131-1.719l-10.851 6.233c-1.826 1.049-1.77 2.646.109 3.56l1.704.83-4.177 5.156c-.63.778-.52 1.935.246 2.584l-.094-.08c.766.65 1.897.547 2.528-.232l4.177-5.156 1.133 1.585z" fill="#1B2E5B" fill-rule="evenodd"/></svg>
          </div>

          <span>Clicked</span>
        </label>
      </li>
      <li class="integration-triggers-item">
        <label for="tab-6">
          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h28v28H0z"/><path d="M14.5 4C20.299 4 25 8.701 25 14.5S20.299 25 14.5 25 4 20.299 4 14.5a1.5 1.5 0 013 0A7.5 7.5 0 1014.5 7v2.13c0 1.647-1.15 2.31-2.567 1.459L6.35 7.239c-1.42-.852-1.417-2.23 0-3.08l5.583-3.35C13.353-.043 14.5.612 14.5 2.27V4z" fill="#1B2E5B"/></g></svg>
          </div>

          <span>Bounced</span>
        </label>
      </li>
      <li class="integration-triggers-item">
        <label for="tab-7">
          <div class="flex items-center justify-center border-dark-blue bw2 border-radius-100">
            <svg class="align-middle" width="23" height="23" xmlns="http://www.w3.org/2000/svg"><defs/><path d="M6.573 18.048A8.253 8.253 0 0018.048 6.573L6.573 18.048zm-2.121-2.121L15.927 4.452A8.253 8.253 0 004.452 15.927zm14.753 3.278c-4.393 4.393-11.517 4.393-15.91 0-4.393-4.393-4.393-11.517 0-15.91 4.393-4.393 11.517-4.393 15.91 0 4.393 4.393 4.393 11.517 0 15.91z" fill="#1B2E5B" fill-rule="nonzero"/></svg>
          </div>

          <span>Unsubscribed</span>
        </label>
      </li>
    </ul>

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
    <pre class="language-json"><code> {
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
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs semi-bold">Access the insights important to your business</h2>
        <p class="medium">With Zapier and Vero together, when it comes to messaging if you can dream it, then you can build it.</p>

        <p class="medium">Zapier's no-code interface enables anyone on the team to send data to Vero, whether technical or not, from thousands of business applications. Empowering you to unlock more data and streamline your customer experience, the Vero Zap helps your team to move faster, test more ideas, personalize at a more granular level and deliver great products.</p>
      </div>
      <div class="col-aside relative center-text lg-right-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/zapier/automate.svg" alt="Automate at a whole new level">
      </div>
    </div>
  </div>
</section>
<section class="flush-padding padding-md">
  <div class="inner xlarge-inner center-text flex">
    <div class="integration-cover integration-cover--plann inline-flex relative">
      <div class="flex flex-column padding-sm absolute center-text font-white">
        <span class="annotation semi-bold uppercase">Case study</span>

        <div class="stack-0">
          <h3 class="biggie semi-bold">Plann</h3>
          <a class="medium underline-link negative" href="/case-studies/plann">Find out more</a>
        </div>
      </div>

      <div>
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/case-studies/plann.jpg" srcset="/wp-content/themes/vero/assets/dist/images/integrations/case-studies/plann@2x.jpg 2x" alt="Plann">
      </div>
    </div>
  </div>
</section>
<section class="bg-dark-blue-lighter" banner-name="Scale personalized messages" element-position="bottom">
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