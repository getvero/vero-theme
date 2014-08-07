<?php
/*
Template Name: Knowledge Base Archive
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action('genesis_loop', 'custom_do_topics_loop');

function custom_do_topics_loop() {
  echo '
    <h1 class="center-text">Knowledge Base</h1>
    <section id="topics">
    <div class="wrap">';
      $post_type = 'kb';

      // Get all the taxonomies for this post type
      $taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );

      foreach( $taxonomies as $taxonomy ) : 
          // Gets every "category" (term) in this taxonomy to get the respective posts
          $terms = get_terms( $taxonomy );

          foreach( $terms as $term ) :
              $classes = 'thirds';
              if( $key % 3 )
                $classes .= ' first';
              echo '<div class="'. $classes . '"><h3>' . $term->name . '</h3>';

              $args = array(
                'post_type' => 'kb',
                'taxonomy' => $taxonomy,
                'term' => $term->slug
              );
              $wp_query = new WP_Query( $args );
              $i = 0;
              if( $wp_query->have_posts()): 
                echo '<ul class="list-unstyled">';
                while( $wp_query->have_posts() && $i < 5 ): $wp_query->the_post(); global $post;
                  echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                  $i += 1;   
                endwhile;
                if($wp_query->found_posts > 5) {
                  echo '<li><a href="/knowledge-base/' . $term->slug . '">More articles &rarr;</a></li>';
                }
                echo '</ul>';
              endif;

              echo '</div>';
              wp_reset_query();
          endforeach;
      endforeach;
    echo '</div>
  </section>';
}

genesis(); ?>