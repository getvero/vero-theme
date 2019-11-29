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
        <ul class="unstyled-list glossary-alphabet">
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
          <li>
            <a href="#E">F</a>
          </li>
          <li>
            <a href="#E">G</a>
          </li>
          <li>
            <a href="#E">H</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
          <li>
            <a href="#E">F</a>
          </li>
          <li>
            <a href="#E">G</a>
          </li>
          <li>
            <a href="#E">H</a>
          </li>
          <li>
            <a href="#E">I</a>
          </li>
          <li>
            <a href="#E">J</a>
          </li>
          <li>
            <a href="#E">K</a>
          </li>
          <li>
            <a href="#E">L</a>
          </li>
          <li>
            <a href="#E">M</a>
          </li>
          <li>
            <a href="#E">N</a>
          </li>
          <li>
            <a href="#E">O</a>
          </li>
          <li>
            <a href="#E">P</a>
          </li>
          <li>
            <a href="#E">Q</a>
          </li>
          <li>
            <a href="#E">R</a>
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