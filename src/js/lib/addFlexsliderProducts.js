jQuery(function (jQuery) {
  const mql3 = window.matchMedia('screen and (min-width: 768px) and (max-width: 1023px)')
  const mql4 = window.matchMedia('screen and (min-width: 1024px)')
  if (mql3.matches) {
    jQuery('.container__products').addClass('flexslider flexslider__three-products')
  } else if (mql4.matches) {
    jQuery('.container__products').removeClass('flexslider flexslider__three-products')
    jQuery('.container__products').addClass('flexslider flexslider__four-products')
  }
})
