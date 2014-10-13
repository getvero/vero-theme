<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'friends';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="top" class="center-text">
  <div class="inner">
    <h1>Check out Vero's great friends</h1>
    <h2 class="h3">...with great offers for you</h2>
  </div>
</section><section id="friends">
<div class="inner center-text">
  <ul class="list-unstyled">
    <li class="well">
      <div class="top"><img src="https://www.getvero.com/wp-content/uploads/2014/10/crazyeegg-e1412137658270.png" alt="" /></div>
      <div class="bottom">
      <h3>Crazyegg</h3>
      <p>Improve your website visualizing what your visitors are clicking. <br><a class="btn btn-success" href="http://www.crazyegg.com" target="blank">Go to crazyegg</a></p>
      </div></li>
      <li class="well">
            <div class="top"><img src="https://www.getvero.com/wp-content/uploads/2014/10/gleam.png" alt="" /></div>
            <div class="bottom">
              <h3>Gleam</h3>
              <p>Take user engagement in your website to the next level <br><a class="btn btn-success" href="https://gleam.io/" target="blank">Go to gleam</a></p></div></li>
              <li class="well last">
                <div class="top"><img src="https://www.getvero.com/wp-content/uploads/2014/10/boast-white-logo.png" alt="" /></div>
                <div class="bottom">
                  <h3>Boast</h3>
                  <p>Collect video testimonials, customer reviews, employee feedback and more with your website or mobile device <br><a class="btn btn-success" href="http://boast.io/" target="blank">Go to boast</a></p></div></li>
                  <li class="well">
                    <div class="top"><img src="https://www.getvero.com/wp-content/uploads/2014/07/leadpages-logo-e1412134506582.png" alt="" /></div>
                    <div class="bottom">
                      <h3>Leadpages</h3>
                      <p>Increase your website lead generation <br><a class="btn btn-success" href="http://www.leadpages.net/products/" target="blank">Go to leadpages</a></p></div></li>
                      <li class="well bottom-row">
                        <div class="top"><img src="https://www.getvero.com/wp-content/uploads/2014/07/unbounce-logo-20121.png" alt="" /></div>
                        <div class="bottom">
                          <h3>Unbounce</h3>
                          <p>Build, publish &amp; A/B test landing pages without I.T. <br><a class="btn btn-success" href="http://unbounce.com/" target="blank">Go to unbounce</a></p></div></li>
                          <li class="well last bottom-row">
                            <div class="top"><img src="https://www.getvero.com/wp-content/uploads/2014/10/logo.png" alt="" /></div>
                            <div class="bottom">
                              <h3>Yesware</h3>
                              <p>Discover what your customers do after you sent your email <br><a class="btn btn-success" href="http://www.yesware.com/" target="blank">Go to yesware</a></p></div></li>
                            </ul>
                          </div>
                        </section>
                        <?php 
                        no_content_genesis_footer();
                        ?>