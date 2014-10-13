<?php 
  //Remove the entry header markup (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title');
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

  //Force full width layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
 $classes[] = 'full-width';
 return $classes;
}

remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_after_header', 'do_welcome_nav');
function do_welcome_nav() {
  echo '<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"><div class="wrap">';
  ?>
  <form class="form-inline" accept-charset="UTF-8" action="https://app.getvero.com/users" method="post">
    <li id="logo" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.getvero.com"><img src="/wp-content/themes/vero/assets/images/logo-blue.png">Vero</a></li>
    <li class="labels">
      <span><strong>Start your 14-day free trial</strong></span>
      <span>Plans start at $99/month</span>
    </li>
    <li class="email">
      <input id="user_fname" name="user[fname]" type="hidden" value="-">
      <input id="user_email" name="user[email]" placeholder="Your email" type="text">
      <input id="user_password" name="user[password]" placeholder="Your password" type="password">
    </li>
    <li class="submit">
      <input name="button" class="btn btn-warning" type="submit" value="Start sending emails"/>
    </li>
    <li class="login"><a href="https://app.getvero.com/login">Login</a></li>
  </form>
  <?php
  echo '</div></nav>';
}

include 'pages-shared/static-header.php';
?>
<section id="top" class="center-text">
  <div class="inner">
    <h1>Send emails based on what your customers do</h1>
    <h2 class="h3">Your customers are individuals. Track what each one does and send them relevant emails like never before.</h2>
  </div>
  <div class="inner">
    <div class='half'><ul class='list-unstyled'>
      <li><span class="icon"><img src='/wp-content/themes/vero/assets/images/tick-white.jpg' /></span><a href="#vero-conditions" class='slider'>Trigger emails based on customers' actions, not just attributes</a></li>
      <li><span class="icon"><img src='/wp-content/themes/vero/assets/images/tick-white.jpg' /></span><a href="#vero-ab-test" class='slider'>A/B test your newsletters, behavioural and transactional emails</a></li>
      <li><span class="icon"><img src='/wp-content/themes/vero/assets/images/tick-white.jpg' /></span><a href="#vero-segments" class='slider'>Create segments and newsletter campaigns with more clarity</a></li>
      <li><span class="icon"><img src='/wp-content/themes/vero/assets/images/tick-white.jpg' /></span><a href="#all-your-emails" class='slider'>Update all of your email marketing campaigns</a></li>
    </ul></div>
    <div class='half'><img src="/wp-content/themes/vero/assets/images/what-is-vero.png" alt="" /></div>
  </div>
</section>
<section id="signup">
  <div class='inner'>
    <div class='half signup-content'>
      <form accept-charset="UTF-8" action="https://app.getvero.com/users" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="h5HAvhdzLd3kN1N2oUVR54Iu8rPLv3TBzK5WQbTDzAE="><input id="user_fname" name="user[fname]" type="hidden" value="-"></div><div class='form-group'><input id="user_email" name="user[email]" placeholder="Your email" type="text"></div><div class='form-group'><input id="user_password" name="user[password]" placeholder="Your password" type="password"></div><div class='form-group'><button class='btn btn-xlarge btn-success' name="button" type="submit">Sign up and receive a FREE guide to Email Marketing</button></div>
      </form>
    </div>
    <div class='half customers'>
      <h4>Some amazing happy customers</h4>
      <ul class='list-unstyled'>
        <li><img src='/wp-content/themes/vero/assets/images/customers/freelancer.png' alt='' /></li>
        <li><img src='/wp-content/themes/vero/assets/images/customers/qualaroo.png' alt='' /></li>
        <li><img src='/wp-content/themes/vero/assets/images/customers/rackspace.png' alt='' /></li>
        <li><img src='/wp-content/themes/vero/assets/images/customers/pipedrive.png' alt='' /></li>
      </ul>
    </div>
  </div>
