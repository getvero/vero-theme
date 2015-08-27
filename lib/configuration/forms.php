<?php

//
// Handle Gravity forms and Easy Slide Forms plugins
//----------------------

//Gravity forms submit to Vero
function post_to_vero( $entry, $form ) {
  $post_url = 'https://app.getvero.com/forms/71789091b958b7b1683654756aca7391';
  $body = array(
    'email'           => rgar( $entry, '1' ), 
    'event[industry]' => rgar( $entry, '2' ),
  );
  
  $request = new WP_Http();
  $response = $request->post( $post_url, array( 'body' => $body ) );
}

//Cookie and hide Easy Slide Forms
function hide_easy_slide_form() {
  ?>
  <script>
  function getCookie(name) {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
  }

  if(getCookie("v_userId")){
    jQuery('#esi-slide_in').css("display", "none");
  } 
  </script>
  <?php
}

?>
