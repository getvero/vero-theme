<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration integration-zapier';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="integration-hero" banner-name="Connect Vero and Zapier" element-position="top">
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
  <div class="inner large-inner bottom-padding-lg relative">
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
<section class="double-padding integration-zapier-connect">
  <div class="inner medium-inner border-bottom">
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
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g stroke="#01B2D0" stroke-width="2"><rect x="7" y="27" width="14" height="14" rx="4"/><rect x="27" y="27" width="14" height="14" rx="4"/><rect x="7" y="7" width="14" height="14" rx="4"/><rect opacity=".2" x="27" y="7" width="14" height="14" rx="4"/></g><path d="M577.5-779.08C388.574-888.156 146.996-823.426 37.92-634.5-71.156-445.574-6.426-203.996 182.5-94.92 371.426 14.156 613.004-50.574 722.08-239.5c109.076-188.926 44.346-430.504-144.58-539.58z" stroke="#E1E1E1" stroke-dasharray="2378.4,238" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></g></svg>
          </div>

          <div class="stack-xxxs">
            <h3 class="atomic">Custom insights</h3>
            <p>Using a BI tool, like Mode or Looker, you can then query all your customer data and build custom reports that can give you the insights important to your specific business.</p>
          </div>
        </div>

        <div class="flex">
          <div class="right-margin-sm">
            <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><g stroke="#F15242" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M27.577 13.113l14.266 10.07a1 1 0 010 1.634l-14.266 10.07A1 1 0 0126 34.07V13.93a1 1 0 011.577-.817z" fill="#F15242" opacity=".4"/><path d="M7.577 13.113l14.266 10.07a1 1 0 010 1.634L7.577 34.887A1 1 0 016 34.07V13.93a1 1 0 011.577-.817z" fill="#FFF"/></g></svg>
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
<section class="double-padding border-bottom integration-zapier-automate">
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs semi-bold">Automate at a whole new level</h2>
        <p class="medium">With Zapier and Vero together, when it comes to messaging if you can dream it, then you can build it.</p>

        <p class="medium">Zapier's no-code interface enables anyone on the team to send data to Vero, whether technical or not, from thousands of business applications. Empowering you to unlock more data and streamline your customer experience, the Vero Zap helps your team to move faster, test more ideas, personalize at a more granular level and deliver great products.</p>
      </div>
      <div class="col-aside relative center-text lg-right-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/zapier/automate.svg" alt="Automate at a whole new level">
      </div>
    </div>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner stack-lg">
    <h2 class="chunk semi-bold center-text">Create your own automation journey</h2>

    <div class="integration-triggers-actions flex flex-wrap justify-between">
      <div class="stack-md center-text md-left-text triggers">
        <div class="stack-xxxs">
          <span class="show annotation semi-bold uppercase font-gray-dark tracked">Triggers</span>
          <h3 class="micro semi-bold">When this happens…</h3>
        </div>

        <ul class="unstyled-list stack-sm">
          <li class="flex flex-wrap items-center trigger-item">
            <div class="d-inline-block bg-white border border-radius-2">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>

            <span class="show atomic regular">Update user</span>
          </li>
          <li class="flex flex-wrap items-center trigger-item">
            <div class="d-inline-block bg-white border border-radius-2">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>

            <span class="show atomic regular">New user</span>
          </li>
          <li class="flex flex-wrap items-center trigger-item">
            <div class="d-inline-block bg-white border border-radius-2">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>

            <span class="show atomic regular">Unsubscribed user</span>
          </li>
        </ul>
      </div>

      <div class="stack-md center-text md-right-text actions">
        <div class="stack-xxxs">
          <span class="show annotation semi-bold uppercase font-gray-dark tracked">Actions</span>
          <h3 class="micro semi-bold">Do this…</h3>
        </div>

        <ul class="unstyled-list stack-sm">
          <li class="flex flex-wrap items-center md-justify-end action-item">
            <span class="show atomic regular order-1 md-order-0">Create or update a user</span>

            <div class="d-inline-block bg-white border border-radius-2 order-0 md-order-1">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>
          </li>
          <li class="flex flex-wrap items-center md-justify-end action-item">
            <span class="show atomic regular order-1 md-order-0">Track an event</span>

            <div class="d-inline-block bg-white border border-radius-2 order-0 md-order-1">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>
          </li>
          <li class="flex flex-wrap items-center md-justify-end action-item">
            <span class="show atomic regular order-1 md-order-0">Unsubscribe a user</span>

            <div class="d-inline-block bg-white border border-radius-2 order-0 md-order-1">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>
          </li>
          <li class="flex flex-wrap items-center md-justify-end action-item">
            <span class="show atomic regular order-1 md-order-0">Update user tags</span>

            <div class="d-inline-block bg-white border border-radius-2 order-0 md-order-1">
              <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h64v64H0z"/><path d="M44.203 17.002a3.637 3.637 0 00-.12-.002H19.743C17.661 17 16 18.738 16 20.918c0 .489.09.958.253 1.39.076.243.177.482.302.714l12.1 21.91c.173.314.381.593.615.836A3.684 3.684 0 0032.017 47c.911 0 1.75-.356 2.396-.94.365-.3.684-.679.933-1.128l12.1-21.91c.122-.227.22-.461.297-.7.166-.436.257-.91.257-1.404C48 18.738 46.34 17 44.325 17c-.041 0-.082 0-.122.002zM33.196 37.605l9.569-17.377c.034-.049.057-.086.07-.108.282-.569.832-.944 1.49-.944.866 0 1.595.764 1.595 1.742 0 .334-.106.662-.278.943a.1.1 0 00-.034.072l-10.54 19.081-1.872-3.41zM19.883 19.176h21.079l-1.872 3.41H19.675c-.9 0-1.63-.763-1.63-1.668 0-.978.73-1.742 1.63-1.742h.208zm6.225 5.587h11.784L32 35.432l-5.892-10.67zm4.384 19.154c.002-.026-.01-.046-.035-.073L19.952 24.763h3.745L33.3 42.139a.5.5 0 00.07.145c.147.256.242.578.242.943 0 .906-.728 1.669-1.595 1.669a1.687 1.687 0 01-1.525-.98z" fill="#0AA6D2"/></g></svg>
            </div>
          </li>
        </ul>
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