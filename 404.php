<?php
  get_header();
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
?>

<div id="background">
  <img src="/wp-content/themes/vero/assets/images/ship.png" alt="Down with the ship!">
</div>
<div id="text">
  <h2>How embarrassing: someone forgot to close the portholes! (404)</h2>
  <p>We can't find the page you're looking for.</p>
  <p>If you see this error continually and would like us to investigate the missing page please get in touch by emailing the <a href="mailto:support@getvero.com">help desk</a> or joining our <a href="https://www.hipchat.com/g7f50rxXN" target="_blank">chat room</a>.</p> <p>We apologize for the inconvenience.</p>
</div>

<?php
?>