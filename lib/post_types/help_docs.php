<?php

function create_help_docs_post_type () {
  $labels = array(
    'name' => __( 'Help Docs' ),
    'singular_name' => __( 'Help Doc' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'with_front' => false,
    'taxonomies' => array( 'help_docs_categories'),
    'exclude_from_search' => true,
    'capability_type' => 'post',
    'query_var' => true,
    'rewrite' => array('slug' => 'help/%help_docs_categories%', 'with_front' => FALSE)
  );

  register_post_type( 'help_docs', $args);
  add_post_type_support( 'help_docs', 'genesis-layouts' );
}

function add_help_docs_taxonomies() {

  register_taxonomy('help_docs_categories', 'help_docs', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Docs Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Docs-Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Docs-Categories' ),
      'all_items' => __( 'All Docs-Categories' ),
      'parent_item' => __( 'Parent Docs-Category' ),
      'parent_item_colon' => __( 'Parent Docs-Category:' ),
      'edit_item' => __( 'Edit Docs-Category' ),
      'update_item' => __( 'Update Docs-Category' ),
      'add_new_item' => __( 'Add New Docs-Category' ),
      'new_item_name' => __( 'New Docs-Category Name' ),
      'menu_name' => __( 'Docs Categories' ),
    ),

    'query_var'     => true,

    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'help', // This controls the base slug that will display before each term
      'with_front' => false // Don't display the category base before "/locations/"
    ),
  ));
}

function filter_help_docs_link( $link, $post) {
    if ( $post->post_type != 'help_docs' )
      return $link;

    if ( $cats = get_the_terms( $post->ID, 'help_docs_categories' ) )
      $link = str_replace( '%help_docs_categories%', array_pop($cats)->slug, $link );
      return $link;
}

function add_help_docs_breadcrumbs(){
  if ( is_singular('help_docs') ) {
    $terms = wp_get_post_terms( $post->ID, 'help_docs_categories'); 
    $term = $terms[0];
    $title = $term->name;
    $slug = $term->slug;
    ?>
    <div class="help-docs-crumbs">
      <ul class="list-unstyled list-inline">
        <li><a href="/help">Help</a></li>
        &#10095;
        <li><a href="/help/<?php echo $slug ?>"><?php echo $title; ?></a></li>
        &#10095;
        <li class="active"><?php echo get_the_title(); ?></li>
      </ul>
    </div>
    <?php 
  }
}

function change_help_docs_sidebar() {
  if (is_singular('help_docs') || is_tax('help_docs_categories')) { 
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' ); 
    add_action( 'genesis_sidebar', 'add_help_docs_page_sidebar' ); 
  }
}

function add_help_docs_page_sidebar(){
  ?>
  <section class="widget-first widget widget_text">
    <div class="widget-first">
      <h4 class="widget-title widgettitle">Need more help?</h4>
      <div class="textwidget">
        <p>We offer free email support for all Vero trial and paying customers.</p>
        <p>If you have any questions or issues, feel free to get in touch with us via email below.</p>
        <p>Vero support works from 9am Monday in Sydney (AEST) until 5pm Friday in San Francisco (PST).</p>
        <p>Please get in touch, we're here to help!</p>
        <a href="mailto:support@getvero.com" class="btn btn-primary">Email Support</a>
      </div>
    </div>
  </section>
  <?php
}

function set_posts_per_docs_category( $query ) {
  if (!is_main_query() || !is_tax('help_docs_categories') )
    return;
  $query->set( 'posts_per_page', -1 );
  return $query;
} 

?>