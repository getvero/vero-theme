<?php
/*
Template Name: Help Doc
*/

add_action( 'genesis_before_footer', 'add_cta_before_footer' );
function add_cta_before_footer() {
  ?>
  <section class="footerwidgetheader-container" id="cta">
    <div class="wrap center-text">
      <h3>Start sending smarter emails today and increasing your conversions tomorrow</h3>
      <div class="quote quote-large">
        <a href="/" class="btn btn-large btn-success">Start your free trial →</a>
      </div>
    </div>
  </section>
  <?php
}

genesis(); ?>