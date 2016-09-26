<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'careers transparent-header';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>
<section id="careers-hero" class="hero double-padding dark-box">
  <?php
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
  <div class="inner">
    <h1 class="hulk no-margin-top">We've come far.<br/>With your help we’ll go further.</h1>
    <button class="btn">Get amoungst it!</button>
  </div>
</section>
<section id="careers-mission" class="double-padding">
  <div class="inner small-inner">
    <h1 class="chunk font-brand-dark">We believe in {our mission}</h1>
    <p class="medium regular">In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew. Now hands are wanted here, and then again hands are wanted there. There is no staying in any one place; for at one and the same time everything has to be done everywhere. It is much the same with him who endeavors the description of the scene. We must now retrace our way a little.</p>
  </div>
</section>
<section id="careers-why">
  <div class="inner small-inner flush-bottom"">
    <h1 class="chunk font-brand-dark no-margin bottom-margin-large">Be empowered to do your best work</h1>
  </div>
  <div class="inner large-inner flush-top"">
    <ul class="feature-list unstyled-list thirds">
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.svg" class="bottom-margin-small">
        <p class="semi-bold">Work on the hard problems</p>
        <p class="regular">Smart people should work on the hardest problems. Be encoraged to tackle the kind of challenges that make work interesting.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/meteor.svg" class="bottom-margin-small">
        <p class="semi-bold">Make an impact</p>
        <p class="regular">We beleive in quality over quantity. With smaller and smarter teams you will always have the opportunity to make a big impact.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/grow.svg" class="bottom-margin-small">
        <p class="semi-bold">Opportunities to grow</p>
        <p class="regular">We beleive in moving forward. Our goal is to enable you to seek the knowledge and learn the skills that make you a better human.</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-vibe">
  <div class="inner small-inner">
    <h1 class="chunk font-brand-dark">Live to work, not the other way around</h1>
    <p class="medium regular">We believe that happy teams are the key to a powerful business. At Vero we are a small but empowered group of people who accomplish a lot. By helping each other to overcome the challenges that come our way we have built a company that thrives on trust, positivity and a pinch of adventure.</p>
  </div>
  <div class="inner large-inner vibe-images">
    <div class="image" id="cafe"></div>
    <div class="image" id="bar"></div>
    <div class="image" id="glass"></div>
    <div class="image" id="boat"></div>
  </div>
</section>
<section>
  <ul class="image bxslider">
    <li>
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="quote">
          Everyday I get the chance work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference, that’s what drives me every day.
        </p>
        <h4>Reba Moyes</h4>
        <p>Support</p>
      </div>
    </li>
    <li>
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="quote">
          Everyday I get the chance work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference, that’s what drives me every day.
        </p>
        <h4>Andrew O'Brien</h4>
        <p>Product Engineering</p>
      </div>
    </li>
    <li>
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="quote">
          Everyday I get the chance work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference, that’s what drives me every day.
        </p>
        <h4>Mitchell Quille</h4>
        <p>Engineering</p>
      </div>
    </li>
  </ul>
</section>
<section id="careers-perks">
  <div class="inner large-inner center-text">
    <h2 class="center-text">Not just work life, real life</h2>
    <ul class="feature-list unstyled-list thirds center-text">
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.png" srcset="/wp-content/themes/vero/assets/images/careers/rubix@2x.png 2x">
        <h4>Remote First</h4>
        <p>You are free to live and work wherever in the world you want. We also have an office in sydney.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.png" srcset="/wp-content/themes/vero/assets/images/careers/rubix@2x.png 2x">
        <h4>Flexible Hours</h4>
        <p>We know people work best at different times. Work the hours that suit you.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.png" srcset="/wp-content/themes/vero/assets/images/careers/rubix@2x.png 2x">
        <h4>Health Conscious</h4>
        <p>We beleive in a healthy working environment so wholesome snacks and sit stand desks are provided.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.png" srcset="/wp-content/themes/vero/assets/images/careers/rubix@2x.png 2x">
        <h4>Flexible Vacation Time</h4>
        <p>Time off work is important too, we have a great leave policy so you can take the time you need. </p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.png" srcset="/wp-content/themes/vero/assets/images/careers/rubix@2x.png 2x">
        <h4>Team Activities</h4>
        <p>Doing a crossword together or going indoor climbing, we make sure to flex our brains in fun ways.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.png" srcset="/wp-content/themes/vero/assets/images/careers/rubix@2x.png 2x">
        <h4>Yearly Adventures</h4>
        <p>Once a year we go on a team retreat someplace nice. Last year we went to Thailand.</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-remote">
  <div class="inner small-inner">
    <h2>Be where you want to be</h2>
    <p>We embrace the fact that living and traveling to different countries is a part of life, thats why we are 100% remote friendly, infact, its encouraged! Our team is free to live and work wherever they want. While many of us are based in Sunny Sydney that doesn’t mean you have to be too. Here’s a list of the places our team members have lived while at Vero: </p>
  </div>
  <div class="inner full-width">
    
  </div>
</section>

<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>
