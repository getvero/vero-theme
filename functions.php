<?php

# Custom config files
include_once( 'lib/configuration/assets.php' );
include_once( 'lib/configuration/archive.php' );
include_once( 'lib/configuration/blog.php' );
include_once( 'lib/configuration/release_notes.php' );
include_once( 'lib/configuration/posts.php' );
include_once( 'lib/configuration/search.php' );
include_once( 'lib/configuration/global.php' );
include_once( 'lib/configuration/headers.php' );
include_once( 'lib/configuration/tracking.php' );
include_once( 'lib/configuration/footers.php' );

# Add in custom resources and the like
include_once( 'lib/post_types/guides.php' );         // Guides pages
include_once( 'lib/post_types/tutorials.php' );      // Tutorials pages
include_once( 'lib/post_types/release_notes.php' );  // Release Notes

add_action('genesis_setup','genesischild_theme_setup', 15);

function genesischild_theme_setup() {
  define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );

  add_theme_support( 'html5' );
  add_theme_support( 'xhtml' );
  add_theme_support( 'genesis-responsive-viewport' );
  add_theme_support( 'genesis-menus', array(
    'primary' => __( 'Navigation Menu', 'genesis' )
  ) );

  # Remove sidebars
  remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
  remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

  # Conditionally load Disqus
  function filter_dsq_can_load( $script_name ) {
    if ( !is_single() && ( 'count' === $script_name || 'embed' === $script_name )) {
      return false;
    }
    return true;
  }
  add_filter( 'dsq_can_load', 'filter_dsq_can_load' );

  add_action( 'wp_enqueue_scripts', 'add_js' );
  add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );

  add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );

  # Remove header
  remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
  remove_action( 'genesis_header', 'genesis_do_header' );
  remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

  add_filter( 'body_class', 'add_body_classes' );
  add_filter('wp_get_attachment_url', 'my_wp_get_attachment_url_ssl');
  add_filter ( 'genesis_edit_post_link' , '__return_false' );

  unregister_sidebar( 'sidebar' );
  unregister_sidebar( 'sidebar-alt' );
  unregister_sidebar( 'sidebar-footer' );
  unregister_sidebar( 'header-right' );
  unregister_nav_menu( 'header-right' );

  # Add custom types
  add_action( 'init', 'create_release_notes_post_type' );
  add_action( 'init', 'create_guides_post_type' );
  add_action( 'init', 'create_tutorials_post_type' );
  add_filter( 'pre_get_posts', 'add_custom_types' );
  // add_filter( 'post_link', 'change_url', 10, 3 );

  add_post_type_support( 'page', 'excerpt' );

  # Navbars and footers
  register_nav_menu('terms-and-policies' , __( 'Terms and Policies'));

  # Remove Block Library styles
  add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
  function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
  }

  # Remove genesis footer
  remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
  remove_action( 'genesis_footer', 'genesis_do_footer' );
  remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

  add_filter ( 'genesis_prev_link_text' , 'custom_prev_page_link' );
  add_filter ( 'genesis_next_link_text' , 'custom_next_page_link' );

  add_filter( 'genesis_pre_get_option_site_layout', 'force_full_width_on_posts' );
  add_action( 'genesis_after_content_sidebar_wrap', 'blog_cta' );
  add_action( 'genesis_footer', 'custom_footer' );
  add_filter( 'wp_nav_menu', 'add_logo_and_menu_toggle_to_navbar', 10, 2 );

  // add_action( 'genesis_after_header', 'add_categories_and_search' );
  add_action( 'genesis_before_content', 'add_latest_title' );
  add_action( 'genesis_before_loop', 'add_featured_post_to_category' );

  # Remove entry meta on articles
  remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

  # Move featured image above entry title on archives
  add_action( 'genesis_before_entry', 'move_featured_image' );

  # Customize entry header
  // add_action( 'genesis_before_loop', 'change_post_structure' );
  // add_action( 'genesis_entry_header', 'change_post_structure' );
  add_action( 'genesis_entry_header', 'add_featured_image_to_post', 3 );

  # Customize entry meta
  add_action( 'genesis_entry_header', 'genesis_post_info', 9 );
  add_filter( 'genesis_post_info', 'change_post_info', 15 );

  # Add author after entry title on single posts
  add_action( 'genesis_entry_header', 'add_author' );

  # Category page
  add_action( 'genesis_entry_footer', 'add_custom_read_more_link' );

  # Post Page
  add_action( 'genesis_before_content', 'generate_table_of_contents' );
  add_action( 'genesis_after_content', 'add_shares_to_post', 1 );
  // add_action( 'genesis_entry_footer', 'post_remove_footer' );
  add_filter( 'get_image_tag_class', '__return_empty_string' );

  # Remove entry footer on post page
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
  remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
  remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

  # Remove entry content on archives
  add_action( 'genesis_before_entry' , 'remove_archives_entry_content' );
  add_action( 'genesis_entry_content', 'custom_excerpt_text' );

  # Excerpt length for category/search page
  add_filter( 'excerpt_length', 'custom_excerpt_length' );
  add_filter( 'excerpt_more', 'new_excerpt_more' );

  # Remove comments
  add_action( 'genesis_after_entry', 'remove_comments', 0 );

  # Add categories and tags to pages
  function myplugin_settings() {
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
  }
  // Add to the admin_init hook of your theme functions.php file
  add_action( 'init', 'myplugin_settings' );

  # Search
  add_action( 'genesis_before', 'remove_search_title' );
  add_filter( 'genesis_search_text', 'change_search_form_placeholder' );
  add_filter( 'get_search_form', 'change_search_form_type' );
  add_filter( 'genesis_search_form', 'my_search_button' );
  function my_search_button($form) {
    $document = new DOMDocument();
    $document->loadHTML($form);
    $xpath = new DOMXPath($document);
    $input = $xpath->query('//input[@type="submit"]');

    $label = $document->createElement('label');
    $label->setAttribute('class', 'search-toggle search-toggle-close');
    $label->setAttribute('for', 'search-form');

    // use a helper to load the HTML into a string
    $helper = new DOMDocument();
    $helper->loadXML('<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M23.071 8.929a1 1 0 010 1.414L17.414 16l5.657 5.657a1 1 0 01-1.414 1.414L16 17.414l-5.657 5.657a1 1 0 01-1.414-1.414L14.586 16l-5.657-5.657a1 1 0 011.414-1.414L16 14.586l5.657-5.657a1 1 0 011.414 0z" fill="#9D9D9D"/></g></svg>');

    // now the magic!
    // import the document node of the $helper object deeply (true)
    // into the $div and append as child.
    $label->appendChild($document->importNode($helper->documentElement, true));

    // add the div to the $doc
    $document->appendChild($label);

    if ($input->length > 0) {
      $input->item(0)->parentNode->insertBefore($label, $input->item(0));
    }

    $document->removeChild($document->doctype);
    $document->replaceChild($document->firstChild->firstChild->firstChild, $document->firstChild);
    $form_html = $document->saveHTML();

    return $form_html;
  }

  # Remove Genesis SEO Settings menu link
  remove_theme_support('genesis-seo-settings-menu');

  # Customise release notes
  add_action( 'genesis_before', 'remove_elements_release_notes' );
  add_action( 'template_redirect', 'single_release_note_redirect' );

  # Customise resources home page
  add_action( 'genesis_before_loop', 'change_home_loop' );

  add_action( 'genesis_after_content_sidebar_wrap', 'be_related_posts_by_category' );

  # Move pagination
  add_action ( 'genesis_after_entry', 'move_pagination' );

  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'category-thumb', 387, 9999 ); // 300 pixels wide (and unlimited height)
  }

  # Function to remove version numbers
  add_filter( 'style_loader_src', 'remove_ver_css_js', 9999 );
  add_filter( 'script_loader_src', 'remove_ver_css_js', 9999 );
  function remove_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
      $src = remove_query_arg( 'ver', $src );
    return $src;
  }

  # Remove block library as we don't use the Gutenberg editor
  add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );
  function remove_wp_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
  }

  # Defer all scripts
  add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
  function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
  }

  # Add Recaptcha script to footer
  // add_action( 'wp_footer', 'move_recaptcha_script' );
  function move_recaptcha_script() {
    if ( is_blog() ) {
      ?>
        <script src="https://www.google.com/recaptcha/api.js?render=6LfUD_YUAAAAAO5FOQgHwsQSEMzOZYEPHEo_DZRX" defer async></script>
      <?php
    }
  }

  # Add banner
  add_action( 'genesis_before_header', 'blog_banner' );
  add_filter( 'body_class', 'add_body_class_blog_banner' );

  # Change OG type
  add_filter( 'wpseo_opengraph_type', 'yoast_change_opengraph_type', 10, 1 );
  function yoast_change_opengraph_type( $type ) {
    if ( is_page('drag-and-drop') || is_page('pricing') ) {
      return 'website';
    } else {
      return $type;
    }
  }

  # Add banner-name and element-position to start a trial button
  add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
    if ( 'track-start-trial' === $item->classes[0]  ) {
      $atts['banner-name'] = 'Start a free trial';
      $atts['element-position'] = 'nav';
    }

    return $atts;
  }, 10, 3 );

}

?>