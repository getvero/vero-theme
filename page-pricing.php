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
  <section id="left">
      <h1>Send smarter emails at a great price.</h1>
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
          <td>400,000</td>
          <td>150,000</td>
          <td>$299</td>
        </tr>
        <tr>
          <td>700,000</td>
          <td>300,000</td>
          <td>$549</td>
        </tr>
        <tr>
          <td>750,000</td>
          <td>500,000</td>
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
      <h2>Need more power?</h2>
      <p>Don’t worry if the threshholds above aren’t powerful enough for you. It’s easy and affordable to add on.</p>
      <p>Enquire about our <a href="/high-volume-senders">high volume plans</a></p>
  </section>
  <section id="right">
    <div class="color">
      <div class="arrow"></div>

      <form accept-charset="UTF-8" action="/users" method="post"><div style="margin:0;padding:0;display:inline"><input autocomplete="off" name="utf8" type="hidden" value="✓"><input autocomplete="off" name="authenticity_token" type="hidden" value="2omPCu2QyiGxAC+pIz9v6aml1dClsIAy0eC7kQrTVKs="></div>
      <div class="form-group">
        <label>Name</label>
        <input autocomplete="off" autofocus="autofocus" class="form-control" id="user_name" name="user[name]" placeholder="Steve Vero" type="text">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input autocomplete="off" class="form-control" id="user_email" name="user[email]" placeholder="steve@getvero.com" type="text" value="">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input autocomplete="off" class="form-control" id="user_password" name="user[password]" placeholder="Secure password (must include one upper-case, one lower-case, one number)" type="password">
      </div>

      <div class="form-group">
        <input class="btn btn-warning" name="commit" type="submit" value="Get started now">
        <p class="small center-text">No credit card required.</p>
      </div>
      </form>

      <div id="happy" class="center-text">
        <p><img src="/wp-content/themes/vero/assets/images/pricing/happy.png"/></p>
        <p><strong>Not happy?</strong> We'll refund you, no questions asked.</p>
      </div>

      <div id="customers">
        <p>Join 300+ happy customers sending over 50 million emails every month.</p>
        <p>
          <img src="/wp-content/themes/vero/assets/images/pricing/rackspace.png">
          <img src="/wp-content/themes/vero/assets/images/pricing/qualaroo.png">
          <img src="/wp-content/themes/vero/assets/images/pricing/freelancer.png">
          <img src="/wp-content/themes/vero/assets/images/pricing/pipedrive.png">
        </p>
      </div>

      <div id="testimonial">
        <img src="/wp-content/themes/vero/assets/images/pricing/alaister.png">
        <p><em>"Vero gives us an easy way to manage all our emails in one place. All we needed from design to stakeholders reports are available with a few clicks."</em></p>
        <p class="who small">– Alaister Low, Director of Customer Experience, Freelancer</p>
    </div>
  </section>
</div>
<?php 
no_content_genesis_footer();
?>