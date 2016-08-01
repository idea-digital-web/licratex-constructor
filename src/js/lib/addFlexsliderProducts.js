jQuery(function (jQuery) {
  const mql = window.matchMedia('screen and (min-width: 768px')
  if (mql.matches) {
    jQuery('.container__products').addClass('flexslider flexslider__products')
    jQuery('.ul__products').addClass('slides')
  }
})
