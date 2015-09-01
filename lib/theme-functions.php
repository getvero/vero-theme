<?php

# Add in custom resources and the like
include_once( CHILD_DIR . '/lib/post_types/guides.php' );          # Guides pages
include_once( CHILD_DIR . '/lib/post_types/help_docs.php' );       # Help docs archive and pages
include_once( CHILD_DIR . '/lib/post_types/jobs.php' );            # Jobs archive and pages
include_once( CHILD_DIR . '/lib/post_types/api.php' );             # API archive and pages

# include_once( CHILD_DIR . '/lib/custom_post_types/product_updates.php' ); # NEW Product updates

# Custom configurations
include_once( CHILD_DIR . '/lib/configuration/support.php' );
include_once( CHILD_DIR . '/lib/configuration/global.php' );

include_once( CHILD_DIR . '/lib/configuration/assets.php' );
include_once( CHILD_DIR . '/lib/configuration/blog.php' );
include_once( CHILD_DIR . '/lib/configuration/content.php' );
include_once( CHILD_DIR . '/lib/configuration/headers.php' );
include_once( CHILD_DIR . '/lib/configuration/footer.php' );
include_once( CHILD_DIR . '/lib/configuration/forms.php' );
include_once( CHILD_DIR . '/lib/configuration/tracking.php' );

function remove_titles () {
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
  remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
}

function customize_blog () {
  global $post;

  add_action( 'genesis_after_footer', 'hide_easy_slide_form');

  if (is_singular('post')) {

    remove_titles();
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title', 9 );
    add_action( 'genesis_after_entry_content', 'subscribe_after_content' );
    add_action( 'genesis_after_footer', 'add_post_tracking_code');
    add_action( 'genesis_after', 'scrolls_for_blog_posts');
    
    if ( get_post_meta($post->ID, 'post_style', true) == 'centered' ) {
      add_action( 'genesis_before_content', 'blog_post_featured_image', 8);
    } else {
      add_action( 'genesis_before_entry_content', 'blog_post_featured_image', 15);
    }

  } else if (is_singular('resources')) {

    remove_titles();

  } else if (is_singular('api_docs')) {

    remove_titles();
    remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
    remove_action( 'genesis_footer', 'genesis_do_footer' );
    remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
    add_action( 'genesis_after_footer', 'add_help_pages_tracking_code');

  } else if ( is_singular('help_docs') ) {

    remove_titles();
    add_action( 'genesis_before_entry_content', 'genesis_do_post_title' );
    add_action( 'genesis_before_entry_content', 'add_help_docs_breadcrumbs');
    add_action( 'genesis_before_footer', 'add_help_docs_footer');
    add_action( 'genesis_after_footer', 'add_help_pages_tracking_code');

  } else if (is_singular('guides')) {

    remove_titles();
    add_action( 'genesis_before_content', 'guides_featured_title', 9 );
    add_action( 'genesis_entry_header', 'guides_chapter_headers', 9);
    add_action( 'genesis_after_footer', 'add_post_tracking_code');

  } else if (is_post_type_archive('post')){

    add_action( 'genesis_after_footer', 'add_home_page_tracking_code');

  } else if (is_home() || is_category() || is_search() || is_author() ) {

  } 
}

?>