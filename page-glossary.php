<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'glossary';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>

<section>
  <div class="inner large-inner flush-bottom">
    <h1 class="hulk bottom-margin-sm">Glossary</h1>
    <p class="large bottom-margin-lg">Knowledge is power, and we'd like to help demystify all the jargon on your path to gaining email marketing prowess.</p>
  </div>
</section>
<section class="double-padding">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--glossary">
      <div class="aside">
        <ul class="unstyled-list">
          <li>
            <a href="#A">A</a>
          </li>
          <li>
            <a href="#B">B</a>
          </li>
          <li>
            <a href="#C">C</a>
          </li>
          <li>
            <a href="#D">D</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
        </ul>
      </div>
      <div class="main">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>