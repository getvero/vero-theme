<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'pricing';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<div class="inner">
  <div id="top">
    <h1 class="center-text">Send smarter emails, <br>at a great price.</h1>
  </div>
  <section id="left">
      <table><tbody>
        <tr>
          <th>Emails / month</th>
          <th>Subscribers</th>
          <th>Price / month</th>
        </tr>
        <tr>
          <td>25,000</td>
          <td>12,500</td>
          <td>$99</td>
        </tr>
        <tr>
          <td>175,000</td>
          <td>50,000</td>
          <td>$149</td>
        </tr>
        <tr>
          <td>250,000</td>
          <td>100,000</td>
          <td>$299</td>
        </tr>
        <tr>
          <td>400,000</td>
          <td>175,000</td>
          <td>$549</td>
        </tr>
        <tr>
          <td>700,000</td>
          <td>300,000</td>
          <td>$749</td>
        </tr>
        <tr>
          <td>1,000,000</td>
          <td>500,000</td>
          <td>$1,099</td>
        </tr>
        <tr>
          <td>1,500,000</td>
          <td>750,000</td>
          <td>$1,499</td>
        </tr>
        <tr>
          <td>2,500,000</td>
          <td>1,250,000</td>
          <td>$1,799</td>
        </tr>
      </tbody></table>
      <h3>Need more power?<a href="/high-volume-senders" class="btn btn-primary">See our high volume plans</a></h3>
      <p>Vero users aren't locked into any plan. Scale up to meet demand or scale down to save money.</p>
  </section>
  <section id="right">
    <div class="color">
      <p>Start a free trial, no credit card required.</p>
      <div class="deco"></div>

      <form accept-charset="UTF-8" action="https://app.getvero.com/users" method="post"><div style="margin:0;padding:0;display:inline"><input autocomplete="off" name="utf8" type="hidden" value="✓"><input autocomplete="off" name="authenticity_token" type="hidden" value="2omPCu2QyiGxAC+pIz9v6aml1dClsIAy0eC7kQrTVKs="></div>
      <div class="form-group">
        <label>Name</label>
        <input autocomplete="off" autofocus="autofocus" class="form-control" id="user_name" name="user[name]" placeholder="Tyrion Lannister" type="text">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input autocomplete="off" class="form-control" id="user_email" name="user[email]" placeholder="tyrion.lannister@casterlyrock.com" type="text" value="">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input autocomplete="off" class="form-control" id="user_password" name="user[password]" placeholder="Secure password (at least one upper-case, one lower-case, one number)" type="password">
      </div>

      <div class="form-group">
        <label>How many contacts do you have?</label>
        <select class="form-control" id="user_password" name="user[customers]" >
          <option value="1000">0 - 1,000</option>
          <option value="50000">1,000 - 50,000</option>
          <option value="100000">50,000 - 100,000</option>
          <option value="1000000">100,000 - 1,000,000</option>
          <option value="1000001">Over 1,000,000</option>
        </select>
      </div>

      <div class="form-group">
        <label>What best describes you?</label>
        <select class="form-control" id="user_password" name="user[industry]" >
          <option>Online software</option>
          <option>Mobile app</option>
          <option>eCommerce</option>
          <option>Online and social gaming</option>
          <option>Lead generation</option>
        </select>
      </div>

      <div class="form-group">
        <input class="btn" name="commit" type="submit" value="Get started now">
      </div>
      </form>

      <div id="happy">
        <img src="/wp-content/themes/vero/assets/images/pricing/badge.png"/><h5>Risk-free!</h5> <p>If you don't love Vero we'll refund you, no questions asked.</p>
      </div>

      <div id="customers" class="center-text">
        <h4 class="center-text">Join 300+ happy customers sending more than 50 million emails every month.</h4>
        <li><img src="/wp-content/themes/vero/assets/images/pricing/rackspace.png"></li>
        <li><img src="/wp-content/themes/vero/assets/images/pricing/qualaroo.png"></li>
        <li><img src="/wp-content/themes/vero/assets/images/pricing/freelancer.png"></li>
        <li><img src="/wp-content/themes/vero/assets/images/pricing/pipedrivelogo.png"></li>
      </div>
      <div class="separator"></div>
      <div id="testimonial">
        <p>"Vero gives us an easy way to manage all our emails in one place. All we needed from design to stakeholders reports are available with a few clicks."</p>
        <p class="who small">
        <img src="/wp-content/themes/vero/assets/images/pricing/alaister.png"> Alaister Low<br>Director of Customer Experience, Freelancer</p>
    </div>
  </section>
</div>
<?php 
  //no_content_genesis_footer();
?>