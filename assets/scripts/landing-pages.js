jQuery(window).load(function(){
  jQuery('pre.okaidia').find('code').addClass('okaidia');
});

jQuery(document).ready(function(){
  jQuery('#workflows-ui-nodes li.hover-box').click(function(e){
    console.log('hello');
    var node = jQuery(this);
    if(!node.hasClass('active')){
      node.siblings('.hover-box').removeClass('active');
      node.addClass('active');
    }
  });

  // Feature image switcher

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
