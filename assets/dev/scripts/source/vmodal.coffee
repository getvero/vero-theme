class Vmodal
  constructor: (element, link) ->
    this.$body = jQuery(document.body)
    this.$element = jQuery(element)
    this.$link = jQuery(link)
    this.isRemote = this.$link.hasClass('vmodal-remote')
    this.isShown = null
    this.$backdrop = null

  load: ->
    @toggleModal()
    jQuery(document).trigger("vmodal:loaded")

  toggleModal: ->
    if this.isShown then @hide() else @show()

  hide: ->
    that = this
    this.isShown = false

    this.$body.removeClass('vmodal-open')
    this.$element.fadeOut()
    if this.isRemote
      that.$element.html('')
    this.$backdrop.animate
      'opacity': '0'
      , 400
      , ->
        that.$backdrop.remove()

    this.toggleListener()
    jQuery(document).trigger("vmodal:hide")

  show: ->
    that = this
    this.isShown = true

    if this.isRemote
      $.get this.$link.attr('href'), (data) ->
        that.$element.html(data)

    this.$body.addClass('vmodal-open')
    this.$backdrop = jQuery('<div class="vmodal-backdrop no-show" />').appendTo(this.$body)
    this.$backdrop.animate
      'opacity': '.8'
    this.$element.fadeIn()

    this.toggleListener()
    jQuery(document).trigger("vmodal:show")

  toggleListener: ->
    that = this
    if this.isShown
      this.$body.on 'keyup', (e) ->
        if e.keyCode == 27 then that.hide() else null
      this.$element.on 'click', '.close, .vmodal-close', (e) ->
        that.hide()
        false
      this.$element.on 'click', (e) ->
        if e.target == that.$element[0]
          that.hide()
    else
      this.$body.off 'keyup'
      this.$element.off 'click'


jQuery ->
  jQuery(document).on 'click', '[data-toggle=vmodal]', (e) ->
    e.preventDefault()
    modal = new Vmodal(jQuery(this).data('target'), this)
    modal.load()