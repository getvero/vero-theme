<?php 
add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'faq';
  return $classes;  
}

include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="inner center-text">
    <h1>Questions? Get the answers</h1>
    <h2>Find answers to commonly asked questions below, or ask our awesome support team for help.</h2>
    <a href="mailto:support@getvero.com" class="btn btn-large btn-primary">Email Us</a>
  </div>
</section>

<section class="inner">
  <aside class="sidebar sidebar-primary widget-area" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
    <section class="widget widget-first">
      <div class="widget-wrap">
        <h4 class="widget-title widgettitle">FAQ</h4>
        <ul>
          <li>
            <a href="#tags">What are tags?</a>
          </li>
          <li><a href="">Find answers to commonly asked questions below, or ask our awesome <li><a href="">support team for help.</a></li>
          <li><a href="">What are tags?</a></li>
          <li><a href="">What is a newsletter?</a></li>
          <li><a href="">What is a triggered email?</a></li>
          <li><a href="">What is a transactional email?</a></li>
          <li><a href="">What is a behavioural email?</a></li>
          <li><a href="">What is a segment?</a></li>
          <li><a href="">What are projects?</a></li>
          <li><a href="">Can I track conversions on my website for an email?</a></li>
          <li><a href="">Can I import via CSV?</a></li>
          <li><a href="">How do I insert merge tags (using Liquid) in my emails?</a></li>
          <li><a href="">What happens if I go over my subscription limit?</a></li>
          <li><a href="">What happens if I pay annually?</a></li>
          <li><a href="">How do I send emails from my domain using DNS?</a></li>
          <li><a href="">Does the data I send Vero belong to me?</a></li>
          <li><a href="">Can I invite team members to Vero?</a></li>
          <li><a href="">Can I build a drip campaign?</a></li>
          <li><a href="">Can I A/B test my emails?</a></li>
          <li><a href="">How do I use an email provider like Sendgrid, Mailgun or Mandrill?</a></li>
          <li><a href="">What platforms do you integrate with? </a></li>
          <li><a href="">How do I integrate with Segment.io?</a></li>
          <li><a href="">How do we handle support?</a></li>
          <li><a href="">How do I use Vero's External Attributes feature?</a></li>
        </ul>
      </div>
    </section>
  </aside>
  <main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <article id="tags">
      <h2>What are tags?</h2>
      <p>Tags are easy way to enhance segmentation. You can manually add tags to individuals or you can automate the process by adding tags when new users fill out forms, make purchases or register for your service. When you create segments, you can filter users based on which tags they have and which they don't.</p>
    </article>
    <article id="newsletter">
      <h2>What is a newsletter?</h2>
      <p>A newsletter is a one-off email. They are different than triggered emails because they are manually sent or scheduled. You can define who receives the email based on your segments. You could, for example, send an a weekly email newsletter to everyone in the segment "Blog Subscribers" or send a coupon to everyone not in the segment "Current Customers". Because segments are so powerful, it's easy to send highly personalized newsetters rather than blasting the same message to everyone in your database.</p>
      <p>Vero newsletters aslo offer the ability to track conversions and A/B test subject lines, designs and body copy.</p>
    </article>
    <article id="triggered">
      <h2>What is a triggered email?</h2>
      <p>A triggered email is a message that is as a result of a user action. Here are a few examples:</p>
      <p>A customer makes a purchase, they recieve a receipt. A new person subscribes to your newsletter, they receive a welcome email. A user doesn't engage with your SaaS app for 2 weeks, they receive a reminder.</p>
      <p>Vero users can define a wide range of actions that can be used as triggers. Emails can be sent immediately, after a set time period or relative to another variable, like a date. Here is an example:</p>
      <p>You run a hotel booking service. A user checks pricing for a room on a holiday weekend. You capture the data as an event, then trigger an email two weeks before the date they searched for.</p>
      <p>In general, triggered emails are very powerful because they have context in a way that newsletters can't.</p>
    </article>
    <article id="transactional">
      <h2>What is a transactional email?</h2>
      <p>A transactional email is a type of triggered email that users cannot unsubscribe from. For this reason, they should be used very carefully. Receipts, invoices and account statements are examples of transactional email. They are required, so users cannot opt out.</p>
      <p>We recommend that you invest time making your transactionals mobile-responsive and consistent with your brand since they are opened at up to 8x the rate as promotional emails. We created the Complete Guide to Transactional Email to give marketers inspiration for making better use of these emails.</p>
    </article>
    <article id="behavioral">
      <h2>What is a behavioural email?</h2>
      <p>A behavioural email is also triggered by an event or action but is designed to serve a marketing purpose. These emails must include an option to unsubscribe.</p>
      <p>In Vero, behavioural emails power drip campaigns and autoresponders but can also be used to send highly personlized emails based on current and past user behaviour. Here are a few examples:</p>
      <p>Send new subscribers a series of welcome emails. Send a coupon code when a customer views a product page three times in one week but doesn't make a purchase. Remind your users about app features they haven't tried yet.</p>
      <p>Behavioural emails are setup as campaigns by defualt. An event can trigger a single email or a series. The frequency of the emails in a behavioural series can be based on date or other variables. Vero's behavioural emails replace exporting user data, creating new segments in Excel and uploading new lists. It's the fastest, easiest way to send highly personalized, timely emails.</p>
    <article id="segments">
      <h2>What is a segment?</h2>
      <p>Segments are one of the key features that make Vero so powerful.</p>
      <p>Vero uses segments in place of lists. Lists are made up of a static group of users while segments are dynamic groups created by filtering conditions, such as tags, events, behaviour and past emails.</p>
      <p>For example, you might create a segment called Paying customers by including any user that has triggered Charges Card at least once. This segment would then automatically include anyone that has triggered this event in the past and anyone who does in the future.</p>
      <p>Segments are then used when sending newsletters and creating triggered emails.</p>
    </article>
    <article>
      <h2>What are projects?</h2>
    </article>
    <article id="conversions">
      <h2>Can I track conversions on my website for an email?</h2>
      <p>How do I use HTML templates in Vero? Using the Templates menu in Vero you can upload any custom HTML template you like. Vero fully supports media queries and responsive templates.</p>
      <p>Once uploaded you can select and use a template in multiple email campaigns (newsletters, transactional, behavioral).</p>
      <p>To ensure your templates are as flexible as possible, you need to mark which sections of the template should be updated when creating each new campaign. To mark a section as editable using our WYSIWYG editor, add the CSS class vero-editable to the div, td or p HTML tag you want editable. You can use our default templates as examples to see how they are structured.</p>
      <p>[INSERT SCREENSHOT OF A VERO-EDITABLE CLASS HERE]]</p>
    </article>
    <article id="csv">
      <h2>Can I import via CSV?</h2>
      <p>Yes, you can import both users and actions into Vero via CSV.</p>
      <p>CSV imports are predominantely used to backfill data in Vero or manually move data between email service providers or other tools. To import via CSV, visit the Segments section and select Import CSV (at the top right). You will be shown the exact fields you need to import in order to successfully update user attributes or actions.</p>
      <p>When you are importing actions, you can choose whether the import should trigger emails or not. This is important since you could accidentally trigger emails to these users based on your existing transactional or behavioural campaigns</p>
      <p>Note that the CSV uploader can handle files up to around 50,000 rows at a time. If you have larger CSVs please split them up or get in touch via email and pass along the file – we're happy to help.</p>
      <p>How do I migrate from another email provider?</h2>
      <p>When migrating from a traditional email provider (Mailchimp, AWeber, Campaign Monitor, etc.) there are two key things you need to know:</p>
      <p>Vero does not have lists. Almost all traditional newsletter providers have lists. A list is a static group of subscribers. Sometimes things can get confusing when customers belong to many lists at the same time, or you want to automate emails and have customers move from one list to another. Vero replaces static lists with powerful dynamic segments. Your Vero database contains individual entries for each of your subscribers and tracks their attributes, actions and past emails you've sent. You can use this data to create dynamic segments or use them as static segments. When automating your campaigns, you include or exclude segments to email the desired group. You get the most value from Vero by installing our Javascript snippet (or use our other API integrations) to capture data in real-time, rather than via a simple form or via CSV imports. Learn how to install our API.</p>
      <p>To migrate, you should export all of your lists into one (or many, if you have more than 50,000 users) CSV files and import them into Vero. We recommend you use tags to keep a record of the lists your subscribers were on previously. You can segment based on tags, so you can always see who started where, and this can be helpful to check you've imported all your data.</p>
      <p>You will also need to export and import your email templates. This is a relatively simple task from most email providers. Learn how Vero's WYSIWYG template editor works and how to replace your merge tags.</p>
    </article>
    <article id="merge-tags">
      <h2>How do I insert merge tags (using Liquid) in my emails?</h2>
      <p>When creating campaigns in Vero — whether you're using templates or standard rich text — you can insert dynamic variables using the Liquid markup language. Here's a list of the key variables and functions you can use:</p>
      <ul class="list-unstyled">
        <li><span class="liquid">{{user.attribute}}</span> replace attribute with the name of any user attribute you've captured with our API or uploaded via CSV. For example, {{user.first_name}} would print John for a user profile that has the attribute first_name with value John.</li>
        <li><span class="liquid">{{event.attribute}}</span> replace attribute with the name of any event attribute you've captured with our API or uploaded via CSV. For example, {{event.product_name}} would print Apple MacBook Pro for an event that has the attribute product_name with value Apple MacBook Pro. Note that you can only access event attributea for the trigger event of a triggered email.</li>
        <li><span class="liquid">{{url.unsubscribe_link}}</span> inserts a direct URL (e.g. http://getvero.com/unsubscribe/xyz) that unsubscribes your customers in one click.</li>
        <li><span class="liquid">{{url.unsubscribe}}</span> inserts an actual link with the word Unsubscribe and points to the link referenced by {{url.unsubscribe_link}} above.</li>
        <li><span class="liquid">{{url.permalink_link}}</span> inserts a direct URL (e.g. http://getvero.com/view-online/xyz) that points to an online, hosted version of each individual user.</li>
        <li><span class="liquid">{{url.permalink}}</span> inserts an actual link with the words View in browser and points to the link referenced by {{url.permalink_link}} above.</li>
      </ul>
      <p>We have also written a series of custom Liquid functions to make your life easier:
      <ul class="list-unstyled">
        <li><span class="liquid">{{ user.email | encode }}</span> allows you to URL encode the provided value. If user.email was equal to damien+test@getvero.com it would be rendered as damien%2Btest%40getvero.com after encoding.</li>
        <li><span class="liquid">{{event.invoice_ref | format: '%05d'}}</span> allows you to reformat numerical variables (integers, floats, octal numbers, strings, unsigned decimals and hexadecimals). You can use any formating from the print format cheat sheet.</li>
        <li><span class="liquid">{{event.price | precision: 2}}</span> allows you to change the precision of integers. As an example, 2.0554 would become 2.06 with a precision of two.</li>
        <li><span class="liquid">{{ event.purchase_date | time_zone: 'Sydney' | date: '%d/%m/%Y %H:%M:%S %Z' }}</span> allows you to change the timezone and format of an attribute. The attribute must be a number. You can use any of the timezone values from the TZ column of this guide to timezones. This time formating tool can help you build the formatting string for output.</p></li>
      </ul>
      <p>We have some custom functions for our External Attributes feature specifically:</p>
      <ul class="list-unstyled">
        <li><span class="liquid">{% fetch_html | 'http://yourdomain.com/page.html?params={{user.id}}' %}</span> allows you to pull custom HTML data into your emails from your own web server. This is an advanced feature and you can read more about our <a href="#external-attributes">External Attributes</a> tool below.</li>
      </ul>
    </article>
    <article>
      <h2>What happens if I go over my subscription limit?</h2>
      <p>Vero will send you an email when you cross the subscriber or email thresholds over a 30-day period. You will automatically be upgraded to the appropriate plan.</p>
      <p>You can downgrade at any time and, if your usage fluctuates, can minimize your spend each and every month.</p>
    </article>
    <article>
      <h2>What happens if I pay annually?</h2>
      <p>By choosing to pay annually,  you get two months of Vero free each year.</p>
      <p>Paying annually also means your email limits are spread out across the year. For example, if you are on our $149/month plan and can send up to 175,000 emails per month, on our annual plan you can send up to 2,100,000 emails per year. This means that seasonal spikes in email volume will not require you to go up a plan, saving you even more.</p>
    </article>
    <article>
      <h2>How do I send emails from my domain using DNS?</h2>
      <p>When you sign up to Vero we send your emails from our own domain. This means that your users will see "sent via getveromail.com" or similar in some email clients (including Gmail). By signing your domain using DNS, you can remove this and send emails from your own domain. This means Vero is completely invisible. We highly recommend this to ensure that your emails have the best chance of reaching your users' inboxes. To sign your domain, head to the Account section in Vero, select Configuration and the Email Provider drop-down. From here you need to select Request DNS Records and you will be given the values you need to copy and paste into your DNS records setup.</p>
    </article>
    <article>
      <h2>Does the data I send Vero belong to me?</h2>
      <p>Absolutely. Vero is a platform designed to help you send better emails to your users. The data you send us is stored  as required to deliver the Vero service you require. At any time you can export or request to remove your data – it is entirely yours. Read our Terms of Service for full details.</p>
    </article>
    <article>
      <h2>Can I invite team members to Vero?</h2>
      <p>On our $149/month and above plans you can manage multiple team members with multiple levels of access (read, write and admin). On these plans, visit the Account menu and select Team to add and manage user profiles.</p>
    </article>
    <article>
      <h2>Can I build a drip campaign?</h2>
      <p>In Vero drip campaigns, also known as autoresponders, are part of our behavioral emails. To create a drip campaign, setup a new behavioral campaign and follows the steps to define your targeting and email content. Once saved you are taken to the campaign snapshot where you can choose to Add an email to your series.  Emails in a series are triggered via the previous email and each email can have its own filter conditions. If an email in a series goes out, no emails following this email will be sent.</p>
    </article>
    <article>
      <h2>Can I A/B test my emails?</h2>
      <p>In Vero you can A/B test all of your email campaigns: newsletters, transactional emails and behavioral emails. 
      <p>You can A/B test subject lines, from addresses, body content and templates. You are also able to select the split rate for each variation. If you are A/B testing a drip behavioral campaign, A/B tests run across the entire series. If you add variation B, it will be added to each email in the series. If one of your users receives variation B for the first email in the series, they'll get it the entire way. This allows you to test entirely different templates or from addresses without your customers getting confusing messages.</p>
    </article>
    <article>
      <h2>How do I use an email provider like Sendgrid, Mailgun or Mandrill?</h2>
      <p>By default Vero will handle your delivery for you, optimized to ensure your emails reach your inbox but Vero also allows you to send your emails via your favourite transactional email provider, such as SendGrid.  To do so, visit the Account section of your Vero account, select the Configuration tab and choose Email Providers. Here you can select two primary options: Vero's delivery infrastructure or your favourite provider.</p>
      <p>Vero currently supports SendGrid and Mailgun. To enable the provider in question, simply select it from the list, enter your API credentials and hit Save and you're good to go.</p>
    </article>
    <article>
      <h2>What platforms do you integrate with? </h2>
      <p>Vero's API is designed to be flexible and robust. Despite giving you a lot of power there are a ton of great platforms out there that allow you to send more data to Vero. We're constantly rolling out more integrations. Right now we support the following: 
      <ul class="list-unstyled">
        <li>Zapier – allowing you to send events and updates to user profiles to Vero from virtually any other online service.</li>
        <li>KISSmetrics – you can track the same actions you track with KISSmetrics' Javascript integration in Vero with a few lines of copy/paste.</li>
        <li>Mixpanel – alternately, you can track the same actions you track with Mixpanel's Javascript integration in Vero with a few lines of copy/paste.</p></li>
      </ul>
    </article>
    <article>
      <h2>How do I integrate with Segment.io?</h2>
      <p>Segment is a flexible and fast alternative to setting up Vero. They are a customer data hub for easily installing analytics and growth tools. There are three reasons we like Segment at Vero:</p>
      <p>With one integration you can send the same customer data you send to Vero to over 100 other complementary services including KISSmetrics, Mixpanel, Woopra, Perfect Audience and many others.</p>
      <p>If you want to integrate server-side, Segment offers client libraries for iOS, Android, Xamarin, Javascript, Ruby, Node.js, Python, PHP, Java, .NET, Go and Clojure. When you integrate with Segment, you don’t need to worry about updating any of these libraries – they take care of maintenance for you.</p>
      <p>You can start using Segment with zero code via their one click-to-install plugins for many popular e-commerce and blogging platforms including Magento, WooCommerce, WordPress, WP eCommerce and Goodsie.</p>
      <p>We're also on great terms with the team there and Vero’s integration with Segment is fully supported by both Vero and Segment. To get going, read Segment's docs for Vero setup.</p>
    </article>
    <article>
      <h2>How do we handle support?</h2>
      <p>At Vero we use email as our primary support channel. Our aim is to respond to all tickets within a few hours and wrk with you closely on any specific or technical issues. </p>
      <p>We want your experience with our support to be the best experience you've ever had, not just the best you've had with an online service, or the best you've had this week. If you think we've done a great job, or if we could do better next time, please email us an let us know.</p></p>
    </article>
    <article id="external-attributes">
      <h2>How do I use Vero's External Attributes feature?</h2>
      <p>One of Vero's most powerful features is External Attributes. This feature allows you to pull data from your own web server and include it in an email before it is sent to your users. For example, you might want to pull in recommended products or the latest number for a certain statistic. </p>
      <p>You can pull data in two ways:</p>
      <p>As HTML. To do this you use a custom filter using we've built using the Liquid templating language. You can read about tcan read about this filter in the merge tags section above. </p>
      <p>As JSON. Alternately, you can include an API end-point and pull JSON data from your web server to be used when creating a campaign via our {{external}} merge tag. Read how to do this in the merge tags section above.</p>
      <p>External Attributes is an advanced feature and, as it is intensive, is only available on our $299/month plan and above.</p>
    </article>  
  </main>
</section>

<?php 
no_content_genesis_footer();
?>