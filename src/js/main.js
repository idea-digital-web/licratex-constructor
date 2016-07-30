import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import menuDropdown from './lib/menuDropdown'
import components from './lib/components'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
    modernizr()
    selectivizr()
    menuDropdown()
    components()
  }
})()
