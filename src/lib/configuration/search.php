<?php

  function remove_search_title() {
    if ( is_search() ) {
      remove_action( 'genesis_before_loop', 'genesis_do_search_title' );
    }
  }

  function change_search_form_type($form) {
    $form = str_replace('type="search"','type="text"',$form);
    return $form;
  }

  function change_search_form_placeholder( $text ) {
    return esc_attr( 'Search the blog&hellip;' );
  }

  function my_search_button($form) {
    $document = new DOMDocument();
    $document->loadHTML($form);
    $xpath = new DOMXPath($document);
    $input = $xpath->query('//input[@type="submit"]');

    $label = $document->createElement('label');
    $label->setAttribute('class', 'search-toggle search-toggle-close');
    $label->setAttribute('for', 'search-form');

    // use a helper to load the HTML into a string
    $helper = new DOMDocument();
    $helper->loadXML('<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="none" d="M0 0h32v32H0z"/><path d="M23.071 8.929a1 1 0 010 1.414L17.414 16l5.657 5.657a1 1 0 01-1.414 1.414L16 17.414l-5.657 5.657a1 1 0 01-1.414-1.414L14.586 16l-5.657-5.657a1 1 0 011.414-1.414L16 14.586l5.657-5.657a1 1 0 011.414 0z" fill="#9D9D9D"/></g></svg>');

    // now the magic!
    // import the document node of the $helper object deeply (true)
    // into the $div and append as child.
    $label->appendChild($document->importNode($helper->documentElement, true));

    // add the div to the $doc
    $document->appendChild($label);

    if ($input->length > 0) {
      $input->item(0)->parentNode->insertBefore($label, $input->item(0));
    }

    $document->removeChild($document->doctype);
    $document->replaceChild($document->firstChild->firstChild->firstChild, $document->firstChild);
    $form_html = $document->saveHTML();

    return $form_html;
  }
?>