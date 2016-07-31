jQuery(function (jQuery) {
  if (matchMedia) {
    var mq = window.matchMedia('(min-width:768px))')
    mq.addListener(WidthChange)
    WidthChange(mq)
  }

  function WidthChange (mq) {
    if (mq.matches) {
      jQuery('.container__products').addClass('flexslider flexslider__products')
      jQuery('.ul__products').addClass('slides')
    }
  }(window.JQuery)
})
