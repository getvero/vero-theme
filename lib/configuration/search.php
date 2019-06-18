<?php

  function remove_search_title() {
    if ( is_search() ) {
      remove_action( 'genesis_before_loop', 'genesis_do_search_title' );
    }
  }

  function change_search_form_type($form) {
    $form = str_replace(
      'type="search"',
      'type="text"',
      $form
    );

    return $form;
  }

  function add_toogle_to_search() {
    add_filter( 'get_search_form', 'test', 99, 1 );
  }
  function test($form) {
    $search = '<input type="submit"';
    $html5 = '<span></span>';
    $replace = $html5 . $search;
    return str_replace( $search, $replace, $form );
  }

  function change_search_form_placeholder( $text ) {
    return esc_attr( 'Search the blog...' );
  }

?>