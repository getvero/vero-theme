<?php
/*
Template Name: Campaigns Archive
*/

remove_action( 'genesis_loop', 'genesis_do_loop' );

add_filter('wp_title', 'my_custom_title');
function my_custom_title($title) {
    return 'Email Marketing Inspiration | Vero';
}
//Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class', 20, 2);
function metro_add_body_class( $classes ) {
  foreach($classes as $key => $value) {
    if ($value == 'blog archive') {
      unset($classes[$key]);
    }
  }
  $classes[] = 'full-width idea-lab';
  return $classes;
}

//Remove header
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Remove footer
//remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
//remove_action( 'genesis_footer', 'genesis_do_footer' );
//remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//Add featured sections at the top
add_action( 'genesis_before_content', 'add_campaigns_header' );
function add_campaigns_header() {
  ?>
  <section id="top">
    <div class="inner center-text">
      <h1>Need email campaign inspiration?</h1>
      <h2 class="h5">Create a free targeted email campaigns in 60 seconds using our best-of-breed email campaign templates.</h2>
      <a href="#b2b-software" class="btn btn-large btn-primary">Start targeting now</a>
    </div>
  </section>
  <?php 
}

//Add B2B campaigns 
add_action('genesis_loop', 'custom_do_b2b_loop');
function custom_do_b2b_loop() {
  ?>
    <section id="b2b-software" class="campaign-block">
      <div class="wrap">
        <div class="left">
          <h3>B2B Software</h3>
          <p>Vero allows you to send welcome campaigns, inactivity emails, weekly newsletters for your SaaS or other B2B software with ease.</p><p>Each of the campaign templates provided here will help you target the <strong>right customers</strong> and are best-of-breed, taken directly from Vero's own experiements or shared directly by our customers.</p>
        </div>
        <div class="right">
  <?php

  global $query_args; // any wp_query() args
  $args= array('post_type' => 'campaigns', 'posts_per_page' => 3, 'show_posts' => 3, 'category_name' => 'saas-campaign-ideas');
  genesis_custom_loop(wp_parse_args($query_args, $args));
  ?>
    <article class="campaigns gray"><div class="entry-content"><a data-target="#suggest-modal" data-toggle='vmodal' class="well gray"><p class="plus">+</p><p>Suggest a campaign</p></a></div></article>
  <?php
  echo '</div></div></section>';
}

//Add consumer products
add_action('genesis_loop', 'custom_do_cs_loop');
function custom_do_cs_loop() {
  ?>
    <section id="consumer-software" class="campaign-block">
      <div class="wrap">
        <div class="left">
          <h3>Consumer Products</h3>
          <p>Consumer software, online games, travel websites and other businesses selling to consumers have a <strong>huge</strong> range of options when it comes to behavioral email marketing.</p><p>These campaigns provide some out-of-the-box ideas that you can use to re-engage your customers and promote repeat sales in your B2C business.</p>
        </div>
        <div class="right">
  <?php

  global $query_args; // any wp_query() args
  $args= array('post_type' => 'campaigns', 'posts_per_page' => 3, 'show_posts' => 3, 'category_name' => 'consumer-products-campaign-ideas');
  genesis_custom_loop(wp_parse_args($query_args, $args));
  ?>
    <article class="campaigns gray"><div class="entry-content"><a data-target="#suggest-modal" data-toggle='vmodal' class="well "><p class="plus">+</p><p>Suggest a campaign</p></a></div></article>
  <?php
  echo '</div></div></section>';
}

//Add eCommerce
add_action('genesis_loop', 'custom_do_ecommerce_loop');
function custom_do_ecommerce_loop() {
  ?>
    <section id="ecommerce" class="campaign-block">
      <div class="wrap">
        <div class="left">
          <h3>eCommerce</h3>
          <p>eCommerce email marketing has been around for over a decade and is some of the most competitive.</p><p>Our example behavioral campaign templates are inspired by companies like Amazon and our own customers' experiments to give you winning examples of campaign copy and timing.</p>
        </div>
        <div class="right">
  <?php

  global $query_args; // any wp_query() args
  $args= array('post_type' => 'campaigns', 'posts_per_page' => 3, 'show_posts' => 3, 'category_name' => 'ecommerce-campaign-ideas');
  genesis_custom_loop(wp_parse_args($query_args, $args));
  ?>
    <article class="campaigns gray"><div class="entry-content"><a data-target="#suggest-modal" data-toggle='vmodal' class="well "><p class="plus">+</p><p>Suggest a campaign</p></a></div></article>
  <?php
  echo '</div></div></section>';
}

add_action( 'genesis_after_content', 'add_modal' );
function add_modal() {
  ?>
  <div class="vmodal" id="suggest-modal"><div class="vmodal-dialog">
    <div class="vmodal-content">
        <div class="vmodal-header">
          <div class="close">x</div>
          <h4>Suggest an idea or personal campaign success</h4>
        </div>
        <form action='https://app.getvero.com/forms/16c4bac7da47edef91516ff0f409cc01' method='post'>
          <div class="vmodal-body">
              <div class="form-group"><label for='email'>Your email address</label><br/><input name='email' type='email' class="form-control"/></div>
              <div class="form-group"><label for='event_suggestion'>Suggestion</label><br/><textarea name='event[suggestion]' class="form-control"/></textarea></div>
          </div>
          <input name='redirect_on_success' type='hidden' class="http://www.getvero.com/idea-lab"/>
          <div class="vmodal-footer">
            <input type='submit' class="btn btn-success" value='Submit your example' />
          </div>
        </form>
    </div>
  </div></div>
  <?php
}

//Custom post format
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');
function custom_excerpt() {
  $post = get_post();
  ?>
    <a href="<?php echo get_permalink(); ?>" class="well campaign">
      <h4><?php echo get_the_title(); ?></h4>
      <p><?php echo string_limit_words(get_the_excerpt(),10); ?></p>
    </a>
  <?php
}

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  array_pop($words);
  //add a ... at last article when more than limit word count
  echo implode(' ', $words)."..."; } else {
  //otherwise
  echo implode(' ', $words); }
}

genesis(); ?>