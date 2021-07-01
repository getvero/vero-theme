jQuery(document).ready(function() {
  // Responsive resources menu
  var isFixed   = false;
  var menuClone = jQuery('.js-category-toggle').clone();

  jQuery('.js-category-toggle').on('click', function() {
    var isActive = jQuery('js-category-toggle.is-active').length > 0;

    if (!isActive && !isFixed) {
      jQuery('.js-resources-menu').addClass('is-visible');
      jQuery(this).addClass('is-active');
      jQuery(this).html('<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><path d="M9.414 8l5.657 5.657a1 1 0 0 1-1.414 1.414L8 9.414l-5.657 5.657A1 1 0 0 1 .93 13.657L6.586 8 .929 2.343A1 1 0 0 1 2.343.93L8 6.586 13.657.929a1 1 0 0 1 1.414 1.414L9.414 8z" fill="#9D9D9D" fill-rule="evenodd"/></svg>');
      isFixed = true;
    } else {
      jQuery('.js-resources-menu').removeClass('is-visible');
      jQuery(this).removeClass('is-active');
      jQuery(this).html(menuClone);
      isFixed = false;
    }
  });

   // Slide out blog banner
  if (document.body.classList.contains('single')) {
    let promoSticky = document.querySelector('.js-post-promo-sticky');

    function onScroll() {
      let scrollTop            = window.scrollY;
      let docHeight            = document.body.offsetHeight;
      let winHeight            = window.innerHeight;
      let scrollPercent        = scrollTop / (docHeight - winHeight);
      let scrollPercentRounded = Math.round(scrollPercent * 100);

      if (scrollPercentRounded >= 25) {
        promoSticky.classList.add('is-active');
      } else {
        promoSticky.classList.remove('is-active');
      }
    }

    window.addEventListener('scroll', onScroll)

    // Listen to all clicks on the document
    document.addEventListener('click', function(event) {
      // If the event target doesn't match bail
      if (!event.target.closest('.js-post-promo-sticky-close')) return;

      // Otherwise, run your code...
      promoSticky.classList.remove('is-active');

      window.setTimeout(function() {
        promoSticky.remove();
      }, 400);
    }, false);
  }
});
