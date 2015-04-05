<?php 
  //Remove the entry header markup (requires HTML5 theme support)
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
  remove_action( 'genesis_entry_header', 'genesis_do_post_title');
  remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

  //Force full width layout
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
  add_filter( 'body_class', 'metro_add_body_class' );
  function metro_add_body_class( $classes ) {
   $classes[] = 'full-width case-studies';
   return $classes;
  }

  include 'pages-shared/static-header.php';
?>
<section id="top" style="background-image: url(/wp-content/themes/vero/assets/images/case-studies/bugherd/bg.png);"></section>
<section id="stripe">
  <div class="wrap">
    <div class="logo">
      <img src="/wp-content/themes/vero/assets/images/case-studies/bugherd/logo.png">
    </div>
    <div class="testimonial">
      <div class="number">
        <div class="large">
          35%
        </div>
        <h1>
          Increased activation
        </h1>
      </div>
    </div>
  </div>
</section>

<section id="quote">
  <div class="wrap">
    <div class="big">&#8220;</div>
    <p>Lifecycle email is super important to our business. From day one we’ve sent emails to our customers to increase user engagement and activity. Vero helps us A/B test ideas rapidly and make our emails even more targeted with very little effort.</p>
    <div class="who">
      Alan Downie, CEO
      <img src="/wp-content/themes/vero/assets/images/case-studies/bugherd/alan.png">
    </div>
  </div>
</section>
<section id="middle">
  <div class="wrap">
    <div id="about">
      <h3>About BugHerd</h3>
      <p>BugHerd is a SaaS application that makes it easy for web designers and developers to collaborate visually when creating websites and web applications. With the click of a button users can ‘add a bug’ to any part of a website. </p>
      <p>Founded in 2011, BugHerd use lifecycle email to increase the number of users that become active users after signing up for a free trial and the number of active users that ultimately become paying customers. </p>
    </div>
    <ul id="reasons" class="list-unstyled">
      <li>
        <h2>A/B test campaigns like your landing pages</h2>
        <p>Alan uses analytics to track everything BugHerd’s customers do. “Making changes to landing pages, features, roadmaps - it all relies on data. I find it interesting that so few companies spend time working to A/B test and optimize their automated email campaigns when the conversion rate optimization industry is so large: if you’re going to invest in A/B testing your landing pages you should spend as much time A/B testing your campaigns. It’s certainly worked for us”.</p>
      </li>
      <li>
        <h2>Edit emails on the fly without deploying</h2>
        <p>“I’ve got a technical background and, even so, the less technical work I have to do to accomplish something the happier I am.” Vero allows Alan to deploy email changes without updating code or deploying hard-coded copy. “Being able to manipulate campaigns on the fly gives us the power to try new ideas more often. Lots of things fail but the faster you can try things out the faster you’ll come up with a wwrap. Using Vero is multitudes faster then deploying our own mailers in Rails”.</p>
      </li>
      <li>
        <h2>Automate, automate, automate.</h2>
        <p>"When we find something that works we want it to run all the time and we want it to run smoothly. Vero's automated campaigns mean we can set and forget our winning emails without having to worry whether they'll go out or whether someone will remember to chase customers." Automated email campaigns give businesses the power to permanently increase conversions, "we increased our activation rate to 61% using every trick we could and, thanks to testing, have now been able to automated campaigns that increased our activation a further 35%. The great thing is, as long as these campaigns are running, that conversion rate will stay super high."</p>
      </li>
    </ul>
  </div>
</section>
<section id="more">
  <div class="wrap">
    <ul class="list-unstyled">
      <li>
        <h3>More case studies</h3>
      </li>
      <li>
        <a href="/case-studies/shoes-of-prey"><img src="/wp-content/themes/vero/assets/images/case-studies/shoesofprey/logo.png"></a>
      </li>
      <li>
        <a href="/case-studies/wooga"><img src="/wp-content/themes/vero/assets/images/case-studies/wooga/logo.png"></a>
      </li>
    </ul>
  </div>
</section>

<?php 
custom_footer_static_wrap();
wp_footer();
?>