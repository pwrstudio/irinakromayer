(function () {
  const $ = require('jquery')
  // const Modernizr = require("modernizr")
  $(function () {
    const images = $('.main')
    // Modernizr.on('testname', function( result ) {
    //   if (!result) {
    //     $('body').addClass('no-touch')
    //     console.log('not touch device');
    //   }
    // })
    $(images[Math.floor(Math.random() * images.length)]).show()
    const position = $('.logo-normal').position()
    $('.image-background, .video-background, .color-background, .logo-link')
      .height(($('.logo-normal').outerHeight() - 4))
      .width(($('.logo-normal').width() - 4))
      .css('top', position.top + 2)
      .css('left', position.left + 2)
  })
}())
