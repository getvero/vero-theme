<?php

function add_logo_and_menu_toggle_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];

  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;

  ob_start();
  ?>
  <div id="logo">
    <?php if( is_blog_archive() || is_single() ): ?>
      <div class="flex items-center">
        <a class="show" href="/">
          <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-blue-navigation.svg" alt="Vero logo blue navigation">
        </a>

        <div class="divider"></div>

        <?php if( is_single() ): ?>
          <a class="logo-resources semi-bold unstyled" href="/resources">Resources</a>
        <?php else: ?>
          <h1 class="logo-resources no-margin"><a class="semi-bold unstyled" href="/resources">Resources</a></h1>
        <?php endif; ?>
      </div>
    <?php else: ?>
      <a class="show" href="/">
        <img class="align-middle" src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-blue-navigation.svg" alt="Vero logo blue navigation">
      </a>
    <?php endif; ?>
  </div>
  <?php $logo = ob_get_clean();

  ob_start();
  ?>
  <div class="js-resources-menu resources-menu flex">
    <?php if ( is_blog_post_or_guide_or_tutorial() ): ?>
      <ul class="menu resources-categories resources-categories-single">
        <li class="post-category">
          <?php get_primary_category(); ?>
        </li>

        <li class="caret">
          <svg width="6" height="9" xmlns="http://www.w3.org/2000/svg"><path d="M5.743 5.207L2.207 8.743A1 1 0 0 1 .793 7.329L3.62 4.5.793 1.672A1 1 0 1 1 2.207.258l3.536 3.535a1 1 0 0 1 0 1.414z" fill="#e1e1e1" fill-rule="nonzero"/></svg>
        </li>

        <li class="post-title">
          <span class="light"><?php echo get_the_title( $post_id ); ?></span>
        </li>
      </ul>
    <?php endif; ?>

    <ul class="menu resources-categories flex <?php if ( is_blog_post_or_guide_or_tutorial() ) { ?>lg-hide<? } ?>">
      <li>
        <a class="unstyled" href="/resources/category/news-updates">News &amp; Updates</a>
      </li>
      <li>
        <a class="unstyled" href="/resources/category/messaging-automation">Messaging &amp; Automation</a>
      </li>
      <li>
        <a class="unstyled" href="/resources/category/data-management">Data Management</a>
      </li>
      <li>
        <a class="unstyled" href="/resources/category/tutorials">Tutorials <sup class="pill pill--primary pill--small left-margin-xxs">New</sup></a>
      </li>
    </ul>

    <div class="flex items-center lg-left-margin-auto">
      <label class="search-toggle search-toggle-open" for="search-form">
        <svg class="show" width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M13.079 14.49A8.001 8.001 0 0 1 2.515 2.516 8 8 0 0 1 14.49 13.079l.045.042 4.95 4.95a1 1 0 0 1-1.415 1.414l-4.95-4.95a1.015 1.015 0 0 1-.042-.044zm-.665-2.076A6 6 0 1 0 3.93 3.93a6 6 0 0 0 8.485 8.485z" fill="#9D9D9D" fill-rule="nonzero"/></svg>
      </label>
      <input class="search-checkbox hide" id="search-form" type="checkbox">
      <?php get_search_form(); ?>
    </div>

    <div class="js-resources-header resources-header">
      <div class="resources-header-wrap">
        <button class="js-close-resources-subscribe-form resources-header-close hide lg-show">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M23.071 8.929a1 1 0 010 1.414L17.414 16l5.657 5.657a1 1 0 01-1.414 1.414L16 17.414l-5.657 5.657a1 1 0 01-1.414-1.414L14.586 16l-5.657-5.657a1 1 0 011.414-1.414L16 14.586l5.657-5.657a1 1 0 011.414 0z" fill="#9D9D9D"/></g></svg>
        </button>
        <div class="grid lg-items-center">
          <div class="col-main">
            <div class="js-subscribe-form-msg stack-xs">
              <h3 class="semi-bold">Insights, tips and tools for creating better customer messaging and product experiences</h3>
            </div>
          </div>
          <div class="col-aside">
            <form class="js-subscribe-form subscribe-form stack-xs"
              action="https://formkeep.com/f/642bee56a32f"
              accept-charset="UTF-8"
              enctype="multipart/form-data"
              method="POST">
              <input type="hidden" name="utf8" value="✓">

              <div class="flex">
                <input class="form-control" type="email" name="email">

                <button class="btn btn-success subscribe_to_blog" type="submit">Subscribe</button>
              </div>

              <span class="show annotation font-brand-gray-dark">We're committed to keeping your information safe. Read our <a class="underline-link" href="/privacy">Privacy Policy</a>.</span>
            </form>
          </div>
        </div>

        <a class="show annotation underline-link xs-hide top-margin-md" href="/">Back to Vero</a>
      </div>
    </div>

    <a class="btn btn-success hide lg-show track-start-trial" href="https://app.getvero.com/signup?from=blog_header" >Start a free trial</a>
  </div>
  <?php $resources_menu = ob_get_clean();

  ob_start();
  ?>
	  <div class="hide xs-show"><?php get_search_form(); ?></div>
  <?
	$search = ob_get_clean();

  ob_start();
  ?>
  <div class="js-nav-primary-toggle nav-primary-toggle border-radius-1 semi-bold">Menu</div>
  <?php $responsive_toggle = ob_get_clean();

  ob_start();
  ?>
  <label class="search-toggle search-toggle-open left-margin-auto lg-hide" for="search-form">
    <svg class="show" width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M13.079 14.49A8.001 8.001 0 0 1 2.515 2.516 8 8 0 0 1 14.49 13.079l.045.042 4.95 4.95a1 1 0 0 1-1.415 1.414l-4.95-4.95a1.015 1.015 0 0 1-.042-.044zm-.665-2.076A6 6 0 1 0 3.93 3.93a6 6 0 0 0 8.485 8.485z" fill="#9D9D9D" fill-rule="nonzero"/></svg>
  </label>
  <div class="js-category-toggle category-toggle">
    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg"><path d="M1 0h18a1 1 0 0 1 0 2H1a1 1 0 0 1 0-2zm0 6h18a1 1 0 0 1 0 2H1a1 1 0 0 1 0-2zm0 6h18a1 1 0 0 1 0 2H1a1 1 0 0 1 0-2z" fill="#9D9D9D" fill-rule="nonzero"/></svg>
  </div>
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

// Add description to submenu
function add_menu_description( $item_output, $item ) {
  if ( !empty( $item->description ) ) {
    $item_output = str_replace( $args->link_after . '</a>', '<div class="annotation light" style="flex: 1 1 100%">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
  }

  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_description', 10, 2 );

?>