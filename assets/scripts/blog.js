//Waypoints
jQuery(document).ready(function(){
if( jQuery('.single .shares-block')[0] != undefined ) {
  var sharesInView = new Waypoint({
    element: jQuery('.single .shares-block')[0],
    handler: function(){
      jQuery('.single .widget-area').toggleClass('show');
    }
  });
}

if( jQuery('.single .subscribe-form')[0] != undefined ) {
  var subscribeInView = new Waypoint({
    element: jQuery('.single .subscribe-form')[0],
    handler: function(){
      jQuery('.single .widget-area').toggleClass('show');
    },
    offset: '100%'
  });
}
});
