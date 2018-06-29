jQuery(window).load(function(){
  jQuery('pre.okaidia').find('code').addClass('okaidia');
});

jQuery(document).ready(function(){
  jQuery('.image-comparison-container').slider({
    initialPosition: .5,
    showInstruction: false,
    instructiontext: "< >"
  });
});
