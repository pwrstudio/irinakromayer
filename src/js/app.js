(function () {
  'use strict'
  var $ = require('jquery')
  $(function () {
    var images = $('.main')
    $(images[Math.floor(Math.random() * images.length)]).show()
    var position = $('.logo').position()
    $('.image-background, .video-background, .color-background')
      .height(($('.logo').outerHeight() - 4))
      .width(($('.logo').width() - 4))
      .css('top', position.top + 2)
      .css('left', position.left + 2)
  })
}())
