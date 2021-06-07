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
  <div class="inner flush-bottom bottom-margin-lg">
    <div class="center-text">
      <div class="stack-xs">
        <h1 class="semi-bold hulk">Contact us</h1>
        <p class="large">Get in touch by email &mdash; we'd love to hear from you.</p>
      </div>
    </div>
  </div>
  <div class="inner large-inner">
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
          <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><g stroke="#6F0DFB" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M15.787 18.757c1.28 0 2.559.489 3.535 1.465h0l2.829 2.828a4.984 4.984 0 011.464 3.536c0 1.28-.488 2.559-1.464 3.535h0l-2.829 2.829a4.99 4.99 0 01-4.018 1.441c-.73-.07-1.44-.3-2.077-.677.35.745.72 1.465 1.107 2.16 1.608 2.881 3.758 5.745 6.403 8.39 2.644 2.644 5.508 4.794 8.39 6.402a34.98 34.98 0 002.16 1.108 5.02 5.02 0 01-.678-2.077 4.99 4.99 0 011.441-4.02h0l2.829-2.828a4.984 4.984 0 013.535-1.464c1.28 0 2.56.488 3.536 1.464h0l2.828 2.829a4.984 4.984 0 011.465 3.535c0 1.28-.489 2.56-1.465 3.536h0l-2.828 2.828a4.987 4.987 0 01-1.526 1.045c-3.003 1.58-6.96 1.5-11.139.112-4.28-1.424-8.797-4.234-12.791-8.228-3.994-3.994-6.804-8.51-8.228-12.791-1.389-4.18-1.468-8.136.082-11.074a5.127 5.127 0 011.075-1.59h0l2.828-2.83a4.984 4.984 0 013.536-1.464z" fill="#FFF"/><g stroke-linecap="round" stroke-linejoin="bevel" stroke-opacity=".2"><path d="M56.675 31.368c0-13.807-11.193-25-25-25M49.175 32.618c0-9.665-7.835-17.5-17.5-17.5M40.291 32.663a8.75 8.75 0 00-8.75-8.75"/></g></g></svg>

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
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner small-inner center-text stack-lg flush-bottom">
    <div class="stack-xxs">
      <h2 class="biggie semi-bold center-text">Our location</h2>
      <p class="large">We're a semi-distributed team spread across Europe, Asia, and North America, with our core team in Sydney, Australia.</p>
    </div>

    <img class="d-inline-block align-middle responsive-image" src="/wp-content/themes/vero/assets/dist/images/contact/sydney-opera-house.svg" alt="Sydney Open Opera House">
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
