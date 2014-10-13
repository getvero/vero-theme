<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'features';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top" class="center-text">
  <div class="inner">
    <h1>Personalize and test your email campaigns, without IT.</h1>
    <h2 class="h3">Track customers online and send emails based on what they do.</h2>
    <p><img alt="vero product" src="/wp-content/themes/vero/assets/images/what-is-vero.png"></p>
  </div>
</section>

<section id="feature-one" class="feature">
  <div class="inner">
    <img class="half" src="/wp-content/themes/vero/assets/images/features/profile.jpg"><div class="half">
      <h3 class="h4">Email Automation</h3>
      <p>Track data about your customers in your subscriber database. Use the data you collect such as your customers' names, locations, and ages to segment your database and send more targeted emails.</p>

      <p>Over time Vero automatically tracks each individual customers' actions on your website including the pages they visit, forms they submit and buttons they click.</p>

      <p>View any customer profile at any time, including a full history of emails you've sent them and their actions after they receive them.</p></div></div>
</section>

<section id="feature-two" class="feature">
  <div class="inner">
    <div class="half">
      <h3 class="h4">Send newsletters like never before</h3>
      <p>Track data about your customers in your subscriber database. Use the data you collect such as your customers' names, locations, and ages to segment your database and send more targeted emails.</p>

      <p>Over time Vero automatically tracks each individual customers' actions on your website including the pages they visit, forms they submit and buttons they click.</p>

      <p>View any customer profile at any time, including a full history of emails you've sent them and their actions after they receive them.</p></div><img class="half" src="/wp-content/themes/vero/assets/images/home/automated.jpg"></div>
</section>

<section id="feature-three" class="feature">
  <div class="inner">
    <img class="half" src="/wp-content/themes/vero/assets/images/home/newsletters.jpg"><div class="half">
      <h3 class="h4">Automated, user-triggered campaigns</h3>
      <p>Track data about your customers in your subscriber database. Use the data you collect such as your customers' names, locations, and ages to segment your database and send more targeted emails.</p>

      <p>Over time Vero automatically tracks each individual customers' actions on your website including the pages they visit, forms they submit and buttons they click.</p>

      <p>View any customer profile at any time, including a full history of emails you've sent them and their actions after they receive them.</p></div></div>
</section>

<section id="feature-four" class="feature">
  <div class="inner">
    <div class="half">
      <h3 class="h4">Easy-to-use for tech savvy marketers</h3>
      <p>Track data about your customers in your subscriber database. Use the data you collect such as your customers' names, locations, and ages to segment your database and send more targeted emails.</p>

      <p>Over time Vero automatically tracks each individual customers' actions on your website including the pages they visit, forms they submit and buttons they click.</p>

      <p>View any customer profile at any time, including a full history of emails you've sent them and their actions after they receive them.</p>
    </div><img class="half" src="/wp-content/themes/vero/assets/images/features/tech-savvy.png"></div>
</section>

<section id="ab-test" class="feature">
  <div class="inner">
    <div class="center-text thirds"><img src="/wp-content/themes/vero/assets/images/version-a.png"></div><div class="thirds center-text">
      <h3 class="h4">A/B test all of your emails</h3>
      <p>Testing lets you find out which subject lines, from addresses, body copy or templates your customers relate to best - giving you more opportunity for revenue.</p> <p>A/B testing your automated and newsletter campaigns is easy with Vero. Simply add a variation to any campaign you've created and define a split percentage and we'll report on the rest.</p> <p>Don't make assumptions, make money!</p></div><div class="center-text thirds"><img src="/wp-content/themes/vero/assets/images/version-b.png"></div></div>
</section>

<section id="platforms">
  <div class="inner">
    <h3 class="h4 center-text">Use Vero on any site. Plugin to these great platforms</h3>
    <ul class="list-unstyled">
      <li>
        <img alt="Kissmetrics" src="http://www.getvero.com/assets/plugins/kissmetrics-b0e7af295ce852d2f0a8d8cd92edc86b.png">
      </li>
      <li>
        <img alt="Mixpanel" class="mixpanel" src="http://www.getvero.com/assets/plugins/mixpanel-a9afe3f152329bcb7177c73af4b9b3e9.png">
      </li>
      <li>
        <img alt="Segmentio" src="http://www.getvero.com/assets/plugins/segmentio-fcb94820aedd15dfb5f268086d8ab0fb.png">
      </li>
      <li class="fourth">
        <img alt="Unbounce" src="http://www.getvero.com/assets/plugins/unbounce-868480c93143a7f687d99d1e6391b92d.png">
      </li>
      <li>
        <img alt="Magento" class="magento" src="http://www.getvero.com/assets/plugins/magento-d6368eaf5614aa7faa0f968842942842.png">
      </li>
      <li>
        <img alt="Bigcommerce" src="http://www.getvero.com/assets/plugins/bigcommerce-688452a42c37c207f99f7159c6f63b65.png"></li>
      <li>
        <img alt="Shopify" src="http://www.getvero.com/assets/plugins/shopify-7fffd4f115e670a2a815375bbd0130e6.png">
      </li>
    </ul>
  </div>
</section>

<section id="cta">
  <div class="inner center-text">
    <h3>Start sending smarter emails today and increasing your conversions tomorrow</h3>
    <div class="quote quote-large">
      <a href="/" class="btn btn-large btn-success">Start your free trial &rarr;</a>
  </div>
</section>
<?php 
  no_content_genesis_footer();
 ?>