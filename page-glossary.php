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
      <div class="aside">
        <h1 class="hulk bottom-margin-sm">Glossary</h1>
        <p class="large bottom-margin-lg">Knowledge is power. So let's demystify all the jargon you'll come across on your path to becoming a great email marketer.</p>
      </div>

      <div class="main">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/resources/glossary/hero.svg" alt="Glossary">
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--glossary">
      <div class="aside hide md-show">
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
          <li>F</li>
          <li>G</li>
          <li>
            <a href="#H">H</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
          <li>
            <a href="#F">F</a>
          </li>
          <li>
            <a href="#G">G</a>
          </li>
          <li>
            <a href="#H">H</a>
          </li>
          <li>
            <a href="#I">I</a>
          </li>
          <li>
            <a href="#J">J</a>
          </li>
          <li>
            <a href="#K">K</a>
          </li>
          <li>
            <a href="#L">L</a>
          </li>
          <li>
            <a href="#M">M</a>
          </li>
          <li>
            <a href="#N">N</a>
          </li>
          <li class="faded">O</li>
          <li>
            <a href="#P">P</a>
          </li>
          <li class="faded">Q</li>
          <li>
            <a href="#R">R</a>
          </li>
          <li>
            <a href="#S">S</a>
          </li>
          <li>
            <a href="#T">T</a>
          </li>
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
      <div class="main glossary-list md-left-margin-xxl">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>