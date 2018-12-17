<div id="self-hosted-form">
  <div class="inner">
    <div id="enquire-intro" class="center-text">
      <h2>We're here to answer your questions</h2>
      <p class="medium">Fill out the form below and our Success Team will get back to you promptly. We're keen to learn more about your needs and share if and how Vero can work for you.</p>
    </div>
    <div id="thanks" class="center-text">
      <h2>Thanks!</h2>
      <p>One of our Customer Success engineers will be in touch soon.</p>
    </div>
    <div id="thanks">
      <h3>Thanks!</h3>
      <p>One of our Customer Success engineers will be in touch soon.</p>
    </div>
    <form id="high-volume-sender-form" action='https://app.getvero.com/demos' method='post'>
      <div class="half">
        <div class="form-group"><label>Name: <span>*</span></label><input id="sender_name" class="form-control" name="name" type="text" autofocus="autofocus" /></div>
        <div class="form-group"><label>Email: <span>*</span></label><input id="sender_email_address" class="form-control" name="email" type="text" /></div>
        <div class="form-group"><label>Phone:</label><input id="sender_phone" class="form-control" name="phone" type="text" /></div>
        <div class="form-group"><label>Company name: <span>*</span></label><input id="sender_company_name" class="form-control" name="company_name" type="text" /></div>
      </div>
      <div class="half">
        <hidden id="sender_subscribers" class="form-control" name="subscribers" value="self-hosted">
        <div class="form-group"><label>Current number of emails sent monthy:</label><select id="sender_emails" class="form-control" name="monthly_emails">
          <option value="1000000">400,000 - 1,000,000 emails</option>
          <option value="1000000">1,000,000 - 5,000,000 emails</option>
          <option value="10000000">5,000,000 - 10,000,000 emails</option>
          <option value="50000000">10,000,000 - 50,000,000 emails</option>
          <option value="more">50,000,000+ emails</option></select></div>
        <!-- <div class="form-group"><label>Select data region you're interested in:</label><select id="sender_region" class="form-control" name="monthly_emails">
          <option value="not-important">Not important (agnostic)</option>
          <option value="usa">North America</option>
          <option value="eea">Europe (EEA)</option>
          <option value="au">Australia</option>
          <option value="china">China</option></select></div> -->
        <div class="radio-group">
          <label>Preferred contact method:</label><br>
          <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
          <label class="method" for="email">Email</label>
          <input id="phone" name="contact_method" type="radio" value="phone" />
          <label class="method" for="phone">Phone</label>
        </div>
        <div class="checkbox">
          <input name="contact_by_fax_only" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false" />
        </div>
      </div>
      <div class="full-width center-text">
        <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock">
        <input type="submit" value="Get in touch" id="request-demo" class="btn btn-success">
      </div>
    </form>
  </div>
  <div class="modal_close"><span class="fa fa-close"></span></div>
</div>