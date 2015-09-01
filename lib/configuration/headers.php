<?php

function add_logo_to_navbar($menu, $args) {
  $args = (array)$args;
  $useragent=$_SERVER['HTTP_USER_AGENT'];
  
  if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
    $logo = "";
  } else {
    if ( 'primary' !== $args['theme_location'] && 'blog-secondary-nav-menu' !== $args['theme_location'] )
      return $menu;
    ob_start();
    echo '<li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>';
    echo '<li id="what-is-vero" class="menu-item menu-item-type-custom menu-item-object-custom"><span>Data-driven email marketing software</span></li>';
    $logo = ob_get_clean();
  }

  if( $args['theme_location'] == 'blog-secondary-nav-menu' )
    $search  = "<li id='search' class='menu-item menu-item-type-custom'>"."<form><div class='form-group'><input type='text' id='st-search-input' class='st-search-input form-control' autocomplete='off' autocorrect='off' autocapitalize='off' style='outline: none;'></div></form>"."</li>";
  
  return $logo . $menu . $search;
}

function add_blue_navbar_logic() {
  global $wp_query;
  if ( is_singular('api_docs')  ) {
    echo "<div id='blue-holder'><div class='spacer'></div>";
    wp_nav_menu( array(
      'theme_location' => 'third-menu-docs',
      'container_class' => 'blue-nav-menu left'
    ) );
    wp_nav_menu( array( 
      'menu' => 'api-docs-languages',
      'container_class' => 'blue-nav-menu right' 
    ) );
    echo "</div><div class='spacer'></div>";
  } else if (is_page('faq') || is_singular('campaigns') || is_post_type_archive('campaigns') || is_singular('help_docs') || is_tax('help_docs_categories') || is_page('help') || is_post_type_archive('product_updates')) {
    wp_nav_menu( array(
      'theme_location' => 'third-menu-docs',
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