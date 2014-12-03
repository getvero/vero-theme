jQuery ->
 jQuery(document).on 'click', ".vscroller", (e) ->
    e.preventDefault()
    target = jQuery(this).attr('href')
    jQuery('body').animate
      scrollTop: jQuery(target).offset().top
    , 600

renderPrice = (price) ->
  monthlyPrice = numeral(price).format("jQuery0,0")
  yearlyPrice = numeral(price * 10).format("jQuery0,0")
  jQuery(".monthly-price").text "$" + monthlyPrice
  jQuery(".yearly-price").text "$" + yearlyPrice
  return

calculatePrice = (emails, customers) ->
  price = 1799
  emails = parseInt(emails) or 2500000
  customers = parseInt(customers) or 2000000
  price += (emails - 2500000) / 1000 * 0.12  if emails > 2500000
  price += (customers - 2000000) / 1000 * 0.90  if customers > 2000000
  price

customePrice = ->
  price = calculatePrice(jQuery("#monthly-email").val(), jQuery("#customers").val())
  renderPrice price
  return

jQuery("#monthly-email, #customers").on "keyup", ->
  customePrice()
  return

jQuery("#plan").on "change", ->
  if jQuery("#plan").val() is "-1"
    jQuery(".high-volume").show()
    customePrice()
  else
    renderPrice jQuery("#plan").val()
  return

jQuery("#period").on "change", ->
  if jQuery("#plan").val() is "-1"
    customePrice()
  else
    renderPrice jQuery("#plan").val()

  if jQuery(this).val() is "1"
    jQuery(".yearly-discount").show()
  else
    jQuery(".yearly-discount").hide()
  return

validateForm = ->
  ret = true
  if ($name = jQuery("#sender_name")).val() != ''
    $name.removeClass('error')
  else
    $name.addClass('error')
    ret = false

  if ($email_addr = jQuery("#sender_email_address")).val() != ''
    $email_addr.removeClass('error')
  else
    $email_addr.addClass('error')
    ret = false

  if ($company = jQuery("#sender_company_name")).val() != ''
    $company.removeClass('error')
  else
    $company.addClass('error')
    ret = false

  if ($subscribers = jQuery("#sender_subscribers")).val() != ''
    $subscribers.removeClass('error')
  else
    $subscribers.addClass('error')
    ret = false

  if ($emails = jQuery("#sender_emails")).val() != ''
    $emails.removeClass('error')
  else
    $emails.addClass('error')
    ret = false
  ret

hideGuideSidebar = ->
  jQuery.cookie('hide_guide_sidebar', 'true', { expires: 90 })
  jQuery('#sidebar').attr "style", (i, s) ->
    "display: none !important;"

requestDemo = ->
  if validateForm()
    _veroq.push [
      "user"
      {
        id: jQuery("#sender_email_address").val()
      }
    ]
    _veroq.push [
      "track"
      "high_sender_request"
      {
        name: jQuery("#sender_name").val()
        company_name: jQuery("#sender_company_name").val()
        subscribers: jQuery("#sender_subscribers").val()
        monthy_emails: jQuery("#sender_emails").val()
        contact_method: jQuery("input:radio[name=contact_method]:checked").val()
      }
    ]
    jQuery("#high-volume > .inner").addClass('center-text').html("<h3 style='color:#222;font-weight:bold;'>Thanks for your request!</h3><h4 style='color:#222;padding-bottom:100px;'>We will contact you shortly.</h4>")
    console.log 'success'

jQuery ->
  if jQuery("#high-volume-sender-form").length
    jQuery(document).on 'click', '#request-demo', ->
      requestDemo()
      false
  if jQuery(".price-selection").length
    jQuery(document).on 'change', '.price-selection', ->
      monthly =  parseInt(jQuery(this).val())
      yearly = Math.round((monthly * 10) / 12)
      jQuery('.yearly-price').text("$#{yearly}")
      jQuery('.monthly-price').text("$#{monthly}")
      features = jQuery("[data-pricing]")
      for feature in features
        if jQuery(feature).data('pricing') <= monthly
          jQuery(feature).removeClass('disable')
        else
          jQuery(feature).addClass('disable')

  jQuery(document).on "click", ".slider", (e) ->
    e.preventDefault()
    target = jQuery(this).attr("href")
    jQuery("body").animate
      scrollTop: jQuery(target).offset().top - 90
    , 600

jQuery ->
  if jQuery("#hide-guide-sidebar").length
    jQuery(document).on 'click', '#hide-guide-sidebar', ->
      hideGuideSidebar()
      false
