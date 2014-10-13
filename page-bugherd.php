<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'success-stories';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<div id="top" style="background-image: url('//veropublic.wpengine.com/wp-content/uploads/2014/08/bg1.jpg');"></div>
&nbsp;

<section id="stripe">
  <div class="inner">
    <div class="logo"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/logo-2.png" alt="" /></div>
    <div class="testimonial">
      <div class="number">
        <div class="large">35%</div>
        <h1>INCREASED SAAS ACTIVATION RATES BY</h1>
      </div>
    </div>
  </div>
</section><section id="blue-quote">
<div class="inner">
  <div class="quote">
    <div class="p">Lifecycle email is super important to our business. From day one we've sent emails to our customers to increase user engagement and activity. 
      Vero helps us A/B test ideas rapidly and make our emails even more targeted with very little effort.</div>
      <div class="who"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/alan.png" alt="" /> Alan Downie, <a href="https://bugherd.com" target="blank">BugHerd</a></div>
    </div>
  </div>
</section><section id="middle">
<div class="inner">
  <div id="about">
    <h4>About BugHerd</h4>
    BugHerd is a SaaS application that makes it easy for web designers and developers to collaborate visually when creating websites and web applications. With the click of a button users can "add a bug" to any part of a website.

    Founded in 2011, BugHerd use lifecycle email to increase the number of users that become active users after signing up for a free trial and the number of active users that ultimately become paying customers.
  </div>
  <ul id="reasons" class="list-unstyled">
    <li>
      <h3 class="h4">A/B test campaigns like your landing pages</h3>
      Alan uses analytics to track everything BugHerd's customers do. "Making changes to landing pages, features, roadmaps - it all relies on data. I find it interesting that so few companies spend time working to A/B test and optimize their automated email campaigns when the conversion rate optimization industry is so large: if you're going to invest in A/B testing your landing pages you should spend as much time A/B testing your campaigns. It's certainly worked for us".</li>
      <li>
        <h3 class="h4">Edit emails on the fly without deploying</h3>
        "I've got a technical background and, even so, the less technical work I have to do to accomplish something the happier I am." Vero allows Alan to deploy email changes without updating code or deploying hard-coded copy. "Being able to manipulate campaigns on the fly gives us the power to try new ideas more often. Lots of things fail but the faster you can try things out the faster you'll come up with a winner. Using Vero is multitudes faster then deploying our own mailers in Rails".</li>
        <li>
          <h3 class="h4">Automate, automate, automate.</h3>
          "When we find something that works we want it to run all the time and we want it to run smoothly. Vero's automated campaigns mean we can set and forget our winning emails without having to worry whether they'll go out or whether someone will remember to chase customers." Automated email campaigns give businesses the power to permanently increase conversions, "we increased our activation rate to 61% using every trick we could and, thanks to testing, have now been able to automated campaigns that increased our activation a further 35%. The great thing is, as long as these campaigns are running, that conversion rate will stay super high."</li>
        </ul>
      </div>
    </section><section id="more">
    <div class="inner">
      <ul class="list-unstyled list-inline">
        <li>
          <h3 class="h4">More case studies</h3>
        </li>
        <li><a href="/success-stories/shoes-of-prey"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/sop-small.png" alt="" /></a></li>
        <li><a href="/success-stories/wooga"><img src="//veropublic.wpengine.com/wp-content/uploads/2014/08/wooga-small.png" alt="" /></a></li>
      </ul>
    </div>
  </section>
  <?php 
  no_content_genesis_footer();
  ?>