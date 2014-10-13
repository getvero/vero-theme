<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'success-stories';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<div id="top" style="background-image: url('//veropublic.wpengine.com/wp-content/uploads/2014/08/bg.jpg');"></div>
<section id="stripe">
  <div class="inner">
    <div class="logo"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/logo.png" alt="" /></div>
    <div class="testimonial">
      <div class="number">
        <div class="large">20M</div>
        <h1>GAMERS CONTACTED MONTHLY VIA EMAIL</h1>
      </div>
    </div>
  </div>
</section><section id="blue-quote">
<div class="inner">
  <div class="quote">
    <div class="p">Vero makes it easy for us to deploy, manage and measure complex campaigns with ease. Our marketing team would waste hours without it.</div>
    <div class="who"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/jan.png" alt="" /> Jan Miczaika, <a href="https://wooga.com" target="blank">Wooga</a></div>
  </div>
</div>
</section><section id="middle">
<div class="inner">
  <div id="about">
    <h4>About Wooga</h4>
    <p>Wooga is a social gaming developer headquartered in Berlin, Germany.</p><p>With over 250 employees from 41 countries and over 50 million users Wooga is one of the fastest growing gaming companies on the planet.</p><p>With Facebook, iOS and Android success stories like Diamond Dash and Jelly Splash, Wooga's games have happy players from around the world.

  </div>
  <ul id="reasons" class="list-unstyled">
    <li>
      <h3 class="h4">Cost effective customer acquisition and activation</h3>
      <p>"Email is considerably cheaper than any other channel we have available to us. The cost of install from our launch campaigns is phenomenal and our automated campaigns help us drive new customers to pay." Vero helps Wooga directly increase their revenue thanks to targeted automated campaigns.</p></li>
      <li>
        <h3 class="h4">Powering agile marketing</h3>
        <p>Implementing new tests and email marketing campaigns quickly is what separates a good product marketing team from a bad one. Vero is "so easy to use that has literally halved the time we spend managing our campaigns. This means we can spend more time investing in them, seeing greater returns. We can't stress enough how easy Vero is to use".</p></li>
        <li>
          <h3 class="h4">Cross-game integration in hours, not weeks</h3>
          <p>Wooga have implemented campaigns across more than five different games on three different platforms including Facebook, iOS and Android. "Each game we integrate only takes us a few hours, on top of an initial integration that took less than two days with a single engineer. Integrating something this powerful in that time-frame is a new experience for us: a pleasant one!"</p></li>
          <li>
            <h3 class="h4">Advanced campaigns in 11 languages</h3>
            <p>Wooga use Vero to "setup advanced campaigns in many different languages. Using our standard template and custom user properties it is easy to segment our database by language and create automated campaigns that speak to our gamers in their native tongue."</p></li>
          </ul>
        </div>
      </section><section id="more">
      <div class="inner">
        <ul class="list-unstyled list-inline">
          <li>
            <h3 class="h4">More case studies</h3>
          </li>
          <li><a href="/success-stories/bugherd"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/bugherd-small.png" alt="" /></a></li>
          <li><a href="/success-stories/shoes-of-prey"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/sop-small.png" alt="" /></a></li>
        </ul>
      </div>
    </section>
    <?php 
    no_content_genesis_footer();
    ?>