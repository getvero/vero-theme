<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'help';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>

<?php 
  no_content_genesis_footer();
?>