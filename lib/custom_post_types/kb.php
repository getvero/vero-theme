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
    'with_front' => false,
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

?>