<?php

function add_classes_to_navbar( $args) {
  $classes = ' menu resources-categories flex';
  $args['menu_class'] .= $classes;
  return $args;
}

function add_logo_and_menu_toggle_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];

  // Start capturing the logo
  ob_start();
  ?>
  <div class="flex items-center" id="logo">
    <?php if ( is_404() ): ?>
      <a class="show" href="https://www.getvero.com/?from=404-pages">
    <? else: ?>
      <a class="show" href="/">
    <?php endif; ?>
      <svg class="align-middle" width="115" height="39" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M62.7 25.259c-.2.445-.417.812-.65 1.101-.233.29-.478.517-.733.684a2.284 2.284 0 01-.783.334 3.614 3.614 0 01-.733.083c-.245 0-.495-.028-.75-.083a2.302 2.302 0 01-.767-.334 3.216 3.216 0 01-.733-.684 5.052 5.052 0 01-.65-1.101l-4.866-11.377c-.177-.422-.266-.8-.266-1.134 0-.556.194-1.012.583-1.368.389-.356.872-.534 1.45-.534.31 0 .65.095 1.016.284.367.189.683.64.95 1.351l4 10.342h.066l4.099-10.375c.267-.69.577-1.13.933-1.318.356-.19.689-.284 1-.284.577 0 1.05.178 1.416.534.367.356.55.79.55 1.301 0 .111-.017.262-.05.45a3.36 3.36 0 01-.217.684L62.7 25.26zm10.286-4.838a3.97 3.97 0 001.467 2.82c.422.344.9.617 1.433.817.533.2 1.088.3 1.666.3.844 0 1.539-.122 2.083-.367a6.98 6.98 0 001.583-1c.289-.245.533-.401.733-.468.2-.067.411-.1.633-.1.445 0 .822.145 1.133.434.311.289.467.678.467 1.168 0 .178-.044.4-.133.667-.09.267-.267.523-.534.767-.777.756-1.638 1.307-2.582 1.652-.945.344-2.061.517-3.35.517-1.244 0-2.388-.195-3.432-.584a8.098 8.098 0 01-2.716-1.652c-.767-.711-1.367-1.584-1.8-2.619-.433-1.034-.65-2.207-.65-3.52 0-1.29.217-2.463.65-3.52.433-1.056 1.028-1.956 1.783-2.702a7.973 7.973 0 012.683-1.734c1.033-.412 2.15-.618 3.35-.618a8.89 8.89 0 012.732.417c.866.278 1.633.701 2.3 1.268.666.567 1.227 1.285 1.682 2.152.456.867.761 1.89.917 3.07.022.177.039.328.05.45.01.122.016.25.016.384 0 .711-.183 1.223-.55 1.534-.366.312-.883.467-1.55.467H72.987zm8.199-2.869c0-.511-.073-1-.217-1.468a3.36 3.36 0 00-.683-1.234 3.336 3.336 0 00-1.183-.851c-.478-.211-1.039-.317-1.683-.317-1.2 0-2.216.361-3.05 1.084-.833.723-1.294 1.652-1.383 2.786h8.199zm9.975 7.674c0 .467-.072.85-.216 1.15-.145.3-.323.529-.534.685a1.837 1.837 0 01-.666.317 2.604 2.604 0 01-.583.083c-.178 0-.378-.028-.6-.083a1.855 1.855 0 01-.65-.317c-.211-.156-.389-.384-.533-.684-.145-.3-.217-.684-.217-1.151V12.98c0-.444.072-.806.217-1.084.144-.278.316-.495.516-.65.2-.156.406-.262.617-.317.21-.056.394-.084.55-.084.155 0 .344.028.566.084.222.055.433.16.633.316s.372.373.517.651c.144.278.217.64.217 1.084v.835h.066a5.034 5.034 0 011.583-2.22 3.95 3.95 0 012.583-.917c.6 0 1.094.15 1.483.45.389.301.583.74.583 1.319 0 .511-.166.962-.5 1.35-.333.39-.888.585-1.666.585-1.266 0-2.244.428-2.933 1.284-.688.856-1.033 1.952-1.033 3.286v6.273zm23.817-6.14c0 1.269-.228 2.425-.683 3.47a8.205 8.205 0 01-1.85 2.686 8.433 8.433 0 01-2.766 1.752 9.138 9.138 0 01-3.399.634c-1.2 0-2.333-.212-3.399-.634a8.433 8.433 0 01-2.766-1.752 8.213 8.213 0 01-1.85-2.685c-.455-1.046-.683-2.202-.683-3.47 0-1.268.228-2.419.683-3.453a8.07 8.07 0 011.85-2.653 8.139 8.139 0 012.766-1.701c1.066-.4 2.199-.6 3.399-.6 1.2 0 2.333.2 3.399.6 1.067.4 1.989.967 2.766 1.701a8.062 8.062 0 011.85 2.653c.455 1.034.683 2.185.683 3.453zm-4.066 0a6.24 6.24 0 00-.283-1.85 5.174 5.174 0 00-.85-1.652 4.26 4.26 0 00-1.433-1.185c-.577-.3-1.266-.45-2.066-.45-.8 0-1.488.15-2.066.45a4.27 4.27 0 00-1.433 1.185 5.174 5.174 0 00-.85 1.651 6.24 6.24 0 000 3.72c.189.623.472 1.179.85 1.668.378.49.855.89 1.433 1.201.578.312 1.266.467 2.066.467.8 0 1.489-.155 2.066-.467a4.439 4.439 0 001.433-1.2c.378-.49.661-1.046.85-1.669a6.404 6.404 0 00.283-1.868z" fill="#000"/><path d="M3.086.82C6.045-.87 9.828.137 11.539 3.068l6.837 11.72c.24.412.24.922 0 1.335l-6.193 10.614-.013.023a.659.659 0 01-.544.338c-.214.013-.387-.073-.479-.23L.83 9.179C-.877 6.255.135 2.508 3.086.82z" fill="#2297F4"/><path d="M36.304 16.508a.656.656 0 01.54.303c.12.18.13.375.039.533l-10.285 17.63c-1.67 2.86-5.34 3.897-8.271 2.348l-.21-.115a6.075 6.075 0 01-2.229-8.344l6.823-11.697a1.325 1.325 0 011.144-.658h12.449z" fill="#2936A3"/><path d="M15.243.942a.65.65 0 01-.008-.611c.096-.191.256-.297.435-.297l20.577.002c3.345 0 6.08 2.63 6.19 5.908l.003.236c-.002 3.342-2.765 6.083-6.193 6.083h-13.64c-.47 0-.906-.25-1.143-.658L15.244.942z" fill="#17DA88"/></svg>
    </a>

    <div class="divider"></div>

    <?php if( is_single() ): ?>
      <a class="logo-resources semi-bold unstyled" href="/resources" style="margin-top: -3px">Resources</a>
    <?php else: ?>
      <h1 class="logo-resources no-margin" style="margin-top: -3px"><a class="semi-bold unstyled" href="/resources">Resources</a></h1>
    <?php endif; ?>

  </div>
  <?php $logo = ob_get_clean();

  // Start capturing the breadcrumb
  ob_start(); ?>
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
  <?php $breadcrumb = ob_get_clean();

  // Start capturing the search and CTA
  ob_start(); ?>
    <div class="flex items-center lg-left-margin-auto">
      <label class="search-toggle search-toggle-open" for="search-form">
        <svg class="show" width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M13.079 14.49A8.001 8.001 0 0 1 2.515 2.516 8 8 0 0 1 14.49 13.079l.045.042 4.95 4.95a1 1 0 0 1-1.415 1.414l-4.95-4.95a1.015 1.015 0 0 1-.042-.044zm-.665-2.076A6 6 0 1 0 3.93 3.93a6 6 0 0 0 8.485 8.485z" fill="#9D9D9D" fill-rule="nonzero"/></svg>
      </label>
      <input class="search-checkbox hide" id="search-form" type="checkbox">
      <?php get_search_form(); ?>
    </div>

    <a class="btn btn--success hide lg-show track-button-shown track-button-clicked" tracking-object-name="Start messaging for free" tracking-element-position="nav" tracking-product-name="vero-newsletters" href="https://www.getvero.com/newsletters/?from=blog_header">Start messaging for free</a>
  <?php $search_and_cta = ob_get_clean();

  // Hide buttons for search and hamburger
  ob_start(); ?>
  <label class="search-toggle search-toggle-open left-margin-auto lg-hide" for="search-form">
    <svg class="show" width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M13.079 14.49A8.001 8.001 0 0 1 2.515 2.516 8 8 0 0 1 14.49 13.079l.045.042 4.95 4.95a1 1 0 0 1-1.415 1.414l-4.95-4.95a1.015 1.015 0 0 1-.042-.044zm-.665-2.076A6 6 0 1 0 3.93 3.93a6 6 0 0 0 8.485 8.485z" fill="#9D9D9D" fill-rule="nonzero"/></svg>
  </label>
  <div class="js-category-toggle category-toggle">
    <svg class="align-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><defs/><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M25 21a1 1 0 010 2H7a1 1 0 010-2h18zm0-6a1 1 0 010 2H7a1 1 0 010-2h18zm0-6a1 1 0 010 2H7a1 1 0 010-2h18z" fill="#9D9D9D"/></g></svg>
  </div>
  <?php $category_toggle = ob_get_clean();

  return $logo . '<div class="js-resources-menu resources-menu flex">' . $menu . $search_and_cta . '</div>' . $category_toggle;
}

?>