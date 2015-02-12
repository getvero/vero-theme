<?php 
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'crm';
    return $classes;  
  }
  
  include 'pages-shared/static-header.php';
?>
<section id="top">
  <div class="t1"></div><div class="t2"></div><div class="t3"></div><div class="t4"></div><div class="t5"></div><div class="t6"></div>
  <div class="inner">
  <div class="center-text">
    <h1>Treat every contact as an individual</h1>
    <h2>Don't store static <em>lists</em> – build dynamic, individual profiles for each contact.</h2>
    <img id="hero-image" src="/wp-content/themes/vero/assets/images/newsletters/hero.png">
  </div>
  </div>
</section>
<section id="devices">
  <div class="inner">
  <div>
    <h3 class="center-text">Track customers across multiple devices</h3>
    <div class='half text left-text'>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum. Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at.</p>
      <p>Sed molestie lorem a blandit congue. Ut pellentesque odio quis leo volutpat, vitae vulputate felis condimentum. Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>
    </div>
    <img class="half pull-right" src="/wp-content/themes/vero/assets/images/crm/tracking.png">
  </div>
  </div>
</section>
<section id="tags" class="gray">
  <div class="inner">
  <div class="center-text">
    <h3>Use Vero's unique tags and manually adjust customer experience</h3>
    <img src="/wp-content/themes/vero/assets/images/crm/tags.png">
    <div class="text">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum. Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at.</p>
      <p>Sed molestie lorem a blandit congue. Ut pellentesque odio quis leo volutpat, vitae vulputate felis condimentum. Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>
    </div>
  </div>
  </div>
</section>
<section id="properties">
  <div class="inner">
  <div class="center-text">
    <h3>Unlimited storage of contact properties so your emails get smarter with time</h3>
    <img src="/wp-content/themes/vero/assets/images/crm/properties.png">
    <div class="text">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum. Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at.</p>
      <p>Sed molestie lorem a blandit congue. Ut pellentesque odio quis leo volutpat, vitae vulputate felis condimentum. Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>
    </div>
  </div>
  </div>
</section>
<section id="contact-actions" class="gray">
  <div class="inner">
  <div class="center-text">
    <h3>A full history of every contacts' actions</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum. Nulla eu neque commodo, dapibus dolor eget, dictum arcu. In nec purus eu tellus consequat ultricies. Donec feugiat tempor turpis, rutrum sagittis mi venenatis at.</p>
    <p>Sed molestie lorem a blandit congue. Ut pellentesque odio quis leo volutpat, vitae vulputate felis condimentum. Praesent vulputate fermentum lorem, id rhoncus sem vehicula eu. Quisque ullamcorper, orci adipiscing auctor viverra, velit arcu malesuada metus, in volutpat tellus sem at justo.</p>
    <img src="/wp-content/themes/vero/assets/images/crm/event-log.png">
  </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <p class="h1">Ready to go?</p>
    <a href="/pricing" class="btn btn-white btn-outline">Start my trial</a>
    <a href="/external-attributes" class="btn btn-warning">Continue tour &rarr;</a>
    <p class="small">Free trial • No credit card required</p>
  </div>
</section>
<?php 
  custom_footer_static();
  wp_footer();
?>