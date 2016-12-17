(function () {
  'use strict'
  const $ = require('jquery')
  $(function () {
    const images = $('.main')
    $(images[Math.floor(Math.random() * images.length)]).show()
    const position = $('.logo-normal').position()
    $('.image-background, .video-background, .color-background, .logo-link')
      .height(($('.logo-normal').outerHeight() - 4))
      .width(($('.logo-normal').width() - 4))
      .css('top', position.top + 2)
      .css('left', position.left + 2)
  })
}())
