<div class="modal modal-demo" id="demo">
  <div class="center-text bottom-margin-small" id="enquire-intro" >
    <p>Fill out the form below and our sales team will get back to you promptly. We're keen to learn more about your needs and share if and how Vero can work for you.</p>
  </div>
  <div class="center-text bottom-margin-small" id="thanks">
    <h2>Thanks!</h2>
    <p>Hang tight, one of our Customer Success engineers will be in touch soon.</p>
  </div>
  <form class="flex flex-nowrap md-flex-wrap" id="high-volume-sender-form" action='https://app.getvero.com/demos' method='post'>
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
    <div class="full-width bottom-margin-small center-text">
      <input type="hidden" name="redirect_on_success" value="https://www.getvero.com/email-marketing-demo/?thanks=yourock">
      <input class="btn btn-medium btn-success" id="request-demo" type="submit" value="Get in touch" >
    </div>
    <p class="annotation light faded center-text">In order to provide our service to you, we must store your personal information. Any personal data that we collect will be handled in accordance with our  <a href="/privacy">Privacy Notice</a>.</p>
  </form>

  <div class="modal-close">
    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"><path fill="#384254" fill-rule="evenodd" d="M8.086 9.5L4.35 5.765a1 1 0 0 1 1.414-1.414L9.5 8.086l3.735-3.735a1 1 0 1 1 1.414 1.414L10.914 9.5l3.735 3.735a1 1 0 1 1-1.414 1.414L9.5 10.914 5.765 14.65a1 1 0 0 1-1.414-1.414L8.086 9.5z"></path></svg>
  </div>
</div>