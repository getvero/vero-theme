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
    <h1>Questions? Get the answers.</h1>
    <h2 class="h5">Find answers to commonly asked questions below, or ask our awesome support team for help.</h2>
    <a href="mailto:support@getvero.com" class="btn btn-large btn-primary">Email Us</a>
  </div>
</section>
<section class="inner">
  <aside class="sidebar sidebar-primary widget-area" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
    <section class="widget widget-first">
      <div class="widget-wrap">
        <h4 class="widget-title widgettitle">Users and segments</h4>
        <ul>
          <li><a href="#users-and-actions">What are user attributes and user actions?</a></li>
          <li><a href="#tags">What are tags?</a></li>
          <li><a href="#segments">What is a segment?</a></li>
        </ul>
        <h4 class="widget-title widgettitle">Email campaigns</h4>
          <li><a href="#newsletters">What is a newsletter?</a></li>
          <li><a href="#triggered">What is a triggered email?</a></li>
          <li><a href="#transactional">What is a transactional email?</a></li>
          <li><a href="#behavioral">What is a behavioural email?</a></li>
          <li><a href="#drip-campaigns">Can I build a drip campaign?</a></li>
          <li><a href="#ab-tests">Can I A/B test my emails?</a></li>
          <li><a href="#html-templates">How do I use HTML templates in Vero?</a></li>
        </ul>
        <h4 class="widget-title widgettitle">Account configuration</h4>
          <li><a href="#projects">What are projects?</a></li>
          <li><a href="#conversions">Can I track conversions on my website for an email?</a></li>
          <li><a href="#csv">Can I import via CSV?</a></li>
          <li><a href="#migrate">How do I migrate from another email provider?</a></li>
          <li><a href="#merge-tags">How do I insert merge tags (using Liquid) in my emails?</a></li>
          <li><a href="#limit">What happens if I go over my subscription limit?</a></li>
          <li><a href="#annually">What happens if I pay annually?</a></li>
          <li><a href="#dns">How do I send emails from my domain using DNS?</a></li>
          <li><a href="#data-rights">Does the data I send Vero belong to me?</a></li>
          <li><a href="#invite-team">Can I invite team members to Vero?</a></li>
          <li><a href="#providers">How do I use an email provider like Sendgrid, Mailgun or Mandrill?</a></li>
          <li><a href="#platforms">What platforms do you integrate with? </a></li>
          <li><a href="#segmentio">How do I integrate with Segment.io?</a></li>
          <li><a href="#support">How do we handle support?</a></li>
          <li><a href="#external-attributes">How do I use Vero's External Attributes feature?</a></li>
        </ul>
      </div>
    </section>
  </aside>
  <main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

  <p class="heading" id="users-and-actions"><b>What are user attributes and user actions?</b></p>
  <p>User attributes are things that users <b>have</b> – like <i>first name, last name, age, location, lifetime value</i> – they’re the properties of the individual subscribers in your database. Usually you collect this data when users sign up on your website or fill out surveys and forms. This data is really useful for segmentation, so Vero makes it easy to capture any custom attribute that you want to.</p>
  <p>User actions are things that users <b>do </b>– like <i>sign up, check out, view a product page, subscribe to the blog</i> and so on – they’re the things individual subscribers do on your website. Usually you collect this data as customers browse your site and use it’s features. You can capture as many actions as you want for each customer using our API.</p>
  
  <p class="heading" id="tags"><b>What are tags?</b></p>
  <p>Tags are an easy way to enhance segmentation. You can manually add tags to individuals or you can automate the process by adding tags when new users fill out forms, make purchases or register for your service. When you create segments, you can filter users based on which tags they have and which they don’t.</p>
  
  <p class="heading" id="segments"><b>What is a segment?</b></p>
  <p>Segments are one of the key features that make Vero so powerful.</p>
  <p>Vero uses segments in place of lists. Lists are made up of a static group of users while segments are dynamic groups created by filtering conditions, such as tags, events, behaviour and past emails.</p>
  <p>For example, you might create a segment called <i>Paying customers</i> by including any user that <i>has triggered the event <b>Charges Card </b></i>
  <i>at least once</i>. This segment would then automatically include anyone that has triggered this event in the past and anyone who does in the future.</p>
  <p>Segments are then used when <a href="https://hackpad.com/">sending newsletters</a> and creating <a href="https://hackpad.com/">triggered emails</a>.</p>
  
  <p class="heading" id="newsletters"><b>What is a newsletter?</b></p>
  <p>A newsletter is a one-off email. These are different than triggered emails because they are manually sent or scheduled. You can define who receives the email based on your segments. You could, for example, send an a weekly email newsletter to everyone in the segment "Blog Subscribers" or send a coupon to everyone <b>not</b> in the segment "Current Customers". Because segments are so powerful, it’s easy to send highly personalized newsetters rather than blasting the same message to everyone in your database.</p>
  <p>Vero newsletters also offer the ability to track conversions and A/B test subject lines, designs and body copy.</p>
  
  <p class="heading" id="triggered"><b>What is a triggered email?</b></p>
  <p>A triggered email is a message that is sent as a result of a user’s action. Here are a few examples:</p>
  <ul>
    <li>A customer makes a purchase, they recieve a receipt.</li>
    <li>A new person subscribes to your newsletter, they receive a welcome email.</li>
    <li>A user doesn’t engage with your SaaS app for 2 weeks, they receive a reminder.</li>
  </ul>
  <p>Vero users can define a wide range of actions that can be used as triggers. Emails can be sent immediately, after a set time period or relative to another variable, like a date. Here is an example:</p>
  <ul>
    <li>You run a hotel booking service. A user checks pricing for a room on a holiday weekend. You capture the data as an event, then trigger an email two weeks before the date they searched for.</li>
  </ul>
  <p>In general, triggered emails are very powerful because they have <i>context</i> in a way that newsletters can’t.</p>
  
  <p class="heading" id="transactional"><b>What is a transactional email?</b></p>
  <p>A transactional email is a type of triggered email that users <b>cannot</b> unsubscribe from. For this reason, they should be used very carefully. Receipts, invoices and account statements are examples of transactional email. They are required, so users cannot opt out.</p>
  <p>We recommend that you invest time making your transactionals mobile-responsive and consistent with your brand since they are opened at up to 8x the rate as promotional emails. We created the <a href="http://blog.getvero.com/guides/the-complete-guide-to-transactional-email/">Complete Guide to Transactional Email</a> to give marketers inspiration for making better use of these emails.</p>
  
  <p class="heading" id="behavioral"><b>What is a behavioural email?</b></p>
  <p>A behavioural email is also triggered by an event or action but is designed to serve a marketing purpose. These emails <b>must</b> include an option to unsubscribe.</p>
  <p>In Vero, behavioural emails power drip campaigns and autoresponders but can also be used to send highly personlized emails based on current and past user behaviour. Here are a few examples:</p>
  <ul>
    <li>Send new subscribers a series of welcome emails.</li>
    <li>Send a coupon code when a customer views a product page three times in one week but doesn’t make a purchase.</li>
    <li>Remind your users about app features they haven’t tried yet.</li>
  </ul>
  <p>Behavioural emails are setup as campaigns by defualt. An event can trigger a single email or a series. The frequency of the emails in a behavioural series can be based on date or other variables. Vero’s behavioural emails replace exporting user data, creating new segments in Excel and uploading new lists. It’s the fastest, easiest way to send highly personalized, timely emails.</p>
  
  <p class="heading" id="drip-campaigns"><b>Can I build a drip campaign?</b></p>
  <p>In Vero, drip campaigns and autoresponders are part of our <a href="https://#behavioral-emails">behavioral emails</a>. To create a drip campaign, setup a new behavioral campaign and follows the steps to define your targeting and email content. Once saved you are taken to the <i>campaign snapshot</i> where you can choose to <i>Add an email</i> to your series.&nbsp;</p>
  <p>Emails in a series are triggered via the <b>previous email</b> and each email can have its own filter conditions. If an email in a series goes out, no emails following this email will be sent.</p>
  
  <p class="heading" id="ab-tests"><b>Can I A/B test my emails?</b></p>
  <p>In Vero you can A/B test all of your email campaigns: <i>newsletters, transactional emails and behavioral emails</i>.&nbsp;</p>
  <p>You can A/B test subject lines, from addresses, body content and templates. You are also able to select the split rate for each variation.</p>
  <p>If you are A/B testing a drip behavioral campaign, A/B tests run across the entire series. If you add <i>variation B</i>, it will be added to each email in the series. If one of your users receives <i>variation B</i> for the first email in the series, they’ll get it the entire way. This allows you to test entirely different templates or from addresses without your customers getting confusing messages.</p>
  
  <p class="heading" id="html-templates"><b>How do I use HTML templates in Vero?</b></p>
  <p>Using the <i>Templates</i> menu in Vero you can upload any custom HTML template you like. Vero fully supports media queries and responsive templates.</p>
  <p>Once uploaded you can select and use a template in multiple email campaigns (newsletters, transactional, behavioral).</p>
  <p>To ensure your templates are as flexible as possible, you need to mark which sections of the template should be updated when creating each new campaign. To mark a section as editable using our WYSIWYG editor, add the CSS class <i>vero-editable </i>to the <i>div, td </i>or <i>p</i> HTML tag you want editable. You can use our default templates as examples to see how they are structured.</p>
  <span class="liquid">&lt;div class=&quot;vero-editable&quot;&gt;This is an example of an editable area.&lt;/div&gt;</span>
  
  <p class="heading" id="projects"><b>What are projects?</b></p>
  <p>Projects are essentially Vero sub-accounts. Each project has a separate database, API keys and campaigns. In other words, it’s like having two Vero accounts in one.</p>
  <p>You can have up to three projects on our base plan, and many more on our higher plans. Every account gets a free ’Test’ project: designed to make it safe for you to test your campaign ideas without emailing any real customers.</p>
  <p>If you’re an agency, you may also use projects to manage multiple clients.</p>
  
  <p class="heading" id="conversions"><b>Can I track conversions on my website for an email?</b></p>
  <p>Vero allows you to set a <i>Conversion Action</i> for each of your email campaigns. When a customer opens or clicks the campaign and then returns to your website to take the action, Vero automatically records this as a conversion.</p>
  <p>This is then reported alongside opens and clicks.</p>
  
  <p class="heading" id="csv"><b>Can I import via CSV?</b></p>
  <p>Yes, you can import both <i>users</i> and <i>actions</i> into Vero via CSV.</p>
  <p>CSV imports are predominantely used to backfill data in Vero or manually move data between email service providers or other tools.</p>
  <p>To import via CSV, select 'Import... from the Configuration menu (at the top right). You will be shown the exact fields you need to import in order to successfully update user attributes or actions.</p>
  <p>When you are importing actions, you can choose whether the import should <a href="https://#triggered-emails">trigger emails</a> or not. This is important since you could accidentally trigger emails to these users based on your existing transactional or behavioural campaigns</p>
  
  <p><b>Note</b> that the CSV uploader can handle files up to around 50,000 rows at a time. If you have larger CSVs please split them up or <a href="mailto:support@getvero.com">get in touch via email</a> and pass along the file – we’re happy to help.</p>
  
  <p class="heading" id="migrate"><b>How do I migrate from another email provider?</b></p>
  <p>When migrating from a <i>traditional</i> email provider (Mailchimp, AWeber, Campaign Monitor, etc.) there are two key things you need to know:</p>
  <ol>  
    <li><p>Vero <b>does not</b> have lists. Almost all traditional newsletter providers have <i>lists</i>. A list is a static group of subscribers. Sometimes things can get confusing when customers belong to many lists at the same time, or you want to automate emails and have customers move from one list to another.</p>
    <p>Vero replaces static lists with powerful dynamic segments. Your Vero database contains individual entries for each of your subscribers and tracks their <i>attributes</i>, <i>actions</i> and past emails you’ve sent. You can use this data to create dynamic segments or use them as static segments. When automating your campaigns, you include or exclude segments to email the desired group.</li>
    <li>You get the most value from Vero by installing our Javascript snippet (or use our other API integrations) to capture data in real-time, rather than via a simple form or via CSV imports. <a href="http://www.getvero.com/help/api">Learn how to install our API</a>.</p></li>
  </ol>
  <p>To migrate, you should export all of your lists into one (or many, if you have more than 50,000 users) CSV files and import them into Vero. We recommend you use <a href="https://#tags">tags</a> to keep a record of the lists your subscribers were on previously. You can segment based on tags, so you can always see who started where, and this can be helpful to check you’ve imported all your data.</p>
  <p>You will also need to export and import your email templates. This is a relatively simple task from most email providers. Learn <a href="https://#template-editor">how Vero’s WYSIWYG template editor works</a> and how to replace your <a href="https://#merge-tags">merge tags</a>.</p>
  
  <p class="heading" id="merge-tags"><b>How do I insert merge tags (using Liquid) in my emails?</b></p>
  <p>When creating campaigns in Vero — whether you’re using templates or standard rich text — you can insert dynamic variables using the <a href="https://github.com/Shopify/liquid/wiki/Liquid-for-Designers">Liquid markup language</a>. Here’s a list of the key variables and functions you can use:</p>
  <ul>
    <li><span class="liquid">{{user.attribute}}</span> replace <i>attribute</i> with the name of any user attribute you’ve captured with our API or uploaded <a href="https://#import-via-csv">via CSV</a>. For example, {{user.first_name}} would print <i>John</i> for a user profile that has the attribute <i>first_name</i> with value <i>John</i>.</li>
    <li><span class="liquid">{{event.attribute}}</span> replace <i>attribute</i> with the name of any event attribute you’ve captured with our API or uploaded <a href="https:/#import-via-csv">via CSV</a>. For example, {{event.product_name}} would print <i>Apple MacBook Pro</i> for an event that has the attribute <i>product_name</i> with value <i>Apple MacBook Pro</i>. Note that you can only access event attributea for the <b>trigger event</b> of a <a href="https://#triggered-email">triggered email</a>.</li>
    <li><span class="liquid">{{url.unsubscribe_link}}</span> inserts a direct URL (e.g. <a href="http://getvero.com/unsubscribe/xyz)"></a>http://getvero.com/unsubscribe/xyz) that unsubscribes your customers in one click.</li>
    <li><span class="liquid">{{url.unsubscribe}}</span> inserts an actual link with the word <i>Unsubscribe </i>and points to the link referenced by {{url.unsubscribe_link}} above.</li>
    <li><span class="liquid">{{url.permalink_link}}</span> inserts a direct URL (e.g. <a href="http://getvero.com/view-online/xyz)"></a>http://getvero.com/view-online/xyz) that points to an online, hosted version of each individual user.</li>
    <li><span class="liquid">{{url.permalink}}</span> inserts an actual link with the words <i>View in browser</i> and points to the link referenced by {{url.permalink_link}} above.</li>
  </ul>
  <p>We have also written a series of custom Liquid functions to make your life easier:</p>
  <ul>
    <li><span class="liquid">{{ user.email | encode }}</span> allows you to <b>URL encode</b> the provided value. If <i>user.email</i> was equal to <i>damien+test@getvero.com</i> it would be rendered as <i>damien%2Btest%40getvero.com </i>after encoding.</li>
    <li><span class="liquid">{{event.invoice_ref | format: ’%05d’}}</span> allows you to <b>reformat numerical variables</b> (integers, floats, octal numbers, strings, unsigned decimals and hexadecimals). You can use any formating from the <a href="http://alvinalexander.com/programming/printf-format-cheat-sheet">print format cheat sheet</a>.</li>
    <li><span class="liquid">{{event.price | precision: 2}}</span> allows you to <b>change the precision</b> of integers. As an example, <i>2.0554 </i>would become <i>2.06</i> with a precision of two.</li>
    <li><span class="liquid">{{ event.purchase_date | time_zone: ’Sydney’ | date: ’%d/%m/%Y %H:%M:%S %Z’ }}</span>allows you to change the timezone and format of an attribute. The attribute must be a number. You can use any of the timezone values from the <i>TZ</i> column of this <a href="http://en.wikipedia.org/wiki/List_of_tz_database_time_zones">guide to timezones</a>. This <a href="http://strftime.net/">time formating tool</a> can help you build the formatting string for output.</li>
  </ul>
  <p>We have some custom functions for our <a href="https://#external-attributes">External Attributes</a> feature specifically:</p>
  <ul>
    <li>
      <span class="liquid">{% fetch_html | ’</span>
      <span class="liquid">http://yourdomain.com/page.html?params=</span>
      <span class="liquid">{{user.id}}’ %}</span> allows you to pull custom HTML data into your emails from your own web server. This is an advanced feature and you can <a href="https://#external-attributes">read more about our External Attributes tool below</a>.</li>
  </ul>
  
  <p class="heading" id="limit"><b>What happens if I go over my subscription limit?</b></p>
  <p>Vero will send you an email when you cross the subscriber or email thresholds over a 30-day period. You will automatically be upgraded to the appropriate plan.</p>
  <p>You can downgrade at any time and, if your usage fluctuates, can minimize your spend each and every month.</p>
  
  <p class="heading" id="annually"><b>What happens if I pay annually?</b></p>
  <p>By choosing to pay annually,&nbsp; you get two months of Vero free each year.</p>
  <p>Paying annually also means your email limits are spread out across the year. For example, if you are on our $149/month plan and can send up to 175,000 emails per month, on our annual plan you can send up to 2,100,000 emails <b>per year</b>. This means that seasonal spikes in email volume will not require you to go up a plan, saving you even more.</p>
  
  <p class="heading" id="dns"><b>How do I send emails from my domain using DNS?</b></p>
  <p>By default, Vero sends your emails from our own domain. This means that your users will see "<i>sent via getveromail.com</i>" or similar in some email clients (including Gmail). By signing your domain using DNS, you can remove this and send emails from your own domain. This means Vero is completely invisible.</p>
  <p>We highly recommend this to ensure that your emails have the best chance of reaching your users’ inboxes. To sign your domain, head to the <a href="https://app.getvero.com/account">Account</a> section in Vero, select <i>Configuration</i> and the <i>Email Provider</i> drop-down. From here you need to select <i>Request DNS Records</i> and you will be given the values you need to copy and paste into your DNS records setup.</p>
  
  <p class="heading" id="data-rights"><b>Does the data I send Vero belong to me?</b></p>
  <p>Absolutely. Vero is a platform designed to help you send better emails to your users. The data you send us is stored&nbsp; as required to deliver the Vero service you require. At any time you can export or request to remove your data – it is entirely yours.</p>
  <p>Read our <a href="http://www.getvero.com/terms-of-service">Terms of Service</a> for full details.</p>
  
  <p class="heading" id="invite-team"><b>Can I invite team members to Vero?</b></p>
  <p>On our $149/month and above plans you can manage multiple team members with multiple levels of access (<i>read, write </i>and <i>admin</i>). On these plans, visit the <a href="https://app.getvero.com/account">Account</a> menu and select <i>Team</i> to add and manage user profiles.</p>
  
  <p class="heading" id="providers"><b>How do I use an email provider like Sendgrid, Mailgun or Mandrill?</b></p>
  <p>By default, Vero will handle your delivery for you, optimized to ensure your emails reach your users. Vero also allows you to send your emails via your favourite transactional email provider, such as SendGrid.&nbsp;</p>
  <p>To do so, visit the Account section of your Vero account, select the <i>Configuration</i> tab and choose <i>Email Providers</i>. Here you can select two primary options: <i>Vero’s delivery infrastructure</i> or<i> </i>your favourite provider.</p>
  <p>Vero currently supports SendGrid and Mailgun. To enable the provider in question, simply select it from the list, enter your API credentials and hit <i>Save </i>and you’re good to go.</p>
  
  <p class="heading" id="platforms"><b>What platforms do you integrate with? Zapier, KISS, Mixpanel</b></p>
  <p>Vero’s API is designed to be flexible and robust. Despite giving you a lot of power, there are a ton of great platforms out there that allow you to send more data to Vero. We’re constantly rolling out more integrations. Right now we support the following:&nbsp;</p>
  <ul>
    <li><a href="https://zapier.com/developer/invite/3744/1f363c5f1e36239ca42ca4b242e6cb9f/">Zapier</a> – allowing you to send events and updates to user profiles to Vero from virtually any other online service.</li>
    <li><a href="https://github.com/getvero/vero-api/blob/master/sections/kissmetrics.md">KISSmetrics</a> – you can track the same actions you track with KISSmetrics’ Javascript integration in Vero with a few lines of copy/paste.</li>
    <li><a href="https://github.com/getvero/vero-api/blob/master/sections/mixpanel.md">Mixpanel</a> – alternately, you can track the same actions you track with Mixpanel’s Javascript integration in Vero with a few lines of copy/paste.</li>
  </ul>
  
  <p class="heading" id="segmentio"><b>How do I integrate with </b><a href="https://segment.com">Segment.io</a><b>?</b></p>
  <p>Segment is a flexible and fast alternative to setting up Vero. They are a customer data hub for easily installing analytics and growth tools. There are three reasons we like Segment at Vero:</p>
  <ol>
    <li>With one integration you can send the same customer data you send to Vero to over 100 other complementary services including KISSmetrics, Mixpanel, Woopra, Perfect Audience and many others.</li>
    <li>If you want to integrate server-side, Segment offers client libraries for iOS, Android, Xamarin, Javascript, Ruby, Node.js, Python, PHP, Java, .NET, Go and Clojure. When you integrate with Segment, you don’t need to worry about updating any of these libraries – they take care of maintenance for you.</li>
    <li>You can start using Segment with zero code via their one click-to-install plugins for many popular e-commerce and blogging platforms including <a href="https://segment.com/docs/platforms/magento/">Magento</a>, <a href="https://segment.com/docs/platforms/woocommerce/">WooCommerce</a><i>, </i>
      <a href="https://segment.com/docs/platforms/wordpress/">WordPress</a><i>, </i>
      <a href="https://segment.com/docs/platforms/wp-ecommerce/">WP eCommerce</a><i> and </i>
      <a href="https://segment.com/docs/platforms/goodsie/">Goodsie</a><i>.</i>
    </li>
  </ol>
  <p>We love the team at Segment and our integration with is <b>fully</b> supported by both parties. To get going, <a href="https://segment.com/docs/integrations/vero/">read Segment’s docs for Vero setup</a>.</p>
  
  <p class="heading" id="support"><b>How do we handle support?</b></p>
  <p>We use email as our primary support channel. Our aim is to respond to all tickets within a few hours and work with you closely on any specific or technical issues.&nbsp;</p>
  <p>We want your experience with our support to be the <i>best experience you’ve ever had</i>, not just the best you’ve had with an online service, or the best you’ve had this week. If you think we’ve done a great job, or if we could do better next time, <a href="mailto:support@getvero.com">please email us an let us know</a>.</p>
  
  <p class="heading" id="external-attributes"><b>How do I use Vero’s External Attributes feature?</b></p>
  <p>One of Vero’s most powerful features is <i>External Attributes</i>. This feature allows you to pull data from your own web server and include it in an email <b>before it is sent to your users</b>. For example, you might want to pull in recommended products or the latest number for a certain statistic.&nbsp;</p>
  <p>You can pull data in two ways:</p>
  <ol>
    <li><b>As HTML.</b> To do this you use a custom filter using we’ve built using the Liquid templating language. You can read about tcan read about this filter in the <a href="https://#merge-tags">merge tags</a> section above.&nbsp;</li>
    <li><b>As JSON.</b> Alternately, you can include an API end-point and pull JSON data from your web server to be used when creating a campaign via our {{external}} merge tag. Read how to do this in the <a href="https://#merge-tags">merge tags</a> section above.</li>
  </ol>
  <p><i>External Attributes</i> is an advanced feature and, as it is intensive, is only available on our $299/month plan and above.</p>
  </main>
</section>
<?php 
no_content_genesis_footer();
?>