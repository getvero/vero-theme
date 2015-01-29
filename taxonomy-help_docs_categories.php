<?php
/*
Template Name: Help Docs Category
*/

//Custom post format
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action( 'genesis_entry_content', 'custom_excerpt');
function custom_excerpt() {
  $post = get_post();
  ?>
    <a href="<?php echo get_permalink(); ?>" class="well job">
      <h4><?php echo get_the_title(); ?></h4>
    </a>
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

add_action( 'genesis_before_footer', 'add_help_docs_categories_footer' );
function add_help_docs_categories_footer(){
  ?>
  <section id="bottom">
    <div class="inner center-text">
      <h1>Need more help?</h1>
      <h2 class="h5">If you can't find the answer you're after, click the button below to shoot our super support team an email.</h2>
      <a href="mailto:support@getvero.com" class="btn btn-large btn-primary">Email Us</a>
    </div>
  </section>
  <?php
}

genesis(); ?>