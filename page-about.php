<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'about';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top" class="center-text">
  <div class="inner">
    <h1>Meet Vero's Management Team</h1>
  </div>
</section>

<section id="team">
  <div class="inner">
    <div class='one-quarter photo'>
      <img src="//new.getvero.com/wp-content/uploads/2014/08/chris-2.png" alt="chris hexton" /><a href="https://twitter.com/chexton" class="twitter-follow-button" data-show-count="false">Follow @chexton</a>
    </div>
    <div class="three-quarter">
      <div class='details'>
        <h2 class="name">Chris Hexton</h2>
        <div class="location">Co-Founder and CEO - Sydney, Australia</div>
        <h4 class="q">What do you do at Vero?</h4>
        <p class="a">It's my job to clear roadblocks. When a customer or team member has an issue, it's my job to fix it quickly and logically. I'm also very involved in our marketing and spend a lot of time writing on <a href="http://blog.getvero.com/" target="_blank">our blog</a></p>
        <h4 class="q">What websites do you read every day?</h4>
        <p class="a">Each morning, I check out my curated <a href="https://twitter.com/chexton/lists" target="_blank">Twitter</a> lists for inspiration and <a href="http://www.theverge.com/" target="_blank">The Verge</a> for tech news. When it comes to marketing, I'm a regular reader of <a href="http://blog.kissmetrics.com/" target="_blank">KISSmetrics</a>, <a href="http://unbounce.com/blog/" target="_blank">Unbounce</a> and <a href="http://visualwebsiteoptimizer.com/split-testing-blog/" target="_blank">Visual Website Optimizer</a>.</p>
        <h4 class="q">What do you do outside of Vero?</h4>
        <p class="a">I play the guitar, read and eat out whenever I can. I love good food.</p>
        <h4 class="q">Anything else we should know?</h4>
        <p class="a">I lived in Italy for a few years - it's a place I still love - and I actually started my professional life as an accountant. It wasn't the most thrilling job but I use those skills on a daily basis at Vero.</p>
      </div>
    </div>
  </div>

  <div class="inner">
    <div class='one-quarter photo'>
      <img src="/wp-content/themes/vero/assets/images/james.png" alt="james lamont" /><a href="https://twitter.com/jylamont" class="twitter-follow-button" data-show-count="false">Follow @jylamont</a>
    </div>
    <div class="three-quarter">
      <div class='details'>
        <h2 class="name">James Lamont</h2>
        <div class="location">Co-Founder and CTO - Sydney, Australia</div>
        <h4 class="q">What do you do at Vero?</h4>
        <p class="a">My job is to ensure the machine stays running. This means anything from fixing difficult (but interesting) bugs faced by new customers, to waking up at 3 a.m. to mitigate the effects of a crashed database. If it's broken, the buck stops with me.</p>
        <h4 class="q">What websites do you read every day?</h4>
        <p class="a"><a href="http://reddit.com">Reddit</a>, <a href="http://news.ycombinator.com">HackerNews</a> and, of course, HelpScout.</p>
        <h4 class="q">What do you do outside of Vero?</h4>
        <p class="a">If I'm not at a cafe on a Saturday afternoon, you will likely find me with a beer and the latest video game.</p>
        <h4 class="q">Anything else we should know?</h4>
        <p class="a">I love a good adventure. When I was 17, I walked over hot coals...crazy I know! I've also cycled through five cities in the USA and Australia. I plan to one day explore some European cities by bicycle as well.</p>
      </div>
    </div>
  </div>

  <div class="inner">
    <div class='one-quarter photo'>
      <img src="/wp-content/themes/vero/assets/images/damien.png" alt="damien brzoska" /><a href="https://twitter.com/damienbrz" class="twitter-follow-button" data-show-count="false">Follow @damienbrz</a>
    </div>
    <div class="three-quarter">
      <div class='details'>
        <h2 class="name">Damien Brzoska</h2>
        <div class="location">Co-Founder and Product Manager - Sydney, Australia</div>
        <h4 class="q">What do you do at Vero?</h4>
        <p class="a">My role is to understand customers' needs and reflect that back into the product. I want to make their experience with Vero easy and smooth.</p>
        <h4 class="q">What websites do you read every day?</h4>
        <p class="a">Just to mention a few: <a href="http://growthhackers.com/" target="_blank">Growth Hackers</a>, <a href="http://blog.bufferapp.com/" target="_blank">Buffer</a>, <a href="http://highscalability.com/" target="_blank">High Scalability</a>.</p>
        <h4 class="q">What do you do outside of Vero?</h4>
        <p class="a">I love to travel, to cook, surf, kitesurf and snowboard. I recently started to shape my own surfboards.</p>
        <h4 class="q">Anything else we should know?</h4>
        <p class="a">I spent more than six years as a software engineer before making the switch to product management. I knew how to build applications but I was more interested in the why of things. Now, I question everything around me. From the position of my couch in the living room, to surfboard design and any number of day-to-day obstacles. I try to understand why things are done in a specific way and how I can improve them.</p>
      </div>
    </div>
  </div>

  <div class="inner">
    <div class='one-quarter photo'>
      <img src="/wp-content/themes/vero/assets/images/jimmy.png" alt="jimmy daly" /><a href="https://twitter.com/jimmy_daly" class="twitter-follow-button" data-show-count="false">Follow @jimmy_daly</a>
    </div>
    <div class="three-quarter">
      <div class='details'>
        <h2 class="name">Jimmy Daly</h2>
        <div class="location">Head of Marketing - Tucson, Arizona</div>
        <h4 class="q">What do you do at Vero?</h4>
        <p class="a">I run the blog. I fall somewhere between an editor and an inbound marketing manager. I spend a lot of time writing, working with <a href="http://blog.getvero.com/want-to-contribute-to-the-vero-blog-heres-what-you-need-to-know/" target="_blank">freelance writers</a> and planning our editorial calendar. I also work on SEO, social media and growth hacking.</p>
        <h4 class="q">What websites do you read every day?</h4>
        <p class="a">I never miss a <a href="http://sethgodin.typepad.com/" target="_blank">Seth Godin</a> post. I also love <a href="http://www.copyblogger.com/blog/" target="_blank">Copyblogger</a> and the <a href="http://blog.bufferapp.com/" target="_blank">Buffer</a> blog.</p>
        <h4 class="q">What do you do outside of Vero?</h4>
        <p class="a">I love to run, hike, camp, CrossFit and take <a href="http://photos.jimmydaly.com/" target="_blank">photos</a>. I spend a lot of time with my wife and my dog, <a href="http://instagram.com/p/lPvvfaJP3a/" target="_blank">Sedona</a>.</p></p>
        <h4 class="q">Anything else we should know?</h4>
        <p class="a">I've run three marathons - my best time is 2:48 - I love road trips and I once brewed beer (but it exploded).</p>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="inner">
    <div class="three-quarter h3">
      Get in touch via <a href="mailto:support@getvero.com">email</a> or ...
    </div>
    <div class='one-quarter'>
      <div class="vcards">
        <div class="adr">
          <div class="street-address">#60553, 548 Market St</div>
          <div class="locality">San Francisco</div>
          <div>
            <span class="region">CA</span>
            <span class="postal-code">94104</span>
          </div>
          <div class="country-name">United States</div>
          <div class="tel">+1 415 562 8376</div>
        </div>
      </div>
      <div class="vcards">
        <div class="adr">
          <div class="street-address">4 Cornwallis Street</div>
          <div class="locality">Eveleigh</div>
          <div>
          <span class="region">NSW</span>
          <span class="postal-code">2015</span>
          </div>
          <div class="country-name">Australia</div>
          <div class="tel">+61 2 8005 1556</div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  no_content_genesis_footer();
 ?>