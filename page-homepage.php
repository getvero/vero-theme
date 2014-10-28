<?php 
  //Remove the entry header markup (requires HTML5 theme support)
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title');
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
    remove_action( 'genesis_footer', 'genesis_do_footer' );
    remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

  //Force full width layout
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'metro_add_body_class' );
  function metro_add_body_class( $classes ) {
   $classes[] = 'full-width';
   return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="top" class="center-text nothing">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
    <h1 class="center-text nothing">Track behavior, trigger emails.</h1>
    <div id="reba" class="person half right-text"><img src="/wp-content/themes/vero/assets/images/home/reba.png"/></div>
    <div id="right" class="half center-text">
      <div id="box">
        <h5 class="center-text header">An example from a Vero customer</h5>
        <ul class="flow left list-unstyled left-text">
          <li>
            <span class="first-circle"></span>
            <span class="line"></span>
          </li>
          <li>
            <span class="circle"></span>
            <span class="line"></span>
          </li>
          <li>
            <span class="circle"></span>
            <span class="line"></span>
          </li>
          <li>
            <span class="email icon-envelope-o"></span>
          </li>
        </ul>
        <ul class="story left list-unstyled left-text">
          <li>Reba visits <em>shoesofprey.com</em> and starts <strong>desiging a shoe online</strong>.</li>
          <li>She adds custom red leather shoes to the shoes she is designing.</li>
          <li>Reba leaves <em>shoesofprey.com</em> without <strong>purchasing</strong> the shoes.</li>
          <li>Vero sends a <strong>triggered email</strong> to Reba two hours later with an image of <strong>the</strong> custom red leather shoes she was designing online.</li>
        </ul>
        <a href="/features" class="btn btn-warning">Send Behavioral Emails</a>
        <div class="small center-text">Try a 14-day free trial, no credit card required.</div>
      </div>
  </div>
</section>
<?php 
no_content_genesis_footer();
?>