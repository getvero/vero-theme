<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'success-stories';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<div id="top" style="background-image: url('http://localhost:8888/wp-content/uploads/2014/08/bg.png');"></div>
&nbsp;

<section id="stripe">
  <div class="inner">
    <div class="logo"><img src="http://localhost:8888/wp-content/uploads/2014/08/logo.png" alt="" /></div>
    <div class="testimonial">
      <div class="number">
        <div class="large">27%</div>
        <h1>Customers that design a second pair</h1>
      </div>
    </div>
  </div>
</section><section id="blue-quote">
<div class="inner">
  <div class="quote">
    <div class="p">Vero's customer support has been second to none, they're always on hand to help us if we have an issue and regularly check in to make sure we have what we need to send smarter emails.</div>
    <div class="who"><img src="https://www.getvero.com/assets/testimonials/josh-9c90ca69338c0921c3133bc36ed39b9b.png" alt="" /> Josh Levy, <a href="https://beenverified.com" target="blank">Been Verified</a></div>
  </div>
</div>
</section><section id="middle">
<div class="inner">
  <div id="about">
    <h4>About Shoes of Prey</h4>
    Shoes of Prey is an eCommerce company that lets women design their own shoes. With colours, materials and styles to suit everyone Shoes of Prey has grown quickly since its launch juts three years ago. As much a product-driven tech startup as a retailer, Shoes of Prey use data to determine their next step. Shoes of Prey is setting the trend in Australian retail.</div>
    <ul id="reasons" class="list-unstyled">
      <li>
        <h3 class="h4">Cart abandonment 2.0</h3>
        Joel and his team at Shoes of Prey use Vero to “send a series of emails to our customers based on their past interactions with our online shoe designer and store. Rather than sending everyone the same follow up messages we send a lot of meta-data about each customer and the products they look at in order to customize each email. We can even include images of each customer’s custom shoe designs using Vero.</li>
        <li>
          <h3 class="h4">Ease of integration with current platforms</h3>
          Like all data-driven marketers, Joel relies heavily on customer-level analytics software. “Integrating Vero alongside Google Analytics and the other platforms we use has been simple. Initially we were worried about the setup time in order to achieve the campaigns we were after but it took us all of three hours to get hooked up properly. Now we have access to run all sorts of campaigns we couldn’t even consider with a traditional email marketing provider.”</li>
          <li>
            <h3 class="h4">Superior support</h3>
            “I talk to someone at Vero every week. I think Pat (our data analyst) speaks with someone at Vero every few days. Although just a platform their response times and attitude are exactly what I’m after in a vendor: they’re polite, friendly and happy to help however they can.” With live chat, email and telephone support Shoes of Prey knows that they “can get in touch with someone who can actually help any time we need to.”</li>
          </ul>
        </div>
      </section><section id="more">
      <div class="inner">
        <ul class="list-unstyled list-inline">
          <li>
            <h3 class="h4">More case studies</h3>
          </li>
          <li><a href="/success-stories/wooga"><img src="http://localhost:8888/wp-content/uploads/2014/08/wooga-small.png" alt="" /></a></li>
          <li><a href="/success-stories/bugherd"><img src="http://localhost:8888/wp-content/uploads/2014/08/bugherd-small.png" alt="" /></a></li>
        </ul>
      </div>
    </section>
    <?php 
    no_content_genesis_footer();
    ?>