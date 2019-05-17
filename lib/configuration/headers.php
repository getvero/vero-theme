<?php

function add_logo_and_menu_toggle_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];

  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;

  ob_start();
  ?>
  <ul class="menu" id="menu-marketing-navbar-left">
    <li class="menu-item menu-item-type-custom menu-item-object-custom" id="logo" >
      <a href="https://www.getvero.com">
        <?php if( is_blog_archive() || is_single() ) : ?>
          <img src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-white.svg" alt="Vero logo white navigation">
        <?php else : ?>
          <img src="/wp-content/themes/vero/assets/dist/images/logo/vero-logo-blue-navigation.svg" alt="Vero logo blue navigation">
        <?php endif; ?>
      </a>
    </li>
  </ul>
  <?php $logo = ob_get_clean();


  ob_start();
	get_search_form();
	$search = ob_get_clean();

  ob_start();
  ?>
  <div class="js-nav-primary-toggle nav-primary-toggle border-radius-1 semi-bold">Menu</div>
  <?php $responsive_toggle = ob_get_clean();

  ob_start();
  ?>
  <div class="js-category-toggle category-toggle left-margin-tiny border-radius-1 semi-bold font-white">Menu</div>
  <?php $category_toggle = ob_get_clean();

  if ( is_blog_archive() || is_single() ) {
    return $logo . '<div class="flex items-center left-margin-auto">'.  $search . $category_toggle . '</div>';
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