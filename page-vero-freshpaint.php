<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'integration integration-freshpaint';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section class="relative" banner-name="Connect Vero and Freshpaint" element-position="top">
  <div class="inner small-inner center-text stack-lg">
    <span class="show annotation semi-bold font-gray-dark uppercase tracked">Integrations</span>

    <svg class="align-middle" width="305" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs/><defs><linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="b"><stop stop-color="#EE5758" offset="0%"/><stop stop-color="#01B2D0" offset="100%"/></linearGradient><path d="M33.05.002A4.44 4.44 0 0032.91 0H4.387A4.375 4.375 0 000 4.407c0 .55.105 1.078.296 1.564.09.274.207.543.354.803l14.18 24.65c.203.353.447.667.721.94a4.397 4.397 0 003.22 1.386c1.067 0 2.05-.4 2.806-1.058a4.42 4.42 0 001.094-1.268L36.85 6.774c.144-.255.26-.518.348-.786a4.28 4.28 0 00.302-1.58C37.5 1.954 35.554 0 33.193 0c-.048 0-.095 0-.143.002zM20.152 23.18L31.365 3.632c.04-.055.067-.097.081-.122a1.943 1.943 0 011.747-1.061c1.015 0 1.87.859 1.87 1.958 0 .376-.124.745-.326 1.062a.11.11 0 00-.04.081L22.346 27.016l-2.194-3.836zM4.55 2.45h24.702L27.06 6.285H4.307c-1.055 0-1.91-.86-1.91-1.878 0-1.1.855-1.958 1.91-1.958h.243zm7.296 6.284h13.808L18.75 20.736 11.846 8.733zm5.137 21.548c.002-.029-.011-.051-.041-.081L4.632 8.733H9.02l11.254 19.548c.014.054.039.101.08.164.173.287.285.65.285 1.06 0 1.02-.854 1.878-1.869 1.878a1.983 1.983 0 01-1.787-1.102z" id="a"/></defs><g fill="none" fill-rule="evenodd"><path d="M65.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0L5.657 65.657a8 8 0 010-11.314L54.343 5.657a8 8 0 0111.314 0z" fill="#01B2D0"/><use fill="#FFF" xlink:href="#a" transform="translate(40 47)"/><path d="M250.657 5.657l48.686 48.686a8 8 0 010 11.314l-48.686 48.686a8 8 0 01-11.314 0l-48.686-48.686a8 8 0 010-11.314l48.686-48.686a8 8 0 0111.314 0z" fill="#EE5758"/><g fill="#FFF" fill-rule="nonzero"><path d="M234.061 63.242v-6.743c0-.343.279-.617.619-.617h7.612c.344 0 .62.278.62.617v6.743a.618.618 0 01-.62.617h-7.612a.618.618 0 01-.619-.617zM242.915 68.16v6.91a.617.617 0 01-.615.618l-7.613.068a.62.62 0 01-.626-.617v-6.983c0-.343.279-.617.619-.617h7.612a.627.627 0 01.623.621zM257.53 44.67a.618.618 0 00-.62-.617h-22.23a.618.618 0 00-.619.617v6.907c0 .343.279.617.619.617h22.227a.618.618 0 00.618-.617V44.67h.004zM257.53 56.499a.618.618 0 00-.62-.617h-9.453a.618.618 0 00-.62.617v6.743c0 .343.28.617.62.617h9.45a.618.618 0 00.618-.617v-6.743h.004z"/></g><g transform="translate(121 55)"><circle stroke="#EE5758" stroke-width="2" cx="58" cy="5" r="5"/><circle stroke="#01B2D0" stroke-width="2" cx="5" cy="5" r="5"/><rect fill="url(#b)" x="13" y="3" width="38" height="4" rx="2"/></g></g></svg>

    <div class="stack-xs">
      <h1 class="biggie semi-bold">Connect Vero and Freshpaint</h1>

      <p class="large">Freshpaint unifies customer data across all your analytics and marketing tools. With this integration, you'll be able to use Freshpaint to collect data from the likes of mobile and cloud apps, plug it into Vero, and trigger personalized marketing messages.</p>
    </div>

    <a class="btn btn--success btn--large track-start-trial" element-position="top" href="https://app.getvero.com/signup">Start a free trial</a>
  </div>
  <div class="inner large-inner flush-bottom">
    <div class="bg-primary-lighter border-radius-2 border-primary integration-about">
      <div class="flex">
        <div class="stack-xs">
          <div class="flex items-start">
            <svg class="align-middle border-radius-1 right-margin-xxs" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FF4A00" d="M0 0h24v24H0z"/><path d="M13.75 12.003c0 .52-.096 1.018-.269 1.478-.46.173-.958.269-1.478.27h-.006c-.52-.001-1.018-.097-1.478-.27a4.187 4.187 0 01-.269-1.478v-.006c0-.52.096-1.018.269-1.478.46-.173.958-.269 1.478-.269h.006c.52 0 1.018.096 1.478.27.173.459.269.957.269 1.477v.006zm5.153-1.17h-4.086l2.889-2.889a7.055 7.055 0 00-1.65-1.65l-2.89 2.89V5.097A7.033 7.033 0 0012.004 5h-.008c-.396 0-.784.034-1.163.097v4.087l-2.889-2.89a6.99 6.99 0 00-.893.756l-.002.001a7.044 7.044 0 00-.755.893l2.89 2.89H5.097S5 11.6 5 11.997v.004c0 .397.034.786.097 1.165h4.087l-2.89 2.889a7.05 7.05 0 001.65 1.65l2.89-2.89v4.087c.377.063.765.097 1.16.097h.01c.397 0 .785-.034 1.162-.097v-4.087l2.89 2.89a7.068 7.068 0 001.65-1.65l-2.89-2.89h4.087c.063-.377.097-.765.097-1.16v-.011c0-.396-.034-.784-.097-1.162z" fill="#FFF"/></g></svg>

            <h2 class="semi-bold atomic no-margin">About Freshpaint</h2>
          </div>

          <p>Freshpaint is a data collection tool that allows you to unlock historical data while automatically collecting customer data in the background. As the tool archives and stores your customer data, you can avoid vendor lock-in and protect against data loss.</p>
        </div>

        <div class="stack-xs">
          <div class="flex items-start">
            <svg class="align-middle border-radius-1 right-margin-xxs" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(-29.066 -456.066)"><circle stroke="#F1F1F1" stroke-width="2" cx="395.066" cy="395.066" r="360"/><path d="M592.566 52.986C403.64-56.09 162.062 8.64 52.986 197.566-56.09 386.492 8.64 628.07 197.566 737.146c188.926 109.076 430.504 44.346 539.58-144.58 109.076-188.926 44.346-430.504-144.58-539.58z" stroke="#E1E1E1" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2378.4,238"/></g><path fill="#01B2D0" d="M0 0h24v24H0z"/><path d="M18.101 5.001L18.041 5H5.872C4.83 5 4 5.869 4 6.959c0 .244.045.479.126.695.039.122.089.241.151.357l6.05 10.955c.087.157.191.297.308.418.34.378.828.616 1.374.616.455 0 .875-.178 1.197-.47.183-.15.343-.34.467-.564l6.05-10.955c.061-.114.11-.23.148-.35.083-.218.129-.455.129-.702C20 5.869 19.17 5 18.163 5l-.062.001zm-5.503 10.301l4.784-8.688a.664.664 0 00.035-.054.826.826 0 01.746-.472c.432 0 .797.382.797.87a.912.912 0 01-.139.472.05.05 0 00-.017.037l-5.27 9.54-.936-1.705zM5.942 6.088H16.48l-.936 1.705H5.838a.83.83 0 01-.815-.834c0-.49.364-.87.815-.87h.104zm3.112 2.793h5.892L12 14.216 9.054 8.88zm2.192 9.577c.001-.013-.005-.023-.017-.036l-5.253-9.54h1.872l4.802 8.688a.25.25 0 00.035.072.943.943 0 01.121.472c0 .452-.364.834-.797.834a.844.844 0 01-.763-.49z" fill="#FFF"/></g></svg>

            <h2 class="semi-bold atomic no-margin">About Vero</h2>
          </div>

          <p>Vero helps you send behavioral and transactional emails. Our emails are data-driven, so you're never guessing when to send an email or who to send it to. Trigger a coupon when a customer views a product twice, or help a new user get started when they download your software.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="absolute">
    <svg width="1050" height="1050" xmlns="http://www.w3.org/2000/svg"><defs/><g stroke="#E1E1E1" fill="none" fill-rule="evenodd"><path d="M527.828 512.828l9.344 9.344a4 4 0 010 5.656l-9.344 9.344a4 4 0 01-5.656 0l-9.344-9.344a4 4 0 010-5.656l9.344-9.344a4 4 0 015.656 0z"/><path d="M527.828 482.828l39.344 39.344a4 4 0 010 5.656l-39.344 39.344a4 4 0 01-5.656 0l-39.344-39.344a4 4 0 010-5.656l39.344-39.344a4 4 0 015.656 0z"/><path d="M527.828 452.828l69.344 69.344a4 4 0 010 5.656l-69.344 69.344a4 4 0 01-5.656 0l-69.344-69.344a4 4 0 010-5.656l69.344-69.344a4 4 0 015.656 0z"/><path d="M527.828 422.828l99.344 99.344a4 4 0 010 5.656l-99.344 99.344a4 4 0 01-5.656 0l-99.344-99.344a4 4 0 010-5.656l99.344-99.344a4 4 0 015.656 0z"/><path d="M527.828 392.828l129.344 129.344a4 4 0 010 5.656L527.828 657.172a4 4 0 01-5.656 0L392.828 527.828a4 4 0 010-5.656l129.344-129.344a4 4 0 015.656 0z"/><path d="M527.828 362.828l159.344 159.344a4 4 0 010 5.656L527.828 687.172a4 4 0 01-5.656 0L362.828 527.828a4 4 0 010-5.656l159.344-159.344a4 4 0 015.656 0z"/><path d="M527.828 332.828l189.344 189.344a4 4 0 010 5.656L527.828 717.172a4 4 0 01-5.656 0L332.828 527.828a4 4 0 010-5.656l189.344-189.344a4 4 0 015.656 0z"/><path d="M527.828 302.828l219.344 219.344a4 4 0 010 5.656L527.828 747.172a4 4 0 01-5.656 0L302.828 527.828a4 4 0 010-5.656l219.344-219.344a4 4 0 015.656 0z"/><path d="M527.828 272.828l249.344 249.344a4 4 0 010 5.656L527.828 777.172a4 4 0 01-5.656 0L272.828 527.828a4 4 0 010-5.656l249.344-249.344a4 4 0 015.656 0z"/><path d="M527.828 242.828l279.344 279.344a4 4 0 010 5.656L527.828 807.172a4 4 0 01-5.656 0L242.828 527.828a4 4 0 010-5.656l279.344-279.344a4 4 0 015.656 0z"/><path d="M527.828 212.828l309.344 309.344a4 4 0 010 5.656L527.828 837.172a4 4 0 01-5.656 0L212.828 527.828a4 4 0 010-5.656l309.344-309.344a4 4 0 015.656 0z"/><path d="M527.828 152.828l369.344 369.344a4 4 0 010 5.656L527.828 897.172a4 4 0 01-5.656 0L152.828 527.828a4 4 0 010-5.656l369.344-369.344a4 4 0 015.656 0z"/><path d="M527.828 182.828l339.344 339.344a4 4 0 010 5.656L527.828 867.172a4 4 0 01-5.656 0L182.828 527.828a4 4 0 010-5.656l339.344-339.344a4 4 0 015.656 0z"/><path d="M527.828 122.828l399.344 399.344a4 4 0 010 5.656L527.828 927.172a4 4 0 01-5.656 0L122.828 527.828a4 4 0 010-5.656l399.344-399.344a4 4 0 015.656 0z"/><path d="M527.828 92.828l429.344 429.344a4 4 0 010 5.656L527.828 957.172a4 4 0 01-5.656 0L92.828 527.828a4 4 0 010-5.656L522.172 92.828a4 4 0 015.656 0z"/><path d="M527.828 62.828l459.344 459.344a4 4 0 010 5.656L527.828 987.172a4 4 0 01-5.656 0L62.828 527.828a4 4 0 010-5.656L522.172 62.828a4 4 0 015.656 0z"/><path d="M527.828 32.828l489.344 489.344a4 4 0 010 5.656l-489.344 489.344a4 4 0 01-5.656 0L32.828 527.828a4 4 0 010-5.656L522.172 32.828a4 4 0 015.656 0z"/><path d="M527.828 2.828l519.344 519.344a4 4 0 010 5.656l-519.344 519.344a4 4 0 01-5.656 0L2.828 527.828a4 4 0 010-5.656L522.172 2.828a4 4 0 015.656 0z"/></g></svg>
  </div>
