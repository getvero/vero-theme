<?php

function get_custom_excerpt_with_text($length=55,$text='') { // Fakes an excerpt if needed
  $text = str_replace(']]>', ']]>', $text);
  $text = strip_tags($text,'<p>');
  $excerpt_length = $length;
  $words = explode(' ', $text, $excerpt_length + 1);
  if (count($words) > $excerpt_length) {
    array_pop($words);
    array_push($words, '[...]');
    $text = implode(' ', $words);
  }
  return $text;
}

function get_custom_excerpt($length=55,$text='') { // Fakes an excerpt if needed
  global $post;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text,'<p>');
    $excerpt_length = $length;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
      array_pop($words);
      array_push($words, '[...]');
      $text = implode(' ', $words);
    }
  }
  return $text;
}

function set_cookies() {
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $parsed_url = parse_url($url);

  if(!empty($_GET['c'])) {
    setcookie(str_replace('/', '_', $parsed_url['path']),'true',time() + (86400 * 180));
  } 
}

?>