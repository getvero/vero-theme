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
  <div class="inner">
    <div class="center-text">
      <div class="stack-xs">
        <h1 class="semi-bold hulk">Contact us</h1>
        <p class="large">Get in touch by email &mdash; we'd love to hear from you.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="inner large-inner">
    <div class="grid grid--thirds">
      <ul class="flex unstyled-list center-text">
        <li class="padding-sm border border-radius-2 shadow-3">
          <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><defs/><g transform="translate(7 7)" fill="none" fill-rule="evenodd"><circle stroke="#F9BAB3" stroke-width="2" cx="40" cy="10" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="40" cy="40" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="10" cy="40" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="10" cy="10" r="9"/><path d="M25 2a22.928 22.928 0 0116.263 6.737A22.928 22.928 0 0148 25a22.928 22.928 0 01-6.737 16.263A22.928 22.928 0 0125 48a22.928 22.928 0 01-16.263-6.737A22.928 22.928 0 012 25 22.928 22.928 0 018.737 8.737 22.928 22.928 0 0125 2zm0 14a8.972 8.972 0 00-6.364 2.636A8.972 8.972 0 0016 25a8.972 8.972 0 002.636 6.364A8.972 8.972 0 0025 34a8.972 8.972 0 006.364-2.636A8.972 8.972 0 0034 25a8.972 8.972 0 00-2.636-6.364 8.97 8.97 0 00-6.041-2.63h0z" stroke="#F15242" stroke-width="2" fill="#FFF"/><path fill="#F15242" d="M24 3h2v12h-2zM24 35h2v12h-2zM35 24h12v2H35zM3 24h12v2H3z"/></g></svg>

          <h2 class="semi-bold tubs">Support</h2>

          <p>Reach out to our support team for anything platform or product related.</p>

          <a class="underline-link" href="mailto:support@getvero.com">support@getvero.com</a>
        </li>
        <li class="padding-sm border border-radius-2 shadow-3">
          <svg class="align-middle" width="64" height="64" xmlns="http://www.w3.org/2000/svg"><defs/><g transform="translate(3 10)" fill="none" fill-rule="evenodd"><rect stroke="#6F0DFB" stroke-width="2" fill="#FFF" x="1" y="1" width="56" height="42" rx="4"/><path fill="#BC95F4" d="M2 6h54v10H2z"/><rect fill="#6F0DFB" x="7" y="22" width="18" height="2" rx="1"/></g></svg>

          <h2 class="semi-bold tubs">Sales</h2>

          <p>Chat with our sales team about pricing, free trials, and scheduling a demo.</p>

          <a class="underline-link" href="mailto:sales@getvero.com">sales@getvero.com</a>
        </li>
        <li class="padding-sm border border-radius-2 shadow-3">
          <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg"><defs/><g transform="translate(7 7)" fill="none" fill-rule="evenodd"><circle stroke="#F9BAB3" stroke-width="2" cx="40" cy="10" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="40" cy="40" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="10" cy="40" r="9"/><circle stroke="#F9BAB3" stroke-width="2" cx="10" cy="10" r="9"/><path d="M25 2a22.928 22.928 0 0116.263 6.737A22.928 22.928 0 0148 25a22.928 22.928 0 01-6.737 16.263A22.928 22.928 0 0125 48a22.928 22.928 0 01-16.263-6.737A22.928 22.928 0 012 25 22.928 22.928 0 018.737 8.737 22.928 22.928 0 0125 2zm0 14a8.972 8.972 0 00-6.364 2.636A8.972 8.972 0 0016 25a8.972 8.972 0 002.636 6.364A8.972 8.972 0 0025 34a8.972 8.972 0 006.364-2.636A8.972 8.972 0 0034 25a8.972 8.972 0 00-2.636-6.364 8.97 8.97 0 00-6.041-2.63h0z" stroke="#F15242" stroke-width="2" fill="#FFF"/><path fill="#F15242" d="M24 3h2v12h-2zM24 35h2v12h-2zM35 24h12v2H35zM3 24h12v2H3z"/></g></svg>

          <h2 class="semi-bold tubs">General</h2>

          <p>Reach out to our support team for anything platform or product related.</p>

          <a class="underline-link" href="mailto:hello@getvero.com">hello@getvero.com</a>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
?>
