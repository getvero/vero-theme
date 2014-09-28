jQuery(document).one('scroll', () ->
  jQuery("div[data-tweetable='true']").each ->
    self = this
    button = jQuery(self).data("tweet-button")
    button = jQuery(self).find("#" + button)

    jQuery(self).scrollWatch().on "scroll", (event) ->

      tweetable_from_top = jQuery(self).offset().top
      tweetable_bottom_from_top = jQuery(self).offset().top + jQuery(self).outerHeight(true)
      
      console.log button + "and visibility: " + event.visibility + " and current_scroll: " + jQuery(document).scrollTop() + " and from_top: " + tweetable_from_top + " from bottom: " + tweetable_bottom_from_top

      if (jQuery(document).scrollTop() >= tweetable_from_top) && (jQuery(document).scrollTop() < tweetable_bottom_from_top)
        button.show()
      else
        button.hide()
      return

    return

  return
)
