<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = '';
    return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section>
  <div class="inner flush-bottom">
    <div class="center-text">
      <div class="stack-xs">
        <h1 class="semi-bold hulk">Contact us</h1>
        <p class="large">Get in touch by email &mdash; we'd love to hear from you.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner large-inner flush-bottom">
    <ul class="grid grid--thirds unstyled-list center-text">
      <li class="bg-white horizontal-padding-lg padding-md border border-radius-2 shadow-3 stack-sm">
        <div class="stack-xs">
          <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><defs/><g transform="translate(7 7)" fill="none" fill-rule="evenodd"><circle stroke="#F9BAB3" stroke-width="2" cx="40" cy="10" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="40" cy="40" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="10" cy="40" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="10" cy="10" r="9"/><path d="M25 2a22.928 22.928 0 0116.263 6.737A22.928 22.928 0 0148 25a22.928 22.928 0 01-6.737 16.263A22.928 22.928 0 0125 48a22.928 22.928 0 01-16.263-6.737A22.928 22.928 0 012 25 22.928 22.928 0 018.737 8.737 22.928 22.928 0 0125 2zm0 14a8.972 8.972 0 00-6.364 2.636A8.972 8.972 0 0016 25a8.972 8.972 0 002.636 6.364A8.972 8.972 0 0025 34a8.972 8.972 0 006.364-2.636A8.972 8.972 0 0034 25a8.972 8.972 0 00-2.636-6.364 8.97 8.97 0 00-6.041-2.63h0z" stroke="#F15242" stroke-width="2" fill="#FFF"/><path fill="#F15242" d="M24 3h2v12h-2zM24 35h2v12h-2zM35 24h12v2H35zM3 24h12v2H3z"/></g></svg>

          <div class="stack-xxxs">
            <h2 class="semi-bold tubs">Support</h2>

            <p>Reach out to our support team for anything platform or product related.</p>
          </div>
        </div>

        <a class="d-inline-block underline-link regular" href="mailto:support@getvero.com">support@getvero.com</a>
      </li>
      <li class="bg-white horizontal-padding-lg padding-md border border-radius-2 shadow-3 stack-sm">
        <div class="stack-xs">
          <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><defs/><g transform="translate(3 10)" fill="none" fill-rule="evenodd"><rect stroke="#6F0DFB" stroke-width="2" fill="#FFF" x="1" y="1" width="56" height="42" rx="4"/><path fill="#BC95F4" d="M2 6h54v10H2z"/><rect fill="#6F0DFB" x="7" y="22" width="18" height="2" rx="1"/></g></svg>

          <div class="stack-xxxs">
            <h2 class="semi-bold tubs">Sales</h2>

            <p>Chat with our sales team about pricing, free trials, and scheduling a demo.</p>
          </div>
        </div>

        <a class="d-inline-block underline-link regular" href="mailto:sales@getvero.com">sales@getvero.com</a>
      </li>
      <li class="bg-white horizontal-padding-lg padding-md border border-radius-2 shadow-3 stack-sm">
        <div class="stack-xs">
          <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><path d="M22 7a2.99 2.99 0 00-2.121.879A2.99 2.99 0 0019 10h0v32c0 .828.336 1.578.879 2.121A2.99 2.99 0 0022 45h28.414L57 51.586V10a2.99 2.99 0 00-.879-2.121A2.99 2.99 0 0054 7h0z" stroke="#FFC111" stroke-width="2" fill="#FFF"/><rect fill-opacity=".4" fill="#FFC111" transform="matrix(-1 0 0 1 76 0)" x="27" y="22" width="22" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" transform="matrix(-1 0 0 1 76 0)" x="27" y="16" width="22" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" transform="matrix(-1 0 0 1 76 0)" x="27" y="28" width="22" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" transform="matrix(-1 0 0 1 76 0)" x="27" y="34" width="22" height="2" rx="1"/><path d="M42 15a2.99 2.99 0 012.121.879A2.99 2.99 0 0145 18h0v32a2.99 2.99 0 01-.879 2.121A2.99 2.99 0 0142 53h0-28.414L7 59.586V18c0-.828.336-1.578.879-2.121A2.99 2.99 0 0110 15h0z" stroke="#FFC111" stroke-width="2" fill="#FFF"/><rect fill-opacity=".4" fill="#FFC111" x="15" y="30" width="22" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="15" y="24" width="22" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="15" y="36" width="22" height="2" rx="1"/><rect fill-opacity=".4" fill="#FFC111" x="15" y="42" width="22" height="2" rx="1"/></g></svg>

          <div class="stack-xxxs">
            <h2 class="semi-bold tubs">General</h2>

            <p>Have a question about marketing, partnerships, or something else?</p>
          </div>
        </div>

        <a class="d-inline-block underline-link regular" href="mailto:hello@getvero.com">hello@getvero.com</a>
      </li>
    </ul>

  </div>
</section>
<section class="double-padding bg-dark-blue-lighter" style="margin-top: -60px">
  <div class="inner tiny-inner center-text stack-lg flush-bottom">
    <h2 class="center-text">We're a semi-distributed team spread across Europe, Asia, and North America, with our core team in Sydney, Australia.</h2>

    <img class="d-inline-block align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/contact/sydney-opera-house.svg" alt="Sydney Open Opera House">
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
