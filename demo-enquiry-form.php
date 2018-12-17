<div id="demo">
  <div class="inner">
    <div id="enquire-intro" class="center-text">
      <p class="regular">Fill out the form below and our sales team will get back to you promptly. We're keen to learn more about your needs and share if and how Vero can work for you.</p>
    </div>
    <div id="thanks" class="center-text">
      <h2>Thanks!</h2>
      <p>Hang tight, one of our Customer Success engineers will be in touch soon.</p>
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
      </div>
      <div class="half">
        <div class="form-group"><label>Company name: <span>*</span></label><input id="sender_company_name" class="form-control" name="company_name" type="text" /></div>
        <div class="form-group"><label>How many subscribers do you have?</label>
          <select id="sender_subscribers" class="form-control" name="subscribers">
            <option value="250000">175,000 - 250,000 subscribers</option>
            <option value="500000">250,000 - 500,000 subscribers</option>
            <option value="1000000">500,000 - 1,000,000 subscribers</option>
            <option value="5000000">1,000,000 - 5,000,000 subscribers</option>
            <option value="10000000">5,000,000 - 10,000,000 subscribers</option>
            <option value="more">10,000,000+ subscribers</option>
          </select>
        </div>
        <div class="radio-group">
          <label>How would you like us to contact you?</label><br>
          <input id="email" checked="checked" name="contact_method" type="radio" value="email" />
          <label class="method" for="email">Email</label>
          <input id="phone" name="contact_method" type="radio" value="phone" />
          <label class="method" for="phone">Phone</label>
        </div>
        <div class="checkbox">
          <input name="contact_by_fax_only" type="checkbox" value="1" style="display:none !important" tabindex="-1" autocomplete="false" />
        </div>
      </div>
      <div class="full-width top-padding-small center-text">
        <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock">
        <input type="submit" value="Get in touch" id="request-demo" class="btn btn-success">
      </div>
      <p class="small light faded center-text">In order to provide our service to you, we must store your personal information. Any personal data that we collect will be handled in accordance with our  <a href="/privacy">Privacy Notice</a>.</p>
    </form>
  </div>
  <div class="modal_close"><span class="fa fa-close"></span></div>
</div>