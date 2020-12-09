<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'glossary';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>

<section class="glossary-hero">
  <div class="inner large-inner top-padding-lg">
    <div class="flex flex-column md-flex-row items-center">
      <div class="col-main">
        <h1 class="hulk bottom-margin-sm">Glossary</h1>
        <p class="large bottom-margin-lg">Knowledge is power. So let's demystify all the jargon you'll come across on your path to becoming a great email marketer.</p>
      </div>

      <div class="col-aside">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/resources/glossary/hero.svg" alt="Glossary">
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--glossary">
      <div class="col-main hide md-show">
        <ul class="unstyled-list glossary-alphabet">
          <li>
            <a href="#A">A</a>
          </li>
          <li>
            <a href="#B">B</a>
          </li>
          <li>
            <a href="#C">C</a>
          </li>
          <li>
            <a href="#D">D</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
          <li class="faded">F</li>
          <li>
            <a href="#G">G</a>
          </li>
          <li>
            <a href="#H">H</a>
          </li>
          <li>
            <a href="#I">I</a>
          </li>
          <li class="faded">J</li>
          <li class="faded">K</li>
          <li>
            <a href="#L">L</a>
          </li>
          <li>
            <a href="#M">M</a>
          </li>
          <li>
            <a href="#N">N</a>
          </li>
          <li>
            <a href="#O">O</a>
          </li>
          <li>
            <a href="#P">P</a>
          </li>
          <li class="faded">Q</li>
          <li>
            <a href="#R">R</a>
          </li>
          <li>
            <a href="#S">S</a>
          </li>
          <li>
            <a href="#T">T</a>
          </li>
          <li class="faded">U</li>
          <li class="faded">V</li>
          <li>
            <a href="#w">W</a>
          </li>
          <li class="faded">X</li>
          <li class="faded">Y</li>
          <li class="faded">Z</li>
        </ul>
      </div>
      <div class="col-aside glossary-list md-left-margin-xxl">

        <h2 id="A" class="font-brand-primary chunk jump-link">A</h2>

        <div class="glossary-item">
          <h3 class="tubs">A/B Testing</h3>
          <p>
            <a href="https://www.getvero.com/resources/email-a-b-testing">A/B testing</a> trials the effectiveness of digital marketing assets, such as landing pages, display ads, email newsletters, and social media posts. Two versions of an asset are created to see which ones resonate with users more. In a typical A/B test, half of the user group receives "version A," while the others get "version B." Metrics that A/B tests typically measure are conversion rates such as purchases, links clicked, or forms completed.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Abandoned Cart</h3>
          <p>An abandoned cart is when a user adds items to their online shopping cart, but doesn't end up completing the process. This is due to a variety of reasons, whether the user has simply used the cart as a "wish list" while they compare prices, or they found the total cost of their order to daunting upon check out. Either way, an email alert that's automatic and personalized can encourage and remind users that they have a full cart worth purchasing.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Affiliate Marketing</h3>
          <p>AAffiliate marketing is a marketing model based on revenue sharing, where companies can sell more of their products by granting financial incentives to promoters. How it works is promoters will share a company's product or service through their affiliate network, and earn a commission if their audience ends up purchasing the product.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Alt Text</h3>
          <p>
            Alt text is a small text blurb that either shows up in place of an image that hasn't loaded, or pops up when a mouse is hovered over the image. Besides serving as a placeholder in case an image doesn't show up, alt text also helps search engines understand the context of an image.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Anti-Spam Laws</h3>
          <p>
            Anti-spam laws are in place to protect email users from receiving unsolicited spam emails. In 2003, the CAN-SPAM Act covered many anti-spam laws, but the majority of email service providers today require users to agree to their terms of service agreements that include anti-spam policies. Worth noting is that anti-spam laws differ depending on the state, province, and country you live in.
          </p>
        </div>

        <h2 id="B" class="font-brand-primary chunk jump-link">B</h2>

        <div class="glossary-item">
          <h3 class="tubs">Buyer's Journey</h3>
          <p>
            The buyer's journey is a three-step process that customers go through when becoming aware of a problem, considering a purchase, and eventually making a decision to buy. The three stages are made up of the "awareness," "consideration," and "decision" stage. In the first stage, the buyer realizes that have a problem, takes steps towards researching a product, then makes a move towards purchase.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Buyer Personas</h3>
          A<p>
            lso known as a "customer avatars," a buyer persona is a fictional profile that marketers create to represent their company's ideal customer.The profile can include demographic and also psychometric data. Buyer personas are essential to marketing messaging creation and product development.
          </p>
        </div>

        <h2 id="C" class="font-brand-primary chunk jump-link">C</h2>

        <div class="glossary-item">
          <h3 class="tubs">CAN-SPAM</h3>
          <p>
            The CAN-SPAM Act are a set of rules encompassing all commercial emails, including ones sent from businesses to other businesses, and also to users. It gives email recipients the right to request companies stop contacting them, and it also doles out harsh penalties for those that are in violation of its laws.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Click-to-open-rate</h3>
          <p>Click-to-open-rate (CTOR) is the number of unique clicks as a percentage of unique clicks within an email. This metric shows exactly how successful the email was, as it determines the level of interest and engagement from the subscriber once they open and read the email.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Customer Engagement</h3>
          <p>Customer engagement is the approach that companies take when interacting with customers through their channels of choice, with the goal of strengthening their relationships with them. Channels can include the likes of social media, email, community forums, blog posts, websites - and engagement typically goes beyond when a customer first buys a product. The way to keep a customer engaged beyond the point of purchase is with valuable, personalized content.</p>
        </div>
        <div class="glossary-item">
          <h3 class="tubs">Customer Retention</h3>
          <p>Customer retention is the approach that companies take to continue engaging existing customers. The way it differs from customer acquisition or lead generation, is in that the customer has already been converted at least once. Customer retention, when done well, will help form long-lasting and loyal relationships with customers that are likely to tell their friends and family about your products and become brand ambassadors.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Customer Lifetime Value</h3>
          <p>Customer lifetime value (CLV) is a metric used by businesses to determine the total revenue that can be expected from one customer account. It pits a customer's revenue value against the predicted customer lifespan. This metric is particularly useful when companies want to identify which customer segments are most valuable.</p>
        </div>

        <h2 id="D" class="font-brand-primary chunk jump-link">D</h2>

        <div class="glossary-item">
          <h3 class="tubs">Demographic Data</h3>
          <p>
            Demographic data is information about your audience and customers that you would expect to see on a census, such as age, gender, or location. This information is useful when creating things like paid social ads, but it doesn't account for the nuances between individuals that you would get from psychographic data.
          </p>
        </div>

        <div id="dkim" class="glossary-item">
          <h3 class="tubs">DKIM</h3>
          <p>
            DKIM stands for DomainKeys Identified Mail. It’s another email authentication protocol that lets companies verify that messages were sent from authorized servers by using “public key cryptography.” It also protects against forgery and spam.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/dmarc">DMARC</a></h3>
          <p>
            DMARC stands for Domain-based Message Authentication, Reporting, and Conformance. It’s a technical standard that is in place to protect both senders and recipients from spam, spoofing, and phishing. How it works is it checks whether email authentication is being used, by matching the domain in the email "from address" to the sender domain.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Double Opt In</h3>
          <p>
            Double opt-in (DOI), is a subscription process that requires two steps. After a user opts in to receive messages by providing their contact details, they’re instructed to look out for a confirmation message - usually through an email. While it is less streamlined than single opt-in, it also guarantees that the user has explicitly given their consent.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/dynamic-content">Dynamic Content</a></h3>
          <p>
            Dynamic content is web-based content that changes based on user data, preferences, and behaviors. This data is largely supplied by the user, who provides and then consents to its use. With dynamic content, you can customize every aspect of an email to target a particular user. Everything from a user's interests, gender, purchase history, and even geography can be used to personalize an email.
          </p>
        </div>

        <h2 id="E" class="font-brand-primary chunk jump-link">E</h2>

        <div class="glossary-item">
          <h3 class="tubs">Email Automation</h3>
          <p>
            Email automation is a way to use predefined rules to send email messages to customers based on specific actions. Examples of email automation include sending out welcome emails that are triggered when a customer joins your mailing list, or a personalized email encouraging customers to check out their abandoned cart. Automation becomes especially essential when a company's email list scales up and it becomes impossible to send emails out manually.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Email Blacklist</h3>
          <p>An email blacklist uses a set of criteria via a real-time database to figure out if an IP address is sending spam emails. If you discover that you're on a blacklist, it's worth assessing the way you collect email addresses and what your sunsetting policy looks like. Then, you might be able to request to be taken off the list via a removal form, if they exist. Being put on an email blacklist can negatively affect your deliverability, so it should be taken seriously.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/email-deliverability">Email Deliverability</a></h3>
          <p>Email deliverability is when an email successfully arrives into a recipient’s inbox. Which is not to be confused with email delivery, which simply means that an email has been successfully delivered to the recipient’s server. There are a number of factors that affect email deliverability, such as audience engagement, spam complaints, sender reputation.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Email Preheader</h3>
          <p>Email preheaders are text snippets that are displayed next to the subject line or beneath it. Most mobile, web, and email clients use email preheaders to summarize what's in the email before it's opened. They're essential to improving open rates, as it's an opportunity for marketers to make a great first impression.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Email Retargeting</h3>
          <p>
            Email retargeting takes customer data that is collected by tracking website interactions and purchase activity, and uses it to craft personalized email messaging. For example, if a customer has abandoned their cart on your website, an email retargeting campaign would be a great way to bring the product back into their inbox. While email retargeting is most commonly done through website cookies, gathering information on customer behavior can also be done through third-party applications.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Email Service Provider</h3>
          <p>
            Email Service Providers (ESP) are companies that let marketers build and send emails, as well as manage subscriber lists. While at the most basic level, ESPs only store email addresses and send emails, advanced ESPs might offer features such as dynamic content, email automation, and A/B testing.
          </p>
        </div>

        <h2 id="G" class="font-brand-primary chunk jump-link">G</h2>

        <div class="glossary-item">
          <h3 class="tubs">Geofence</h3>
          <p>A geofence is what it sounds like - a virtual boundary that's defined by GPS or RFID technology. And when a customer's mobile device enters a geofence, it triggers relevant product offers or promotions. Examples of geofenced locations can be malls, schools, or stores.</p>
        </div>

        <h2 id="H" class="font-brand-primary chunk jump-link">H</h2>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/hard-bounce">Hard Bounce</a></h3>
          <p>A hard bounce is when an email was completely undeliverable, and delivery should not be attempted again in the future. Hard bounces happen because: the email address or recipient doesn't exist, the email domain doesn't exist, the recipient's server has blocked delivery, or the email address is invalid.</p>
        </div>

        <h2 id="I" class="font-brand-primary chunk jump-link">I</h2>

        <div class="glossary-item">
          <h3 class="tubs">IP Warming</h3>
          <p>IP warming is the method in establishing a reputation for a new or seldom used IP address. The process generally looks like this: Send email from the new IP with small volumes to start, then gradually increase the volume within the confines of a schedule. The ultimate goal of IP warming is to build your identity overtime, gain the trust of ESPs, and improve your deliverability long term.</p>
        </div>

        <h2 id="L" class="font-brand-primary chunk jump-link">L</h2>

        <div class="glossary-item">
          <h3 class="tubs">Leads</h3>
          <p>Leads are a group of people that are potential customers. They come from a variety of places, perhaps users who complete a contact form on your website, or conference attendees that pass you their business card.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">List Cleaning</h3>
          <p>List cleaning is when an email marketer removes emails from their subscriber list that are either unengaged or outdated, as they lead to bounces. Besides improving open rates and click rates in the short term, list cleaning can also boost overall deliverability long term as it ensures that subscribers on the list are still actively interested in receiving emails.</p>
        </div>

        <h2 id="M" class="font-brand-primary chunk jump-link">M</h2>

        <div class="glossary-item">
          <h3 class="tubs">Multivariate Testing</h3>
          <p>Multivariate testing is at its core, the same as AB testing, but it involves a larger number of variables. For example, while an A/B testing might test different versions of landing page design, a multivariate test is able to measure how effective different sets of design combinations are. Multivariate tests are able to dive deeper, by not only narrowing down to the most successful design, but also revealing which design elements have the most positive or negative impact on the user experience.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">MX Records</h3>
          <p>MX Records stands for "mail exchange" records. They are used to communicate which mail servers can accept incoming mail on behalf of a domain, and also where the emails should be routed to. If your MX records aren't configured to the right location, you won't receive any emails. As this is an important part of validating your sender domain, the emails you send may also be rejected.</p>
        </div>

        <h2 id="N" class="font-brand-primary chunk jump-link">N</h2>

        <div class="glossary-item">
          <h3 class="tubs">NPS</h3>
          <p>The Net Promoter Score (NPS) is an index that ranges from -100 to 100. It is a way to measure how willing customers are to recommend products or services to other people, and ultimately gauges customer loyalty. NPS scores are determined through single question customer surveys and customers are put into one of three categories: detractors, passives, and promotors.</p>
        </div>

        <h2 id="O" class="font-brand-primary chunk jump-link">O</h2>

        <div class="glossary-item">
          <h3 class="tubs">Optin Email</h3>
          <p>Optin emails are sent to consumers that have given consent to receive marketing messages. It's a great way to authenticate your email list and focus on subscribers who know you, and want to hear from you. Also, sending emails to consumers without their permission is against email laws, and can also destroy your sender reputation and open  rates.</p>
        </div>

        <h2 id="P" class="font-brand-primary chunk jump-link">P</h2>

        <div class="glossary-item">
          <h3 class="tubs">Plain Text Email</h3>
          <p>PPlain text emails are exactly as it sounds - they are email messages that include only plain text. On top of having no formatting, images, or graphics, all links are also written out instead of hyperlinking anchor text. Plain text emails are important because some email client spam filters require emails to be sent in both HTML and plain text versions. Also, other email clients may not support HTML emails - which increases the risk of your emails landing in spam and affecting your deliverability.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Product Marketing</h3>
          <p>Product marketing is the process of promoting and selling a product, which includes developing product positionining and messaging so customers understand what it is and how it benefits their lives. It also encompasses the product's launch and determining a sales strategy. The product marketing process typically lasts well after the launch to make sure that prospective users are aware of the product, are using it to its full potential, and that the feedback from existing users are heard and leveraged.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Promotional Emails</h3>
          <p>Promotional emails work to spread the word about your product or services to prospective customers, and ultimately seek to convert potential customers by moving them through the sales funnel. Generally, promotional emails will include the likes of coupons, access to VIP events, or links to exclusive content - and offers are typically only available for a limited time so there is a sense of urgency.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Psychographic Data</h3>
          <p>Psychographic data is information about your audience and customers based on their attitude, beliefs, and values. With psychographic data, you can dive deeper into customizing your marketing and messaging by the factors your customers actually care deeply about, and understand what makes them a person. You'll also be able to create more robust personas and segmentation.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/mobile-push-notifications/">Push Notifications</a></h3>
          <p>
            Push notifications are messages that pop up on a users' mobile phone. While they look like text messages, they only reach users of your app. They serve a myriad of purposes - they can inform users about an upcoming event - such as a flash sale, or prompt them to take action - such as download a coupon.
          </p>
        </div>

        <h2 id="R" class="font-brand-primary chunk jump-link">R</h2>

        <div class="glossary-item">
          <h3 class="tubs">Relationship Marketing</h3>
          <p>Relationship marketing is a branch of marketing that seeks to create deep and purposeful customer relationships that will eventually lead to brand loyalty and retention. Examples of relationship marketing include offering incentives for loyalty, personalizing content and services, and catering to the customer wherever they are in the customer journey.</p>
        </div>

        <h2 id="S" class="font-brand-primary chunk jump-link">S</h2>

        <div class="glossary-item">
          <h3 class="tubs">Segmentation</h3>
          <p>Segmentation is an email marketing strategy that separates subscribers into subgroups to deliver custom messaging. Subgroups are created based on demographics, such as location, gender, age, ethnicity, etc., but can also be based on customer behavior such as past purchases. Other subgroups can be based on psychographic data, which is related to subscribers' values and beliefs.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Sender Reputation</h3>
          <p>
            <a href="https://www.getvero.com/resources/email-reputation">Sender reputation</a>, a score that an Internet Service Provider (ISP) assigns to any company that sends out emails, is integral to improving deliverability. It’s fairly straightforward - the higher your score, the more likely your email will land in your customer’s inbox. Maintaining sender reputation is important, as if scores fall below a certain level, ISPs will either reject emails or send them to spam folders.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Single Opt-In</h3>
          <p>
            Single opt-in (SOI) is when a user opts in by providing their contact details via a sign up form. This implies that they have given consent to receive messages from you. It’s what it sounds like - an opt-in method for new subscribers that only requires a single action such as a checked box.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/hard-bounce">Soft Bounce</a></h3>
          <p>
            A soft bounce occurs when an email fails to deliver but the email address is still considered valid, which indicates a temporary issue with the mailbox. Your email provider will usually attempt delivery to an address over a few days before marking it as a soft bounce. And this happens for a number of reasons: the recipient's inbox or server is full, the target server is down, or your email is too large to be delivered.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Spam Traps</h3>
          <p>
            Spam traps are email addresses maintained by ISPs that do not open or engage with emails. There are two types of spam traps - the first type are honey pot emails, which are created and added into websites and forums in plain sight to lure in spammers. The second type, recycled email address, used to belong to someone but have since been abandoned or closed down. They're then reactivated later on to monitor any spammers still sending to that address.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">SPF</h3>
          <p>SPF stands for Sender Policy Framework. It’s an email authentication technique that works by detecting forgery and spam. It works similarly to DMARC, which shows the subscribers’ servers that they’re a legitimate sender. In simple terms, it allows email clients to check that the mail server sending your email is on your verified list.</p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Subject Line</h3>
          <p>A subject line is, beyond the sender name, a key part of the first impression that an email marketer makes when sending an email. It's a short, 10-60 character introduction that communicates the intent of the email. At a glance, the recipient should already know what the email content is about.</p>
        </div>

        <h2 id="T" class="font-brand-primary chunk jump-link">T</h2>

        <div class="glossary-item">
          <h3 class="tubs">Transactional Emails</h3>
          <p>
            Also called "triggered emails," transactional emails are automated emails that are triggered by customer events, interactions or preferences within a company's proudct or services. Examples of transactional emails can include receipts or confirmations of purchases, explicit requests such as password resets, or event-driven notifications such as shipping updates.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Triggered Emails</h3>
          <p>Triggered emails, otherwise known as behavioral or transactional emails, are automated emails that are sent based on pre-set events or conditions. Depending on the actions taken by the subscriber, different emails will be triggered. Triggered emails are different than your average promotional emails, as they are automically sent to subscribers on a one-to-one basis, instead of emails that are sent to a mass audience. Triggered emails are an incredible tool for email marketers, as it helps them save time as they scale up their email lists, while providing email experiences that feel personalized.</p>
        </div>

        <h2 id="W" class="font-brand-primary chunk jump-link">W</h2>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/webhooks/">Webhooks</a></h3>
          <p>
            Webhooks are one of the few ways web applications can communicate with each other. It allows you to send real-time data from one application to another automatically, whenever a given event occurs. They're considered less resource intensive than APIs, as it saves time from constantly polling (checking) for new data.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs"><a href="https://www.getvero.com/resources/welcome-emails/">Welcome Emails</a></h3>
          <p>
            Welcome emails are the very first messages that you send to a new subscriber. They're important as a first impression, and also sets the tone for future interactions between your brand and your customer. A welcome email is the first friendly exchange between your business and a new subscriber. It sets the tone for future communications and encourages new members to engage with your business.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Whitelisting</h3>
          <p>
            Whitelisting adds an email or IP address to your list of verified contacts, which communicates to inbox filters that this address is a trusted source. It’s possible to ask subscribers to whitelist you, which will help to improve email deliverability. An ideal way to get whitelisted is to link to a set of instructions in your email campaign. Remember, a request to be whitelisted is a tall order, so make sure you’re reserving it only for your most loyal of subscribers.
          </p>
        </div>

        <div class="glossary-item">
          <h3 class="tubs">Workflows</h3>
          <p>
            Workflows let email marketers design customer journeys, whether strong or long, simple or complex. They're made up of a series of triggers, conditions, filters, timings, and content that is triggered depending on the actions that customers take, or don't take. Workflows are key to automating the email process and are especially useful for companies scaling up their email lists, and can't tend to each customer email manually.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>