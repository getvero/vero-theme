<?php

//
// Add Campaigns
//----------------------
function register_campaign_post_type () {
  // register_taxonomy('idea_lab_category', 'campaigns', array(
  //   // Hierarchical taxonomy (like categories)
  //   'hierarchical' => true,
  //   // This array of options controls the labels displayed in the WordPress Admin UI
  //   'labels' => array(
  //     'name' => _x( 'Idea Lab Category', 'Idea Lab Categories' ),
  //     'singular_name' => _x( 'Idea Lab Category', 'Idea Lab Categories' ),
  //   ),

  //   // Control the slugs used for this taxonomy
  //   'rewrite' => array(
  //     'slug' => 'idea-lab',
  //     'with_front' => false
  //   ),
  // ));

  // Campaigns
  $labels = array(
    'name' => __( 'Idea Lab' ),
    'singular_name' => __( 'Campaign' )
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/campaign.png',
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'idea-lab', 
      //'slug' => 'idea-lab/%idea_lab_category%',
      'with_front' => false)
  );

  register_post_type( 'campaigns', $args);
  add_post_type_support( 'campaigns', 'genesis-layouts' );
}

// add_filter('post_type_link', 'idea_lab_permalink_structure', 10, 4);
// function idea_lab_permalink_structure($post_link, $post, $leavename, $sample)
// {
//     if ( false !== strpos( $post_link, '%idea_lab_category%' ) ) {
//         $topic_term = get_the_terms( $post->ID, 'idea_lab_category' );
//         $post_link = str_replace( '%idea_lab_category%', array_pop( $topic_term )->slug, $post_link );
//     }
//     return $post_link;
// }

// function taxonomy_slug_rewrite($wp_rewrite) {
//    $rules = array();
//    // get all custom taxonomies
//    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
//    // get all custom post types
//    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');

//    foreach ($post_types as $post_type) {
//        foreach ($taxonomies as $taxonomy) {
//            foreach ($taxonomy->object_type as $object_type) {

//                // check if taxonomy is registered for this custom type
//                if ($object_type == $post_type->rewrite['slug']) {

//                    // get category objects
//                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));

//                    // make rules
//                    foreach ($terms as $term) {
//                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
//                    }
//                }
//            }
//        }
//    }
//    // merge with global rules
//    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
// }

function create_campaigns_post_type() {
  if(genesis_get_option('campaigns') == true){
    register_campaign_post_type();
  }
}

function campaigns_sidebar_logic() {
  if ( is_singular('campaigns') ) {
    remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
    add_action( 'genesis_sidebar', 'get_campaigns_sidebar' );
  } 
}

function get_campaigns_sidebar() {
  genesis_widget_area( 'campaigns_sidebar' );
}