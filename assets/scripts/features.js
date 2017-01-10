jQuery(document).ready(function(){
  //Image swapper
  jQuery('.feature-swapper-option').click(function(e){
    var swapTo = jQuery(this).data('swap-to');
    var parentSwapper = jQuery(this).parents('.feature-swapper');
    parentSwapper.find('li.active').removeClass('active');
    jQuery(this).parent('li').addClass('active');
    parentSwapper.find('.active-feature').removeClass('active-feature').addClass('inactive-feature');
    var featureId = '#' + swapTo
    parentSwapper.find(featureId).removeClass('inactive-feature').addClass('active-feature');
  });
});

smoothScroll.init();