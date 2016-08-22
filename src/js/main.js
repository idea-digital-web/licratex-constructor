import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import flexslider from './vendors/jquery.flexslider.js'
import tipsy from './vendors/jquery.tipsy.js'
import menuDropdown from './lib/menuDropdown'
import addBorderBottom from './lib/addBorderBottom'
import customTipsy from './lib/customTipsy'
import flexsliderPrincipal from './lib/flexsliderPrincipal'
import addFlexsliderProducts from './lib/addFlexsliderProducts'
import flexsliderProducts from './lib/flexsliderProducts'
import addViewDetails from './lib/addViewDetails'
import changueAttr from './lib/changueAttr'
import customStickyNavbar from './lib/customStickyNavbar'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
    modernizr()
    selectivizr()
    flexslider()
    tipsy()
    menuDropdown()
    addBorderBottom()
    customTipsy()
    flexsliderPrincipal()
    addFlexsliderProducts()
    flexsliderProducts()
    addViewDetails()
    changueAttr()
    customStickyNavbar()
  }
})()
