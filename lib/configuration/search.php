<?php

function remove_search_title() {
  if ( is_search() ) {
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
    remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
    remove_action( 'genesis_before_loop', 'genesis_do_search_title' );
  }
}

function change_search_form_type($form) {
  $form = str_replace( 'type="search"', 'type="text"', $form ); 
  return $form;
}

function change_search_form_placeholder( $text ) {
	return esc_attr( 'Search the blog...' );
}

?>