</section>
<section class="double-padding">
  <div class="inner small-inner flush-bottom bottom-margin-lg center-text">
    <div class="stack-xs">
      <h2 class="chunk">Connecting Vero and Freshpaint helps your team move quickly</h2>
    </div>
  </div>
  <div class="inner medium-inner border-bottom">
    <ul class="unstyled-list grid grid--halfs">
      <li class="no-margin flex">
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><rect fill="#F15242" x="23" y="5" width="2" height="38" rx="1"/><circle stroke="#F15242" stroke-width="2" cx="38" cy="36" r="4"/><rect fill-opacity=".4" fill="#F15242" x="24" y="19" width="10" height="2" rx="1"/><rect fill-opacity=".4" fill="#F15242" x="14" y="27" width="10" height="2" rx="1"/><rect fill-opacity=".4" fill="#F15242" x="24" y="35" width="10" height="2" rx="1"/><circle stroke="#F15242" stroke-width="2" cx="10" cy="28" r="4"/><rect fill-opacity=".4" fill="#F15242" x="14" y="11" width="10" height="2" rx="1"/><circle stroke="#F15242" stroke-width="2" cx="10" cy="12" r="4"/><circle stroke="#F15242" stroke-width="2" cx="38" cy="20" r="4"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic">Retroactive and historical data</h3>
          <p>Autotrack collects everything from the moment of install, so you already have the data on hand. Every new event you create has historical data available back to the day you installed Freshpaint.</p>
        </div>
      </li>

      <li class="no-margin flex">
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><rect fill-opacity=".4" fill="#FFC111" x="12" y="20" width="20" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="12" y="24" width="4" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="17" y="24" width="4" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="12" y="28" width="14" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="12" y="32" width="8" height="2" rx="1"/><rect stroke="#FFC111" stroke-width="2" x="7" y="9" width="34" height="30" rx="4"/><path fill="#FFC111" d="M8 14h32v2H8z"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic">Autotrack &plus; Precision tracking</h3>
          <p>Automates the collection of behavioral customer data using a single Javascript snippet that works in the background. You won't need to deploy code for every single interaction that requires data collection.</p>
        </div>
      </li>

      <li class="no-margin flex">
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><rect stroke-opacity=".4" stroke="#01B2D0" stroke-width="2" x="41" y="7" width="4" height="4" rx="1"/><rect stroke-opacity=".4" stroke="#01B2D0" stroke-width="2" x="41" y="37" width="4" height="4" rx="1"/><rect stroke-opacity=".4" stroke="#01B2D0" stroke-width="2" x="3" y="37" width="4" height="4" rx="1"/><rect stroke-opacity=".4" stroke="#01B2D0" stroke-width="2" x="3" y="7" width="4" height="4" rx="1"/><rect fill="#01B2D0" x="4" y="14" width="2" height="20" rx="1"/><rect fill="#01B2D0" x="42" y="14" width="2" height="20" rx="1"/><g transform="translate(12 17)" fill="#FFF" stroke="#01B2D0" stroke-width="2"><path d="M12 1c4.042 0 7.6 2.028 10.719 5.974C19.239 11.041 15.763 13 12 13c-3.857 0-7.415-2.051-10.726-6.019C4.396 3.031 7.956 1 12 1z"/><circle cx="12" cy="7" r="3"/></g><rect fill="#01B2D0" x="10" y="8" width="28" height="2" rx="1"/><rect fill="#01B2D0" x="10" y="38" width="28" height="2" rx="1"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic">Visual editor for tagging</h3>
          <p>It's now possible to build data infrastructure without a technical resource. As a marketer or product manager, Freshpaint is your launchpad to understand your business, acquire new customers, and engage your existing users.</p>
        </div>
      </li>

      <li class="no-margin flex">
        <div class="right-margin-sm">
          <svg class="align-middle" width="48" height="48" xmlns="http://www.w3.org/2000/svg"><defs/><g stroke="#6F0DFB" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M19.586 14L31 25.414V39a2.99 2.99 0 01-.879 2.121A2.99 2.99 0 0128 42h0-16a2.99 2.99 0 01-2.121-.879A2.99 2.99 0 019 39h0V17c0-.828.336-1.578.879-2.121A2.99 2.99 0 0112 14h7.586z" stroke-opacity=".4" fill="#FFF"/><path d="M23.586 10L35 21.414V35a2.99 2.99 0 01-.879 2.121A2.99 2.99 0 0132 38h0-16a2.99 2.99 0 01-2.121-.879A2.99 2.99 0 0113 35h0V13c0-.828.336-1.578.879-2.121A2.99 2.99 0 0116 10h7.586z" stroke-opacity=".4" fill="#FFF"/><path d="M27.586 6L39 17.414V31a2.99 2.99 0 01-.879 2.121A2.99 2.99 0 0136 34h0-16a2.99 2.99 0 01-2.121-.879A2.99 2.99 0 0117 31h0V9c0-.828.336-1.578.879-2.121A2.99 2.99 0 0120 6h7.586z" fill="#FFF"/><path d="M29 7.414L37.586 16H32a2.99 2.99 0 01-2.121-.879A2.99 2.99 0 0129 13h0V7.414z"/></g></svg>
        </div>

        <div class="stack-xxxs">
          <h3 class="atomic">Replay backfills</h3>
          <p>As Freshpaint archives and stores customer data, you'll be able to avoid vendor lock-in and protect against potential data loss. Replay works by taking an archived copy of your data, resending it to new and existing tools that you're working with.</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding">
  <div class="inner medium-inner">
    <div class="w-sidebar w-sidebar--md">
      <div class="col-main">
        <h2 class="tubs semi-bold bottom-margin-xs">Easily get meaningful and actionable insights</h2>
        <p class="medium">Vero’s integration with Freshpaint lets you extract, transform, and load (ETL) your email campaign data into your data warehouses, such as Redshift and Bigquery.

        <p class="medium">By combining your email and push interaction data with the rest of your customer data, you'll get access to meaningful and actionable insights. For example, connecting your data from payment apps, like Stripe, with your data from Vero, you'll be able to better analyze conversions and revenue from email campaigns.</p>
      </div>
      <div class="col-aside relative center-text lg-right-text">
        <img class="align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/integrations/zapier/automate.svg" alt="Automate at a whole new level">
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