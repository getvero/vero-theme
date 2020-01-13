<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'glossary';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>

<section class="glossary-hero">
  <div class="inner large-inner top-padding-lg">
    <div class="flex flex-column md-flex-row items-center">
      <div class="col-main">
        <h1 class="hulk bottom-margin-sm">Glossary</h1>
        <p class="large bottom-margin-lg">Knowledge is power. So let's demystify all the jargon you'll come across on your path to becoming a great email marketer.</p>
      </div>

      <div class="col-aside">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/resources/glossary/hero.svg" alt="Glossary">
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--glossary">
      <div class="col-main hide md-show">
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
          <li class="faded">F</li>
          <li class="faded">G</li>
          <li>
            <a href="#H">H</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
          <li class="faded">F</li>
          <li class="faded">G</li>
          <li>
            <a href="#H">H</a>
          </li>
          <li class="faded">I</li>
          <li class="faded">J</li>
          <li class="faded">K</li>
          <li class="faded">L</li>
          <li>
            <a href="#M">M</a>
          </li>
          <li>
            <a href="#N">N</a>
          </li>
          <li class="faded">O</li>
          <li class="faded">P</li>
          <li class="faded">Q</li>
          <li class="faded">R</li>
          <li>
            <a href="#S">S</a>
          </li>
          <li>T</li>
          <li class="faded">U</li>
          <li class="faded">V</li>
          <li>
            <a href="#W">W</a>
          </li>
          <li class="faded">X</li>
          <li class="faded">Y</li>
          <li class="faded">Z</li>
        </ul>
      </div>
      <div class="col-aside glossary-list md-left-margin-xxl">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>