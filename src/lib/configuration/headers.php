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
          <svg class="align-middle" width="104" height="44" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M56.84 26.11c-.18.4-.375.73-.585.99-.21.26-.43.465-.66.615-.23.15-.465.25-.705.3-.24.05-.46.075-.66.075-.22 0-.445-.025-.675-.075-.23-.05-.46-.15-.69-.3-.23-.15-.45-.355-.66-.615-.21-.26-.405-.59-.585-.99l-4.38-10.23c-.16-.38-.24-.72-.24-1.02 0-.5.175-.91.525-1.23.35-.32.785-.48 1.305-.48.28 0 .585.085.915.255.33.17.615.575.855 1.215l3.6 9.3h.06l3.69-9.33c.24-.62.52-1.015.84-1.185.32-.17.62-.255.9-.255.52 0 .945.16 1.275.48.33.32.495.71.495 1.17 0 .1-.015.235-.045.405-.03.17-.095.375-.195.615l-4.38 10.29zm9.26-4.35a3.566 3.566 0 001.32 2.535c.38.31.81.555 1.29.735.48.18.98.27 1.5.27.76 0 1.385-.11 1.875-.33.49-.22.965-.52 1.425-.9.26-.22.48-.36.66-.42.18-.06.37-.09.57-.09.4 0 .74.13 1.02.39s.42.61.42 1.05c0 .16-.04.36-.12.6-.08.24-.24.47-.48.69a6.534 6.534 0 01-2.325 1.485c-.85.31-1.855.465-3.015.465-1.12 0-2.15-.175-3.09-.525a7.292 7.292 0 01-2.445-1.485 6.693 6.693 0 01-1.62-2.355c-.39-.93-.585-1.985-.585-3.165 0-1.16.195-2.215.585-3.165.39-.95.925-1.76 1.605-2.43a7.18 7.18 0 012.415-1.56A8.082 8.082 0 0170.12 13c.86 0 1.68.125 2.46.375s1.47.63 2.07 1.14c.6.51 1.105 1.155 1.515 1.935.41.78.685 1.7.825 2.76.02.16.035.295.045.405.01.11.015.225.015.345 0 .64-.165 1.1-.495 1.38-.33.28-.795.42-1.395.42H66.1zm7.38-2.58c0-.46-.065-.9-.195-1.32-.13-.42-.335-.79-.615-1.11a3.002 3.002 0 00-1.065-.765c-.43-.19-.935-.285-1.515-.285-1.08 0-1.995.325-2.745.975-.75.65-1.165 1.485-1.245 2.505h7.38zm8.98 6.9c0 .42-.065.765-.195 1.035-.13.27-.29.475-.48.615s-.39.235-.6.285c-.21.05-.385.075-.525.075-.16 0-.34-.025-.54-.075-.2-.05-.395-.145-.585-.285-.19-.14-.35-.345-.48-.615s-.195-.615-.195-1.035V15.07c0-.4.065-.725.195-.975s.285-.445.465-.585c.18-.14.365-.235.555-.285.19-.05.355-.075.495-.075s.31.025.51.075c.2.05.39.145.57.285.18.14.335.335.465.585.13.25.195.575.195.975v.75h.06c.28-.78.755-1.445 1.425-1.995A3.557 3.557 0 0186.12 13c.54 0 .985.135 1.335.405s.525.665.525 1.185c0 .46-.15.865-.45 1.215-.3.35-.8.525-1.5.525-1.14 0-2.02.385-2.64 1.155-.62.77-.93 1.755-.93 2.955v5.64zm21.44-5.52c0 1.14-.205 2.18-.615 3.12a7.388 7.388 0 01-1.665 2.415c-.7.67-1.53 1.195-2.49 1.575-.96.38-1.98.57-3.06.57s-2.1-.19-3.06-.57a7.604 7.604 0 01-2.49-1.575 7.388 7.388 0 01-1.665-2.415c-.41-.94-.615-1.98-.615-3.12 0-1.14.205-2.175.615-3.105a7.26 7.26 0 011.665-2.385 7.34 7.34 0 012.49-1.53c.96-.36 1.98-.54 3.06-.54s2.1.18 3.06.54c.96.36 1.79.87 2.49 1.53a7.26 7.26 0 011.665 2.385c.41.93.615 1.965.615 3.105zm-3.66 0a5.61 5.61 0 00-.255-1.665 4.654 4.654 0 00-.765-1.485c-.34-.44-.77-.795-1.29-1.065-.52-.27-1.14-.405-1.86-.405-.72 0-1.34.135-1.86.405s-.95.625-1.29 1.065c-.34.44-.595.935-.765 1.485a5.61 5.61 0 000 3.345c.17.56.425 1.06.765 1.5.34.44.77.8 1.29 1.08s1.14.42 1.86.42c.72 0 1.34-.14 1.86-.42.52-.28.95-.64 1.29-1.08.34-.44.595-.94.765-1.5.17-.56.255-1.12.255-1.68z" fill="#000"/><g fill-rule="nonzero"><path d="M11.128 5.956l6.622 11.338L11.71 27.64a8.935 8.935 0 00-.742 1.62L.8 11.85C-.847 9.03.13 5.416 2.978 3.79c2.852-1.628 6.5-.66 8.15 2.166z" fill="#2297F4"/><path d="M34.834 17.666l-10.15 17.38c-1.611 2.759-5.151 3.755-7.978 2.26l-.193-.106a5.856 5.856 0 01-2.156-8.049l6.602-11.307h12.068c.62 0 1.223-.061 1.807-.178z" fill="#2936A3"/><path d="M33.027 3.032c3.222 0 5.865 2.533 5.97 5.7l.003.22c0 3.23-2.672 5.87-5.973 5.87l-13.191-.001-6.06-10.376a8.988 8.988 0 00-1.02-1.415l20.271.002z" fill="#17DA88"/></g></g></svg>
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