</section>
<section id="testimonials">
  <div class='inner'>
    <h3>A few reasons why <u>Vero is trusted</u> by so many leaders</h3>
    <ul class="list-unstyled">
      <li>
        <div class="number"><span class="large">35%</span><span class="what">SaaS Activation</span><span class="how"><img src="/wp-content/themes/vero/assets/images/welcome/testing.jpg" alt="" />A/B Testing</span></div>
        <div class="quote">
          <div class="p">Lifecycle email is super important to our business. From day one we've sent emails to our customers to increase user engagement and activity. Vero helps us A/B test ideas rapidly and make our emails even more targeted with very little effort.</div>
          <div class="who">Alan Downie, <a href="https://bugherd.com" target="blank">BugHerd</a><img src="/wp-content/uploads/2014/07/alan-ee140c789037369523a1e7fb694a43fa.png" alt="" /></div>
        </div></li>
        <li>
          <div class="number"><span class="large">27%</span><span class="what">Repeat purchases</span><span class="how"><img src="/wp-content/themes/vero/assets/images/welcome/automation.jpg" alt="" />Automated campaigns</span></div>
          <div class="quote">
            <div class="p">Vero allows us to go beyond the standard 'cart abandonment' campaigns that you see. Our customers receive truly personalised content each and every time we email them based on their on-site interactions. You can't beat that!</div>
            <div class="who">Joel Pinkham, <a href="https://shoesofprey.com" target="blank">Shoes of Prey</a><img src="/wp-content/uploads/2014/07/joel-1504848e9bb5443bf706fade4fa3eafc.jpg" alt="" /></div>
          </div></li>
          <li class="wooga">
            <div class="number"><span class="large">20M</span><span class="what">Targeted Monthly</span><span class="how"><img src="/wp-content/themes/vero/assets/images/welcome/segmentation.jpg" alt="" />Automated campaigns</span></div>
            <div class="quote">
              <div class="p">Vero makes it easy for us to deploy, manage and measure complex campaigns across 11 different languages and multiple mobile and online games with ease. Our marketing team would waste hours without it.</div>
              <div class="who">Jan Miczaika, <a href="https://wooga.com" target="blank">Wooga</a><img src="/wp-content/uploads/2014/07/jan-2f5e1f4daf10c879a1844f4d079f4689.png" alt="" /></div>
            </div></li>
          </ul>
        </div>
      </section>
      <section id="vero-conditions" class="feature">
        <div class="inner">
          <h3>The email platform that builds individual profiles for <b>each customer</b>, Vero <u>helps you</u> send the <b>right email</b> at the <b>right time</b></h3>
          <div class="half"><img src="/wp-content/themes/vero/assets/images/welcome/automated-emails.jpg" alt="Automated" /></div>
          <div class="half">
            <h5>Automate emails using your customers' on-site activity</h5>
            Vero uses Javascript and a real-time API to track who is on your website, what pages they are viewing and when they take critical steps in your customer lifecycle.

            This data is collated in Vero and you can use our visual rule builder to setup complex automated campaigns without writing code or nightly scripts. By automating your most successful email campaigns you can send targeted emails at the right time, all the time, increasing conversions consistently.

          </div>
        </div>
      </section><section id="vero-ab-test" class="feature">
      <div class="inner">
        <div class="half"><img src="/wp-content/themes/vero/assets/images/welcome/ab-test.jpg" alt="Ab" /></div>
        <div class="half">
          <h5>A/B test your newsletter, behavioral and transactional campaigns</h5>
          Learning which subject line, from address, body copy or template your customers relate to best is what defines a great marketer.

          A/B testing is important for <b>all</b>of your email campaigns and testing newsletters, behavioral and transactional emails is made simpler with Vero. Add multiple variations to any campaign, define a split percentage and measure the results.

        </div>
      </div>
    </section><section id="vero-segments" class="feature">
    <div class="inner">
      <div class="half"><img src="/wp-content/themes/vero/assets/images/welcome/segments.jpg" alt="Segmentation" /></div>
      <div class="half">
        <h5>Use your data in outgoing emails for a personal touch</h5>
        You can capture as much data as you want about your customers and add it to their individual profiles in Vero, without restriction. From their first name to their location to which products they viewed or features they've used, you can use these details in your outgoing emails using a flexible templating language.

        Vero also provides more advanced features allowing you to get JSON and HTML data from your own webserver and insert it in each individual outgoing email. This gives you the power to do some truly remarkable personalisation and customization.

      </div>
    </div>
  </section><section id="all-your-emails" class="feature">
  <div class="inner">
    <div class="half"><img src="/wp-content/themes/vero/assets/images/welcome/all-your-emails.jpg" alt="All your campaigns" /></div>
    <div class="half">
      <h5>All of your emails in one place</h5>
      Vero gives you the power to create and update <strong>all</strong> of your email marketing campaigns including transactional campaigns, behavioral campaigns and manual newsletters.

      This means your team can make changes rapidly and improve on their results without pushing code or logging into multiple tools. Take your email to the next level with Vero.

    </div>
  </div>
</section>

<section id='bottom-signup'><div class='inner'><h3>Start your <b>free</b> <span class="underline">14 day</span> trial today</h3><form accept-charset="UTF-8" action="https://app.getvero.com/users" method="post" class='form-inline'><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="h5HAvhdzLd3kN1N2oUVR54Iu8rPLv3TBzK5WQbTDzAE="><input id="user_fname" name="user[fname]" type="hidden" value="-"></div><div class='input-group'><input id="user_email" name="user[email]" placeholder="Your email" type="text" class='form-control'></div><div class='input-group'><input id="user_password" name="user[password]" placeholder="Your password" type="password" class='form-control'></div><div class='input-group'><button name="button" type="submit" class='btn btn-success'>Sign up</button></div></form><div class="note">Sign up and received a <b>free copy</b> of 'The Ultimate Guide To Successful Email Marketing'.</div></div></section>
<?php 
no_content_genesis_footer();
?>