jQuery(window).load(function(){
  jQuery('pre.okaidia').find('code').addClass('okaidia');
});

jQuery(document).ready(function(){
  jQuery('.image-comparison-container').slider({
    initialPosition: .5,
    showInstruction: false,
    instructiontext: "< >"
  });

  jQuery('#workflows-ui-nodes li.hover-box').click(function(e){
    console.log('hello');
    var node = jQuery(this);
    if(!node.hasClass('active')){
      node.siblings('.hover-box').removeClass('active');
      node.addClass('active');
    } 
  });
});
