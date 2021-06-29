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
  <div class="flex items-center" id="logo" style="margin-top: -2px;">
    <?php if ( is_404() ): ?>
      <a class="show" href="https://www.getvero.com/?from=404-pages">
    <? else: ?>
      <a class="show" href="/">
    <?php endif; ?>
      <svg class="show" xmlns="http://www.w3.org/2000/svg" width="95" height="20"><defs><linearGradient id="a" x1="104.746%" x2="-15.926%" y1="46.775%" y2="52.407%"><stop offset="0%" stop-color="#2936A3"/><stop offset="100%" stop-color="#162286"/></linearGradient><linearGradient id="b" x1="-19.201%" x2="95.825%" y1="57.1%" y2="36.06%"><stop offset="0%" stop-color="#2297F4"/><stop offset="100%" stop-color="#31A0F9"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><path fill="url(#a)" fill-rule="nonzero" d="M27.86 10.548a6.205 6.205 0 000-8.738 6.117 6.117 0 00-8.687 0l-4.344 4.37 4.33 4.355.014.013a6.117 6.117 0 008.679.008l.007-.008z"/><path fill="#17DA88" fill-rule="nonzero" d="M6.143 14.918l-4.344-4.37a6.205 6.205 0 010-8.738 6.117 6.117 0 018.687 0l4.344 4.37-8.687 8.738z"/><path fill="url(#b)" fill-rule="nonzero" d="M27.86 10.548a6.117 6.117 0 01-8.687 0l-.014-.013-4.33-4.356-8.686 8.739 2.481 2.497a8.738 8.738 0 0012.41 0l6.825-6.867z"/><path fill="#16184B" d="M46.27 15.716c-.187.416-.389.76-.606 1.03-.218.271-.446.485-.684.64-.238.157-.481.261-.73.313a3.36 3.36 0 01-.683.078c-.228 0-.461-.026-.7-.078a2.14 2.14 0 01-.714-.312 3.001 3.001 0 01-.683-.64 4.728 4.728 0 01-.606-1.031L36.33 5.066c-.166-.397-.249-.75-.249-1.063 0-.52.181-.947.544-1.28.362-.334.813-.5 1.351-.5.29 0 .606.088.948.265.341.177.636.599.885 1.265l3.728 9.683h.062l3.82-9.714c.25-.645.54-1.057.87-1.234.332-.177.643-.265.933-.265.538 0 .978.166 1.32.5.342.333.513.739.513 1.218 0 .104-.016.244-.047.421s-.098.39-.202.64l-4.536 10.714zm9.588-4.53a3.728 3.728 0 001.367 2.64c.394.323.839.578 1.336.765a4.365 4.365 0 001.553.281c.787 0 1.434-.114 1.942-.343.507-.23.999-.541 1.475-.937.27-.23.497-.375.684-.437.186-.063.383-.094.59-.094.414 0 .766.135 1.056.406.29.27.435.635.435 1.093 0 .167-.041.375-.124.625-.083.25-.249.489-.497.718-.725.708-1.528 1.223-2.408 1.546-.88.323-1.92.484-3.122.484-1.16 0-2.226-.182-3.2-.546a7.545 7.545 0 01-2.531-1.546c-.715-.667-1.274-1.484-1.678-2.452-.404-.968-.606-2.067-.606-3.295 0-1.208.202-2.306.606-3.295.404-.99.958-1.833 1.662-2.53a7.429 7.429 0 012.5-1.625 8.328 8.328 0 013.123-.577c.89 0 1.74.13 2.547.39.808.26 1.522.656 2.144 1.187.621.53 1.144 1.202 1.568 2.015.425.812.71 1.77.855 2.873.02.167.036.307.046.422.01.114.016.234.016.359 0 .666-.17 1.145-.513 1.437-.341.291-.823.437-1.444.437h-9.382zM63.5 8.502c0-.48-.067-.937-.202-1.374a3.15 3.15 0 00-.637-1.156 3.11 3.11 0 00-1.102-.797c-.446-.197-.969-.296-1.57-.296-1.117 0-2.065.338-2.842 1.015-.776.677-1.206 1.546-1.289 2.608H63.5zm9.299 7.184c0 .437-.067.796-.202 1.077-.135.281-.3.495-.497.64a1.708 1.708 0 01-.621.297 2.423 2.423 0 01-.544.078c-.166 0-.352-.026-.56-.078a1.726 1.726 0 01-.605-.297c-.197-.145-.362-.359-.497-.64s-.202-.64-.202-1.077V4.222c0-.417.067-.755.202-1.015.135-.26.295-.464.482-.61a1.6 1.6 0 01.574-.296c.197-.052.368-.078.513-.078.145 0 .32.026.528.078.207.052.404.15.59.297.187.145.347.348.482.609.134.26.202.598.202 1.015v.78h.062a4.712 4.712 0 011.475-2.076 3.672 3.672 0 012.408-.86c.559 0 1.02.141 1.382.422.363.281.544.693.544 1.234 0 .479-.155.9-.466 1.265-.31.364-.829.547-1.553.547-1.18 0-2.092.4-2.734 1.202-.642.802-.963 1.827-.963 3.077v5.872zM95 9.938c0 1.186-.212 2.27-.637 3.248-.424.979-1 1.817-1.724 2.514a7.868 7.868 0 01-2.578 1.64 8.488 8.488 0 01-3.169.593 8.488 8.488 0 01-3.168-.593 7.868 7.868 0 01-2.579-1.64 7.695 7.695 0 01-1.724-2.514c-.425-.979-.637-2.062-.637-3.248 0-1.187.212-2.265.637-3.233a7.56 7.56 0 011.724-2.483 7.594 7.594 0 012.579-1.593 8.906 8.906 0 013.168-.562c1.118 0 2.175.187 3.169.562a7.594 7.594 0 012.578 1.593 7.56 7.56 0 011.724 2.483c.425.968.637 2.046.637 3.233zm-3.79 0c0-.584-.088-1.161-.264-1.734a4.855 4.855 0 00-.792-1.546 3.984 3.984 0 00-1.336-1.109c-.538-.28-1.18-.421-1.926-.421-.745 0-1.388.14-1.926.421-.538.281-.984.65-1.336 1.109a4.855 4.855 0 00-.792 1.546 5.866 5.866 0 000 3.483c.176.583.44 1.103.792 1.561.352.458.798.833 1.336 1.125.538.291 1.18.437 1.926.437s1.388-.146 1.926-.437a4.153 4.153 0 001.336-1.125c.352-.458.616-.978.792-1.561a6.02 6.02 0 00.264-1.75z"/></g></svg>
    </a>

    <div class="divider"></div>

    <?php if( is_single() ): ?>
      <a class="logo-resources semi-bold unstyled" href="/resources">Resources</a>
    <?php else: ?>
      <h1 class="logo-resources no-margin"><a class="semi-bold unstyled" href="/resources">Resources</a></h1>
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