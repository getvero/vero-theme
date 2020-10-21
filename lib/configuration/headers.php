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
        <?php if ( is_404() ): ?>

        <a class="show" href="https://www.getvero.com/?from=404-pages">

        <? else: ?>

        <a class="show" href="/">

        <?php endif; ?>

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
      <?php if ( is_404() ): ?>

      <a class="show" href="https://www.getvero.com/?from=404-pages">

      <? else: ?>

      <a class="show" href="/">

      <?php endif; ?>

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

    <a class="btn btn--success hide lg-show track-start-trial" banner-name="Start a free trial" element-position="nav" href="https://app.getvero.com/signup?from=blog_header">Start a free trial</a>
  </div>
  <?php $resources_menu = ob_get_clean();

  ob_start();
  ?>
	  <div class="hide xs-show"><?php get_search_form(); ?></div>
  <?
	$search = ob_get_clean();

  ob_start();
  ?>
  <input class="nav-primary-check hide" id="nav-primary-toggle" type="checkbox">
  <label class="nav-primary-label show lg-hide z-999 left-margin-auto" for="nav-primary-toggle">
    <svg class="align-middle" width="64" height="32" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M25 21a1 1 0 010 2H7a1 1 0 010-2h18zm0-6a1 1 0 010 2H7a1 1 0 010-2h18zm0-6a1 1 0 010 2H7a1 1 0 010-2h18z" fill="#9D9D9D"/><g><path fill="none" d="M32 0h32v32H32z"/><path d="M55.071 8.929a1 1 0 010 1.414L49.414 16l5.657 5.657a1 1 0 01-1.414 1.414L48 17.414l-5.657 5.657a1 1 0 01-1.414-1.414L46.586 16l-5.657-5.657a1 1 0 011.414-1.414L48 14.586l5.657-5.657a1 1 0 011.414 0z" fill="#9D9D9D"/></g></g></svg>
  </label>
  <?php $responsive_toggle = ob_get_clean();

  ob_start();
  ?>
  <label class="search-toggle search-toggle-open left-margin-auto lg-hide" for="search-form">
    <svg class="show" width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M13.079 14.49A8.001 8.001 0 0 1 2.515 2.516 8 8 0 0 1 14.49 13.079l.045.042 4.95 4.95a1 1 0 0 1-1.415 1.414l-4.95-4.95a1.015 1.015 0 0 1-.042-.044zm-.665-2.076A6 6 0 1 0 3.93 3.93a6 6 0 0 0 8.485 8.485z" fill="#9D9D9D" fill-rule="nonzero"/></svg>
  </label>
  <div class="js-category-toggle category-toggle">
    <svg class="align-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M25 21a1 1 0 010 2H7a1 1 0 010-2h18zm0-6a1 1 0 010 2H7a1 1 0 010-2h18zm0-6a1 1 0 010 2H7a1 1 0 010-2h18z" fill="#9D9D9D"/></g></svg>
  </div>
  <?php $category_toggle = ob_get_clean();

  if ( is_blog_archive() || is_single() ) {
    return $logo . $resources_menu . $category_toggle;
  } else {
    return $logo . $responsive_toggle . $menu;
  }
}

// Add description to submenu
function add_menu_description( $item_output, $item ) {
  if ( !empty( $item->description ) ) {
    $item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-desc annotation light">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
  }

  return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_description', 10, 2 );

?>