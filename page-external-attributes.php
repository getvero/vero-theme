<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'external-attributes';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="external-attributes-hero">
  <div class="inner">
    <h1 class="chunk underline-blue inline-block no-bottom-margin"><span class="light">Introducting</span> <span class="semi-bold">Fusion</span></h1>
    <h1 class="hulk">Use external data to personalise your most effective emails yet</h1>
    <p class="large regular">Fusion lets you pull your own data from an API endpoint into your emails at time of send.</p>
  </div>
</section>
<section id="external-attributes-howitworks" class="double-padding">
  <div class="inner center-text gradient-border-bottom flush-bottom">
    <h1 class="biggie no-bottom-margin">Plug straight into your API</h1>
      <p class="large">Pull data out of your API and into your emails, where it belongs, in two simple steps:</p>
      <ul class="feature-list unstyled-list halfs">
        <li><div class="number">1</div><p><strong>Connect API endpoint</strong></p><p>Add your external API url to a campaign email using the data inspector. To get specific user or event data, attatch a Vero property to the URL with liquid.</p></li>
        <li><div class="number">2</div><p><strong>Insert via Liquid</strong></p><p>Add liquid tags to insert the returned JSON properties or HTML to your email content. Just like this: {{external.user_region}}.</p></li>
      </ul>
      <img src="/wp-content/themes/vero/assets/images/external-attributes/ext-scnshot.png" srcset="/wp-content/themes/vero/assets/images/external-attributes/ext-scnshot@2x.png 2x" class="center-block">
    </div>
  </div>
</section>
<section id="external-attributes-examples" class="double-padding">
  <div class="inner">
    <h1 class="chunk no-bottom-margin">Finally, email is a true extension of your product</h1>
    <ul class="feature-list unstyled-list thirds sm-center">
      <li class="center-text">
        <img class="center-text" src="/wp-content/themes/vero/assets/images/external-attributes/recommendations.svg">
        <p><strong>Recommendations</strong></p>
        <p>Insert dynamically generated HTML into product recommendation emails tailored specifically to each customer.</p>
      </li>
      <li class="center-text">
        <img class="center-text" src="/wp-content/themes/vero/assets/images/external-attributes/charts.svg">
        <p><strong>Dynamic Data &amp; Charts</strong></p>
        <p>Keep your users engaged by sending them unique weekly updates with usage details from your product.</p>
      </li>
      <li class="center-text">
        <img class="center-text" src="/wp-content/themes/vero/assets/images/external-attributes/details.svg">
        <p><strong>Delightful Details</strong></p>
        <p>Impress your users with personalised content pulled from services like OpenWeather or Clearbit.</p>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-tidal" class="darker-box floating-section double-padding">
  <div class="inner">
    <div class="half">
      <img src="" title="Tidal">
      <p>Tidal recommends new music to millions of customers every week. By plugging their API into Vero, Tidal has been able to consistently deliver each and every customer a personalised list of new music that results in better engagement and happier listeners.</p>
      <q>We literally saved 100s of hours with external attributes. It just plugs in and works.</q>
      <div class="">
        <img src="" width="53" height="53">
        <p class="semi-bold">Eskild</p>
        <p>Product Manager</p>
      </div>
    </div>
    <div class="half">
      <div class=""></div>
    </div>
  </div>
</section>
<section id="external-attributes-extras" class="">
  <div class="inner gradient-border-bottom gradient-border-top">
    <ul class="feature-list unstyled-list halfs">
      <li>
        <img src="">
        <p class="semi-bold">Access your data in real time</p>
        <p>Spend less time normalizing your data and building push-based data pipelines. With Fusion, just access the data when you need it.</p>
      </li>
      <li>
        <img src="">
        <p class="semi-bold">Works with 3rd Party API’s too…</p>
        <p>Delight your customers by enhancing your emails with information pulled from any number of openly available API’s.</p>
      </li>
    </ul>
  </div>
</section>
<section id="external-attributes-scale" class="double-padding">
  <div class="inner center-text">
    <h1 class="chunk no-bottom-margin">Built to Scale</h1>
    <p class="medium">As your business grows, Vero automatically scales with it, so you can concentrate on sending emails your customers love. We send over <span>250,000,000 emails a month so you know you’re in good hands.</p>
    <img src="">
  </div>
</section>
<?php 
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>