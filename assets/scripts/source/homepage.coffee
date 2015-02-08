window.dotsAndLines = ->
  
  

window.blink = ->
  jQuery('.active').delay(2000).fadeTo(100, 0.5).delay(100).fadeTo 100, 1, blink
  return

window.ellipses = (elem) ->

  count = 0
  window.loadingInterval = setInterval (->
    count++
    dots = new Array(count % 10).join('.')
    elem.html 'Listening.' + dots
    return
  ), 500
  return

window.getTagColor = (type) ->
  switch type
    when 'action'
      return 'blue'
    when 'email'
      return 'green'
    else 
      return 'yellow'

window.updateStatus = (status,message) ->
  clearInterval(window.loadingInterval)
  newBubble = jQuery("<span class='bubble "+status+"'></span>")
  jQuery("#status-update").html('').append(newBubble).append(message)

  setTimeout (->
    window.ellipses(jQuery("#status-update"))
    return
  ), 3000

window.addWaitingTag = () ->
  # Create new waiting tag
  newTag = jQuery("<span class='tag active yellow'></span>").html("WAITING")
  newDescription = jQuery("<p></p>").html("Keep browsing...")
  newAction = jQuery("<div class='action waiting'></div>").append(newTag).append(newDescription)
  jQuery('#vero-live .wrap .inside').append(newAction.css({
        opacity: 0,
        display: 'inline-block'     
    }).animate({opacity:1},1500))
  return newAction

window.animateTracker = () ->
  # build tween
  tween = TweenMax.to('#vero-live-container', 0.5,
    width: "100%")

  # build scene
  sizeScene = new ScrollScene(triggerElement: '#container-trigger').setTween(tween).addTo(controller)
  #pinScene = new ScrollScene({triggerElement: "#vero-live-container"}).setPin("#vero-live-container").addTo(controller)

  jQuery("#vero-live-sticky").sticky({topSpacing:0});

window.trackAction = (type,text) ->
  if type == 'action'
    status = 'Successfully tracked action'
    window.updateStatus('success',status)
  else if type == 'email'
    status = 'Successfully sent email'
    window.updateStatus('success',status)

  jQuery('.waiting').remove()
  
  # Create new tag
  jQuery('.active').removeClass('active')
  newTag = jQuery("<span class='tag'></span>").addClass(window.getTagColor(type)).html(type)
  newDescription = jQuery("<p></p>").html(text)
  newAction = jQuery("<div class='action'></div>").append(newTag).append(newDescription)

  # Append it
  jQuery('#vero-live .wrap .inside').append(newAction.css({
        opacity: 0,
        display: 'inline-block'     
    }).animate({opacity:1},1500))

  # Move it to the left
  #left = jQuery('#vero-live .wrap .inside').width() - jQuery('#vero-live .wrap .inside .action').last().width()
  #jQuery('#vero-live .wrap .inside').css {"margin-left": "-" + left + "px"}

  totalWidth = 0
  jQuery('#vero-live .wrap .inside .action').each (index) ->
    totalWidth += parseInt(jQuery(this).width(),10)
    return

  if totalWidth > jQuery('#vero-live .inside').width()
    jQuery('#vero-live .wrap .inside ').first().css('text-align', 'right')
  else
    jQuery('#vero-live .wrap .inside ').first().css('text-align', 'left')


controller = undefined
jQuery(document).ready ->
  #jQuery("#vero-live").sticky({topSpacing:0});
  jQuery("#hero form").submit (e) ->
    email = jQuery("#hero form #email").val()

    top = jQuery("#hero")
    top.find("h2").html("Watch the live tracker below to see how Vero tracks visitor behavior and triggers emails.")
    top.find("form").animate({opacity:0},1500, ->
      top.find("form").remove()
      #top.find("#vero-live .wrap").css('text-align', 'left')
      window.trackAction('action', email + ' did <em>Completed home page form</em>')
    )

    setTimeout (->
      window.trackAction('email', 'Sent email <em>Thanks for trying Vero!</em>')
      return
    ), 6000

    return false

  controller = new ScrollMagic();
  window.animateTracker()
  window.ellipses(jQuery("#status-update"))