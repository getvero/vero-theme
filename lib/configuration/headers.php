<?php

function add_logo_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];
  
  if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
    return $menu;
  
  ob_start();
  ?>
  <ul id="menu-marketing-navbar-left" class="menu">
    <li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>
    <li id="what-is-vero" class="menu-item menu-item-type-custom menu-item-object-custom"><span>Sweet ass emails!</span></li>
  </ul>
  <?php $logo = ob_get_clean();

  return $logo . $menu;
}

function add_blue_navbar_logic() {
  global $wp_query;
  if ( is_singular('api_docs')  ) {
    echo "<div id='blue-holder'><div class='spacer'></div>";
    wp_nav_menu( array(
      'theme_location' => 'blue-nav-left',
      'container_class' => 'blue-nav-menu left'
    ) );
    wp_nav_menu( array( 
      'theme_location' => 'api-languages',
      'container_class' => 'blue-nav-menu right' 
    ) );
    echo "</div><div class='spacer'></div>";
  } else if ( is_singular('help_docs') || is_tax('help_docs_categories') || is_page('help') ) {
    wp_nav_menu( array(
      'theme_location' => 'blue-nav-left',
      'container_class' => 'blue-nav-menu left'
    ) );
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
    if ( strtolower($menu_item->title) == 'docs' && ( is_post_type_archive('help_docs') || is_singular('help_docs') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'knowledge base' && ( is_post_type_archive('kb') || is_singular('kb') || is_tax('topic') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'api docs' && ( is_post_type_archive('api_docs') || is_singular('api_docs') ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'help' && ( is_singular('help_docs') || is_singular('help_docs_categories') || is_tax('help_docs_categories') || is_page('help')  ) ) {
      $classes[] = 'current-menu-item';
    } else if ( strtolower($menu_item->title) == 'tour' && ( is_page('features') || is_page('triggered-emails') || is_page('smart-newsletters') || is_page('external-attributes') || is_page('individual-contact-profiles')  ) ) {
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

?>