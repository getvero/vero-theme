<?php

//
// Add and customize Resources
//----------------------
function register_kb_post_type () {
  // API docs
  register_taxonomy('topic', 'kb', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'KB Topics', 'Knowledge Base Topics' ),
      'singular_name' => _x( 'KB Topic', 'Knowledge Base Topic' ),
    ),

    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'knowledge-base',
      'with_front' => false
    ),
  ));

  $labels = array(
    'name' => __( 'KB Articles' ),
    'singular_name' => __( 'KB Article' )
  );
  $args = array(
    'labels' => $labels,
    'menu_icon' => '/wp-content/themes/vero/assets/images/icons/lightbulb.png',
    'public' => true,
    'has_archive' => 'knowledge-base',
    'rewrite' => array(
      //'slug' => "knowledge-base", 
      'slug' => 'knowledge-base/%topic%',
      'with_front' => false
    )
  );
  register_post_type( 'kb', $args);
  add_post_type_support( 'kb', 'genesis-layouts' );
}

add_filter('post_type_link', 'kb_permalink_structure', 10, 4);
function kb_permalink_structure($post_link, $post, $leavename, $sample)
{
    if ( false !== strpos( $post_link, '%topic%' ) ) {
        $topic_term = get_the_terms( $post->ID, 'topic' );
        $post_link = str_replace( '%topic%', array_pop( $topic_term )->slug, $post_link );
    }
    return $post_link;
}

//function taxonomy_slug_rewrite($wp_rewrite) {
//    $rules = array();
//    // get all custom taxonomies
//    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
//    // get all custom post types
//    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');
//
//    foreach ($post_types as $post_type) {
//        foreach ($taxonomies as $taxonomy) {
//            foreach ($taxonomy->object_type as $object_type) {
//
//                // check if taxonomy is registered for this custom type
//                if ($object_type == $post_type->rewrite['slug']) {
//
//                    // get category objects
//                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));
//
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
//}

?>