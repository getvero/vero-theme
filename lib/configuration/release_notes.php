<?php

  function release_notes_title(){
    ?>
    <h2 class="entry-title" itemprop="headline">
      <?php //echo the_title(); ?>
      <time class="entry-time" itemprop="datePublished" datetime="<?php echo the_time('c'); ?>">
        <?php echo the_time('j F Y'); ?>
      </time> 
    </h2>
    <?php
  }

  function remove_elements_release_notes(){
    if( is_post_type_archive('release-notes') ) {
      remove_action( 'genesis_after_content', 'genesis_get_sidebar' );

      remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
      add_action( 'genesis_entry_header', 'release_notes_title' );

      remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
      remove_action( 'genesis_entry_content', 'genesis_do_post_image' );
      add_action( 'genesis_entry_content', 'the_content' );
    }
  }

  function single_release_note_redirect() {
    if ( is_singular('release-notes') ) {
      wp_redirect( '/release-notes', 301 );
      exit;
    }
  }

 ?>