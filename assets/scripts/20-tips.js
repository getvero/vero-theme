(function(){jQuery(document).one("scroll",function(){jQuery("div[data-tweetable='true']").each(function(){var e,o;o=this,e=jQuery(o).data("tweet-button"),e=jQuery(o).find("#"+e),jQuery(o).scrollWatch().on("scroll",function(r){var t,u;u=jQuery(o).offset().top,t=jQuery(o).offset().top+jQuery(o).outerHeight(!0),console.log(e+"and visibility: "+r.visibility+" and current_scroll: "+jQuery(document).scrollTop()+" and from_top: "+u+" from bottom: "+t),jQuery(document).scrollTop()>=u&&jQuery(document).scrollTop()<t?e.show():e.hide()})})}),jQuery(document).on("scroll",function(){var e;e=jQuery(".spacer.big").first().offset().top,e+=jQuery(".spacer.big").first().outerHeight(!0),jQuery(document).scrollTop()>e?jQuery("#sidebar").show():jQuery("#sidebar").hide()})}).call(this);