<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'partners';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="top">
  <div id="partners-overlay">
    <div class="inner center-text">
      <h1>Check out Vero's great partners</h1>
      <h2 class="h3">...with great offers for you</h2>
    </div>
  </div>
</section><section id="partners">
<div class="inner center-text">
  <ul class="list-unstyled">
    <li class="well">
      <div class="top"><img src="/wp-content/themes/vero/assets/images/feedly.png" alt="" /></div>
      <div class="bottom">
        <h3>Feedly</h3>
        A fast and stylish way to read news and blogs, with slick Buffer integration<a class="btn btn-success" href="http://www.feedly.com" target="blank">Go to feedly</a>

      </div></li>
      <li class="well">
        <div class="top"><img src="/wp-content/themes/vero/assets/images/pocket.png" alt="" /></div>
        <div class="bottom">
          <h3>Pocket</h3>
          A fast and stylish way to read news and blogs, with slick Buffer integration<a class="btn btn-success" href="http://www.feedly.com" target="blank">Go to feedly</a>

        </div></li>
        <li class="well last">
          <div class="top"><img src="/wp-content/themes/vero/assets/images/reeder.png" alt="" /></div>
          <div class="bottom">
            <h3>Reader</h3>
            A fast and stylish way to read news and blogs, with slick Buffer integration<a class="btn btn-success" href="http://www.feedly.com" target="blank">Go to feedly</a>

          </div></li>
          <li class="well bottom-row">
            <div class="top"><img src="/wp-content/themes/vero/assets/images/caffeinated.png" alt="" /></div>
            <div class="bottom">
              <h3>Caffeinated</h3>
              A fast and stylish way to read news and blogs, with slick Buffer integration<a class="btn btn-success" href="http://www.feedly.com" target="blank">Go to feedly</a>

            </div></li>
            <li class="well bottom-row">
              <div class="top"><img src="/wp-content/themes/vero/assets/images/wordpress.png" alt="" /></div>
              <div class="bottom">
                <h3>Wordpress</h3>
                A fast and stylish way to read news and blogs, with slick Buffer integration<a class="btn btn-success" href="http://www.feedly.com" target="blank">Go to feedly</a>

              </div></li>
              <li class="well last bottom-row">
                <div class="top"><img src="/wp-content/themes/vero/assets/images/instapaper.png" alt="" /></div>
                <div class="bottom">
                  <h3>Instapaper</h3>
                  A fast and stylish way to read news and blogs, with slick Buffer integration<a class="btn btn-success" href="http://www.feedly.com" target="blank">Go to feedly</a>

                </div></li>
              </ul>
            </div>
          </section>
          <?php 
          no_content_genesis_footer();
          ?>