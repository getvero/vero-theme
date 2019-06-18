<?php

function add_logo_and_menu_toggle_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];

  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;

  ob_start();
  ?>
  <div id="logo">
    <?php if( is_blog_archive() || is_single() ) : ?>
      <div class="flex items-center">
        <a href="/">
          <img class="full-image align-middle" src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-white.svg" alt="Vero logo white navigation">
        </a>

        <div class="divider"></div>

        <a class="atomic negative" href="/resources">Resources</a>
      </div>
    <?php else : ?>
      <a href="/">
        <img class="full-image align-middle" src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-blue-navigation.svg" alt="Vero logo blue navigation">
      </a>
    <?php endif; ?>
  </div>
  <?php $logo = ob_get_clean();

  ob_start();
  ?>
  <div class="js-resources-menu resources-menu flex flex-column md-lg-flex-row items-center md-lg-items-stretch">
    <ul class="menu resources-categories flex flex-column md-lg-flex-row items-center" id="">
      <li>
        <a href="#none">Link</a>
      </li>
      <li>
        <a href="#none">Link</a>
      </li>
      <li>
        <a href="#none">Link</a>
      </li>
      <li>
        <a href="#none">Link</a>
      </li>
    </ul>

    <?php get_search_form(); ?>

    <div class="js-resources-menu-footer resources-menu-footer">
      <div class="resources-footer-wrap">
        <button class="js-resources-menu-footer-close resources-menu-footer-close">✕</button>
        <div class="grid items-center">
          <div class="col-main">
            <div class="js-enquire-intro-menu enquire-intro-menu">
              <h3 class="no-margin">Insights, tips and tools for creating better customer messaging and product experiences</h3>
            </div>
            <div class="js-thanks-menu thanks-menu hide">
              <h3 class="atomic regular bottom-margin-small">Almost there!</h3>
              <p class="no-margin">We've sent you an email to confirm your subscription.</p>
            </div>
          </div>
          <div class="col-aside">
            <form class="js-blog-subscribe-form blog-subscribe-form" action="https://app.getvero.com/forms/0eefc98b2dc881e7c0888ae698833577" method="post">
              <div class="flex flex-column md-lg-flex-row justify-center items-stretch">
                <input class="form-control input-width-full" id="sender_email_address" name="email" type="email" placeholder="name@mycompany.com">
                <input name="user[consent_marketing]" type="hidden" value="true">
                <input name="user[consent_product_updates]" type="hidden" value="true">
                <input name="event[blog_subscriber_source]" type="hidden" value="popup">
                <input name="user[contact_by_fax_only]" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
                <input class="btn btn-success btn-no-shadow" type="submit" value="Subscribe to updates">
              </div>
              <span class="annotation faded">We're committed to keeping your information safe. Read our Privacy Policy.</span>
            </form>
          </div>
        </div>
      </div>
    </div>

    <button class="js-open-subscribe-form btn btn-success hide md-lg-show left-margin-auto">Subscribe to updates</button>
  </div>
  <?php $resources_menu = ob_get_clean();

  ob_start();
  ?>
	  <div class="hide smd-show"><?php get_search_form(); ?></div>
  <?
	$search = ob_get_clean();

  ob_start();
  ?>
  <div class="js-nav-primary-toggle nav-primary-toggle border-radius-1 semi-bold">Menu</div>
  <?php $responsive_toggle = ob_get_clean();

  ob_start();
  ?>
  <div class="js-category-toggle category-toggle border-radius-1 semi-bold">Menu</div>
  <?php $category_toggle = ob_get_clean();

  if ( is_blog_archive() || is_single() ) {
    return $logo . $resources_menu . $category_toggle;
  } else {
    return $logo . $menu . $responsive_toggle;
  }
}

function additional_active_item_classes($classes = array(), $menu_item = false){
    if(is_singular('kb')) {
      $post = get_post();
      $terms = get_the_terms( $post->ID, 'topic' );
      $term_array = array();
      $count = count($terms);
      if ( $count > 0 ){
        foreach ( $terms as $term ) {
            $term_array[] = $term->name;
        }
      }
    } else if(is_tax('topic')) {
      $q_object = get_queried_object();
      if( isset($q_object->taxonomy) ){
        $taxonomy = $q_object->taxonomy;
      }
    }
    //global $wp_query;
    if ( strtolower($menu_item->title) == 'tour' && ( is_page('features') || is_page('triggered-emails') || is_page('smart-newsletters') || is_page('external-attributes') || is_page('individual-contact-profiles')  ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'idea lab' && ( is_singular('campaigns') || is_post_type_archive('campaigns')) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Pricing' && (is_page('pricing') || is_page('growth') || is_page('entrepreneur') || is_page('enterprise')  || is_page('full-pricing') ) ) {
      $classes[] = 'current-menu-item';
    }  else if ( ( is_singular('kb') && in_array($menu_item->title, $term_array) ) || ( is_tax('topic') && ($menu_item->title == $taxonomy) ) ) {
      $classes[] = 'current-menu-item';
    } else if ( $menu_item->title == 'Email Marketing Resources' && (is_page('email-marketing-resources') || is_singular('guides') || is_singular('resources') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'blog' && (array_shift(explode(".",$_SERVER['HTTP_HOST'])) == 'blog') ) {
      $classes[] = 'current-menu-item';
    }
    return $classes;
}

function workflows_banner(){
  if(is_page('homepage')){
    ?>
      <div class="homepage-banner">
        <a class="flex items-center border-bottom-light" href="/workflows">
          <p class="large banner-heading no-margin right-margin-medium">Introducing <span class="bold">Workflows</span></p>
          <p class="regular banner-sub-heading no-margin">A brand new way to design, visualize and manage your customer journeys!</p>
          <span class="regular banner-button">Find out more</span>
          <span class="regular banner-arrow">
            <svg height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg"><path d="m6.328 14.263c-.407.373-.435 1.006-.061 1.413.373.407 1.006.435 1.413.061l5.998-5.498c.432-.396.432-1.078 0-1.474l-5.998-5.502c-.407-.373-1.04-.346-1.413.061s-.346 1.04.061 1.413l5.194 4.764z" fill="#d8d8d8"/></svg>
          </span>
        </a>
      </div>
    <?php
  }
}

// Add description to submenu
function add_menu_description( $item_output, $item ) {
  if ( !empty( $item->description ) ) {
    $item_output = str_replace( $args->link_after . '</a>', '<div class="annotation light" style="flex: 1 1 100%">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
  }

  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_description', 10, 2 );

?>