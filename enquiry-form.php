
<div id="demo">
  <div class="inner">
    <?php if($_GET['thanks'] == 'yourock'){?>
      <h2>Thanks!</h2>
      <p class="large">Hang tight, one of our Customer Success engineers will be in touch soon.</p>
    <?php } else { ?>
    <div class="center-text">
      <h2>Great product, at any scale.</h2>
      <p class="medium">Email is mission-critical. Talk directly to our product Success Team and learn how Vero ensures mission-critical sends of 100s of millions of emails for companies at scale.</p>
    </div>
    <div id="thanks">
      <h3>Thanks!</h3>
      <p>Hang tight, one of our Customer Success engineers will be in touch soon.</p>
    </div>
    <form id="high-volume-sender-form" action='https://app.getvero.com/demos' method='post'>
      <div class="half">
        <div class="form-group"><label>Name: <span>*</span></label><input id="sender_name" class="form-control" name="name" type="text" autofocus="autofocus" /></div>
        <div class="form-group"><label>Email: <span>*</span></label><input id="sender_email_address" class="form-control" name="email" type="text" /></div>
        <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="phone" type="text" /></div>
        <div class="form-group"><label>Company name: <span>*</span></label><input id="sender_company_name" class="form-control" name="company_name" type="text" /></div>
      </div>
      <div class="half">
        <div class="form-group"><label>Current number of subscribers:</label><select id="sender_subscribers" class="form-control" name="subscribers">
          <option value="250000">175,000 - 250,000 subscribers</option>
          <option value="500000">250,000 - 500,000 subscribers</option>
          <option value="1000000">500,000 - 1,000,000 subscribers</option>
          <option value="5000000">1,000,000 - 5,000,000 subscribers</option>
          <option value="10000000">5,000,000 - 10,000,000 subscribers</option>
          <option value="more">10,000,000+ subscribers</option></select></div>
        <div class="form-group"><label>Current number of emails sent monthy:</label><select id="sender_emails" class="form-control" name="monthly_emails">
          <option value="1000000">400,000 - 1,000,000 emails</option>
          <option value="1000000">1,000,000 - 5,000,000 emails</option>
          <option value="10000000">5,000,000 - 10,000,000 emails</option>
          <option value="50000000">10,000,000 - 50,000,000 emails</option>
          <option value="more">50,000,000+ emails</option></select></div>
        <div class="form-group"><label>Select data region you're interested in:</label><select id="sender_emails" class="form-control" name="monthly_emails">
          <option value="not-important">Not important (agnostic)</option>
          <option value="usa">USA</option>
          <option value="eea">Europe (EEA)</option>
          <option value="au">Australia</option>
          <option value="china">China</option></select></div>
        <div class="radio-group">
          <label>Preferred contact method:</label><br>
          <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
          <label class="method" for="email">Email</label>
          <input id="phone" name="contact_method" type="radio" value="phone" />
          <label class="method" for="phone">Phone</label>
        </div>
      </div>
      <div class="full-width center-text">
        <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock">
        <input type="submit" value="Get in touch" id="request-demo" class="btn btn-success">
      </div>
    </form>
    <?php } ?>
  </div>
  <div class="modal_close"><span class="fa fa-close"></span></div>
</div>