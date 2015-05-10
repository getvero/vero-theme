<?php
/*
Template Name: Help Docs Category
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Custom post format
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');
function custom_excerpt() {
  $post = get_post();
  ?>
      <p>
        <a href="<?php echo get_permalink(); ?>" class="well job">
          <?php echo get_the_title(); ?>
        </a>
      </p>
  <?php
}

add_action( 'genesis_before_loop', 'add_crumbs_and_header' );
function add_crumbs_and_header() {
  echo add_help_docs_categories_breadcrumbs();
}

function add_help_docs_categories_breadcrumbs(){
  global $wp_query;
  $term = $wp_query->get_queried_object();
  $title = $term->name;
  ?>
  <div class="help-docs-crumbs">
    <ul class="list-unstyled list-inline">
      <li><a href="/help">Help</a></li>
      &#10095;
      <li class="active"><?php echo $title; ?></li>
    </ul>
  </div>
  <h1><?php echo $title; ?></h1>
  <?php 
}

remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
add_action( 'genesis_sidebar', 'add_help_docs_categories_sidebar' );
function add_help_docs_categories_sidebar(){
  ?>
  <section class="widget-first widget widget_text">
    <div class="widget-first">
      <h4 class="widget-title widgettitle">Need more help?</h4>
      <div class="textwidget">
        <p>We offer free email support for all Vero trial and paying customers.</p>
        <p>If you have any questions or issues, feel free to get in touch with us via email below.</p>
        <p>Vero support works from 9am Monday in Sydney (AEST) until 5pm Friday in San Francisco (PST).</p>
        <p>Please get in touch, we're here to help!</p>
        <br/>
        <a href="mailto:support@getvero.com" class="btn btn-primary">Email Support</a>
      </div>
    </div>
  </section>
  <?php
}

genesis(); ?>